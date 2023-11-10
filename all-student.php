<?php
session_start();
include('DatabaseHandler.php');

try {
    $db = new DatabaseHandler();

    // Sanitize input to prevent SQL injection
    $class = (int) $_GET['class'];
    $section = (int) $_GET['section'];

    // Use prepared statements to prevent SQL injection
    $condition = "class_id = $class AND section_id = $section ORDER BY admission_id";
    $students = $db->fetchData('students', $condition);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!-- Student Table Area Start Here -->
<!-- Search form -->
<form class="mg-b-20" id="searchForm">
    <div class="row gutters-8">
        <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
            <input type="text" id="search" placeholder="Search..." class="form-control" oninput="myFunction()">
        </div>
    </div>
</form>

<div class="table-responsive">
    <table class="table display data-table text-nowrap" id="table">
        <thead>
            <tr>
                <th></th>
                <th>Admission No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date Of Birth</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td class="text-center"><img src="uploads/<?= htmlspecialchars($student["photo_path"]); ?>" width="50" alt="student"></td>
                    <td><?= htmlspecialchars($student["admission_id"]); ?></td>
                    <td>
                        <a href="student-info.php?id=<?= print sha1($student['id']); ?>">
                            <?= htmlspecialchars($student["first_name"] . " " . $student['last_name']); ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($student["gender"]); ?></td>
                    <td><?= htmlspecialchars($student["date_of_birth"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Student Table Area End Here -->