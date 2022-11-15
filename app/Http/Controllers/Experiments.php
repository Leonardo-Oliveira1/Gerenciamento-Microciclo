<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ItemStock;
use App\Item;


class Experiments extends Controller
{
    public function indexTOG()
    {
        return view('experiments.TOG', [
            'calculo' => $this->calculo()]);
    }

    public function getItemInfo($name){
        $item = Item::where('name', "=", $name)->first();

        return $item;
    }

    public function getItemQuantity($name){
        $total = ItemStock::where('name', "=", $name)->sum("quantity");

        return $total;
    }

    public function measurementConverter($measure, $volume, $quantity){
        if($measure == "Kg"){
            return ($volume * $quantity) * 1;
        }elseif ($measure == "g") {
            return ($volume * $quantity) * 0.1;
        }

        if ($measure == "L") {
            return ($volume * $quantity) * 1;
        }elseif ($measure == "ml") {
            return ($volume * $quantity) * 0.1;
        }

        if ($measure == "µL") {
            return ($volume * $quantity) * 0.000001;
        }


        //bug nos itens que não possuem medidas
        if ($measure == " ") {
            return ($volume * $quantity) * 1;
        }
    }

    public function calculo()
    {
        $agar_volume = $this->getItemInfo("Agar Bacteriológico")->volume;
        $agar_measure = $this->getItemInfo("Agar Bacteriológico")->volume_measure;
        $agar_quantity = $this->getItemQuantity("Agar Bacteriológico");

        $filtro_volume = $this->getItemInfo("Filtro")->volume;
        $filtro_measure = $this->getItemInfo("Filtro")->volume_measure;
        $filtro_quantity = $this->getItemQuantity("Filtro");

        $Hexano = $this->measurementConverter($agar_measure, $agar_volume, $agar_quantity);
        $Filtro = $this->measurementConverter($filtro_measure, $filtro_volume, $filtro_quantity);

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
