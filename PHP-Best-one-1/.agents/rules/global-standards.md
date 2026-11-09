---
trigger: always_on
---

# Global standards

## Structure

- Respect the existing staged lab structure (`1.besoin`, `2.benchmark`,
  `3.spec-skill`, `4.realisation`, `5.rapport-et-presentation`, `.agents`).
- Keep one source of truth per topic: the code in `4.realisation`, the evidence
  in `2.benchmark`, and the observed results in `5.rapport-et-presentation`.
- Do not add a second README that repeats the root README.

## Language

- The default language of this lab is English, matching the source labs and the
  code.
- If the learner or cohort needs another language, translate the explanations
  and slides, but keep code identifiers, namespaces, commands, and file names in
  English.
- Preserve the language and style of a file you are editing.

## Honesty

- Never invent a student's difficulty, a solution, a test result, a version, or
  a performance claim.
- Mark a claim as **not verified** when you have not run or sourced it.
- Distinguish an observation from an interpretation.
- Do not present a simulated or standalone example as integrated production
  code.

## Presentations

- Use Marp with a valid frontmatter (`marp: true`, theme, pagination, 16:9).
- Do not add a conclusion, thank-you, or "questions?" slide. End on the solution,
  the evidence, or the deliverables.
- Do not invent the learner's real problem. Use a placeholder or a general
  learning problem when the specific context is unknown.

## Final response

- At the end of a final response, list the skills that were actually used for
  the request. Do not list skills that were merely available.
- Keep the summary short: what changed, where, how it was verified, and what
  remains.
