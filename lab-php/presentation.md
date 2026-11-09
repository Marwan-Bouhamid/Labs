---
marp: true
theme: default
paginate: true
backgroundColor: #f5f5f5
---

# PHP Lab: Advanced Concepts
## Error Handling, Namespaces, and Traits

---

## 🎯 Lab Objectives
- Master exception and error handling in PHP.
- Cleanly organize your application using **Namespaces**.
- Factorize code using **Traits**.

---

## 🚨 1. Error and Exception Handling
- **Concept**: Separate business logic from anomaly management.
- **Usage**: `try`, `catch`, `finally` blocks and custom exceptions (`Exception`).
- **Practical Example**: Data validation or database connection with failure management.

---

## 📁 2. Namespaces
- **Concept**: Avoid class name collisions and structure software architecture (`App\Controllers`, `App\Models`).
- **Usage**: `namespace` keyword at the top of files and `use` for imports.
- **Practical Example**: Modular organization of project classes.

---

## 🧩 3. PHP Traits
- **Concept**: Code reuse mechanism in a single-inheritance language.
- **Usage**: `trait` keyword and inclusion via `use TraitName` inside a class.
- **Practical Example**: Adding cross-cutting features (e.g., logging `Loggable`, timestamps).

---

## ⚙️ Quick Start & Validation
1. Verify PHP version (`php -v`).
2. Run the test scripts.
3. Validate architecture integration.
