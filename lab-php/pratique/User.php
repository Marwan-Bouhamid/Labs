<?php

namespace App\Models;

use App\Traits\Loggable;
use App\Exceptions\ValidationException;

class User {
    use Loggable;

    private string $name;
    private string $email;

    public function __construct(string $name, string $email) {
        if (empty($name)) {
            throw new ValidationException("User name cannot be empty.");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationException("Invalid email address: $email");
        }
        
        $this->name = $name;
        $this->email = $email;
        $this->log("User successfully created ({$this->email}).");
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

// --- Execution Test ---
try {
    echo "=== Test 1: Valid Creation ===\n";
    $user = new User("Alice", "alice@example.com");

    echo "\n=== Test 2: Validation Error (Invalid Email) ===\n";
    $invalidUser = new User("Bob", "invalid-email");

} catch (ValidationException $e) {
    echo "⚠️ Caught Exception [Code {$e->getCode()}] : {$e->getMessage()}\n";
} catch (\Throwable $e) {
    echo "❌ Critical Error : {$e->getMessage()}\n";
}
