<?php

namespace App\Http\Controllers\Web\User;

use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class WalletController extends Controller
{
    public function create()
    {
        $recharge_link=auth()->user()->charge(12, 'Test');

        return view('web.user.wallet.create',compact('recharge_link'));
    }

    public function store(Request $request)
    {
        $user_wallet=Wallet::where('user_id',auth()->id());
        if($user_wallet->first() != null){
            $user_wallet->increment('amount',$request->amount);
        }else{
            Wallet::create([
                'user_id'=>auth()->id(),
                'amount'=>$request->amount
            ]);
        }
        $recharge_link=auth()->user()->charge($request->amount, 'Test');
        return Redirect::to($recharge_link);
        // return back()->with('success','wallet recharged successfully');
    }
}
