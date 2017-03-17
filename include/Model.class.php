<?php
class Model {


    public static $dbConW = '';


    public function __construct() {
        self::model();
    }

    static public function model() {
        global $dbConW;
        self::$dbConW = $dbConW;

    }

}
?>
