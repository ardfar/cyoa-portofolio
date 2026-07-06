# System Architecture
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## High-Level Architecture

```
┌──────────────────────────────────────────────────────────┐
│                      Public Internet                     │
└───────────────────────────┬──────────────────────────────┘
                            │ HTTPS
┌───────────────────────────▼──────────────────────────────┐
│              Shared Hosting Server                        │
│           (Apache / Nginx + PHP-FPM 8.2+)                │
│                                                          │
│  ┌────────────────────────────────────────────────────┐  │
│  │               Laravel 12 Application               │  │
│  │                                                    │  │
│  │  ┌─────────────┐    ┌───────────────────────────┐  │  │
│  │  │  routes/    │───▶│      Controllers           │  │  │
│  │  │  web.php    │    │  app/Http/Controllers/     │  │  │
│  │  └─────────────┘    └────────────┬──────────────┘  │  │
│  │                                  │                 │  │
│  │                       ┌──────────▼─────────────┐  │  │
│  │                       │   Services / Actions   │  │  │
│  │                       └──────────┬─────────────┘  │  │
│  │                                  │                 │  │
│  │  ┌────────────────────┐          │                 │  │
│  │  │   Blade Views      │◀─────────┘                 │  │
│  │  │  resources/views/  │                            │  │
│  │  │  + Tailwind CSS v4 │                            │  │
│  │  └────────────────────┘                            │  │
│  │                                                    │  │
│  │  ┌──────────────┐   ┌──────────────────────────┐  │  │
│  │  │  MySQL 8.0+  │   │   Local File Storage      │  │  │
│  │  │  (Database)  │   │   storage/app/public/     │  │  │
│  │  └──────────────┘   │   - projects/             │  │  │
│  │                     │   - gallery/              │  │  │
│  │                     │   - certifications/       │  │  │
│  │                     │   - avatars/              │  │  │
│  │                     └──────────────────────────┘  │  │
│  └────────────────────────────────────────────────────┘  │
└──────────────────────────────────────────────────────────┘
```

---

## Application Directory Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── GatewayController.php
│   │   ├── PersonaController.php
│   │   ├── ProjectController.php
│   │   ├── ResumeController.php
│   │   ├── GalleryController.php
│   │   ├── ContactController.php
│   │   └── Admin/
│   │       ├── AuthController.php
│   │       ├── DashboardController.php
│   │       ├── ProjectController.php
│   │       ├── ExperienceController.php
│   │       ├── SkillController.php
│   │       ├── CertificationController.php
│   │       ├── GalleryController.php
│   │       └── SettingController.php
│   └── Middleware/
├── Models/
│   ├── Admin.php
│   ├── Project.php
│   ├── Experience.php
│   ├── Skill.php
│   ├── Certification.php
│   ├── GalleryAlbum.php
│   ├── GalleryPhoto.php
│   └── SiteSetting.php
├── Services/
│   └── ImageCompressionService.php
└── Support/
    └── Obfuscator.php
```

---

## URL & Route Map

### Public Routes

| Method | URL | Controller@Method | Route Name | Description |
|---|---|---|---|---|
| GET | `/` | `GatewayController@index` | `gateway` | Gateway / landing |
| GET | `/persona/tech` | `PersonaController@show` | `persona.tech` | Tech persona page |
| GET | `/persona/management` | `PersonaController@show` | `persona.management` | Management persona page |
| GET | `/persona/creative` | `PersonaController@show` | `persona.creative` | Creative persona page |
| GET | `/persona/{persona}/portfolio/{slug}` | `ProjectController@show` | `project.show` | Project detail page |
| GET | `/persona/creative/gallery` | `GalleryController@index` | `gallery.index` | Photo gallery |
| GET | `/resume` | `ResumeController@index` | `resume` | Web CV page |
| GET | `/contact` | `ContactController@index` | `contact.index` | Contact page |
| POST | `/contact/send` | `ContactController@send` | `contact.send` | Contact form submit |
| GET | `/sitemap.xml` | `SitemapController@index` | `sitemap` | Generated sitemap |

### Admin Routes (protected by `auth:admin`)

| Method | URL | Controller | Description |
|---|---|---|---|
| GET | `/admin` | `Admin\DashboardController@index` | Dashboard |
| GET | `/admin/login` | `Admin\AuthController@showLogin` | Login form |
| POST | `/admin/login` | `Admin\AuthController@authenticate` | Authenticate |
| POST | `/admin/logout` | `Admin\AuthController@logout` | Logout |
| Resource | `/admin/projects` | `Admin\ProjectController` | Projects CRUD |
| Resource | `/admin/experiences` | `Admin\ExperienceController` | Experiences CRUD |
| Resource | `/admin/skills` | `Admin\SkillController` | Skills CRUD |
| Resource | `/admin/skills/{skill}/certifications` | `Admin\CertificationController` | Certifications CRUD (nested) |
| Resource | `/admin/gallery` | `Admin\GalleryController` | Albums CRUD |
| POST | `/admin/gallery/{album}/photos` | `Admin\GalleryController@uploadPhotos` | Upload photos |
| DELETE | `/admin/gallery/photos/{photo}` | `Admin\GalleryController@destroyPhoto` | Delete photo |
| PATCH | `/admin/gallery/{album}/photos/reorder` | `Admin\GalleryController@reorderPhotos` | Reorder photos |
| GET | `/admin/settings` | `Admin\SettingController@index` | Settings form |
| POST | `/admin/settings` | `Admin\SettingController@update` | Save settings |

---

## Middleware Stack

| Middleware | Applied To | Purpose |
|---|---|---|
| `web` | All routes | Session, CSRF, cookies, flash |
| `auth:admin` | All `/admin/*` routes | Admin authentication guard |
| `throttle:5,1` | `POST /admin/login` | Brute-force protection (5/min per IP) |
| `throttle:5,1` | `POST /contact/send` | Contact form spam protection (5/min per IP) |

---

## Authentication Guard

A **separate guard** (`admin`) is configured independently from any default `users` guard:

```php
// config/auth.php
'guards' => [
    'admin' => [
        'driver'   => 'session',
        'provider' => 'admins',
    ],
],
'providers' => [
    'admins' => [
        'driver' => 'eloquent',
        'model'  => App\Models\Admin::class,
    ],
],
```

---

## Image Compression Pipeline

Compression is **synchronous** — performed inline during the upload HTTP request (no queue workers on shared hosting).

```
Admin uploads image (up to 10MB)
        │
        ▼
Validate MIME type & file size (server-side)
        │
        ▼
ImageCompressionService::compress($file)
  ├─ Read EXIF metadata (preserve it)
  ├─ Resize if width > 1920px (maintain aspect ratio)
  ├─ Re-encode as JPEG/WebP at quality 80
  ├─ Write EXIF back to output (JPEG only)
  └─ If output > 1MB: reduce quality iteratively until ≤ 1MB
        │
        ▼
Store to: storage/app/public/{context}/{filename}
        │
        ▼
Save to DB: file path + original filename + exif_data (JSON)
```

---

## Storage Directory Layout

```
storage/app/public/         (symlinked → public/storage/)
├── avatars/                Profile photo
├── projects/               Project cover images
│   └── {slug}-cover.jpg
├── gallery/                Gallery photos by album
│   └── {album-slug}/
│       └── {photo}.jpg
└── certifications/         Certification badge images
```

---

## Environment Configuration (`.env` Keys)

| Key | Purpose |
|---|---|
| `APP_NAME` | Site name |
| `APP_URL` | Full public URL |
| `APP_ENV` | `local` / `production` |
| `APP_DEBUG` | `true` / `false` |
| `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` | MySQL connection |
| `MAIL_MAILER` | `smtp` or `log` |
| `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION` | SMTP config |
| `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME` | Sender identity |
| `ADMIN_EMAIL` | Initial admin email (seeder) |
| `ADMIN_PASSWORD` | Initial admin password (seeder, will be hashed) |
