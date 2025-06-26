# 📌 Simple PHP ToDo List Web App

A basic, fully functional ToDo list website built with **PHP**, **MySQL**, **HTML**, and **CSS**. This project demonstrates core web development concepts like **CRUD operations**, server-side scripting, and database interaction — perfect for beginners or for showcasing your backend skills in a resume.

---

## 🚀 **Features**
- ✅ Add tasks  
- 📄 View tasks  
- ✅ Mark tasks as completed  
- ❌ Delete tasks  
- 🎨 Clean and responsive UI with custom CSS  

---

## 📁 **Project Structure**

```
/todo-app
  ├── index.php         # Main page with task list
  ├── add.php           # Handles task addition
  ├── delete.php        # Handles task deletion
  ├── complete.php      # Marks task as completed
  ├── db.php            # Database connection script
  ├── style.css         # Custom CSS styling
  └── README.md         # This file
```
🛠️ Setup Instructions

✅ Clone or Download this project.

📂 Place it inside your XAMPP htdocs or WAMP www directory.

⚙️ Create a MySQL Database:

Open phpMyAdmin.

Run the following SQL:
```
CREATE DATABASE todo;
USE todo;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL
);
```

🧠 Update DB credentials in db.php if needed:

`$conn = new mysqli('localhost', 'root', '', 'todo');`

🌐 Open browser and go to:

`http://localhost/todo-app/index.php`

💡 Possible Improvements
Here are some features you can add to make this project even better:

```
Feature	Description
🔐 User Authentication	Allow users to register and log in to manage their own tasks
🗓️ Deadlines	Let users set deadlines or due dates
✅ Completion Checkbox	Use checkboxes to mark tasks completed instead of a separate page
⚡ AJAX	Use JavaScript/AJAX to add/delete tasks without reloading the page
📱 Mobile Responsive	Improve layout for smaller screens
🧾 Edit Task	Allow users to edit/update existing tasks
☁️ Hosting	Deploy it online with 000webhost, InfinityFree, or Vercel + backend API`
```

👨‍💻 Author
Siwam Kumar Singh
Backend/Web Developer
📫 LinkedIn (https://www.linkedin.com/in/siwam-singh-029825286/)