<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $fillable = ['hari', 'tanggal', 'nominal', 'kategori', 'keterangan'];
}
