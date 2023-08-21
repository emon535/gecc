<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class NewsController extends Controller
{
    public function index(){

    	$data['news'] = DB::table('tbl_news')->get();
    	return view('admin.news.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.news.add', $data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'time'=>'required',
            'date'=>'required',
            'location'=>'required',
            'image'=>'required',
            'details'=>'required',
        ]);

        $imageUrl='';
        if(!empty($request->file('image'))){
            $Img = $request->file('image');
            $name = $Img->getClientOriginalName();
            $uploadPath = 'public/newsImage/';
            $Img->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_news')
                ->insert([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                    'image'=>($imageUrl) ? $imageUrl : '',
                ]);

        if($result){
            setMessage("message","success","Successful");
            return redirect('add-news');
        }else{
            setMessage("message","danger","Failed");
            return redirect('add-news');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
    	$data['single'] = DB::table('tbl_news')->find($id);
    	return view('admin.news.add', $data);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'time'=>'required',
            'date'=>'required',
            'location'=>'required',
            'details'=>'required',
        ]);

        $newsByID = DB::table('tbl_news')->find($request->id);
        $Image = $request->file('image');
    
        if($Image){
            $preImg = $newsByID->image;
            if($preImg){
                unlink($preImg);
            }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/newsImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_news')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                    'image'=>$imageUrl,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-news/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-news/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_news')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'time'=>$request->time,
                    'date'=>$request->date,
                    'location'=>$request->location,
                    'details'=>$request->details,
                ]);

            if($result){
                setMessage("message","success","Successful");
                return redirect('edit-news/'.$request->id);
            }else{
                setMessage("message","danger","Failed");
                return redirect('edit-news/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $news = DB::table('tbl_news')->find($id);
        $preImg = $news->image;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_news')->where('id', '=', $id)->delete();
        if($result){
            setMessage("message","success","Successful");
            return redirect('manage-news');
        }else{
            setMessage("message","danger","Failed");
            return redirect('manage-news');
        }
    }


}//NewsController
