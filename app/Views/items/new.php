<div class="col-mr-10">
  <div class="mr-auto">
  <center><h1>FORM ITEM BARU</h1></center>

<a href="/items" class="btn btn-sm btn-primary mb-2"> List Barang</a>

<form action="/items" method="post">
  <div class="mb-3">
    <label for="namaobat" class="form-label">Nama obat</label>
    <input type="text" name="namaobat" id="namaobat" class="form-control" value="<?= set_value('namaobat') ?>">
    <?php if (isset($errors) and $errors->getError('namaobat')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('namaobat'); ?>
    </div>
    <?php } ?>
    </div>
    <div class="mb-3">
    <label for="Berat" class="form-label" value="<?=set_value('Berat') ?>">Berat</label>
    <input type="text" name="Berat" id="Berat" class="form-control" value="<?= set_value('Berat') ?>">
    <?php if (isset($errors) and $errors->getError('Berat')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Berat'); ?>
    </div>
    <?php } ?>
    </div>
    <div class="mb-3">
    <label for="Stok" class="form-label">Stok</label>
    <input type="text" name="Stok" id="Stok" class="form-control" value="<?= set_value('Stok') ?>">
    <?php if (isset($errors) and $errors->getError('Stok')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('name'); ?>
    </div>
    <?php } ?>
    </div>
  <div class="mb-3">
    <label for="Kategori" class="form-label">Kategori</label>
    <input type="text" name="Kategori" id="Kategori" class="form-control" value="<?= set_value('Kategori') ?>">
    <?php if (isset($errors) and $errors->getError('Kategori')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Kategori'); ?>
    </div>
    <?php } ?>
    </div>
  <div class="mb-3">
    <label for="Kadaluarsa" class="form-label">Kadaluarsa</label>
    <input type="text" name="Kadaluarsa" id="Kadaluarsa" class="form-control" value="<?= set_value('Kadaluarsa') ?>">
    <?php if (isset($errors) and $errors->getError('Kadaluarsa')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Kadaluarsa'); ?>
    </div>
    <?php } ?>
    </div>
  <div class="mb-3">
    <label for="Hargajual" class="form-label">Harga Jual</label>
    <input type="text" name="Hargajual" id="Hargajual" class="form-control" value="<?= set_value('Hargajual') ?>">
    <?php if (isset($errors) and $errors->getError('Hargajual')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Hargajual'); ?>
    </div>
    <?php } ?>
    </div>
  <div class="mb-3">
    <label for="Unit" class="form-label">Unit</label>
    <input type="text" name="Unit" id="Unit" class="form-control" value="<?= set_value('Unit') ?>">
    <?php if (isset($errors) and $errors->getError('Unit')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Unit'); ?>
    </div>
    <?php } ?>
    </div>
  <div class="mb-3">
    <label for="Status" class="form-label">Status</label>
    <input type="text" name="Status" id="Status" class="form-control" value="<?= set_value('Status') ?>">
    <?php if (isset($errors) and $errors->getError('Status')) { ?>
    <div class='text-danger mt-2'>
      <?=$error = $errors->getError('Status'); ?>
    </div>
    <?php } ?>
    </div>
    <div class="mb-3">
      <input type="submit" value="simpan" class="btn btn-primary">
    </div>
    </form>
    </div>
    </div>