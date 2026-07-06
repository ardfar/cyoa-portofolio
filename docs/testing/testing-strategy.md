# Testing Strategy
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## 1. Automated Testing (Pest)

All tests MUST be written using **Pest** (the modern testing framework for Laravel). 

### Feature Tests

| Category | Test Case | Expected Outcome |
|---|---|---|
| **Public Routing** | `it('loads the gateway page')` | HTTP 200, contains persona links |
| | `it('loads all three persona pages')` | HTTP 200 on tech, management, creative |
| | `it('loads the resume page')` | HTTP 200 |
| | `it('loads the gallery page')` | HTTP 200 |
| **Project Guarding** | `it('returns 404 if project accessed via wrong persona')` | HTTP 404 |
| | `it('loads project if accessed via correct persona')` | HTTP 200, contains project title |
| **Contact Form** | `it('successfully submits valid contact form')` | HTTP 302 (redirect with success session), Mail fake sent |
| | `it('fails contact form with invalid data')` | HTTP 302 (redirect with error session) |
| **Admin Auth** | `it('allows admin login with correct credentials')` | HTTP 302 (redirect to dashboard), authenticated |
| | `it('prevents login with incorrect credentials')` | HTTP 302 (redirect to login), unauthenticated |
| | `it('protects admin routes from guests')` | HTTP 302 (redirect to login) on `/admin` |
| **Admin CRUD** | `it('allows admin to create a project')` | HTTP 302, DB has new project |
| | `it('allows admin to delete a project and its image')` | DB missing project, Storage missing file |

### Unit Tests

| Component | Test Case | Expected Outcome |
|---|---|---|
| `ImageCompressionService` | `it('compresses an oversized image below 1MB')` | File size < 1MB |
| | `it('preserves EXIF data when compressing JPEG')` | Output file contains EXIF array |
| `Obfuscator` | `it('obfuscates a string correctly')` | Output string is encoded and not plain text |

---

## 2. Code Quality & Linting

| Tool | Purpose | Standard |
|---|---|---|
| **Laravel Pint** | Enforces code style rules | PSR-12 |
| **PHPStan** (Optional) | Static analysis | Level 5 (recommended for Phase 1) |

All code MUST be linted with `vendor/bin/pint` prior to deployment.
Debug statements (`dd()`, `dump()`, `console.log()`) MUST be removed before commit.

---

## 3. Manual QA Checklist

Before releasing to production, the admin MUST manually verify:

### 3.1 Device & Browser Support
- [ ] Mobile view (iOS Safari, Android Chrome)
- [ ] Tablet view (iPad Safari)
- [ ] Desktop view (Chrome, Firefox, Safari)

### 3.2 Accessibility (A11y)
- [ ] Can navigate the site using `Tab` key (focus states visible)
- [ ] High contrast between text and background on all 3 persona themes
- [ ] All uploaded images have meaningful `alt` text set

### 3.3 Performance (Lighthouse)
- [ ] Target Performance score: ≥ 90
- [ ] Target SEO score: ≥ 95
- [ ] Verify large images (gallery, project covers) are truly being lazy loaded by the browser

### 3.4 SEO Verification
- [ ] Verify `sitemap.xml` returns valid XML with all page routes
- [ ] Verify `robots.txt` blocks `/admin`
- [ ] Use a structured data testing tool to verify `Person` and `CreativeWork` schemas

---

## 4. Deployment Checklist

When deploying to shared hosting:

1. **Environment Setup**
   - [ ] Set `APP_ENV=production` and `APP_DEBUG=false` in `.env`
   - [ ] Verify PHP version is 8.2+
   - [ ] Verify MySQL database connection

2. **Build & Optimize**
   - [ ] Run `npm run build` locally, ensure `public/build/` is uploaded
   - [ ] Run `php artisan config:cache`
   - [ ] Run `php artisan route:cache`
   - [ ] Run `php artisan view:cache`

3. **Storage & Database**
   - [ ] Run `php artisan migrate --force`
   - [ ] Run `php artisan db:seed` (to create the admin user and initial settings)
   - [ ] Run `php artisan storage:link` (must ensure symlinks are supported by host)

4. **Sanity Check**
   - [ ] Visit the `/admin` route and attempt login
   - [ ] Upload one image to verify permissions on `storage/app/public` are correct
   - [ ] Submit a test contact form to verify mail delivery
