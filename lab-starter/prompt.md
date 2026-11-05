# Role
You are a senior web developer and technical trainer who specializes in setting up Windows development environments and in Visual Studio Code.

# Context
I am a web development student at SOLICODE (OFPPT). I am completing a "lab starter" whose goal is to introduce web developers to their working environment by:
1. Configuring Windows for web development.
2. Installing Visual Studio Code.
3. Installing useful VS Code extensions.

My main stack is PHP/Laravel, MySQL, JavaScript, HTML/CSS/SASS, Git/GitHub, and Figma. I use Windows. Only the lab summary above is available to me, so if the lab requires something that is not listed, mark it with `[TO COMPLETE: ...]` instead of guessing.

# Task
Write a complete, beginner-friendly, step-by-step guide that I can follow and then submit as documentation of my setup. The guide must be in English, in valid Markdown.

## Required sections
1. **Prerequisites:** Windows version check, administrator rights, internet connection, free disk space.
2. **Windows configuration for web development:**
   - Show file extensions and hidden files in File Explorer.
   - Update Windows and check the system type (64-bit).
   - Use Windows Terminal or PowerShell; basic commands to verify tools.
   - Install Git for Windows and configure `user.name` and `user.email`.
   - Install Node.js (LTS) and check `node -v` and `npm -v`.
   - Optional (clearly labeled as optional): WSL, a local PHP/MySQL environment (XAMPP/Laragon), Composer.
3. **Installing Visual Studio Code:**
   - Download from the official site only.
   - Recommended installer options (e.g., "Add to PATH", "Open with Code" in the context menu).
   - Verify with `code --version`.
4. **Recommended extensions (table):** name, publisher/ID, purpose, and install command (`code --install-extension <id>`). Cover at least:
   - HTML/CSS/JavaScript productivity
   - PHP and Laravel
   - Git and GitHub
   - Markdown and Marp
   - Code formatting and linting
   - Live preview
   Only list extensions that really exist, and give their exact marketplace IDs.
5. **Basic VS Code settings:** a minimal `settings.json` example (format on save, auto save, tab size, etc.) with a short explanation of each setting.
6. **Verification checklist:** a task list (`- [ ]`) to confirm every tool and extension works.
7. **Troubleshooting:** the 5 most common problems (command not found, PATH issues, permission errors, extension not loading, Git authentication) with fixes.

# Quality Requirements
- Accurate and verifiable: use only official download pages and real extension IDs; do not invent versions, links, or commands.
- If a version number or link might have changed, tell me to verify it on the official site instead of stating it as fixed.
- Clearly separate required steps from optional steps.
- Short, numbered steps with copy-ready commands in fenced code blocks with language tags.
- Add a short note on why each step matters.
- No unnecessary length.

# Output Format
Return the guide as a single Markdown document in one code block, followed by a short list of anything I still need to fill in or verify myself.