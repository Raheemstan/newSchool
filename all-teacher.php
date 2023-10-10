<?php
$page = " All Teachers";
include('menu.php');
?>
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <h3>Teacher</h3>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>All Teachers</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Teacher Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Teachers Data</h3>
            </div>

        </div>
        <form class="mg-b-20">
            <div class="row gutters-8">
                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by ID ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Name ..." class="form-control">
                </div>
                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                    <input type="text" placeholder="Search by Phone ..." class="form-control">
                </div>
                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">ID</label>
                            </div>
                        </th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Section</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>English</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0025</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>English</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0026</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>English</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0027</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0028</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student9.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0029</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student10.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0030</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>English</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0021</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student2.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>English</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0022</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0023</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student4.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0024</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student5.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>Mathematics</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0025</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student6.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>English</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0026</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student7.png" alt="student"></td>
                        <td>Jessia Rose</td>
                        <td>Female</td>
                        <td>1</td>
                        <td>English</td>
                        <td>A</td>
                        <td>59 Australia, Sydney</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">#0027</label>
                            </div>
                        </td>
                        <td class="text-center"><img src="img/figure/student8.png" alt="student"></td>
                        <td>Mark Willy</td>
                        <td>Male</td>
                        <td>2</td>
                        <td>Physics</td>
                        <td>A</td>
                        <td>TA-107 Newyork</td>
                        <td>+ 123 9988568</td>
                        <td>kazifahim93@gmail.com</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Teacher Table Area End Here -->
<footer class="footer-wrap-layout1">
    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
</footer>
</div>
</div>
<!-- Page Area End Here -->
</div>
<!-- jquery-->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- Scroll Up Js -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Data Table Js -->
<script src="js/jquery.dataTables.min.js"></script>
<!-- Custom Js -->
<script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/all-teacher.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2023 04:25:07 GMT -->

</html>