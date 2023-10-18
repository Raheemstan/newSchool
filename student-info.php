<?php
include('dbc.php');
$class = $_GET['class'];
$section = $_GET['section'];
$sql = "SELECT * from students where class_id = $class and section_id = $section";
?>
<div class="single-info-details">
    <div class="item-img">
        <img src="img/figure/student1.jpg" alt="student">
    </div>
    <div class="item-content">
        <div class="header-inline item-header">
            <h3 class="text-dark-medium font-medium">Jessia Rose</h3>
            <div class="header-elements">
                <ul>
                    <li><a href="#"><i class="far fa-edit"></i></a></li>
                    <li><a href="#"><i class="fas fa-print"></i></a></li>
                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                </ul>
            </div>
        </div>
        <p>Aliquam erat volutpat. Curabiene natis massa sedde lacu stiquen sodale
            word moun taiery.Aliquam erat volutpaturabiene natis massa sedde sodale
            word moun taiery.</p>
        <div class="info-table table-responsive">
            <table class="table text-nowrap">
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td class="font-medium text-dark-medium">Jessia Rose</td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td class="font-medium text-dark-medium">Female</td>
                    </tr>
                    <tr>
                        <td>Father Name:</td>
                        <td class="font-medium text-dark-medium">Steve Jones</td>
                    </tr>
                    <tr>
                        <td>Mother Name:</td>
                        <td class="font-medium text-dark-medium">Naomi Rose</td>
                    </tr>
                    <tr>
                        <td>Date Of Birth:</td>
                        <td class="font-medium text-dark-medium">07.08.2016</td>
                    </tr>
                    <tr>
                        <td>Religion:</td>
                        <td class="font-medium text-dark-medium">Islam</td>
                    </tr>
                    <tr>
                        <td>Father Occupation:</td>
                        <td class="font-medium text-dark-medium">Graphic Designer</td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td class="font-medium text-dark-medium">jessiarose@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Admission Date:</td>
                        <td class="font-medium text-dark-medium">07.08.2019</td>
                    </tr>
                    <tr>
                        <td>Class:</td>
                        <td class="font-medium text-dark-medium">2</td>
                    </tr>
                    <tr>
                        <td>Section:</td>
                        <td class="font-medium text-dark-medium">Pink</td>
                    </tr>
                    <tr>
                        <td>Roll:</td>
                        <td class="font-medium text-dark-medium">10005</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td class="font-medium text-dark-medium">House #10, Road #6, Australia</td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td class="font-medium text-dark-medium">+ 88 98568888418</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>