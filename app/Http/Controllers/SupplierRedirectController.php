<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierRedirectController extends Controller
{
    public function redirect(Request $request , $suppliername){
        return RedirectController::redirect('/ballymaloe-cookery-school/suppliers');
    }
}
