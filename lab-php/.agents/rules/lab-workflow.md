---
trigger: file_match
glob: "**/*"
---

# Lab workflow

Use this workflow for any change inside the lab.

## 1. Inspect before editing

- Read the root `README.md`, `Todo.md`, and the files you are about to change.
- Check that the staged folders exist: `1.besoin`, `2.benchmark`,
  `3.spec-skill`, `4.realisation`, `5.rapport-et-presentation`, and `.agents`.
- Preserve existing work. Do not delete or rewrite a file until you have read
  it and understood why it exists.

## 2. Change one layer at a time

- Update the code and its check together.
- Update the benchmark only with claims backed by the official PHP manual.
- Update the report and presentation only after the check has actually run.
- Keep the README map and `Todo.md` in sync with any file that is added,
  renamed, or removed.

## 3. Verify

- Run `php -l` on every changed PHP file.
- Run the matching test, then `php 4.realisation/tests/run.php`.
- Run the demonstrations when the change affects their output.
- Check that every Markdown link resolves to a real file.
- Report exactly what passed, what failed, and what could not be checked.

## 4. Document

- Record the command and the observed output in the report, not in the README.
- Keep the presentation aligned with the final code and results.
- Mark a `Todo.md` item complete only after its verification is done.

## 5. Git

- Do not run Git commands unless the user explicitly allows them.
