---
name: php-learning
description: "Use when studying, explaining, or testing PHP namespaces, traits, and error or exception handling in the PHP Best Edition lab, including the task-tracker and User examples."
---

# PHP Learning

## Purpose

Help a learner understand the three PHP concepts in this lab through official
documentation, two small examples, and checks they can run themselves.

## Input

The learner's question or explanation about namespaces, traits, or errors and
exceptions, plus the matching concept in the task-tracker or `User` example.

## Procedure

1. Ask the learner to explain what they currently understand in their own words.
2. Read the matching section in
   [the benchmark](../../../lab-php/2.benchmark/benchmark.md) and follow its linked
   official PHP manual source.
3. Inspect the matching example:

   | Concept | Files |
   | --- | --- |
   | Namespace | `4.realisation/src/Domain/Task.php`, `4.realisation/src/Reporting/Task.php`, `4.realisation/pratique/Models/User.php` |
   | Trait | `4.realisation/src/Support/HasTimestamps.php`, `4.realisation/src/Domain/Task.php`, `4.realisation/src/Domain/Project.php`, `4.realisation/pratique/Traits/Loggable.php` |
   | Errors and exceptions | `4.realisation/src/Domain/Task.php`, `4.realisation/src/Domain/TaskBoard.php`, `4.realisation/src/ErrorHandling/WarningToException.php`, `4.realisation/pratique/Models/User.php`, `4.realisation/pratique/Exceptions/ValidationException.php` |

4. Run the matching check from the `PHP-Best-one-1` directory:

   | Concept | Command |
   | --- | --- |
   | Namespace | `php 4.realisation/tests/namespaces.php` |
   | Trait | `php 4.realisation/tests/traits.php` |
   | Errors and exceptions | `php 4.realisation/tests/errors-and-exceptions.php` |
   | Applied `User` example | `php 4.realisation/tests/pratique.php` |
   | Everything | `php 4.realisation/tests/run.php` |

5. Explain the behavior in simple English and connect it to the code and the
   observed test output. If a test fails, report the failure; never say it
   passed.
6. Ask the learner to state one thing they learned and one question they still
   have.
7. Optional extension: ask the learner to change one value (for example, a blank
   title or an invalid email), predict the result, rerun the check, and compare
   the prediction with the observation.

## Expected output

- A short explanation of the selected concept.
- The official PHP manual source used.
- The example file and test command.
- The test result as actually observed.
- One learner observation and any remaining question.

## Rules

- Do not invent test results.
- Do not claim that a custom error handler can handle every PHP error.
- Distinguish PHP language behavior from this lab's teaching choices.
- Keep the explanation at the learner's level; define a term before using it.
- Prefer the learner's own words over copied documentation.

## Completion checklist

- [ ] The learner explained the concept before the agent explained it.
- [ ] An official PHP manual page was cited.
- [ ] The matching file and test command were named.
- [ ] The observed output was reported accurately.
- [ ] The learner recorded one observation and one remaining question.
