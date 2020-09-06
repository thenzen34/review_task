<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;

class ReviewsController extends BaseController
{
    function getIndex()
    {
        $reviews = [];//Reviews::all();

        Session::put('success','Item created successfully!');

        return view('reviews', ['reviews' => $reviews]);
    }
}
