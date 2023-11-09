<?php
$page = "Student Details";
include('menu.php');
include('DatabaseHandler.php');

try {
    $db = new DatabaseHandler();
    $table = "students";
    $studentId = $_GET['id']; // Corrected the variable name
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

<?php while ($row = $data->fetch_assoc()) : ?> <!-- Corrected the variable name -->
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
                        <!-- Add other table rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php include('footer.php'); ?>
