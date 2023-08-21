<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(){

        $data['universities'] = DB::table('tbl_university')->orderby('id','DESC')->get();
        return view('admin.university.view', $data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.university.add', $data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'university_name'=>'required',
            'address'=>'required',
            'description'=>'required',
            'logo'=>'required',
        ]);

        $logoImageUrl='';
        $imageUrl='';
        if(!empty($request->file('logo'))){
            $Image = $request->file('logo');
            $name = 'logo-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $logoImageUrl = $uploadPath.$name;
        }
        if(!empty($request->file('image'))){
            $Image = $request->file('image');
            $name = 'uni-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_university')
            ->insert([
                'university_name'=>$request->university_name,
                'address'=>$request->address,
                'description'=>$request->description,
                'total_student'=>$request->total_student,
                'course_duration'=>$request->course_duration,
                'course_credit'=>$request->course_credit,
                'total_semester'=>$request->total_semester,
                'logo'=>$logoImageUrl,
                'image'=>$imageUrl,
            ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('add-university');
        }else{
            setMessage("message","danger","Failed");
            return redirect('add-university');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('tbl_university')->find($id);
        return view('admin.university.add', $data);
    }

    public function update(Request $request){
//        return $request;
         $this->validate($request,[
            'university_name'=>'required',
            'address'=>'required',
            'description'=>'required',
        ]);

        $oldImg = DB::table('tbl_university')->find($request->id);
        $Logo = $request->file('logo');
        $Image = $request->file('image');
    
        if(isset($Logo) && isset($Image)){
            // $preLogo = $oldImg->logo;
            // $preImg = $oldImg->image;
            // if(isset($preLogo) && isset($preImg)){
            //     unlink($preLogo);
            //     unlink($preImg);
            // }
            $name = 'uni-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $logoName = 'logo-'.$Logo->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Logo->move($uploadPath, $logoName);
            $logoImageUrl = $uploadPath.$logoName;

            $result = DB::table('tbl_university')
                ->where('id',$request->id)
                ->update([
                    'university_name'=>$request->university_name,
                    'address'=>$request->address,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                    'logo'=>$logoImageUrl,
                    'image'=>$imageUrl,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-university/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-university/'.$request->id);
            }
    
        }elseif(isset($Logo)){

            $preLogo = $oldImg->logo;
            // if($preLogo){
            //     unlink($preLogo);
            // }
            $logoName = 'logo-'.$Logo->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Logo->move($uploadPath, $logoName);
            $logoImageUrl = $uploadPath.$logoName;

            $result = DB::table('tbl_university')
                ->where('id',$request->id)
                ->update([
                    'university_name'=>$request->university_name,
                    'address'=>$request->address,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                    'logo'=>$logoImageUrl,
                ]);

            if($result){
                setMessage("message","success","Without updating image");
                return redirect('edit-university/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-university/'.$request->id);
            }


        }elseif(isset($Image)){

            $preImg = $oldImg->image;
            // if($preImg){
            //     unlink($preImg);
            // }
            $name = 'uni-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_university')
                ->where('id',$request->id)
                ->update([
                    'university_name'=>$request->university_name,
                    'address'=>$request->address,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                    'image'=>$imageUrl,
                ]);

            if($result){
                setMessage("message","success","Successful without updating Logo");
                return redirect('edit-university/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-university/'.$request->id);
            }

        }else{

            $result = DB::table('tbl_university')
                ->where('id',$request->id)
                ->update([
                    'university_name'=>$request->university_name,
                    'address'=>$request->address,
                    'description'=>$request->description,
                    'total_student'=>$request->total_student,
                    'course_duration'=>$request->course_duration,
                    'course_credit'=>$request->course_credit,
                    'total_semester'=>$request->total_semester,
                ]);

            if($result){
                setMessage("message","success","Successful Without updating any image");
                return redirect('edit-university/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-university/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $Old = DB::table('tbl_university')->find($id);
        $preLogo = $Old->logo;
        $preImg = $Old->image;
        unlink($preLogo);
        unlink($preImg);
        $result = DB::table('tbl_university')->where('id', '=', $id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return redirect('manage-university');
        }else{
            setMessage("message","danger","Failed");
            return redirect('manage-university');
        }
    }

}//UniversityController
