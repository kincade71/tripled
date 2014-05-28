<?php
class Feed{
	
	/**
	 * 
	 */
	public static function DDD(){
		try{
			$response = file_get_contents('http://api.jamedy.com/feeds/clearchannel?id=45166');
		}catch(Exception $e){

		}	
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}
	
	/**
	 *
	 */
	public static function diva_approved(){
		try{
			$response = file_get_contents('http://api.jamedy.com/hashtags/instagram?user=dominiquedadiva&tag=divaapproved');
		}catch(Exception $e){

		}
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}
	
	/**
	 *
	 */
	public static function diva_images(){
		try{
			$response = file_get_contents('http://api.jamedy.com/images/instagram?user=dominiquedadiva');
		}catch(Exception $e){

		}
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}
}