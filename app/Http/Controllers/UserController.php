<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Update;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airport_usd = Update::orderBy('id', 'DESC')->latest()->value('airport_usd');
        $island_usd = Update::orderBy('id', 'DESC')->latest()->value('island_usd');
        $victoria_usd = Update::orderBy('id', 'DESC')->latest()->value('victoria_usd');
        $kano_usd = Update::orderBy('id', 'DESC')->latest()->value('kano_usd');
        $abuja_usd = Update::orderBy('id', 'DESC')->latest()->value('abuja_usd');

        $updates = DB::table('updates')->get();

        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('pages.admin.home')->with ('updates', $updates)->with('airport_usd', $airport_usd)->with('island_usd', $island_usd)->with('victoria_usd', $victoria_usd)->with('kano_usd', $kano_usd)->with('abuja_usd', $abuja_usd);
        }

        return view('pages.user.home');
    }
}
