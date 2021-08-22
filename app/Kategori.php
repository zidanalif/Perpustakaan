<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'kategori';
    protected $table = 'table_kategori';
    protected $fillable = ['deskripsi'];
}
