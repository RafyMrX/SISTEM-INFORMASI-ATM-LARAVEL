<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Money extends Model
{
	// PROSES MENAMPILKAN SALDO
	
	public function saldo(){
		$moneys = DB::table('moneys')->get();

		return $moneys;
	}

	// PROSES ADD SALDO 
	public function add($id, $mon){

		$uang = DB::table('moneys')->where('id',$id)->first();
		$hasil = $mon + $uang->money; 
		DB::table('moneys')->where('id', $id)->update([
			'money' => $hasil
		]);

		return true;
	}

	// PROSES TRANSFER SALDO

	public function transfer($id, $mon){

		$uang = DB::table('moneys')->where('id',$id)->first();
		$hasil = $uang->money - $mon; 
		DB::table('moneys')->where('id', $id)->update([
			'money' => $hasil
		]);

		return true;
	}


}
