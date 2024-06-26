<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPegawai extends Model
{
    use HasFactory;

    protected $table = 'master_pegawai';

    protected $guarded = ['id'];

    protected $fillable = ['nama'];

    public function user()
    {
        return $this->hasOne(User::class, 'pegawai_id', 'id');
    }
}
