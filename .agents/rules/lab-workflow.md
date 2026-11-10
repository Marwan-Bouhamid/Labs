---
trigger: file_match
glob: "**/*"
---

# Shared lab workflow

Use this workflow for any change inside a lab.

## 1. Inspect before editing

- Read the target lab's README, plan or prompt, and the files you are about to
  change.
- Identify the lab's documented stages, language, toolchain, and validation
  commands. Do not assume a fixed folder structure.
- Preserve existing work. Do not delete or rewrite a file until you have read
  it and understood why it exists.

## 2. Change one layer at a time

- Update implementation and its check together when the lab has automated
  checks.
- Ground language or framework claims in authoritative sources appropriate to
  the lab.
- Update reports and presentations only after the relevant check has actually
  run.
- Keep the README, plan, prompt, and task list in sync with files that are
  added, renamed, or removed.

## 3. Verify

- Run the lab's documented validation command for every changed implementation
  layer.
- Run targeted checks before the lab-wide check, when both exist.
- Run demonstrations when the change affects their output.
- Check that every Markdown link resolves to a real file.
- Report exactly what passed, what failed, and what could not be checked.

## 4. Document

- Record the command and observed output in the lab's report or evidence file,
  not in the README unless that is the lab's established convention.
- Keep the presentation aligned with the final code and results.
- Mark a `Todo.md` item complete only after its verification is done.

## 5. Git

- Do not run Git commands unless the user explicitly allows them.
