<?php

class EditSubjectTest extends TestCase{

	public static function mockEditSubject($ID,$inName_subject,$inTime_subject,$inDay_subject,$inRoom_subject,$inDetail){
			
			$editSubject = new Subject;
			$editSubject->setId_subject($ID);
			$editSubject->setName_subject($inName_subject);
			$editSubject->setTime_subject($inTime_subject);
			$editSubject->setDay_subject($inDay_subject);
			$editSubject->setRoom_subject($inRoom_subject);
			$editSubject->setDetail_subject($inDetail);
			return $editSubject;
	}

	public function testEditSubject(){

		$ID = "12345678";
		$Name_subject = "Com Net";
		$Time_subject = "09.00-12.00";
		$Day_subject = "ศุกร์";
		$Room_subject = "ECC-802";
		$Detail = "kiki";



		$test = EditSubjectTest::mockEditSubject($ID,$Name_subject,$Time_subject,$Day_subject,$Room_subject,$Detail);
		
		$result = $test->editSubject();

		$this->assertEquals($ID,$result->id);
		$this->assertEquals($Name_subject,$result->name_subject);
		 $this->assertEquals($Time_subject,$result->time_subject);
		$this->assertEquals($Day_subject,$result->day_subject);
		$this->assertEquals($Room_subject,$result->room_subject);
		$this->assertEquals($Detail,$result->detail_subject);

	}

}


?>