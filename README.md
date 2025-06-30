
# ⚡ PHP Micro Framework – Build-Your-Own MVC Routing System

Welcome to **phpFrameworkLando**, a lightweight, educational PHP micro-framework designed to teach and showcase the essentials of routing, HTTP request/response handling, and the MVC pattern — built entirely from scratch without heavy frameworks.

---

## 🚀 Highlights

✅ Clean, minimal MVC folder structure
✅ Fast, simple routing via [FastRoute](https://github.com/nikic/FastRoute)
✅ PSR-4 compatible autoloading setup
✅ Custom HTTP Request and Response classes
✅ Designed to be easily extendable (middleware, templating, etc.)
✅ Ready to use with PHP’s built-in server or [Lando](https://lando.dev/)

---

## 📁 Directory Layout

```
phpFrameworkLando/
├── app/                             # Your application code (controllers, models, etc.)
│   └── Controllers/                 # Controller classes responding to routes
│       ├── HomeController.php       # Handles "/" route, returns "Hello World"
│       └── PostController.php       # Handles "/posts/{id}" route, shows post by ID
├── framework/                       # Core micro-framework code
│   ├── Http/                        # HTTP logic
│   │   ├── Kernel.php               # Dispatcher routing requests to controllers/closures
│   │   ├── Request.php              # Parses HTTP requests (GET/POST/cookies)
│   │   └── Response.php             # Builds and sends HTTP responses
│   └── Routing/                     # Routing system
│       └── Route.php                # Static class for defining GET/POST routes
├── public/                          # Web root served by the web server
│   └── index.php                    # Front controller entry point
├── routes/                          # Define application routes here
│   └── web.php                      # Maps URLs to controller actions
├── vendor/                          # Composer dependencies (autoload, FastRoute, etc.)
├── .gitignore                       # Git rules (ignore vendor, logs, etc.)
├── .lando.yml                       # Lando configuration for local dev
├── composer.json                    # Composer config (autoload, dependencies, namespaces)
├── composer.lock                    # Locked dependency versions
```

---

## 🧠 How It Works

* `index.php` serves as the front controller that starts the application.

* The `Request` class pulls data from PHP superglobals.

* `Kernel` matches incoming routes and dispatches to:

  * a closure, or

  * a controller method (\[Controller::class, 'method'])

* `Response` handles sending headers and content back to the client.

---

## 🖥️ Getting Started

1️⃣ Clone the repo:

```
git clone https://github.com/your-username/phpFrameworkLando.git
cd phpFrameworkLando
```

2️⃣ Install dependencies:

```
composer install
```

3️⃣ Run the server:

**Option A — Built-in PHP server**

```
php -S localhost:8000 -t public
```

**Option B — Using Lando**

```
lando start
```

Then open in your browser:

```
http://localhost:8000
http://localhost:8000/posts/1
```

---

## 📦 Composer Autoloading

Verify PSR-4 autoload setup:

```
composer dump-autoload
```

Defined namespaces follow PSR-4:

```
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "Somecode\\Framework\\": "framework/"
    }
}
```

---

## 🛠️ Tech Stack

* 🐘 PHP 8+ — Core language
* 📦 Composer — Dependency and autoload management
* ⚡ FastRoute — High-performance routing library
* 🧠 PSR-4 — Standard for autoloading class files
* 🛤️ Custom Micro-framework — Lightweight routing and dispatch system
* 🖥️ Lando (optional) — Local Docker-based dev environment
* 🌐 PHP Built-in Server — Quick local development

---

