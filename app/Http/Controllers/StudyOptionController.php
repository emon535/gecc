<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class StudyOptionController extends Controller
{
    public function index(){

        $data['get_all'] = DB::table('tbl_study_option')->get();
        return view('admin.study_option.view', $data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.study_option.add', $data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'course_name'=>'required',
            'description'=>'required',
        ]);

        $imageUrl='';
        if(!empty($request->file('image'))){
            $Image = $request->file('image');
            $name = 'course-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_study_option')
            ->insert([
                'course_name'=>$request->course_name,
                'description'=>$request->description,
                'total_student'=>$request->total_student,
                'course_duration'=>$request->course_duration,
                'course_credit'=>$request->course_credit,
                'total_semester'=>$request->total_semester,
                'image'=>$imageUrl,
            ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('add-study-option');
        }else{
            setMessage("message","danger","Failed");
            return redirect('add-study-option');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('tbl_study_option')->find($id);
        return view('admin.study_option.add', $data);
    }

    public function update(Request $request){

         $this->validate($request,[
            'course_name'=>'required',
            'description'=>'required',
        ]);

        $oldImg = DB::table('tbl_study_option')->find($request->id);
        $Image = $request->file('image');
    
        if(isset($Image)){

            $preImg = $oldImg->image;
            if($preImg){
                unlink($preImg);
            }
            $name = 'course-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_study_option')
                ->where('id',$request->id)
                ->update([
                    'course_name'=>$request->course_name,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                    'image'=>$imageUrl,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-study-option/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-study-option/'.$request->id);
            }

        }else{

            $result = DB::table('tbl_study_option')
                ->where('id',$request->id)
                ->update([
                    'course_name'=>$request->course_name,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                ]);

            if($result){
                setMessage("message","success","Successful Without updating image");
                return redirect('edit-study-option/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-study-option/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $Old = DB::table('tbl_study_option')->find($id);
        $preImg = $Old->image;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_study_option')->where('id', '=', $id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return redirect('manage-study-option');
        }else{
            setMessage("message","danger","Failed");
            return redirect('manage-study-option');
        }
    }
}
