Project Overview

This project is a web application for managing employee information. It allows users to view, add, and update employee details using a web interface.

Technologies Used

HTML:

Provides the structure of the web pages.
Contains forms for inputting employee data and displaying it in a table.

CSS:

Styles the HTML elements to improve the appearance of the web page.
Ensures that the table, form inputs, and buttons are visually appealing and consistent.

JavaScript:

Adds interactivity to the web page.
Allows users to dynamically add new rows to the employee table.
Manages notifications using modal pop-ups or Toastr (although Toastr is not currently working).
Adjusts the size and appearance of form fields, such as gender selection boxes.

PHP:

Handles server-side logic for saving and updating employee data.
Connects to a MySQL database to insert or update records based on user input.
Redirects users with a success message upon successful data submission.

MySQL:

Stores employee information in a database.
The database schema includes fields for employee ID, name, email, gender, phone, address, and salary.
Key Features

Dynamic Table Management:

Users can add new rows to the table for additional employee entries.
Each row includes fields for employee ID, name, email, gender, phone, address, and salary.
The gender field uses a dropdown selection for "Male" or "Female".

Notification System:

A modal pop-up is used to notify users when data has been saved successfully.
(Note: Toastr notifications are configured but not currently functioning.)

Database Integration:

PHP scripts handle the connection to the MySQL database.
Data from the forms are inserted or updated in the database based on whether the employee ID already exists.

Responsive Design:

The design adapts to different screen sizes using Bootstrap for styling and layout.

How It Works

Adding/Updating Employees:

Users input employee details into the form and submit it.
The PHP script processes the form data, performs database operations, and redirects with a success message.

Displaying Data:

Employee data is fetched from the database and displayed in a table.
Each row includes input fields pre-populated with existing data, allowing for easy updates.

Handling Notifications:

Upon successful data submission, a modal pop-up is shown to inform the user.
(Toastr notifications were intended for this purpose but are not working currently.)
Setup and Execution

Database Setup:

Ensure MySQL is running and create a database with the required schema.
Populate the employees table with appropriate fields.

Running the Application:

Host the application using a local server environment like XAMPP.
Access the application via a web browser (e.g., Chrome) to interact with the form and table.

Contact For any questions or support, please contact [Banyar Nyi] at banyarnyi1605@gmail.com].

