<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class akunModel extends Authenticatable
{
    protected $table = 'akun'; // Sesuaikan dengan nama tabel Anda
    protected $username = 'username'; // Sesuaikan dengan nama kolom pengenal pengguna Anda

}
