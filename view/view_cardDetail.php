<div class="container-fluid p-3 my-3">
    <div class=" d-flex justify-content-center align-items-center filter-mobile" data-aos="fade-up" data-aos-delay="150">
        <div class="card p-3">
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
            <div class="top-row">
                <img src="https://www.npru.ac.th/2019/img/logo.png" width="400" />
                <div class="d-flex justify-content-between align-items-center">
                    &nbsp;
                    <img src="../assets/img/studyCard/visa.png" width="90" />
                    <h5>
                        <br>ชื่อ-นามสกุล : <?= $jsonDecode["name"]; ?> <?= $jsonDecode["lastname"]; ?><br><br>
                        เลขประจำตัว : <?= $jsonDecode["NumberID"]; ?><br><br>
                        สาขาวิชา : <?= $jsonDecode["major"]; ?><br><br>
                    </h5>
                    <h6></h6>
                    <h6></h6>
                    <h6></h6>
                    <img class="lineting" src="../assets/img/studyCard/<?= $jsonDecode["file_img"]; ?>" width="180" height="220" />
                    &nbsp;
                </div>
                <div class="px-5 number mt-5 justify-content-between align-items-center">
                    <h1><?= $jsonDecode["cno1"]; ?>&emsp;&emsp;<?= $jsonDecode["cno2"]; ?>&emsp;&emsp;<?= $jsonDecode["cno3"]; ?>&emsp;&emsp;<?= $jsonDecode["cno4"]; ?></h1>
                </div>
                <div class="p-4 card-border mt-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>
                            <b>วันหมดอายุ</b><br><br>
                            <?= $jsonDecode["cardDeathDate"]; ?>
                        </h6>
                        <div class="card-images">
                            <img src="../assets/img/studyCard/visaL.png" width="100">
                            <img src="../assets/img/studyCard/wifi.png" width="40">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>