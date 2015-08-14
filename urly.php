<?php
	
	/*
	 * Urly - An URL cleaner
	 * Follow me @jakebown1
	 * http://jakebown.com
	 */

	class urly {
	
		function __construct($url, $noParams = false, $host) {
			$this->url = $url;
			$this->protocol = "http";
			$this->host = $host;
			$this->W3;
			$this->domain;
			$this->ext;
			$this->isAbs = false;
			$this->params;
			$this->noParams = $noParams;
		}

		function run() {

			$url = $this->url;
			$cut = explode('://', $url);
			if(count($cut) == 2) {
				$this->protocol = $cut[0]; //http-https
				$url = $cut[1] . '/';
			}

			if(substr($url, 0, 4) == "www.") {
				$this->W3 = 'www.';
				$url = str_replace('www.',null,$url);
			} 

			if(substr($url, 0, 1) == "/" || substr($url, 0, 1) == "?" || substr($url, 0, 1) == "#") {
				if(isset($this->host)) {
					$this->isAbs = true;
					$url = $this->host . $url;
				} else {
					die('You can\'t give me a relative path without setting the <code>$this->host</code> variable first.');
				}
			} 
	 
			$this->domain = substr($url, 0, strpos($url, '.'));
			$url = str_replace($this->domain,null,$url);

			if(substr($url, 0, 1) == '.') {
				$this->ext = substr($url, 0, strpos($url, '/'));
				if($this->ext) {	
					$url = str_replace($this->ext,null,$url);
				} else {
					$this->ext = substr($url, 0, strpos($url, '?'));
					if($this->ext) {
						$url = str_replace($this->ext,null,$url);
					} else {
						$this->ext = substr($url, 0, strpos($url, '#'));
						if($this->ext) {
							$url = str_replace($this->ext,null,$url);
						}
					}
				} 
			}

			if($url == '/') {
				//End of string
			} else {

				if(!$this->noParams) {
					$this->params = $url;
				}
			}

			if($this->isAbs) {
				return $this->W3 . $this->domain . $this->ext . $this->params;
			} else {
				return $this->protocol . '://' . $this->W3 . $this->domain . $this->ext . $this->params;
			}
		}
	}

?>
