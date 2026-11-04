# Role
You are a senior web developer and technical presentation designer who is an expert in Marp (Markdown Presentation Ecosystem), Marp for VS Code, and Marp CLI.

# Context
I am a web development student at SOLICODE (OFPPT). I must build a presentation of my **technical project** using Marp, then export it and push everything to GitHub.

My repository: https://github.com/Marwan-Bouhamid/Projet-technique
The source code is spread across multiple branches. Before writing, inspect every branch (file structure, READMEs, dependencies, commit history) so that all slide content reflects the real project. Do not invent features, diagrams, or technologies. If something cannot be verified, insert a clearly marked placeholder such as `[TO COMPLETE: ...]`.

# Task
Create a complete Marp presentation (`presentation.md`) plus all supporting files. The presentation language is French (the school requires it); all explanations and comments to me are in English.

## Required slide plan (in this order)
1. **Cover page:** OFPPT logo, Solicode logo, project title, learner full name (Marwan Bouhamid), supervisor name `[TO COMPLETE]`.
2. **Introduction:** present the technical project.
3. **Besoin (Need):** the problem and the need the project addresses.
4. **Analyse (Analysis):** requirements study and functionalities (use a table).
5. **Conception (Design):** diagrams and models (e.g., use case, class/ERD, sequence). Provide them as Mermaid or PlantUML source plus exported images, or as placeholders if not verifiable.
6. **Réalisation (Implementation):** technical stack and prototype (screenshots, code block excerpt).
7. **Conclusion:** project result, limits, and possible improvements.

## Marp techniques that MUST be demonstrated (each used meaningfully)
- **Installation:** short steps to install the Marp for VS Code extension and enable Marp with `marp: true` in the front matter.
- **Slide creation:** slides separated by `---`, with well-organized content.
- **Formatting:** headings, paragraphs, lists, tables, and fenced code blocks with language tags.
- **Images:** inline images and logos with sizing (e.g., `![w:150](logo.png)`), and at least one background image (`![bg](...)`, ideally also a split layout such as `![bg right](...)`).
- **Themes:** use the built-in `default`, `gaia`, and `uncover` themes. Show how to switch themes, and apply one as the main theme.
- **Directives:** slide numbers (`paginate`), `header`, `footer`, `backgroundColor`, `color`, including at least one local directive (prefixed with `_`) that affects a single slide.
- **Custom CSS:** create a separate CSS theme file with the `/* @theme ... */` comment, connect it to VS Code (`markdown.marp.themes` setting) and/or Marp CLI (`--theme`), and change the slides' style.
- **CSS classes:** define at least two classes and apply them to different slides with `<!-- _class: ... -->`.
- **Presenter notes:** add notes using HTML comments (`<!-- ... -->`) on several slides, and explain how to export them.
- **Progressive (fragmented) lists:** show list items one by one using Marp's fragmented list syntax (`*` bullets, and `1)` for numbered lists), and mention that this takes effect in HTML export.
- **Export:** provide the exact commands (Marp CLI) and the VS Code export steps for PDF, HTML, and PPTX. Note any limitation (e.g., PPTX slides are images by default, so text is not editable).

# Deliverables
1. `presentation.md` (full content, ready to render)
2. `theme.css` (custom theme)
3. A recommended folder structure (`assets/`, `exports/`, etc.)
4. A short **README section** with installation, preview, and export commands
5. A **GitHub push checklist** (which files to commit, on which branch, suggested commit message)
6. A **verification checklist** to test rendering in VS Code and to check the exported PDF, HTML, and PPTX files (including presenter notes and fragmented lists)

# Quality Requirements
- Professional, clean, and consistent design; readable font sizes; no text overflow on slides
- Concise slide text (short bullets, not paragraphs); details go in presenter notes
- Valid Marp/Markdown syntax that renders correctly in VS Code
- Accurate content based only on the real repository
- No broken image paths; use relative paths

# Output Format
Return each file in its own code block with its filename as a title, followed by a short list of the placeholders I still need to fill in.