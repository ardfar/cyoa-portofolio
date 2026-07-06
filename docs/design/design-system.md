# Design System
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

## Design Direction

The site SHALL feel like a **high-end creative agency portfolio** — not a generic developer resume. The design communicates expertise, intentionality, and premium craftsmanship.

| Pillar | Implementation |
|---|---|
| **Dark, atmospheric base** | Deep dark background (`#0a0a0f`), not pure black |
| **Premium typography** | Space Grotesk (display) + Inter (body) via Google Fonts |
| **Glassmorphism accents** | `backdrop-blur`, `bg-white/5`, `border-white/10` on cards |
| **Purposeful color** | Each persona has a distinct accent; rest of UI is neutral |
| **Micro-animations** | Fade-in on load, hover transitions ≤ 300ms, card lift on hover |
| **Generous whitespace** | Content breathes — no dense, cluttered layouts |
| **Mobile-first** | Designed for mobile, enhanced progressively for desktop |

---

## Color Tokens

Defined in Tailwind CSS v4 config (`resources/css/app.css` with `@theme`):

| Token | Hex Value | Usage |
|---|---|---|
| `--color-persona-dark` | `#0a0a0f` | Global page background |
| `--color-persona-surface` | `#12121a` | Card / elevated surfaces |
| `--color-persona-border` | `rgba(255,255,255,0.08)` | Subtle element borders |
| `--color-persona-tech` | `#6366f1` | Tech persona accent (Indigo/Violet) |
| `--color-persona-mgmt` | `#d4a853` | Management persona accent (Deep Gold) |
| `--color-persona-art` | `#f59e0b` | Creative persona accent (Warm Amber) |
| `--color-text-muted` | `#94a3b8` | Secondary / muted text (slate-400) |

---

## Typography Tokens

| Token | Font Family | Weight | Usage |
|---|---|---|---|
| `font-display` | Space Grotesk | 700 | Headings, persona labels, large numbers |
| `font-body` | Inter | 300 – 600 | Body text, descriptions, UI labels |
| `font-mono` | System monospace | 400 | Terminal micro-copy, code tags, tech labels |

**Loading:** Served via Google Fonts with `display=swap` in `<head>`:

```html
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
```

---

## Animation Tokens

| Token | Definition | Usage |
|---|---|---|
| `animate-float` | Gentle vertical oscillation (5s ease-in-out infinite) | Profile photo on Gateway |
| `animate-pulse-slow` | Opacity pulse (3s ease-in-out infinite) | Glow rings, ambient blobs |
| Standard transition | `150ms – 300ms ease` | All hover states and interactive transitions |

---

## Responsive Breakpoints

| Breakpoint | Min Width | Layout |
|---|---|---|
| Mobile (default) | 320px | Single column, stacked layout |
| `sm` | 640px | 2-column project cards |
| `md` | 768px | Full nav expands, gallery 2-col |
| `lg` | 1024px | Full 3-column project grid |
| `xl` | 1280px | Max content width constrained to ~1280px |

---

## Admin Panel Design

The admin panel uses a clean, functional aesthetic — intentionally distinct from the public site.

| Element | Spec |
|---|---|
| Color mode | **Light mode** (white / gray-50 base) — high legibility for editing |
| Sidebar | Dark (`#1e1e2e`), accent highlight on active section |
| Layout | Fixed left sidebar + scrollable main content area |
| Typography | Inter, standard sizes |
| Components | Tailwind-enhanced HTML form elements — no heavy UI library |
| Feedback | Toast-style success/error after CRUD actions |
| Image fields | Thumbnail preview shown next to current stored image |
| Rich text | WYSIWYG editor (TipTap or CKEditor Lite) in project body field |
