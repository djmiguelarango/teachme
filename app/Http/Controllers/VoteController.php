<?php

namespace Teachme\Http\Controllers;

use Illuminate\Http\Request;

use Teachme\Entities\User;
use Teachme\Http\Requests;
use Teachme\Http\Controllers\Controller;

class VoteController extends Controller
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
     * @param  \Illuminate\Http\Request $request
     * @param $ticket_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $ticket_id)
    {
        /** @var User $user */
        $user = $request->user();

        $user->votes()->attach($ticket_id);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $ticket_id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $ticket_id)
    {
        /** @var User $user */
        $user = $request->user();

        $user->votes()->detach($ticket_id);

        return redirect()->back();
    }
}
