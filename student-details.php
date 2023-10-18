<?php
$page = "Students Details";
include('menu.php');
?>
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>Student Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="row">
        <select name="class" class="form-control col-lg-4 col-xl-4 col-4-xxxl" id="class" onselect="">
            <option value="">Select Class</option>
            <?php
            $sql = "select * from classes";
            $result = $link->query($sql);
            while ($class = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
            <?php
            }
            ?>
        </select> &nbsp;
        <select name="section" class="form-control col-lg-4 col-xl-4 col-4-xxxl" id="section">
            <option value="">Select Section</option>
            <?php
            $sql = "select * from sections";
            $result = $link->query($sql);
            while ($class = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?></option>
            <?php
            }
            ?>
        </select>&nbsp;
        <button type="button" class="btn btn-primary col-lg-1 col-xl-1" onclick="fetchStudents()">Search</button>
    </div>
    <hr>
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Students Data</h3>
            </div>
        </div>
        <span id="studentinfo"></span>
    </div>
</div>
<script>
    function fetchStudents() {
        const classID = document.getElementById("class").value;
        const sectionID = document.getElementById("section").value;
        const field = document.getElementById("studentinfo");
        if (classID === '' || sectionID === '') {
            field.innerHTML = "<span>Select class and section</span>";
        }
        field.innerHTML = "<span>Loading...</span>";

        // Make an AJAX request to fetch LGAs based on the selected state
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "all-student.php?class=" + classID + "&section=" + sectionID, true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                field.innerHTML = xhr.responseText;
            }
        };
        xhr.send();
    }

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
