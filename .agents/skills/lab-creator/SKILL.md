---
name: lab-creator
description: "Create or adapt any lab's deliverables from its README, prompt, or plan. Use when creating a lab, preparing lab content, choosing its file structure, or planning its presentation."
---

# Lab Creator

## Role

Turn a lab README, prompt, or generic plan into a coherent set of deliverables
that a learner can follow from the first question to the final demonstration.
The lab may use any topic, language, framework, or toolchain.

## When to use this skill

- Creating a new lab or a new version of an existing lab.
- Adapting a generic lab template to a specific topic.
- Reorganising a lab that has grown inconsistent.

Do not use it to rewrite an entire application that the user did not ask to
change.

## Inputs and context

- Read the lab README, prompt, the existing files, and the available generic
  plan.
- If a `template-plan.md` exists, use it. If it does not, search the workspace
  for the generic plan and use it without pretending it has another name.
- Inspect the code, language version, dependencies, and available commands
  before writing instructions.
- Preserve the existing lab slug (`lab-*` or the requested folder name), or
  create the requested `lab-*` folder. Do not silently rename it.

## Procedure

1. **Restate the deliverable.** List the files to create or change and the
   learning path they form.
2. **Map the stages.** Keep the lab's existing stages when they exist. If the
   lab is new, choose a small structure that separates the need, research,
   implementation, verification, and report or presentation when those
   deliverables are relevant.
3. **Write the need first.** State the question, scope, prerequisites, non-goals,
   and observable success criteria.
4. **Ground the research.** Cite authoritative sources for language, framework,
   or tool behavior and separate them from teaching choices.
5. **Specify the skill.** Keep the specification and the runnable `SKILL.md`
   aligned on name, purpose, input, steps, and output.
6. **Build a runnable example.** Prefer the project's real toolchain. Add a
   Quick Start and a working example or demo when the lab is practical.
7. **Add checks.** Every claim in the report must have a command or other
   reproducible evidence that produces an observable result.
8. **Write the report and presentation.** Use only observed results. Follow the
   `marp` skill for the deck.
9. **Audit.** Use the `lab-auditor` skill before declaring the lab complete.

## Rules

- Write in the language requested by the user; this lab defaults to English.
- Do not duplicate the presentation plan in the README.
- Do not add a conclusion, thank-you, or "questions?" slide.
- Do not invent the learner's real problem or solution. Ask, or leave an
  explicit placeholder.
- Do not run Git commands unless the user allows them.
- Keep the README file map accurate; update it whenever a file moves.
- Keep examples small, readable, and runnable with the lab's documented
  dependencies. Do not add a framework or dependency unless the lab requires
  it.
- When the lab is PHP, follow the PHP-specific rules and use `php -l` plus the
  lab's targeted checks. Do not apply those commands to other labs.

## Completion checklist

- [ ] The lab slug and root README are preserved or intentionally updated.
- [ ] The chosen lab structure exists and is described in the README.
- [ ] The code runs and the checks pass, or the failure is documented.
- [ ] Research cites authoritative sources for every language or tool claim.
- [ ] The skill specification and `SKILL.md` agree.
- [ ] The report records only observed results.
- [ ] The presentation is valid Marp and follows the `marp` skill.
- [ ] Every relative link resolves.
