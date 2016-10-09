<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $fillable = [
        'nama_polis',
        'nama_pemegang',
        'nama_tertanggung',
        'kirim'
    ];
}
