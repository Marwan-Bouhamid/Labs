# Agent configuration

This folder makes the lab self-contained for an agent as well as for a learner.
It merges the PHP-specific setup of the second lab with the lab-creation skills
from `Labs/.agents`, then removes the overlaps and contradictions. The short
entry point for any agent is [`../AGENTS.md`](../AGENTS.md).

## Rules

The rules apply automatically when the agent works in this lab.

| File | Trigger | Purpose |
| --- | --- | --- |
| [`rules/global-standards.md`](rules/global-standards.md) | always | Structure, language, honesty, presentation, and final-response conventions. |
| [`rules/php-lab.md`](rules/php-lab.md) | always | Official PHP sources, verified results, and the limits of the warning example. |
| [`rules/lab-workflow.md`](rules/lab-workflow.md) | file changes | Inspect → change one layer → verify → document → no unrequested Git. |

The three files are kept deliberately small. If a rule belongs to PHP accuracy,
it goes in `php-lab.md`; if it belongs to any lab, it goes in `lab-workflow.md`;
if it belongs to every response, it goes in `global-standards.md`.

## Skills

| Skill | Use it when |
| --- | --- |
| [`php-learning`](skills/php-learning/SKILL.md) | Studying, explaining, or testing namespaces, traits, or errors/exceptions. |
| [`lab-creator`](skills/lab-creator/SKILL.md) | Creating or adapting lab deliverables from a README and a plan. |
| [`lab-presenter`](skills/lab-presenter/SKILL.md) | Designing or fixing a lab presentation. |
| [`marp`](skills/marp/SKILL.md) | Writing Marp syntax, layout, and readable slides. |
| [`php-examples`](skills/php-examples/SKILL.md) | Creating runnable PHP examples with tutorials. |
| [`lab-auditor`](skills/lab-auditor/SKILL.md) | Auditing a lab for missing files, broken links, and inconsistency. |
| [`lab-debugger`](skills/lab-debugger/SKILL.md) | Diagnosing a PHP, JavaScript, or Laravel failure. |
| [`skill-creator`](skills/skill-creator/SKILL.md) | Creating or updating an Agent Skill that follows the open standard. |

Each skill has its own folder and a `SKILL.md` with `name` and `description`
metadata. The folder name and the `name` field must match.

## How to invoke

- In an Agent Skills-compatible IDE, open the Customizations or Skills panel and
  select the skill.
- In a compatible CLI, use `/<skill-name>` when that command is supported.
- In a normal chat, describe the task and let the agent select the matching
  skill from the descriptions.
- For the student workflow, start with `php-learning` and name the concept:
  namespaces, traits, or errors and exceptions.

## What changed from the source folders

- The PHP rules and the `php-learning` skill stay specific to this lab.
- The generic lab skills are now in English, matching the lab deliverables.
- `lab-creator`, `lab-presenter`, and `marp` share one presentation rule: valid
  Marp frontmatter, 16:9, no conclusion or thank-you slide, and no invented
  student problem.
- `php-examples` now validates with `php -l` and the lab's own checks instead of
  assuming Composer or a framework.
- `lab-auditor` and `lab-debugger` have concrete checklists instead of one-line
  descriptions.
- The always-on "list the skills actually used" rule is kept in
  `global-standards.md`.

## Adding a skill

Use `skill-creator`. Create `.agents/skills/<skill-name>/SKILL.md`, keep the
folder and `name` identical, and add the new skill to the table above and to the
root README. Do not create a `SKILL.md` directly inside `.agents/skills/`.
