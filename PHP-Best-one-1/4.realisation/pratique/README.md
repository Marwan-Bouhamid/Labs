# Practical example: a validated `User` model

This folder is the improved version of the `pratique/` example from the first
PHP lab. It is now organised like the namespaces it teaches:

```text
pratique/
├── Exceptions/ValidationException.php   # App\Exceptions
├── Models/User.php                      # App\Models
├── Traits/Loggable.php                  # App\Traits
├── demo.php                             # runnable demonstration
└── README.md
```

## What it demonstrates

- **Namespaces:** the folder path and the namespace match (`App\Models\User`
  lives in `Models/User.php`), which is exactly the mapping a PSR-4 autoloader
  uses.
- **Traits:** `User` composes `Loggable` to record its creation without
  inheriting from a logger class.
- **Exceptions:** a blank name or an invalid email raises a typed
  `ValidationException` that carries the failing field and the application code
  `422`.

## Run it

From the `PHP-Best-one-1` folder:

```powershell
php 4.realisation/pratique/demo.php
php 4.realisation/tests/pratique.php
```

Expected test output:

```text
PASS: the practical User example validates input and logs creation.
```

## Design notes

- `Loggable` stores messages in an array and exposes `logs()`. The original
  version echoed from inside the trait, which made it hard to test; this version
  keeps the model independent from the output layer.
- `User` uses short getters (`name()`, `email()`) to match the task-tracker
  style (`id()`, `title()`).
- `ValidationException` extends `InvalidArgumentException` and keeps the
  original `422` code. The code is a lab convention, not something PHP assigns
  automatically.
