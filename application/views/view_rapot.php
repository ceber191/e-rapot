
<div class="container-fluid">

   
          <div class="card shadow mb-4">

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data nilai
              </h6>
            </div>
            <div class="card-body">
              <table class="table">
  <thead>
    <tr>
      <th scope="col">id_nilai</th>
      <th scope="col">nis</th>
      <th scope="col">mapel</th>
      <th scope="col">nilai</th>
      <th scope="col">tanggal</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data->result_array()as $row){
    ?>
    <tr>
      <th><?= $row['id_nilai']; ?></th>
      <td><?= $row['nis']; ?></td>
      <td><?= $row['mapel']; ?></td>
      <td><?= $row['nilai']; ?></td>
      <td><?= $row['tanggal']; ?></td>
      <?php } ?>
  </tbody>
</table>
          </div>
        </div>
        </div>

        