<?php

class Topic_of_the_DayController extends \BaseController {
	protected $layout = 'layouts.default';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response date('Y-m-d',time())
	 */
	public function index()
	{			
		$data = array();
		$data['totd'] = Feed::diva_totd(date('Y-m-d'));
		$data['comments'] = Feed::diva_totd_comments(date('Y-m-d'));
		$this->layout->Da_Daily_Dirt = null;
		$this->layout->Topic_of_the_Day = 'active';
		$this->layout->Diva_Approved = null;
		$this->layout->Events = null;
		$this->layout->title = "- Topic of the Day";
   		$this->layout->content = View::make('topic_of_the_day',$data);
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
