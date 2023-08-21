<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AboutController extends Controller
{
    public function index(){

    	$data['about'] = DB::table('tbl_about')->get();
    	return view('admin.about.manage_about',$data);
    }

    public function edit($id){

    	$single = DB::table('tbl_about')->find($id);
    	return view('admin.about.edit',['single'=>$single]);
    }

    public function update(Request $request){
       
        $about = DB::table('tbl_about')->find($request->id);
        $aboutImage = $request->file('photo');

        if($aboutImage){

            $preImg = $about->photo;
            unlink($preImg);
            $name = $aboutImage->getClientOriginalName();
            $uploadPath = 'public/about/';
            $aboutImage->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_about')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'photo'=>$imageUrl
                ]);

            if($result){
                Session::put('message','Updated !!!');
                return redirect('edit-about/'.$request->id);
            }else{
                Session::put('message','Failed to update !!!');
                return redirect('edit-about/'.$request->id);
            }
            
        }else{

            $result = DB::table('tbl_about')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'description'=>$request->description
                ]);

            if($result){
                Session::put('message','Updated !!!');
                return redirect('edit-about/'.$request->id);
            }else{
                Session::put('message','Failed to update !!!');
                return redirect('edit-about/'.$request->id);
            }
        }
        
    }//update


}//AboutController
