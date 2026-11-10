---
name: lab-creator
description: "Create or adapt the deliverables of a lab from its README and a generic plan. Use when preparing lab content, its file structure, or its presentation plan."
---

# Lab Creator

## Role

Turn a lab README and a generic plan into a coherent set of deliverables that a
learner can follow from the first question to the final demonstration.

## When to use this skill

- Creating a new lab or a new version of an existing lab.
- Adapting a generic lab template to a specific topic.
- Reorganising a lab that has grown inconsistent.

Do not use it to rewrite an entire application that the user did not ask to
change.

## Inputs and context

- Read the lab README, the existing files, and the available generic plan.
- If a `template-plan.md` exists, use it. If it does not, search the workspace
  for the generic plan and use it without pretending it has another name.
- Inspect the code and the actual PHP version before writing commands.
- Preserve the existing lab slug (`lab-*` or the requested folder name). Do not
  silently rename it.

## Procedure

1. **Restate the deliverable.** List the files to create or change and the
   learning path they form.
2. **Map the stages.** Keep the numbered stages when they exist:
   `1.besoin`, `2.benchmark`, `3.spec-skill`, `4.realisation`,
   `5.rapport-et-presentation`, plus `.agents`.
3. **Write the need first.** State the question, scope, prerequisites, non-goals,
   and observable success criteria.
4. **Ground the research.** Cite official sources for language behavior and
   separate them from teaching choices.
5. **Specify the skill.** Keep the specification and the runnable `SKILL.md`
   aligned on name, purpose, input, steps, and output.
6. **Build a runnable example.** Prefer native tools and the project's real
   version. Add a Quick Start and a working "hello world" or demo.
7. **Add checks.** Every claim in the report must have a command that produces
   observable output.
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
- Keep the code small, readable, and runnable without Composer or a framework
  unless the lab explicitly requires them.

## Completion checklist

- [ ] The lab slug and root README are preserved or intentionally updated.
- [ ] All staged folders exist and are described in the README.
- [ ] The code runs and the checks pass, or the failure is documented.
- [ ] The benchmark cites official sources for every language claim.
- [ ] The skill specification and `SKILL.md` agree.
- [ ] The report records only observed results.
- [ ] The presentation is valid Marp and follows the `marp` skill.
- [ ] Every relative link resolves.
