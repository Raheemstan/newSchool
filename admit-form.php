<?php
$page = "Admission Form";
include('menu.php');
?>
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Student Admit Form</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Students</h3>
                </div>
            </div>
            <form id="studentForm" class="new-added-form" method="POST" action="submit_student.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" placeholder="" name="first_name" class="form-control" required>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" placeholder="" name="last_name" class="form-control" required>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select name="gender" class="select2">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="text" name="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker" data-position='bottom right' required>
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Class *</label>
                        <select name="class" class="select2" required>
                            <option value="">Please Select Class *</option>
                            <?php
                            $classQuery = "SELECT * FROM classes";
                            $classResult = $link->query($classQuery);

                            if ($classResult->num_rows > 0) {
                                while ($class = $classResult->fetch_assoc()) {
                                    echo "<option value=\"{$class['id']}\">{$class['name']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Section *</label>
                        <select name="section" class="select2" required>
                            <option value="">Please Select Section *</option>
                            <?php
                            $sectionQuery = "SELECT * FROM sections";
                            $sectionResult = $link->query($sectionQuery);

                            if ($sectionResult->num_rows > 0) {
                                while ($section = $sectionResult->fetch_assoc()) {
                                    echo "<option value=\"{$section['id']}\">{$section['name']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Admission ID</label>
                        <input type="text" placeholder="" name="adm_no" class="form-control" required>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="" name="phone" class="form-control" required>
                    </div>
                    <div class="col-lg-3 col-6 form-group mg-t-30">
                        <img id="imagePreview" src="#" alt="Preview" style="display: none; max-width: 150px; max-height: 150px;">
                    </div>
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                        <input type="file" name="student_photo" id="studentPhotoInput" class="form-control-file" accept="image/*">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- Admit Form Area End Here -->

    <?php
    include('footer.php');
