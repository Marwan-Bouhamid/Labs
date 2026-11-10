---
name: php-examples
description: "Create, adapt, and validate PHP examples with a step-by-step tutorial for each topic, following the project's PHP version and architecture. Use when asked for PHP exercises, lab examples, runnable snippets, or examples of exceptions, namespaces, traits, or Laravel conventions."
---

# PHP Example Creator

## Role

Create short, understandable, runnable PHP examples that match the real project
and teach one idea at a time.

## When to use this skill

Use it for PHP exercises, language demonstrations, lab examples, or adaptations
of an existing snippet. Do not use it to rewrite a whole application unless the
user explicitly asks.

## Inputs and context

- Read the README or brief and the files next to the destination.
- Inspect `composer.json`, the PHP version, the autoloader, and the relevant
  code before choosing syntax.
- Look for existing classes or services the example can reuse. Do not invent
  models, dependencies, versions, or problems.
- If a detail is missing but a simple assumption lets you proceed, choose a
  standalone example and mark clearly what is simulated. Ask only when the
  choice would change the result significantly.

## Procedure

1. Restate the expected deliverable and choose the requested path. Preserve
   existing files; inspect before replacing.
2. Infer the PHP version and dependencies from the project files. Use only
   compatible functions, syntax, and commands.
3. Create one subfolder per concept or exercise when several examples are
   requested. In each subfolder, provide a runnable PHP file and an associated
   `tutoriel.md` (or `README.md` when the project uses that convention).
4. In each tutorial, explain the example itself, not only the concept:
   - walk through the important lines in execution order;
   - define the role of each PHP element used;
   - connect each step to its observable effect;
   - state the goal, the files, the command, the expected output, the link to
     the project architecture, and one limit or extension.
5. Connect each example to a concrete project use case. Distinguish a standalone
   demonstration from a feature that is really integrated.
6. Keep the code small and pedagogical: explicit inputs, descriptive names,
   types when the project uses them, and observable output. Handle exceptions at
   an appropriate boundary; use namespaces according to the real autoloader; use
   a trait only for behavior that genuinely fits.
7. Add or update a parent README that lists each concept, its example, its
   tutorial, and the startup commands.
8. Validate every PHP file with `php -l`. Run the project's targeted tests when
   they exist.
9. Report the files created, the commands, the validation result, and any
   limitation truthfully.

## Rules

- Respond in the language of the request while preserving the language and
  style of existing files.
- Do not integrate a demonstration into a framework when it is clearer as a
  standalone script.
- Do not expose secrets and never modify `.env`.
- Avoid extra dependencies for simple language examples.
- Do not present fictional data as real data or a standalone exercise as
  already integrated code.
- Limit changes to the requested files and the necessary run instructions.

## Example requests

- "Create a PHP exception example for the article creation form."
- "Prepare three runnable exercises on namespaces, traits, and exceptions."
- "Adapt this PHP example to my project's PHP version and Composer autoload."

## Final verification

- [ ] Each requested concept has a subfolder with a PHP example and a tutorial,
      unless an existing documented convention says otherwise.
- [ ] Each tutorial explains the important lines and the path from input to
      output.
- [ ] The examples match the observed PHP version and conventions.
- [ ] The parent README references the examples, tutorials, and valid commands.
- [ ] `php -l` was run on every PHP file, and the result is reported accurately.
