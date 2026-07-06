# Functional Requirements — Public Site
## SRS: CYOA Portfolio — Farras Arrafi

← [SRS Index](./index.md) | [Docs Root](../README.md)

---

## FR-01 — Gateway Page (`/`)

> The entry point. Minimalist, animated, persona-selection focused.

| ID | Requirement |
|---|---|
| FR-01.1 | The system SHALL display a minimalist landing page (Gateway) as the default entry point at `/` |
| FR-01.2 | The Gateway SHALL display the owner's profile photo, a short headline, and a welcoming prompt |
| FR-01.3 | The Gateway SHALL present exactly **3 persona selection cards** and **1 link to the Resume/CV page** |
| FR-01.4 | Each persona card SHALL display: a label, a short description, a visual icon, and a hover micro-interaction |
| FR-01.5 | Clicking a persona card SHALL navigate to the respective persona page (`/persona/{persona}`) |
| FR-01.6 | The Gateway SHALL implement a subtle animated entrance (fade-in / slide-up) on first load |
| FR-01.7 | The visitor's last selected persona SHALL be stored in `localStorage` (key: `cyoa_persona`) |
| FR-01.8 | The profile photo displayed SHALL be manageable from the admin panel (Site Settings) |
| FR-01.9 | The Gateway headline and sub-headline SHALL be editable from the admin panel |

---

## FR-02 — Persona Pages (`/persona/{tech|management|creative}`)

> The main content destination. Fully persona-curated.

| ID | Requirement |
|---|---|
| FR-02.1 | Each persona page SHALL render content specific to that persona, fetched dynamically from the database |
| FR-02.2 | Each persona page SHALL include: Hero section, Featured Projects, Skills, Work Experience, CTA |
| FR-02.3 | Each persona page SHALL include a **Persona Switcher** — a persistent nav component to switch personas |
| FR-02.4 | The Persona Switcher SHALL visually indicate the currently active persona |
| FR-02.5 | Each persona page SHALL have its own distinct visual identity within the shared design system |
| FR-02.6 | Meta title, meta description, and OG tags SHALL be unique per persona page and editable via admin |
| FR-02.7 | Skills displayed SHALL be filtered to only those tagged to the active persona |
| FR-02.8 | Work experience displayed SHALL be filtered to only those tagged to the active persona |
| FR-02.9 | Featured projects SHALL be displayed as interactive cards linking to their detail page |
| FR-02.10 | Projects SHALL be ordered by `sort_order`, with featured projects shown first |

---

## FR-03 — Project Detail Pages (`/persona/{persona}/portfolio/{slug}`)

> Dynamic, per-persona styled case study pages.

| ID | Requirement |
|---|---|
| FR-03.1 | Each project SHALL have a dedicated detail page at a unique, human-readable URL slug |
| FR-03.2 | Project detail pages SHALL use a **persona-specific template** — styling reflects the project's persona |
| FR-03.3 | Each project detail page SHALL render: cover image, title, short description, full body (rich HTML), technology tags, project URL, GitHub URL, client name, project date |
| FR-03.4 | Technology tags SHALL be displayed as styled badge elements |
| FR-03.5 | External links SHALL open in a new tab with `rel="noopener noreferrer"` |
| FR-03.6 | Projects SHALL only be accessible under their assigned persona (e.g. tech project only at `/persona/tech/portfolio/{slug}`) |
| FR-03.7 | A project accessed under the wrong persona SHALL return a 404 response |
| FR-03.8 | The page SHALL include navigation back to the parent persona page |
| FR-03.9 | The Persona Switcher SHALL remain present in the navigation on project detail pages |

---

## FR-04 — Resume / CV Page (`/resume`)

> A comprehensive, web-based, print-ready career overview.

| ID | Requirement |
|---|---|
| FR-04.1 | The system SHALL provide a dedicated web-based CV page at `/resume` |
| FR-04.2 | The CV page SHALL display a consolidated view of all work experiences, skills, and certifications across all personas |
| FR-04.3 | The CV page SHALL be structured for **print and PDF export** — a print CSS SHALL hide nav, sidebars, and decorative elements |
| FR-04.4 | The CV page SHALL include: Personal Summary, Work Experience Timeline, Skills by Category, Certifications, Education |
| FR-04.5 | Personal summary and education content SHALL be editable from the admin panel (Site Settings) |
| FR-04.6 | Work experiences and skills shown SHALL be sourced from the same DB tables used on persona pages |
| FR-04.7 | The CV page SHALL include a link to download a PDF version (external URL, configurable in admin) |
| FR-04.8 | The CV page SHALL be accessible from the Gateway and from the navigation on all persona pages |

---

## FR-05 — Photo Gallery (`/persona/creative/gallery`)

> CMS-managed album-based photo gallery, exclusive to the Creative persona.

| ID | Requirement |
|---|---|
| FR-05.1 | The gallery page SHALL display photos organized into albums/themes |
| FR-05.2 | Each album SHALL display a cover photo, album title, and photo count |
| FR-05.3 | Clicking an album SHALL reveal a grid view of photos within that album |
| FR-05.4 | The photo grid SHALL implement a **lightbox** for full-screen photo viewing |
| FR-05.5 | Photos in the lightbox SHALL support next/previous keyboard navigation |
| FR-05.6 | Photo captions (if set) SHALL be displayed in the lightbox view |
| FR-05.7 | All photos SHALL use native browser lazy loading (`loading="lazy"`) |
| FR-05.8 | The gallery SHALL be accessible under the Creative persona navigation |
| FR-05.9 | Albums and photos SHALL be displayed in the order set by the admin (`sort_order`) |

---

## FR-06 — Contact Page (`/contact`)

> Spam-resistant contact form with obfuscated contact details.

| ID | Requirement |
|---|---|
| FR-06.1 | The contact page SHALL display a form with fields: Name, Email, Subject, Message (all required) |
| FR-06.2 | On submission, the form SHALL send an email to the site owner using Laravel's mail system |
| FR-06.3 | The recipient email SHALL be configurable in `.env` |
| FR-06.4 | The email and phone displayed on the page SHALL be **obfuscated server-side** (Blade directive) and decoded client-side via JavaScript |
| FR-06.5 | If JavaScript is disabled, a non-link fallback text SHALL be displayed |
| FR-06.6 | The contact form SHALL be protected by Laravel's CSRF token (`@csrf`) |
| FR-06.7 | The contact form submission route SHALL be rate-limited (max 5 requests per minute per IP) |
| FR-06.8 | On successful submission, the visitor SHALL see a success confirmation message |
| FR-06.9 | On validation error, the form SHALL re-render with inline errors and preserved values |
| FR-06.10 | The mailer driver SHALL be configurable via `.env` — supporting `smtp` and `log` drivers |
| FR-06.11 | Contact info (email, phone) SHALL be editable from the admin panel |
