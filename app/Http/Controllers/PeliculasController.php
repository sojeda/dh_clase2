<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public $peliculas = [
		1 => "Toy Story",
		2 => "Buscando a Nemo",
		3 => "Avatar",
		4 => "Star Wars: Episodio V",
		5 => "Up",
		6 => "Mary and Max"
	];

	public function listado()
	{
		return view('peliculas.listado')->with('movies', $this->peliculas);
	}

	public function buscarPeliculaId($id)
	{
		$pelicula = array_key_exists($id, $this->peliculas) ? $this->peliculas[$id] : null;
		
		return view('peliculas.peliculas')->with('movie', $pelicula);
	}

}
