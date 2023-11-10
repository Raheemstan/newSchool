<?php
include('menu.php');

try {
    $db = new DatabaseHandler();
    $classOptions = $db->fetchData("classes");

    $sectionOptions = $db->fetchData("sections");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!-- Breadcumbs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Students</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>Student Details</li>
    </ul>
</div>
<!-- Breadcumbs Area End Here -->

<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="row">
        <select name="class" class="form-control col-lg-4 col-xl-4 col-4-xxxl" id="class" onselect="">
            <option value="">Select Class</option>
            <?php foreach ($classOptions as $class) : ?>
                <option value="<?= $class['id']; ?>"><?= $class['name']; ?></option>
            <?php endforeach; ?>
        </select> &nbsp;
        <select name="section" class="form-control col-lg-4 col-xl-4 col-4-xxxl" id="section">
            <option value="">Select Section</option>
            <?php foreach ($sectionOptions as $section) : ?>
                <option value="<?= $section['id']; ?>"><?= $section['name']; ?></option>
            <?php endforeach; ?>
        </select>&nbsp;
        <button type="button" class="btn btn-primary col-lg-1 col-xl-1" onclick="fetchStudents()">Search</button>
    </div>
    <hr>
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>About Student</h3>
            </div>
        </div>
        <span id="studentinfo">
            <strong>Select the class and section from the above menu!</strong>
        </span>
    </div>
</div>

<?php
include('footer.php');
?>