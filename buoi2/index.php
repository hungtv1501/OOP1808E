<?php
// KE THUA VA CHONG KE THUA TRONG OOP
class a {
	public function test() {
		return "test";
	}
	protected function demo() {
		return "demo";
	}

}

// class b ke thua class a
class b extends a {
	protected function show() {
		return $this->demo();
	}
	public function getDemo() {
		// return $this->show();
		// return $this->test();
		// lam the nao de goi method test cua class cha truyen xuong ma ko bi thay doi
		
		return parent::test();
	}
	final public function test() {
		return "this is method " . __FUNCTION__;
	}
}

// class c la da ke thua
class c extends b {
	public function check() {
		return "check";
	}
	// public function test() {
	// 	echo "This is test class C";
	// }

}
// $b = new b;
// echo $b->test();
// echo $b->show();
// echo "<br>";
// echo $b->getDemo();

$c = new c;
echo $c->getDemo();
// echo $c->test();