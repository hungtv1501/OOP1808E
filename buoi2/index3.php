<?php
// su dung file co san trong index2.php
namespace LPHP1808E22;

require 'index2.php';


// vi class Test trong file index2.php da co namespace nen phai thong qua namespace cua no

use App\Controller\LPHP1808E\Test as myTest;


class Demo extends myTest {
	public function index() {
		return "this is test " . __NAMESPACE__ . " name class " . __CLASS__;
	}
}

$demo = new Demo;
echo $demo->demo();
echo "<br>";
echo $demo->index();