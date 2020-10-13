<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneysController extends Controller
{

    // MENAMPILKAN 
    public function index()
    {
        $moneys = new Money();
        $moneys = $moneys->saldo();
        return view('informasi', ['moneys' => $moneys]);
    }

    // ADD SALDO
    public function addsaldo(Request $request)
    {
        $id = $request->input('id');
        $mon = $request->input('uang');

        $moneys = new Money();
        $moneys = $moneys->add($id, $mon);

        return redirect('/add')->with('status', 'SALDO BERHASIL DI TAMBAHKAN ');

    }


    // TRANSFER SALDO
    public function tf(Request $request){
        $id = $request->input('id');
        $mon = $request->input('uang');
        
        $moneys = new Money();
        $moneys = $moneys->transfer($id, $mon);

        return redirect('/transfer')->with('status', 'TRANSFER BERHASIL ');
    }

}
