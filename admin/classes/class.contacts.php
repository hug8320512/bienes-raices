<?php
require_once("class.api.php");
class Contacts extends Api {

    protected $properties;
	private static $instancia;

    public static function createInstance() {
		if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        } 
        return self::$instancia;
	}
    

    public function save($data = null) {
        $data = json_encode($data);
        $url = $this->apiUrl . "/contacts";
        $response = $this->runRequest($url, $data);

        return $response;
    }


    // Avoid Object clone
    public function __clone() {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

}



