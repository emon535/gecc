<?php

namespace App\Http\Controllers;

use Artisan;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;

class WebController extends Controller
{
	public function index(Request $request)
	{

		//  return DB::table('subjects')->get();

		//Artisan::call("migrate");
		// Artisan::call("config:clear");
		// Artisan::call("cache:clear");
		// Artisan::call("route:clear");
		// Artisan::call("view:clear");
		$data['news'] = DB::table('tbl_news')->get();
		$data['events'] = DB::table('tbl_event')->orderBy('date', 'DESC')->orderBy('time', 'DESC')->get();
		$data['testimonial'] = DB::table('tbl_testimonial')->get();
		$data['slider'] = DB::table('tbl_slider')->get();
		$data['universities'] = DB::table('tbl_university')->orderby('id', 'DESC')->get();
		$data['subjects'] = DB::table('subjects')->orderby('id', 'DESC')->get();
		$data['p_subjects'] = DB::table('subjects')->where('is_popular', 1)->orderby('id', 'DESC')->get();
		$data['countries'] = DB::table('countries')->get();
		$data['options'] = DB::table('tbl_study_option')->get();
		$data['accreditations'] = DB::table('accreditations')->get();
		$data['videos'] = DB::table('videos')->get();
		$data['glance'] = DB::table('glances')->first();

		return view('website.home', $data);
	}

	public function login()
	{

		return view('website.login-register');
	}

	public function courseFinder(Request $request, $id = null)
	{
		//return $request;
		$data['q'] = $request;

		$data['universities'] = DB::table('tbl_university')->orderby('id', 'DESC')->get();
		$data['subjects'] = DB::table('subjects')->orderby('id', 'DESC')->get();
		$data['countries'] = DB::table('countries')->get();
		$data['options'] = DB::table('tbl_study_option')->get();


		if ($request->option_id != null and $request->option_id and $request->subject_id and $request->type and $request->university_id) {


			$result = DB::table('tbl_course')
				->join('tbl_university', 'tbl_university.id', '=', 'tbl_course.university_id')
				->join('subjects', 'subjects.id', '=', 'tbl_course.subject_id')
				->join('countries', 'countries.sortname', '=', 'tbl_course.country')
				->join('tbl_study_option', 'tbl_study_option.id', '=', 'tbl_course.option_id')
				//->where('tbl_course.country',$request->country)
				->where('tbl_course.university_id', $request->university_id)
				->where('tbl_course.type', $request->type)
				->where('tbl_course.subject_id', $request->subject_id)
				->where('tbl_course.option_id', $request->option_id)
				->select('tbl_course.*', 'tbl_university.university_name', 'subjects.name', 'countries.con_name', 'tbl_study_option.course_name')
				->get();
			//return $result;
		} elseif ($id != null) {

			$result = DB::table('tbl_course')
				->join('tbl_university', 'tbl_university.id', '=', 'tbl_course.university_id')
				->join('subjects', 'subjects.id', '=', 'tbl_course.subject_id')
				->join('countries', 'countries.sortname', '=', 'tbl_course.country')
				->join('tbl_study_option', 'tbl_study_option.id', '=', 'tbl_course.option_id')
				->select('tbl_course.*', 'tbl_university.university_name', 'subjects.name', 'countries.con_name', 'tbl_study_option.course_name')
				->where('subjects.id', $id)
				->get();
		} else {
			$result = DB::table('tbl_course')
				->join('tbl_university', 'tbl_university.id', '=', 'tbl_course.university_id')
				->join('subjects', 'subjects.id', '=', 'tbl_course.subject_id')
				->join('countries', 'countries.sortname', '=', 'tbl_course.country')
				->join('tbl_study_option', 'tbl_study_option.id', '=', 'tbl_course.option_id')
				->select('tbl_course.*', 'tbl_university.university_name', 'subjects.name', 'countries.con_name', 'tbl_study_option.course_name')
				->get();
		}

		$data['result'] = $result;
		return view('website.course-finder', $data);
	}

	public function courseDetails()
	{
		$id = request()->input('id');
		$data['single'] = DB::table('tbl_study_option')->where('id', $id)->first();
		$data['study_option'] = DB::table('tbl_study_option')->latest()->limit(6)->get();
		return view('website.course-details', $data);
	}

	public function uniDetails()
	{
		$id = request()->input('id');
		$data['single'] = DB::table('tbl_university')->where('id', $id)->first();
		$data['study_option'] = DB::table('tbl_study_option')->latest()->limit(5)->get();
		$data['events'] = DB::table('tbl_event')->orderby('id', 'DESC')->limit(3)->get();
		return view('website.uni-details', $data);
	}

	public function events(Request $request)
	{
		$events = DB::table('tbl_event')
			->orderBy('date', 'DESC')->orderBy('time', 'DESC');

		if ($request->upcoming_events) {
			$events->where(function ($q) {
				$q->whereDate('date', '>', Carbon::now()->format('Y-m-d'))
					->orWhere(function ($iq) {
						$iq->whereDate('date', '=', Carbon::now()->format('Y-m-d'))
							->whereTime('time', '>=', Carbon::now()->format('H:i'));
					});
			});
		}

		$data['events'] = $events->get();
		return view('website.events', $data);
	}

	public function hideEventsButton()
	{
		session()->put('hide_events_button', true);
		return redirect()->back();
	}


	public function event_registration(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
		]);

		$event = DB::table('tbl_event')->find($request->event_id);

		$data_array = [];
		$data_array['first_name'] = $request->name;
		$data_array['email_address'] = $request->email;
		$data_array['phone_number'] = $request->phone;
		$data_array['qualification'] = $request->qualification;
		$data_array['course_in_interest'] = $request->course;
		$data_array['certificate'] = $request->english_score;
		$data_array['booking_type'] = 2;
		$data_array['event_id'] = $event->id;

		$booking = storeBooking($data_array);

		if (settings('email_for_event_registration')) {
			$data = array(
				'title' => $event->title,
				'course' => $request->course,
				'qualification' => $request->qualification,
				'english_score' => $request->english_score,
				'name' => $request->name,
				'fromEmail' => $request->email,
				'subject' => $request->sub,
				'toEmail' => 'info@gecconsultant.co.uk',
			);

			Mail::send('emails.event_registration', $data, function ($message) use ($data) {
				$message->from($data['fromEmail'], $data['name']);
				$message->to($data['toEmail'])->subject('New Event Registration');
			});
		}
		setMessage('message', 'success', 'Registration successfull');
		return redirect('events');
	} //sendContactMail

	public function eventDetails()
	{
		$id = request()->input('id');
		$data['single'] = DB::table('tbl_event')->where('id', $id)->first();
		$data['faqs'] = DB::table('faqs')->where('event_id', $id)->get();
		return view('website.event-details', $data);
	}

	public function getEvent(Request $req)
	{

		$date = date("Y-m-d", strtotime($req->input('date')));
		$data['search'] = DB::table('tbl_event')->where('date', $date)->get();
		return view('website.events', $data);
	}

	public function news()
	{

		$data['news'] = DB::table('tbl_news')->get();
		return view('website.news', $data);
	}

	public function newsDetails()
	{
		$id = request()->input('id');
		$data['single'] = DB::table('tbl_news')->where('id', $id)->first();
		return view('website.news-details', $data);
	}

	public function apply()
	{
		$data = [];
		$data['applied_subject'] = request()->input('applied_subject');
		$stdID = Session::get('studentID');
		if (isset($stdID)) {
			$data['std_info'] = DB::table('students')->where('id', $stdID)->first();
			return view('website.apply', $data);
		} else {
			return view('website.login-register');
		}
	}

	public function accreditation($id)
	{
		$data['accreditation'] = DB::table('accreditations')->find($id);
		$data['events'] = DB::table('tbl_event')->get();
		return view('website.accreditation', $data);
	}
	public function appoinment($id)
	{
		$data['people'] = DB::table('our_people')->find($id);
		return view('website.appointment', $data);
	}

	public function who()
	{

		$data['about'] = DB::table('tbl_about')->first();
		return view('website.who', $data);
	}
	public function mission()
	{

		$data['about'] = DB::table('tbl_about')->first();
		return view('website.mission', $data);
	}
	public function history()
	{

		$data['about'] = DB::table('tbl_about')->first();
		return view('website.history', $data);
	}
	public function people()
	{

		$data['about'] = DB::table('tbl_about')->first();
		$data['peoples'] = DB::table('our_people')->get();
		return view('website.people', $data);
	}
	public function success()
	{

		$data['testimonial'] = DB::table('tbl_testimonial')->get();
		return view('website.success', $data);
	}

	public function study()
	{

		$data['study_option'] = DB::table('tbl_study_option')->get();
		return view('website.study', $data);
	}
	public function prere()
	{
		//$data['prerequisites'] = DB::table('tbl_prerequisites_counselling')->where('type', 'Prerequisites')->first();
		$data['page'] = DB::table('pages')->where('slug', 'prerequisites_to_study_abroad')->first();
		return view('website.prere', $data);
	}
	public function step()
	{

		$data['about'] = DB::table('tbl_about')->first();
		return view('website.step', $data);
	}
	public function video()
	{
		//$data['Counselling'] = DB::table('tbl_prerequisites_counselling')->where('type', 'Counselling')->first();
		$data['page'] = DB::table('pages')->where('slug', 'free_online_video_counselling')->first();
		return view('website.video', $data);
	}

	public function partner()
	{

		$data['university'] = DB::table('tbl_university')->get();
		return view('website.partner', $data);
	}
	public function guide()
	{

		//$data['about'] = DB::table('tbl_about')->first();

		$data['page'] = DB::table('pages')->where('slug', 'career_guidance')->first();
		return view('website.guide', $data);
	}
	public function cv()
	{

		//$data['about'] = DB::table('tbl_about')->first();
		$data['page'] = DB::table('pages')->where('slug', 'cv_guidance')->first();
		return view('website.cv', $data);
	}

	public function gallery()
	{

		$data['album'] = DB::table('tbl_album')->get();
		return view('website.gallery', $data);
	}

	public function galleryDetails($id = 1)
	{
		$id = request()->input('id');
		$data['gallery'] = DB::table('tbl_gallery')->where('album_id', $id)->get();

		$data['album'] = DB::table('tbl_album')->where('id', $id)->first();
		return view('website.gallery_in', $data);
	}

	public function contact()
	{
		// $data['single'] = DB::table('tbl_office_address')->where('id', 1)->first();
		return view('website.contact');
	}

	public function con_dh()
	{
		$data['single'] = DB::table('tbl_office_address')->where('id', 2)->first();
		return view('website.con-dh', $data);
	}
	public function con_pak()
	{
		$data['single'] = DB::table('tbl_office_address')->where('id', 3)->first();
		return view('website.con-pak', $data);
	}
	public function con_ind()
	{
		$data['single'] = DB::table('tbl_office_address')->where('id', 4)->first();
		return view('website.con-ind', $data);
	}

	public function con_moro()
	{
		$data['single'] = DB::table('tbl_office_address')->where('id', 5)->first();
		return view('website.con-moro', $data);
	}

	public function con_nig()
	{
		$data['single'] = DB::table('tbl_office_address')->where('id', 6)->first();
		return view('website.con-nig', $data);
	}

	public function store_appoinment(Request $request)
	{
		$this->validate($request, [
			'people_id' => 'required',
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'sub' => 'required',
		]);
		//return $request;

		$people = DB::table('our_people')->find($request->people_id);

		$data = array(
			'people_name' => $people->name,
			'people_email' => $people->email,
			'people_phone' => $people->phone,
			'people_designation' => $people->designation,
			'people_nationality' => $people->nationality,
			'name' => $request->name,
			'fromEmail' => $request->email,
			'subject' => $request->sub,
			'toEmail' => 'info@gecconsultant.co.uk',
		);

		Mail::send('emails.our_people', $data, function ($message) use ($data) {
			$message->from($data['fromEmail'], $data['name']);
			$message->to($data['toEmail'])->subject($data['subject']);
		});

		setMessage('message', 'success', 'Email has been send successfully !!!');
		return redirect('people');
	} //sendContactMail

	public function sendContactMail(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'fromEmail' => 'required',
			'subject' => 'required',
			'message' => 'required',
		]);

		$data = array(
			'name' => $request->name,
			'fromEmail' => $request->fromEmail,
			'subject' => $request->subject,
			'toEmail' => 'info@gecconsultant.co.uk',
			'bodymessage' => $request->message
		);

		Mail::send('emails.contact_mail', $data, function ($message) use ($data) {
			$message->from($data['fromEmail'], $data['name']);
			$message->to($data['toEmail'])->subject($data['subject']);
		});

		setMessage('message', 'success', 'Email has been send successfully !!!');
		return redirect('contact');
	} //sendContactMail

	public function sendEmeetingMail(Request $request)
	{

		$this->validate($request, [
			'name' => 'required',
			'fromEmail' => 'required',
			'phone' => 'required',
			'qualification' => 'required',
			'location' => 'required',
		]);

		$data_array = [];
		$data_array['first_name'] = $request->name;
		$data_array['email_address'] = $request->fromEmail;
		$data_array['phone_number'] = $request->phone;
		$data_array['qualification'] = $request->qualification;
		$data_array['desire_location'] = $request->location;
		$data_array['booking_type'] = 1;

		$booking = storeBooking($data_array);

		if (settings('email_for_e_meeting')) {
			$data = array(
				'name' => $request->name,
				'phone' => $request->phone,
				'fromEmail' => $request->fromEmail,
				'qualification' => $request->qualification,
				'location' => $request->location,
				'toEmail' => 'info@gecconsultant.co.uk',
			);

			Mail::send('emails.e-meeting', $data, function ($message) use ($data) {
				$message->from($data['fromEmail'], $data['name']);
				$message->to($data['toEmail'])->subject('E-Meeting Form');
			});
		}

		setMessage('message', 'success', 'Email has been send successfully !!!');
		return redirect('/');
	} //sendEmeetingMail

	public function sendConsultationMail(Request $request)
	{

		$this->validate($request, [
			'first_name' => 'required',
			'last_name' => 'required',
			'phone' => 'required',
			'fromEmail' => 'required',
			'bodymessage' => 'required',
		]);

		$data_array = [];
		$data_array['first_name'] = $request->first_name;
		$data_array['last_name'] = $request->last_name;
		$data_array['email_address'] = $request->fromEmail;
		$data_array['phone_number'] = $request->phone;
		$data_array['message'] = $request->bodymessage;
		$data_array['booking_type'] = 3;

		$booking = storeBooking($data_array);

		if (settings('email_for_free_consulation')) {
			$data = array(
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'phone' => $request->phone,
				'fromEmail' => $request->fromEmail,
				'bodymessage' => $request->bodymessage,
				'toEmail' => 'info@gecconsultant.co.uk',
			);

			Mail::send('emails.consultation', $data, function ($message) use ($data) {
				$message->from($data['fromEmail'], 'Consultation Form');
				$message->to($data['toEmail'])->subject('Consultation Form');
			});
		}

		setMessage('message', 'success', 'Email has been send successfully !!!');
		return redirect('/');
	} //sendConsultationMail

	public function sendApplyMail(Request $request)
	{

		$this->validate($request, [
			'name' => 'required',
			'applied_subject' => 'required',
			'phone' => 'required',
			'fromEmail' => 'required',
		]);

		$data = array(
			'name' => $request->name,
			'phone' => $request->phone,
			'fromEmail' => $request->fromEmail,
			'applied_subject' => $request->applied_subject,
			'toEmail' => 'info@gecconsultant.co.uk',
		);

		Mail::send('emails.apply', $data, function ($message) use ($data) {
			$message->from($data['fromEmail'], 'Apply Form');
			$message->to($data['toEmail'])->subject('Apply Form');
		});

		setMessage('message', 'success', 'Email has been send successfully !!!');
		return redirect('/');
	} //sendApplyMail

	public function storeContact(Request $request)
	{

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'message' => 'required',
		]);

		$result = DB::table('tbl_contact')
			->insert([
				'name' => $request->name,
				'email' => $request->email,
				'phone' => $request->phone,
				'message' => $request->message
			]);

		if ($result) {

			echo '<script> alert("Your message has been sent"); </script>';
			return view('website.contact');
		} else {

			echo '<script> alert("Failed to sent"); </script>';
			return view('website.contact');
		}
	}
}//WebController