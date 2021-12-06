<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function store(){
        dd('store');
    } 
    public function __invoke(Request $request)
    {
        $this->store();
    }
}
