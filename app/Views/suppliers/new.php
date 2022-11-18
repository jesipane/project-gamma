<div class="container ">
<h2>Tambah Barang</h2>

<form action="/suppliers" method="post" enctype="multipart/form-data">
      <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
      <?php if (isset($errors) and $errors->getError('name')) { ?>
        <div class='text-danger mt-2'> 
          <?= $error=$errors->getError('name'); ?>
      </div>
      <?php } ?>
      </div>
      <div class="mb-3">
    <label for="address" class="form-label">Alamat</label>
    <input type="text" name="address" id="address" class="form-control" value="<?= set_value('address') ?>">
      <?php if (isset($errors) and $errors->getError('address')) { ?>
        <div class='text-danger mt-2'> 
          <?= $error=$errors->getError('address'); ?>
      </div>
      <?php } ?>
      </div>
      <div class="mb-3">
    <label for="number" class="form-label">No.telp</label>
    <input type="text" name="number" id="number" class="form-control" value="<?= set_value('number') ?>">
      <?php if (isset($errors) and $errors->getError('number')) { ?>
        <div class='text-danger mt-2'> 
          <?= $error=$errors->getError('number'); ?>
      </div>
      <?php } ?>
      <div class="mb-3 mt-3">
      <a href="/suppliers" class="btn btn-sm btn-danger ">Back</a>
        <input type="submit" value="Simpan" class="btn btn-primary">
      </div>
      </div>
      </form>
