<?php
session_start();
include('menu.php');
include('crudController.php');

try {
    $db = new DatabaseHandler();
    $table = "students";
    $studentId = $_GET['id'];
    $condition = "id = $studentId";
    $data = $db->fetchData($table, $condition);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!-- Breadcrumbs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>Student Details</li>
    </ul>
</div>
<!-- Breadcrumbs Area End Here -->
<?php while ($row = $data->fetch_assoc()) : ?>
    <div class="single-info-details">
        <div class="item-img">
            <img src="uploads/<?= htmlspecialchars($row["photo_path"]); ?>" alt="student">
        </div>
        <div class="item-content">
            <div class="header-inline item-header">
                <h3 class="text-dark-medium font-medium"><?= htmlspecialchars($row["first_name"] . " " . $row['last_name']); ?></h3>
                <div class="header-elements">
                    <ul>
                        <li><a href="#"><i class="fas fa-download"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="info-table table-responsive">
                <table class="table text-nowrap">
                    <tbody>
                        <tr>
                            <td>Admission Number:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["admission_id"]); ?></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["first_name"] . " " . $row['last_name']); ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["gender"]); ?></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["date_of_birth"]); ?></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["phone"]); ?></td>
                        </tr>
                        <tr>
                            <td>Registration Date:</td>
                            <td class="font-medium text-dark-medium"><?= htmlspecialchars($row["created_at"]); ?></td>
                        </tr>
                        <tr>
                            <td>Class:</td>
                            <td class="font-medium text-dark-medium"><?= getName("classes", $row["class_id"]); ?></td>
                        </tr>
                        <tr>
                            <td>Section:</td>
                            <td class="font-medium text-dark-medium"><?= getName("sections", $row["section_id"]); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php include('footer.php'); ?>