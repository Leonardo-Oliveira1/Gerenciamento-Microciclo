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
            'TOG' => $this->TOG(),
            'hexanos' => $this->measurementConverter($this->getItemInfo("Hexano")->volume_measure, $this->getItemInfo("Hexano")->volume, $this->getItemQuantity("Hexano")),
            'filtros' => $this->measurementConverter($this->getItemInfo("Filtros")->volume_measure, $this->getItemInfo("Filtros")->volume, $this->getItemQuantity("Filtros"))]);
    }

    public function indexIRAP()
    {
        return view('experiments.IRAP', [
            'IRAP' => $this->IRAP(),
            'Sacarose' => $this->measurementConverter($this->getItemInfo("Sacarose")->volume_measure, $this->getItemInfo("Sacarose")->volume, $this->getItemQuantity("Sacarose")),
            'Ureia' => $this->measurementConverter($this->getItemInfo("Ureia")->volume_measure, $this->getItemInfo("Ureia")->volume, $this->getItemQuantity("Ureia")),
            'Extrato_de_levedura' => $this->measurementConverter($this->getItemInfo("Extrato de levedura 1kg")->volume_measure, $this->getItemInfo("Extrato de levedura 1kg")->volume, $this->getItemQuantity("Extrato de levedura 1kg")) + $this->measurementConverter($this->getItemInfo("Extrato de levedura 500g")->volume_measure, $this->getItemInfo("Extrato de levedura 500g")->volume, $this->getItemQuantity("Extrato de levedura 500g")),
            'KH2PO4' => $this->measurementConverter($this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume_measure, $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume, $this->getItemQuantity("Fosfato de potássio monobásico (KH2PO4)")),
            'K2HPO4' => $this->measurementConverter($this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg")->volume_measure, $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg")->volume, $this->getItemQuantity("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg")) + $this->measurementConverter($this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g")->volume_measure, $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g")->volume, $this->getItemQuantity("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g")),
            'MgSO47H2O' => $this->measurementConverter($this->getItemInfo("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)")->volume_measure, $this->getItemInfo("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)")->volume, $this->getItemQuantity("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)")),
            'FeSO47H2O' => $this->measurementConverter($this->getItemInfo("Sulfato de Ferro II (OSO - FeSO4.7H2O)")->volume_measure, $this->getItemInfo("Sulfato de Ferro II (OSO - FeSO4.7H2O)")->volume, $this->getItemQuantity("Sulfato de Ferro II (OSO - FeSO4.7H2O)")),
            'CuSO45H2O' => $this->measurementConverter($this->getItemInfo("Sulfato de Cobre II (ICO - CuSO4.5H2O)")->volume_measure, $this->getItemInfo("Sulfato de Cobre II (ICO - CuSO4.5H2O)")->volume, $this->getItemQuantity("Sulfato de Cobre II (ICO - CuSO4.5H2O)")),
            'MnSO4H2O' => $this->measurementConverter($this->getItemInfo("Sulfato de Manganês II (OSO - MnSO4.H2O)")->volume_measure, $this->getItemInfo("Sulfato de Manganês II (OSO - MnSO4.H2O)")->volume, $this->getItemQuantity("Sulfato de Manganês II (OSO - MnSO4.H2O)")),
            'ZnSO47H2O' => $this->measurementConverter($this->getItemInfo("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)")->volume_measure, $this->getItemInfo("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)")->volume, $this->getItemQuantity("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)")),
        ]);
    }

    public function indexPBS()
    {
        return view('experiments.PBS', [
            'PBS' => $this->PBS(),
            'NaCl' => $this->measurementConverter($this->getItemInfo("Cloreto de Sódio")->volume_measure, $this->getItemInfo("Cloreto de Sódio")->volume, $this->getItemQuantity("Cloreto de Sódio")),
            'KCl' => $this->measurementConverter($this->getItemInfo("Cloreto de Potássio (Tubo)")->volume_measure, $this->getItemInfo("Cloreto de Potássio (Tubo)")->volume, $this->getItemQuantity("Cloreto de Potássio (Tubo)")) + $this->measurementConverter($this->getItemInfo("Cloreto de Potássio (Pote)")->volume_measure, $this->getItemInfo("Cloreto de Potássio (Pote)")->volume, $this->getItemQuantity("Cloreto de Potássio (Pote)")),
            'Na2HPO4' => $this->measurementConverter($this->getItemInfo("Fosfato de Sódio Dibásico")->volume_measure, $this->getItemInfo("Fosfato de Sódio Dibásico")->volume, $this->getItemQuantity("Fosfato de Sódio Dibásico")),
            'KH2PO4' => $this->measurementConverter($this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume_measure, $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume, $this->getItemQuantity("Fosfato de potássio monobásico (KH2PO4)")),
        ]);
    }

    public function indexSACAROSE2()
    {
        return view('experiments.Sacarose2', [
            'Sacarose2' => $this->sacarose(),
            'Sacarose' => $this->measurementConverter($this->getItemInfo("Sacarose")->volume_measure, $this->getItemInfo("Sacarose")->volume, $this->getItemQuantity("Sacarose"))]);
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
            return ($volume * $quantity) * 0.001;
        }

        if ($measure == "L") {
            return ($volume * $quantity) * 1;
        }elseif ($measure == "ml") {
            return ($volume * $quantity) * 0.001;
        }

        if ($measure == "µL") {
            return ($volume * $quantity) * 0.000001;
        }


        //ITEMS WITHOUT MEASURE
        if ($measure == "") {
            return $quantity;
        }
    }

    //EXPERIMENTS CALC
    public function TOG()
    {
        $hexano_volume = $this->getItemInfo("Hexano")->volume;
        $hexano_measure = $this->getItemInfo("Hexano")->volume_measure;
        $hexano_quantity = $this->getItemQuantity("Hexano");

        $filtro_volume = $this->getItemInfo("Filtros")->volume;
        $filtro_measure = $this->getItemInfo("Filtros")->volume_measure;
        $filtro_quantity = $this->getItemQuantity("Filtros");

        //dd($filtro_measure, $filtro_volume, $filtro_quantity);
        $Hexano = $this->measurementConverter($hexano_measure, $hexano_volume, $hexano_quantity);
        $Filtro = $this->measurementConverter($filtro_measure, $filtro_volume, $filtro_quantity);

        $min_hexano = $Hexano >= 0.1;
        $min_filtro = $Filtro >= 2;

        if ($min_hexano && $min_filtro) {

            $possible_experiments_with_hexano = $Hexano / 0.1;
            $possible_experiments_with_filtro = $Filtro / 2;

            $max_experiments = round(min($possible_experiments_with_filtro, $possible_experiments_with_hexano), 0, PHP_ROUND_HALF_DOWN);

            return $max_experiments;
        }
    }

    public function IRAP()
    {
        $Sacarose_volume = $this->getItemInfo("Sacarose")->volume;
        $Sacarose_measure = $this->getItemInfo("Sacarose")->volume_measure;
        $Sacarose_quantity = $this->getItemQuantity("Sacarose");

        $Ureia_volume = $this->getItemInfo("Ureia")->volume;
        $Ureia_measure = $this->getItemInfo("Ureia")->volume_measure;
        $Ureia_quantity = $this->getItemQuantity("Ureia");

        $Extrato_de_levedura1kg_volume = $this->getItemInfo("Extrato de levedura 1kg")->volume;
        $Extrato_de_levedura1kg_measure = $this->getItemInfo("Extrato de levedura 1kg")->volume_measure;
        $Extrato_de_levedura1kg_quantity = $this->getItemQuantity("Extrato de levedura 1kg");

        $Extrato_de_levedura500g_volume = $this->getItemInfo("Extrato de levedura 500g")->volume;
        $Extrato_de_levedura500g_measure = $this->getItemInfo("Extrato de levedura 500g")->volume_measure;
        $Extrato_de_levedura500g_quantity = $this->getItemQuantity("Extrato de levedura 500g");

        $KH2PO4_volume = $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume;
        $KH2PO4_measure = $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume_measure;
        $KH2PO4_quantity = $this->getItemQuantity("Fosfato de potássio monobásico (KH2PO4)");

        $K2HPO41kg_volume = $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg")->volume;
        $K2HPO41kg_measure = $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg")->volume_measure;
        $K2HPO41kg_quantity = $this->getItemQuantity("Fosfato de potássio Bibásico Anidro (K2HPO4) 1kg");

        $K2HPO4500g_volume = $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g")->volume;
        $K2HPO4500g_measure = $this->getItemInfo("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g")->volume_measure;
        $K2HPO4500g_quantity = $this->getItemQuantity("Fosfato de potássio Bibásico Anidro (K2HPO4) 500g");

        $MgSO47H2O_volume = $this->getItemInfo("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)")->volume;
        $MgSO47H2O_measure = $this->getItemInfo("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)")->volume_measure;
        $MgSO47H2O_quantity = $this->getItemQuantity("Sulfato de Magnésio Heptahidratado (MgSO4.7H2O)");

        $FeSO47H2O_volume = $this->getItemInfo("Sulfato de Ferro II (OSO - FeSO4.7H2O)")->volume;
        $FeSO47H2O_measure = $this->getItemInfo("Sulfato de Ferro II (OSO - FeSO4.7H2O)")->volume_measure;
        $FeSO47H2O_quantity = $this->getItemQuantity("Sulfato de Ferro II (OSO - FeSO4.7H2O)");

        $CuSO45H2O_volume = $this->getItemInfo("Sulfato de Cobre II (ICO - CuSO4.5H2O)")->volume;
        $CuSO45H2O_measure = $this->getItemInfo("Sulfato de Cobre II (ICO - CuSO4.5H2O)")->volume_measure;
        $CuSO45H2O_quantity = $this->getItemQuantity("Sulfato de Cobre II (ICO - CuSO4.5H2O)");

        $MnSO4H2O_volume = $this->getItemInfo("Sulfato de Manganês II (OSO - MnSO4.H2O)")->volume;
        $MnSO4H2O_measure = $this->getItemInfo("Sulfato de Manganês II (OSO - MnSO4.H2O)")->volume_measure;
        $MnSO4H2O_quantity = $this->getItemQuantity("Sulfato de Manganês II (OSO - MnSO4.H2O)");

        $ZnSO47H2O_volume = $this->getItemInfo("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)")->volume;
        $ZnSO47H2O_measure = $this->getItemInfo("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)")->volume_measure;
        $ZnSO47H2O_quantity = $this->getItemQuantity("Sulfato de Zinco Heptahidratado (ZnSO4.7H2O)");

        //dd($filtro_measure, $filtro_volume, $filtro_quantity);

        $Sacarose = $this->measurementConverter($Sacarose_measure, $Sacarose_volume, $Sacarose_quantity);
        $Ureia = $this->measurementConverter($Ureia_measure, $Ureia_volume, $Ureia_quantity);
        $Extrato_de_levedura = ($this->measurementConverter($Extrato_de_levedura1kg_measure, $Extrato_de_levedura1kg_volume, $Extrato_de_levedura1kg_quantity)) + ($this->measurementConverter($Extrato_de_levedura500g_measure, $Extrato_de_levedura500g_volume, $Extrato_de_levedura500g_quantity));
        $KH2PO4 = $this->measurementConverter($KH2PO4_measure, $KH2PO4_volume, $KH2PO4_quantity);
        $K2HPO4 = ($this->measurementConverter($K2HPO41kg_measure, $K2HPO41kg_volume, $K2HPO41kg_quantity)) + ($this->measurementConverter($K2HPO4500g_measure, $K2HPO4500g_volume, $K2HPO4500g_quantity));
        $MgSO47H2O = $this->measurementConverter($MgSO47H2O_measure, $MgSO47H2O_volume, $MgSO47H2O_quantity);
        $FeSO47H2O = $this->measurementConverter($FeSO47H2O_measure, $FeSO47H2O_volume, $FeSO47H2O_quantity);
        $CuSO45H2O = $this->measurementConverter($CuSO45H2O_measure, $CuSO45H2O_volume, $CuSO45H2O_quantity);
        $MnSO4H2O = $this->measurementConverter($MnSO4H2O_measure, $MnSO4H2O_volume, $MnSO4H2O_quantity);
        $ZnSO47H2O = $this->measurementConverter($ZnSO47H2O_measure, $ZnSO47H2O_volume, $ZnSO47H2O_quantity);

        $min_sacarose = $Sacarose >= 0.05;
        $min_ureia = $Ureia >= 0.002;
        $min_extrato_de_levedura = $Extrato_de_levedura >= 0.005;
        $min_KH2PO4 = $KH2PO4 >= 0.001;
        $min_K2HPO4 = $K2HPO4 >= 0.008;
        $min_MgSO47H2O = $MgSO47H2O >= 0.001;
        $min_FeSO47H2O = $FeSO47H2O >= 0.0001;
        $min_CuSO45H2O = $CuSO45H2O >= 0.0000088;
        $min_MnSO4H2O = $MnSO4H2O >= 0.0000076;
        $min_ZnSO47H2O = $ZnSO47H2O >= 0.00001;

        if ($min_sacarose && $min_ureia && $min_extrato_de_levedura
        && $min_KH2PO4 && $min_K2HPO4 && $min_MgSO47H2O && $min_FeSO47H2O
        && $min_CuSO45H2O && $min_MnSO4H2O && $min_ZnSO47H2O) {

            $possible_experiments_with_sacarose = $Sacarose / 0.05;
            $possible_experiments_with_ureia = $Ureia / 0.002;
            $possible_experiments_with_extrato_de_levedura = $Extrato_de_levedura / 0.005;
            $possible_experiments_with_KH2PO4 = $KH2PO4 / 0.001;
            $possible_experiments_with_K2HPO4 = $K2HPO4 / 0.008;
            $possible_experiments_with_MgSO47H2O = $MgSO47H2O / 0.001;
            $possible_experiments_with_FeSO47H2O = $FeSO47H2O / 0.0001;
            $possible_experiments_with_CuSO45H2O = $CuSO45H2O / 0.0000088;
            $possible_experiments_with_MnSO4H2O = $MnSO4H2O / 0.0000076;
            $possible_experiments_with_ZnSO47H2O = $ZnSO47H2O / 0.00001;


            $max_experiments = round(min($possible_experiments_with_sacarose,
            $possible_experiments_with_ureia,
            $possible_experiments_with_extrato_de_levedura,
            $possible_experiments_with_KH2PO4, $possible_experiments_with_K2HPO4,
            $possible_experiments_with_MgSO47H2O,
            $possible_experiments_with_FeSO47H2O,
            $possible_experiments_with_CuSO45H2O,
            $possible_experiments_with_MnSO4H2O,
            $possible_experiments_with_ZnSO47H2O), 0, PHP_ROUND_HALF_DOWN);


            return $max_experiments;

        }
    }

    public function PBS()
    {
        $NaCl_volume = $this->getItemInfo("Cloreto de Sódio")->volume;
        $NaCl_measure = $this->getItemInfo("Cloreto de Sódio")->volume_measure;
        $NaCl_quantity = $this->getItemQuantity("Cloreto de Sódio");

        $KCl_tubo_volume = $this->getItemInfo("Cloreto de Potássio (Tubo)")->volume;
        $KCl_tubo_measure = $this->getItemInfo("Cloreto de Potássio (Tubo)")->volume_measure;
        $KCl_tubo_quantity = $this->getItemQuantity("Cloreto de Potássio (Tubo)");

        $KCl_pote_volume = $this->getItemInfo("Cloreto de Potássio (Pote)")->volume;
        $KCl_pote_measure = $this->getItemInfo("Cloreto de Potássio (Pote)")->volume_measure;
        $KCl_pote_quantity = $this->getItemQuantity("Cloreto de Potássio (Pote)");

        $Na2HPO4_volume = $this->getItemInfo("Fosfato de Sódio Dibásico")->volume;
        $Na2HPO4_measure = $this->getItemInfo("Fosfato de Sódio Dibásico")->volume_measure;
        $Na2HPO4_quantity = $this->getItemQuantity("Fosfato de Sódio Dibásico");

        $KH2PO4_volume = $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume;
        $KH2PO4_measure = $this->getItemInfo("Fosfato de potássio monobásico (KH2PO4)")->volume_measure;
        $KH2PO4_quantity = $this->getItemQuantity("Fosfato de potássio monobásico (KH2PO4)");

        $NaCl = $this->measurementConverter($NaCl_measure, $NaCl_volume, $NaCl_quantity);
        $KCl = ($this->measurementConverter($KCl_tubo_measure, $KCl_tubo_volume, $KCl_tubo_quantity)) + ($this->measurementConverter($KCl_pote_measure, $KCl_pote_volume, $KCl_pote_quantity));
        $Na2HPO4 = $this->measurementConverter($Na2HPO4_measure, $Na2HPO4_volume, $Na2HPO4_quantity);
        $KH2PO4 = $this->measurementConverter($KH2PO4_measure, $KH2PO4_volume, $KH2PO4_quantity);

        $min_NaCl = $NaCl >= 0.008;
        $min_KCl = $KCl >= 0.0002;
        $min_Na2HPO4 = $Na2HPO4 >= 0.0014;
        $min_KH2PO4 = $KH2PO4 >= 0.0002;

        if ($min_NaCl && $min_KCl && $min_Na2HPO4 && $min_KH2PO4) {

            $possible_experiments_with_NaCl = $NaCl / 0.008;
            $possible_experiments_with_KCl = $KCl / 0.0002;
            $possible_experiments_with_Na2HPO4 = $Na2HPO4 / 0.0014;
            $possible_experiments_with_KH2PO4 = $KH2PO4 / 0.0002;

            $max_experiments = round(min($possible_experiments_with_NaCl, $possible_experiments_with_KCl, $possible_experiments_with_Na2HPO4, $possible_experiments_with_KH2PO4), 0, PHP_ROUND_HALF_DOWN);

            return $max_experiments;
        }
    }

    public function sacarose()
    {
        $Sacarose_volume = $this->getItemInfo("Sacarose")->volume;
        $Sacarose_measure = $this->getItemInfo("Sacarose")->volume_measure;
        $Sacarose_quantity = $this->getItemQuantity("Sacarose");

        $Sacarose = $this->measurementConverter($Sacarose_measure, $Sacarose_volume, $Sacarose_quantity);

        $min_sacarose = $Sacarose >= 0.002;

        if ($min_sacarose) {

            $possible_experiments_with_sacarose = $Sacarose / 0.002;

            $max_experiments = round($possible_experiments_with_sacarose, 0, PHP_ROUND_HALF_DOWN);

            return $max_experiments;

        }
    }
}
