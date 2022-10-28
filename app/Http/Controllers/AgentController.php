<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;

class AgentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin_auth', [
            'only' => [
                'index', 'update', 'store'
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents', compact('agents'));
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
     * @param  \App\Http\Requests\StoreAgentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentRequest $request)
    {
        $request->validate([
            'name' => ['string'],
            'account_number' => ['string', 'nullable'],
            'account_name' => ['string', 'nullable'],
            'bank' => ['string', 'nullable'],
            'western_union_link' => ['string', 'nullable']
        ]);

        $agent = new Agent;
        $agent->name = $request->name;
        $agent->account_number = $request->account_number;
        $agent->account_name = $request->account_name;
        $agent->bank = $request->bank;
        $agent->western_union_link = $request->western_union_link;
        $ret = $agent->save();
        $success = $ret ? true : false;
        return back()->with(compact('success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgentRequest  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $request->validate([]);
        $agent = Agent::find($request->id);

        if ($request->name) {
            $agent->name = $request->name;
        }

        if ($request->account_number) {
            $agent->account_number = $request->account_number;
        }

        if ($request->account_name) {
            $agent->account_name = $request->account_name;
        }
        if ($request->bank) {
            $agent->bank = $request->bank;
        }
        if ($request->western_union_link) {
            $agent->western_union_link = $request->western_union_link;
        }

        $ret = $agent->save();
        $success = $ret ? true : false;
        return back()->with(compact('success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
    }
}
