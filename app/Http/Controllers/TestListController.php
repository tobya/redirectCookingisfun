<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestListController extends Controller
{
    public function index(){
        $list = GeneralRedirect::RedirectList();
    return view('list',['items' => $list]);
        }
}
