<?php
class Cat {
	public $name = 'Tom';
	public $color = 'black';
	public $age = 3;
	public $myName;


	// cac phuong thuc magic trong oop
	public function __construct($name = 'Jerry') { // PHUONG THUC NAY SE TU DONG CHAY DAU TIEN KHI TAO DOI TUONG TRONG CLASS
		echo "This is method Contruct - {$name} - name class : " . __CLASS__;
		echo "<br>";
	}

	public function __destruct() { // phuong thuc nay tu dong chay khi khoi tao doi tuong. NHUNG se chay cuoi cuung
		echo "<br>";
		echo "Ham nay chay cuoi cung - name Class: " . __CLASS__ . " - name method : " . __FUNCTION__;
		
	}

	public function __call($request,$respone) {
		// neu 1 phuong thuc duoc goi ma khong ton tai thi method nay se tu dong chay
		echo "Not found method ";
		print_r($request);
		echo(" - ");
		print_r($respone);
		// header("Location:https://www.facebook.com/");
	}

	public function __get($value) {
		echo "<br>";
		echo "Ban vua truy cap vao 1 thuoc tinh: {$value} khong ton tai trong Class";
	}

	public function __set($key , $val) {
		echo "<br>";
		echo "Ban vua truy cap vao 1 thuoc tinh: {$key} khong ton tai trong Class co gia tri: {$val}";
		echo "<br>";
		$this->myName = $val;
		if (isset($this->add)) {
			# code...
			echo "Y";
		}
		else {
			echo "N";
		}
	}

	public static function __callStatic($request , $res) {
		// neu 1 phuong thuc STATIC duoc goi khong ton tai thi method nay se tu dong chay
		echo "<br>";
		echo "Not found method static : ";
		print_r($request);
		echo "- -";
		print_r($res);
	}

	public function getName() {
		return $this->name;
	}
}

$tom = new Cat('jagdj');
echo $tom->getName();
echo "<br>";
echo $tom->eat();
echo Cat::batChuot();
echo "<br>";
echo $tom->add = 'hung';
echo "<br>";