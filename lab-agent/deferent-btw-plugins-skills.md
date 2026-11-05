---
marp: true
theme: default
lang: en
size: 16:9
paginate: true
header: "Lab Agent — Plugins and Skills"
footer: "Marwan Bouhamid | SoliCode Tangier — OFPPT"
---

<style>
section {
  font-family: 'Segoe UI', Arial, sans-serif;
  font-size: 24px;
  padding: 38px 56px;
}
h1, h2 { color: #1d4ed8; }
h1 { font-size: 42px; }
h2 { font-size: 32px; }
table { font-size: 19px; width: 100%; }
th { background: #2563eb; color: white; }
th, td { padding: 8px 10px; }
strong { color: #1d4ed8; }
code { background: #f1f5f9; padding: 2px 6px; border-radius: 4px; }
</style>

<!-- _header: "" -->
<!-- _footer: "" -->

# Plugins and Skills
## Two ways to give capabilities to an AI assistant

- **Presented by:** Marwan Bouhamid
- **Center:** SoliCode Tangier (OFPPT)
- **Topic:** understanding their roles, differences, and how they complement each other

<!-- Note: This presentation compares two concepts commonly used in AI-powered development tools. -->

---

## Presentation outline

1. Why customize an assistant?
2. What is a Skill?
3. What is a plugin?
4. How are they different?
5. How do you choose and use them together?

<!-- Note: We will start with the general need, define each concept, and then look at practical examples. -->

---

## Why customize an assistant?

A general-purpose assistant does not automatically know:

- our team's working methods;
- the rules specific to a project;
- which tools and resources to use for a task.

**Customizing an assistant** lets us provide relevant instructions, knowledge, or tools.

<!-- Note: Plugins and Skills both address this need, but at different levels. -->

---

## A Skill: a reusable method

A **Skill** describes how to perform a type of task.

- It provides **instructions**, steps, and sometimes examples or resources.
- Depending on the tool, it may activate when a task matches its purpose or be invoked explicitly.
- It helps the assistant produce more consistent and repeatable results.

**Example:** a "Prepare a Lab" Skill asks the assistant to identify the need, distinguish facts from assumptions, and then write objectives, steps, and success criteria.

<!-- Note: A Skill guides the assistant's work. It does not necessarily add a new software tool. -->

---

## A plugin: a package of capabilities

A **plugin** is generally an installable or enableable component that extends an assistant or platform.

Depending on the tool, it may bundle several elements:

- one or more Skills;
- commands or specialized agents;
- connections to tools or services;
- configuration rules or resources.

**Example:** a documentation plugin could provide a writing Skill and a connection to a document-search tool.

<!-- Note: The exact contents of a plugin depend on the platform, so check its documentation. -->

---

## Quick comparison

| Aspect | Skill | Plugin |
|:--|:--|:--|
| **Main role** | Describe a method for a task | Add or bundle capabilities |
| **Typical contents** | Instructions, steps, examples, resources | Skills, commands, integrations, or other components |
| **Scope** | Focused on a need or type of task | Can cover multiple needs and components |
| **Simple analogy** | A recipe for doing work | A toolbox that can contain recipes |
| **Tool dependence** | Format and activation vary | Installation and contents vary even more |

<!-- Note: This is a general comparison. Platforms may use these terms differently. -->

---

## How can they work together?

### Example: preparing a technical Lab

1. The user installs or enables an **educational plugin**.
2. The plugin provides a "Prepare a Lab" Skill.
3. The assistant applies the Skill's steps to the requested topic.
4. The plugin may also provide a template, command, or useful integration.

**Key point:** the plugin provides a set of capabilities; the Skill explains how to perform a task.

<!-- Note: A plugin can contain a Skill, but not every Skill is distributed as part of a plugin. -->

---

## Choose based on your need

| Need | Consider |
|:--|:--|
| Apply a repeatable method | Creating a **Skill** |
| Add a focused instruction for a task | Creating or adapting a **Skill** |
| Distribute several capabilities together | Using or creating a **plugin**, if the platform supports it |
| Connect the assistant to an external tool | Look for an integration supported by the platform; it may be provided by a plugin |

**Start simple:** if you only need a method, a Skill is often enough.

<!-- Note: Choose based on the desired outcome and the features the platform actually supports. -->

---

## Terminology varies

- **Plugin** has no universal definition; its contents vary by assistant and platform.
- A **VS Code extension** and an **assistant plugin** are not automatically the same thing.
- A **Skill** is not necessarily an executable program; it may consist primarily of instructions.
- Check the tool's documentation for the supported format, location, installation process, and capabilities.

<!-- Note: These distinctions help avoid assuming that the same term describes exactly the same mechanism in every tool. -->

---

## Conclusion

- A **Skill** teaches the assistant a way to perform a task.
- A **plugin** extends or bundles capabilities; it may include one or more Skills.
- They are **complementary**, but they are not interchangeable.
- The right choice depends on the need and the platform.

### Question
To help prepare Labs, would you start with a Skill or a plugin? Why?

<!-- Note: For a single preparation workflow, starting with a Skill is the simplest choice. A plugin becomes useful when several capabilities need to be distributed together. -->
