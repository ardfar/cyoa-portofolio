# Test Plan: Web Content CRUD

**Feature:** Web Content CRUD (Create, Read, Update, Delete)
**Primary Focus:** User Acceptance Testing (UAT) & SEO Validation
**Bug Tracking:** GitHub Issues

---

## 1. Overview and Objectives
This document outlines the testing strategy before deploying the Web Content CRUD feature. The primary goals are to ensure that end-users (and admins) experience a flawless content management workflow (UAT) and that all newly generated or updated content adheres to our project's SEO standards.

---

## 2. Bug Reporting Procedure (GitHub Issues)
All bugs discovered during this testing phase must be logged in **GitHub Issues** using the following standardized format:

- **Title:** `[Bug][UAT/SEO] - Short descriptive title`
- **Description:** Clear explanation of what went wrong.
- **Steps to Reproduce:** Numbered list of exact steps to recreate the issue.
- **Expected Behavior:** What should have happened.
- **Actual Behavior:** What actually happened.
- **Environment:** Browser (e.g., Chrome 120), OS, and Device (Desktop/Mobile).
- **Attachments:** Screenshots or screen recordings of the error.

---

## 3. User Acceptance Testing (UAT) Scenarios
These tests focus on real-world usage from the perspective of an administrator managing content and a user viewing it.

### UAT-1: Create Web Content
- **Action:** Admin navigates to the "Create Content" page, fills out all required fields (Title, Body, Image, Persona category), and clicks "Save".
- **Expected Result:**
  - Content is successfully saved to the database.
  - Admin is redirected to the dashboard with a success flash message.
  - The newly created content is immediately visible on the corresponding Persona frontend page.
  - Uploaded images are compressed correctly (under 1MB) as per the project standards.

### UAT-2: Read / View Content
- **Action:** A normal site visitor navigates to the newly created content's public URL.
- **Expected Result:**
  - The content loads correctly (HTTP 200).
  - The layout, typography, and Persona accent colors (e.g., Tech's Electric Violet) are applied properly.
  - Images are responsive and lazy-loaded.

### UAT-3: Update Existing Content
- **Action:** Admin edits an existing content piece, changes the title, replaces the image, and saves.
- **Expected Result:**
  - Changes are persisted.
  - Old image is deleted from the server storage to prevent bloat.
  - The frontend reflects the updated content immediately.

### UAT-4: Delete Content
- **Action:** Admin deletes a content item and confirms the deletion prompt.
- **Expected Result:**
  - Content is removed from the database.
  - Associated media/images are deleted from `storage/app/public`.
  - Visiting the old public URL returns a clean HTTP 404 error page.

### UAT-5: Form Validation and Error Handling (Negative Test)
- **Action:** Admin tries to submit the Create/Edit form with missing required fields (e.g., missing Title).
- **Expected Result:**
  - Form submission is blocked.
  - Clear, red validation error messages appear next to the missing fields.
  - Previously entered data (like the body text) is retained in the form so the user doesn't have to start over.

---

## 4. SEO Validation Scenarios
Because this is web content, ensuring it is optimized for search engines upon creation is critical.

### SEO-1: Dynamic Meta Tags Generation
- **Action:** Inspect the HTML `<head>` of a newly created content page.
- **Expected Result:**
  - `<title>` tag matches the content title + site name.
  - `<meta name="description">` is present and contains a valid excerpt of the body content.
  - OpenGraph (`og:title`, `og:image`, `og:description`) and Twitter Card tags are populated correctly for social sharing.

### SEO-2: Semantic HTML Structure
- **Action:** Review the page markup.
- **Expected Result:**
  - There is exactly one `<h1>` tag on the page (the content title).
  - Subheadings in the body content use `<h2>`, `<h3>`, etc., in a logical hierarchy.
  - All images within the content have descriptive `alt` attributes.

### SEO-3: URL Slugs and Routing
- **Action:** Verify the URL structure for the content.
- **Expected Result:**
  - The URL is human-readable and SEO-friendly (e.g., `/persona/tech/portfolio/my-new-project`).
  - Editing a title does not break the old URL (or it gracefully 301 redirects to the new slug if slugs are updated).

### SEO-4: Sitemap and Robots.txt Verification
- **Action:** Admin creates a new public project.
- **Expected Result:**
  - The URL for the new project is dynamically included in the `sitemap.xml`.
  - The `robots.txt` does not accidentally block the new content path.
  - Structured Data (Schema.org `CreativeWork`) is rendered correctly on the page.
