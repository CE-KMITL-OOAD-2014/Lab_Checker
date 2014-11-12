<?php
	Class countStudentTest extends TestCase {


		public function testcount_Student() {

			$count = new Subjects(array('55010001','55010002','55010010','55010022','55011111','55010911','55011232','55010912','55011222','54010000','55010992'));

			$this->assertEquals($count->countStudent(),11); //true

		}
	}