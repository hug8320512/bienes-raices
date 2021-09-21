<?php
require_once("class.api.php");
class Website extends Api {

	private static $instancia;

    public static function createInstance() {
		if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        } 
        return self::$instancia;
	}
    

    /************** LISTINGS *************/
    
    public function getInfo() {

        $url = $this->apiUrl . "/website";
        $response = $this->runRequest($url);
        return $response;
    }


    // Avoid Object clone
    public function __clone() {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

}



