<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;


class AppLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        $responseData = array('success'=>'1', 'labels'=>'etiquetas',  'message'=>"Returned all site labels.");
		$categoryResponse = json_encode($responseData);
		return $categoryResponse;
    }

/**
 * 
 * App\Http\Controllers\AppEdiles\AppLoginController
 */
}
