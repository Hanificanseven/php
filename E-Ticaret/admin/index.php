<?php include("header.php");

if (isset($_GET['silid'])) {
  $id = $_GET['silid'];
  $sil = $db->prepare("DELETE FROM products WHERE id = {$id}");
  $sil->execute();
}
if (isset($_POST['urunEkle'])) {
  $urun = $db->prepare("INSERT INTO products(product_name, price, stock, products.description,category_id,gender_id) VALUES ('{$_POST['product_name']}',{$_POST['price']},{$_POST['stock']},'{$_POST['description']}',{$_POST['category_id']},{$_POST['gender_id']})");
  $urun->execute();
  $last_id = $db->lastInsertId();
  header("Location:fotolar.php?last_id={$last_id}");
}
if (isset($_POST['urunGuncelle'])) {
  $urun = $db->prepare("UPDATE products SET product_name='{$_POST['product_name']}', price={$_POST['price']}, stock ={$_POST['stock']}, products.description='{$_POST['description']}',category_id={$_POST['category_id']},gender_id ={$_POST['gender_id']} where id ={$_POST['id']}");
  $urun->execute();
}
if (isset($_POST['ozellikGetir'])) {
  $urunOzellik = $db->prepare("SELECT * FROM products WHERE id ={$_POST['id']}");
  $urunOzellik->execute();
  $Ozellik = $urunOzellik->fetch();
}
?>
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Ürünler</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ürün Adı</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fiyatı</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cinsiyet</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Açıklama</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sqlString = "SELECT * FROM products";
            $urunler = $db->prepare($sqlString);
            $urunler->execute();
            foreach ($urunler as $urun) {
            ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $urun["id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $urun["product_name"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="text-xs font-weight-bold"><?php echo $urun["price"]; ?>TL</span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"><?php echo $urun["stock"]; ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"><?php
                                                          $category = $db->prepare("SELECT * FROM category WHERE id = {$urun['category_id']}");
                                                          $category->execute();
                                                          $row = $category->fetch();
                                                          echo $row["category_name"]; ?> </span>
      </div>
      </td>
      <td class="align-middle text-center text-sm">
        <span class="text-xs font-weight-bold"><?php
                                                $gender = $db->prepare("SELECT * FROM gender WHERE id = {$urun['gender_id']}");
                                                $gender->execute();
                                                $row = $gender->fetch();
                                                echo $row["gender_name"]; ?> </span>
    </div>
    </td>
    <td class="align-middle text-center text-sm">
      <span class="text-xs font-weight-bold"><?php echo substr($urun["description"], 0, 10) . "..."; ?> </span>
  </div>
  </td>
  <td class="align-middle text-center text-sm">
    <a href="index.php?silid=<?php echo $urun["id"]; ?>" style="background-color:darkred;border-radius:30%;color:white;padding:8px">
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
        <h6>Ürün Ekle</h6>
      </div>
    </div>
  </div>
  <div class="card-body px-0 pb-2">
    <div class="card-body">
      <form role="form" method="POST" enctype="multipart/form-data">
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Ürün İd(Güncelleme İşlemi Yapıyor İseniz İd Giriniz) :</label>
          <input type="text" name="id" value="<?php echo $Ozellik["id"]; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
          <button type="submit" name="ozellikGetir" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Ürün Özellikleri Doldur</button>
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Ürün Adı :</label>
          <input type="text" name="product_name" value="<?php echo $Ozellik["product_name"]; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Fiyatı :</label>
          <input type="text" name="price" value="<?php echo $Ozellik["price"]; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Stok Miktarı :</label>
          <input type="text" name="stock" value="<?php echo $Ozellik["stock"]; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Açıklama :</label>
          <input type="text" name="description" value="<?php echo $Ozellik["description"]; ?>" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
        </div>
        <div class="input-group input-group-outline mb-3">
          <label style="margin-top:3px;margin-right:1%">Kategori :</label>
          <select name="category_id" id="category" class="form-control">
            <?php $sqlString = "SELECT * FROM category";
            $kategoriler = $db->prepare($sqlString);
            $kategoriler->execute();
            foreach ($kategoriler as $kategori) { ?>
              <option value="<?php echo $kategori["id"]; ?>"><?php echo $kategori["category_name"]; ?></option> <?php } ?>
          </select>
        </div>
        <div class="input-group input-group-outline mb-3 gender">
          <label style="margin-top:3px;margin-right:1%">Cinsiyet :</label>
          <select name="gender_id" id="gender" class="form-control">
            <?php $sqlString = "SELECT * FROM gender";
            $cinsiyetler = $db->prepare($sqlString);
            $cinsiyetler->execute();
            foreach ($cinsiyetler as $cinsiyet) { ?>
              <option value="<?php echo $cinsiyet["id"]; ?>"><?php echo $cinsiyet["gender_name"]; ?></option> <?php } ?>
          </select>
        </div>
        <div class="text-center">
          <button type="submit" name="urunEkle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Ürün Ekle</button>
          <button type="submit" name="urunGuncelle" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Ürün Güncelle</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</main>
<?php include("footer.php"); ?>