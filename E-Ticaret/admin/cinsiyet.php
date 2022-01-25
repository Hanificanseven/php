<?php include("header.php");

if (isset($_GET['silid'])) {
  $id = $_GET['silid'];
  $sil = $db->prepare("DELETE FROM gender WHERE id = {$id}");
  $sil->execute();
}
if (isset($_POST['cinsiyetEkle'])) {
  $cins = $db->prepare("INSERT INTO gender(gender_name) values('{$_POST['gender_name']}')");
  $cins->execute();
}
if (isset($_POST['cinsiyetGuncelle'])) {
  $cins = $db->prepare("UPDATE gender SET gender_name='{$_POST['gender_name']}' where id ={$_POST['id']}");
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
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cinsiyet Adı</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sqlString = "SELECT * FROM gender";
            $cinsiyet = $db->prepare($sqlString);
            $cinsiyet->execute();
            foreach ($cinsiyet as $c) {
            ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $c["id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $c["gender_name"]; ?></h6>
                    </div>
                  </div>
                </td>

                <td class="align-middle text-center text-sm">
                  <a href="cinsiyet.php?silid=<?php echo $c["id"]; ?>" style="background-color:darkred;border-radius:30%;color:white;padding:8px">
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
        <h6>Cinsiyet Ekle</h6>
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
          <label style="margin-top:3px;margin-right:1%">Cinsiyet Adı :</label>
          <input type="text" name="gender_name" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>

        <div class="text-center">
          <button type="submit" name="cinsiyetEkle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cinsiyet Ekle</button>
          <button type="submit" name="cinsiyetGuncelle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cinsiyet Güncelle</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</main>
<?php include("footer.php"); ?>