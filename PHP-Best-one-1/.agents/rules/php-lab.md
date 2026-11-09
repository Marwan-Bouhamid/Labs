---
trigger: always_on
---

# PHP lab guidance

- Keep explanations in simple English that a learner can explain aloud.
- Use the official PHP manual for language behavior; start with
  [the benchmark](../../2.benchmark/benchmark.md).
- Keep examples within namespaces, traits, and error/exception handling.
- Run the relevant PHP check before describing its result. Report failures as
  observed; do not invent results or claim unverified behavior.
- Distinguish PHP language behavior from this lab's teaching choices (the task
  tracker, the `User` model, namespace-folder matching, and the `422` code are
  choices).
- Never claim that a custom error handler can handle every PHP error.
- When you change PHP code, run `php -l` on the changed file and the matching
  check from `4.realisation/tests/`.
- Keep the task-tracker example (`PhpLab\`) and the applied example (`App\`)
  consistent with each other and with the README.
