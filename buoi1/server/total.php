<?php
class totalNumber {
	public function input() {
		$a = $_POST['number-a'] ?? '';
		$a = is_numeric($a) ? $a : 0;
		$b = $_POST['number-b'] ?? '';
		$b = is_numeric($b) ? $b : 0;
		return [$a,$b];
	}
	private function sum() {
		$arrNumber = $this->input();
		return $arrNumber[0] + $arrNumber[1];
		// return $c + $d;
	}
	public function output() {
		return $this->sum();
	}
}
if (isset($_POST['btnTotal'])) {
	# code...
	
	$tong = new totalNumber;
	// $input = $tong->input();
	// $total = $tong->sum($a,$b);
	$total = $tong->output();
	// echo $total;
	header("location:../sum.php?total={$total}");
}