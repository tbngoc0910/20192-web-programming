<?php
Class PropertyTest{
    private $data = array();
    public $declared = 1;
    private $hidden = 2;
    
    public function __set($name, $value){
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }
    
    public function __get($param) {
        echo "Getting '$param'\n";
        if(array_key_exists($param, $this->data)){
            return $this->data[$param];
        }
        $trace = debug_backtrace();
        trigger_error('Underfined property via __get(): '. $param.
                ' in '.$trace[0]['file'].
                ' online '.$trace[0]['line'],
                E_USER_ERROR);
        return null;
    }

    public function __isset($param) {
        echo "is '$param' set?\n";
        return isset($this->data[$param]);
    }
    
    public function __unset($name) {
        echo "unsetting '$name'\n";
        unset($this->data[$name]);
    }
    
    public function getHidden(){
        return $this->hidden;
    }
}

echo "<pre>\n";
$obj = new PropertyTest;

$obj->a = 1;
echo $obj->a. "\n\n";
var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";
echo $obj->declared. "\n\n";
echo "Let's experiment with the private property named 'hidden': \n";
echo "Privates are visible inside the class, so __get() not used...\n";
echo $obj->getHidden()."\n";
echo "Privates not visible outside of class, so __get() is used...\n";
echo $obj->hidden."\n";
?>
