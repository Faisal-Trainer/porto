# Design System Strategy: The Editorial Lens

## 1. Overview & Creative North Star
**Creative North Star: The Lucid Curator**
This design system rejects the "template-ready" aesthetics of generic SaaS platforms. Instead, it adopts the persona of a high-end digital gallery. It is characterized by **The Lucid Curator**—a philosophy where content is framed by light, air, and sophisticated tonal shifts rather than rigid borders. 

We break the standard grid through **intentional asymmetry**: images may bleed off-canvas, and headings are allowed to overlap surface containers to create a sense of movement. This system prioritizes "Negative Space as a Feature," ensuring the user’s eye is led by typographic hierarchy and color depth, not structural lines.

---

## 2. Colors & Surface Logic
The palette is rooted in deep purples (`primary`) and sophisticated ambers (`tertiary`), balanced against a spectrum of light, ethereal surfaces.

### The "No-Line" Rule
**Prohibit 1px solid borders for sectioning.** Boundaries must be defined solely through background color shifts or tonal transitions. To separate the Hero from the Blog Feed, transition from `surface` to `surface-container-low`. The change should be felt, not seen as a line.

### Surface Hierarchy & Nesting
Treat the UI as a series of physical layers—like stacked sheets of frosted glass. 
- **Base:** `surface` (#fff7fc)
- **Sub-sections:** `surface-container-low` (#feefff)
- **Interactive Cards:** `surface-container-lowest` (#ffffff) to provide a "pop" against the background.
- **Overlays:** `surface-container-highest` (#f5d9ff) for modals or menus.

### The "Glass & Gradient" Rule
To achieve the premium editorial feel:
- **Floating Elements:** Navigation bars and featured cards must utilize **Glassmorphism**. Use a semi-transparent `surface` color with a `backdrop-blur` of 12px–20px.
- **Signature Gradients:** Main headings (`display-lg`) and primary CTAs should utilize a subtle linear gradient from `primary` (#9000d4) to `primary-container` (#ac34f1) at a 135-degree angle. This adds "soul" to the minimalist layout.

---

## 3. Typography
Our typography is a trio of voices working in concert to establish an authoritative yet modern tone.

- **Display & Headlines (Plus Jakarta Sans):** Used for impact. The generous x-height and geometric curves feel professional and bespoke. High-contrast sizing (e.g., `display-lg` vs. `body-md`) is mandatory to create an editorial "rhythm."
- **Body & Titles (Inter):** The workhorse. Inter provides maximum legibility for long-form blog content. 
- **Labels (Space Grotesk):** Reserved for metadata (reading time, dates, tags). The monospace-inspired character of Space Grotesk adds a "technical" edge to the minimalist aesthetic.

---

## 4. Elevation & Depth
Depth is achieved through **Tonal Layering** rather than traditional drop shadows.

- **The Layering Principle:** Place a `surface-container-lowest` card on a `surface-container-low` section. This creates a soft, natural lift.
- **Ambient Shadows:** For "floating" glass cards, use a shadow with a 32px blur, 0px offset-y, and 4% opacity, using the `on-surface` (#30004a) color as the tint. Never use pure black shadows.
- **The "Ghost Border" Fallback:** If a boundary is required for accessibility, use the `outline-variant` token at **15% opacity**. A 100% opaque border is a failure of the system.
- **Glassmorphism:** Use `surface_variant` at 60% opacity with a `backdrop-filter: blur(16px)`. This integrates the card into the environment by allowing the background’s purple/amber tones to bleed through.

---

## 5. Components

### Buttons
- **Primary:** Gradient fill (`primary` to `primary-container`), white text, `xl` (1.5rem) roundedness. No border.
- **Secondary:** Surface-container-high fill with `on-secondary-container` text.
- **Tertiary:** No fill. `label-md` typography in `primary` color with a `Ghost Border` on hover.

### Blog Cards (Glass Variant)
- **Style:** `surface-container-lowest` at 80% opacity. 
- **Blur:** 16px backdrop-blur.
- **Spacing:** `xl` padding.
- **Constraint:** No dividers. Use `body-sm` metadata in `tertiary` (#825100) to separate the title from the summary.

### Chips (Tags)
- **Selection Chips:** `secondary-fixed` background with `on-secondary-fixed` text.
- **Shape:** `full` roundedness (capsule).
- **Interaction:** On hover, shift from `secondary-fixed` to `secondary-container`.

### Input Fields
- **Background:** `surface-container-low`.
- **Border:** `Ghost Border` (10% `outline`).
- **Active State:** Border opacity increases to 100% using the `primary` token; no glow/shadow.

### Progress Indicators (Performance Focus)
- Use a slim (2px) bar at the top of the viewport using the `tertiary` (#825100) color to indicate scroll depth, replacing traditional "Load More" buttons for a seamless editorial flow.

---

## 6. Do’s and Don’ts

### Do
- **Do** use `display-lg` for hero headlines but keep the character tracking slightly tight (-0.02em).
- **Do** allow for generous vertical whitespace. If a section feels crowded, double the spacing.
- **Do** use `tertiary-fixed-dim` for small accents like bullet points or category labels to draw the eye without overwhelming it.

### Don’t
- **Don't** use 1px solid dividers between list items. Use a 24px vertical gap or a subtle background shift to `surface-container-low`.
- **Don't** use pure black (#000000) for text. Use `on-surface` (#30004a) to maintain the purple tonal harmony.
- **Don't** use standard `md` roundedness for cards; go `xl` (1.5rem) or `none` for a more intentional, high-fashion editorial look. Avoid the "middle ground."