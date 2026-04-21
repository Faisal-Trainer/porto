# Design System Strategy: The Ethereal Nocturne

## 1. Overview & Creative North Star

**Creative North Star: The Digital Curator**

This design system is not a utility; it is a cinematic experience. We are moving away from the "flat web" into a space defined by **The Ethereal Nocturne**—a philosophy that treats the screen as a series of infinite, dark glass layers suspended in a void of deep purple.

The goal is to move beyond the rigid, "boxed-in" layout of standard portfolios. We achieve this through:

- **Intentional Asymmetry:** Breaking the 12-column grid to allow display type to breathe and overlap.
- **Tonal Depth:** Replacing harsh lines with shifts in atmospheric pressure (color saturation and lightness).
- **Editorial Scaling:** Using dramatic contrasts between massive Display typography and utility-focused labels.

---

## 2. Colors & Surface Architecture

The palette is rooted in the deep shadows of the violet spectrum, punctuated by high-energy accents.

### Core Palette (Material Convention)

- **Background / Surface:** `#1e0a29` (Deep Purple-Black)
- **Primary (Action):** `#ddb8ff` (Vibrant Lilac) / Container: `#b175ec`
- **Secondary (Highlight):** `#ffe2ab` (Amber) / Container: `#ffbf00`
- **Tertiary (Accent):** `#fabc4e` (Golden Ochre)

### The "No-Line" Rule

**Borders are a failure of hierarchy.** 1px solid lines for sectioning are strictly prohibited. Boundaries must be defined through:

1.  **Background Shifts:** Transitioning from `surface` to `surface-container-low` for secondary content blocks.
2.  **Negative Space:** Using the spacing scale to create psychological barriers.
3.  **Tonal Transitions:** A subtle 10% shift in the purple hue to signify a new functional area.

### The "Glass & Gradient" Rule

To prevent the UI from feeling "flat-dark," floating elements (modals, navigation bars, hover states) must utilize **Glassmorphism**:

- **Fill:** `surface-container-highest` at 60% opacity.
- **Effect:** `backdrop-blur: 24px`.
- **Texture:** Apply a subtle linear gradient to main CTAs using `primary` to `primary-container`. This adds "soul" and prevents the buttons from looking like plastic stickers.

---

## 3. Typography: Editorial Authority

The typographic system creates a tension between the classic editorial feel of **Epilogue** and the technical precision of **Space Grotesk**.

- **Display & Headline (Epilogue):** These are your "Soul" fonts. Use `display-lg` (3.5rem) with tight letter-spacing (-0.04em) to create an authoritative, high-end magazine feel. Headlines should often overlap background containers or images to break the container box.
- **Body (Manrope):** The "Logic" font. Manrope provides extreme readability. Keep `body-lg` (1rem) for long-form content to ensure WCAG AA+ accessibility.
- **Labels (Space Grotesk):** The "Detail" font. Use this for metadata, micro-copy, and technical labels. It brings a modern, monospaced-adjacent aesthetic that balances the softness of the headlines.

---

## 4. Elevation & Depth: Tonal Layering

We do not use shadows to create "lift"; we use light and transparency.

### The Layering Principle

Hierarchy is achieved by "stacking" surface tiers.

- **Base:** `surface-container-lowest` (The deepest background).
- **Section:** `surface` or `surface-container-low` sits on top.
- **Interactive Cards:** `surface-container-high` creates a soft, natural lift.

### Ambient Shadows

If a floating effect is required (e.g., a dropdown menu), use **Ambient Shadows**:

- **Color:** `#000000` at 40% opacity.
- **Blur:** 40px – 60px.
- **Spread:** -5px (to keep the shadow "tucked" and clean).

### The "Ghost Border"

When a container requires a defined edge (accessibility in high-glare environments), use the **Ghost Border**:

- **Token:** `outline-variant` at 15% opacity. It should be barely visible—a suggestion of a boundary rather than a hard fence.

---

## 5. Components: Style Guide

### Buttons

- **Primary:** Linear gradient (`primary` to `primary_container`), roundedness `full`. No border. White text (`on-primary`) must meet contrast.
- **Secondary (Amber):** Use `secondary_container` for the background. This is reserved for high-priority secondary actions (e.g., "Hire Me" or "Download CV").
- **Tertiary:** Text-only with an underline that expands from the center on hover.

### Cards & Containers

- **Forbid Divider Lines:** Use `surface-container-highest` for the card body against a `surface` background.
- **Padding:** Use `xl` (1.5rem) minimum padding for all content containers to maintain the premium feel.
- **Roundedness:** Use `xl` (1.5rem) for cards to soften the dark-mode aesthetic.

### Input Fields

- **Resting:** `surface-container-low` fill, no border, `md` roundedness.
- **Focus:** A 1px `primary` ghost border (20% opacity) and a subtle glow using `primary` at 5% opacity as a box-shadow.

### Interaction States

- **Hover:** Background opacity should increase by 10%, or the `backdrop-blur` should intensify from 24px to 40px.

---

## 6. Do's and Don'ts

### Do

- **Do** use asymmetrical layouts where text blocks are offset from the center.
- **Do** use the Amber (`secondary`) accent sparingly. It is a "laser pointer"—if everything is Amber, nothing is important.
- **Do** ensure all `body-sm` and `label-md` text uses `on-surface-variant` to maintain a clear visual hierarchy between primary and secondary information.

### Don't

- **Don't** use pure black (#000000). It kills the "atmospheric" purple depth of the system.
- **Don't** use standard 1px dividers. If you feel the need for a line, use 48px of vertical whitespace instead.
- **Don't** use high-opacity borders. They create "visual noise" that contradicts the high-end editorial goal.
- **Don't** use "Drop Shadows" with X/Y offsets. Keep shadows centered and diffused to mimic ambient environmental light.
