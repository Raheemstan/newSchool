<?php
include('dbc.php');
$class = $_GET['class'];
$section = $_GET['section'];
$sql = "SELECT * from students where class_id = $class and section_id = $section";
$result = $link->query($sql);

function getName($table, $id): string {
    global $link;
    $sql = "SELECT 'name' from $table where id = $id";
    $result = $link->query($sql);
    return $result['name'];
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
                <th>Name</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Section</th>
                <th>Date Of Birth</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <!-- <td>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label"><?php echo $row["admission_id"]; ?></label>
                        </div>
                    </td> -->
                    <td class="text-center"><img src="uploads/<?php echo $row["photo_path"]; ?>" width="50" alt="student"></td>
                    <td><?php echo $row["first_name"] . " " . $row['last_name']; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["class_id"]; ?></td>
                    <td><?php echo $row["section_id"]; ?></td>
                    <td><?php echo $row["date_of_birth"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<!-- Student Table Area End Here -->