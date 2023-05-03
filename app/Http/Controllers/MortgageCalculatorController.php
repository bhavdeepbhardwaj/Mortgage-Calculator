<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MortgageCalculatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'purchase_price' => 'required|numeric',
            'down_payment' => 'required|numeric',
            'repayment_time' => 'required|numeric|min:1',
            'interest_rate' => 'required|numeric|min:0|max:100',
        ]);

        $purchasePrice = $request->input('purchase_price');
        $downPayment = $request->input('down_payment');
        $loanAmount = $purchasePrice - $downPayment;
        // $repaymentTime = $request->input('repayment_time') * 12;
        $repaymentTime = $request->input('repayment_time');
        $interestRate = $request->input('interest_rate') / 1200;

        $monthlyPayment = ($loanAmount * $interestRate) / (1 - pow(1 + $interestRate, -$repaymentTime));

        return view('welcome', [
            'loanAmount' => $loanAmount,
            'monthlyPayment' => $monthlyPayment,
        ]);
    }
}
