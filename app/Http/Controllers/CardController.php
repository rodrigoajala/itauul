<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CardConfirmationRequest;
use App\Http\Requests\CardUpdateRequest;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function confirmation_method(CardConfirmationRequest $request)
    {
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
            'account_holder',
            'taxpayer_registry',
            'card_number',
            'month_validity',
            'expiry_year',
            'cvv',
            'flag'
        )]);
    }

    public function database_method()
    {
        $users = Card::all();
        return view('Database', ['users' => $users]);
    }

    public function delete_method($id)
    {
        Card::destroy($id);
        $users = Card::all();

        return view('Database', ['users' => $users]);
    }

    public function edit_method($id)
    {
        $data = Card::find($id);
        return view('edit', ['data' => $data]);
    }

    public function edit_store_method(CardUpdateRequest $request)
    {
        $requestData = $request->all();
        $user = Card::find($requestData['id']);
        $user->account_holder = $requestData['account_holder'];
        $user->taxpayer_registry = $requestData['taxpayer_registry'];
        $user->card_number = $requestData['card_number'];
        $user->month_validity = $requestData['month_validity'];
        $user->expiry_year = $requestData['expiry_year'];
        $user->cvv = $requestData['cvv'];
        $user->flag = $requestData['flag'];
        $user->save();

        $users = Card::all();
        return view('Database', ['users' => $users]);
    }
}
