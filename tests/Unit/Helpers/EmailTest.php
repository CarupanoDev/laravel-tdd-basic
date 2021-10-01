<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function test_email()
    {
//        $email = 'i@admin.com';
//        $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

        $result = Email::validate('i@admin.com');

        $this->assertTrue($result);

        $result = Email::validate('i@@admin.com');

        $this->assertFalse($result);
    }
}
