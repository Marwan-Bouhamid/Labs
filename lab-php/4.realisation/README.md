# Task-tracker realization

This folder contains the runnable part of the lab. It merges:

- the staged task-tracker example and native checks from the second lab;
- the applied `User` model from the first lab's `pratique/` folder, reorganised
  to match its namespaces.

## Requirements

Use PHP 8.2 or newer from the command line. The example uses native PHP only:
no Composer packages, database, or framework. The reference environment used to
validate this folder is PHP 8.5.11.

## Run the checks

From the `PHP-Best-one-1` directory, run the full test runner:

```powershell
php 4.realisation/tests/run.php
```

Run an individual check when studying one concept:

```powershell
php 4.realisation/tests/namespaces.php
php 4.realisation/tests/traits.php
php 4.realisation/tests/errors-and-exceptions.php
php 4.realisation/tests/pratique.php
```

## Run the demonstrations

```powershell
php 4.realisation/demo.php
php 4.realisation/pratique/demo.php
```

`demo.php` shows all three concepts in one pass. `pratique/demo.php` focuses on
the `User` model.

## Structure

```text
4.realisation/
├── bootstrap.php              # autoloads PhpLab\ and App\
├── demo.php                   # full lab demonstration
├── pratique/                  # practical User example (first lab, improved)
│   ├── Exceptions/ValidationException.php
│   ├── Models/User.php
│   ├── Traits/Loggable.php
│   ├── demo.php
│   └── README.md
├── src/                       # task-tracker domain
│   ├── Domain/Project.php
│   ├── Domain/Task.php
│   ├── Domain/TaskBoard.php
│   ├── ErrorHandling/WarningToException.php
│   ├── Exceptions/TaskNotFoundException.php
│   ├── Reporting/Task.php
│   └── Support/HasTimestamps.php
└── tests/
    ├── TestSupport.php
    ├── errors-and-exceptions.php
    ├── namespaces.php
    ├── pratique.php
    ├── run.php
    └── traits.php
```

## Examples

- **Namespaces:** `src/Domain/Task.php` and `src/Reporting/Task.php` use the
  short class name `Task` in separate namespaces. `pratique/` shows the same
  idea with `App\Models`, `App\Traits`, and `App\Exceptions`.
- **Traits:** `src/Support/HasTimestamps.php` supplies timestamp methods used by
  `Task` and `Project`; `pratique/Traits/Loggable.php` adds logging to `User`.
- **Errors and exceptions:** `Task` rejects a blank title, `TaskBoard` rejects
  non-`Task` objects and reports an unknown task with `TaskNotFoundException`,
  `User` rejects invalid input with `ValidationException`, and
  `WarningToException` converts an enabled user warning to `ErrorException`.

The warning handler returns `false` for a severity masked by `error_reporting()`.
The test also restores the previous handler. This example does not claim that
every PHP error can be handled.

See [`../2.benchmark/benchmark.md`](../2.benchmark/benchmark.md) for official
PHP manual references and [`../Todo.md`](../Todo.md) for progress.
