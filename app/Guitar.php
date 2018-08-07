<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    public  $timestamps = false;


    public static function cartAdd($id)
    {
        session_start();
        if(!isset( $_SESSION['array']))
            $_SESSION['array'] = array("$id" => $id);
        else
            $_SESSION['array'][$id] = $id;
    }


    public  function adminChange(){
        if (count($_POST) > 0) {
            if (isset($_POST['ins'])) {
                $this->name = $_POST['guitar_name'];
                $this->price = $_POST['guitar_price'];
                $this->model = $_POST['guitar_model'];
                $this->save();
                return view('admin');
            }
            if (isset($_POST['up'])) {
                $up = DB::update('update goods set price = ?, name = ?, model = ? where id = ?',
                    [$_POST['guitar_price'], $_POST['guitar_name'], $_POST['guitar_model'], $_POST['guitar_id']]);
                return view('admin');
            }
            if (isset($_POST['del'])) {
                $deleted = DB::delete('delete from goods where id = ?', [$_POST['guitar_id']]);
                return view('admin');
            }
        }
        else   return view('golovna');
    }

    public static function fullCart()
    {
        $guitars = Guitar::find($_SESSION['array']);
        return view('cart', compact('guitars'));
    }

    public static function removeFromCart(){
        session_start();
        $remove = $_POST['remove'];
        if($_SESSION['array'][$remove] == $remove )
            unset($_SESSION['array'][$remove]);
    }

    public static function deleteAll(){
        if(!isset($_SESSION))
            session_start();
        unset($_SESSION['array']);
    }
}
