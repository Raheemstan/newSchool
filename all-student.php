<?php
include('dbc.php');

// Sanitize input to prevent SQL injection
$class = (int) $_GET['class'];
$section = (int) $_GET['section'];

// Use prepared statements to prevent SQL injection
$sql = "SELECT * FROM students WHERE class_id = ? AND section_id = ? order by admission_id";
$stmt = $link->prepare($sql);
$stmt->bind_param('ii', $class, $section);
$stmt->execute();
$result = $stmt->get_result();
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
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td class="text-center"><img src="uploads/<?= htmlspecialchars($row["photo_path"]); ?>" width="50" alt="student"></td>
                    <td><?= htmlspecialchars($row["admission_id"]); ?></td>
                    <td>
                        <a href="student-info.php?id=<?= print sha1($row['id']); ?>"><?= htmlspecialchars($row["first_name"] . " " . $row['last_name']); ?>
                        </a>
                    </td>
                    <td><?= htmlspecialchars($row["gender"]); ?></td>
                    <td><?= htmlspecialchars($row["date_of_birth"]); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<!-- Student Table Area End Here -->