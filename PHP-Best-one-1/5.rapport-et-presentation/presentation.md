---
marp: true
theme: default
paginate: true
size: 16:9
backgroundColor: "#f7f9fc"
color: "#1f2933"
---

<style>
section {
  font-size: 27px;
}
section h1 {
  color: #0b5fff;
}
section h2 {
  color: #0b3d91;
}
section code {
  font-size: 0.82em;
}
section table {
  font-size: 0.78em;
}
section.lead {
  text-align: center;
}
section.lead h1 {
  font-size: 54px;
}
section.lead h2 {
  font-size: 28px;
  color: #52606d;
}
section.lead p {
  font-size: 21px;
}
</style>

<!-- _class: lead -->

# PHP Lab — Best Edition
## Namespaces · Traits · Errors & Exceptions

**Student:** Marwan bouhamid<br>
**Supervisor:** Foad

A merged and improved version of the two PHP labs

<!--
Speaker note: This lab merges the staged structure and task tracker of the
second lab with the practical User example and the Marp presentation of the
first lab. The goal is one self-contained lab that is easy to study, run, and
present.
-->

---

## Agenda

1. Why these three concepts?
2. Quick start and technical stack
3. Namespaces
4. Traits
5. Errors and exceptions
6. The applied `User` example
7. Demonstration and observed results
8. Lab map and deliverables

<!--
Speaker note: The deck follows the learning path of the lab. Each concept is
introduced, shown in real code, and connected to a check the audience can run.
-->

---

## Why these three concepts?

| Problem in growing code | PHP tool | Example in the lab |
| --- | --- | --- |
| Two classes need the same short name | Namespaces | `PhpLab\Domain\Task` and `PhpLab\Reporting\Task` |
| Several classes need the same small behavior | Traits | `HasTimestamps`, `Loggable` |
| A failure is vague or silently ignored | Errors and exceptions | `TaskNotFoundException`, `ValidationException`, `ErrorException` |

These are language features, not framework tricks. They work in any PHP 8.2+
project.

The lab keeps the scope small: one task tracker and one user account. The goal is
to make each problem visible and testable, not to build a full application.

<!--
Speaker note: The three concepts answer three different maintenance problems:
name collisions, repeated behavior, and unclear failure handling. The same
features appear in frameworks, but the lab teaches them with native PHP so the
mechanics stay visible.
-->

---

## Technical stack and quick start

- PHP 8.2 or newer; the reference run used **PHP 8.5.11**
- PHP CLI, no Composer, no database, no framework
- Markdown for the report and the Marp deck

```powershell
php 4.realisation/tests/run.php   # four checks
php 4.realisation/demo.php        # full demonstration
php 4.realisation/pratique/demo.php
```

Expected: four `PASS` lines. The project is small enough to read in one sitting.

<!--
Speaker note: Everything runs from the command line with a stock PHP install.
The quick start is also the verification: if the four checks pass, the examples
are working in that environment.
-->

---

## Namespaces: one short name, many scopes

A namespace gives a class a **fully qualified name**.

- Short name: `Task`
- Full names: `PhpLab\Domain\Task` and `PhpLab\Reporting\Task`
- Inside a namespace, the short name is enough
- Outside, import it with `use`, optionally with an alias

The autoloader maps a prefix to a folder:

```text
PhpLab\  ->  4.realisation/src/
App\     ->  4.realisation/pratique/
```

The folder mapping is a lab convention; PHP itself only requires unique full
names.

<!--
Speaker note: The key idea is that the short name is only a local convenience.
The fully qualified name is what PHP uses to identify the class. The folder
mapping is handled by our small autoloader, not by the language.
-->

---

## Namespaces in the code

```php
<?php
// 4.realisation/src/Domain/Task.php
namespace PhpLab\Domain;
final class Task { /* domain task */ }

// 4.realisation/src/Reporting/Task.php
namespace PhpLab\Reporting;
final class Task { /* reporting task */ }
```

```php
use PhpLab\Domain\Task as DomainTask;
use PhpLab\Reporting\Task as ReportingTask;

$domainTask = new DomainTask(7, 'Prepare the PHP lab');
$reportingTask = new ReportingTask('Task report: 7');
```

Check: `php 4.realisation/tests/namespaces.php`

<!--
Speaker note: The two files declare the same short class name in different
namespaces. The test imports both with aliases and verifies that each object
keeps its own namespace and behavior.
-->

---

## Traits: horizontal reuse

A trait is a group of methods a class can **compose**.

- Not a class: it cannot be instantiated on its own
- Not inheritance: the class does not become a subtype of the trait
- The current class overrides a trait method; a trait method overrides an
  inherited method
- Two traits with the same method need explicit conflict resolution

Use a trait for a small, coherent behavior that several unrelated classes need.

Do not use a trait to hide a large object graph or to replace a clear interface.

<!--
Speaker note: A trait is composition, not a parent-child relationship. It is a
good fit for a small behavior like timestamps or logging. The manual's
precedence rules matter when a class, a trait, and a parent all define the same
method.
-->

---

## Traits in the code

```php
trait HasTimestamps
{
    private DateTimeImmutable $createdAt;
    private DateTimeImmutable $updatedAt;

    protected function initializeTimestamps(?DateTimeImmutable $at = null): void
    {
        $this->createdAt = $this->updatedAt = $at ?? new DateTimeImmutable();
    }

    public function markUpdated(?DateTimeImmutable $at = null): void
    {
        $this->updatedAt = $at ?? new DateTimeImmutable();
    }
}
```

```php
final class Task    { use HasTimestamps; /* ... */ }
final class Project { use HasTimestamps; /* ... */ }
final class User    { use Loggable;      /* ... */ }
```

Check: `php 4.realisation/tests/traits.php`

<!--
Speaker note: Task and Project share the timestamp code without sharing a
parent. Each object still stores its own dates, which the test proves by
updating one object and checking that the other did not change. User shows a
second trait for logging.
-->

---

## Errors and exceptions: the shape of failure

`Throwable` is the common interface for anything that can be thrown.

```text
Throwable
├── Exception   -> application-level conditions
└── Error       -> programming mistakes such as a wrong type
```

- `throw` raises an object
- `try` protects a block
- `catch` handles a matching type
- `finally` always runs: restore a handler, close a resource

A custom exception gives the failure a name, a message, and optionally a code
and a previous exception.

<!--
Speaker note: Throwable is the umbrella. Exception and Error are siblings, not
parent and child. A custom exception is useful because the caller can catch a
specific type instead of inspecting a message string.
-->

---

## Errors and exceptions in the code

```php
final class Task
{
    public function __construct(
        private int $id,
        private string $title,
    ) {
        if (trim($this->title) === '') {
            throw new InvalidArgumentException('Task title cannot be blank.');
        }
    }
}
```

```php
public function find(int $id): Task
{
    if (!isset($this->tasksById[$id])) {
        throw new TaskNotFoundException("Task {$id} was not found.");
    }

    return $this->tasksById[$id];
}
```

Check: `php 4.realisation/tests/errors-and-exceptions.php`

<!--
Speaker note: The blank title is an invalid argument: the caller broke the
constructor's contract. The missing task is a domain lookup failure, so it gets
its own exception type. The test verifies both the successful path and the
failure path.
-->

---

## From warning to exception

`set_error_handler()` installs a user handler and keeps the previous one on a
stack. The handler can inspect the current mask and decline a severity.

```php
set_error_handler(static function (
    int $severity, string $message, string $file, int $line,
): bool {
    if ((error_reporting() & $severity) === 0) {
        return false; // masked: let normal handling continue
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
});
```

The test triggers one `E_USER_WARNING`, checks the conversion, checks the masked
case, and restores the previous handler with `finally`.

**Limit:** several fatal and compile-time errors cannot be handled this way.

<!--
Speaker note: The handler only converts a warning whose severity is enabled.
Returning false is important for the masked case, and restore_error_handler in a
finally block keeps the global state clean. This is a controlled demonstration,
not a universal error-recovery strategy.
-->

---

## Second example: the `User` model

The first lab's practical example, reorganised and made testable:

```text
pratique/
├── Exceptions/ValidationException.php   # App\Exceptions
├── Models/User.php                      # App\Models
├── Traits/Loggable.php                  # App\Traits
├── demo.php
└── README.md
```

```php
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
        // email validation follows...
    }
}
```

One class, all three concepts: namespace, trait, custom exception.

<!--
Speaker note: The User model is the applied example. Its folder path matches its
namespace, it composes Loggable instead of inheriting a logger, and it rejects
bad input with a typed exception. The 422 code is a lab convention, not an
automatic HTTP behavior.
-->

---

## Demonstration output

```text
PHP Lab demo — PHP 8.5.11

1. Namespaces: same short name, two full names
Domain task:    PhpLab\Domain\Task #7 "Prepare the PHP lab"
Reporting task: PhpLab\Reporting\Task "Task report: 7"

2. Traits: shared timestamp behavior
Task updated at:    2026-01-16 10:00:00
Project updated at: 2026-01-15 10:00:00 (unchanged)

3. A second trait and a custom exception: the User model
Caught validation: User name cannot be empty. [field=name, code=422]

4. Domain exception: unknown task
Caught lookup: Task 99 was not found.

5. Controlled warning converted to an exception
Caught warning: Lab warning [severity=E_USER_WARNING]
```

The log timestamp depends on the clock; the dates in the trait section are fixed
for a deterministic demo.

<!--
Speaker note: The demo is the fastest way to see all three concepts in one
run. Point out that Task and Project keep independent timestamps and that each
failure is caught by a specific type. The output was produced by the included
script, not written by hand.
-->

---

## Observed results

```text
PASS: namespaced task classes load without a name collision.
PASS: both classes reuse and update timestamps.
PASS: expected exceptions and warning conversion are handled.
PASS: the practical User example validates input and logs creation.
```

| Check | Command | What it proves |
| --- | --- | --- |
| Namespaces | `php 4.realisation/tests/namespaces.php` | Two `Task` classes coexist |
| Traits | `php 4.realisation/tests/traits.php` | Shared methods, independent state |
| Errors | `php 4.realisation/tests/errors-and-exceptions.php` | Validation, lookup, warning conversion |
| Applied | `php 4.realisation/tests/pratique.php` | `User` validates and logs |

Run all four: `php 4.realisation/tests/run.php`

<!--
Speaker note: These are the actual PASS lines from the reference run on PHP
8.5.11. Each check targets one concept, and the runner executes all four in
order. A failure stops the run with a message that names the broken expectation.
-->

---

## Lab map

| Stage | File | Purpose |
| --- | --- | --- |
| 1. Need | `1.besoin/besoin.md` | Question, scope, non-goals, success criteria |
| 2. Benchmark | `2.benchmark/benchmark.md` | Official PHP behavior and sources |
| 3. Skill | `3.spec-skill/spec-skill.md` | The `php-learning` workflow |
| 4. Realization | `4.realisation/` | Task tracker, `User` model, demos, checks |
| 5. Report | `5.rapport-et-presentation/rapport.md` | Integration decisions and observed results |
| 5. Deck | `5.rapport-et-presentation/presentation.md` | This presentation |
| Agents | `.agents/` | Rules and reusable lab skills |

`README.md` links every file; `Todo.md` tracks the verified work.

<!--
Speaker note: The numbered folders are the learning path, not an arbitrary
filing system. The need defines the question, the benchmark grounds it in the
manual, the skill describes the study method, the realization proves it, and the
report records what happened.
-->

---

## Run it yourself

```powershell
cd PHP-Best-one-1
php 4.realisation/tests/run.php
php 4.realisation/demo.php
```

You should be able to:

- explain why the two `Task` classes do not collide;
- show how `Task` and `Project` reuse `HasTimestamps`;
- describe the difference between `TaskNotFoundException`,
  `ValidationException`, and a converted `ErrorException`;
- point to the check that proves each claim.

The lab is complete when the four checks pass and you can explain what each one
demonstrates.

<!--
Speaker note: End by running the checks live if possible. The success criterion
is not memorizing the syntax; it is being able to point to the code and the
observed output for each concept.
-->
