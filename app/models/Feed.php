<?php
class Feed{
	
	/**
	 * 
	 */
	public static function DDD(){
		try{
			$response = file_get_contents('http://api.jamedy.com/feeds/clearchannel?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}&auth='.md5('dominiquedadiva'.'diva123'));
		}catch(Exception $e){

		}	
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}
	
	/**
	 *ig 13540218
	 *tw 40025098
	 */
	public static function diva_approved(){
		try{
			$response = file_get_contents('http://api.jamedy.com/hashtags/instagram?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}&tag=divaapproved&auth='.md5('dominiquedadiva'.'diva123'));
		}catch(Exception $e){

		}
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}
	
	/**
	 * returns the topic of the day video or image
	 */
	public static function diva_totd($date){
		$ret = null;
		$data = null;
		try{
			$response = file_get_contents('http://api.jamedy.com/hashtags?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}&tag=tod&auth='.md5('dominiquedadiva'.'diva123'));
			$tod = json_decode($response,TRUE);
			foreach($tod['data'] as $key => $value){
				if( substr($value['create_date'],0,10) == $date && $value['source'] == "instagram"){
					if(count($value['images'])>0){
						$data = $value['images'];
					}else{
						$data = $value['videos'];
					}
				}
			}
			foreach ($data as $key => $value) {
				$ret = $value['std_res'];
			}
		}catch(Exception $e){

		}
		if(isset($response)){
			return $ret;
		}
	}

	/**
	 * returns the topic of the day instagram comments
	 */
	public static function diva_totd_comments(){
		$ret = array();
		$data = null;
		try{
			$response = file_get_contents('http://api.jamedy.com/hashtags?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}&tag=tod&auth='.md5('dominiquedadiva'.'diva123'));
			$tod = json_decode($response,TRUE);
			foreach($tod['data'] as $key => $value){
				if(count($value['comments'])>0){
					$data = $value['comments'];
				}
			}
		}catch(Exception $e){

		}
		if(isset($response)){
			return $data;
		}
	}
	/**
	 *
	 */
	public static function diva_events(){
		try{
			$response = file_get_contents('http://api.jamedy.com/hashtags?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}&tag=events&auth='.md5('dominiquedadiva'.'diva123'));
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
			$response = file_get_contents('http://api.jamedy.com/images/instagram?user={"clrchnl_id":"45166","tw_id":"2547015841","ig_id":"1372585495"}');
		}catch(Exception $e){

		}
		if(isset($response)){
			return json_decode($response,TRUE);
		}
	}

	/**
	 *
	 */
	public static function diva_intro_video(){
		$data = array();
		try{
			$response = file_get_contents('http://api.jamedy.com/videos/instagram?user={"clrchnl_id":"45166","tw_id":"40025098","ig_id":"13540218"}');
			$videos = json_decode($response,TRUE);
			$videocount = count($videos['data']);
			for ($i=0; $i < $videocount; $i++) { 
				$data[].= $videos['data'][$i]['std_res'];
			}
		$randomvideo = rand (0 ,$videocount-1);
		$data = $data[2];
		}catch(Exception $e){

		}
		if(isset($response)){
			return $data;
		}
	}
}