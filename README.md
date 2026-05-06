# Faisal Yusra - Professional Portfolio & Digital Business Gateway

A high-performance, SEO-optimized professional portfolio and business platform built with **Laravel 12**, **Filament v4**, and **Tailwind CSS 4**. This project serves as a digital identity and service hub for a Web Developer & Digital Consultant based in Bukittinggi.

---

## 🚀 Core Features

- **Project Showcase**: A dynamic portfolio management system with categorization, technology tagging, and high-quality image processing (WebP).
- **Talent Recruitment System**: A dedicated portal for talent data collection and CV management, including soft-delete and secure file handling.
- **Business Inquiry (CRM Light)**: Integrated contact forms for potential customers with automated categorization and admin notification.
- **Dynamic Blog & Journal**: A full-featured blogging system for digital insights and personal journals.
- **Admin Command Center**: Powered by **Filament v4**, providing a sleek, server-driven UI for managing all project aspects.
- **Advanced Authentication**: Secure access via **Laravel Jetstream** and **Fortify**, including OTP verification and role-based access control (RBAC).

---

## 🏗️ Technical Architecture

### 1. Backend Infrastructure

- **Framework**: Laravel 12 (The latest evolution of PHP).
- **State Management**: **Livewire 3** for reactive components without the overhead of complex JS frameworks.
- **Security**: RBAC using **Spatie Permission**, Activity Logging for traceability, and Jetstream for robust authentication.
- **Image Processing**: **Intervention Image** with automated WebP conversion for maximum performance.

### 2. Frontend & Design

- **Styling**: **Tailwind CSS 4** (Zero-runtime, maximum performance).
- **Icons**: Blade UI Kits (Heroicons, FontAwesome, File Icons).
- **SEO Engine**: Dynamic sitemaps, semantic HTML5, and localized SEO aliases for Bukittinggi market dominance.

---

## 📊 Database Schema Overview

| Table          | Purpose                                                   |
| :------------- | :-------------------------------------------------------- |
| `projects`     | Portfolio items with slugs, demo URLs, and release dates. |
| `technologies` | Master data of tech stacks used in projects.              |
| `customers`    | Lead generation and contact form submissions.             |
| `talent`       | Recruitment data and professional CV submissions.         |
| `posts`        | Blog articles and educational content.                    |
| `activity_log` | Detailed audit trails of all system modifications.        |

--

## 📈 SEO Focus (Bukittinggi Target)

The application is hardcoded with high-converting aliases to dominate the local search market:

- `/jasa-pembuatan-website-bukittinggi`
- `/web-developer-bukittinggi`
- `/konsultan-digital-bukittinggi`

---

_Developed with excellence by Faisal Yusra._
