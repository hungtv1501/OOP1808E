<?php
// lap trinh huong doi tuong
// khai niem class
// cu phap : keyword class + name class

class Student {
	// tim kieu khai niem thuoc tinh (property)
	private $money = 100;
	// private: thuoc tinh nay chi duoc phep su dung noi bo trong class
	// lam the nao de truy cap thuoc tinh trong class
	protected $single = 'yes';
	// protected: thuoc tinh nay chi duoc phep su dung noi bo trong lop va nhung lop ke thua no

	public $name = 'Hung';
	// public: thuoc tinh duoc phep su dung o bat ky dau
	public $numberPhone = '37125371';
	public static $email = 'hung@gmail.com';
	private static $diemThi = 0;

	// tim hieu ve phuong thuc (method) trong oop
	// phuong thuc; Hanh dong cua doi tuong
	public function diHoc($monHoc = 'PHP') {
		return $monHoc;
	}
	private function thucDem() {
		return '5 AM';
	}
	protected function anKem() {
		return 'OC que';
	}
	public static function diThi() {
		return 'Thi lai';
	}
	public function getMoney() {
		// lam the nao truy cap vao thuoc tinh trong class
		// $this: con tro nội tại của lớp - chính là tên lớp
		return $this->money;
	}
	public function choMuonTien() {
		// truy cap 1 phuong thuc trong 1 phuong thuc khac
		return $this->getMoney();
	}
	public function getEmail() {
		// return $this->email; SAI
		// return Student::$email; OK. ÍT DÙNG
		return self::$email;
	}
	public static function layEmail() {
		// return $this->email; SAI
		// return self::$email; SAI
		// return $this->money; SAI
		$hung = new self;
		return $hung->money;
	}

}

// khai niem object
// cu phap : keyword new = name class

$myStudent = new Student;
$student = new Student;

// cu phap truy cap vao thuoc tinh trong class - LAY doi tuong truy cap vao thuoc tinh do
// $myMoney = $student->money;  SAI VI MONEY LA PRIVATE
// echo $myMoney;
// $single = $myStudent->single;  SAI VI MONEY LA PRotected
// echo $single;
$studentName = $student->name;
// echo $studentName;
$myPhone = $student->numberPhone;
// echo $myPhone;
// $myEmail = $student->email; SAI VI email LA STATIC
// echo $myEmail;

// MUON TRUY CAP VAO 1 THUOC TINH LA STATIC BEN NGOAI LOP
// cu phap: name Class::name property

$myEmail = Student::$email;
echo $myEmail;

// $diem = Student::$diemThi; SAI
// echo $diem;

/***********************************************************************************/
// TRUY CAP TOI PHUONG THUC TRONG HAM
// lay doi tuong cua class truy cap vao phuong thuc do
$diHoc = $student->diHoc('HTML');
echo $diHoc;

$thi = Student::diThi();
echo $thi;

$myMoney = $student->getMoney();
echo $myMoney;

$myMoney1 = $student->choMuonTien();
echo $myMoney1;

$email = $student->getEmail();
echo $email;

$getEmail = Student::layEmail();
echo $getEmail;



