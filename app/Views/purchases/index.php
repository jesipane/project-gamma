<div class="container">
<h3>List purchases</h3>
<hr/>

<a href="purchases/new" class="btn btn-primary mb-2">Tambah barang</a>

<?php foreach (session()->getFlashdata() as $key => $flash) : ?>
  <div class="alert alert-<?= $key ?>" role="alert">
    <?= $flash ?>
  </div>
<?php endforeach; ?>

<table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>#</th>
        <th>Invoice No</th>
        <th>Invoice Date</th>
        <th>Supplier</th>
        <th>User</th>
        <th>Grand Total</th>
      </tr>
    </thead>
    <tbody>
      <?php if(empty($purchases)): ?>
        <tr>
          <td colspan=7>Tidak ada data</td>
        </tr>
      <?php else: ?>
        <?php foreach($purchases as $index => $purchases): ?>
          <tr>
            <td><?= $index + 1 ?></td>
            <td>
              <a href="purchases/<?= $purchases->id ?>">Detail</a>
            </td>
            <td><?= $purchases->invoice_no ?></td>
            <td><?= $purchases->invoice_date ?></td>
            <td><?= $purchases->supplier_id ?></td>
            <td><?= $purchases->user_id ?></td>
            <td><?= $purchases->grand_total ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>

<script type="text/javascript">
</script>
        </div>