<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function index(){
        $lista = array();
        $lista["musicas"][0]["title"] = "I Want You Back";
        $lista["musicas"][0]["artist"] = "jakson fives";
        $lista["musicas"][0]["imageUrl"] = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/jackson-fives.jpeg";
        $lista["musicas"][0]["audioUrl"] = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/jackson-fives.mp3";

        $lista["musicas"][1]["title"]  = "Pra onde eu irei?";
        $lista["musicas"][1]["artist"]  = "Morada";
        $lista["musicas"][1]["imageUrl"] = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/morada.png";
        $lista["musicas"][1]["audioUrl"] = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/Pra-onde-eu-irei.mp3";


        //Consulta no banco de dados

        return response()->json($lista);


    }


  }
