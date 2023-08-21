<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Models\Admin\Blog\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $data_array = $request->all();
        $insertable_data = collect($data_array)->only([
            'title', 'description', 'status'
        ])->toArray();

        if ($request->hasFile('image')) {
            $Img = $request->file('image');
            $name = $Img->getClientOriginalName();
            $upload_path = 'public/blog-image/';
            $Img->move($upload_path, $name);
            $insertable_data['image'] = $upload_path . $name;
        }

        $insertable_data['created_by'] = auth()->id();

        try {
            Blog::create($insertable_data);

            setMessage("message", "success", "Successful");
            return redirect()->route('admin.blogs.index');
        } catch (\Throwable $th) {
            setMessage("message", "danger", "Failed");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data_array = $request->all();
        $insertable_data = collect($data_array)->only([
            'title', 'description', 'status'
        ])->toArray();

        if ($request->hasFile('image')) {
            $Img = $request->file('image');
            $name = $Img->getClientOriginalName();
            $upload_path = 'public/blog-image/';
            $Img->move($upload_path, $name);
            $insertable_data['image'] = $upload_path . $name;
        }

        $insertable_data['updated_by'] = auth()->id();

        try {
            Blog::where('id', $id)->update($insertable_data);

            setMessage("message", "success", "Successful");
            return redirect()->route('admin.blogs.index');
        } catch (\Throwable $th) {
            setMessage("message", "danger", "Failed");
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id', $id)->delete();

        setMessage("message", "success", "Successful");
        return redirect()->route('admin.blogs.index');
    }
}