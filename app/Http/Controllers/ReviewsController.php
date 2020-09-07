<?php

namespace App\Http\Controllers;

use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReviewsController extends BaseController
{
    function getIndex()
    {
        $reviews = Reviews::paginate(25);
        //Session::flush();

        return view('reviews', ['reviews' => $reviews]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            Reviews::create($request->all());
            DB::commit();

            Session::put('success','Ваша заявка сохранена!');
        } catch (\Exception $e) {
            DB::rollback(); // either it won't execute any statements and rollback your database to previous state

            Session::put('error','Произошла ошибка!');
        }

        // you don't need any if statements anymore. If you're here, it means all data has been saved successfully
        return redirect('/');
    }
}
