<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajax()

    {

        return view('admin.ajax');
    }



    /**

     * Create a new controller instance.

     *
     * @return void

     */

    public function ajaxPost(Request $request)

    {
        $input = $request->all();
        return response()->json(['success' => 'Got Simple Ajax Request.']);
    }



    /**
     * Refresh session 
     */
    public function ajaxRefreshToken(Request $request)
    {

        
        session()->regenerate();
        return response()->json(
            [
                "token" => csrf_token()
            ],
            200
        );
    }
}
