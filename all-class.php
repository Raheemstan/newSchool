<?php
// Include necessary files and establish database connection
include('menu.php');

// Fetch classes and sections from the database
$query = mysqli_query($link, "SELECT * FROM classes");

// Function to fetch the number of male and female students in a section
function fetchStudentCount($class, $section, $gender)
{
    global $link;
    // Corrected the SQL query to count students by gender
    $result = mysqli_query($link, "SELECT COUNT(id) as student_count FROM students WHERE class_id = $class AND section_id = $section AND gender = '$gender'");
    $row = mysqli_fetch_assoc($result);
    return $row['student_count'];
}

// HTML content starts here
?>
<!-- Breadcrumbs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Classes</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>All Classes</li>
    </ul>
</div>
<!-- Breadcrumbs Area End Here -->
<!-- Class Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Classes</h3>
            </div>
        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by ID ..." class="form-control">
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Section</th>
                        <th>Male Count</th>
                        <th>Female Count</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through classes
                    while ($classRow = mysqli_fetch_assoc($query)) :
                    ?>
                        <tr>
                            <td>
                                <div>
                                    <label>#<?php echo $classRow['id'] ?></label>
                                </div>
                            </td>
                            <td><?php echo $classRow['name'] ?></td>
                            <td>
                                <?php
                                $classId = $classRow['id'];
                                // Fetch sections for this class
                                $sectionsQuery = mysqli_query($link, "SELECT * FROM sections");
                                
                                while ($section = mysqli_fetch_assoc($sectionsQuery)) {
                                    // Display section name
                                    echo '<td>' .$section['name'] . '</td>';
                                    
                                    // Initialize counters for males and females for this section
                                    $maleCount = fetchStudentCount($classId, $section['id'], 'Male');
                                    $femaleCount = fetchStudentCount($classId, $section['id'], 'Female');
                                    
                                    // Print the counts in separate columns
                                    echo '<td>' . $maleCount . '</td>';
                                    echo '<td>' . $femaleCount . '</td>';
                                    echo '<td>' . ($maleCount + $femaleCount) . '</td>';
                                }
                                ?>
                            </td>
                            <td></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>
