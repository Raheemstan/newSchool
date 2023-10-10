<?php
include('dbc.php');

$link->select_db($dbname);

// Create classes table
$sql = "CREATE TABLE IF NOT EXISTS classes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "Table 'classes' created successfully\n";
} else {
    echo "Error creating table 'classes': " . $link->error;
}

// Insert sample data into the classes table
$insertClassData = "INSERT INTO classes (name) VALUES 
    ('Jss1'),
    ('Jss2'),
    ('Jss3'),
    ('Sss1'),
    ('Sss2'),
    ('Sss3')";

if ($link->query($insertClassData) === TRUE) {
    echo "Sample data inserted into 'classes' table successfully\n";
}

// Create section table
$sql = "CREATE TABLE IF NOT EXISTS sections (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "Table 'sections' created successfully\n";
} else {
    echo "Error creating table 'sections': " . $link->error;
}

// Insert sample data into the sections table
$insertSectionData = "INSERT INTO sections (name) VALUES
    ('A'),
    ('B'),
    ('C')";

if ($link->query($insertSectionData) === TRUE) {
    echo "Sample data inserted into 'sections' table successfully\n";
}
// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    level TINYINT(1) NOT NULL
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'users' created successfully\n";
} else {
    echo "Error creating table: " . $link->error;
}

// Insert sample data into the users table
$insertUsersData = "INSERT INTO users (username, password, level) VALUES 
    ('admin', '" . password_hash('admin', PASSWORD_DEFAULT) . "', 1),
    ('user2', '" . password_hash('password2', PASSWORD_DEFAULT) . "', 1),
    ('user3', '" . password_hash('password3', PASSWORD_DEFAULT) . "', 1)";

if ($link->query($insertUsersData) === TRUE) {
    echo "Sample data inserted into 'users' table successfully\n";
} else {
    echo "Error inserting sample data into 'users' table: " . $link->error;
}

// Create students table
$sql = "
CREATE TABLE IF NOT EXISTS students (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL,
    date_of_birth DATE NOT NULL,
    class_id VARCHAR(50),
    section_id VARCHAR(50),
    admission_id VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(20),
    photo_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";
if ($link->query($sql) === TRUE) {
    echo "Table 'students' created successfully\n";
} else {
    echo "Error creating table 'students': " . $link->error;
}

// Create teachers table
$sql = "CREATE TABLE IF NOT EXISTS teachers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    hire_date DATE NOT NULL,
    phone varchar(15) NOT NULL,
    specialization VARCHAR(255)
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'teachers' created successfully\n";
} else {
    echo "Error creating table 'teachers': " . $link->error;
}

// Insert sample data into the teachers table
$insertTeachersData = "INSERT INTO teachers (first_name, last_name, hire_date, phone, specialization) VALUES 
    ('Alice', 'Johnson', '2010-03-20', '09071140264', 'Math'),
    ('Bob', 'Smith', '2015-06-10', '09071140264', 'English'),
    ('Charlie', 'Brown', '2012-09-15', '09071140264', 'Science')";

if ($link->query($insertTeachersData) === TRUE) {
    echo "Sample data inserted into 'teachers' table successfully\n";
} else {
    echo "Error inserting sample data into 'teachers' table: " . $link->error;
}

// Create courses table
$sql = "CREATE TABLE IF NOT EXISTS courses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL,
    description TEXT,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'courses' created successfully\n";
} else {
    echo "Error creating table 'courses': " . $link->error;
}

// Insert sample data into the courses table
$insertCoursesData = "INSERT INTO courses (course_name, description, start_date, end_date) VALUES 
    ('Math 101', 'Introduction to Mathematics', '2023-01-15', '2023-05-20'),
    ('English 201', 'Advanced English Literature', '2023-02-10', '2023-06-25'),
    ('Science 301', 'Physics and Chemistry', '2023-03-05', '2023-07-15')";

if ($link->query($insertCoursesData) === TRUE) {
    echo "Sample data inserted into 'courses' table successfully\n";
} else {
    echo "Error inserting sample data into 'courses' table: " . $link->error;
}

// Create sessions table
$sql = "CREATE TABLE IF NOT EXISTS sessions (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    session_name VARCHAR(255) NOT NULL
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'sessions' created successfully\n";
} else {
    echo "Error creating table 'sessions': " . $link->error;
}

// Insert sample data into the sessions table
$insertSessionsData = "INSERT INTO sessions (session_name) VALUES 
    ('2022-2023'),
    ('2023-2024'),
    ('2024-2025')";

if ($link->query($insertSessionsData) === TRUE) {
    echo "Sample data inserted into 'sessions' table successfully\n";
} else {
    echo "Error inserting sample data into 'sessions' table: " . $link->error;
}

// Create terms table
$sql = "CREATE TABLE IF NOT EXISTS terms (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    term_name VARCHAR(255) NOT NULL
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'terms' created successfully\n";
} else {
    echo "Error creating table 'terms': " . $link->error;
}

// Insert sample data into the terms table
$insertTermsData = "INSERT INTO terms (term_name) VALUES 
    ('Fall'),
    ('Spring'),
    ('Summer')";

if ($link->query($insertTermsData) === TRUE) {
    echo "Sample data inserted into 'terms' table successfully\n";
} else {
    echo "Error inserting sample data into 'terms' table: " . $link->error;
}

// Create attendance table
$sql = "CREATE TABLE IF NOT EXISTS attendance (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id INT(6) UNSIGNED,
    date DATE NOT NULL,
    status ENUM('Present', 'Absent') NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(id)
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'attendance' created successfully\n";
} else {
    echo "Error creating table 'attendance': " . $link->error;
}

// Insert sample data into the attendance table
$insertAttendanceData = "INSERT INTO attendance (student_id, date, status) VALUES 
    (1, '2023-04-01', 'Present'),
    (2, '2023-04-01', 'Absent'),
    (3, '2023-04-01', 'Present')";

if ($link->query($insertAttendanceData) === TRUE) {
    echo "Sample data inserted into 'attendance' table successfully\n";
} else {
    echo "Error inserting sample data into 'attendance' table: " . $link->error;
}

// Create assessment table
$sql = "CREATE TABLE IF NOT EXISTS assessment (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_id INT(6) UNSIGNED,
    subject VARCHAR(255) NOT NULL,
    marks INT NOT NULL,
    date DATE NOT NULL,
    FOREIGN KEY (student_id) REFERENCES students(id)
)";
if ($link->query($sql) === TRUE) {
    echo "Table 'assessment' created successfully\n";
} else {
    echo "Error creating table 'assessment': " . $link->error;
}

// Insert sample data into the assessment table
$insertAssessmentData = "INSERT INTO assessment (student_id, subject, marks, date) VALUES 
    (1, 'Math 101', 85, '2023-04-15'),
    (2, 'English 201', 78, '2023-04-15'),
    (3, 'Science 301', 92, '2023-04-15')";

if ($link->query($insertAssessmentData) === TRUE) {
    echo "Sample data inserted into 'assessment' table successfully\n";
} else {
    echo "Error inserting sample data into 'assessment' table: " . $link->error;
}

$link->close();
