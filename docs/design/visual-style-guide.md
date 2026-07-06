# Visual Style Guide
## CYOA Portfolio — "Deep Ocean & Neon Glow"

← [Design System Root](./design-system.md)

---

## Brand Identity & Tone
**Mood:** Professional, Bold, and Creative.

This portfolio is designed to immediately capture the attention of **potential clients and recruiters**. It avoids standard white/gray "CV-like" aesthetics, opting instead for a premium, high-tech, and intentional design. The deep navy background projects stability and trust (Professional), while the glowing neon accents and glassmorphism project innovation and forward-thinking (Bold & Creative).

---

## Color Palette

The interface relies on dark, atmospheric bases to make the content and accent colors pop.

### Base & Surfaces
| Use Case | Hex Code | Description |
|---|---|---|
| **Deep Base** | `#070b19` | The absolute bottom layer background. A very dark, rich indigo/navy, avoiding pure black. |
| **Surface Level 1** | `#0d142b` | Primary card backgrounds. |
| **Surface Level 2** | `#152040` | Hover states and elevated dropdowns. |
| **Glass Border** | `rgba(255, 255, 255, 0.06)` | Subtle light borders for glassmorphic cards to create an edge highlight. |

### Typography Colors
| Use Case | Hex/RGBA | Description |
|---|---|---|
| **Primary Text** | `#ffffff` | High contrast for primary headings. |
| **Secondary Text** | `#94a3b8` | Slate-400 for descriptions, body text, and meta-data. |
| **Muted Text** | `#64748b` | Slate-500 for inactive elements, footer links, or micro-copy. |

### Persona Accents & Glows
Each persona carries its own brand color, which is used for glowing shadows (`drop-shadow`), text gradients, and interactive states.

| Persona | Hex | Application |
|---|---|---|
| **Tech (Indigo/Violet)** | `#6366f1` | Tech tags, tech project cards, hover states in Tech mode. |
| **Management (Deep Gold)** | `#d4a853` | Management tags, timeline highlights, subtle gold glows. |
| **Creative (Warm Amber)** | `#f59e0b` | Gallery borders, creative typography accents, active states. |

---

## Typography

Fonts are served via Google Fonts. We pair a striking, geometric display font with a highly legible, utilitarian body font.

### Space Grotesk (Display)
- **Usage:** Main headings (H1, H2), hero section titles, persona labels, large numbers (e.g., years of experience, stat counters).
- **Weights:** 400 (Regular) for subtler headers, 700 (Bold) for maximum impact.
- **Styling:** Often used with `-tracking-tighter` (negative letter spacing) for a modern, compressed look.

### Inter (Body)
- **Usage:** Paragraphs, project descriptions, UI labels, buttons, form inputs.
- **Weights:** 300 (Light) for long-form reading, 400 (Regular) for standard UI, 600 (Semi-bold) for small labels or button text.

---

## Components & Effects

### Glassmorphism Cards
The staple of the UI. Used for project grids, resume sections, and the Gateway selection.
- **Background:** `bg-white/5` (or a dark translucent surface).
- **Backdrop Filter:** `backdrop-blur-md` (or `xl` for modals).
- **Border:** `border border-white/5`.
- **Hover:** Slight Y-axis translation (`-translate-y-1`), border glows with the active Persona's accent color.

### Glowing Buttons
- **Primary Button (CTA):** Uses a solid base of the active persona color (e.g., `bg-indigo-600`) with a subtle matching drop-shadow `shadow-[0_0_15px_rgba(99,102,241,0.5)]`. 
- **Secondary Button:** Outlined (`border-indigo-500/50`) with transparent background, glowing slightly on hover.

### UI Micro-Animations
- **Fade & Slide Up:** All pages load with a subtle `opacity-0 translate-y-4` to `opacity-100 translate-y-0` transition over 500ms.
- **Glow Pulse:** Ambient background blobs or key CTA borders use a slow pulse animation (3-4 seconds) to feel "alive".
