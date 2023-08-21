<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $data['pages'] = DB::table('pages')->get();
        return view('admin.page.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.page.add', $data);
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

        $result=DB::table('pages')
                ->insert([
                    'title'=>$request->title,
                    'slug'=>\Illuminate\Support\Str::slug($request->title),
                    'content'=>$request->content,
                    'image'=>$imageUrl,
                ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('add-pages');
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-pages');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('pages')->find($id);
        return view('admin.page.add', $data);
    }

    public function update(Request $request){



        $data = DB::table('pages')
            ->where('id',$request->id)->first();

        $imageUrl = $data->image;

        if(!empty($request->file('image'))){
            $preImg = $imageUrl;
            if($preImg){
                unlink($preImg); 
            }


            $Image = $request->file('image');
            $name = 'pages-'.$Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }else{
            $imageUrl = $data->image;
        }

        // $imageUrl;

        $result = DB::table('pages')
            ->where('id',$request->id)
            ->update([
                    'title'=>$request->title,
                    'content'=>$request->content,
                    'image'=>$imageUrl,
            ]);

        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('edit-pages/'.$request->id);
        }else{
            setMessage('message','danger','Failed to Save !!!');
            return redirect('edit-pages/'.$request->id);
        }
        
    }//update

    public function delete($id){

        $data = DB::table('pages')->where('id', '=', $id)->first();

        $imageUrl = $data->image;
        if ($imageUrl) {
                unlink($imageUrl); 
        }
        $result = DB::table('pages')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-pages');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-pages');
        }
    }


}//AboutController
