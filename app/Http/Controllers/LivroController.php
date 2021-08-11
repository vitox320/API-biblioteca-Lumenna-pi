<?php


namespace App\Http\Controllers;


use App\Models\Livro;

class LivroController extends BaseController
{
    public function __construct()
    {
        $this->classe = Livro::class;
    }
}
