<?php include("header.php");
$ayar = $db->prepare("SELECT * FROM admin WHERE id =1");
$ayar->execute();
$ayarRow = $ayar->fetch();
if (isset($_POST["Guncelle"])) {
  $ayarg = $db->prepare("UPDATE admin SET username='{$_POST['username']}',password='{$_POST['password']}' WHERE id=1");
  $ayarg->execute();
}

?>
<div class="container-fluid py-4">
  <div class="card" style="margin-top:3%">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Profil Güncelle</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="card-body">
        <form role="form" method="POST" enctype="multipart/form-data">
          <div class="input-group input-group-outline mb-3">
            <label style="margin-top:3px;margin-right:1%">Kullanıcı Adı :</label>
            <input type="text" name="username" class="form-control" value="<?php echo $ayarRow['username']; ?>" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
          <div class="input-group input-group-outline mb-3">
            <label style="margin-top:3px;margin-right:1%">Şifre :</label>
            <input type="password" id="password" name="password" value="<?php echo $ayarRow['password']; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
          <div class="input-group input-group-outline mb-3">
            <input type="checkbox" style="width:20px;height:20px;" onclick="togglePassword()">Şifreyi Göster
          </div>
          <div class="text-center">

            <button type="submit" name="Guncelle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Güncelle</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</main>
<script>
  function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<?php include("footer.php"); ?>