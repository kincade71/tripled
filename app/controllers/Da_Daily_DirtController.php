<?php

class Da_Daily_DirtController extends \BaseController {
	protected $layout = 'layouts.default';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$data = array();
		$data['DDD'] = Feed::DDD();
		$this->layout->Da_Daily_Dirt = 'active';
		$this->layout->Topic_of_the_Day = null;
		$this->layout->Diva_Approved = null;
		$this->layout->Events = null;
		$this->layout->title = "- Da Daily Dirt";
   		$this->layout->content = View::make('da_daily_dirt',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
