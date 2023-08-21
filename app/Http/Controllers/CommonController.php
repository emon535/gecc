<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index(){

        $data['get_all'] = DB::table('tbl_prerequisites_counselling')->get();
        return view('admin.prerequisites-counselling.view',$data);
    }

    public function edit($id){
        $data['edit'] = TRUE;
        $data['single'] = DB::table('tbl_prerequisites_counselling')->find($id);
        return view('admin.prerequisites-counselling.edit', $data);
    }

    public function update(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'details'=>'required',
            'photo'=>'required',
        ]);

        $album = DB::table('tbl_prerequisites_counselling')->find($request->id);
        $Image = $request->file('photo');
    
        if($Image){

            $preImg = $album->photo;
            if($preImg){
                unlink($preImg);
            }
            $name = $Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('tbl_prerequisites_counselling')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'details'=>$request->details,
                    'photo'=>$imageUrl,
                ]);

            if($result){

                setMessage('message','success','Successful !!!');
                return redirect('edit-prerequisites-counselling/'.$request->id);
            }else{

                setMessage('message','danger','Failed !!!');
                return redirect('edit-prerequisites-counselling/'.$request->id);
            }
    
        }else{

            $result = DB::table('tbl_prerequisites_counselling')
                ->where('id',$request->id)
                ->update([
                    'title'=>$request->title,
                    'details'=>$request->details,
                ]);

            if($result){
                setMessage('message','success','Successful !!!');
                return redirect('edit-prerequisites-counselling/'.$request->id);
            }else{
                setMessage('message','danger','Failed !!!');
                return redirect('edit-prerequisites-counselling/'.$request->id);
            }
        }
        
    }//update

    public function delete($id){

        $album = DB::table('tbl_prerequisites_counselling')->find($id);
        $preImg = $album->photo;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('tbl_prerequisites_counselling')->where('id', '=', $id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-prerequisites-counselling');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-prerequisites-counselling');
        }
    }
}
