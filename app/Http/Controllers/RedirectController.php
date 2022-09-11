<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Spatie\Url\Url;


class RedirectController extends Controller
{
    public static function redirect($urlblock, $queryparams = []){

        $url = Url::fromString(config('redirect.main'));
        $url = $url->withPath($urlblock);
        $url = $url->withQueryParameters($queryparams);
        Log::info('[REDIRECT] ' . request()->fullUrl() . ' =>  ' . $url  );
        Activity()->withProperties(
            [   'url' => request()->fullUrl(),
                'redirect' => $url,
                'referer' => @$_SERVER['HTTP_REFERER'],
            ]
            )
            ->log('Redirect Happened');;

        if (app()->environment('production')){
            if ($url == '/' || $url == ''){
                return redirect($url, 302 );
            }
            return redirect($url,301);
        }
        return view('show',['url' => $url],);
    }

    public static function fullRedirect($url){

        Log::info('[REDIRECT] ' . request()->fullUrl() . ' =>  ' . $url  );
        Activity()->withProperties(
            [   'url' => request()->fullUrl(),
                'redirect' => $url,
                'referer' => @$_SERVER['HTTP_REFERER'],
            ]
            )
            ->log('Redirect Happened');;

        if (app()->environment('production')){
            return redirect($url,301);
        }
        return view('show',['url' => $url],);
    }
}
