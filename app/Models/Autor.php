<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nome','idade'];
    public $timestamps = false;

    protected $table = 'autores';

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}
