<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Admin\Booking\BookingController;

Route::get("/clear", function () {
	Artisan::call("config:clear");
	Artisan::call("cache:clear");
	return 'Done';
});

Route::get("/migrate-db", function () {
	Artisan::call("migrate");
	return 'DB migrated';
});

/*---Login Credintial---*/
Route::get('admin',                'Auth\LoginController@login');
Route::post('checkAuthentication', 'Auth\LoginController@authenticate');
Route::get('logout',               'Auth\LoginController@logout');
Route::get('resetPassword',        'Auth\LoginController@resetPassword');

/*---Web---*/
Route::get('/',           		  'WebController@index');
Route::get('login',           	  'WebController@login')->name('login');
Route::get('course-finder/{id?}',       'WebController@courseFinder')->name('course-finder');
Route::get('apply',               'WebController@apply')->name('apply');
Route::get('course-details',      'WebController@courseDetails')->name('course-details');
Route::get('uni-details',         'WebController@uniDetails')->name('uni-details');
Route::get('who',           	  'WebController@who')->name('who');
Route::get('mission',             'WebController@mission')->name('mission');
Route::get('history',             'WebController@history')->name('history');
Route::get('people',           	  'WebController@people')->name('people');
Route::get('career',           	  [CareerController::class, 'index'])->name('career');
Route::get('success',             'WebController@success')->name('success');
Route::get('study',               'WebController@study')->name('study');
Route::get('prere',               'WebController@prere')->name('prere');
Route::get('step',                'WebController@step')->name('step');
Route::get('video',               'WebController@video')->name('video');
Route::get('partner',             'WebController@partner')->name('partner');
Route::get('guide',               'WebController@guide')->name('guide');
Route::get('cv',                  'WebController@cv')->name('cv');
Route::get('news',                'WebController@news')->name('news');
Route::get('news-details',        'WebController@newsDetails')->name('news-details');
Route::get('events',              'WebController@events')->name('events');
Route::get('hide-events-button',  'WebController@hideEventsButton')->name('hide-events-button');
Route::get('event-details',       'WebController@eventDetails')->name('event-details');
Route::post('event-registration',       'WebController@event_registration')->name('event-registration');
Route::post('get-event',          'WebController@getEvent')->name('get-event');
Route::get('gallery',             'WebController@gallery')->name('gallery');
Route::get('gallery-details',     'WebController@galleryDetails')->name('gallery-details');
Route::get('contact',  		  	  'WebController@contact')->name('contact');
Route::get('con-dh',  		  	  'WebController@con_dh')->name('con-dh');
Route::get('con-pak',  		  	  'WebController@con_pak')->name('con-pak');
Route::get('con-ind',  		  	  'WebController@con_ind')->name('con-ind');
Route::get('con-moro',  	  	  'WebController@con_moro')->name('con-moro');
Route::get('con-nig',  		  	  'WebController@con_nig')->name('con-nig');
Route::get('accreditation/{id}',  		  'WebController@accreditation')->name('accreditation');
Route::get('appointment/{id}',  		  'WebController@appoinment')->name('appointment');
Route::post('store-appoinment',  		  'WebController@store_appoinment')->name('store-appoinment');
Route::post('sendContactMail',    'WebController@sendContactMail')->name('sendContactMail');
Route::post('sendEmeetingMail',   'WebController@sendEmeetingMail')->name('sendEmeetingMail');
Route::post('sendConsultationMail',   'WebController@sendConsultationMail')->name('sendConsultationMail');
Route::post('sendApplyMail',      'WebController@sendApplyMail')->name('sendApplyMail');

Route::post('save-contact',  	  'WebController@storeContact');
Route::post('stripe-payment',  	  'PaymentController@store');


Route::as('website.')->group(function () {
	/* Blogs */
	Route::get('blogs', 'Website\BlogController@index')->name('blogs.index');
	Route::get('blogs/{slug}/show', 'Website\BlogController@show')->name('blogs.show');
	/* FAQs */
	Route::get('faqs', 'Website\FAQController@index')->name('faqs.index');
});

/*---Student Controller---*/
Route::post('save-student',    	'StudentController@index')->name('save-student');
Route::get('user-logout',    	'StudentController@logout')->name('user-logout');
Route::post('checkCredintial',  'StudentController@checkCredintial')->name('checkCredintial');
// Route::post('save-payment',    	'StudentController@savePayment');
// Route::get('payment-confirm',  	'StudentController@confirm');


/*---Admin---*/
Route::group(['middleware' => 'checkAuthentication'], function () {

	Route::get('/dashboard',      		   'AdminController@index');
	Route::get('student-list',    		   'AdminController@getStudent');
	Route::get('student-details', 		   'AdminController@studentDetails');
	Route::get('contact-msg', 		       'AdminController@contactMessage');
	Route::get('manage-office-address',    'AdminController@officeAddress');
	Route::get('add-office-address', 'AdminController@addAddress');
	Route::post('store-office-address', 'AdminController@storeAddress');
	Route::get('edit-office-address/{id}', 'AdminController@editAddress');
	Route::post('update-office-address',   'AdminController@updateAddress');

	Route::get('manage-slide',      	   'SliderController@index');
	Route::get('add-slide',    		       'SliderController@add');
	Route::post('save-slide', 		       'SliderController@store');
	Route::get('edit-slide/{id}', 		   'SliderController@edit');
	Route::post('update-slide', 		   'SliderController@update');
	Route::get('delete-slide/{id}', 	   'SliderController@delete');

	Route::get('manage-university',        'UniversityController@index');
	Route::get('add-university',    	   'UniversityController@add');
	Route::post('save-university', 		   'UniversityController@store');
	Route::get('edit-university/{id}', 	   'UniversityController@edit');
	Route::post('update-university', 	   'UniversityController@update');
	Route::get('delete-university/{id}',   'UniversityController@delete');

	Route::get('manage-testimonial', 	   'TestimonialController@index');
	Route::get('add-testimonial', 		   'TestimonialController@add');
	Route::post('save-testimonial', 	   'TestimonialController@store');
	Route::get('edit-testimonial/{id}',    'TestimonialController@edit');
	Route::post('update-testimonial',      'TestimonialController@update');
	Route::get('delete-testimonial/{id}',  'TestimonialController@delete');

	Route::get('manage-news', 		 'NewsController@index');
	Route::get('add-news', 		     'NewsController@add');
	Route::post('save-news', 		 'NewsController@store');
	Route::get('edit-news/{id}',     'NewsController@edit');
	Route::post('update-news',       'NewsController@update');
	Route::get('delete-news/{id}',   'NewsController@delete');

	Route::get('manage-event', 		 'EventController@index');
	Route::get('add-event', 		 'EventController@add');
	Route::post('save-event', 		 'EventController@store');
	Route::get('edit-event/{id}',    'EventController@edit');
	Route::post('update-event',      'EventController@update');
	Route::get('delete-event/{id}',  'EventController@delete');

	Route::get('show-event/{id}', 		 'EventController@show');
	Route::post('save-faq', 		 'EventController@store_faq');
	Route::post('update-faq',      'EventController@update_faq');
	Route::get('delete-faq/{id}',  'EventController@delete_faq');

	Route::get('manage-album', 		 'AlbumController@index');
	Route::get('add-album', 		 'AlbumController@add');
	Route::post('save-album', 		 'AlbumController@store');
	Route::get('edit-album/{id}', 	 'AlbumController@edit');
	Route::post('update-album',      'AlbumController@update');
	Route::get('delete-album/{id}',  'AlbumController@delete');

	Route::get('manage-gallery', 	  'GalleryController@index');
	Route::get('add-gallery', 		  'GalleryController@add');
	Route::post('save-gallery', 	  'GalleryController@store');
	Route::get('edit-gallery/{id}',   'GalleryController@edit');
	Route::post('update-gallery',     'GalleryController@update');
	Route::get('delete-gallery/{id}', 'GalleryController@delete');

	Route::get('manage-lavel', 	  'LavelController@index');
	Route::get('add-lavel', 		  'LavelController@add');
	Route::post('save-lavel', 		  'LavelController@store');
	Route::get('edit-lavel/{id}', 	  'LavelController@edit');
	Route::post('update-lavel',      'LavelController@update');
	Route::get('delete-lavel/{id}',  'LavelController@delete');

	Route::get('manage-subject', 	  'Subjectcontroller@index');
	Route::get('add-subject', 		  'Subjectcontroller@add');
	Route::post('save-subject', 		  'Subjectcontroller@store');
	Route::get('edit-subject/{id}', 	  'Subjectcontroller@edit');
	Route::post('update-subject',      'Subjectcontroller@update');
	Route::get('delete-subject/{id}',  'Subjectcontroller@delete');

	Route::get('manage-school', 	  'SchoolController@index');
	Route::get('add-school', 		  'SchoolController@add');
	Route::post('save-school', 		  'SchoolController@store');
	Route::get('edit-school/{id}', 	  'SchoolController@edit');
	Route::post('update-school',      'SchoolController@update');
	Route::get('delete-school/{id}',  'SchoolController@delete');


	Route::get('manage-course', 	  'CourseController@index');
	Route::get('add-course', 		  'CourseController@add');
	Route::post('save-course', 		  'CourseController@store');
	Route::get('edit-course/{id}', 	  'CourseController@edit');
	Route::post('update-course',      'CourseController@update');
	Route::get('delete-course/{id}',  'CourseController@delete');

	Route::get('manage-videos', 	  	'VideoController@index');
	Route::get('add-videos', 		'VideoController@add');
	Route::post('save-videos', 		'VideoController@store');
	Route::get('edit-videos/{id}', 	'VideoController@edit');
	Route::post('update-videos',     'VideoController@update');
	Route::get('delete-videos/{id}', 'VideoController@delete');

	Route::get('manage-pages', 	  	'PageController@index');
	Route::get('add-pages', 		'PageController@add');
	Route::post('save-pages', 		'PageController@store');
	Route::get('edit-pages/{id}', 	'PageController@edit');
	Route::post('update-pages',     'PageController@update');
	Route::get('delete-pages/{id}', 'PageController@delete');

	Route::get('glances', 	  	'GlancesController@index');
	Route::post('update-glance', 	  	'GlancesController@update_glance');

	Route::get('manage-people', 	'OurPeopleController@index');
	Route::get('add-people', 		'OurPeopleController@add');
	Route::post('save-people', 		'OurPeopleController@store');
	Route::get('edit-people/{id}', 	'OurPeopleController@edit');
	Route::post('update-people',    'OurPeopleController@update');
	Route::get('delete-people/{id}', 'OurPeopleController@delete')->name('delete-people');

	Route::get('manage-accreditation', 	'AccreditationController@index');
	Route::get('add-accreditation', 		'AccreditationController@add');
	Route::post('save-accreditation', 		'AccreditationController@store');
	Route::get('edit-accreditation/{id}', 	'AccreditationController@edit');
	Route::post('update-accreditation',    'AccreditationController@update');
	Route::get('delete-accreditation/{id}', 'AccreditationController@delete');

	Route::get('manage-prerequisites-counselling', 	   'CommonController@index');
	Route::get('edit-prerequisites-counselling/{id}',  'CommonController@edit');
	Route::post('update-prerequisites-counselling',    'CommonController@update');
	Route::get('delete-prerequisites-counselling/{id}', 'CommonController@delete');

	Route::get('manage-study-option', 	   'StudyOptionController@index');
	Route::get('add-study-option', 		   'StudyOptionController@add');
	Route::post('save-study-option', 	   'StudyOptionController@store');
	Route::get('edit-study-option/{id}',   'StudyOptionController@edit');
	Route::post('update-study-option',     'StudyOptionController@update');
	Route::get('delete-study-option/{id}', 'StudyOptionController@delete');

	Route::get('manage-about', 		'AboutController@index');
	Route::get('edit-about/{id}', 		'AboutController@edit');
	Route::post('update-about',          	'AboutController@update');


	/*---User---*/
	Route::get('manage-user',              'UserController@manageUser');
	Route::get('add-user',                 'UserController@createUser');
	Route::post('save-user',               'UserController@storeUser');
	Route::get('doUserInactive/{user_id}', 'UserController@inactiveUser');
	Route::get('doUserActive/{user_id}',   'UserController@activeUser');
	Route::get('editProfile/{user_id}',    'UserController@editUser');
	Route::post('updateUser',              'UserController@updateUser');
	Route::get('changePassword/{user_id}', 'UserController@changeUserPassword');
	Route::post('updatePassword',          'UserController@updatePassword');
	Route::get('delete-profile/{user_id}', 'UserController@delete_profile');

	/*---Role---*/
	Route::get('addRole',              	'RoleController@createRole');
	Route::post('saveRole',            	'RoleController@storeRole');
	Route::get('editRole/{role_id}',   	'RoleController@editRole');
	Route::post('updateRole',          	'RoleController@updateRole');
	Route::get('deleteRole/{role_id}', 	'RoleController@deleteRole');

	/*---Role Permission---*/
	Route::get('addPermission',                    'RolePermissionController@createPermission');
	Route::get('managePermission',                 'RolePermissionController@managePermission');
	Route::post('savePermission',                  'RolePermissionController@storePermission');
	Route::get('editPermission/{permission_id}',   'RolePermissionController@editPermission');
	Route::post('updatePermission',                'RolePermissionController@updatePermission');
	Route::get('deletePermission/{permission_id}', 'RolePermissionController@deletePermission');
	Route::get('detailsPermission',                'RolePermissionController@viewDetailsPermission');

	Route::prefix('admin')->as('admin.')->group(function () {
		/* Blogs */
		Route::resource('blogs', Admin\Blog\BlogController::class)->parameters([
			'blogs' => 'id'
		]);
		/* FAQs */
		Route::resource('faqs', Admin\FAQ\FrequentlyAskQuestionController::class)->parameters([
			'faqs' => 'id'
		]);

		Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
		Route::get('bookings-export', [BookingController::class, 'export'])->name('bookings.export');

		Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
		Route::post('settings/store', [SettingsController::class, 'store'])->name('settings.store');
	});
});