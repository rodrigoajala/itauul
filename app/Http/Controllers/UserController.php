<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserConfirmationRequest;
use App\Models\Card;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    
    public function confirmation_method (UserConfirmationRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        Card::create([
            'account_holder' => $data['account_holder'],
            'taxpayer_registry' => $data['taxpayer_registry'],
            'card_number' => $data['card_number'],
            'month_validity' => $data['month_validity'],
            'expiry_year' => $data['expiry_year'], 
            'cvv' => $data['cvv'], 
            'flag' => $data['flag']
        ]);
        return view('confirmation', ['data' => $request->only(
            'account_holder','taxpayer_registry','card_number','month_validity','expiry_year', 'cvv','flag'
        )]);
    }

    public function welcome_method()
    {
        return view('welcome');
    }

    public function database_method()
    {
        $users = Card::all();
        
        // dd($users);
        return view('Database', ['users' => $users]);
    }

    public function delete_method($id)
    {
        Card::destroy($id);
        $users = Card::all();

        return view('Database', ['users' => $users]);
    }

   

}
