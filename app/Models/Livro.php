<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\StoreUpdateLivro;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'idioma', 'ano', 'ibsn'];

}
