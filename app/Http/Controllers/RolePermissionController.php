<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class RolePermissionController extends Controller
{
    
    public function createPermission(){

    	$employee = DB::table('users')->where('role_id', 2)->get();
    	$modules = DB::table('modules')->get();
    	return view('admin.permission.permissionCreate',['allEmployee'=>$employee, 'allModule'=>$modules]);
    }

	public function managePermission(){

        $permissions = DB::table('role_permissions')
        			->join('users','users.id','=','role_permissions.user_id')
        			// ->join('modules','modules.id','=','role_permissions.module_id')
        			//->select('role_permissions.*','users.name','modules.module_name')
                    ->select('role_permissions.*','users.name')
        			->get();
        return view('admin.permission.permissionManage',['allPermission'=>$permissions]);
    }

    public function storePermission(Request $request){ 

       //return $request->all();

        // $this->validate($request,[
        //     'user_id' => 'required',
        //     'module_name' => 'required',
        //     'can_view' => 'required',
        //     'can_add' => 'required',
        //     'can_edit' => 'required',
        //     'can_delete' => 'required',
        // ]);


        $module = $request->module_name;
        $modulepermission = implode(",", $module);

        $view = $request->can_view;
        $viewpermission = implode(",", $view);

        $add = $request->can_add;
        $addpermission = implode(",", $add);

        $edit = $request->can_edit;
        $editpermission = implode(",", $edit);

        $delete = $request->can_delete;
        $deletepermission = implode(",", $delete);


        // echo '<pre>';
        // print_r($modulepermission);
        // echo '<hr>';
        // print_r($viewpermission);
        // echo '<hr>';
        // print_r($addpermission);
        // echo '<hr>';
        // print_r($editpermission);
        // echo '<hr>';
        // print_r($deletepermission);
        // exit();

        $query = DB::table('role_permissions')
    			->insert([
    				'user_id' => $request->user_id,
    				//'module_name' => $request->module_name,
                    'module_name' => $modulepermission,
    				'can_view' => $viewpermission,
                    'can_add' => $addpermission,
    				'can_edit' => $editpermission,
    				'can_delete' => $deletepermission,
    			]);

        if($query){

        	Session::put('message','Role Permission has been saved !!!');
        	return redirect('addPermission');

        }else{

        	Session::put('message','Failed to save !!!');
        	return redirect('addPermission');
        }

    }//storePermission

    public function editPermission($permission_id){

        $employee = DB::table('users')->where('role_id', 2)->get();
        $permissionByID = DB::table('role_permissions')->find($permission_id);
        $modules = DB::table('modules')->get();
        return view('admin.permission.permissionEdit',['allModule'=>$modules, 'allEmployee'=>$employee, 'selected_info'=>$permissionByID]);
    }

    public function updatePermission(Request $request){

        $this->validate($request,[
            'user_id' => 'required',
            'module_name' => 'required',
            'can_view' => 'required',
            'can_add' => 'required',
            'can_edit' => 'required',
            'can_delete' => 'required',
        ]);


        $module = $request->module_name;
        $modulepermission = implode(",", $module);

        $view = $request->can_view;
        $viewpermission = implode(",", $view);

        $add = $request->can_add;
        $addpermission = implode(",", $add);

        $edit = $request->can_edit;
        $editpermission = implode(",", $edit);

        $delete = $request->can_delete;
        $deletepermission = implode(",", $delete);

        $query = DB::table('role_permissions')
                ->where('id',$request->id)
                ->update([
                    'user_id' => $request->user_id,
                    'module_name' => $modulepermission,
                    'can_view' => $viewpermission,
                    'can_add' => $addpermission,
                    'can_edit' => $editpermission,
                    'can_delete' => $deletepermission,
                ]);

        if($query){

            Session::put('message','Role Permission has been updated !!!');
            return redirect('managePermission');

        }else{

            Session::put('message','Failed to update !!!');
            return redirect('managePermission');
        }

    }//updatePermission


    public function deletePermission($permission_id){

        $query = DB::table('role_permissions')->where('id',$permission_id)->delete();

        if($query){

            Session::put('message','Role Permission has been deleted !!!');
            return redirect('managePermission');

        }else{

            Session::put('message','Failed to delete !!!');
            return redirect('managePermission');
        }

    }


    public function viewDetailsPermission(){

       $permissionId= request()->input("id");
       $permissionsById = DB::table('role_permissions')
                    ->join('users','users.id','=','role_permissions.user_id')
                    ->select('role_permissions.*','users.name')
                    ->where('role_permissions.id',$permissionId)
                    ->first();

        return view('admin.permission.permissionDetails',['selected_info'=>$permissionsById]);
    }



}//RolePermissionController