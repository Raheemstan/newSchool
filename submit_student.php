<?php
include('dbc.php');

// Function to handle redirection and exit
function redirect($message = null, $type = 'success')
{
    if (!empty($message)) {
        $_SESSION[$type] = $message;
    }
    header("Location: admit-form.php");
    exit();
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Retrieve the form data
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $dob = date('Y-m-d', strtotime($_POST['dob']));
        $class_id = $_POST['class'];
        $section_id = $_POST['section'];
        $adm_no = $_POST['adm_no'];
        $phone = $_POST['phone'];
        $image = $_FILES['student_photo'];

        // Check if an image was uploaded
        if (!empty($image['name'])) {
            // Check if the uploaded file is an image
            $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
            if (!in_array($image['type'], $allowed_types)) {
                throw new Exception("Please upload a valid image file.");
            }

            // Move the uploaded file to a permanent location
            $upload_dir = 'uploads/';
            $filename = uniqid() . '_' . $image['name'];
            $destination = $upload_dir . $filename;
            if (!move_uploaded_file($image['tmp_name'], $destination)) {
                throw new Exception("Error in uploading the image file.");
            }
        } else {
            $filename = null;
        }

        // Validate the form data (you can add more validation rules as needed)
        if (empty($first_name) || empty($last_name) || empty($gender) || empty($class_id) || empty($section_id) || empty($adm_no)) {
            throw new Exception("Please fill out all required fields.");
        }

        // If the form data is valid, insert it into the database using prepared statements
        $sql = "INSERT INTO students (first_name, last_name, gender, date_of_birth, class_id, section_id, admission_id, phone, photo_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $link->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssssss", $first_name, $last_name, $gender, $dob, $class_id, $section_id, $adm_no, $phone, $filename);
            if ($stmt->execute()) {
                $stmt->close();
                redirect("Student added successfully!");
            } else {
                $stmt->close();
                throw new Exception("Error: " . $stmt->error);
            }
        } else {
            throw new Exception("Error in preparing the SQL statement.");
        }
    }
} catch (Exception $e) {
    redirect($e->getMessage(), 'error');
}
