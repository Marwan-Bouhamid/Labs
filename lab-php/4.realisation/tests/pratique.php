<?php
declare(strict_types=1);

use App\Exceptions\ValidationException;
use App\Models\User;
use App\Traits\Loggable;

require_once __DIR__ . '/TestSupport.php';

$bootstrap = dirname(__DIR__) . '/bootstrap.php';
check(is_file($bootstrap), 'bootstrap is missing');
require_once $bootstrap;

check(trait_exists(Loggable::class), 'Loggable trait is missing');
check(class_exists(User::class), 'User class is missing');

$user = new User('Alice', 'alice@example.com');
check($user->name() === 'Alice', 'User returned the wrong name');
check($user->email() === 'alice@example.com', 'User returned the wrong email');
check(count($user->logs()) === 1, 'User should record exactly one creation log');
check(
    str_contains($user->logs()[0], 'User successfully created (alice@example.com).'),
    'User log does not contain the creation message',
);

$nameError = checkThrows(
    ValidationException::class,
    static fn () => new User('   ', 'valid@example.com'),
    'blank user name must be rejected',
);
/** @var ValidationException $nameError */
check($nameError->field() === 'name', 'blank name error points to the wrong field');
check($nameError->getCode() === 422, 'validation error has the wrong application code');

$emailError = checkThrows(
    ValidationException::class,
    static fn () => new User('Bob', 'not-an-email'),
    'invalid email must be rejected',
);
/** @var ValidationException $emailError */
check($emailError->field() === 'email', 'invalid email error points to the wrong field');

check(
    str_contains($emailError->getMessage(), 'not-an-email'),
    'invalid email error should include the rejected value',
);

echo "PASS: the practical User example validates input and logs creation." . PHP_EOL;
