<?php
$page = "All Students";
include('menu.php');
// Fetch student data from the database
$sql = "SELECT * FROM students";
$result = $link->query($sql);
?>

<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>All Students</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->

<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Students Data</h3>
            </div>
        </div>
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
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">ID</label>
                            </div>
                        </th>
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
                    // Loop through the fetched data and populate the table rows
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label"><?php echo $row["admission_id"]; ?></label>
                                </div>
                            </td>
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
    </div>
</div>
<!-- Student Table Area End Here -->

<!-- JavaScript for Search -->
<script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows
        for (i = 0; i < tr.length; i++) {
            var displayRow = false;

            // Loop through all columns in the current row
            for (j = 0; j < tr[i].cells.length; j++) {
                td = tr[i].cells[j];

                if (td) {
                    txtValue = td.textContent || td.innerText;

                    // Check if any column matches the search query
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        displayRow = true;
                        break; // Break the loop if a match is found in any column
                    }
                }
            }
            // Show or hide the row based on search result
            if (displayRow) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>


<?php
include('footer.php');
?>