<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BallymaloeCookerySchoolRedirect extends Controller
{
    /**
     * handle /ballymaloe-cookery-school/guest-chef-jeremy-lee
     * @param Request $request
     * @param $guestchef
     * @return void
     */
    public function redirect(Request $request, $uriblock){
        $routetext = Str($uriblock);
        if ($routetext->startsWith('guest-chef')){
            return $this->redirectGuestchef($routetext);
        } else {
            return $this->redirectOther($routetext);
        }
    }

    public function redirectGuestchef( $guestchefuri){
            $words = $guestchefuri->explode('-');
            $url = '/guest-chef/' . $words[2]. '-' . $words[3];
            return RedirectController::redirect($url);
    }
}
