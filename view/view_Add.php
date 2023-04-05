<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Athiphong</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/icon.png" rel="icon">
    <link href="../assets/img/icon.png" rel="icon-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/styleForm.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Day
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <section id="Home" class="h-100 gradient-form"">
        <div class=" container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <h6 class="mt-1 mb-5 pb-1">เพิ่มข้อมูลนักศึกษา</h6>
                                </div>

                                <form method="POST" action="../controller/controller_Add.php" enctype="multipart/form-data">

                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="names" name="names" class="form-control" placeholder="ชื่อ" required />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="นามสกลุล" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <select class="form-select" aria-label="Default select example" name="major" id="major" required>
                                                    <option value="" disabled selected hidden>สาขา</option>
                                                    <option value="วิศวกรรมซอฟแวร์">วิศวกรรมซอฟแวร์</option>
                                                    <option value="จิตวิทยา">จิตวิทยา</option>
                                                    <option value="การจัดการ">การจัดการ</option>
                                                    <option value="วิศวกรรมโยธา">วิศวกรรมโยธา</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                                <input type="text" id="no" name="no" class="form-control" placeholder="รหัสนักศึกษา" required maxlength="9" minlength="9" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                                <label class="form-label" for="form6Example6">นักศึกษาปี</label>
                                                <input type="text" id="year" name="year" class="form-control" placeholder="ปีที่เข้ารับการศึกษา" required maxlength="4" minlength="4" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="form6Example6">วันเกิดของคุณ</label>
                                                <input type="date" id="birthday" name="birthday" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3"> รูปโปรไฟล์ </label>
                                        <input type="file" name="uploadfile" value="" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3"> รูปแนะนำตัว </label>
                                        <input type="file" name="uploadfileD1" value="" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3"> รูปแนะนำตัว </label>
                                        <input type="file" name="uploadfileD2" value="" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form6Example3"> รูปแนะนำตัว </label>
                                        <input type="file" name="uploadfileD3" value="" required />
                                    </div>

                                    <hr class="my-4" />
                                    <label class="form-label" for="formCVV">เลขบัตรเดรบิตรนักศึกษา</label>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div class="form-outline">
                                                <input type="text" id="co1" name="co1" class="form-control" required maxlength="4" minlength="4" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-outline">
                                                <input type="text" id="co2" name="co2" class="form-control" required maxlength="4" minlength="4" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-outline">
                                                <input type="text" id="co3" name="co3" class="form-control" required maxlength="4" minlength="4" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-outline">
                                                <input type="text" id="co4" name="co4" class="form-control" required maxlength="4" minlength="4" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-4">
                                            <div class="form-outline">
                                                <input type="text" id="DM" name="DM" class="form-control" placeholder="VALID" required maxlength="2" minlength="2" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-outline">
                                                <input type="text" id="DY" name="DY" class="form-control" placeholder="THRU" required maxlength="2" minlength="2" pattern="[0-9]+" />
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button class="btn btn-success" type="submit">SUBMIT</button>&emsp;
                                        <a href="../index.php"><button type="button" class="btn btn-outline-danger">CANCEL</button></a>
                                    </center>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">We are more than just a company</h4>
                                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Credit card form -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>