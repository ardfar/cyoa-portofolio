# Product Overview & User Roles
## SRS: CYOA Portfolio — Farras Arrafi

← [SRS Index](./index.md) | [Docs Root](../README.md)

---

## Product Overview

### The Core UX Concept

The fundamental problem this site solves: a portfolio for a generalist/polymath overwhelms visitors with irrelevant content. A tech recruiter doesn't need to see photography. A creative client doesn't need to read about Docker deployments.

The CYOA model makes the visitor's context the **first input** before any content is shown.

### Entry Flow

```
Visitor arrives at /
        │
        ▼
┌─────────────────────────────────────────────────────┐
│                    GATEWAY PAGE                     │
│                                                     │
│  "Halo, saya Farras Arrafi.                         │
│   Ingin melihat saya sebagai apa?"                  │
│                                                     │
│  [ Technology & Engineering ]                       │
│  [ Management & Strategy    ]                       │
│  [ Operations & Creative    ]                       │
│                                                     │
│  ── atau lihat ringkasan karir penuh (Resume) ──    │
└─────────────────────────────────────────────────────┘
        │
   ┌────┼────────────────┐
   ▼    ▼                ▼
/persona/tech    /persona/management    /persona/creative
        │
        ▼
┌───────────────────────────────┐
│      PERSONA CONTENT PAGE     │
│  - Hero headline              │
│  - Featured projects          │
│  - Skills                     │
│  - Work experience            │
│  - CTA                        │
│  - [Persona Switcher in nav]  │
└───────────────────────────────┘
        │
        ▼
/persona/{persona}/portfolio/{slug}
┌───────────────────────────────┐
│    PROJECT DETAIL PAGE        │
│  (template styled per persona)│
└───────────────────────────────┘
```

### Persona Adaptation

When a visitor selects a persona, these elements adapt:

| Element | Adapts Per Persona |
|---|---|
| Hero headline & sub-headline | ✅ |
| Featured projects | ✅ filtered by persona |
| Skills displayed | ✅ filtered by persona |
| Work experience shown | ✅ filtered by persona |
| CTA text and link | ✅ |
| Color accent / visual identity | ✅ |
| Project detail page template | ✅ |
| Navigation items | ✅ |
| Meta title / description | ✅ |

### Persona State Persistence

- Last selected persona is stored in **`localStorage`** (`key: cyoa_persona`)
- URL itself reflects active persona (`/persona/tech`) — bookmarkable & shareable

---

## System User Roles

| Role | Who | Access |
|---|---|---|
| **Site Owner (Admin)** | Farras Arrafi | Full admin panel — CRUD all content, settings, uploads |
| **Site Visitor** | Recruiters, clients, colleagues | Read-only — all public pages |

> **Single admin account only.** Multi-user or role-based access is out of scope for Phase 1.

---

## Content Personas

These are not system user roles — they are **content presentation contexts** selected by the visitor.

### Persona A — Technology & Engineering

| Attribute | Value |
|---|---|
| Route key | `tech` |
| URL | `/persona/tech` |
| Roles covered | Full Stack Developer, AI/ML Engineer |
| Target visitor | Tech recruiters, CTOs, Tech Leads |
| Headline tone | Technical, analytical |
| Visual accent | Electric Violet `#6366f1` |
| Featured skills | Laravel, Python, JS/TS, TensorFlow, YOLO, Docker, CI/CD |
| CTA | "Lihat proyek teknis saya" |

### Persona B — Management & Strategy

| Attribute | Value |
|---|---|
| Route key | `management` |
| URL | `/persona/management` |
| Roles covered | Project Manager, Product Manager, Business Development |
| Target visitor | HR managers, CEOs, business clients |
| Headline tone | Strategic, results-oriented |
| Visual accent | Deep Gold `#d4a853` |
| Featured skills | Project Mgt., Agile/Scrum, Product Strategy, Biz Dev |
| CTA | "Lihat studi kasus saya" |

### Persona C — Operations & Creative

| Attribute | Value |
|---|---|
| Route key | `creative` |
| URL | `/persona/creative` |
| Roles covered | IT Support, Administrator, Photography |
| Target visitor | Ops managers, creative clients, agencies |
| Headline tone | Organized, solutive, creative |
| Visual accent | Warm Amber `#f59e0b` |
| Featured skills | IT Support, Administrasi, Photography, Adobe Suite |
| CTA | "Lihat galeri / Hubungi saya" |

---

## Master Role List

All 8 professional roles owned by Farras Arrafi, mapped to their persona:

| # | Role | Persona |
|---|---|---|
| 1 | Full Stack Developer | Technology & Engineering |
| 2 | AI/ML Engineer | Technology & Engineering |
| 3 | Project Manager | Management & Strategy |
| 4 | Product Manager | Management & Strategy |
| 5 | Business Development | Management & Strategy |
| 6 | IT Support | Operations & Creative |
| 7 | Administrator | Operations & Creative |
| 8 | Photography | Operations & Creative |
