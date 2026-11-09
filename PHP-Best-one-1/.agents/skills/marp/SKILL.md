---
name: marp
description: "Write, structure, or fix Marp presentations in Markdown with readable slides and valid frontmatter. Use when creating or reviewing a presentation.md deck."
---

# Marp Presentations

## Frontmatter

Start every deck with valid YAML:

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
backgroundColor: "#f7f9fc"
color: "#1f2933"
---
```

- Keep the frontmatter first, with no text before it.
- Separate slides with a line containing only `---`.
- Use `<!-- _class: lead -->` on a title slide when the theme supports the
  `lead` class.
- Add a `<style>` block only when the deck needs a specific readability fix, and
  keep it small.

## Slide order for a lab

1. Title, student, and supervisor (use placeholders when names are unknown).
2. Agenda.
3. Introduction and technical stack.
4. Definitions of the key terms.
5. The learning problem or the gap the lab closes.
6. Solution and demonstrations, with code and observed output.
7. Deliverables and verification steps.

Do not add a conclusion, thank-you, or "questions?" slide. End on the
deliverables, the evidence, or the final demonstration.

## Exactness

- Write in the language of the lab. This lab uses English.
- Do not invent the learner's real problem or solution. Ask, or use an explicit
  placeholder.
- For a technical lab, include a Quick Start and a working example.
- Declare the language of every code block (`bash`, `powershell`, `php`, `text`).
- Verify commands against the real environment and the real file paths.
- Explain a term the first time it appears.

## Readability

- One idea per slide.
- Prefer five or six short lines to a paragraph.
- Keep code blocks under roughly 20 lines; split longer examples.
- Use tables only when they compare, not to hide prose.
- Keep a consistent hierarchy: title, short lead sentence, supporting detail.
- Use emphasis for the key term, not for whole sentences.
- Add speaker notes with two or three sentences per slide:

```markdown
<!--
Speaker note: explain the concept in one sentence, connect it to the file, and
state the observed result.
-->
```

## Validation

Try one of these when the tool is available:

```powershell
marp presentation.md --output presentation.html
npx --yes @marp-team/marp-cli presentation.md --output presentation.html
```

If no renderer is installed, say so; do not claim the deck was rendered.
