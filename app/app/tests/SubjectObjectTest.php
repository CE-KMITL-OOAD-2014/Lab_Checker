<?php
	Class ProductModelTest extends TestCase {


		public function testValue() {

			$odj = new Subjects;
			$odj->setId_subject('1111111111');
			$odj->setName_subject('OOAD');
			$odj->setTime_subject('09.00-12.00');
			$odj->setDay_subject('monday');
			$odj->setRoom_subject('ecc-501');


			$this->assertEqual('1111111111',$odj->getId_subject);
			$this->assertEqual('OOAD',$odj->getName_subject);
			$this->assertEqual('09.00-12.00',$odj->getTime_subject);
			$this->assertEqual('monday',$odj->getDay_subject);
			$this->assertEqual('ecc-501',$odj->getRoom_subject);
		}
	}