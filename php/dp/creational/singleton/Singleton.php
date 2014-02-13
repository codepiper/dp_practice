<?php

class Singleton {
    
    private $singleton_instance = null;
    
    private function __construct(){
        
    }
    
    public static function getInstance(){
        if(empty(self::$singleton_instance)){
            self::$singleton_instance = new Singleton();
        }
        return self::$singleton_instance;
    }
    
    public function conenct(){
        
    }
    public function query(){
        
    }
    public function disconnect(){
        
    }
    
}

$database = Database::getInstance();

