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
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Sections</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($classRow = mysqli_fetch_assoc($query)) :
                        $sum = 0;
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
                                
                                // Initialize arrays to store counts for each section
                                $maleCounts = array();
                                $femaleCounts = array();
                                
                                while ($section = mysqli_fetch_assoc($sectionsQuery)) {
                                    // Display section name
                                    echo $section['name'] . '<br>';
                                    
                                    // Count males and females for this section
                                    $maleCount = fetchStudentCount($classId, $section['id'], 'Male');
                                    $femaleCount = fetchStudentCount($classId, $section['id'], 'Female');
                                    $sum += $maleCount + $femaleCount;
                                    // Store counts in arrays
                                    $maleCounts[] = $maleCount;
                                    $femaleCounts[] = $femaleCount;
                                }
                                
                                // Display the counts under respective columns
                                echo '<td>' . implode('<hr>', $maleCounts) . '</td>';
                                echo '<td>' . implode('<hr>', $femaleCounts) . '</td>';
                            ?>
                            </td>
                            <td><?php echo $sum; ?></td>
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
