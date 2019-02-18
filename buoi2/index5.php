<?php
// khai niem interface trong php
interface A {
	// khong duoc phep khoi tao doi tuong cho interface
	// khong khoi tao thuoc tinh
	// cach khai bao phuong thuc - chi co the la public - khong co {} 
	public function setMyName();
}

interface C extends A {
	public function getMyName();
}

// CACH SU DUNG INTERFACE: 

class B implements C {
	public function setMyName() {
		return "method cua interface";
	}
	public function getMyName() {
		return "this is method interface C";
	}
}

$b = new B;
echo $b->setMyName();
echo "<br>";
echo $b->getMyName();