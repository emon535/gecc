<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        $this->data['totalAdmin'] = DB::table('users')->where('role_id', 1)->get();
        $this->data['totalEmployee'] = DB::table('users')->where('role_id', 2)->get();
        $this->data['user_info'] = DB::table('users')->where('id', logged_in_user_id())->first();
        return view('admin.home.homeContent', $this->data);
    }

    public function getStudent()
    {

        $this->data['students'] = DB::table('students')->orderby('id', 'DESC')->get();
        return view('admin.student.student_list', $this->data);
    }

    public function contactMessage()
    {

        $this->data['contact'] = DB::table('tbl_contact')->get();
        return view('admin.contact.contact', $this->data);
    }

    public function studentDetails()
    {

        $stdID = request()->input("id");
        $std_details = DB::table('students')
            ->leftjoin('payments', 'payments.student_id', '=', 'students.id')
            ->select('students.*', 'payments.*')
            ->where('students.id', $stdID)
            ->first();
        return view('admin.student.student_details', ['selected_info' => $std_details]);
    }

    public function officeAddress()
    {
        $data['office_address'] = DB::table('tbl_office_address')->get();
        return view('admin.contact.view', $data);
    }

    public function addAddress()
    {
        return view('admin.contact.create');
    }


    public function storeAddress(Request $request)
    {

        $request->validate([
            'office_location' => 'required',
            'office_address' => 'required',
            'map' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $result = DB::table('tbl_office_address')
            ->insert([
                'office_location' => $request->office_location,
                'office_address' => $request->office_address,
                'map' => $request->map,
                'code' => $request->code,
                'region_name' => $request->region_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'is_default' => $request->is_default ?? 0,
            ]);

        if ($result) {
            setMessage("message", "success", "Successful");
            return redirect('add-office-address');
        } else {
            setMessage("message", "danger", "Failed");
            return redirect('add-office-address');
        }
    } //store

    public function editAddress($id)
    {
        $data['single'] = DB::table('tbl_office_address')->find($id);
        return view('admin.contact.edit', $data);
    }

    public function updateAddress(Request $request)
    {
        $request->validate([
            'office_location' => 'required',
            'office_address' => 'required',
            'map' => 'required',
            'code' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $result = DB::table('tbl_office_address')
            ->where('id', $request->id)
            ->update([
                'office_location' => $request->office_location,
                'office_address' => $request->office_address,
                'map' => $request->map,
                'code' => $request->code,
                'region_name' => $request->region_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'is_default' => $request->is_default ?? 0,
            ]);

        if ($result) {
            setMessage("message", "success", "Successful");
            return redirect('edit-office-address/' . $request->id);
        } else {
            setMessage("message", "danger", "Failed");
            return redirect('edit-office-address/' . $request->id);
        }
    } //update

}//AdminController