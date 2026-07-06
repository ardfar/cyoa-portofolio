# Functional Requirements — Admin Panel
## SRS: CYOA Portfolio — Farras Arrafi

← [SRS Index](./index.md) | [Docs Root](../README.md)

---

> All admin routes are prefixed `/admin` and protected by the `auth:admin` middleware.
> Single-user system — no multi-user or role management in Phase 1.

---

## FR-07 — Authentication (`/admin/login`)

| ID | Requirement |
|---|---|
| FR-07.1 | The admin panel SHALL be protected by email and password login at `/admin/login` |
| FR-07.2 | Credentials SHALL be stored in the `admins` table with passwords bcrypt-hashed |
| FR-07.3 | Initial credentials SHALL be seeded via a Laravel seeder using values from `.env` |
| FR-07.4 | Sessions SHALL have a configurable idle timeout |
| FR-07.5 | All `/admin/*` routes SHALL redirect unauthenticated users to `/admin/login` |
| FR-07.6 | The login route SHALL be rate-limited to **5 failed attempts per minute** per IP |
| FR-07.7 | A "Logout" action SHALL be available from the admin panel navigation |
| FR-07.8 | After logout, the user SHALL be redirected to `/admin/login` |

---

## FR-08 — Projects / Portfolio Management (`/admin/projects`)

| ID | Requirement |
|---|---|
| FR-08.1 | Admin SHALL be able to **Create, Read, Update, Delete** project entries |
| FR-08.2 | Admin SHALL be able to assign a project to exactly **one persona** (`tech` / `management` / `creative`) |
| FR-08.3 | Admin SHALL be able to toggle a project as **featured** (shown prominently on persona page) |
| FR-08.4 | Admin SHALL be able to set a **sort order** for projects within a persona |
| FR-08.5 | The project body field SHALL use a **WYSIWYG rich text editor** (TipTap or CKEditor Lite) |
| FR-08.6 | Admin SHALL be able to upload a **cover/hero image** per project |
| FR-08.7 | On upload, the system SHALL **compress the image server-side** (≤ 1MB output from up to 10MB input) while preserving EXIF metadata |
| FR-08.8 | The system SHALL auto-generate a URL slug from the project title (editable by admin) |
| FR-08.9 | Slug uniqueness SHALL be enforced globally across all personas |
| FR-08.10 | Admin SHALL be able to set: title, short description, body, technologies, project URL, GitHub URL, client name, project date, persona, featured flag, sort order, meta title, meta description |
| FR-08.11 | The project list in admin SHALL display: title, persona badge, featured flag, sort order, actions (edit, delete) |
| FR-08.12 | Deleting a project SHALL also delete its associated cover image from storage |

---

## FR-09 — Work Experience Management (`/admin/experiences`)

| ID | Requirement |
|---|---|
| FR-09.1 | Admin SHALL be able to **Create, Read, Update, Delete** work experience entries |
| FR-09.2 | Each entry SHALL support: Job Title, Company, Employment Type, Start Date, End Date (nullable = "Present"), Description, Persona Tag(s) |
| FR-09.3 | Persona Tags SHALL be **multi-select** — an experience can belong to one or more personas |
| FR-09.4 | Admin SHALL be able to set a **sort order** for experience entries |
| FR-09.5 | Experiences SHALL display on both the relevant persona page(s) and the CV page |

---

## FR-10 — Skills Management (`/admin/skills`)

| ID | Requirement |
|---|---|
| FR-10.1 | Admin SHALL be able to **Create, Read, Update, Delete** skill entries |
| FR-10.2 | Each skill SHALL support: Name, Category, Proficiency Level (1–5, optional), Persona Tag(s), Sort Order |
| FR-10.3 | Persona Tags SHALL be **multi-select** — a skill can belong to one or more personas |
| FR-10.4 | Admin SHALL be able to attach **certifications** to a skill (one skill → many certifications) |
| FR-10.5 | Each certification SHALL support: Name, Issuing Body, Issue Date, Expiry Date (optional), Credential URL (optional), Badge Image (optional) |
| FR-10.6 | Badge images SHALL be compressed on upload (≤ 500KB target) |
| FR-10.7 | Admin SHALL be able to add, edit, and remove certifications from within the skill edit form |

---

## FR-11 — Gallery Management (`/admin/gallery`)

| ID | Requirement |
|---|---|
| FR-11.1 | Admin SHALL be able to **Create, Read, Update, Delete** photo albums |
| FR-11.2 | Each album SHALL have: Title, Slug (auto-generated), Description (optional), Cover Photo, Sort Order |
| FR-11.3 | Admin SHALL be able to **upload photos** into an album — single and batch upload supported |
| FR-11.4 | On upload, the system SHALL **compress the image server-side** (≤ 1MB output, up to 10MB input) while **preserving EXIF metadata** |
| FR-11.5 | Admin SHALL be able to designate one photo as the **album cover** |
| FR-11.6 | Admin SHALL be able to **reorder** photos within an album |
| FR-11.7 | Each photo SHALL support: Caption (optional), Alt Text (optional) |
| FR-11.8 | Deleting an album SHALL prompt confirmation and also delete all associated photos from storage |
| FR-11.9 | Deleting a single photo SHALL remove both the database record and the stored file |

---

## FR-12 — Site Settings (`/admin/settings`)

### Global Settings

| ID | Requirement |
|---|---|
| FR-12.1 | Admin SHALL be able to edit: Site Name, Tagline, Owner Name, Personal Summary |
| FR-12.2 | Admin SHALL be able to upload and replace the **profile photo** (shown on Gateway) |
| FR-12.3 | Admin SHALL be able to set social links: GitHub URL, LinkedIn URL, Instagram URL |
| FR-12.4 | Admin SHALL be able to set the **PDF CV download link** (external URL) |
| FR-12.5 | Admin SHALL be able to set **contact info**: Display Email, Display Phone (used for obfuscation) |
| FR-12.6 | Admin SHALL be able to set the **recipient email** for contact form submissions |

### Per-Persona Settings

| ID | Requirement |
|---|---|
| FR-12.7 | Admin SHALL be able to edit per-persona: Hero Headline, Sub-headline, CTA Text, CTA URL |
| FR-12.8 | Admin SHALL be able to set per-persona SEO fields: Meta Title, Meta Description, OG Image |

### Page SEO Settings

| ID | Requirement |
|---|---|
| FR-12.9 | Admin SHALL be able to set SEO fields for: Gateway, Resume, Gallery, Contact pages |
| FR-12.10 | All settings SHALL be persisted in the `site_settings` table as key-value pairs |
