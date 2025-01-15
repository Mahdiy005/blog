<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        // todo: store subscribe
        $valid = $request->validate([
            'email' => 'email|required|unique:subscribes,email',
        ]);

        Subscribe::create($valid);

        return redirect()->back()->with('res', 'Subscreibed Succesfully');
        ;
    }
}
