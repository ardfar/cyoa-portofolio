# Data Models
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

> **Note on Schema Architecture:** 
> This document defines the **Unified Schema** for the CYOA Portfolio. 
> Older fragmented migrations (e.g., `tech_projects_table`, `mgmt_records_table`) are deprecated and should be replaced by the unified tables defined below. Personas are handled via ENUMs or JSON arrays to maintain a single Admin CRUD interface.

---

## Entity Relationship Overview

```
admins
  └─ (manages all content via admin panel)

site_settings
  └─ key-value store for all configurable content

projects
  └─ persona: ENUM(tech | management | creative)

experiences
  └─ personas: JSON array of persona keys (multi-persona support)

skills
  └─ personas: JSON array of persona keys
  └── certifications (one-to-many)

gallery_albums
  └── gallery_photos (one-to-many)
       └─ cover_photo_id (FK back to gallery_albums, nullable)
```

---

## Table: `admins`

Single admin user account.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `name` | VARCHAR(255) | NOT NULL | Display name |
| `email` | VARCHAR(255) | NOT NULL, UNIQUE | Login username |
| `password` | VARCHAR(255) | NOT NULL | bcrypt hashed |
| `remember_token` | VARCHAR(100) | NULLABLE | Laravel remember-me |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

> **Seeding:** Populated via `AdminSeeder` using `ADMIN_EMAIL` and `ADMIN_PASSWORD` from `.env`.

---

## Table: `site_settings`

Key-value store for all site-wide and per-persona configuration.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `key` | VARCHAR(255) | NOT NULL, UNIQUE | Dot-notation key |
| `value` | TEXT | NULLABLE | |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

### Reserved Key Namespace

| Key | Description |
|---|---|
| `site.name` | Brand/site name |
| `site.tagline` | Site tagline |
| `site.owner_name` | Owner full name |
| `site.summary` | Personal bio/summary (CV page) |
| `site.profile_photo` | Storage path to profile photo |
| `site.github_url` | GitHub URL |
| `site.linkedin_url` | LinkedIn URL |
| `site.instagram_url` | Instagram URL |
| `site.cv_download_url` | External PDF CV download link |
| `contact.email` | Obfuscated display email |
| `contact.phone` | Obfuscated display phone |
| `contact.recipient_email` | Receives contact form submissions |
| `seo.{page}.title` | Meta title for gateway/resume/contact/gallery |
| `seo.{page}.description` | Meta description for each page |
| `persona.{key}.headline` | Hero headline per persona |
| `persona.{key}.sub_headline` | Sub-headline per persona |
| `persona.{key}.cta_text` | CTA button text per persona |
| `persona.{key}.cta_url` | CTA button URL per persona |
| `persona.{key}.meta_title` | SEO meta title per persona |
| `persona.{key}.meta_description` | SEO meta description per persona |
| `persona.{key}.og_image` | OG image path per persona |

> `{key}` = `tech`, `management`, or `creative`

---

## Table: `projects`

All portfolio/case study projects.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `persona` | ENUM('tech','management','creative') | NOT NULL | Owning persona |
| `title` | VARCHAR(255) | NOT NULL | |
| `slug` | VARCHAR(255) | NOT NULL, UNIQUE | Globally unique URL slug |
| `short_description` | TEXT | NOT NULL | For listing cards (≤ 300 chars) |
| `body` | LONGTEXT | NULLABLE | Rich HTML (WYSIWYG output) |
| `cover_image` | VARCHAR(500) | NULLABLE | Storage path of compressed image |
| `cover_image_original_name` | VARCHAR(255) | NULLABLE | Original filename before compression |
| `technologies` | JSON | NULLABLE | Array of tag strings |
| `project_url` | VARCHAR(500) | NULLABLE | External demo link |
| `github_url` | VARCHAR(500) | NULLABLE | GitHub repository link |
| `client_name` | VARCHAR(255) | NULLABLE | |
| `project_date` | DATE | NULLABLE | |
| `is_featured` | TINYINT(1) | NOT NULL, DEFAULT 0 | Shown prominently on persona page |
| `sort_order` | INT | NOT NULL, DEFAULT 0 | Lower = shown first |
| `meta_title` | VARCHAR(255) | NULLABLE | SEO |
| `meta_description` | TEXT | NULLABLE | SEO |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

> **Index:** `(persona, sort_order)` for efficient per-persona ordering queries.

---

## Table: `experiences`

Work experience entries for persona pages and CV page.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `job_title` | VARCHAR(255) | NOT NULL | |
| `company` | VARCHAR(255) | NOT NULL | |
| `employment_type` | VARCHAR(100) | NULLABLE | Full-time / Part-time / Freelance |
| `start_date` | DATE | NOT NULL | |
| `end_date` | DATE | NULLABLE | NULL = currently working here |
| `description` | TEXT | NULLABLE | Responsibilities & achievements |
| `personas` | JSON | NOT NULL | e.g. `["tech","management"]` |
| `sort_order` | INT | NOT NULL, DEFAULT 0 | |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

---

## Table: `skills`

Individual skills with persona tags and optional proficiency.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `name` | VARCHAR(255) | NOT NULL | e.g. "Laravel", "Docker" |
| `category` | VARCHAR(255) | NOT NULL | e.g. "Frameworks", "Tools" |
| `proficiency` | TINYINT UNSIGNED | NULLABLE | Scale 1–5 (optional) |
| `personas` | JSON | NOT NULL | e.g. `["tech"]` |
| `sort_order` | INT | NOT NULL, DEFAULT 0 | Within category |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

---

## Table: `certifications`

Certifications linked to skills (skill → many certifications).

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `skill_id` | BIGINT UNSIGNED | NOT NULL, FK → `skills.id` CASCADE | |
| `name` | VARCHAR(255) | NOT NULL | Certification name |
| `issuing_body` | VARCHAR(255) | NOT NULL | e.g. "Coursera", "AWS" |
| `issue_date` | DATE | NULLABLE | |
| `expiry_date` | DATE | NULLABLE | NULL = does not expire |
| `credential_url` | VARCHAR(500) | NULLABLE | Verification link |
| `badge_image` | VARCHAR(500) | NULLABLE | Storage path to badge image |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

---

## Table: `gallery_albums`

Photo album groupings.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `title` | VARCHAR(255) | NOT NULL | |
| `slug` | VARCHAR(255) | NOT NULL, UNIQUE | |
| `description` | TEXT | NULLABLE | |
| `cover_photo_id` | BIGINT UNSIGNED | NULLABLE, FK → `gallery_photos.id` SET NULL | |
| `sort_order` | INT | NOT NULL, DEFAULT 0 | |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

---

## Table: `gallery_photos`

Individual photos within albums.

| Column | Type | Constraints | Notes |
|---|---|---|---|
| `id` | BIGINT UNSIGNED | PK, AUTO_INCREMENT | |
| `album_id` | BIGINT UNSIGNED | NOT NULL, FK → `gallery_albums.id` CASCADE | |
| `filename` | VARCHAR(500) | NOT NULL | Compressed file path |
| `original_filename` | VARCHAR(255) | NOT NULL | |
| `caption` | VARCHAR(500) | NULLABLE | |
| `alt_text` | VARCHAR(255) | NULLABLE | |
| `exif_data` | JSON | NULLABLE | Capture date, camera, GPS |
| `file_size_bytes` | INT UNSIGNED | NULLABLE | Compressed size |
| `sort_order` | INT | NOT NULL, DEFAULT 0 | |
| `created_at` | TIMESTAMP | NULLABLE | |
| `updated_at` | TIMESTAMP | NULLABLE | |

---

## Migration Order

Migrations must run in this dependency order:

1. `create_admins_table`
2. `create_site_settings_table`
3. `create_projects_table`
4. `create_experiences_table`
5. `create_skills_table`
6. `create_certifications_table` *(depends on skills)*
7. `create_gallery_albums_table`
8. `create_gallery_photos_table` *(depends on gallery_albums)*
9. **Alter** `gallery_albums` — add `cover_photo_id` FK *(depends on gallery_photos)*
