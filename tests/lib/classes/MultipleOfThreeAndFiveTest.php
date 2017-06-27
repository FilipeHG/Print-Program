<?php

declare(strict_types=1);

require_once '../templates/PrintRuleTemplateTest.php';

class MultipleOfThreeAndFiveTest extends PrintRuleTemplateTest
{
	public function testSetPrintValue (): void
	{
		$this->printValue = "Linianos";
	}

	public function testSetPrintRule (int $index): bool
	{
		$this->assertTrue($index > 0 && $index <= 100);
		
		return $index % 3 == 0 && $index % 5 == 0;
	}
}