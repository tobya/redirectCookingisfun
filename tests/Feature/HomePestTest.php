<?php

it('has homepest page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('redirects request', function ($url){
    \Illuminate\Support\Facades\Log::debug($url);

    $response = $this->get($url);
//    $response->dumpheaders();
    $response->assertStatus(301);

})->with(\App\Http\Controllers\GeneralRedirect::RedirectList());
