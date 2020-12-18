<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	private function api_search_video($data)
	{
		$url 		 = 	'https://www.googleapis.com/youtube/v3/search?key=';
		$key 		 = 	'';
		$param 		 =	'&part=snippet&q='.$data.'&maxResults=36';
		$url_api	 = 	$url.$key.$param;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_api);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$result = json_decode(curl_exec($ch));
		curl_close($ch);
		
		if (empty($result)){
			return false;
		}
		else{
			return ($result);
		}
	}
	
	public function api()
	{
		$tes = urlencode($this->input->get()["q"]);
		$result = $this->api_search_video($tes);
		/*
		echo"<pre>";
		print_r($result);
		echo"</pre>";
		*/
		
		$data["data"] = $result;
		$this->load->view("Home_v", $data);
	}
	
	public function index()
	{
		$data["data"] = '';
		$this->load->view("Home_v", $data);
	}
}
