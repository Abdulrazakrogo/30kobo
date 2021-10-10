<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Bmupdate;

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
        $airport_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('airport_usd');
        $island_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('island_usd');
        $victoria_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('victoria_usd');
        $kano_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('kano_usd');
        $abuja_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('abuja_usd');

        $bmupdates = DB::table('bmupdates')->get();

        $user = Auth::user();

        if ($user->isAdmin()) {
            return view('pages.admin.home')->with ('bmupdates', $bmupdates)->with('airport_usd', $airport_usd)->with('island_usd', $island_usd)->with('victoria_usd', $victoria_usd)->with('kano_usd', $kano_usd)->with('abuja_usd', $abuja_usd);
        }

        return view('pages.user.home');
    }
}
