<?php

class AddAnnouncementTest extends TestCase{

	public function testAddAnnoun(){

		$Id = "1";
		$Topic = "Testttttttttt";
		$Detail = "Hello!";
		$Time = "2014-11-13 23:16:17";
		$IdUser = "55010911";
		
		$addAnnoun = new Announcement;
		$addAnnoun->setId($Id);
		$addAnnoun->setTopic($Topic);
		$addAnnoun->setDetail_An($Detail);
		$addAnnoun->setId_user($IdUser);
		$addAnnoun->setTime($Time);
		$test = $addAnnoun;
	
		$this->assertEquals($Id,$addAnnoun->getId_topic($Id));
		$this->assertEquals($Topic,$addAnnoun->getTopic($Topic));
		$this->assertEquals($Detail,$addAnnoun->getDetail_An($Detail));
		$this->assertEquals($Time,$addAnnoun->getTime_An($Time));
		$this->assertEquals($IdUser,$addAnnoun->getId_user($IdUser));

	}

}


?>