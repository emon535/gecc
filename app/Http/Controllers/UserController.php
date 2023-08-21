<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function manageUser(){

    	$users = DB::table('users')->get();
    	return view('admin.user.view',['allUsers'=>$users]);
    }

    public function createUser(){

        $data['roles'] = Role::all();
        return view('admin.user.add', $data);
    }

    public function storeUser(Request $request){

       $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
        ]);

       $password = $request->password;
       $confirm_password = $request->confirm_password;

       if($password == $confirm_password){

            $imageUrl='';
            // return $request->all();
            if(!empty($request->file('image'))){
                $userImg = $request->file('image');
                $name = $userImg->getClientOriginalName();
                $uploadPath = 'public/userImage/';
                $userImg->move($uploadPath, $name);
                $imageUrl = $uploadPath.$name;
            }
            $result=DB::table('users')
                ->insert([
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'role_id'=>$request->role_id,
                    'password'=>Hash::make($request->password),
                    // 'image'=>$imageUrl,
                    'image'=>($imageUrl) ? $imageUrl : '',
                ]);

            if($result){
                Session::put('message','User has been save successfully !!!');
                return redirect('manage-user');
            }else{
                Session::put('message','Failed to add !!!');
                return redirect('manage-user');
            }

       }else{
            Session::put('message','Password and Confirm Password does not match !!!');
            return redirect('add-user');
       }

    }//storeUser


    public function editUser($user_id){
    	//$userByID = DB::table('users')->where('id',$user_id)->first();
    	$userByID = DB::table('users')->find($user_id);
    	return view('admin.user.edit',['userByID'=>$userByID]);
    }

    public function updateUser(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
        ]);
       
        $userByID = DB::table('users')->find($request->id);
        $userImage = $request->file('image');

        if($userImage){

            $preImg = $userByID->image;
            if($preImg){
                unlink($preImg);
            }
            $name = $userImage->getClientOriginalName();
            $uploadPath = 'public/userImage/';
            $userImage->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;

            $result = DB::table('users')
                ->where('id',$request->id)
                ->update([
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'image'=>$imageUrl,
                ]);

            if($result){
                Session::put('message','User has been updated !!!');
                return redirect('editProfile/'.$request->id);
            }else{
                Session::put('message','Failed to update !!!');
                return redirect('editProfile/'.$request->id);
            }
    
        }else{

            $result = DB::table('users')
                ->where('id',$request->id)
                ->update([
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                ]);

            if($result){
                Session::put('message','User has been updated !!!');
                return redirect('editProfile/'.$request->id);
            }else{
                Session::put('message','Failed to update !!!');
                return redirect('editProfile/'.$request->id);
            }
        }

        
    }//updateUser

    public function inactiveUser($user_id){

    	$query = DB::table('users')
              ->where('id', $user_id)
              ->update(['status' => 0]);
        if($query){
	    	Session::put('message','This Member has been Inactive now !!!');
    		return redirect('manage-user');
	    }else{
	    	Session::put('message','Failed to Inactive operation !!!');
    		return redirect('manage-user');
	    }
    }

    public function activeUser($user_id){

    	$query = DB::table('users')
              ->where('id', $user_id)
              ->update(['status' => 1]);
        if($query){
	    	Session::put('message','This Member has been Active now !!!');
    		return redirect('manage-user');
	    }else{
	    	Session::put('message','Failed to Active operation !!!');
    		return redirect('manage-user');
	    }
    }

    public function delete_profile($user_id){

        $user = DB::table('users')->find($user_id);
        $preImg = $user->image;
        if($preImg){
            unlink($preImg);
        }
        $result = DB::table('users')->where('id', '=', $user_id)->delete();
        if($result){
            setMessage('message','success','Successful !!!');
            return redirect('manage-user');
        }else{
            setMessage('message','danger','Failed !!!');
            return redirect('manage-user');
        }
    }

//========================== User Password Update =============================//

    public function changeUserPassword($user_id){

        $userByID = DB::table('users')->find($user_id);
        return view('admin.user.changePassword',['userByID'=>$userByID]);
    }


    public function updatePassword(Request $request){

        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
        ]);

        $userByID = DB::table('users')->find($request->id);
        $userPassword = $userByID->password;

        if (Hash::check($request->input('old_password'), $userPassword)) {
            
            $password = $request->password;
            $confirm_password = $request->confirm_password;

            if($password == $confirm_password){

                $result = DB::table('users')
                ->where('id',$request->id)
                ->update([
                    'password'=>Hash::make($request->password),
                ]);

                if($result){
                    Session::put('message','User Password has been updated !!! Login Again with New Password');
                    return redirect('logout');
                }else{
                    Session::put('message','Failed to update !!!');
                    return redirect('changePassword/'.$request->id);
                }

            }else{

                Session::put('message','Password and Confirm Password does not match !!!');
                return redirect('changePassword/'.$request->id);

            }

        }else{

            Session::put('message','Old Password does not match !!!');
            return redirect('changePassword/'.$request->id);
        }


    }//updatePassword




}//UserController