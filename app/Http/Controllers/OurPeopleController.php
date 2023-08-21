<?php

namespace App\Http\Controllers;

use App\OurPeople;
use Illuminate\Http\Request;
use DB;
use Image;

class OurPeopleController extends Controller
{

    public function index()
    {
        $peoples = DB::table('our_people')->get();
        return view('admin.people.view', compact('peoples'));
    }

    public function add()
    {
        $data['add'] = TRUE;
        return view('admin.people.add', $data);
    }

    public function store(Request $request)
    {

        $imageUrl = '';
        if (!empty($request->file('image'))) {
            $Image = $request->file('image');
            $name = 'people-' . $Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        }

        $result = DB::table('our_people')
            ->insert([
                'name' => $request->name,
                'details' => $request->details,
                'designation' => $request->designation,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'phone' => $request->phone,
                'website' => $request->website,
                'fb' => $request->fb,
                'twitter' => $request->twitter,
                'status' => $request->status,
                'image' => $imageUrl,
            ]);

        if ($result) {
            setMessage('message', 'success', 'Save successfully !!!');
            return redirect('add-people');
        } else {
            setMessage('message', 'danger', 'Failed to Save !!!');
            return redirect('add-people');
        }
    } //store

    public function edit($id)
    {
        $data['edit'] = TRUE;
        $data['single'] = DB::table('our_people')->find($id);
        return view('admin.people.add', $data);
    }

    public function update(Request $request)
    {

        $data = DB::table('our_people')
            ->where('id', $request->id)->first();
        $imageUrl = $data->image;

        if (!empty($request->file('image'))) {
            $preImg = $imageUrl;
            if ($preImg) {
                unlink($preImg);
            }
            $Image = $request->file('image');
            $name = 'people-' . $Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $data->image;
        }
        //return $request;

        // $imageUrl;

        $result = DB::table('our_people')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'details' => $request->details,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'phone' => $request->phone,
                'website' => $request->website,
                'fb' => $request->fb,
                'twitter' => $request->twitter,
                'status' => $request->status,
                'image' => $imageUrl,
            ]);

        //dd($result);

        if ($result) {
            setMessage('message', 'success', 'Save successfully !!!');
            return redirect('edit-people/' . $request->id);
        } else {
            setMessage('message', 'danger', 'Failed to Save !!!');
            return redirect('edit-people/' . $request->id);
        }
    } //update

    public function delete($id)
    {

        $data = DB::table('our_people')->where('id', '=', $id)->first();

        $imageUrl = $data->image;
        if ($imageUrl) {
            unlink($imageUrl);
        }
        $result = DB::table('our_people')->where('id', '=', $id)->delete();
        if ($result) {
            setMessage('message', 'success', 'Successful !!!');
            return redirect('manage-people');
        } else {
            setMessage('message', 'danger', 'Failed !!!');
            return redirect('manage-people');
        }
    }
}