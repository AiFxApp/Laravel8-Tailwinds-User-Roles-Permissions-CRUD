## Admin Dashoard:  User/Roles/Permissions with Tailwind Theme

- - - - -

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer update__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to admin dashboard with default credentials __ai.fx.intel@gmail.com__ - __Admin@2022__

## License

Free to use and re-use any way you want.

---

Structure / Folders (where is everything?)

* Routes in `wep.php` included
* Routes in `api.php` included
* Views `Resources\Views\Admin` included
* Database `Seeder` & `Migrations` included
```
- Migrations include:
1. Users
2. Roles
3. Permissions
4. Permission_Role pivot table
5. Role_User pivot table
```
* Controllers:
1. Admin - with User / Roles / Permissions
2. Api - with User / Roles / Permissions

* Model (not on a Models Folder but just `App\`)

* Requests Folder (CRUD Functions)

* Resources\Admin
