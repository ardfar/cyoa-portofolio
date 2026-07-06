# Development Roadmap
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## Overview

The project is divided into **5 phases** across approximately **5 weeks**. Each phase builds on the previous. Content (text, images, projects) can be populated by the admin in parallel with Phase 3 onward.

| Phase | Focus | Duration |
|---|---|---|
| Phase 1 | Foundation — project setup, DB, auth, design system | Week 1 |
| Phase 2 | Admin Panel — full CRUD implementation | Week 2 |
| Phase 3 | Public Pages — all visitor-facing pages | Week 3 |
| Phase 4 | Polish — gallery, contact, SEO, performance | Week 4 |
| Phase 5 | QA & Deployment | Week 5 |

---

## Phase 1 — Foundation (Week 1)

### Goals
- Working Laravel project with MySQL, auth, and base design tokens
- Admin is able to log in and log out

### Tasks

**Project Setup**
- [ ] Initialize fresh Laravel 12 project
- [ ] Configure `.env` for MySQL connection
- [ ] Install and configure Tailwind CSS v4 via Vite
- [ ] Set up Google Fonts (Space Grotesk + Inter) in base layout
- [ ] Run `php artisan storage:link`

**Database**
- [ ] Write migration: `create_admins_table`
- [ ] Write migration: `create_site_settings_table`
- [ ] Write migration: `create_projects_table`
- [ ] Write migration: `create_experiences_table`
- [ ] Write migration: `create_skills_table`
- [ ] Write migration: `create_certifications_table`
- [ ] Write migration: `create_gallery_albums_table`
- [ ] Write migration: `create_gallery_photos_table`
- [ ] Write seeder: `AdminSeeder` (reads from `.env`)
- [ ] Write seeder: `SiteSettingsSeeder` (populates default keys)

**Authentication**
- [ ] Configure `auth:admin` guard in `config/auth.php`
- [ ] Create `Admin` model
- [ ] Create `Admin\AuthController` (login form, authenticate, logout)
- [ ] Create login Blade view (`resources/views/admin/auth/login.blade.php`)
- [ ] Apply `auth:admin` middleware to admin route group
- [ ] Apply rate limiting to login route (5/min)

**Design System**
- [ ] Define Tailwind CSS color tokens: `persona-dark`, `persona-tech`, `persona-mgmt`, `persona-art`, surface, border, muted
- [ ] Define typography scale and font families
- [ ] Create base admin layout Blade component (sidebar, topbar, content area)
- [ ] Create base public layout Blade component (head, nav, footer slots)

---

## Phase 2 — Admin Panel (Week 2)

### Goals
- Admin can fully manage all content: projects, experiences, skills, certifications, gallery, and site settings

### Tasks

**Admin Dashboard**
- [ ] `Admin\DashboardController` — summary counts (projects, photos, etc.)
- [ ] Dashboard Blade view

**Projects CRUD**
- [ ] `Admin\ProjectController` (index, create, store, edit, update, destroy)
- [ ] Install and configure WYSIWYG editor (TipTap or CKEditor Lite) via Vite
- [ ] Image upload → `ImageCompressionService` (compress to ≤1MB, preserve EXIF)
- [ ] Slug auto-generation from title (with uniqueness check)
- [ ] Persona filter in list view
- [ ] Featured toggle
- [ ] Sort order field
- [ ] Blade views: list, create/edit form

**Experiences CRUD**
- [ ] `Admin\ExperienceController` (index, create, store, edit, update, destroy)
- [ ] Multi-select persona tags
- [ ] Sort order
- [ ] Blade views: list, create/edit form

**Skills & Certifications CRUD**
- [ ] `Admin\SkillController` (index, create, store, edit, update, destroy)
- [ ] Nested certification management within skill edit form
- [ ] `Admin\CertificationController` (store, update, destroy)
- [ ] Badge image upload with compression
- [ ] Multi-select persona tags
- [ ] Category grouping in list view
- [ ] Blade views: list, create/edit form (with inline certification section)

**Gallery CRUD**
- [ ] `Admin\GalleryController` (album CRUD + photo management)
- [ ] Album create/edit/delete
- [ ] Single and batch photo upload with compression (preserve EXIF)
- [ ] Cover photo selection
- [ ] Photo reorder (sort_order update via form)
- [ ] Caption and alt text editing
- [ ] Blade views: album list, album edit (with photo grid)

**Site Settings**
- [ ] `Admin\SettingController` (index, update)
- [ ] Profile photo upload with compression
- [ ] Tabbed settings form: Global, Persona (Tech/Mgmt/Creative), SEO, Contact
- [ ] Blade view: settings form

---

## Phase 3 — Public Pages (Week 3)

### Goals
- All visitor-facing pages are live, pulling data from the database

### Tasks

**Gateway Page**
- [ ] `GatewayController@index` — passes persona summaries to view
- [ ] Blade view: 3 persona cards + resume link
- [ ] Entrance animation (fade-in / slide-up via Tailwind animate classes)
- [ ] `localStorage` persistence of selected persona
- [ ] Profile photo from settings
- [ ] Ambient glow background blobs

**Persona Pages**
- [ ] `PersonaController@show` — resolves persona, fetches filtered projects, skills, experiences, settings
- [ ] Persona Switcher component (Blade component — shared across all public pages)
- [ ] Tech persona Blade view: hero, skills, projects grid, experience timeline, CTA
- [ ] Management persona Blade view (same structure, distinct visual identity)
- [ ] Creative persona Blade view (same structure, distinct visual identity)
- [ ] Per-persona meta tags from site settings

**Project Detail Pages**
- [ ] `ProjectController@show` — resolves persona + slug, returns 404 if mismatch
- [ ] Three Blade templates (one per persona): `tech-project.blade.php`, `management-project.blade.php`, `creative-project.blade.php`
- [ ] Rich body content rendering (HTML from WYSIWYG)
- [ ] Technology tags, external links (new tab + `noopener`)
- [ ] Back link to persona page

**Resume / CV Page**
- [ ] `ResumeController@index` — all experiences + all skills + certifications + settings
- [ ] Blade view: personal summary, timeline, skills by category, certifications, education
- [ ] Print CSS stylesheet (`@media print`)
- [ ] PDF download link from settings

---

## Phase 4 — Polish (Week 4)

### Goals
- Gallery, contact, SEO, image lazy loading, performance

### Tasks

**Gallery Page**
- [ ] `GalleryController@index` — all albums with cover photos
- [ ] Blade view: album grid → photo grid (masonry or CSS columns)
- [ ] Lightbox implementation (Alpine.js or lightweight vanilla JS)
- [ ] Keyboard navigation in lightbox (arrow keys, Escape)
- [ ] Native lazy loading on all gallery images

**Contact Page**
- [ ] `ContactController@index` and `@send`
- [ ] Blade view: form + obfuscated email/phone
- [ ] `Obfuscator` support class (server-side encoding) and Blade directives
- [ ] JS decoder for obfuscated contact details
- [ ] No-JS fallback text
- [ ] Rate limiting (5/min per IP)
- [ ] Success/error flash messages

**SEO Implementation**
- [ ] Dynamic `<title>`, `<meta description>`, `<meta og:*>` in all page layouts
- [ ] `sitemap.xml` route (dynamically generated from DB)
- [ ] `robots.txt` route (blocks `/admin`)
- [ ] `<link rel="canonical">` on all pages
- [ ] JSON-LD structured data: `Person` (resume), `CreativeWork` (projects), `WebSite` (gateway)

**Performance**
- [ ] Native `loading="lazy"` on all images
- [ ] Vite production build validation (`npm run build`)
- [ ] Laravel production caches: `config:cache`, `route:cache`, `view:cache`
- [ ] Review and remove any unused Tailwind classes

---

## Phase 5 — QA & Deployment (Week 5)

### Goals
- Stable, tested, deployed site

*(Refer to `docs/testing/testing-strategy.md` for the QA checklist.)*

---

## Parallel: Content Population

The following can be done by the admin **in parallel with Phase 3+**, once the admin panel is live:

- [ ] Upload profile photo
- [ ] Fill in all Site Settings (name, tagline, summary, social links)
- [ ] Fill in per-persona headlines and CTAs
- [ ] Add all work experience entries
- [ ] Add all skills (with persona tags and categories)
- [ ] Add certifications to relevant skills
- [ ] Create project entries (one per portfolio item) with cover images, body, tags
- [ ] Create gallery albums and upload photos
- [ ] Set all SEO meta fields
