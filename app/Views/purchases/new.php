<div class="container">
<h3>Tambah pembelian</h3>

<a href="/purchases" class="btn btn-sm btn-primary mb-2">List purchases</a>

<form action="/purchases" method="post">
  <div class="mb-3">
    <label for="invoice_no" class="form-label">Invoice No.</label>
    <input type="text" name="invoice_no" id="invoice_no" class="form-control" value="<?= set_value('invoice_no') ?>">
  </div>
  <div class="mb-3">
    <label for="invoice_date" class="form-label">Invoice Date</label>
    <input type="text" name="invoice_date" id="invoice_date" class="form-control" value="<?= set_value('invoice_date') ?>">
  </div>
  <div class="mb-3">
    <label for="supplier_id" class="form-label">Supplier ID</label>
    <input type="text" name="supplier_id" id="supplier_id" class="form-control" value="<?= set_value('supplier_id') ?>">
  </div>
  <div class="mb-3">
    <label for="user_id" class="form-label">User ID</label>
    <input type="text" name="user_id" id="user_id" class="form-control" value="<?= set_value('user_id') ?>">
  </div>
  <div class="mb-3">
    <label for="grand_total" class="form-label">Grandtotal</label>
    <input type="text" name="grand_total" id="grand_total" class="form-control" value="<?= set_value('grand_total') ?>">
  </div>
  <div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
  </div>
</form>

<script>
  $('#invoice_date').datepicker();
</script>
</div>