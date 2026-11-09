# Learning need

## Question

How can PHP code keep class names organized, share useful methods between
classes, and respond clearly when something goes wrong?

## Scope

This lab introduces three PHP concepts that have not yet been studied in class:

- **Namespaces:** organize names and allow classes with the same short name to
  be kept separate.
- **Traits:** share a small group of methods between classes without making one
  class inherit from another.
- **Errors and exceptions:** detect problems, report them with useful types, and
  handle a selected warning in a controlled way.

The lab uses two small models so the concepts can be seen twice, in different
contexts:

1. **Task tracker (`PhpLab\...`)** — the main example. Its domain `Task` and
   reporting `Task` demonstrate namespaces. `Task` and `Project` share timestamp
   methods through `HasTimestamps`. A task board demonstrates invalid input, a
   missing task, and conversion of an enabled warning into an exception.
2. **User account (`App\...`)** — the applied example inherited from the first
   lab. `User` lives in `App\Models`, composes the `Loggable` trait from
   `App\Traits`, and rejects invalid input with `ValidationException` from
   `App\Exceptions`.

## Prerequisites

The learner should be able to read basic PHP syntax, variables, functions,
arrays, and simple classes. The lab explains the class and object ideas needed
for its examples.

## Non-goals

- Build a web application, database, or production task-management system.
- Convert every PHP error into an exception or claim every error can be
  recovered from.
- Treat a trait as a class that can be instantiated by itself.
- Replace official PHP documentation with this lab's simplified explanations.
- Present the `422` exception code as an automatic HTTP behavior; it is an
  application convention used by the example.

## Observable success criteria

At the end of the lab, the learner can:

1. Explain in simple words what each of the three concepts is for.
2. Identify why the two `Task` classes have different fully qualified names.
3. Show how `Task` and `Project` use the shared timestamp methods.
4. Show how `User` composes `Loggable` and raises `ValidationException` for a
   blank name or an invalid email.
5. Describe the difference between the lab's invalid-input exception, its
   missing-task exception, and its converted warning.
6. Run the native PHP test command and explain what each passing check
   demonstrates.
