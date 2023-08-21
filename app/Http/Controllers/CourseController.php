<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

    	$data['course'] = DB::table('tbl_course')->get();
    	return view('admin.course.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        $data['subjects'] = DB::table('subjects')->get();
        $data['countries'] = DB::table('countries')->get();
        $data['universities'] = DB::table('tbl_university')->get();
        $data['options'] = DB::table('tbl_study_option')->get();
        return view('admin.course.add', $data);
    }

    public function store(Request $request){

        $result=DB::table('tbl_course')
                ->insert([
                'title'=>$request->title,
                'country'=>$request->country,
                'duration'=>$request->duration,
                'fee'=>$request->fee,
                'waiver'=>$request->waiver,
                'details'=>$request->details,
                'duration'=>$request->duration,
                'month'=>$request->month,
                'type'=>$request->type,
                'subject_id'=>$request->subject_id,
                'option_id'=>$request->option_id,
                'university_id'=>$request->university_id,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-course');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-course');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
   // return	[DB::table('tbl_course')->find($id)];
    	$data['single'] = DB::table('tbl_course')->find($id);
        $data['subjects'] = DB::table('subjects')->get();
         $data['countries'] = DB::table('countries')->get();
         $data['universities'] = DB::table('tbl_university')->get();
         $data['options'] = DB::table('tbl_study_option')->get();

    	return view('admin.course.add', $data);
    }

    public function update(Request $request){

        $result = DB::table('tbl_course')
            ->where('id',$request->id)
            ->update([
                'title'=>$request->title,
                'country'=>$request->country,
                'duration'=>$request->duration,
                'fee'=>$request->fee,
                'waiver'=>$request->waiver,
                'details'=>$request->details,
                'duration'=>$request->duration,
                'month'=>$request->month,
                'type'=>$request->type,
                'subject_id'=>$request->subject_id,
                'option_id'=>$request->option_id,
                'university_id'=>$request->university_id,
            ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-course');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('edit-course/'.$request->id);
        }
        
    }//update

    public function delete($id){

        $result = DB::table('tbl_course')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-course');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-course');
        }
    }


}//AboutController
