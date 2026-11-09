<?php

namespace App\Exceptions;

use Exception;

/**
 * Custom exception for PHP Lab data validation errors
 */
class ValidationException extends Exception {
    public function __construct(string $message = "Data validation error", int $code = 422) {
        parent::__construct($message, $code);
    }
}
