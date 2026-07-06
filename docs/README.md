# CYOA Portfolio — Documentation

**Project:** Personal Portfolio Website for Farras Arrafi  
**Version:** 1.0 | **Status:** Active Development  

---

## Folder Structure

| Folder | Contents |
|---|---|
| [`srs/`](./srs/index.md) | Software Requirements Specification — goals, scope, functional & non-functional requirements |
| [`architecture/`](./architecture/system-overview.md) | Technical system design — URL map, app structure, database schema, future features |
| [`design/`](./design/design-system.md) | UI/UX design system — tokens, per-persona identity, component specs |
| [`standards/`](./standards/seo.md) | Project standards — SEO, coding conventions, constraints & assumptions |
| [`testing/`](./testing/testing-strategy.md) | QA & testing — test plan, Pest test cases, deployment checklist |

---

## Quick Reference

### Tech Stack
| Layer | Technology |
|---|---|
| Backend | Laravel 12, PHP 8.2+ |
| Templating | Blade |
| CSS | Tailwind CSS v4 |
| Database | MySQL 8.0+ |
| Bundler | Vite |
| Deployment | Shared Hosting |

### Three Content Personas
| Key | Label | Accent |
|---|---|---|
| `tech` | Technology & Engineering | Electric Violet `#6366f1` |
| `management` | Management & Strategy | Deep Gold `#d4a853` |
| `creative` | Operations & Creative | Warm Amber `#f59e0b` |

### Core URLs
| URL | Description |
|---|---|
| `/` | Gateway — persona selection landing page |
| `/persona/{tech\|management\|creative}` | Persona content pages |
| `/persona/{persona}/portfolio/{slug}` | Project detail pages |
| `/resume` | Web-based CV page |
| `/persona/creative/gallery` | Photography gallery |
| `/contact` | Contact form |
| `/admin` | Protected admin panel |
