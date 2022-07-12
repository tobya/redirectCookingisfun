<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseRedirectController extends Controller
{
    public function byMonth(Request $request, $month){
        return RedirectController::redirect('/all-courses',['filter'=>$month]);
    }

    public function search(Request $request, $search){
        return RedirectController::redirect('/all-courses',['*' => $search]);
    }
}
