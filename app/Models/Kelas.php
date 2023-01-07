<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'tema',
        'tipe',
        'judul',
        'deskripsi_singkat',
        'nama_pembicara',
        'deskripsi_singkat_pembicara',
        'poin_materi',
        'rangkaian_materi',
        'image',
    ];

    public function users() {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(User::class, 'kelas_users', 'kelas_id', 'user_id');
    }
}
