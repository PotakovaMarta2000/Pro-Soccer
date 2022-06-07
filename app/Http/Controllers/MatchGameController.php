<?php

namespace App\Http\Controllers;

use App\Models\MatchGame;
use Illuminate\Http\Request;

class MatchGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MatchGame $matchGame)
   
    {
        $matchies=MatchGame::all();
        $contacts = \App\Models\Contact::all();
        $title = 'Матчи';
        return view('match', 
        ['matchies'=>$matchies, 'contacts' => $contacts, 'title' => $title]
    );
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
     * @param  \App\Models\MatchGame  $matchGame
     * @return \Illuminate\Http\Response
     */
    public function show(MatchGame $matchGame)
    {
        return $matchGame;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatchGame  $matchGame
     * @return \Illuminate\Http\Response
     */
    public function edit(MatchGame $matchGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchGame  $matchGame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchGame $matchGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchGame  $matchGame
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchGame $matchGame)
    {
        //
    }
}
