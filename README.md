Employee Management System

Overview

This project is an Employee Management System built with Java Spring Boot and Thymeleaf. It allows you to manage employee data, including adding new employees, viewing a list of employees, and updating employee information.

Features

View Employees: Display a list of employees.
Add Employee: Form to add new employee details.
Update Employee: Functionality to update existing employee details.

Technologies Used

Java: Programming language used for the backend.
Spring Boot: Framework for building the backend.
Thymeleaf: Template engine for rendering HTML views.
MySQL: Database for storing employee data.
Bootstrap: CSS framework for styling the web pages.

Setup Instructions

Prerequisites

Java Development Kit (JDK) 11 or later
Maven: For dependency management and building the project
MySQL Database: Ensure MySQL server is running and you have created a database
Steps to Run the Project
Clone the Repository

COMMAND

git clone <repository-url>
Navigate to the Project Directory

COMMAND

cd EmployeeManagementSystem
Update application.properties

Edit src/main/resources/application.properties to match your MySQL setup:

PROPERTIES

spring.datasource.url=jdbc:mysql://localhost:3306/employee_db
spring.datasource.username=root
spring.datasource.password=password
spring.jpa.hibernate.ddl-auto=update
Build the Project

Use Maven to build the project:

COMMAND

mvn clean install
Run the Application

Start the Spring Boot application:

COMMAND

mvn spring-boot:run
Access the Application

Open your web browser and go to http://localhost:8080 to see the Employee Management System.

Directory Structure
________________________________________________________________________________________

src
 └── main
     ├── java
     │   └── com.example.demo
     │       ├── controller
     │       │   └── EmployeeController.java
     │       ├── entity
     │       │   └── Employee.java
     │       ├── repository
     │       │   └── EmployeeRepository.java
     │       └── DemoApplication.java
     └── resources
         ├── application.properties
         └── templates
             └── index.html
________________________________________________________________________________________

Known Issues
Port Conflict: If the application fails to start due to port conflicts, ensure no other applications are using port 8080 or change the port in application.properties.
Contributing
If you would like to contribute to this project, please fork the repository and create a pull request with your changes.

License
This project is licensed under the MIT License.

Contact
For any questions or support, please contact [Banyar Nyi] at banyarnyi1605@gmail.com].
