# Non-Functional Requirements
## SRS: CYOA Portfolio — Farras Arrafi

← [SRS Index](./index.md) | [Docs Root](../README.md)

---

## Performance

| ID | Requirement | Priority |
|---|---|---|
| NFR-01 | Public page load time SHALL be ≤ 3 seconds on a standard 4G connection | High |
| NFR-02 | Images SHALL be served compressed; WebP format preferred where supported | High |
| NFR-03 | Laravel view, route, and config caching SHALL be enabled in production | High |
| NFR-04 | CSS and JS assets SHALL be minified and fingerprinted via Vite production build | High |
| NFR-05 | Gallery and project images SHALL use native browser lazy loading (`loading="lazy"`) | Medium |
| NFR-06 | Uploaded images SHALL be compressed to ≤ 1MB regardless of input size (max 10MB input) | High |
| NFR-07 | Image compression SHALL preserve EXIF metadata on JPEG files | Medium |

---

## Security

| ID | Requirement | Priority |
|---|---|---|
| NFR-08 | All admin routes (`/admin/*`) SHALL require an authenticated session | Critical |
| NFR-09 | All forms SHALL use Laravel's built-in CSRF token protection | Critical |
| NFR-10 | Database credentials, mail credentials, and app key SHALL be stored exclusively in `.env` — never hardcoded | Critical |
| NFR-11 | All user-submitted content SHALL be sanitized before storage and display (XSS prevention) | High |
| NFR-12 | The admin login route SHALL be rate-limited to **5 failed attempts per minute** per IP | High |
| NFR-13 | The contact form submission route SHALL be rate-limited to **5 requests per minute** per IP | High |
| NFR-14 | File uploads SHALL validate MIME type server-side (allowed: `image/jpeg`, `image/png`, `image/webp`) | High |
| NFR-15 | File uploads SHALL enforce a maximum file size of **10MB** server-side | High |
| NFR-16 | Uploaded files SHALL use Laravel's `storage/app/public` directory via storage symlink | High |
| NFR-17 | The admin panel URL SHALL be blocked from search engine indexing via `robots.txt` | Medium |

---

## Usability

| ID | Requirement | Priority |
|---|---|---|
| NFR-18 | The public site SHALL be fully responsive: mobile (320px+), tablet (768px+), desktop (1280px+) | High |
| NFR-19 | The admin panel SHALL be usable on tablet (768px+) and desktop | Medium |
| NFR-20 | All interactive elements SHALL have visible focus states (keyboard navigation support) | High |
| NFR-21 | All images SHALL have descriptive `alt` text | High |
| NFR-22 | Color contrast SHALL meet **WCAG AA** standards for each persona theme | High |
| NFR-23 | The contact form SHALL provide clear inline validation error messages | Medium |
| NFR-24 | Admin CRUD forms SHALL show success/error feedback after every save or delete action | Medium |

---

## Maintainability

| ID | Requirement | Priority |
|---|---|---|
| NFR-25 | Code SHALL follow PSR-12 standards, enforced via **Laravel Pint** | High |
| NFR-26 | All regularly-changing content SHALL be manageable via the admin panel — no code changes needed | High |
| NFR-27 | All DB schema changes SHALL use Laravel **migrations** | High |
| NFR-28 | Feature and unit tests SHALL be written using **Pest** | Medium |
| NFR-29 | Blade views SHALL be organized by feature area (`personas/`, `admin/`, `portfolio/`) | Medium |
| NFR-30 | Business logic SHALL reside in Service or Action classes — not directly in Controllers | Medium |

---

## Compatibility & Hosting

| ID | Requirement | Priority |
|---|---|---|
| NFR-31 | The public site SHALL support the latest 2 major versions of Chrome, Firefox, Safari, and Edge | High |
| NFR-32 | The application SHALL run on **PHP 8.2+** shared hosting | Critical |
| NFR-33 | The application SHALL use **MySQL 8.0+** as the primary database | Critical |
| NFR-34 | The application SHALL NOT require background queue workers, Redis, or WebSockets | Critical |
| NFR-35 | Image compression SHALL be performed **synchronously** during upload (no queued jobs) | High |
