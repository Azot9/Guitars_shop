<?php

namespace App\Http\Controllers;

use App\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{

    private $buyer;
    public function __construct()
    {
        $this->buyer = new Buyer();
    }

    public function showBuy(){
       return view('buy');
   }

    public function buy(){
        $this->buyer->buyGuitar();
        return view('buy');
    }
}
