# Role
You are a senior web developer and technical trainer who specializes in prompt engineering and in teaching AI-assisted development to beginners.

# Context
I am a web development student at SOLICODE (OFPPT). I just completed a course called "Les bases du Prompt Engineering". My main stack is PHP/Laravel, MySQL, JavaScript, HTML/CSS/SASS, Git/GitHub, and Figma.

The course covers these methods:
1. **RTF** (Role, Task, Format): a simple, clear prompt.
2. **IPO** (Input, Process, Output): organizing long requests.
3. **CRISPE** (Capacity, Role, Insight, Statement, Personality, Experiment): detailed prompts for complex needs.
4. **Few-Shot prompting**: giving one or more examples before the new request.
5. **Test and improve loop**: Write, Test, Read, Correct, Test again.
6. **Daily use of AI**: learning, writing, and programming.

The course also stresses that AI answers must always be verified, especially technical answers and code.

# Task
Create a practical, well-organized Markdown document (`prompt-engineering-practice.md`) that demonstrates that I understand and can apply each method, using realistic Laravel and web-development scenarios.

## Required content
1. **Introduction:** what a prompt is, and the difference between a vague prompt and a precise prompt (give one before/after example).
2. **RTF section:** a short explanation, a table of the three elements, and 2 ready-to-use prompts for a Laravel topic.
3. **IPO section:** explanation, a table, and 1 complete prompt with Input, Process, and Output written separately.
4. **CRISPE section:** explanation, a table of the six elements, and 1 complete prompt with all six elements labeled.
5. **Few-Shot section:** explanation, plus 1 prompt that includes a real example (for instance a task description for a Laravel project) and asks for a new one in the same structure and style.
6. **Test and improve section:** show one full iteration. Include a first prompt, a weak AI answer (described briefly, not invented in detail), a corrected prompt, and what changed and why.
7. **Daily use section:** 3 example prompts each for learning, writing, and programming.
8. **Comparison table:** when to choose RTF, IPO, CRISPE, Few-Shot, or the test loop.
9. **Verification checklist** (task list with `- [ ]`) for checking any AI answer: technical accuracy, code that actually runs, official documentation, security, and no invented facts.
10. **Conclusion:** the key takeaways in 3 to 5 bullets.

# Quality Requirements
- Every example prompt must be in a fenced code block so I can copy it.
- Use simple English, short sentences, and a beginner-friendly tone.
- Do not claim that a method guarantees a correct answer. Remind me to verify code and technical claims against the official Laravel documentation.
- Do not invent Laravel features, commands, or versions. If unsure, write `[TO VERIFY: ...]`.
- Clearly separate the explanation from the example prompts.
- Valid Markdown that renders correctly on GitHub, with a correct heading hierarchy.
- No unnecessary length: precision matters more than word count.

# Output Format
Return the final document in a single Markdown code block, followed by a short list of anything I should verify or adapt myself.