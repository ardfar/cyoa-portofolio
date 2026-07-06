# AI Interaction & Coding Guidelines

This document outlines the standard coding practices and rules for AI agents operating within the CYOA Portfolio project. It is mandatory for any AI coding assistant to adhere to these guidelines before executing tasks.

## 1. Coding Style & Conventions

- **Framework:** Laravel 12
- **PHP Conventions:** Strictly follow the default Laravel naming and structural conventions (e.g., proper placement of Models, Controllers, FormRequests).
- **Styling:** Tailwind CSS v4. Stick to the project's design tokens and avoid arbitrary values when a design token exists (see `docs/design/design-system.md`).
- **UI Architecture:** Use Blade templates. Extract reusable UI components where appropriate using standard Blade Components.

## 2. Linters & Formatters

AI must ensure all generated or modified code is written in a way that complies with the project's primary formatting and static analysis tools.

- **PHP Formatting:** Laravel Pint
- **PHP Intelligence/Analysis:** PHP Intelephense (Ensure PHPDoc blocks and return types are accurate for optimal IDE type hinting).
- **Frontend Formatting:** Prettier (for JS, CSS, JSON, HTML, and Blade templates).

## 3. AI Interaction Limitations & Safety Rules

To maintain security and project integrity, the following rules apply strictly to all AI operations:

- **Mandatory Review for Critical Actions:** Any critical action **must** be presented to the Lead Developer (human) for review and explicit approval before execution. Critical actions include:
  - Deletion of files, database tables, or significant code blocks.
  - Accessing, modifying, or configuring production environments, production databases, or deployment scripts.
- **No Guessing:** If a requirement or architectural choice is ambiguous, stop and ask the user for clarification rather than making an assumption.
- **Constraints Awareness:** Ensure no prohibited technologies (e.g., queue workers, background jobs, or Redis) are introduced, as dictated by `docs/standards/constraints.md`.
