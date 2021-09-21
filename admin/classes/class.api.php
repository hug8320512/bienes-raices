<?php 
class Api {

    protected $apiKey = '7213d44a7d2b5b86b9a1e0224bf8184f9444f57685e8e6f6fc8df4817dacf687';
    protected $apiUrl = "https://backend.klosing.mx/public-api";


    protected function runRequest($url, $data = null) {

        $cURLConnection = curl_init();
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($cURLConnection, CURLOPT_URL, $url);
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
			'Authorization: Token ' . $this->apiKey
		));


        if($data !== null) {
            curl_setopt($cURLConnection, CURLOPT_POST, true);
            curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $data);

            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
                'Authorization: Token ' . $this->apiKey,
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            ));
        }
		
		$response = json_decode(curl_exec($cURLConnection), true);
        curl_close($cURLConnection);

        return $response;
    }

}