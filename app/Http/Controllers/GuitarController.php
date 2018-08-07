<?php

namespace App\Http\Controllers;

use App\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    private $guitar;

    public function __construct()
    {
        $this->guitar = new Guitar();
    }

    public function showGuitars()
    {
        $guitars = Guitar::paginate(6);
        return view('guitars', compact('guitars'));
    }

    public function adminGuitars(){
        $this->guitar->adminChange();
        return view('admin');
    }

    public function showCart()
    {
        if(!isset($_SESSION))
            session_start();
        if(!isset($_SESSION['array']) || count($_SESSION['array']) == 0){
            return view('empty');
        }
        else {
            return Guitar::fullCart();
        }
    }

    public function addGuitar(){
        Guitar::cartAdd($_POST['add']);
        return $this->showGuitars();
    }



    public function remove(){
        Guitar::removeFromCart();
        return $this->showCart();
    }
}
