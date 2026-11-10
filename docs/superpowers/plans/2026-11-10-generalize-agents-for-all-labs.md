# Generalize `.agents` for All Labs Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Make the repository-root `.agents` configuration reusable for every current and future lab while preserving PHP-specific guidance as opt-in.

**Architecture:** Keep one shared `.agents` configuration at the repository root. Replace PHP assumptions in always-on rules with lab-neutral discovery, documentation, and verification rules; retain PHP rules and skills for explicit PHP work. Add a generic lab-creation skill that selects structure, language, tooling, and checks from each lab's README or plan.

**Tech Stack:** Markdown, Agent Skills metadata, repository documentation.

**Spec:** Approved shared-root design in the conversation; no separate design file is required for this small configuration change.

## Global Constraints

- `.agents` remains at the repository root and applies to all labs.
- PHP-specific skills and rules remain available and are not deleted.
- Generic rules must not require PHP, Composer, a framework, or a fixed numbered-folder structure.
- Do not create a root `AGENTS.md` solely to hide the broken README reference; make `.agents/README.md` self-contained instead.
- Do not run Git commands unless the user explicitly allows them.

## Review Focus

- A non-PHP lab must not be instructed to run PHP commands; verify the generic rules contain no unconditional PHP-only checks.
- A new lab with a different folder layout must still have a documented creation path; verify the generic creator skill describes structure as a deliberate choice.
- PHP work must retain its existing safeguards; verify `php-lab.md` and PHP skill entries remain discoverable as opt-in guidance.
- Every README skill link must resolve and every listed skill folder/name must match; verify with a scripted or targeted link/metadata check.
- The root README must no longer point to a missing `AGENTS.md`; verify all relative links in the changed README resolve.

---

### Task 1: Generalize always-on repository rules

**Files:**
- Modify: `.agents/rules/global-standards.md`
- Modify: `.agents/rules/lab-workflow.md`
- Rename or replace: `.agents/rules/php-lab.md` as an opt-in PHP-specific rule if the repository's instruction loader supports a non-global trigger; otherwise retain it and document that it is selected only for PHP work.

**Interfaces:**
- Produces repository-wide rules that describe lab-neutral structure discovery, language/tool preservation, evidence-based reporting, presentations, and verification.
- Preserves PHP-only instructions in a clearly named optional rule.

- [ ] Rewrite `global-standards.md` so it refers to “the lab’s documented stages” rather than fixed PHP folders, while retaining language, honesty, presentation, and final-response standards.
- [ ] Rewrite `lab-workflow.md` so inspection reads the target lab’s README/plan, verification uses the lab’s actual commands, and documentation stays synchronized without assuming PHP.
- [ ] Keep PHP-specific requirements out of the always-on sections; retain them in `php-lab.md` with an explicit opt-in note if trigger semantics cannot be changed safely.
- [ ] Inspect the resulting frontmatter and headings for valid Markdown and unambiguous scope.

### Task 2: Add a generic lab creation skill

**Files:**
- Create: `.agents/skills/lab-creator/SKILL.md` (modify the existing file in place)

**Interfaces:**
- Skill metadata remains `name: lab-creator`.
- The skill accepts a lab README, plan, or user brief and produces a coherent `lab-*` deliverable set without requiring a PHP-specific stage layout.

- [ ] Update the role and inputs to support any lab topic, language, framework, or tooling.
- [ ] Define a procedure that discovers the requested lab’s structure, chooses or preserves its language/toolchain, creates only relevant deliverables, adds runnable examples/checks where appropriate, and audits links and consistency.
- [ ] Move PHP-only advice to conditional guidance (“when the lab is PHP…”), preserving native PHP checks only for PHP labs.
- [ ] Keep the existing constraints against invented learner problems, unsupported claims, unnecessary frameworks, and unrequested Git operations.
- [ ] Confirm the metadata description contains discovery phrases for creating, adapting, and structuring any lab.

### Task 3: Rewrite the shared `.agents` README

**Files:**
- Modify: `.agents/README.md`

**Interfaces:**
- Documents `.agents` as the repository-wide customization entry point.
- Lists generic rules and skills with working relative links.
- Explains how to create a new lab and how to opt into topic-specific skills.

- [ ] Remove the PHP-lab-only opening and replace it with repository-wide scope and precedence guidance.
- [ ] Document a generic new-lab flow: choose a `lab-*` directory, define the need and success criteria, choose stages/deliverables, implement examples, add checks, and audit.
- [ ] Split the skill table into generic skills and topic-specific skills, marking PHP skills as conditional rather than universal.
- [ ] Remove the broken `../AGENTS.md` entry point and replace it with links to existing repository paths only.
- [ ] Update the “adding a skill” instructions to remain valid for future labs and topics.

### Task 4: Validate the generalized configuration

**Files:**
- Test: `.agents/README.md`, `.agents/rules/*.md`, `.agents/skills/*/SKILL.md`

**Interfaces:**
- Validation reports broken links, missing skill files, metadata/name mismatches, and accidental unconditional PHP requirements.

- [ ] Check every relative link in `.agents/README.md` resolves from the README directory.
- [ ] Check every listed skill has a corresponding `.agents/skills/<name>/SKILL.md` and matching `name` metadata.
- [ ] Search always-on rules for fixed PHP commands, PHP-only staged paths, or claims that would constrain non-PHP labs.
- [ ] Run a final targeted read of all changed files and report only observed validation results.
