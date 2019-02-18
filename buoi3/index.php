<?php

// abstract class php

abstract class A {
	// duoc dinh nghia thuoc tinh
	public $name = 'abc';
	// tuyet doi khong: abstract public $name = 'abc';
	protected $age = 20;

	// duoc phep khai bao phuong thuc
	// se co 2 loai phuong thuc
	// phuong thuc 1 se co tu khoa abstract dung dau. do se la phuong thuc rong
	abstract public function demo();
	abstract protected function test();
	//cac phuong thuc co ban binh thuong
	public function check() {
		return "check";
	}
}

// $a = new A; Sai

abstract class C extends A {
	abstract public function getName();
	abstract protected function getAge();
}


class B extends C {
	// bat buoc phai overide lai cac phuong thuc la abstract. con cac phuong thuc khac khong bat buoc

	public function demo() {
		return $this->name;
	}
	public function test() {
		return $this->age;
	}
	public function getName() {
		return "Ten toi la: " . $this->name;
	}
	public function getAge() {
		return "Tuoi toi la: " . $this->age;
	}
}

class D extends B {
	// class D khong can overide lai cac phuong thuc cua B
}

$b = new B;
$myName = $b->demo();
echo $myName;
echo "<br>";
$myAge = $b->test();
echo $myAge;
echo "<br>";
echo $b->getName();
echo "<br>";
echo $b->getAge();
