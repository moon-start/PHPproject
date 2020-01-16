<?php

namespace App\Http\Controllers;

use App\QQ;
use Illuminate\Http\Request;

### Blade 樣板實作
use Route;
use View;
###########


class QQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return View::make('board');
        return "Hello, 這是QQ控制器的 index()";
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function show(QQ $qQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function edit(QQ $qQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QQ $qQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QQ  $qQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(QQ $qQ)
    {
        //
    }
}
