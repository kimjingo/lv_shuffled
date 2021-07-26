<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test()
    {
        $users = \App\Models\User::get();
        $shuffled_users = collect([]);
        $chunks = $users->chunk(10);
        foreach($chunks as $chunk){
            $shuffled_users[] = $chunk->shuffle();
        }
        $shuffled = $shuffled_users->collapse();

        // dd($shuffled);
        // dd($chunks);
        // dd($users);
        return view('test', compact(['shuffled']));
    }
}
