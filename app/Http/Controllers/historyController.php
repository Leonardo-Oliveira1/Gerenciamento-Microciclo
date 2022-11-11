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
        $history = History::orderBy('created_at', 'DESC')->take(20)->get();

        return $history;
    }

    public function StockHistory($user, $units, $item, $text){
        $history = new History;

        $history->user = $user;
        $history->units = $units;
        $history->item = $item;
        $history->text = $text;

        $history->save();

    }
}
