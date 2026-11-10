<?php
declare(strict_types=1);

namespace App\Exceptions;

use InvalidArgumentException;

/**
 * Raised when user-supplied data fails a business validation rule.
 *
 * The class carries the invalid field name and uses the application code 422.
 * That code is a lab convention that mirrors "Unprocessable Content"; PHP does
 * not assign HTTP meanings to exception codes by itself.
 */
final class ValidationException extends InvalidArgumentException
{
    public function __construct(
        string $message = 'Data validation error',
        int $code = 422,
        private readonly ?string $field = null,
    ) {
        parent::__construct($message, $code);
    }

    public function field(): ?string
    {
        return $this->field;
    }
}
