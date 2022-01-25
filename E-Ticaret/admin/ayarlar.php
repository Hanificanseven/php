<?php include("header.php");
$ayar = $db->prepare("SELECT * FROM ayar WHERE id =0");
$ayar->execute();
$ayarRow = $ayar->fetch();
if (isset($_POST["Guncelle"])) {
  $ayarg = $db->prepare("UPDATE ayar SET harita='{$_POST['harita']}',logo_url='{$_POST['logo_url']}',footer='{$_POST['footer']}',title='{$_POST['title']}',description='{$_POST['description']}' WHERE id=0");
  $ayarg->execute();
}

?>
<div class="card" style="margin-top:3%">
  <div class="card-header pb-0">
    <div class="row">
      <div class="col-lg-6 col-7">
        <h6>Ayar Güncelle</h6>
      </div>
    </div>
  </div>
  <div class="card-body px-0 pb-2">
    <div class="card-body">
      <form role="form" method="POST" enctype="multipart/form-data">
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Harita :</label>
          <input type="text" name="harita" class="form-control" value="<?php echo $ayarRow['harita']; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Logo URL :</label>
          <input type="text" name="logo_url" value="<?php echo $ayarRow['logo_url']; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Footer :</label>
          <input type="text" name="footer" value="<?php echo $ayarRow['footer']; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Title :</label>
          <input type="text" name="title" value="<?php echo $ayarRow['title']; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Description :</label>
          <input type="text" name="description" value="<?php echo $ayarRow['description']; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>

        <div class="text-center">
          <button type="submit" name="Guncelle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Güncelle</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<?php include("footer.php"); ?>