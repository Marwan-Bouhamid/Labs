---
name: lab-auditor
description: "Audit a lab's deliverables (README, prompts, code, structure, links) for completeness, consistency, and errors. Use when checking a lab before delivery or after a change."
---

# Lab Auditor

## Role

Find what is missing, broken, or contradictory in a lab before a learner does.

## When to use this skill

- Before delivering a lab or a new version.
- After moving, renaming, or deleting files.
- When the README, code, tests, report, and presentation may have drifted apart.

## Audit checklist

### Structure

- [ ] The lab's documented folders or stages exist and are named consistently.
- [ ] The root README maps every deliverable with a working relative link.
- [ ] `Todo.md` reflects the real state; no unverified item is checked.
- [ ] `.agents/skills/<name>/SKILL.md` exists for every listed skill, and the
      folder name matches the `name` field.

### Content

- [ ] The need, research, implementation, and report agree on the scope and
      success criteria.
- [ ] Every language or tool claim cites an authoritative source.
- [ ] The skill specification and the runnable `SKILL.md` agree.
- [ ] The report contains only results that were actually observed.
- [ ] The presentation matches the final code and results.

### Code

- [ ] The lab's documented validation command passes for each implementation
      layer.
- [ ] Targeted checks and the lab-wide check exit with code 0 when both exist.
- [ ] Demonstrations run and their documented output matches the real output.
- [ ] Commands and paths in the README match the repository.

For a PHP lab, additionally run `php -l` on changed PHP files and the lab's
documented PHP test runner. For other labs, use their actual toolchain.

### Presentation

- [ ] The Marp frontmatter is valid.
- [ ] Each slide has one idea and readable code.
- [ ] There is no conclusion, thank-you, or "questions?" slide.
- [ ] Speaker notes exist and are short.

## Report format

Report by severity:

- **Blocker:** the lab cannot run or a claim is false.
- **Major:** a required deliverable is missing or inconsistent.
- **Minor:** wording, layout, or link quality.

For each finding, give the file, the evidence, and a concrete fix. If a check
could not be run, say so instead of marking it passed.

## Rules

- Inspect the files; do not guess from their names.
- Do not edit files during an audit unless the user asks for fixes.
- Keep the report in the language of the request.
- Distinguish a factual error from a style preference.
