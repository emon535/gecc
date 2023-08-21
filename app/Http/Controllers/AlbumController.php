<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use File;

class AlbumController extends Controller
{
    public function index(){

    	$data['album'] = DB::table('tbl_album')->get();
    	return view('admin.album.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        return view('admin.album.add', $data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'photo'=>'required',
        ]);

        $imageUrl='';
        if(!empty($request->file('photo'))){
            $Image = $request->file('photo');
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/albumImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_album')
                ->insert([
                    'title'=>$request->title,
                    'photo'=>($imageUrl) ? $imageUrl : '',
                ]);

        if($result){

            setMessage('message','success','Save successfully !!!');
            return redirect('add-album');
        }else{

            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-album');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
    	$data['single'] = DB::table('tbl_album')->find($id);
    	return view('admin.album.add', $data);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title'=>'required',
        ]);

        $album = DB::table('tbl_album')->find($request->id);
        $Image = $request->file('photo');
    
        if($Image){

            $preImg = $album->photo;
            if($preImg and File::exists('public/albumImage/'.$preImg)){
                unlink($preImg);
            }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/albumImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_album')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'photo'=>$imageUrl,
                ]);

            if($result){

                setMessage('message','success','Successful !!!');
                return redirect('edit-album/'.$request->id);
            }else{

                setMessage('message','danger','Failed !!!');
                return redirect('edit-album/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_album')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                ]);

            if($result){
                setMessage('message','success','Successful !!!');
                return redirect('edit-album/'.$request->id);
            }else{
                setMessage('message','danger','Failed !!!');
                return redirect('edit-album/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $album = DB::table('tbl_album')->find($id);
        $preImg = $album->photo;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_album')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-album');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-album');
        }
    }


}//