<?php


namespace App\Http\Controllers;


use App\Models\Autor;

class AutorController extends BaseController
{
    public function __construct()
    {
        $this->classe = Autor::class;
    }
}
