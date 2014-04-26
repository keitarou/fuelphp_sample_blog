<?php
namespace Model;

class Sample extends \Model {

    function set_header(){
        // setcookie("data", "データ", time()+60*60*24);
        header('Content-Type: application/json');
    }

}
