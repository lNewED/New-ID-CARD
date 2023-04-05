<?php
if ($result2['major'] == "วิศวกรรมซอฟแวร์") { ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-4">
    <img src="../assets/img/studyCard/<?= $result2['file_img'] ?>" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4><?= $result2['name'] ?></h4>
      <p><?= $result2['major'] ?></p>
      <a href="../assets/img/studyCard/<?= $result2['file_img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $result2['name'] ?> <?= $result2['lastname'] ?><br>นักศึกษาของปี : <?= $result2['college_Years'] ?><br>เลขประทำตัว : <?= $result2['NumberID'] ?>"><i class="bx bx-plus"></i></a>
      <a href="../controller/controller_Edit_after.php?id=<?= $result2['id'] ?>" class="details-link" title="More Details"><i class="bi bi-pencil-square"></i></a>
    </div>
  </div>

<?php } else if ($result2['major'] == "จิตวิทยา") { ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-3">
    <img src="../assets/img/studyCard/<?= $result2['file_img'] ?>" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4><?= $result2['name'] ?></h4>
      <p><?= $result2['major'] ?></p>
      <a href="../assets/img/studyCard/<?= $result2['file_img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $result2['name'] ?> <?= $result2['lastname'] ?><br>นักศึกษาของปี : <?= $result2['college_Years'] ?><br>เลขประทำตัว : <?= $result2['NumberID'] ?>"><i class="bx bx-plus"></i></a>
      <a href="../controller/controller_Edit_after.php?id=<?= $result2['id'] ?>" class="details-link" title="More Details"><i class="bi bi-pencil-square"></i></a>
    </div>
  </div>
<?php } else if ($result2['major'] == "การจัดการ") { ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-2">
    <img src="../assets/img/studyCard/<?= $result2['file_img'] ?>" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4><?= $result2['name'] ?></h4>
      <p><?= $result2['major'] ?></p>
      <a href="../assets/img/studyCard/<?= $result2['file_img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $result2['name'] ?> <?= $result2['lastname'] ?><br>นักศึกษาของปี : <?= $result2['college_Years'] ?><br>เลขประทำตัว : <?= $result2['NumberID'] ?>"><i class="bx bx-plus"></i></a>
      <a href="../controller/controller_Edit_after.php?id=<?= $result2['id'] ?>" class="details-link" title="More Details"><i class="bi bi-pencil-square"></i></a>
    </div>
  </div>
<?php } else if ($result2['major'] == "วิศวกรรมโยธา") { ?>
  <div class="col-lg-4 col-md-6 portfolio-item filter-1">
    <img src="../assets/img/studyCard/<?= $result2['file_img'] ?>" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4><?= $result2['name'] ?></h4>
      <p><?= $result2['major'] ?></p>
      <a href="../assets/img/studyCard/<?= $result2['file_img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $result2['name'] ?> <?= $result2['lastname'] ?><br>นักศึกษาของปี : <?= $result2['college_Years'] ?><br>เลขประทำตัว : <?= $result2['NumberID'] ?>"><i class="bx bx-plus"></i></a>
      <a href="../controller/controller_Edit_after.php?id=<?= $result2['id'] ?>" class="details-link" title="More Details"><i class="bi bi-pencil-square"></i></a>
    </div>
  </div>
<?php } ?>