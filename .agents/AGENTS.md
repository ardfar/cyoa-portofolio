# CYOA Portfolio — AI Agent Rules

## MANDATORY INITIALIZATION RULE
Before executing any user command, modifying code, or starting a new task on this project, **you MUST read the relevant documentation** located in the `docs/` directory to ensure your actions align with the project's established Software Requirements Specification (SRS), architecture, design system, and technical constraints.

### Documentation Index
Start by reading the master index at:
- `docs/README.md`

### Core Rule Enforcement
1. **Never guess the architecture or data models.** Always refer to `docs/architecture/` before creating migrations, models, or controllers.
2. **Never guess the design system.** Always refer to `docs/design/` for Tailwind tokens, typography, and component layouts before editing Blade views.
3. **Always check the Roadmap.** Before starting a new feature, verify its current phase in `docs/testing/roadmap.md`.
4. **Adhere to Constraints.** Read `docs/standards/constraints.md` to ensure you do not introduce prohibited technologies (e.g., no queue workers, no background jobs, no Redis).
5. **Follow AI Guidelines.** Read `docs/standards/ai-guidelines.md` for mandatory coding styles, linters, and critical action limitations (e.g. no deletion or prod access without review).
6. **Post-Feature Testing.** ALWAYS consult the relevant Test Plan document in `docs/testing/` (if one exists) and verify your work based on those scenarios immediately after creating a feature.

**By following these rules, you will maintain the integrity, design, and architecture of the CYOA Portfolio as defined in the SRS.**
