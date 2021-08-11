<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['nome','editora','id_autor'];
    public $timestamps = false;

    protected $table = 'livros';

    public function autores()
    {
        return $this->belongsTo(Autor::class);
    }
}
