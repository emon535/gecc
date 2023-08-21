<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class GlancesController extends Controller
{
    public function index()
    {
        $data['glance'] = DB::table('glances')->first();
        return view('admin.glances.index',$data);
    }
    public function update_glance(Request $request)
    {
        $id = DB::table('glances')->first()->id;
        $result = DB::table('glances')->where('id',$id)->update([
                    'global_offices'=>$request->global_offices,
                    'global_counsellors'=>$request->global_counsellors,
                    'education_fair'=>$request->education_fair,
                    'virtual_events'=>$request->virtual_events,
                    'courses_offered'=>$request->courses_offered,
                    'students_served'=>$request->students_served,
                    'free_service'=>$request->free_service,
                    'student_satisfaction'=>$request->student_satisfaction,
                ]);
         if($result){
            setMessage("message","success","Successful");
            return back();
        }else{
            setMessage("message","danger","Failed");
            return back();
        }
        return view('admin.glances.index',$data);
    }
}
