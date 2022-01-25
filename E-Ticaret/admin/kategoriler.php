<?php include("header.php");

if (isset($_GET['silid'])) {
  $id = $_GET['silid'];
  $sil = $db->prepare("DELETE FROM category WHERE id = {$id}");
  $sil->execute();
}
if (isset($_POST['kategoriEkle'])) {
  $cins = $db->prepare("INSERT INTO category(category_name) values('{$_POST['category_name']}')");
  $cins->execute();
}
if (isset($_POST['kategoriGuncelle'])) {
  $cins = $db->prepare("UPDATE category SET category_name='{$_POST['category_name']}' where id ={$_POST['id']}");
  $cins->execute();
}
?>
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Cinsiyetler</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori Adı</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sqlString = "SELECT * FROM category";
            $kategoriler = $db->prepare($sqlString);
            $kategoriler->execute();
            foreach ($kategoriler as $k) {
            ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $k["id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $k["category_name"]; ?></h6>
                    </div>
                  </div>
                </td>

                <td class="align-middle text-center text-sm">
                  <a href="kategoriler.php?silid=<?php echo $k["id"]; ?>" style="background-color:darkred;border-radius:30%;color:white;padding:8px">
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
<div class="card" style="margin-top:3%">
  <div class="card-header pb-0">
    <div class="row">
      <div class="col-lg-6 col-7">
        <h6>Kategori Ekle</h6>
      </div>
    </div>
  </div>
  <div class="card-body px-0 pb-2">
    <div class="card-body">
      <form role="form" method="POST" enctype="multipart/form-data">
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">İd(Güncelleme İşlemi Yapıyor İseniz İd Giriniz) :</label>
          <input type="text" name="id" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Kategori Adı :</label>
          <input type="text" name="category_name" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>

        <div class="text-center">
          <button type="submit" name="kategoriEkle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Kategori Ekle</button>
          <button type="submit" name="kategoriGuncelle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Kategori Güncelle</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</main>
<?php include("footer.php"); ?>