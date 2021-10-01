<?php

declare(strict_types=1);

namespace App;

if( ! function_exists('validate_email') ) {
    function validate_email($email) {
        return Helpers\Email::validate($email);
    }
}
