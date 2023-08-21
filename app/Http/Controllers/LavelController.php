<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class LavelController extends Controller
{
    public function index(){

        $data['lavel'] = DB::table('lavels')->get();
        return view('admin.lavel.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.lavel.add', $data);
    }

    public function store(Request $request){

        $result=DB::table('lavels')
                ->insert([
                    'name'=>$request->name,
                    'status'=>$request->status,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-lavel');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-lavel');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('lavels')->find($id);
        return view('admin.lavel.add', $data);
    }

    public function update(Request $request){

        $result = DB::table('lavels')
            ->where('id',$request->id)
            ->update([
                'name'=>$request->name,
                'status'=>$request->status,
            ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
             return redirect('manage-lavel');
        }else{
            setMessage('message','danger','Failed to Save !!!');
             return redirect('manage-lavel');
        }
        
    }//update

    public function delete($id){

        $result = DB::table('lavels')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-lavel');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-lavel');
        }
    }


}//AboutController
