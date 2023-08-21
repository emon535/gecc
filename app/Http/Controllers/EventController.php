<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

    	$data['event'] = DB::table('tbl_event')->orderby('id','DESC')->get();
    	return view('admin.event.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.event.add', $data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'time'=>'required',
            'date'=>'required',
            'location'=>'required',
            'image'=>'required',
            'details'=>'required',
        ]);

        $imageUrl='';
        if(!empty($request->file('image'))){
            $Img = $request->file('image');
            $name = $Img->getClientOriginalName();
            $uploadPath = 'public/eventImage/';
            $Img->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_event')
                ->insert([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                    'image'=>($imageUrl) ? $imageUrl : '',
                ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('add-event');
        }else{
            setMessage("message","danger","Failed");
            return redirect('add-event');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('tbl_event')->find($id);
        return view('admin.event.add', $data);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'time'=>'required',
            'date'=>'required',
            'location'=>'required',
            'details'=>'required',
        ]);

        $eventByID = DB::table('tbl_event')->find($request->id);
        $Image = $request->file('image');
    
        if($Image){
            $preImg = $eventByID->image;
            // if($preImg){
            //     unlink($preImg);
            // }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/eventImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_event')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                    'image'=>$imageUrl,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-event/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-event/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_event')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-event/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-event/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $event = DB::table('tbl_event')->find($id);
        $preImg = $event->image;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_event')->where('id', '=', $id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return redirect('manage-event');
        }else{
            setMessage("message","danger","Failed");
            return redirect('manage-event');
        }
    }


    public function show($id){
        $data['single'] = DB::table('tbl_event')->find($id);
        $data['faqs'] = DB::table('faqs')->where('event_id',$id)->get();
        return view('admin.event.show', $data);
    }

    public function store_faq(Request $request)
    {
        $this->validate($request,[
            'event_id'=>'required',
            'question'=>'required',
            'answer'=>'required',
        ]);
        $result = DB::table('faqs')
                ->insert([
                    'event_id'=>$request->event_id,
                    'question'=>$request->question,
                    'answer'=>$request->answer,
                ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('show-event/'.$request->event_id);
        }else{
            setMessage("message","danger","Failed");
            return redirect('show-event/'.$request->event_id);
        }
    }

    public function update_faq(Request $request)
    {
        $this->validate($request,[
            'id'=>'required',
            'event_id'=>'required',
            'question'=>'required',
            'answer'=>'required',
        ]);
        $result = DB::table('faqs')->where('id',$request->id)
                ->update([
                    'event_id'=>$request->event_id,
                    'question'=>$request->question,
                    'answer'=>$request->answer,
                ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('show-event/'.$request->event_id);
        }else{
            setMessage("message","danger","Failed");
            return redirect('show-event/'.$request->event_id);
        }
    }

    public function delete_faq($id)
    {
        
        $result = DB::table('faqs')->where('id',$id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return back();
        }else{
            setMessage("message","danger","Failed");
            return back();
        }
    }


}//eventController
