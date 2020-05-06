<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $fillable = ['hari', 'tanggal', 'nominal', 'kategori2', 'keterangan'];
}
