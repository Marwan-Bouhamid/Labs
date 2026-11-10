# PHP Lab — Generation Specification and Learner Guide

This README is the source of truth for creating, adapting, running, and
auditing this PHP lab. An agent must read it before changing the lab. It
describes the learning target, the expected files, the implementation
constraints, the validation commands, and the definition of done.

The lab slug is **`lab-php`**. Keep this folder name unchanged.

## 1. Purpose

Create a small, runnable PHP learning lab that teaches three related concepts:

1. **Namespaces** — organize classes and allow two classes to use the short
   name `Task` without a collision.
2. **Traits** — share a small group of methods between unrelated classes.
3. **Errors and exceptions** — validate input, report domain failures with
   useful exception types, and convert one selected user warning into an
   `ErrorException`.

The lab must be understandable to a beginner, executable from a terminal, and
supported by native PHP checks. It is not a framework tutorial or a production
task-management application.

## 2. Important context

The lab contains two complementary examples:

- **Task tracker (`PhpLab\...`)**: the main example. It demonstrates two
  namespaced `Task` classes, a shared timestamp trait, task lookup, custom
  exceptions, and controlled warning conversion.
- **User account (`App\...`)**: the applied example. It demonstrates a
  namespaced `User`, a `Loggable` trait, and a typed `ValidationException`.

The task tracker and the user account are teaching choices. Do not describe
them as requirements of PHP.

If the learner's concrete problem or proposed solution is not supplied, do not
invent either one. Leave these fields for completion:

```text
[TO COMPLETE: What concrete problem does the learner encounter?]
[TO COMPLETE: What solution does the learner propose?]
```

## 3. Agent versus subagent

### Agent

The **agent** owns the complete task. It:

- reads the README, `AGENTS.md`, existing deliverables, and relevant code;
- decides which files need changing;
- coordinates research, implementation, tests, documentation, and audit;
- preserves unrelated work in the repository;
- reports observed results honestly.

Use an agent when the request involves the whole lab, several dependent files,
or a final quality decision.

### Subagent

A **subagent** is a bounded helper working under the agent's direction. Give it
one concrete objective and a clear output, for example:

- inspect official PHP documentation for namespaces;
- audit Markdown links;
- run the PHP checks and report exact output;
- review the generated lab against this README.

A subagent must not silently redefine the learning objectives, invent a
student problem, rewrite unrelated files, or claim that a test passed without
running it. The main agent must review and integrate its result.

### Recommended delegation

Delegate only work that is independent and substantial enough to benefit from a
separate context. Keep the implementation and final integration in the main
agent. For a small README-only change, use the main agent directly.

## 4. Prerequisites and constraints

### Learner prerequisites

The learner should know basic PHP syntax, variables, functions, arrays, and
simple classes. The lab may briefly explain class and object terminology when
needed.

### Technical constraints

- Use PHP **8.2 or newer** from the command line.
- Use native PHP only: no Composer package, database, or framework is required.
- Use the official PHP manual for language behavior.
- Keep examples small, deterministic, readable, and runnable on Windows,
  macOS, and Linux where PHP is available.
- Keep code identifiers, namespaces, commands, and file names in English.
- Preserve the staged structure:
  `1.besoin`, `2.benchmark`, `3.spec-skill`, `4.realisation`,
  `5.rapport-et-presentation`, and `.agents`.
- Do not add a conclusion, thank-you, or “questions?” slide.
- Do not run Git commands unless the user explicitly requests them.

### Accuracy constraints

- Separate PHP language behavior from this lab's design choices.
- Never invent a PHP version, test result, student difficulty, solution,
  performance claim, or observed output.
- A custom error handler cannot handle every PHP error. State its limits.
- The `422` code on `ValidationException` is an application convention; PHP
  does not automatically make it an HTTP response.
- A trait is not a class that can be instantiated by itself.

## 5. Required learning outcomes

At the end of the lab, the learner can:

1. Explain the purpose of a namespace and identify a fully qualified class
   name.
2. Explain why `PhpLab\Domain\Task` and `PhpLab\Reporting\Task` can coexist.
3. Explain how `Task` and `Project` reuse `HasTimestamps`.
4. Explain why `User` composes `Loggable` instead of inheriting from it.
5. Distinguish invalid input, a missing task, and a converted warning.
6. Explain that `set_error_handler()` handles only selected, enabled errors.
7. Run the checks and explain what each passing check demonstrates.

## 6. Required deliverables

Keep the following files and keep their responsibilities separate.

### `1.besoin/besoin.md`

Document:

- the learning question;
- scope and prerequisites;
- the three concepts;
- the two examples;
- non-goals;
- observable success criteria;
- placeholders for the learner's real problem and proposed solution when they
  are unknown.

### `2.benchmark/benchmark.md`

Explain the PHP behavior behind the examples and link to official sources for:

- namespaces;
- traits and trait precedence;
- `Throwable`, `Exception`, and `Error`;
- `finally`;
- `set_error_handler()`;
- `ErrorException`;
- `trigger_error()`.

Include a short table explaining which mechanism is used for each situation.
Mark the task tracker and `User` model as teaching choices.

### `3.spec-skill/spec-skill.md`

Specify the learner-facing skill with the exact sections:

- name;
- purpose;
- input;
- steps;
- expected student output.

Keep it aligned with the runnable `.agents/skills/php-learning/SKILL.md`.

### `4.realisation/`

Provide:

- `bootstrap.php` for the `PhpLab\` and `App\` namespace roots;
- `demo.php` showing the three main concepts;
- `pratique/demo.php` showing the applied `User` example;
- the task-tracker source under `src/`;
- the applied source under `pratique/`;
- native checks under `tests/`.

The minimum source design is:

```text
4.realisation/
├── bootstrap.php
├── demo.php
├── pratique/
│   ├── Exceptions/ValidationException.php
│   ├── Models/User.php
│   ├── Traits/Loggable.php
│   ├── demo.php
│   └── README.md
├── src/
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

Use the existing implementation as prior art before adding a new abstraction.
If the implementation is changed, update the matching check and the directly
related documentation.

### `5.rapport-et-presentation/`

The report must contain only researched facts and observed results. Record the
commands used and their actual output after running them.

The presentation must be valid Marp, readable in 16:9, and contain:

1. the learning context;
2. the three concepts;
3. the examples;
4. the implementation choices;
5. the observed check or demonstration output.

Do not invent a learner problem. Use the placeholder above if it is unknown.
Do not add a conclusion, thank-you, or question slide.

### `.agents/`

Keep the rules and skills self-contained. In particular:

- `AGENTS.md` is the short entry point;
- `.agents/rules/` contains PHP accuracy, workflow, and global standards;
- `.agents/skills/php-learning/SKILL.md` matches the specification;
- lab creation, presentation, Marp, PHP examples, audit, debugging, and skill
  creation guidance remains available where applicable.

The folder name of every skill must match the `name` field in its `SKILL.md`.

## 7. Quick Start

Run these commands from `lab-php`:

```powershell
php -v
php 4.realisation/tests/run.php
php 4.realisation/demo.php
php 4.realisation/pratique/demo.php
```

Run one focused check while studying:

```powershell
php 4.realisation/tests/namespaces.php
php 4.realisation/tests/traits.php
php 4.realisation/tests/errors-and-exceptions.php
php 4.realisation/tests/pratique.php
```

The full runner should print four `PASS` lines and exit with code `0`. This is
an expected acceptance criterion, not a result to claim without running it.

## 8. Verification protocol

Before declaring the lab complete:

1. Read the files changed and inspect related existing files.
2. Run `php -l` on every changed PHP file.
3. Run the focused check for every changed concept.
4. Run the full check:

   ```powershell
   php 4.realisation/tests/run.php
   ```

5. Run both demonstrations.
6. Check every relative Markdown link in the lab.
7. Check that the README matches the actual file tree.
8. Check that the skill specification and executable skill agree.
9. Check that the presentation has valid Marp frontmatter and no forbidden
   conclusion or thank-you slide.
10. Report failures explicitly instead of converting them into success claims.

## 9. Definition of done

The lab is complete only when all of the following are true:

- the staged folders exist and are documented;
- the examples run without Composer, a database, or a framework;
- the four native checks pass;
- the demonstrations run;
- official PHP sources support the language claims;
- the two examples and their namespaces agree across code and documentation;
- all relative links resolve;
- the skill specification and runnable skill are aligned;
- the report contains observed results only;
- the presentation is valid and follows the slide restrictions;
- no unrelated files were rewritten.

## 10. Copy-ready generation prompt

Use the following prompt when asking an agent to create or adapt this lab:

> You are the main agent responsible for the `lab-php` PHP learning lab.
> Read `lab-php/README.md`, `lab-php/AGENTS.md`, the existing staged
> deliverables, and the current implementation before editing.
>
> Build or adapt a beginner-friendly, runnable PHP 8.2+ lab about namespaces,
> traits, and errors/exceptions. Preserve the `lab-php` slug and the staged
> folders. Reuse existing code where it is correct. Do not use Composer, a
> database, or a framework.
>
> Deliver the learning need, official-manual benchmark, aligned learner skill
> specification, runnable task-tracker and `User` examples, native checks,
> report, and Marp presentation described in the README.
>
> Do not invent the learner's real problem, proposed solution, PHP version,
> test result, output, or performance claim. If the problem or solution is
> unknown, keep the `[TO COMPLETE: ...]` placeholders. Distinguish PHP rules
> from teaching choices. Do not claim that a custom error handler handles
> every PHP error.
>
> After editing, run `php -l` on changed PHP files, the focused checks, the
> full runner, and both demonstrations. Check Markdown links and Marp
> frontmatter. Report exact commands, observed results, failures, and files
> changed. Do not run Git commands unless explicitly authorized.

## 11. Current lab map

- [`1.besoin/besoin.md`](1.besoin/besoin.md) — learning need and outcomes.
- [`2.benchmark/benchmark.md`](2.benchmark/benchmark.md) — official PHP
  references and language explanations.
- [`3.spec-skill/spec-skill.md`](3.spec-skill/spec-skill.md) — learner skill
  specification.
- [`4.realisation/README.md`](4.realisation/README.md) — runnable lab guide.
- [`4.realisation/demo.php`](4.realisation/demo.php) — integrated demonstration.
- [`4.realisation/pratique/README.md`](4.realisation/pratique/README.md) —
  applied `User` example.
- [`5.rapport-et-presentation/rapport.md`](5.rapport-et-presentation/rapport.md)
  — research and observed results.
- [`5.rapport-et-presentation/presentation.md`](5.rapport-et-presentation/presentation.md)
  — Marp presentation.
- [`AGENTS.md`](AGENTS.md) — repository entry point for agents.
- [`.agents/README.md`](.agents/README.md) — local rules and skills.
- [`Todo.md`](Todo.md) — project checklist.
