<?php

namespace App\Http\Controllers;

use App\Accreditation;
use Illuminate\Http\Request;
use DB;
use Image;

class AccreditationController extends Controller
{
    public function index(){
         $accreditations = DB::table('accreditations')->get();
        return view('admin.accreditation.view',compact('accreditations'));
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.accreditation.add', $data);
    }

    public function store(Request $request){

        $imageUrl='';
        if(!empty($request->file('image'))){
            $Image = $request->file('image');
            $name = 'accreditation-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('accreditations')
                ->insert([
                    'name'=>$request->name,
                    'details'=>$request->details,
                    'status'=>$request->status,
                    'image'=>$imageUrl,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
             return redirect('manage-accreditation');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-accreditation');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('accreditations')->find($id);
        return view('admin.accreditation.add', $data);
    }

    public function update(Request $request){

        $data = DB::table('accreditations')
            ->where('id',$request->id)->first();

        $imageUrl = $data->image;

        if(!empty($request->file('image'))){
            $preImg = $imageUrl;
            if($preImg){
                unlink($preImg); 
            }


            $Image = $request->file('image');
            $name = 'accreditation-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }else{
            $imageUrl = $data->image;
        }

        $result = DB::table('accreditations')
            ->where('id',$request->id)
            ->update([
                'name'=>$request->name,
                'details'=>$request->details,
                'status'=>$request->status,
                'image'=>$imageUrl,
            ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
             return redirect('manage-accreditation');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('edit-accreditation/'.$request->id);
        }
    }

    public function delete($id){

        $data = DB::table('accreditations')->where('id', '=', $id)->first();

        $imageUrl = $data->image;
        if ($imageUrl) {
                unlink($imageUrl); 
        }
        $result = DB::table('accreditations')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-accreditation');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-accreditation');
        }
    }
}
