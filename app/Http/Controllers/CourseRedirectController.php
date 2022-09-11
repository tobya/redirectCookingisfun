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

    public function byDuration(Request $request, $duration){
        return RedirectController::redirect('/all-courses',[]);

    }

    public function CourseList(Request $request, $duration){
        return RedirectController::redirect('/all-courses',[]);

    }

    public function weeklistall(){
        return RedirectController::redirect('/all-courses');
    }

    public function whattheysay(){

        return RedirectController::redirect('/certificate-cookery-course/what-our-students-say');
    }

    public function course($courseid, $title = null){
        // code here to check if courseid exists online and link to it, otherwise link to courses page.
    }
}
