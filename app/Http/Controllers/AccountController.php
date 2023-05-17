<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::with(['transaction'])->get();
        // return dd($accounts);
        return view('home', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formField = $request->validate(
            [
                'account_id' => 'required',
                'date' => 'required',
                'type' => 'required',
                'amount' => ['required', 'numeric', 'gt:0', function ($attribute, $value, $fail) use ($request) {
                    $acc = Account::where('id', $request->input('account_id'))->first();
                    if ($acc->balance < $value) {
                        $fail('Your amount is over than balance');
                    }
                }]
            ],
            [
                'account_id.required' => 'Account required',
                'date.required' => 'Date required',
                'type.required' => 'Type required',
                'amount.required' => 'Amount required',
                'amount.numeric' => 'Amount must be number only',
                'amount.gt' => 'Amount can not be negetive'
            ]
        );

        $transfer = Transaction::create($formField);

        if ($transfer) {
            $acc = Account::where('id', $request->input('account_id'))->first();
            if ($request->input('type') == '1') {
                $balance = $acc->balance - $request->input('amount');
                Account::where('id', $request->input('account_id'))->update(['balance' => $balance]);
            } else {
                $balance = $acc->balance + $request->input('amount');
                Account::where('id', $request->input('account_id'))->update(['balance' => $balance]);
            }
        }

        $msg = ($request->input('type') == '1') ? ['danger' => 'You sent successfully'] : ['success' => 'You received successfully'];

        return back()->with($msg);
    }
}
