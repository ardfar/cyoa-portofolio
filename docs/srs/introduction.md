# Introduction
## SRS: CYOA Portfolio — Farras Arrafi

← [SRS Index](./index.md) | [Docs Root](../README.md)

---

## 1.1 Purpose

This document defines the complete functional and non-functional requirements for the rebuild of the **CYOA Portfolio** — a personal portfolio website for **Farras Arrafi**. It serves as the single source of truth for all design, development, and testing decisions.

---

## 1.2 Project Background

The existing portfolio already uses the CYOA concept, but the rebuild addresses three key shortcomings:

| Problem | Solution in Rebuild |
|---|---|
| Outdated visual design — doesn't feel premium or agency-level | Full UI/UX overhaul with a high-end design system |
| Content is hardcoded in Blade templates | Protected admin panel with full CRUD over all content |
| Persona pages are partially AJAX-loaded — poor SEO | Fully routed, server-rendered pages per persona |

---

## 1.3 Scope

### In Scope — Phase 1

- Public portfolio site with 3 persona paths (Tech, Management, Creative)
- Dynamic project/portfolio detail pages (per-persona template)
- Work experience and skills management
- Skills with attached certifications
- Web-based CV / Resume page (print-ready)
- Photography gallery with server-side image compression
- Contact form with email/phone anti-scraping obfuscation
- Protected single-admin panel (CRUD for all content)
- Full SEO: meta tags, sitemap, structured data (JSON-LD)

### Out of Scope — Phase 1

- AI chatbot / conversational assistant → [see future-features.md](../architecture/future-features.md)
- Multi-user admin / role-based access control
- Blog or article system
- Third-party CMS integration (WordPress, Strapi, etc.)
- PDF generation (CV PDF is an external link)
- E-commerce or payment features
- Mobile app

---

## 1.4 Technology Stack

| Layer | Technology | Notes |
|---|---|---|
| Backend Framework | Laravel | 12.x |
| Language | PHP | 8.2+ required |
| Templating | Blade | Laravel built-in |
| CSS Framework | Tailwind CSS | v4 |
| Asset Bundling | Vite | Latest compatible |
| Database | MySQL | 8.0+ |
| Image Processing | Intervention Image / GD | Server-side compression + EXIF |
| Mail | SMTP / Log | Via `.env` config |
| Testing | Pest | Laravel plugin |
| Linting | Laravel Pint | PSR-12 enforcement |
| Deployment | Shared Hosting | Apache/Nginx + PHP-FPM |

---

## 1.5 Definitions & Abbreviations

| Term | Definition |
|---|---|
| **Persona** | A content presentation context selected by the visitor (Tech, Management, Creative) |
| **CYOA** | Choose Your Own Adventure — the core UX concept |
| **Admin** | Site owner (Farras Arrafi) — manages content via admin panel |
| **Visitor** | Any person browsing the public-facing site |
| **FR** | Functional Requirement |
| **NFR** | Non-Functional Requirement |
| **CRUD** | Create, Read, Update, Delete |
| **EXIF** | Exchangeable Image File Format — metadata embedded in photos |
| **WYSIWYG** | What You See Is What You Get — rich text editor |
| **OG** | Open Graph — social media metadata protocol |
| **RAG** | Retrieval-Augmented Generation — AI architecture (Phase 2 only) |
