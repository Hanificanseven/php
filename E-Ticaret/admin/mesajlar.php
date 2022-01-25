<?php include("header.php");


if (isset($_GET['silid'])) {
  $id = $_GET['silid'];
  $sil = $db->prepare("DELETE FROM message WHERE id = {$id}");
  $sil->execute();
}
?>
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header pb-0">
      <div class="row">
        <div class="col-lg-6 col-7">
          <h6>Mesajlar</h6>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">İsim</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Başlık</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mesaj</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sil</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sqlString = "SELECT * FROM message";
            $message = $db->prepare($sqlString);
            $message->execute();
            foreach ($message as $messages) {
            ?>
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $messages["id"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"><?php echo $messages["names"]; ?></h6>
                    </div>
                  </div>
                </td>
                <td>
                  <span class="text-xs font-weight-bold"><?php echo $messages["email"]; ?></span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"><?php echo $messages["subjects"]; ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"><?php echo $messages["messages"]; ?> </span>
                </td>

                <td class="align-middle text-center text-sm">
                  <a href="mesajlar.php?silid=<?php echo $messages["id"]; ?>" style="background-color:darkred;border-radius:30%;color:white;padding:8px">
                    X
                  </a>
      </div>
      </td>
      </tr><?php  } ?>
    </tbody>
    </table>
    </div>
  </div>
</div>
</div>
</main>
<?php include("footer.php"); ?>