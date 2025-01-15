<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'tb_matkul'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel
    protected $returnType = 'object'; // Kembalikan data dalam bentuk object
    protected $allowedFields = ['nama_matkul', 'keterangan', 'kategori', 'sks', 'gambar']; // Kolom yang diizinkan
}