# PHP Lab — Best Edition

A merged, improved version of the two PHP labs:

- `Labs/lab-php` — the compact first lab with the `pratique/` example and a
  Marp presentation.
- `agent vs subagent/lab-PHP` — the staged second lab with the task tracker,
  native tests, benchmark, report, and `.agents` learning skill.

This folder keeps the strongest parts of both and adds the pieces that were
missing from each one. The result is a single self-contained lab that can be
taught, studied, run, audited, and presented.

## What was integrated

| Element | Originally in | What changed in this version |
| --- | --- | --- |
| Staged structure (`1.besoin` → `5.rapport-et-presentation`) | Second lab | Kept and documented as the main learning path. |
| Task-tracker example (`Task`, `Project`, `TaskBoard`) | Second lab | Kept; autoloader extended to serve two namespace roots. |
| Native PHP checks | Second lab | Kept; a fourth check now covers the practical `User` example. |
| Official-manual benchmark | Second lab | Kept; expanded with a "choosing the right mechanism" section. |
| `pratique/` `User` example | First lab | Reorganised into real namespace folders, made testable, and given its own demo. |
| Marp presentation | First lab | Rebuilt as a complete deck with agenda, code, demo output, speaker notes, and no thank-you slide. |
| `php-learning` skill | Second lab | Extended to cover both examples, all four checks, and the reflection step. |
| Lab-creation skills (`lab-creator`, `lab-presenter`, `marp`, `php-examples`, `lab-auditor`, `lab-debugger`, `skill-creator`) | `Labs/.agents` | Copied into this lab, translated to English, and aligned with this lab's conventions. |
| Rules (`php-lab`, `lab-workflow`, `global-standards`) | Both labs and `Labs/.agents` | Merged into one small, non-contradictory rule set. |

## Learning goals

At the end of the lab you can:

1. Explain what a namespace is and why two classes can both be called `Task`.
2. Explain what a trait is, how it differs from inheritance, and when to use it.
3. Explain how PHP represents errors and exceptions, and why a custom exception
   is more useful than a vague warning.
4. Show how `set_error_handler()` can convert one enabled `E_USER_WARNING` into
   an `ErrorException`, and state the limits of that technique.
5. Run the examples and the checks, read the output, and describe only what you
   actually observed.

## The two examples

The lab deliberately uses two small models:

- **Task tracker (`PhpLab\...`)** — the main example. `Task` and `Project` share
  the `HasTimestamps` trait; `PhpLab\Domain\Task` and `PhpLab\Reporting\Task`
  prove that namespaces prevent a name collision; `TaskBoard` and
  `WarningToException` demonstrate domain exceptions and warning conversion.
- **User account (`App\...`)** — the applied example from the first lab.
  `User` validates its input with `ValidationException` and records its creation
  through the `Loggable` trait. Its folders now match its namespaces:
  `App\Models`, `App\Traits`, and `App\Exceptions`.

## Requirements

- PHP 8.2 or newer on the command line. The reference run used PHP 8.5.11.
- Basic PHP syntax, variables, functions, arrays, and simple classes.
- No Composer packages, database, or framework.

Check your version:

```powershell
php -v
```

## Quick start

From this folder:

```powershell
# Run every check (four PASS lines expected)
php 4.realisation/tests/run.php

# Run the full demonstration
php 4.realisation/demo.php

# Run the focused User demonstration
php 4.realisation/pratique/demo.php
```

Run one concept at a time while studying:

```powershell
php 4.realisation/tests/namespaces.php
php 4.realisation/tests/traits.php
php 4.realisation/tests/errors-and-exceptions.php
php 4.realisation/tests/pratique.php
```

## Lab map

### Learning path

- [`1.besoin/besoin.md`](1.besoin/besoin.md) — learning need, scope,
  prerequisites, non-goals, and observable success criteria.
- [`2.benchmark/benchmark.md`](2.benchmark/benchmark.md) — source-based
  explanation of namespaces, traits, errors, exceptions, and warning handling.
- [`3.spec-skill/spec-skill.md`](3.spec-skill/spec-skill.md) — the student
  learning skill specification.
- [`4.realisation/README.md`](4.realisation/README.md) — setup, examples, and
  test commands.
- [`4.realisation/demo.php`](4.realisation/demo.php) — one runnable tour of all
  three concepts.
- [`4.realisation/bootstrap.php`](4.realisation/bootstrap.php) — autoloads the
  `PhpLab\` and `App\` namespace roots.
- [`4.realisation/src/Domain/Task.php`](4.realisation/src/Domain/Task.php) —
  domain task, title validation, and timestamps.
- [`4.realisation/src/Domain/Project.php`](4.realisation/src/Domain/Project.php)
  — project using the shared timestamp trait.
- [`4.realisation/src/Domain/TaskBoard.php`](4.realisation/src/Domain/TaskBoard.php)
  — task lookup and missing-task exception.
- [`4.realisation/src/Exceptions/TaskNotFoundException.php`](4.realisation/src/Exceptions/TaskNotFoundException.php)
  — exception for an unknown task ID.
- [`4.realisation/src/ErrorHandling/WarningToException.php`](4.realisation/src/ErrorHandling/WarningToException.php)
  — controlled warning conversion.
- [`4.realisation/src/Reporting/Task.php`](4.realisation/src/Reporting/Task.php)
  — a second `Task` class in a separate namespace.
- [`4.realisation/src/Support/HasTimestamps.php`](4.realisation/src/Support/HasTimestamps.php)
  — timestamp behavior shared by domain classes.
- [`4.realisation/pratique/README.md`](4.realisation/pratique/README.md) — the
  practical `User` example and its design notes.
- [`4.realisation/pratique/Models/User.php`](4.realisation/pratique/Models/User.php)
  — validated account model using a trait and a custom exception.
- [`4.realisation/pratique/Traits/Loggable.php`](4.realisation/pratique/Traits/Loggable.php)
  — testable activity log shared by models.
- [`4.realisation/pratique/Exceptions/ValidationException.php`](4.realisation/pratique/Exceptions/ValidationException.php)
  — typed validation failure with field and code.
- [`4.realisation/tests/TestSupport.php`](4.realisation/tests/TestSupport.php) —
  small helpers for native PHP checks.
- [`4.realisation/tests/namespaces.php`](4.realisation/tests/namespaces.php) —
  checks the two distinct `Task` classes.
- [`4.realisation/tests/traits.php`](4.realisation/tests/traits.php) — checks
  timestamp reuse and independent updates.
- [`4.realisation/tests/errors-and-exceptions.php`](4.realisation/tests/errors-and-exceptions.php)
  — checks validation, lookup, and warning handling.
- [`4.realisation/tests/pratique.php`](4.realisation/tests/pratique.php) —
  checks the `User` model, its logs, and its validation errors.
- [`4.realisation/tests/run.php`](4.realisation/tests/run.php) — runs all four
  checks.
- [`5.rapport-et-presentation/rapport.md`](5.rapport-et-presentation/rapport.md)
  — research, implementation, integration decisions, and observed outcomes.
- [`5.rapport-et-presentation/presentation.md`](5.rapport-et-presentation/presentation.md)
  — complete Marp deck with speaker notes.

### Agent configuration

- [`AGENTS.md`](AGENTS.md) — the short entry point for any coding agent.
- [`.agents/README.md`](.agents/README.md) — how the rules and skills fit
  together and how to invoke them.
- [`.agents/rules/php-lab.md`](.agents/rules/php-lab.md) — PHP-specific accuracy
  and verification rules.
- [`.agents/rules/lab-workflow.md`](.agents/rules/lab-workflow.md) — the
  create → run → verify → document workflow.
- [`.agents/rules/global-standards.md`](.agents/rules/global-standards.md) —
  language, structure, honesty, and presentation conventions.
- [`.agents/skills/php-learning/SKILL.md`](.agents/skills/php-learning/SKILL.md)
  — the student-facing study workflow.
- [`.agents/skills/lab-creator/SKILL.md`](.agents/skills/lab-creator/SKILL.md)
  — build or adapt lab deliverables from a README and a plan.
- [`.agents/skills/lab-presenter/SKILL.md`](.agents/skills/lab-presenter/SKILL.md)
  — create and structure lab presentations.
- [`.agents/skills/marp/SKILL.md`](.agents/skills/marp/SKILL.md) — Marp syntax,
  layout, and readability rules.
- [`.agents/skills/php-examples/SKILL.md`](.agents/skills/php-examples/SKILL.md)
  — create runnable PHP examples with tutorials.
- [`.agents/skills/lab-auditor/SKILL.md`](.agents/skills/lab-auditor/SKILL.md)
  — audit deliverables for completeness and consistency.
- [`.agents/skills/lab-debugger/SKILL.md`](.agents/skills/lab-debugger/SKILL.md)
  — diagnose PHP, JavaScript, and Laravel failures.
- [`.agents/skills/skill-creator/SKILL.md`](.agents/skills/skill-creator/SKILL.md)
  — create and validate new Agent Skills.
- [`Todo.md`](Todo.md) — the full progress checklist.

## Success criteria

You can explain the role of each concept in your own words, point to its
example, run the matching check, and describe only the result you observed. You
can also explain why the practical `User` example uses a namespace, a trait, and
a custom exception together.

## Accuracy

The benchmark cites the official PHP manual for language behavior. The task
tracker and the `User` model are teaching choices, not rules required by PHP.
The warning example is deliberately narrow: a custom error handler cannot handle
every PHP error, and this lab does not claim otherwise.

## Language

The lab deliverables are in English, matching both source labs and the code.
The agent rules explain how to switch to another language for a different cohort
without rewriting the code.
