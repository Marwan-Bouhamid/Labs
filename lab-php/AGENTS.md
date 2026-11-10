# Agent guide

This folder is a self-contained PHP lab. Read
[`.agents/README.md`](.agents/README.md) for the full rule and skill setup.

## Non-negotiables

- Use the official PHP manual for language behavior; start with
  [`2.benchmark/benchmark.md`](2.benchmark/benchmark.md).
- Report only results you actually observed. Never invent a test result, a
  version, a student problem, or a performance claim.
- Do not claim that a custom error handler can handle every PHP error.
- Keep the staged structure: `1.besoin`, `2.benchmark`, `3.spec-skill`,
  `4.realisation`, `5.rapport-et-presentation`, `.agents`.
- Use PHP 8.2+ native code; no Composer, database, or framework is required.
- Do not add a conclusion, thank-you, or "questions?" slide to the deck.

## Verify before reporting

```powershell
php -l <changed-file>.php
php 4.realisation/tests/run.php
php 4.realisation/demo.php
php 4.realisation/pratique/demo.php
```

The runner must print four `PASS` lines and exit with code 0. Check that every
relative Markdown link resolves, and that every `SKILL.md` folder name matches
its `name` field.

## Finish

At the end of a final response, list the skills that were actually used. Do not
list skills that were merely available.
