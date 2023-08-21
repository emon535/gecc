<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {

        $data['slider'] = DB::table('tbl_slider')->get();
        return view('admin.slider.view', $data);
    }

    public function add()
    {
        $data['add'] = TRUE;
        return view('admin.slider.add', $data);
    }

    public function store(Request $request)
    {

        $imageUrl = '';
        if (!empty($request->file('image'))) {
            $Image = $request->file('image');
            $name = 'slider-' . $Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        }

        $result = DB::table('tbl_slider')
            ->insert([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imageUrl
            ]);

        if ($result) {
            setMessage("message", "success", "Successful");
            return redirect('add-slide');
        } else {
            setMessage("message", "danger", "Failed");
            return redirect('add-slide');
        }
    } //store

    public function edit($id)
    {
        $data['edit'] = TRUE;
        $data['single'] = DB::table('tbl_slider')->find($id);
        return view('admin.slider.add', $data);
    }

    public function update(Request $request)
    {

        $oldImg = DB::table('tbl_slider')->find($request->id);
        $Image = $request->file('image');

        if ($Image) {
            $preImg = $oldImg->image;
            try {
                if ($preImg) {
                    unlink($preImg);
                }
            } catch (\Throwable $th) {
            }
            $name = 'slider-' . $Image->getClientOriginalName();
            $uploadPath = 'public/upload/';
            $Image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;

            $result = DB::table('tbl_slider')
                ->where('id', $request->id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'image' => $imageUrl,
                ]);

            if ($result) {
                setMessage("message", "success", "Successful");
                return redirect('edit-slide/' . $request->id);
            } else {
                setMessage("message", "danger", "Failed");
                return redirect('edit-slide/' . $request->id);
            }
        } else {

            $result = DB::table('tbl_slider')
                ->where('id', $request->id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                ]);

            if ($result) {
                setMessage("message", "success", "Successful");
                return redirect('edit-slide/' . $request->id);
            } else {
                setMessage("message", "danger", "Failed");
                return redirect('edit-slide/' . $request->id);
            }
        }
    } //update

    public function delete($id)
    {

        $Old = DB::table('tbl_slider')->find($id);
        try {
            $preImg = $Old->image;
            if ($preImg) {
                unlink($preImg);
            }
        } catch (\Throwable $th) {
        }
        $result = DB::table('tbl_slider')->where('id', '=', $id)->delete();
        if ($result) {
            setMessage("message", "success", "Successful");
            return redirect('manage-slide');
        } else {
            setMessage("message", "danger", "Failed");
            return redirect('manage-slide');
        }
    }
}