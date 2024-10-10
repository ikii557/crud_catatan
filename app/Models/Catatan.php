<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catatan extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "judul",
        "deskripsi",
        "isi_catatan",
        "tanggal_dibuat"
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
