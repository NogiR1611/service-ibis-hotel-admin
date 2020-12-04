<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPromosi extends Model
{
    use HasFactory;
    protected $table = 'list_promosi';
    protected $fillable = ['judul_promosi','penulis','periode','syarat','foto','deskripsi','kontak'];
}
