<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public function namauser()
	{
		return $this->hasMany("App\User");
	}
}
