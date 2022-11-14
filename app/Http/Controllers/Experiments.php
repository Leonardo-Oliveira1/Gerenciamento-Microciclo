<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemStock;


class Experiments extends Controller
{
    public function indexTOG()
    {
        return view('experiments.TOG', [
            'calculo' => $this->calculo()]);
    }

    public function calculo()
    {
        $Hexano = 0.8;
        $Filtro = 14;

        //se hexano 0.1 e filtro 2 = 1 experimentos
        //se hexano 0.8 e filtro 4 = 2 experimentos
        //se hexano 0.8 e filtro 16 = 8 experimentos
        $min_hexano = $Hexano >= 0.1;
        $min_filtro = $Filtro >= 2;

        if ($min_hexano && $min_filtro) {

            $possible_experiments_with_hexano = $Hexano / 0.1;
            $possible_experiments_with_filtro = $Filtro / 2;

            if ($possible_experiments_with_hexano > $possible_experiments_with_filtro){
                $max_experiments = round($possible_experiments_with_filtro, 0, PHP_ROUND_HALF_DOWN);
            }else{
                $max_experiments = round($possible_experiments_with_hexano, 0, PHP_ROUND_HALF_DOWN);
            }

            return "É possível realizar este experimento $max_experiments vezes com os recursos disponíveis.";
        } else {
            return "Não há recursos suficientes para realizar este experimento.";
        }
    }
}
