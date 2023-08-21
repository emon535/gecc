<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class GalleryController extends Controller
{
    public function index(){

    	$data['gallery'] = DB::table('tbl_gallery')
                    ->join('tbl_album','tbl_album.id','=','tbl_gallery.album_id')
                    ->select('tbl_gallery.*','tbl_album.title')
                    ->get();
    	return view('admin.gallery.view',$data);
    }

    public function add(){
        $data['add'] = TRUE;
        $data['album_list'] = DB::table('tbl_album')->get();
        return view('admin.gallery.add',$data);
    }

    public function store(Request $request){

        $this->validate($request,[
            'album_id'=>'required',
            'photo'=>'required',
        ]);

        $imageUrl='';
        if(!empty($request->file('photo'))){
            $Image = $request->file('photo');
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/galleryImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
        }

        $result=DB::table('tbl_gallery')
                ->insert([
                    'album_id'=>$request->album_id,
                    'photo'=>($imageUrl) ? $imageUrl : '',
                ]);

        if($result){

            setMessage('message','success','Save successfully !!!');
            return redirect('add-gallery');
        }else{

            setMessage('message','danger','Failed to Save !!!');
            return redirect('add-gallery');
        }

    }//store

    public function edit($id){
        $data['edit'] = TRUE;
    	$data['single'] = DB::table('tbl_gallery')->find($id);
        $data['album_list'] = DB::table('tbl_album')->get();
    	return view('admin.gallery.add', $data);
    }

    public function update(Request $request){

        $gallery = DB::table('tbl_gallery')->find($request->id);
        $Image = $request->file('photo');
    
        if($Image){

            $preImg = $gallery->photo;
            if($preImg){
                unlink($preImg);
            }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/galleryImage/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_gallery')
                ->where('id',$request->id)
                ->update([
                    'album_id'=>$request->album_id,
                    'photo'=>$imageUrl,
                ]);

            if($result){
                setMessage('message','success','Save successfully !!!');
                return redirect('edit-gallery/'.$request->id);
            }else{
                setMessage('message','danger','Failed !!!');
                return redirect('edit-gallery/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_gallery')
                ->where('id',$request->id)
                ->update([
                    'album_id'=>$request->album_id
                ]);

            if($result){
                setMessage('message','success','Save successfully !!!');
                return redirect('edit-gallery/'.$request->id);
            }else{
                setMessage('message','danger','Failed !!!');
                return redirect('edit-gallery/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $gallery = DB::table('tbl_gallery')->find($id);
        $preImg = $gallery->photo;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_gallery')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Save successfully !!!');
            return redirect('manage-gallery');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-gallery');
        }
    }


}//