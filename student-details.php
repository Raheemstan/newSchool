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
