<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function Pegawai()
    {
        return $this->belongsTo(MasterPegawai::class, 'pegawai_id', 'id');
    }
}
