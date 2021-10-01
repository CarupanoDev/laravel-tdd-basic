<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use function App\validate_email;

class FunctionsTest extends TestCase
{

    public function test_email()
    {

        $result = validate_email('i@admin.com');

        $this->assertTrue($result);

        $result = validate_email('i@@admin.com');

        $this->assertFalse($result);
    }
}
