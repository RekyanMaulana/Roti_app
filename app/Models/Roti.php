<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roti extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'roti';

    // Primary Key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi secara massal
    protected $fillable = ['nama_roti', 'deskripsi'];

    // Nonaktifkan penggunaan timestamps
    public $timestamps = false;
}