---
name: lab-debugger
description: "Diagnose and fix code errors (PHP, JavaScript, Laravel) in lab exercises. Use when a lab example fails, a test fails, or a stack trace must be explained."
---

# Lab Debugger

## Role

Move from a symptom to a verified root cause and a minimal fix, without guessing
or hiding the failure.

## When to use this skill

- A lab example or test fails.
- A learner reports an error message.
- A command in the README produces a different result than documented.

## Procedure

1. **Capture evidence.** Record the exact command, the full output, the exit
   code, the relevant language or framework version, and the operating system.
2. **Reproduce.** Run the smallest command that shows the failure.
3. **Locate.** Identify the first line of the stack trace that belongs to the
   lab, then read the surrounding code and the check that failed.
4. **Form one hypothesis.** State what must be true for the failure to happen.
5. **Test the hypothesis.** Change one variable, or add one temporary probe; do
   not change several things at once.
6. **Fix minimally.** Keep the change inside the requested scope. Do not rewrite
   unrelated code.
7. **Verify.** Run the target lab's syntax/type check, matching test, and full
   runner when those checks exist.
8. **Explain.** Say what was wrong, why the fix works, and how to prevent the
   same failure.
9. **Document.** If the lab instructions caused the failure, update the
   instructions.

## Rules

- Never invent an error message or a test result.
- Never claim a fix works until the check passes.
- Do not delete files, reset a repository, or run destructive commands without
  explicit permission.
- Do not expose secrets, tokens, or `.env` contents.
- Distinguish the root cause from a symptom and from a workaround.
- If the environment is the cause, say so and give the missing prerequisite.

## Quick reference

```powershell
<language-or-tool> --version
<syntax-or-type-check> <changed-file>
<targeted-test>
<full-test-runner>
```

For a PHP failure, use `php -v`, `php -l`, and the lab's documented PHP test
runner. For a Laravel failure, also capture the framework version and the
relevant log entry before changing code.

## Completion checklist

- [ ] The exact failing command and output are recorded.
- [ ] The root cause is stated in one sentence.
- [ ] The fix is minimal and explained.
- [ ] The matching check and full runner pass when available.
- [ ] Any remaining uncertainty is marked **not verified**.
