<?php
	Class checkPermissionTest extends TestCase {


		public function testpermission() {

			$permission = new Subjects(array('55010001','55010002','55010010','55010022','55011111','55010911','55011232'));

			$this->assertTrue($permission->checkPermission('55010001')); //true
			$this->assertTrue($permission->checkPermission('55010022')); //true
			$this->assertTrue($permission->checkPermission('55010911')); //true

			$this->assertFalse($permission->checkPermission('55011011')); //false
			$this->assertFalse($permission->checkPermission('54010923')); //false
			$this->assertFalse($permission->checkPermission('56010722')); //false


		}
	}