🏁 Background

The Umrah travel industry faces increasingly complex operational challenges — from managing pilgrims (jamaah), booking tickets, and organizing accommodations, to providing transparent service updates.
Most travel bureaus still rely on manual spreadsheets or fragmented systems, creating several critical issues:

Operational inefficiency — Data about pilgrims, schedules, payments, and bookings are scattered and hard to synchronize.

Lack of transparency — Pilgrims cannot access real-time updates about ticket and accommodation statuses.

Manual ticket management — Flight, local transport, and service handling are prone to errors and duplication.

Poor internal coordination — Staff struggle to allocate seats and manage peak-season departures effectively.

To solve these problems, the Ticket and Travel Management Umrah application was developed as a centralized digital platform that integrates pilgrim management, ticketing, payment, and journey monitoring in one cohesive system.

🎯 Objectives
1. Digitalization of Processes

Transform manual data management into a centralized digital system to securely store and easily access all pilgrim and ticket information.

2. Operational Efficiency

Simplify travel bureau workflows — from departure scheduling and ticket booking to billing and payment tracking.

3. Transparency & Pilgrim Satisfaction

Provide real-time, accurate information for pilgrims regarding ticket, accommodation, and service statuses to increase trust and service quality.

⚙️ Core Features (Planned / In Development)
Feature	Description
🧾 Pilgrim Management	Register, track, and manage all pilgrim data in one system.
🎫 Ticket & Seat Allocation	Manage flight tickets, seat assignments, and local transport seamlessly.
🏨 Accommodation & Service Coordination	Manage hotel bookings, room allocations, and additional travel services.
💰 Billing & Payment Tracking	Automated invoicing, expense tracking, and credit transparency for each pilgrim.
📅 Schedule & Task Management	Dynamic scheduling for departures, returns, and staff task assignments.
🔔 Real-Time Notification System	Send instant updates for booking confirmations and travel changes.
📊 Reporting & Analytics	Generate operational, financial, and service performance reports.
🏗️ Tech Stack
Layer	Technology
Backend	Laravel 12 (PHP 8.2)
Frontend	Vue 3 + Inertia.js
Database	MySQL
Realtime Updates	Laravel Echo + Pusher (or compatible broadcasting)
Build Tools	Vite / Gulp for Metronic 8 integration
Deployment	Docker-ready configuration / Laravel Forge compatible
🧩 Architecture Overview
├── backend/
│   ├── app/ (Laravel application logic)
│   ├── database/ (migrations, seeders)
│   └── routes/ (API + web)
│
├── frontend/
│   ├── resources/js/ (Vue components, pages)
│   ├── assets/ (Metronic themes, global JS/CSS)
│   └── views/ (Inertia pages)
│
└── docs/
    └── README.md (this file)

🚀 Getting Started
Prerequisites

PHP 8.2+

Node.js 18+

MySQL 8+

Composer & NPM

Laravel CLI

Installation
# 1. Clone the repository
git clone https://github.com/yourusername/umrah-travel-management.git

# 2. Install backend dependencies
composer install

# 3. Install frontend dependencies
npm install

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Migrate and seed database
php artisan migrate --seed

# 6. Run the development server
php artisan serve
npm run dev

🧠 Vision Roadmap
Phase	Focus	Status
Phase 1	Core travel & ticket management	✅ In progress
Phase 2	Payment gateway & credit transparency	🔄 Planned
Phase 3	Real-time pilgrim mobile dashboard	🔄 Planned
Phase 4	AI-assisted scheduling & demand forecasting	🧩 Future scope
🤝 Contributing

Contributions, ideas, and issue reports are welcome!
Please open a pull request or submit an issue to help improve the project.

📄 License

This project is licensed under the MIT License
.

💬 Contact

Product Manager: [Achamd]
📧 Digi@cake.com

🌐 DigiCake.com
