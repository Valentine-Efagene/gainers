<?php

namespace App\Http\Controllers;

use App\Models\UserAgent;
use App\Http\Requests\StoreUserAgentRequest;
use App\Http\Requests\UpdateUserAgentRequest;

class UserAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreUserAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserAgentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAgent  $userAgent
     * @return \Illuminate\Http\Response
     */
    public function show(UserAgent $userAgent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAgent  $userAgent
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAgent $userAgent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserAgentRequest  $request
     * @param  \App\Models\UserAgent  $userAgent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserAgentRequest $request, UserAgent $userAgent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAgent  $userAgent
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAgent $userAgent)
    {
        //
    }
}
