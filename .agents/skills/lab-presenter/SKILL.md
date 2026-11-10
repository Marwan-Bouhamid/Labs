---
name: lab-presenter
description: "Generate, structure, or fix the presentations and Marp slide decks associated with a lab. Use when designing course slides or a lab presentation."
---

# Lab Presenter

## Role

Turn a lab's README, code, and verified results into a short presentation that a
student can deliver without reading the documentation aloud.

## When to use this skill

- Creating `5.rapport-et-presentation/presentation.md`.
- Fixing a deck whose slides are too dense, inconsistent, or disconnected from
  the code.
- Adapting a lab presentation for a different audience or duration.

## Procedure

1. Read the lab README, benchmark, report, and the `marp` skill.
2. Choose one story: what problem the concepts solve, how the code solves it, and
   what the checks prove.
3. Build the deck in this order:
   1. Title and identification.
   2. Agenda.
   3. Introduction and technical stack.
   4. Key definitions.
   5. The problem or the learning gap.
   6. Solution and demonstrations, with code and observed output.
   7. Deliverables and how to verify them.
4. Keep one idea per slide and no more than about six bullets.
5. Put code that fits on one screen; split longer code across slides.
6. Add speaker notes with two or three sentences per slide.
7. Verify the deck with a Marp renderer when one is available.

## Rules

- Use valid Marp frontmatter and 16:9.
- Do not add a conclusion, thank-you, or "questions?" slide.
- Do not invent the student's real problem, results, or performance claims.
- Match every code block and command to the current lab.
- Declare the language of every code fence.
- Write in the language of the lab (English by default).
- Keep the visual hierarchy consistent: one title, short lines, generous space.

## Completion checklist

- [ ] The deck follows the required order.
- [ ] Every slide has one clear idea.
- [ ] Code blocks declare a language and match the repository.
- [ ] Speaker notes exist and are short.
- [ ] The deck renders without a Marp error, or the renderer was unavailable and
      that is stated.
- [ ] No conclusion or thank-you slide.
