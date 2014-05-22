<?php

class MyGetTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testGetIndex()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

		public function testGetDaDailyDirt()
	{
		$crawler = $this->client->request('GET', '/Da_Daily_Dirt/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

		public function testGetTopicoftheDay()
	{
		$crawler = $this->client->request('GET', '/Topic_of_the_Day/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

		public function testGetDivaApproved()
	{
		$crawler = $this->client->request('GET', '/Diva_Approved/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
