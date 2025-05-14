<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'spt',
        'barang',
        'kondisi barang',
        'tanggal'];
    protected $table = 'peminjaman';
}
