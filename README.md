# iDelta starter (Phase 0 + database foundation)

Copy these folders over a fresh Laravel project (merge, overwrite when asked).
Not run yet: this was written without PHP available, so run step 5 and send me any error.

1. Install PHP 8.3+, Composer, Node 20+, MySQL (Laragon, XAMPP or Herd all work).
2. `composer create-project laravel/laravel idelta` (blank app, no starter kit), then `cd idelta`.
3. Copy this starter's `app`, `config`, `database`, `resources`, `routes` into the project.
4. In `.env` set DB_*, ADMIN_EMAIL and ADMIN_PASSWORD (use a strong one).
5. `php artisan migrate:fresh --seed`
6. `npm install alpinejs` and make sure Tailwind 4 is present: `npm install tailwindcss @tailwindcss/vite`
   (a fresh Laravel app usually has it; the vite config needs the `@tailwindcss/vite` plugin).
7. Download Plus Jakarta Sans (variable, WOFF2) into `public/fonts/PlusJakartaSans-Variable.woff2`.
8. `npm run dev` and `php artisan serve`, then open http://localhost:8000
9. `git init`, commit, push to a private GitHub repo.
