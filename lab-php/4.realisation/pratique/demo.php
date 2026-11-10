<?php
declare(strict_types=1);

use App\Exceptions\ValidationException;
use App\Models\User;

require dirname(__DIR__) . '/bootstrap.php';

echo 'User model demo — PHP ' . PHP_VERSION . PHP_EOL;
echo str_repeat('=', 48) . PHP_EOL;

$user = new User('Alice', 'alice@example.com');
echo "Created: {$user->name()} <{$user->email()}>" . PHP_EOL;
echo 'Log: ' . ($user->logs()[0] ?? '(none)') . PHP_EOL;

foreach ([
    ['   ', 'valid@example.com'],
    ['Bob', 'not-an-email'],
] as [$name, $email]) {
    try {
        new User($name, $email);
    } catch (ValidationException $exception) {
        echo 'Rejected: ' . $exception->getMessage()
            . " [field={$exception->field()}, code={$exception->getCode()}]" . PHP_EOL;
    }
}
