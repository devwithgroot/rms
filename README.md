# Routine Management System

The Routine Management System is a web-based application designed to manage timetables, subjects, electives, and more for an Engineering College (e.g., HIT, IT department). The system allows various users (routine committee members, faculty, technical staff, and students) to interact with the platform for generating and managing routine schedules, managing elective preferences, detecting timetable clashes, and more.

## Tech Stack

- **Backend**: Java, Spring Boot, Spring Data JPA
- **Frontend**: HTML, CSS, JavaScript (AJAX)
- **Database**: MySQL
- **Authentication** (Optional): Spring Security for role-based authentication
- **API Documentation** (Optional): Swagger UI

## Features

### 1. **Routine Committee**:
   - Fetch subject details based on semester and year.
   - View and manage elective choices for students.
   - Generate routine reports for theory, practical, and electives.
   - Manage faculty assignments to courses.

### 2. **Students**:
   - Select electives based on their semester/year.
   - Submit elective preferences.

### 3. **Faculties and TA’s**:
   - View and assign subjects to the available slots in the timetable.
   - Provide availability preferences.

### 4. **Timetable Management**:
   - Admin and committee members will create a 5-day timetable.
   - Collision detection for class timings and room assignments.
   - Room and faculty matrix generation.
