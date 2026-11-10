# lab-php — PHP Lab Specification

This file is the source of truth for generating, building, and validating this
lab. The AI must read it before changing the project. Keep the folder and slug
`lab-php` unchanged.

The README is organized into three parts:

1. **Technical project need**
2. **Concepts and techniques to learn**
3. **Expected implementation**

The AI may suggest relevant improvements, but it must explain their value and
must not change the learning objective without saying so.

---

## 1. Technical Project Need

### 1.1 Problem to solve

As a PHP project grows, several difficulties appear:

- classes can have identical short names and become difficult to distinguish;
- shared code may be duplicated across several classes;
- invalid input and failures may be handled vaguely or become difficult to test;
- beginners may use PHP mechanisms without understanding their purpose or
  limitations.

This lab must turn these difficulties into small, executable examples.

The student's real-world problem is not provided. The AI must not invent it.
If no answer is available, keep these placeholders:

```text
[TO COMPLETE: What concrete problem are you experiencing?]
[TO COMPLETE: What solution do you propose?]
```

### 1.2 Why this lab is necessary

This lab is necessary to build a solid foundation before using larger PHP
architectures, especially Laravel. It explains native mechanisms used in many
modern projects:

- organizing code with namespaces;
- reusing focused behavior with a trait;
- distinguishing programming errors, domain exceptions, and invalid input;
- verifying behavior with native PHP scripts instead of unsupported claims.

This is not a complete task-management application. The task tracker and user
account are teaching examples selected to make the concepts observable.

### 1.3 Contribution to the technical project

The lab contributes:

1. a short demonstration of two `Task` classes with the same short name but
   different namespaces;
2. an example of shared behavior between `Task` and `Project` through
   `HasTimestamps`;
3. examples of validation and typed exceptions with `TaskBoard` and `User`;
4. a controlled conversion of one `E_USER_WARNING` into an `ErrorException`;
5. reproducible native checks and simple verification commands;
6. reusable documentation, a report, and a presentation.

### 1.4 Scope and limits

The lab:

- uses PHP 8.2 or newer;
- runs from the command line;
- uses no Composer package, database, or framework;
- focuses on namespaces, traits, errors, and exceptions;
- separates PHP language behavior from exercise-specific design choices.

The lab must not:

- become a complete web application;
- claim that an error handler can intercept every PHP error;
- present the `422` code on `ValidationException` as automatic HTTP behavior;
- invent the student's real problem or proposed solution;
- add a conclusion, thank-you slide, or “questions” slide.

---

## 2. Concepts and Techniques to Learn

### 2.1 Prerequisites

The learner should know:

- basic PHP syntax;
- variables, functions, and arrays;
- conditions and loops;
- basic classes and objects;
- how to run a PHP file from a terminal.

The AI may briefly explain classes and objects when useful, but this lab is not
a complete object-oriented programming course.

### 2.2 Main concepts

#### Namespaces

The learner must understand:

- the purpose of a namespace;
- the difference between a short name and a fully qualified name;
- how two `Task` classes can exist in different namespaces;
- the convention of matching namespaces to directories;
- the limited role of the lab's autoloader.

Expected example:

```text
PhpLab\Domain\Task
PhpLab\Reporting\Task
```

#### Traits

The learner must understand:

- that a trait shares a small group of methods;
- that a trait is not a class to instantiate;
- the difference between trait composition and inheritance;
- how `Task` and `Project` use `HasTimestamps`;
- how `User` uses `Loggable`;
- trait method precedence and, if demonstrated, explicit conflict resolution.

#### Errors and exceptions

The learner must understand:

- the difference between an error, an exception, and invalid input;
- the value of typed exceptions;
- using `InvalidArgumentException` for an invalid argument;
- using `TaskNotFoundException` for a missing domain item;
- using `ValidationException` with a field and an application code;
- `try`, `catch`, and `finally`;
- restoring the previous error handler after a demonstration.

#### Controlled warning conversion

The example must demonstrate one narrow, explicit case:

- trigger an `E_USER_WARNING`;
- install a handler with `set_error_handler()`;
- check the enabled severity;
- throw an `ErrorException` when the severity is handled;
- return `false` for a masked or unsupported level;
- restore the previous handler with `restore_error_handler()`.

The AI must state that a user-defined handler cannot handle every PHP error,
including some fatal or compile-time errors.

### 2.3 Working techniques

The lab must also teach the learner to:

- read official PHP documentation before making language claims;
- organize a small project by responsibility;
- create a minimal, understandable autoloader;
- write native PHP checks with explicit `PASS` or failure output;
- run a complete example and focused checks;
- document only results that were actually observed;
- verify Markdown links and consistency between code and documentation.

### 2.4 Observable learning outcomes

At the end of the lab, the learner should be able to:

1. explain the purpose of a namespace in their own words;
2. justify the coexistence of the two `Task` classes;
3. show the methods provided by `HasTimestamps`;
4. explain why `User` uses `Loggable`;
5. distinguish validation, a missing task, and a converted warning;
6. explain the limits of `set_error_handler()`;
7. run the four checks and connect each result to the verified concept.

### 2.5 Sources to use

Language explanations must use the official PHP manual, including:

- [Namespaces](https://www.php.net/manual/en/language.namespaces.basics.php)
- [Traits](https://www.php.net/manual/en/language.oop5.traits.php)
- [Trait precedence](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)
- [`Throwable`](https://www.php.net/manual/en/class.throwable.php)
- [`Exception`](https://www.php.net/manual/en/class.exception.php)
- [`Error`](https://www.php.net/manual/en/class.error.php)
- [Exceptions](https://www.php.net/manual/en/language.exceptions.php)
- [`set_error_handler()`](https://www.php.net/manual/en/function.set-error-handler.php)
- [`ErrorException`](https://www.php.net/manual/en/class.errorexception.php)
- [`trigger_error()`](https://www.php.net/manual/en/function.trigger-error.php)

The task tracker, `User`, `422`, and folder organization must be identified as
educational choices, not PHP rules.

---

## 3. Expected Implementation

### 3.1 General form

The AI must create or maintain a lab that is:

- beginner-friendly and progressive;
- written in English for code, file names, namespaces, and commands;
- documented in English in this README and its required deliverables;
- executable without external dependencies;
- verifiable with reproducible commands;
- consistent with the existing files in `lab-php`.

The AI must reuse correct existing implementations, explain the value of every
proposed improvement, and avoid rewriting unrelated files.

### 3.2 Practical example to create

The practical example must combine two small contexts.

#### Main example: task tracker

It must contain:

- `PhpLab\Domain\Task` with title validation and timestamps;
- `PhpLab\Reporting\Task` to demonstrate the same short name in another
  namespace;
- `PhpLab\Domain\Project` using `HasTimestamps`;
- `PhpLab\Domain\TaskBoard` for adding and finding tasks;
- `PhpLab\Exceptions\TaskNotFoundException` for an unknown task;
- `PhpLab\ErrorHandling\WarningToException` for controlled warning conversion;
- `PhpLab\Support\HasTimestamps` for shared behavior.

#### Applied example: User

It must contain:

- `App\Models\User`;
- `App\Traits\Loggable`;
- `App\Exceptions\ValidationException`;
- validation for the name and email address;
- a testable activity log;
- a separate, understandable demonstration.

### 3.3 Minimum expected structure

```text
lab-php/
├── README.md
├── AGENTS.md
├── 1.besoin/
│   └── besoin.md
├── 2.benchmark/
│   └── benchmark.md
├── 3.spec-skill/
│   └── spec-skill.md
├── 4.realisation/
│   ├── bootstrap.php
│   ├── demo.php
│   ├── pratique/
│   │   ├── Exceptions/ValidationException.php
│   │   ├── Models/User.php
│   │   ├── Traits/Loggable.php
│   │   ├── demo.php
│   │   └── README.md
│   ├── src/
│   │   ├── Domain/Project.php
│   │   ├── Domain/Task.php
│   │   ├── Domain/TaskBoard.php
│   │   ├── ErrorHandling/WarningToException.php
│   │   ├── Exceptions/TaskNotFoundException.php
│   │   ├── Reporting/Task.php
│   │   └── Support/HasTimestamps.php
│   └── tests/
│       ├── TestSupport.php
│       ├── errors-and-exceptions.php
│       ├── namespaces.php
│       ├── pratique.php
│       ├── run.php
│       └── traits.php
├── 5.rapport-et-presentation/
│   ├── rapport.md
│   └── presentation.md
└── .agents/
    ├── README.md
    ├── rules/
    └── skills/
```

### 3.4 Required deliverables

#### `1.besoin/besoin.md`

Present the learning question, scope, prerequisites, non-goals, and success
criteria. Keep the placeholders when the student's problem and solution are
unknown.

#### `2.benchmark/benchmark.md`

Present facts from the PHP manual and distinguish them from educational
decisions. Include a table mapping each situation to its chosen mechanism.

#### `3.spec-skill/spec-skill.md`

Describe the learning skill with the sections `name`, `purpose`, `input`,
`steps`, and `expected student output`. Keep it aligned with
`.agents/skills/php-learning/SKILL.md`.

#### `4.realisation/`

Provide the code, autoloader, two demonstrations, and four native checks. The
examples must be readable and executable from the `lab-php` directory.

#### `5.rapport-et-presentation/`

The report must contain only research and actually observed results. The
presentation must be valid Marp, use a 16:9 layout, and show the need, concepts,
example, implementation choices, and execution evidence. It must not contain a
conclusion or thank-you slide.

### 3.5 Expected demonstrations and commands

From `lab-php`, the example must work with:

```powershell
php -v
php 4.realisation/tests/run.php
php 4.realisation/demo.php
php 4.realisation/pratique/demo.php
```

Focused checks:

```powershell
php 4.realisation/tests/namespaces.php
php 4.realisation/tests/traits.php
php 4.realisation/tests/errors-and-exceptions.php
php 4.realisation/tests/pratique.php
```

The complete runner must produce four `PASS` lines and return code `0`. The AI
must run the command before reporting this result.

### 3.6 Acceptance criteria

The implementation is accepted only when:

- PHP 8.2 or newer is used;
- all four checks actually pass;
- both demonstrations run;
- every changed PHP file passes `php -l`;
- relative Markdown links work;
- the real structure matches this README;
- official sources support the PHP claims;
- the specification and executable skill are aligned;
- no result, student problem, or unobserved decision is invented;
- proposed AI improvements are identified and justified.

### 3.7 Agent and subagent roles

The **main agent** reads the context, selects files to change, coordinates the
implementation, runs validation, and makes the final decision.

A **subagent** may receive one bounded task, such as checking official sources,
auditing links, or running the checks. It must return a precise result to the
main agent and must not redefine the project or invent results.

For a README-only change, the main agent may work alone.

### 3.8 Ready-to-use prompt

```text
You are the main agent for the lab-php project.
Read README.md, AGENTS.md, the existing deliverables, and the code before
making changes.

Follow the README's three parts:
1. technical project need;
2. concepts and techniques to learn;
3. expected implementation.

Create or adapt a beginner-friendly PHP 8.2+ lab about namespaces, traits,
errors, and exceptions. Preserve the existing structure, reuse correct code,
and use no Composer package, database, or framework.

Create the requested PhpLab task-tracker example and App User example.
Provide the demonstrations, native checks, official benchmark, report, and
Marp presentation described in the README.

Never invent the student's problem, proposed solution, version, test result,
or command output. If information is missing, keep the
[TO COMPLETE: ...] placeholder. Explain any relevant improvement you propose.

Validate changed PHP files with php -l, run all four checks, run both
demonstrations, and verify Markdown links. Report commands, observed results,
and failures. Do not run Git commands without explicit authorization.
```
