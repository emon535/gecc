<?php

namespace App\Http\Controllers\Admin\FAQ;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\FAQ\FrequentlyAskQuestion;

class FrequentlyAskQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FrequentlyAskQuestion::latest()->get();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
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
            'question' => 'required',
            'answer' => 'required',
            'position' => 'required|numeric',
            'status' => 'required',
        ]);

        $data_array = $request->all();
        $insertable_data = collect($data_array)->only([
            'question', 'answer', 'position', 'status'
        ])->toArray();

        $insertable_data['created_by'] = auth()->id();

        try {
            FrequentlyAskQuestion::create($insertable_data);

            setMessage("message", "success", "Successful");
            return redirect()->route('admin.faqs.index');
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
        $faq = FrequentlyAskQuestion::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
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
            'question' => 'required',
            'answer' => 'required',
            'position' => 'required|numeric',
            'status' => 'required',
        ]);

        $data_array = $request->all();
        $insertable_data = collect($data_array)->only([
            'question', 'answer', 'position', 'status'
        ])->toArray();

        $insertable_data['updated_by'] = auth()->id();

        try {
            FrequentlyAskQuestion::where('id', $id)->update($insertable_data);

            setMessage("message", "success", "Successful");
            return redirect()->route('admin.faqs.index');
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
        FrequentlyAskQuestion::where('id', $id)->delete();

        setMessage("message", "success", "Successful");
        return redirect()->route('admin.faqs.index');
    }
}