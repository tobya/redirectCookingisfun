<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherRedirect extends Controller
{
    public function home(){
        return RedirectController::redirect('/vouchers/gift-voucher-ballymaloe-cookery-school');
    }
}
