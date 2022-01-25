<?php include("header.php");
//silme komutu
if (isset($_GET['silid'])) {
  $id = $_GET['silid'];
  $sil = $db->prepare("DELETE FROM images WHERE id = {$id}");
  $sil->execute();
}
//ekleme komutu
if (isset($_POST['fotografEkle'])) {
  $id = $_POST["id"];
  if (isset($_GET["last_id"])) {
    $id = $_GET["last_id"];
  }
  $yollar = array();
  $post = 'files';
  $dizin_yol = "../images/";
  $dosya_adet = count($_FILES[$post]['name']);
  for ($i = 0; $i < $dosya_adet; $i++) {
    if (!empty($_FILES[$post]['name'][$i])) {
      $yuklemeYolu =  $dizin_yol . uniqid() . $_FILES[$post]['name'][$i];
      move_uploaded_file($_FILES[$post]['tmp_name'][$i], $yuklemeYolu);
      array_push($yollar, substr($yuklemeYolu, 3));
    }
  }
  foreach ($yollar as $yol) {
    $foto = $db->prepare("INSERT INTO images(product_id,image_url) values({$id},'{$yol}')");
    $foto->execute();
  }
}

?>
<div class="container-fluid py-4">
  <div class="card" style="margin-bottom:3%">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Fotoğraf Ekle</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2" id="ekleme">
      <div class="card-body">
        <form role="form" method="POST" enctype="multipart/form-data">
          <div class="input-group input-group-outline mb-3">
            <label style="margin-top:3px;margin-right:1%">İd(Eğer Ürünlerden Yönlendirildiyseniz Son Ürünün Id'si Girilidir) :</label>
            <input type="text" name="id" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label for="files">Fotoğraf Seç:</label>
            <input type="file" id="files" class="gradient-primary" name="files[]" style="width: 100%;" multiple>
          </div>

          <div class="text-center">
            <button type="submit" name="fotografEkle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Fotoğraf Ekle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Ürün Fotoğrafları</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fotograf</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ürün İd</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">URL</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sqlString = "SELECT * FROM images";
            $fotolar = $db->prepare($sqlString);
            $fotolar->execute();
            foreach ($fotolar as $foto) {
            ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <img src="<?php echo "../" . $foto['image_url']; ?>" width="50px" height="50px" alt="">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $foto["id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $foto["product_id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $foto["image_url"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <a href="fotolar.php?silid=<?php echo $foto["id"]; ?>" style="background-color:darkred;border-radius:30%;color:white;padding:8px">
                    X
                  </a>
      </div>
      </td>
      </tr> <?php } ?>
    </tbody>
    </table>
    </div>
  </div>

</div>

</div>
</main>
<?php include("footer.php"); ?>