<?php
class Feed{

	public static function DDD(){
		$response = file_get_contents('http://api.jamedy.com/feeds/clearchannel?id=45166');
		return json_decode($response,TRUE);
	}
}