# **📝 Laravel 12 To-Do App (Backend) 🚀**  

This is the **backend** for a **To-Do App**, built with **Laravel** and **MySQL**, providing a RESTful API for a Next.js 15 frontend.

![Laravel 12](./public/logo-laravel.webp "Todo App Screenshot")

---

## **📌 Features**  
✅ CRUD operations for to-dos  
✅ RESTful API endpoints  
✅ Uses **MySQL** as the database  
✅ Handles **CORS** for frontend integration  
✅ Built with **Laravel 10**  

---

## **📂 Project Structure**  
```
todo-app-backend-laravel/
│── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Api/
│   │   │   │   ├── TodoController.php  # Controller for To-Do logic
│   ├── Models/
│   │   ├── Todo.php  # Todo Model
│── database/
│   ├── migrations/
│   │   ├── create_todos_table.php  # Database schema for todos
│── routes/
│   ├── api.php  # API routes
│── .env         # Environment variables
│── composer.json  # Dependencies
│── README.md    # This file
```

---

## **⚙️ Installation & Setup**  
### **1️⃣ Clone the repository**  
```bash
git clone https://github.com/your-username/todo-app-backend-laravel.git
cd todo-app-backend-laravel
```

### **2️⃣ Install dependencies**  
```bash
composer install
```

### **3️⃣ Configure the environment**  
Copy the `.env.example` file and rename it to `.env`:  
```bash
cp .env.example .env
```
Then, update the database configuration in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_db
DB_USERNAME=root
DB_PASSWORD=
```

### **4️⃣ Generate the application key**  
```bash
php artisan key:generate
```

### **5️⃣ Run database migrations**  
```bash
php artisan migrate
```

### **6️⃣ Start the Laravel development server**  
```bash
php artisan serve
```
Your API should now be running at **`http://127.0.0.1:8000`** 🎉

---

## **🔌 API Endpoints**  
| Method | Endpoint           | Description              |
|--------|-------------------|--------------------------|
| GET    | `/api/todos`       | Fetch all todos         |
| POST   | `/api/todos`       | Create a new todo       |
| PUT    | `/api/todos/{id}`  | Update a todo           |
| DELETE | `/api/todos/{id}`  | Delete a todo           |

---

## **📌 CORS Configuration (if needed)**  
If the frontend gets a **CORS policy error**, update `config/cors.php`:  
```php
'allowed_origins' => ['*'],
'allowed_methods' => ['*'],
'allowed_headers' => ['*'],
```
Then clear cache:  
```bash
php artisan config:clear
php artisan cache:clear
```

---

## **🛠 Troubleshooting**  
### **"SQLSTATE[HY000] [1045] Access denied for user"**  
- Ensure your MySQL credentials in `.env` are correct  
- Restart MySQL  

### **"Class 'App\Http\Controllers\Controller' not found"**  
- Ensure `Controller.php` exists in `app/Http/Controllers/`  
- Run:  
  ```bash
  composer dump-autoload
  ```

### **"Route not found" (404 Error)**  
- Check if the API route exists in `routes/api.php`  
- Run:  
  ```bash
  php artisan route:list
  ```

---

## **📌 Next Steps**  
- ✅ Add authentication with Laravel Sanctum  
- ✅ Implement task filtering and search  
- ✅ Add validation for request data  

---

## **📜 License**  
This project is **MIT licensed**. Feel free to use and modify it! 🚀  

---

### Made by `Toscani TENEKE` | `Full-Stack Developer`.
