<?php
declare(strict_types=1);

namespace App\Models;

use App\Exceptions\ValidationException;
use App\Traits\Loggable;

/**
 * A small account model that combines all three lab concepts:
 *
 * - Namespace: App\Models\User lives beside App\Traits\Loggable and
 *   App\Exceptions\ValidationException.
 * - Trait: User composes Loggable to record its own creation.
 * - Exceptions: invalid input raises a typed ValidationException instead of
 *   returning a vague false or emitting a warning.
 */
final class User
{
    use Loggable;

    public function __construct(
        private readonly string $name,
        private readonly string $email,
    ) {
        if (trim($this->name) === '') {
            throw new ValidationException('User name cannot be empty.', 422, 'name');
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationException("Invalid email address: {$this->email}", 422, 'email');
        }

        $this->log("User successfully created ({$this->email}).");
    }

    public function name(): string
    {
        return $this->name;
    }

    public function email(): string
    {
        return $this->email;
    }
}
