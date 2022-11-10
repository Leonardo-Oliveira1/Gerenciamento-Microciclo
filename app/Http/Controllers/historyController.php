<?php

namespace App\Http\Controllers;

use App\History;

class historyController extends Controller
{
    public function index(){
        return view('history', [
            'histories' => $this->histories()]);
    }

    public function histories(){
        $history = History::orderBy('created_at', 'DESC')->get();

        return $history;
    }

    public function saveDataHistory($user, $action, $type){
        $history = new History;

        $text = "$action '$type'";

        $history->user = $user;
        $history->text = $text;

        $history->save();

    }

    public function saveStockAddHistory($user, $quantity, $type){
        $history = new History;

        $text = "adicionou $quantity unidades de '$type'";

        $history->user = $user;
        $history->text = $text;

        $history->save();

    }
}
