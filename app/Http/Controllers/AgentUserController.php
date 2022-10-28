<?php

namespace App\Http\Controllers;

use App\Models\AgentUser;
use App\Http\Requests\StoreAgentUserRequest;
use App\Http\Requests\UpdateAgentUserRequest;

class AgentUserController extends Controller
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
     * @param  \App\Http\Requests\StoreAgentUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgentUser  $agentUser
     * @return \Illuminate\Http\Response
     */
    public function show(AgentUser $agentUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgentUser  $agentUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AgentUser $agentUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentUserRequest  $request
     * @param  \App\Models\AgentUser  $agentUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentUserRequest $request, AgentUser $agentUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgentUser  $agentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgentUser $agentUser)
    {
        //
    }
}
