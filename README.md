Flask To-Do List Application

Overview
This is a simple To-Do List web application built with Flask, a lightweight web framework for Python. It demonstrates basic CRUD operations (Create, Read, Delete) using Flask for the backend and plain HTML/CSS/JavaScript for the frontend.

Features

Add Tasks: Users can add new tasks to their to-do list.
View Tasks: Users can see a list of all tasks.
Delete Tasks: Users can remove tasks from their to-do list.

Project Structure

flask_todo_app/
│
├── venv/               # Virtual environment directory
├── app.py              # The main Flask application
├── static/             # Static files (CSS, JS, images)
│   └── style.css       # Your CSS file here
└── templates/          # Directory for HTML templates
    └── index.html      # The front-end HTML file
    
Requirements

Python 3.x
Flask

Installation
Clone the repository (if applicable):

COMMAND

git clone <repository-url>
cd flask_todo_app
Set up the virtual environment:

COMMAND

python -m venv venv
Activate the virtual environment:

On Windows (Command Prompt):

COMMAND

venv\Scripts\activate
On Windows (PowerShell):

COMMAND

.\venv\Scripts\Activate
On macOS/Linux:

COMMAND

source venv/bin/activate
Install Flask:

COMMAND

pip install Flask
Running the Application
Start the Flask server:

COMMAND

python app.py

Access the application:

Open your web browser and go to http://127.0.0.1:5000/.

Usage
Add a Task: Enter a task in the input field and click "Add Task."
Delete a Task: Click "Delete" next to a task to remove it from the list.
Contributing
If you have suggestions or improvements, feel free to fork the repository and submit a pull request.

License
This project is licensed under the MIT License.
