# Constraints & Assumptions
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## 1. Technical Constraints

These are hard limits imposed by the infrastructure, budget, or scope decisions that directly shape how the system must be built.

| ID | Constraint | Impact |
|---|---|---|
| C-01 | Deployment target is **shared hosting** — no persistent background processes | No queue workers (`php artisan queue:work`), no Redis, no WebSockets |
| C-02 | Image compression MUST be performed **synchronously** during the upload HTTP request | `ImageCompressionService` runs inline — no async jobs. Large images (up to 10MB) may cause slightly longer upload times |
| C-03 | **Single admin user** — the system is not designed for multiple administrators | No user management, no roles/permissions system in Phase 1 |
| C-04 | **No third-party CMS** — the admin panel is fully custom-built on Laravel | All CRUD interfaces must be implemented from scratch |
| C-05 | **No AI inference in Phase 1** — shared hosting cannot support LLM workloads | AI chatbot deferred to Phase 2 (see architecture/future-features.md) |
| C-06 | **PHP 8.2+** is the minimum language version | Laravel 12 requires this; hosting must confirm PHP version before deployment |
| C-07 | **MySQL 8.0+** is the target database | JSON column type and modern index features are used in the schema |
| C-08 | **No paid asset libraries** — all UI components are built with Tailwind + vanilla JS or minimal Alpine.js | Avoids licensing complexity; keeps the frontend lean |

---

## 2. Design Constraints

| ID | Constraint | Impact |
|---|---|---|
| D-01 | The visual identity must be consistent with the CYOA concept | Persona-specific styling is applied through CSS class toggling and per-template files, not separate style sheets |
| D-02 | Typography must use **Google Fonts** (Space Grotesk + Inter) | Loaded via `<link>` in `<head>` with `display=swap`; must be available on deployment domain |
| D-03 | The public site must be navigable without JavaScript for core content | JS enhances (animations, obfuscation reveal, lightbox) but page content and navigation must render without it |

---

## 3. Working Assumptions

These are things we assume to be true when building the system. If any assumption turns out to be false, requirements may need to be revised.

| ID | Assumption | Risk if Wrong |
|---|---|---|
| A-01 | The admin (Farras) will self-manage all content through the admin panel after delivery | If content management is delegated to others, multi-user auth may be needed |
| A-02 | All written content (headlines, bios, project descriptions) will be provided by the admin during or after Phase 2 | Delays in content provision will delay the public site launch |
| A-03 | A valid SMTP service or mail credential will be available for the contact form | Without this, the contact form will fall back to `log` mailer (emails won't actually send) |
| A-04 | The shared hosting environment supports **PHP 8.2+** and **MySQL 8.0+** | Must be verified with the hosting provider before deployment |
| A-05 | Uploaded gallery photos will primarily be **JPEG format** | EXIF metadata is fully supported for JPEG. PNG EXIF support is best-effort and may be incomplete |
| A-06 | Project slugs are **globally unique** across all personas | This simplifies routing and avoids `/persona/{persona}/portfolio/{slug}` conflicts |
| A-07 | The site will be deployed to a **single domain** (no subdomain-per-persona) | Persona routing uses paths (`/persona/tech`), not subdomains (`tech.domain.com`) |
| A-08 | No e-commerce, payment processing, or user accounts are required | Out of scope by design |
| A-09 | The PDF version of the CV is an **externally hosted file** (e.g., Google Drive, Dropbox) | The system only stores the download URL — PDF generation is not in scope |

---

## 4. Dependencies

| Dependency | Version | Purpose |
|---|---|---|
| Laravel | 12.x | Application framework |
| PHP | 8.2+ | Runtime |
| MySQL | 8.0+ | Database |
| Tailwind CSS | v4 | Styling |
| Vite | Latest | Asset bundling |
| Pest | Latest (Laravel plugin) | Testing |
| Laravel Pint | Latest | Code style linting |
| Intervention Image (or GD/Imagick) | Latest compatible | Server-side image compression |
| TipTap or CKEditor Lite | Latest | WYSIWYG rich text editor for project body |
| Alpine.js *(optional)* | 3.x | Lightweight JS for lightbox, dropdown interactions |

---

## 5. Out of Scope (Definitive List)

The following are explicitly **not part of this project**:

- Blog / article system
- Comment system
- User accounts or registration for visitors
- Multi-language (i18n) support
- E-commerce or payment features
- Third-party CMS integration (WordPress, Strapi, Contentful)
- AI/ML features of any kind (→ Phase 2)
- Social media auto-posting
- Analytics integration (can be added by dropping in a script tag later)
- Multi-admin or role-based access control
- PDF generation (CV PDF is an external link)
- Mobile app
