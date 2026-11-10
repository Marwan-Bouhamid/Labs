# PHP concepts lab report

## Purpose

This lab studies three PHP concepts that are new to the course: namespaces,
traits, and error and exception handling. It merges the staged structure and
task-tracker example of the second lab with the practical `User` example and the
Marp presentation of the first lab. The result is one small, runnable learning
project with two models and four native checks.

## What was integrated

| Source | Kept | Improved |
| --- | --- | --- |
| First lab (`Labs/lab-php`) | The `User`, `Loggable`, and `ValidationException` example; the Marp idea. | The files now follow their namespaces, the trait is testable, and the deck is complete. |
| Second lab (`agent vs subagent/lab-PHP`) | The staged folders, the task tracker, the native checks, the benchmark, the report, and the `php-learning` skill. | The autoloader serves two roots, a fourth check was added, and the skill covers both examples. |
| `Labs/.agents` | The lab-creation skills and the always-on rules. | They were translated to English, de-duplicated, and aligned with this lab's structure. |

## What each concept does

### Namespaces

Namespaces organize class names. The lab has a domain class named
`PhpLab\Domain\Task` and a reporting class named `PhpLab\Reporting\Task`. They
share the short name `Task`, but their full names are different. The practical
example adds `App\Models\User`, `App\Traits\Loggable`, and
`App\Exceptions\ValidationException`. [PHP manual: Using namespaces:
Basics](https://www.php.net/manual/en/language.namespaces.basics.php)

The autoloader maps each prefix to a directory. That mapping is a lab choice;
PHP does not require a namespace to match a folder name, although the convention
is common.

### Traits

A trait lets a class reuse methods without inheriting those methods from another
class. `Task` and `Project` both use `HasTimestamps` for creation time, update
time, and marking an update. `User` uses `Loggable` to record its creation. A
trait is not instantiated on its own. [PHP manual:
Traits](https://www.php.net/manual/en/language.oop5.traits.php)

The manual's precedence rule is also relevant: a method from the current class
overrides a trait method, and a trait method overrides an inherited method. When
two traits collide, the class must resolve the conflict explicitly. [PHP manual:
Trait precedence and conflict
resolution](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)

### Errors and exceptions

PHP's `Throwable` interface covers objects that can be thrown, including
`Exception` and `Error`. The example uses an exception for a blank task title, a
custom `TaskNotFoundException` for an unknown task ID, and a custom
`ValidationException` for invalid user input. A controlled `E_USER_WARNING` is
converted to `ErrorException` only when its severity is enabled. [PHP manual:
Throwable](https://www.php.net/manual/en/class.throwable.php),
[Error](https://www.php.net/manual/en/class.error.php),
[Exception](https://www.php.net/manual/en/class.exception.php), and
[ErrorException](https://www.php.net/manual/en/class.errorexception.php)

The custom warning handler checks `error_reporting()` and returns `false` for a
masked warning. PHP's manual also explains that some fatal and compile-time
errors cannot be handled by a user-defined handler. This lab does not claim that
every PHP error can be converted or safely recovered from. [PHP manual:
set_error_handler()](https://www.php.net/manual/en/function.set-error-handler.php)

## The applied `User` example

The first lab's `User` class is now organised as a small namespace tree:

- `App\Models\User` validates a name and an email, then logs its creation.
- `App\Traits\Loggable` stores timestamped messages and exposes `logs()`.
- `App\Exceptions\ValidationException` extends `InvalidArgumentException`,
  carries the failing field, and uses the application code `422`.

The `422` code is a lab convention. PHP does not attach an HTTP meaning to an
exception code by itself, and `filter_var()` checks the email format, not whether
the address can receive mail.

## Observed test results

The checks were run with PHP 8.5.11 CLI on 2026-11-09, from the
`PHP-Best-one-1` directory.

Command:

```powershell
php 4.realisation/tests/run.php
```

Observed output:

```text
PASS: namespaced task classes load without a name collision.
PASS: both classes reuse and update timestamps.
PASS: expected exceptions and warning conversion are handled.
PASS: the practical User example validates input and logs creation.
```

The full demonstration was also run:

```powershell
php 4.realisation/demo.php
```

Observed excerpt (the log timestamp depends on the clock):

```text
PHP Lab demo — PHP 8.5.11
1. Namespaces: same short name, two full names
Domain task:           PhpLab\Domain\Task #7 "Prepare the PHP lab"
Reporting task:        PhpLab\Reporting\Task "Task report: 7"

2. Traits: shared timestamp behavior
Task updated at:       2026-01-16 10:00:00
Project updated at:    2026-01-15 10:00:00 (unchanged)

5. Controlled warning converted to an exception
Caught warning:        Lab warning [severity=E_USER_WARNING]
```

These results show that the four checks and the demonstration completed
successfully in this local run. They do not measure performance or establish
results on other PHP versions or environments.

## Limitations

- The run used PHP 8.5.11 on Windows; other versions were not tested.
- The project is a command-line teaching example, not a web application,
  database, or framework integration.
- The warning conversion is deliberately narrow: one controlled
  `E_USER_WARNING`. It is not a general error-recovery strategy.
- The `422` code and the trait-based logging are teaching choices, not PHP
  requirements.
- `filter_var()` validates the email format, not deliverability.

## Conclusion

The task tracker and the `User` model show the same three ideas in different
contexts: namespaces keep class names organized, traits share small behaviors
horizontally, and exceptions plus a selected warning handler make certain failure
cases explicit. The official PHP manual is the reference for language behavior;
the two models are learning examples.
