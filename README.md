# Laravel RESTful APIs Course Project 🎓

> **⚠️ NOTE:** This is an educational project created during a "Laravel RESTful APIs" course. It is **not** a real-world, production-ready application. 

This project demonstrates the creation of a full-featured RESTful API using the Laravel framework. It encompasses various modules such as Authentication, Settings, Locations, Messaging, Domains, and Advertisements, enforcing best practices in routing, controllers, form requests, Eloquent models, and API resources.

---

## 🚀 Features & Modules included

### 1. 🔐 Auth Module 
**(Requires Sanctum Token for authenticated routes)**
- `POST /api/register` – Register a new user.
- `POST /api/login`    – Login and get a Bearer token.
- `POST /api/logout`   – Logout and invalidate the token (Auth Required).

### 2. ⚙️ Settings Module
- `GET /api/settings`  – Retrieve application settings.

### 3. 📍 Location Module (Cities & Districts)
- `GET /api/cities`    – Retrieve all cities.
- `GET /api/districts?city={city_id}` – Retrieve districts filtered by city ID.

### 4. ✉️ Messages Module
- `POST /api/messages` – Send a "Contact Us" or general message.

### 5. 🌐 Domains Module
- `GET /api/domain`    – Retrieve all active domains/categories.

### 6. 📢 Ads Module
- `GET /api/ads`                           – List all ads (Paginated: 1 per page for demonstration).
- `GET /api/ads/latest`                    – Get the 2 most recent ads.
- `GET /api/ads/domain/{domain_id}`        – List ads belonging to a specific domain.
- `GET /api/ads/search?title={search_term}`– Search ads by title.
- `GET /api/ads/myads`                     – Get ads created by the currently authenticated user (Auth Required).
- `POST /api/ads/create`                   – Create a new ad (Auth Required).
- `POST /api/ads/update/{ad_id}`           – Update an existing ad (Auth Required, Owner Only).
- `GET /api/ads/delete/{ad_id}`            – Delete an ad (Auth Required, Owner Only).

---

## ⚙️ Tech Stack & Concepts Covered
- **Framework:** Laravel 10/11
- **Auth:** Laravel Sanctum (Token-based Authentication)
- **Database:** MySQL / SQLite
- **Validation:** Form Requests (e.g., `AdRequest`, `NewMessageRequest`)
- **Responses:** Standardized JSON responses via helper traits (`ApiResponse`)
- **Data Transformation:** API Resources (`AdResource`, `DomainResource`, etc.)
- **Seeding & Factories:** Fake data generation for testing (Users, Domains, Ads).

## 🛠️ Postman Collection
A complete and fully configured Postman collection for this course project can be found in the `collection` directory:
📄 `collection/API Course.postman_collection.json`

Import this file into Postman, setup your variables (`{{API_URL}}` & `{{TOKEN}}`), and you will have ready-to-test endpoints for every route listed above!

---
*Created as part of a Web Development / Laravel API learning journey.*
