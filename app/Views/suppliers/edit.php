<div class="container ">
<h2>Ubah supplier</h2>

<a href="/suppliers" class="btn btn-sm btn-primary mb-2">List pembelian</a>

<form action="/suppliers/<?= $supplier['id'] ?>" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="<?= $item['name'] ?>">
      <?php if (isset($errors) and $errors->getError('name')) { ?>
        <div class='text-danger mt-2'>
          <?= $error = $errors->getError('name'); ?>
        </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="unit" class="form-label">Address</label>
      <input type="text" name="address" id="address" class="form-control" value="<?= $supplie['address'] ?>">
      <?php if (isset($errors) and $errors->getError('address')) { ?>
        <div class='text-danger mt-2'>
          <?= $error = $errors->getError('address'); ?>
        </div>
      <?php } ?>
    </div>
    <div class="mb-3">
      <label for="number" class="form-label">Number</label>
      <input type="text" name="number" id="number" class="form-control" value="<?= $item['price'] ?>">
      <?php if (isset($errors) and $errors->getError('number')) { ?>
   .     <div class='text-danger mt-2'>
          <?= $error = $errors->getError('number'); ?>
        </div>
      <?php } ?>
    </div>
    <div class="mb-3">
        <input type="submit" value="Perbarui" class="btn btn-primary">
    </div>
</form>