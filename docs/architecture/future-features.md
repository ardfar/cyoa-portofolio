# Future Features — Phase 2
## CYOA Portfolio — Farras Arrafi

← [Docs Root](../README.md)

---

> All features in this document are **out of scope for Phase 1**. They are documented here to inform future infrastructure decisions and to ensure Phase 1 architecture does not unnecessarily block these additions.

---

## AI Portfolio Chatbot

### Overview

An embedded conversational assistant that allows site visitors to ask natural language questions about Farras — his background, skills, projects, availability, and experience — and receive accurate, context-aware answers.

**Goal:** Turn passive portfolio browsing into an interactive conversation. Reduce friction for recruiters and clients who want specific answers quickly without reading through all the pages.

---

### User Experience (Proposed)

```
[Visitor on any persona page]
        │
        ▼
  [Chat button — fixed bottom-right corner]
        │
        ▼
  "Halo! Saya Ara, asisten digital Farras.
   Ada yang bisa saya bantu?" 💬
        │
  Visitor: "Does Farras have experience with Docker?"
        │
        ▼
  AI: "Yes! Farras has used Docker in several projects including
       Belidigi and SafeRec, with Docker Compose and CI/CD pipelines
       via GitHub Actions."
```

---

### Technical Architecture — RAG Pipeline

The chatbot will use a **Retrieval-Augmented Generation (RAG)** approach — the AI is grounded in real portfolio content, not just trained weights.

```
Visitor sends a question
        │
        ▼
Embed question → vector representation
        │
        ▼
Search vector database for relevant content chunks
  Knowledge base sources:
  - Projects (title, description, body, technologies)
  - Skills and certifications
  - Work experiences
  - Personal summary / CV content
  - Persona headlines and CTAs
        │
        ▼
Assemble: retrieved chunks + visitor question → LLM prompt
        │
        ▼
LLM generates a grounded, context-aware answer
        │
        ▼
Stream response back to visitor in chat UI
```

---

### Why It's Deferred

The following infrastructure requirements are **incompatible with shared hosting**:

| Requirement | Why It Blocks Phase 1 |
|---|---|
| LLM API or self-hosted model | Needs API budget (OpenAI/Gemini) or VPS with GPU/high RAM |
| Vector database | pgvector or Qdrant — not available on shared hosting |
| Background indexing | Re-indexing on content changes needs queue workers |
| Streaming responses | Server-Sent Events or WebSockets — unreliable on shared hosting |

---

### Recommended Implementation Path (Phase 2)

When resources allow:

1. **Upgrade hosting** to a VPS (DigitalOcean, Hetzner) or managed platform (Railway, Render)
2. **Choose LLM provider** — Google Gemini API or OpenAI API (lowest infra overhead)
3. **Choose vector store** — Add `pgvector` to PostgreSQL, or use managed Qdrant
4. **Build indexing command** — `php artisan chatbot:index` reads all DB content, generates embeddings, stores in vector DB
5. **Build chat endpoint** — `POST /api/chat` — retrieves relevant chunks, calls LLM, returns response
6. **Build frontend widget** — Lightweight Alpine.js or vanilla JS chat bubble, loaded asynchronously

---

### Phase 1 Preparation

No placeholder code or endpoints are needed in Phase 1. However, these Phase 1 decisions make Phase 2 easier:

- ✅ All content stored in structured, queryable MySQL tables
- ✅ Project body content stored as clean HTML (easy to strip to plaintext for embedding)
- ✅ All CMS content centralized — no hardcoded content in Blade views
- ✅ Clean slug-based URLs for sourcing and citing content in chatbot responses
