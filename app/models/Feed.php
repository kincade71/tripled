<?php
class Feed{
	
	/**
	 * 
	 */
	public static function DDD(){
		$response = file_get_contents('http://api.jamedy.com/feeds/clearchannel?id=45166');
		return json_decode($response,TRUE);
	}
	
	/**
	 *
	 */
	public static function diva_approved(){
		$response = file_get_contents('http://api.jamedy.com/hashtags/instagram?user=dominiquedadiva&tag=divaapproved');
		return json_decode($response,TRUE);
	}
	
	/**
	 *
	 */
	public static function diva_images(){
		$response = file_get_contents('http://api.jamedy.com/images/instagram?user=dominiquedadiva&tag=divaapproved');
		return json_decode($response,TRUE);
	}
}