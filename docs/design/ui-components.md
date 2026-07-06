# UI Components & Persona Identity
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## 1. Per-Persona Visual Identity

Each persona SHALL have a distinct visual identity expressed through accent color, decorative motifs, and micro-copy tone — all within the shared dark design system.

### Tech Persona (`/persona/tech`)

| Element | Specification |
|---|---|
| **Accent color** | Electric Violet / Indigo (`#6366f1`) |
| **Hero decoration** | Subtle code/grid pattern in background, terminal-style blinking cursor |
| **Micro-copy style** | Terminal commands: `> ENTER_TERMINAL _`, `> VIEW_REPO ↗` |
| **Card border** | Left accent stripe in `persona-tech` |
| **Tag style** | Monospace font, dark badge with accent border |
| **Ambient glow** | Top-left violet radial blob, bottom-right subtle |

### Management Persona (`/persona/management`)

| Element | Specification |
|---|---|
| **Accent color** | Deep Gold / Amber (`#d4a853`) |
| **Hero decoration** | Clean horizontal rules, metric/number highlights |
| **Micro-copy style** | Business language: `VIEW_METRICS ↗`, `DOWNLOAD CASE STUDY →` |
| **Card border** | Left accent stripe in `persona-mgmt` |
| **Tag style** | Rounded pill labels, gold tint |
| **Ambient glow** | Warm gold radial accent, restrained and corporate |

### Creative Persona (`/persona/creative`)

| Element | Specification |
|---|---|
| **Accent color** | Warm Amber / Sage Green (`#f59e0b` / `#84cc16`) |
| **Hero decoration** | Image-forward layout, organic shapes, photo motifs |
| **Micro-copy style** | Expressive: `OPEN_GALLERY *`, `VIEW WORK ✦` |
| **Card border** | Left accent stripe in `persona-art` |
| **Tag style** | Minimalist chips, warm tint |
| **Ambient glow** | Warm amber bloom, bottom-right sage green |

---

## 2. Key UI Components

### Gateway — Persona Cards

```
┌──────────────────────────────────────┐
│ ┃  [Icon]                           │  ← accent left stripe
│    Technology & Engineering         │  ← display font, bold
│    Full Stack Dev, AI/ML, Arch…     │  ← body font, muted
│                                     │
│    > ENTER_TERMINAL _               │  ← hover-only micro-copy
└──────────────────────────────────────┘
  Hover: card lifts, glow appears, accent stripe brightens
```

### Persona Switcher (Header)

```
┌─────────────────────────────────────────────────────┐
│  [Logo/Name]    [●Tech]  [Management]  [Creative]   │
│                  ↑ active persona (accent colored)  │
└─────────────────────────────────────────────────────┘
```

- Sticky on scroll
- Active persona highlighted with accent color
- On mobile: collapses to a hamburger menu or pill row

### Project Card (on Persona Page)

```
┌───────────────────────────────────┐
│  [Cover Image — 16:9]            │
│                                   │
│  Project Title                    │
│  Short description text…          │
│  [Laravel] [Docker] [MySQL]       │  ← tag badges
│                          → View   │
└───────────────────────────────────┘
```

### Experience Timeline

```
  2023 ─●─ Software Engineer @ Company Name
         │  Full-time · Jan 2023 – Present
         │  Led development of X, reduced Y by Z%...
         │
  2021 ─●─ IT Engineer @ Previous Company
         │  ...
```

### Skills Grid

```
[Programming Languages]
  ● Python  ● PHP  ● JavaScript  ● TypeScript

[Frameworks]
  ● Laravel  ● React  ● FastAPI  ● PyTorch
```
*(Optional: proficiency dots 1-5 or thin progress bar)*

---

## 3. Project Detail Page — Template Differences

The detail page layout adapts based on the active persona context.

| Layout Element | Tech | Management | Creative |
|---|---|---|---|
| **Hero frame style** | Terminal / code window border | Clean metric banner with KPI callouts | Full-bleed cover image |
| **Body layout** | Documentation-style with code blocks | Report / case study with sections | Visual editorial with large images |
| **Technology tags** | Monospace badge (`<code>` style) | Rounded pill labels | Minimal chip |
| **CTA** | `> VIEW_REPO ↗` | `Download Case Study →` | `View in Gallery ↗` |
| **Sidebar** | Tech specs panel | Project timeline | Camera EXIF / photo metadata |
