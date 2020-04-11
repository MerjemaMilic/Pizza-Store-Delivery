<?php

class util{

    public function render($viewname, $args=array()){
        Flight::render($viewname.".php", $args);
    }
}
