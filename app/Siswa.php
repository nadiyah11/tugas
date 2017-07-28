<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
        protected $table = 'siswa';
        protected $fillable = ['nama','alamat','jk'];
    	protected $visible = ['nama','alamat','jk'];
    	public $timestamps = true;

}
