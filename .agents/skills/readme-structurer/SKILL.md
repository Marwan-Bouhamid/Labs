---
name: readme-structurer
description: Structures or rewrites a project README into three clear parts: technical project need, concepts and techniques to learn, and expected implementation. Use when preparing a lab README or an AI-generation specification.
---

# README Structurer

## Role

Turn an existing project or lab README into a precise, readable specification
that a learner and an AI agent can both use. Preserve verified project facts,
make missing information explicit, and organize the document around the
required three-part method.

## When to use this skill

Use this skill when the user asks to:

- structure or rewrite a lab README;
- prepare a README that an AI can use to generate a technical lab;
- describe a project's need, learning topics, and expected practical result;
- make a README more complete while preserving its existing project context.

Do not use it to create the implementation itself, rewrite unrelated project
files, or replace a presentation plan.

## Required README structure

The resulting README must contain these main sections in this order:

1. `## 1. Technical Project Need`
2. `## 2. Concepts and Techniques to Learn`
3. `## 3. Expected Implementation`

A title, short introduction, and subsections are allowed before or inside these
parts. Do not add a competing structure that hides or replaces the three main
sections.

## Inputs and context

Before editing:

1. Read the current README completely.
2. Read the relevant `AGENTS.md` files.
3. Inspect the project tree and the files directly referenced by the README.
4. Identify the project language, existing examples, commands, constraints,
   and required deliverables.
5. Check whether a similar README-structuring skill already exists.

Use existing project conventions. Preserve the lab slug, its documented
stages, language and version constraints, dependencies, examples, tests, and
demonstrations unless the user explicitly requests a change.

## Workflow

### 1. Extract the technical need

Write the first part around:

- the problem to solve;
- why the lab or project is necessary;
- what it contributes to the technical project;
- scope, non-goals, and limits.

Do not invent a student's personal problem or solution. If either is unknown,
write explicit placeholders:

```text
[TO COMPLETE: What concrete problem are you experiencing?]
[TO COMPLETE: What solution do you propose?]
```

Describe the existing project purpose as a project fact only when it is
supported by the files or the user's request.

### 2. Define what must be learned

Write the second part around:

- prerequisites;
- basic notions;
- main concepts;
- concrete techniques or tools;
- observable learning outcomes;
- authoritative sources when language behavior is involved.

For each concept, explain what the learner should understand and connect it to
the project's actual example. Separate language rules from teaching choices.
Do not claim that a behavior was tested unless it was actually observed.

### 3. Specify the expected implementation

Write the third part around:

- the expected form of the practical example;
- required modules, examples, or demonstrations;
- the minimum file structure;
- required documentation and reports;
- commands for running and checking the example;
- acceptance criteria;
- permitted AI improvements.

Keep implementation requirements actionable. Include exact paths and commands
only when they are verified from the project or explicitly requested.

### 4. Add an AI-ready prompt when useful

If the README is intended to drive AI generation, add a copy-ready prompt at
the end of the third part. The prompt must tell the AI to:

- read the README and project instructions first;
- preserve the existing structure and correct code;
- avoid inventing missing facts, personal problems, solutions, versions, or
  test results;
- explain relevant improvements;
- validate the result with the project's real commands;
- report observed successes and failures honestly.

### 5. Preserve project-specific details

Do not remove useful details merely to shorten the README. Consolidate
duplicates instead. Keep:

- existing slugs and folder names;
- actual examples and public names;
- technical prerequisites;
- validation commands;
- source links;
- rules that prevent inaccurate claims.

Update links or paths only when the target exists or the user explicitly asks
for a planned path. Never claim that a command passed without running it.

## Rules and constraints

- Write in the user's requested language. If no language is specified, use
  English.
- Use Markdown headings, lists, and fenced code blocks consistently.
- Keep the three required sections visible and ordered.
- Do not invent the learner's problem, proposed solution, test output, version,
  performance result, or implementation fact.
- Mark missing information with `[TO COMPLETE: ...]`.
- Preserve working content and unrelated user changes.
- Do not create a presentation plan inside the README unless requested.
- Do not add conclusions, thank-you sections, or question slides to a
  presentation specification when the project rules prohibit them.
- Do not run Git commands unless the user explicitly authorizes them.
- Do not create extra supporting files unless they materially improve this
  skill.

## Completion checklist

Before reporting completion, verify:

- [ ] `SKILL.md` has valid YAML frontmatter.
- [ ] The folder name exactly matches the `name` field.
- [ ] The description says what the skill does and when to use it.
- [ ] The README has the three required main sections in the right order.
- [ ] The technical need is grounded in the project context.
- [ ] The concepts match the actual project and examples.
- [ ] The expected implementation includes concrete files, commands, or
      criteria where the project supports them.
- [ ] Unknown personal information uses explicit placeholders.
- [ ] Relative Markdown links resolve.
- [ ] No unrelated files were changed.

## Expected report

Report:

1. the README path changed;
2. the three sections added or reorganized;
3. any placeholders retained;
4. validation performed and any checks not run;
5. any improvement proposed by the AI.

In Antigravity, the skill can be selected from the workspace Customizations or
Skills panel. In supported CLI environments, invoke it as:

```text
/readme-structurer
```
