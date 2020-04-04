<?php
    class BaseClass {
        protected $name = "BaseClass";
        function __construct() {
            print("In ".$this->name." contructor<br>");
        }
        function __destruct() {
            print("Destroying ".$this->name."<br>");
        }
    }
    class Subclass extends BaseClass{
        function __construct() {
            $this->name = "SubClass";
            parent::__construct();
        }
        function __destruct() {
            parent::__destruct();
        }
    }
    $obj1 = new SubClass();
    $obj2 = new BaseClass();
?>

