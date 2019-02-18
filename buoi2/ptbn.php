<?php
namespace App\controller;

require 'interface.php';

use App\inter\CheckNameFunction;

class GiaiPhuongTrinhBN implements CheckNameFunction {
	private $hsa;
	private $hsb;
	public function __construct($a,$b) {
		$this->hsa = $a;
		$this->hsb = $b;
	}
	public function input() {
		return [$this->hsa,$this->hsb];
	}
	public function xuLy() {
		$arrPar = $this->input();
		return (-$arrPar[1])/$arrPar[0];
	}
	public function output() {
		return $this->xuLy();
	}
}

$xl = new GiaiPhuongTrinhBN(2,6);
echo $xl->output();
