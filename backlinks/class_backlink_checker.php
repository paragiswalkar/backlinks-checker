<?php
class Backlink_Checker {
	
	var $url; 
	var $content; 
	var $links; 
	var $link_to_check; 
	function __construct($url, $link_to_check) { 
		
		$this->url = $url; 
		$this->link_to_check = $link_to_check; 
	}
	
	function set_link_to_check( $link ) {
		
		$this->link_to_check = $link; 
	}
	
	function get_contents() { 
		$this->content = file_get_contents($this->url); 
	}  
	
	function fetch_links() {
		
		$regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
		preg_match_all( "/$regexp/siU", $this->content, $matches );
		$this->links = $matches;
		
		return $matches; 
	}
	
	function check() {
		foreach($this->links[2] as $key => $url) {
			if ($this->link_to_check == $url)
				return TRUE; 
		}
		
		return FALSE;	
	}
	
} // end class
?>