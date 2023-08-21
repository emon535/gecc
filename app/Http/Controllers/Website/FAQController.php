<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\FAQ\FrequentlyAskQuestion;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FrequentlyAskQuestion::where('status', FrequentlyAskQuestion::ACTIVE)
            ->orderBy('position', 'ASC')
            ->get();
        return view('website.faq.index', compact('faqs'));
    }
}