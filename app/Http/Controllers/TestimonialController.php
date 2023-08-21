<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){

    	$data['testimonial'] = DB::table('tbl_testimonial')->get();
    	return view('admin.testimonial.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.testimonial.add', $data);
    }

    public function store(Request $request){

        $imageUrl='';
        if(!empty($request->file('photo'))){
            $Image = $request->file('photo');
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/testimonial/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_testimonial')
                ->insert([
                    'name'=>$request->name,
                    'university'=>$request->university,
                    'details'=>$request->details,
                    'photo'=>($imageUrl) ? $imageUrl : '',
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('add-testimonial');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-testimonial');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
    	$data['single'] = DB::table('tbl_testimonial')->find($id);
    	return view('admin.testimonial.add', $data);
    }

    public function update(Request $request){

        $testimonial = DB::table('tbl_testimonial')->find($request->id);
        $Image = $request->file('photo');
    
        if($Image){

            $preImg = $testimonial->photo;
            if($preImg){
                unlink($preImg);
            }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/testimonial/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_testimonial')
                ->where('id',$request->id)
                ->update([
                    'name'=>$request->name,
                    'university'=>$request->university,
                    'details'=>$request->details,
                    'photo'=>$imageUrl,
                ]);

            if($result){
                setMessage('message','success','Save successfully !!!');
                return redirect('edit-testimonial/'.$request->id);
            }else{
                setMessage('message','danger','Failed to Save !!!');
                return redirect('edit-testimonial/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_testimonial')
                ->where('id',$request->id)
                ->update([
                    'name'=>$request->name,
                    'university'=>$request->university,
                    'details'=>$request->details,
                ]);

            if($result){
                setMessage('message','success','Save successfully !!!');
                return redirect('edit-testimonial/'.$request->id);
            }else{
                setMessage('message','danger','Failed to Save !!!');
                return redirect('edit-testimonial/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $testimonial = DB::table('tbl_testimonial')->find($id);
        $preImg = $testimonial->photo;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_testimonial')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-testimonial');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-testimonial');
        }
    }


}//
