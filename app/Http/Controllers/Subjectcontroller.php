<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class Subjectcontroller extends Controller
{
    public function index(){

        $data['subject'] = DB::table('subjects')->get();
        return view('admin.subject.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.subject.add', $data);
    }

    public function store(Request $request){
        $imageUrl='';
        if(!empty($request->file('image'))){
            $Img = $request->file('image');
            $name = $Img->getClientOriginalName();
            $uploadPath = 'public/eventImage/';
            $Img->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('subjects')
                ->insert([
                    'name'=>$request->name,
                    'image'=>($imageUrl) ? $imageUrl : '',
                    'is_popular'=>$request->is_popular,
                    'details'=>$request->details,
                    'status'=>$request->status,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-subject');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-subject');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('subjects')->find($id);
        return view('admin.subject.add', $data);
    }

    public function update(Request $request){

        $eventByID = DB::table('subjects')->find($request->id);
            $imageUrl = $eventByID->image;
        //return $eventByID;
        $Image = $request->file('image');
    
        // if($Image){
        //     $preImg = $eventByID->image;
        //     // if($preImg){
        //     //     unlink($preImg);
        //     // }
        //     $name = $Image->getClientOriginalName();
        //     $uploadPath = 'public/eventImage/';
        //     $Image->move($uploadPath, $name);
        //     $imageUrl = $uploadPath.$name;
        // }

        $result = DB::table('subjects')
            ->where('id',$request->id)
            ->update([
                'name'=>$request->name,
                'image'=>($imageUrl) ? $imageUrl : '',
                'is_popular'=>$request->is_popular,
                'details'=>$request->details,
                'status'=>$request->status,
            ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
             return redirect('manage-subject');
        }else{
            setMessage('message','danger','Failed to Save !!!');
             return redirect('manage-subject');
        }
        
    }//update

    public function delete($id){

        $result = DB::table('subjects')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-subject');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-subject');
        }
    }


}//AboutController
