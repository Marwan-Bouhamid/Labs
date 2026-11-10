# Shared agent configuration

This folder is the repository-wide customization entry point for every lab in
`Labs`. It provides neutral rules and reusable skills for inspecting, creating,
implementing, presenting, debugging, and auditing labs. A lab may use any
language, framework, toolchain, or folder structure.

## Rules

The rules are intentionally split by scope:

| File | Trigger | Purpose |
| --- | --- | --- |
| [`rules/global-standards.md`](rules/global-standards.md) | always | Shared structure, language, honesty, presentation, and final-response standards. |
| [`rules/lab-workflow.md`](rules/lab-workflow.md) | file changes | Inspect, change, verify, document, and preserve the target lab's conventions. |
| [`rules/php-lab.md`](rules/php-lab.md) | PHP work | PHP manual sources, PHP checks, and PHP-specific teaching limits. |

`php-lab.md` is conditional guidance. It does not impose PHP commands or the
PHP lab's numbered stages on other labs.

## Skills

### Generic lab skills

| Skill | Use it when |
| --- | --- |
| [`lab-creator`](skills/lab-creator/SKILL.md) | Creating or adapting any lab from a README, prompt, or plan. |
| [`lab-presenter`](skills/lab-presenter/SKILL.md) | Designing or fixing a lab presentation. |
| [`marp`](skills/marp/SKILL.md) | Writing Marp syntax, layout, and readable slides. |
| [`lab-auditor`](skills/lab-auditor/SKILL.md) | Auditing a lab for missing files, broken links, and inconsistency. |
| [`lab-debugger`](skills/lab-debugger/SKILL.md) | Diagnosing a lab example or exercise failure. |
| [`skill-creator`](skills/skill-creator/SKILL.md) | Creating or updating an Agent Skill that follows the open standard. |
| [`readme-structurer`](skills/readme-structurer/SKILL.md) | Structuring a README around the technical need, learning concepts, and expected implementation. |

### Topic-specific skills

| Skill | Use it when |
| --- | --- |
| [`php-learning`](skills/php-learning/SKILL.md) | Studying or testing PHP namespaces, traits, or errors and exceptions. |
| [`php-examples`](skills/php-examples/SKILL.md) | Creating and validating runnable PHP examples. |

Topic-specific skills apply only when the target lab uses that topic. Add new
topic skills here without changing the generic rules.

## Creating a new lab

Use [`lab-creator`](skills/lab-creator/SKILL.md) when you want to create a lab
or adapt an existing one:

1. Choose a `lab-*` directory, preserving an existing slug when one exists.
2. Define the technical need, learning goals, scope, non-goals, and observable
   success criteria.
3. Choose a small structure appropriate to the topic and keep its README or
   prompt as the source of truth.
4. Select the language, framework, dependencies, and commands from the real
   project instead of assuming PHP or a fixed stage layout.
5. Add the implementation, runnable example, checks, report, and presentation
   only when they are relevant to the lab.
6. Audit links, metadata, consistency, and observed results before delivery.

For a PHP lab, additionally use `php-learning` or `php-examples` and apply the
conditional PHP rules. Other labs should select the topic-specific skills that
match their own technology.

## Adding a skill

Use `skill-creator`. Create
`.agents/skills/<skill-name>/SKILL.md`, keep the folder and `name` field
identical, and add the skill to this table. Keep generic skills reusable and
put language or framework assumptions in topic-specific skills.

## Invocation

- In an Agent Skills-compatible IDE, select the skill from the Customizations or
  Skills panel.
- In a compatible CLI, use `/<skill-name>` when supported.
- In normal chat, describe the task and let the agent select the matching
  skill.
