<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use DB;
use Session;

class RoleController extends Controller
{
    
    public function createRole(){

        $roles = Role::all();
        return view('admin.role.roleManage',['allRoles'=>$roles]);
    }

    public function storeRole(Request $request){ 

         $data = $request->validate([
            'role_name' => ['required', 'string', 'unique:roles']
        ]);
        $role = new Role();
        $role->role_name = $request->role_name;
        $role->save();
        Session::put('message','Role has been save successfully !!!');
        return redirect('addRole');
    }

    public function editRole($role_id){

        $roles = Role::all();
        $roleByID = Role::where('id',$role_id)->first();
        return view('admin.role.editRole',['allRoles'=>$roles, 'selectedRole'=>$roleByID]);
    }

    public function updateRole(Request $request){

        $role = Role::find($request->id);
        $role->role_name = $request->role_name;
        $role->save();
        return redirect('addRole')->with('message','Role has been Updated !!!');
    }

    public function deleteRole($role_id){

        Role::destroy($role_id);
        return redirect('addRole')->with('message','Role has been Deleted !!!');
    }


}//RoleController