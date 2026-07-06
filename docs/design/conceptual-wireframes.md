# Conceptual Wireframes

← [Design System Root](./design-system.md)

This document outlines the structural blueprints for the core pages of the CYOA (Choose Your Own Adventure) Portfolio. The layouts are described conceptually, focusing on hierarchy, content placement, and user flow, tailored for the "Deep Ocean & Neon Glow" aesthetic.

---

## 1. Gateway (Landing Page)
**URL:** `/`
**Purpose:** The entry point. It sets the tone, introduces the concept, and forces the user to make a choice, acting as an interactive filter for the content.

### Layout Structure (Desktop & Mobile)
- **Background:** Deep Navy (`#070B19`) with very subtle, slow-moving ambient glow blobs in the background.
- **Center Canvas (Vertical Stack):**
  - **Greeting / Hook:** `H1` (Space Grotesk, White). "Farras Arrafi."
  - **Sub-headline:** `H2` or Large Body (Inter, Muted). "Select your perspective to explore my work."
  - **The Persona Selection Cards (Horizontal on Desktop, Stacked on Mobile):**
    - Three glassmorphic cards (`bg-white/5`), equal size.
    - **Card 1 (Tech):** Indigo glow on hover. Icon (Code/Terminal). Title: "Technology & Engineering".
    - **Card 2 (Management):** Gold glow on hover. Icon (Chart/Strategy). Title: "Management & Strategy".
    - **Card 3 (Creative):** Amber glow on hover. Icon (Camera/Brush). Title: "Operations & Creative".
- **Footer (Absolute Bottom):** Minimal links to Contact, direct Resume download (for recruiters in a hurry), and social links.

---

## 2. Persona Hub Page
**URL:** `/persona/{persona}`
**Purpose:** The main dashboard for the chosen discipline. It highlights specific skills, a tailored bio, and the relevant project portfolio.

### Layout Structure
- **Global Navigation (Top Sticky):** 
  - Logo/Name (Left)
  - Persona Switcher (Middle/Right) - A compact dropdown or toggle to seamlessly switch to another persona.
  - Resume & Contact Links (Right).
- **Hero Section:**
  - **Left/Top:** Dynamic headline tailored to the persona (e.g., "Building Scalable Systems" for Tech). Short tailored bio (Inter, Muted).
  - **Right/Bottom:** A stylistic visual representation (e.g., a glowing abstract code block for Tech, a Kanban board graphic for Management).
- **Skills/Tech Stack Marquee or Grid:**
  - Glassmorphic badges representing specific tools/skills (e.g., Laravel, React, Agile, Photography).
- **Project Grid (The Core):**
  - Grid layout (1 col mobile, 2 col tablet, 3 col desktop).
  - Each item is a card: 
    - Thumbnail image (top).
    - Project Title (Space Grotesk).
    - 2-3 sentence summary (Inter).
    - Glowing "View Case Study" link/button.
- **Call to Action (Bottom):** "Let's build something together" -> Contact Button.

---

## 3. Project Detail Page
**URL:** `/persona/{persona}/portfolio/{slug}`
**Purpose:** An in-depth case study of a specific project, emphasizing the problem-solving process.

### Layout Structure
- **Global Navigation (Top Sticky):** Same as Hub, includes a "Back to Portfolio" breadcrumb.
- **Hero Header:**
  - Full-width background image or a very large hero graphic, heavily darkened/blurred with the Persona's accent color overlay.
  - Overlay Text: Project Title (`H1`), Date, and Role.
- **Content Area (Centered, Max-Width):**
  - **Meta Sidebar / Top Banner:** Client, Timeline, Tools Used, Live URL (if applicable).
  - **The Challenge:** Text block explaining the problem.
  - **The Solution:** Text block explaining the approach.
  - **Visuals:** Interspersed high-quality screenshots or diagrams. Floating in glassmorphic containers.
  - **The Impact / Results:** Key metrics or takeaways highlighted in bold glowing text.
- **Next Project (Bottom Nav):** Large clickable area leading to the next project in the portfolio to keep the user engaged.

---

## 4. Web Resume Page
**URL:** `/resume`
**Purpose:** A highly scannable, ATS-friendly (in structure) but visually stunning version of the CV for recruiters.

### Layout Structure
- **Header:** Name, Contact Info (Email, LinkedIn, GitHub), Download PDF button (prominent, top right).
- **Two-Column Layout (Desktop):**
  - **Left Column (Main Content - 70% width):**
    - **Experience:** Timeline format. Vertical line with glowing nodes. Job Title, Company, Date, and bullet points of achievements.
    - **Education:** Similar timeline structure.
  - **Right Column (Sidebar - 30% width):**
    - **Core Competencies:** List of hard skills grouped by category.
    - **Languages:** Natural languages spoken.
    - **Interests/Soft Skills:** Short tags.
- **Mobile Behavior:** Sidebar content drops below the Main Content column.
- **Visual Note:** The timeline uses a subtle gradient line that "fills" as the user scrolls down, encouraging them to read the full history.
