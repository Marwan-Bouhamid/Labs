# PHP concepts benchmark

This document uses the official PHP manual to explain the language behavior
behind the examples. The task-tracker design, the `User` model, and their test
cases are teaching choices for this lab, not rules required by PHP.

## Namespace

A namespace gives classes and other named PHP elements a name scope. A class can
be referred to by a short name inside a namespace or by its fully qualified
name. This lets two classes use the short name `Task` while keeping different
full names. In this lab, they are `PhpLab\Domain\Task` and
`PhpLab\Reporting\Task`. A second pair shows the same idea in the applied
example: `App\Models\User`, `App\Traits\Loggable`, and
`App\Exceptions\ValidationException`. [PHP manual: Using namespaces:
Basics](https://www.php.net/manual/en/language.namespaces.basics.php)

**In this lab:** the namespace names organize the domain, reporting, and
practical code. The small autoloader connects each name prefix to a directory;
that file-loading arrangement is a lab implementation choice. PHP itself does
not require a namespace to match a folder name, although matching them is a
common convention.

## Trait

A trait is a PHP code-reuse mechanism. A class can use a trait to include its
methods without inheriting from the trait or from another class. A trait is not
a class that can be instantiated on its own. [PHP manual:
Traits](https://www.php.net/manual/en/language.oop5.traits.php)

The manual also defines precedence: a method from the current class overrides a
trait method, and a trait method overrides an inherited method. When two traits
provide the same method, the class must resolve the conflict explicitly with
`insteadof` or `as`. [PHP manual: Trait precedence and conflict
resolution](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)

**In this lab:** `Task` and `Project` both use `HasTimestamps` for `createdAt()`,
`updatedAt()`, and `markUpdated()`. `User` uses `Loggable` for a small activity
log. The traits are used because these classes need the same small behavior;
PHP does not require this particular design.

## Errors and exceptions

`Throwable` is the common interface for objects that can be thrown and caught.
It includes both `Exception` and `Error`. PHP's `Error` class represents errors
that generally indicate programming mistakes; an exception can instead be used
to represent a condition the application knows how to report or handle. A custom
exception class can extend PHP's `Exception` hierarchy. [PHP manual:
Throwable](https://www.php.net/manual/en/class.throwable.php),
[Exception](https://www.php.net/manual/en/class.exception.php), and
[Error](https://www.php.net/manual/en/class.error.php)

The `finally` block runs after the `try` and `catch` blocks, whether or not an
exception was thrown, which makes it suitable for restoring a handler or
releasing a resource. [PHP manual:
Exceptions](https://www.php.net/manual/en/language.exceptions.php)

**In this lab:** a blank task title raises `InvalidArgumentException`; looking up
an unknown task raises the custom `TaskNotFoundException`; and a blank user name
or an invalid email raises the custom `ValidationException`. The `422` code on
`ValidationException` is an application convention, not an automatic HTTP
status. These are chosen examples of invalid input and a missing domain item,
not an exhaustive error-handling policy.

## Converting a warning

`set_error_handler()` installs a user-defined handler and keeps the previous
handler on an internal stack. PHP calls the handler even when the current
`error_reporting()` setting masks a severity, so a handler can inspect the mask
and return `false` for a severity it does not want to handle. Several fatal and
compile-time errors cannot be handled by a user-defined handler. [PHP manual:
set_error_handler()](https://www.php.net/manual/en/function.set-error-handler.php)

`ErrorException` is an exception type intended for representing an error as an
exception. The PHP manual shows a custom error handler checking
`error_reporting()` and then throwing an `ErrorException`. [PHP manual:
ErrorException](https://www.php.net/manual/en/class.errorexception.php)

`trigger_error()` can generate user-level errors, and its error level must be
from the `E_USER_*` family. [PHP manual:
trigger_error()](https://www.php.net/manual/en/function.trigger-error.php)

**In this lab:** the test triggers one `E_USER_WARNING`. The handler converts it
only when its severity is enabled, returns `false` for the masked case, and is
then removed so the previous handler is restored. This narrow demonstration does
not claim that every PHP error can be converted or safely recovered from.

## Choosing the right mechanism

The following table is lab guidance, not a PHP rule book. It helps the learner
connect a situation to the mechanism used in the examples.

| Situation | Mechanism used here | Why it fits |
| --- | --- | --- |
| A caller passes a blank task title or a blank user name | `InvalidArgumentException` / `ValidationException` | The argument violates the constructor's contract. |
| A task ID does not exist in the board | `TaskNotFoundException` (extends `RuntimeException`) | The domain can report a specific, recoverable lookup failure. |
| A legacy PHP warning must become catchable | `set_error_handler()` + `ErrorException` | The warning is converted at a controlled boundary and the previous handler is restored. |
| Fatal or compile-time PHP error | Not converted in this lab | A user-defined handler cannot handle every error type. |
| Several classes need the same small method set | A trait | The behavior is shared horizontally; the classes do not need a common parent. |
| Two classes need the same short name | Distinct namespaces | The fully qualified names stay unique while the short names stay readable. |

## Official sources

- [Using namespaces: Basics](https://www.php.net/manual/en/language.namespaces.basics.php)
- [Traits](https://www.php.net/manual/en/language.oop5.traits.php)
- [Trait precedence and conflict resolution](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)
- [Throwable](https://www.php.net/manual/en/class.throwable.php)
- [Exception](https://www.php.net/manual/en/class.exception.php)
- [Error](https://www.php.net/manual/en/class.error.php)
- [Exceptions](https://www.php.net/manual/en/language.exceptions.php)
- [set_error_handler()](https://www.php.net/manual/en/function.set-error-handler.php)
- [ErrorException](https://www.php.net/manual/en/class.errorexception.php)
- [trigger_error()](https://www.php.net/manual/en/function.trigger-error.php)
