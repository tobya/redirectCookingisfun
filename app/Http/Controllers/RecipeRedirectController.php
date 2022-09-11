<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Url\QueryParameterBag;
use Spatie\Url\Url;

class RecipeRedirectController extends Controller
{
    public function search(Request $request){
        $url = Url::fromString(config('redirect.recipe'));
        $url = $url->withPath('/search');
        $qs = $request->getQueryString();
        if (!is_null($qs)){

        $Bag = QueryParameterBag::fromString();
        // $url = $url->withQuery();
        $url = $url->withQueryParameters(['query' => $Bag->get('q')]);
        }
        Log::info('[REDIRECT] ' . request()->fullUrl() . ' =>  ' . $url  );
        Activity()->withProperties(['url' => request()->fullUrl(), 'redirect' => $url, 'type' => 'recipe'])->log('Redirect Happened');;
        //return view('show',['url' => $url],);
        return redirect($url,301);
    }

    public function home(){
        $url = Url::fromString(config('redirect.recipe'));
        $url = $url->withPath('/');

        Log::info('[REDIRECT] ' . request()->fullUrl() . ' =>  ' . $url  );
        Activity()->withProperties(['url' => request()->fullUrl(), 'redirect' => $url, 'type' => 'recipe'])->log('Redirect Happened');
        //return view('show',['url' => $url],);
        return redirect($url,301);
    }
}
