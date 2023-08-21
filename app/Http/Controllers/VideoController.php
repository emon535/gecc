<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    
    public function index(){

        $data['videos'] = DB::table('videos')->get();
        return view('admin.videos.view', $data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.videos.add', $data);
    }

    public function store(Request $request){

        $result=DB::table('videos')
            ->insert([
                'url'=>$request->url,
                'status'=>$request->status,
            ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('add-videos');
        }else{
            setMessage("message","danger","Failed");
            return redirect('add-videos');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('videos')->find($id);
        return view('admin.videos.add', $data);
    }

    public function update(Request $request){
        
        $result = DB::table('videos')
                ->where('id',$request->id)
                ->update([
                'url'=>$request->url,
                'status'=>$request->status,
            ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('edit-videos/'.$request->id);
        }else{
            setMessage("message","danger","Failed");
            return redirect('edit-videos/'.$request->id);
        }
        
    }//update

    public function delete($id){

        $result = DB::table('videos')->where('id', '=', $id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return redirect('manage-videos');
        }else{
            setMessage("message","danger","Failed");
            return redirect('manage-videos');
        }
    }
}
