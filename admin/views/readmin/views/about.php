<?php
// ACTION UNTUK MENGUBAH DATA
if (isset($_POST['simpan'])) {
  $column1 = $_POST['column1'];
  $column2 = $_POST['column2'];
  
  $simpan = mysqli_query($koneksi, 
    "update about set column1='$column1', column1='$column1' where id_about=1");
    
  
  if($simpan) {
    $pesan = "<div class='alert alert-success'>Berhasil diperbaharui</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}

// ACTION UNTUK NGAMBIL DATA SAAT INI
$query = mysqli_query($koneksi, "SELECT * FROM `about`");
$data = mysqli_fetch_assoc($query);
?>

<div class="row mb-5">
  <div class="col-md-12">
    <h1>about</h1>
    <div class="row">
      <div class="col-md-6">
        <?=@$pesan?>
        <form action="" method="post">
          <div class="form-group">
            <label for="">column1</label>
            <input name="column1" type="text" value="<?=$data['column1']?>" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="">column2</label>
            <input name="column2" type="text" value="<?=$data['column2']?>" class="form-control" placeholder="">
          </div>
          <button type="submit" class="btn btn-danger" name="simpan">SIMPAN</button>
        </form>
      </div>
    </div>
  </div>
</div>
