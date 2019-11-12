<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public function namauser()
	{
		return $this->hasOne("App\User");
    }
    
    public function hewantransaksi()
	{
		return $this->hasOne("App\Hewan");
    }
}
