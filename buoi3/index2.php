<?php
// da ke thua trong oop php
trait A
{
	protected function test()
	{
		return "cai gi do";
	}
}

trait B
{
	protected function demo()
	{
		return "hung 123";
	}
}

class C
{
	use A,B;
	public function show()
	{
		return $this->test() . " olala " . $this->demo();
	}
}

$c = new C;
echo $c->show();