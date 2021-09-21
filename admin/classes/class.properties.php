<?php
require_once("class.api.php");
class Properties extends Api {

    protected $properties;
	private static $instancia;

    public static function createInstance() {
		if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        } 
        return self::$instancia;
	}
    

    /************** LISTINGS *************/
    
    public function getExclusives($page = 1, $itemsPerPage = 20) {

        $url = $this->apiUrl . "/properties/exclusives?page=$page&itemsPerPage=$itemsPerPage";
        $response = $this->runRequest($url);
        return $response;
    }

    public function getForSale($page = 1, $itemsPerPage = 20) {

        $url = $this->apiUrl . "/properties/search?operation=venta&page=$page&itemsPerPage=$itemsPerPage";
        $response = $this->runRequest($url);
        return $response;
    }

    public function getForRent($page = 1, $itemsPerPage = 20) {

        $url = $this->apiUrl . "/properties/search?operation=renta&page=$page&itemsPerPage=$itemsPerPage";
        $response = $this->runRequest($url);
        return $response;
    }

    
    public function get($title) {

        $title = explode("-", $title);
        $index = count($title) -1;
        $propertyId = $title[$index];

        $url = $this->apiUrl . "/properties/$propertyId";
        $response = $this->runRequest($url);

        return $response;
    }

    public function getTypes() {

        $url = $this->apiUrl . "/properties-types";
        $response = $this->runRequest($url);
        return $response;
    }

    public function getDestinations() {

        $url = $this->apiUrl . "destinations";
        $response = $this->runRequest($url);
        return $response;
    }

    public function search($filters = [], $sortBy='', $page = 1, $itemsPerPage = 20) {

        $queryString = "?page=$page&itemsPerPage=$itemsPerPage";

        if($filters["destination"]) {
            $queryString .= "&destination=" . $filters['destination'];
        }

        if($filters["type"]) {
            $queryString .= "&type=" . $filters['type'];
        }

        if($filters["operation"]) {
            $queryString .= "&operation=" . $filters['operation'];
        }

        if($sortBy) {
            $queryString .= "&sort_by=" . $sortBy;
        }

        $url = $this->apiUrl . "/properties/search/$queryString";
        $response = $this->runRequest($url);

        return $response;
    }






    /************** UTILS *************/

    public function renderMainPhoto($property) {
        $defaultImage = "http://bozati.com/images/defaults/property.jpg";
        $src = $property["gallery"][0]['thumb'] ?? $defaultImage;
        $title = $property["title"];

        echo "<img src='$src' alt='$title' />";
    }

    public function getUrlFormat($string) {
        $title = strtolower( self::removeAccents($string) );
		$title = str_replace(" ", "-", $title);
		$title = preg_replace('/[^A-Za-z0-9\-]/', '', $title);
		$title = preg_replace('/-+/', '-', $title);
        return $title;   
    }

    public function isLand($property) {

        $type = $property["type"] ?? "";
        return $type === "Terrenos";
    }

    public function isValidPropertyType($propertyTypeSlug) {
        $types = $this->getTypes();
        foreach($types as $t) {
            if($t["slug"] === $propertyTypeSlug)
                return true;
        }

        return false;
    }

    public function getFilters() {
        return [
            "destination"   => $_GET["destination"] ?? NULL,
            "type"          => $_GET["type"]        ?? NULL,
            "operation"     => $_GET["operation"]   ?? NULL
        ];
    }

    public function getSortBy() {
        return $_GET["sort_by"] ?? NULL;
    }







    /************** PRIVATE AND PROTECTED METHODS*************/

	private static function removeAccents($str) {
		$a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
		$b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
		return str_replace($a, $b, $str);
	}


    // Avoid Object clone
    public function __clone() {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }

}



