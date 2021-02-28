<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use CurrencyConverter;

class UserController extends Controller
{
    public function create(Request $request){

        return view('pages.adduser');
    }


    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'rate' => 'required|numeric',
            'currency' => 'required|in:GBP,EUR,USD',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rate' => $request->rate,
            'currency' => $request->currency,
        ]);

        return view('pages.adduser')->with('info', 'User Created!');;
    }

    public function show(Request $request){

        $users = User::all();
        return view('pages.viewusers', compact('users'));
    }

    public function viewuser(Request $request, $id){

        $user = User::findOrFail($id);
        return view('pages.viewuser', compact('user'));

    }

    public function convertCurrency(Request $request, User $user){

        $request->validate([
            'rate' => 'required|numeric',
            'currency' => 'required|in:GBP,EUR,USD',
            'tocurrency' => 'required|in:GBP,EUR,USD',
        ]);

        $amount = $request->rate;
        $from = $request->currency;
        $to = $request->tocurrency;
        $conversion = \CurrencyConverter::convertCurrency($amount,$from,$to);
        $user->rate = round($conversion, 2);

        return response()->json([
            'user' => $user
        ], 200);
    }
}
