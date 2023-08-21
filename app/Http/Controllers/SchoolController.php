<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){

        $data['school'] = DB::table('schools')->get();
        return view('admin.school.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        $data['countries'] = DB::table('countries')->get();
        return view('admin.school.add', $data);
    }

    public function store(Request $request){

        $imageUrl='';
        if(!empty($request->file('image'))){
            $Image = $request->file('image');
            $name = 'pages-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('schools')
                ->insert([
                    'name'=>$request->name,
                    'country_id'=>$request->country_id,
                    'image'=>$imageUrl,
                    'details'=>$request->details,
                    'status'=>$request->status,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-school');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-school');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('schools')->find($id);
        return view('admin.school.add', $data);
    }

    public function update(Request $request){


        $data = DB::table('schools')
            ->where('id',$request->id)->first();

        $imageUrl = $data->image;

        if(!empty($request->file('image'))){
            $preImg = $imageUrl;
            // if($preImg){
            //     unlink($preImg); 
            // }


            $Image = $request->file('image');
            $name = 'schools-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }else{
            $imageUrl = $data->image;
        }

        

        $result = DB::table('schools')
            ->where('id',$request->id)
            ->update([
                    'name'=>$request->name,
                    'country_id'=>$request->country_id,
                    'image'=>$imageUrl,
                    'details'=>$request->details,
                    'status'=>$request->status,
                ]);
            //return [$data];

        if($result){
            setMessage('message','success','Save successfully !!!');
             return redirect('manage-school');
        }else{
            setMessage('message','danger','Failed to Save !!!');
             return redirect('manage-school');
        }
        
    }//update

    public function delete($id){

        $result = DB::table('schools')->where('id', '=', $id)->delete();

        $imageUrl = $data->image;
        if ($imageUrl) {
                unlink($imageUrl); 
        }
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-school');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-school');
        }
    }


}//AboutController
