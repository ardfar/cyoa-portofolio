# SEO Requirements
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## 1. On-Page SEO

| ID | Requirement |
|---|---|
| SEO-01 | Every public page SHALL have a unique, descriptive `<title>` tag |
| SEO-02 | Every public page SHALL have a `<meta name="description">` tag (recommended: 120–160 characters) |
| SEO-03 | Every public page SHALL include a complete set of Open Graph tags: `og:title`, `og:description`, `og:image`, `og:url`, `og:type` |
| SEO-04 | Persona pages SHALL each have distinct meta content to target different audience search intents (Tech vs Management vs Creative) |
| SEO-05 | Project detail pages SHALL have unique meta title and meta description, editable via the admin panel |
| SEO-06 | All pages SHALL use a single `<h1>` tag per page, with proper heading hierarchy (`h1` → `h2` → `h3`) |
| SEO-07 | Semantic HTML5 elements SHALL be used throughout: `<main>`, `<article>`, `<section>`, `<nav>`, `<header>`, `<footer>` |
| SEO-08 | All images SHALL include descriptive `alt` attributes (never empty or generic) |
| SEO-09 | All canonical URLs SHALL use `<link rel="canonical" href="...">` |
| SEO-10 | Internal links SHALL use human-readable anchor text (no "click here") |

---

## 2. Technical SEO

| ID | Requirement |
|---|---|
| SEO-11 | The system SHALL automatically generate a `sitemap.xml` covering all public pages |
| SEO-12 | The `sitemap.xml` SHALL include: Gateway, all persona pages, all project detail pages, Resume, Gallery, Contact |
| SEO-13 | The system SHALL serve a `robots.txt` file that allows all public pages and blocks `/admin` from indexing |
| SEO-14 | All public URLs SHALL be lowercase, hyphen-delimited, and human-readable |
| SEO-15 | The application SHALL return proper HTTP status codes: 200 for existing pages, 404 for missing pages |
| SEO-16 | Pages SHALL not have duplicate content — each persona page presents unique persona-specific content |
| SEO-17 | Page load performance SHALL be optimized (Core Web Vitals) |

---

## 3. Structured Data (JSON-LD)

| Page / Target | Schema Type | Use Case |
|---|---|---|
| Resume/CV Page | `Person` | Defines the site owner, job title, and social links |
| Project Detail Pages | `CreativeWork` | Defines the project author, creation date, and description |
| Gateway Page | `WebSite` | Defines the root entity |

### `Person` Schema Example

```json
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Farras Arrafi",
  "url": "https://yourdomain.com",
  "jobTitle": "Full Stack Developer & AI/ML Engineer",
  "sameAs": [
    "https://github.com/ardfar",
    "https://linkedin.com/in/farras-arrafi"
  ]
}
```

---

## 4. Default Meta Content Reference

(To be confirmed/overridden via Admin Panel > Site Settings)

| Page | Default Title | Default Description |
|---|---|---|
| Gateway (`/`) | `Farras Arrafi — Choose Your Path` | `Portfolio interaktif multi-peran Farras Arrafi. Teknologi, Manajemen, dan Kreatif.` |
| Tech Persona | `Farras Arrafi — Technology & Engineering` | `Full Stack Developer & AI/ML Engineer. Laravel, Python, PyTorch, Docker, CI/CD.` |
| Management Persona | `Farras Arrafi — Management & Strategy` | `Project Manager, Product Manager & Business Development. Agile, Scrum, GTM Strategy.` |
| Creative Persona | `Farras Arrafi — Operations & Creative` | `Photographer, IT Support & Administrator. Creative problem solving with a technical eye.` |
| Resume | `Farras Arrafi — Resume & CV` | `Ringkasan karir lengkap Farras Arrafi — 8 peran, pengalaman kerja, skill, dan sertifikasi.` |
| Gallery | `Gallery — Farras Arrafi Photography` | `Koleksi foto karya Farras Arrafi, dikelompokkan per tema dan album.` |
| Contact | `Hubungi Farras Arrafi` | `Kirim pesan, diskusi proyek, atau ajukan pertanyaan kepada Farras Arrafi.` |

---

## 5. robots.txt

```text
User-agent: *
Disallow: /admin/
Disallow: /admin
Allow: /

Sitemap: https://yourdomain.com/sitemap.xml
```
