# UrbanPest — Precision Commercial Pest Control & Facility Biosecurity

A commercial-grade web application and administration portal for **UrbanX Commercial Pest Control** (Perth & Western Australia).

---

## 🚀 DevOps & Deployment Guide

### System Requirements
* **PHP Runtime**: PHP 8.0, 8.1, 8.2, or 8.3+
* **PHP Extensions**: `json`, `session`, `fileinfo` (standard in all default PHP installations)
* **Web Server**: Apache (with `mod_rewrite` & `mod_headers`), Nginx, Caddy, or IIS
* **Database**: None required (Zero-SQL JSON datastore in `/data/` directory)

### File & Directory Permissions
Ensure the web server user (e.g. `www-data`, `nginx`, or `apache`) has read/write permissions on the `data/` directory:
```bash
chmod 775 data
chmod 664 data/*.json
```

---

## 🌐 Web Server Routing Setup

### 1. Apache Deployment (Automatic)
The included `.htaccess` file in the root directory contains full rewrite rules and defensive security headers:
* Clean URL routing: `/services/{slug}`, `/industries/{slug}`, `/insights/{slug}`, `/book`
* Directory index protection (`Options -Indexes`)
* Access restriction to sensitive files (`.json`, `.ini`, `.env`, `.log`)
* Security headers (`X-Frame-Options`, `X-Content-Type-Options`, `X-XSS-Protection`, `Referrer-Policy`)

### 2. Nginx Deployment
If deploying on Nginx, add the following location block to your server configuration:

```nginx
server {
    listen 80;
    server_name yourdomain.com.au;
    root /var/www/urbanpest;
    index index.php;

    # Clean URL Rewrites
    location /services/ {
        rewrite ^/services/([a-z0-9-]+)/?$ /services-single.php?slug=$1 last;
        rewrite ^/services/?$ /services.php last;
    }
    location /industries/ {
        rewrite ^/industries/([a-z0-9-]+)/?$ /industries-single.php?slug=$1 last;
        rewrite ^/industries/?$ /industries.php last;
    }
    location /insights/ {
        rewrite ^/insights/([a-z0-9-]+)/?$ /insights-single.php?slug=$1 last;
        rewrite ^/insights/?$ /insights.php last;
    }
    location = /book {
        rewrite ^/book/?$ /book.php last;
    }

    # Block direct access to data directory files
    location ^~ /data/ {
        deny all;
        return 403;
    }

    # Pass PHP scripts to FastCGI server
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
}
```

### 3. Local Development (Built-in Server)
```bash
php -S localhost:8000 router.php
```

---

## 🔑 Administrative Portal Access

* **Admin URL**: `http://localhost:8000/admin/` (or `/admin/login.php`)
* **Default Username**: `admin`
* **Default Password**: `UrbanPest2026!`
* *(Can be changed anytime under Admin Settings & WhatsApp panel)*

### Admin Capabilities
* **Dashboard KPI Telemetry**: Total commercial enquiries, dispatch requests, active pipeline, and won contracts.
* **Leads & Enquiries Management**: Filter, view, update status (`new`, `contacted`, `survey_scheduled`, `closed_won`), and 1-click WhatsApp follow-up.
* **Service Booking Dispatch**: Review specific service inspection requests submitted from service pages.
* **Service Catalog & Custom Service Publishing**: Toggle existing services on/off, or create new custom services live on the site.
* **Global Settings**: Configure contact details, direct telephone, email (`info@urbanxpestcontrol.com`), headquarters, and WhatsApp message templates.
* **Export Leads (CSV)**: One-click export of customer records for CRM or reporting.

---

## 📁 Directory Structure

```
/urbanpest
├── /admin               # Protected Admin Portal (Dashboard, Leads, Bookings, Services, Settings)
├── /assets              # High-resolution commercial assets, branded logos & favicons
├── /css                 # Production stylesheets (admin.css, base.css, components.css, layout.css, responsive.css)
├── /data                # JSON Datastores & configuration (leads, bookings, settings, services)
├── /js                  # Client scripts (nav, carousel, counters, modals, form validation)
├── /partials            # Modular PHP templates (header, mega-menu, footer, cards, modals)
├── .htaccess            # Apache configuration with clean URL rewrites & security headers
├── .gitignore           # Git ignore list
├── book.php             # Dedicated direct service booking portal
├── booking-handler.php  # Booking submission handler with CSRF and rate limiting
├── contact.php          # Commercial enquiry form & contact details
├── contact-handler.php  # Contact form handler
├── index.php            # Homepage
├── industries.php       # Commercial industries hub
├── industries-single.php# Specific industry sector template
├── insights.php         # Technical insights & biosecurity articles
├── insights-single.php  # Individual article view
├── router.php           # Local PHP server router (clean URLs emulator)
├── services.php         # Commercial pest services hub
├── services-single.php  # Individual service view
└── README.md            # DevOps and deployment documentation
```
