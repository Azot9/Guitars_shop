<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Support\Facades\DB;


class Buyer extends Model
{
    public function buyGuitar()
    {
        if (count($_POST) > 0) {
            $this->name = $_POST['name'];
            $this->surname = $_POST['surname'];
            $this->phone_number = $_POST['phone_number'];
            $this->e_mail = $_POST['e_mail'];

            $this->save();
            session_start();
            foreach ($_SESSION['array'] as $guitars_id => $guitars )
                DB::insert('insert into buyer_guitar (buyer_id, guitar_id) values (?, ?)', [$this->id, $_SESSION['array'][$guitars_id]]);
            Guitar::deleteAll();

            return view('main');
        }
    }
}
