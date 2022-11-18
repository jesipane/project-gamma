<div class="container ">
  <h2>TABLE LIST SUPPLIER<h2>
  <a href="/suppliers/new" class="btn btn-sm btn-primary mb-2">Tambah Barang</a>
  
  <?php foreach (session()->getflashdata() as $key => $flash) : ?>
    <div class="alert alert-<?= $key ?>" role="alert">
  <?= $flash ?>
  </div>
    <?php endforeach; ?>

<table class="table table-bordered border-primary">
  <thead>
    <tr class="table-primary">
      <th scope="col">No</th>
      <th scope="col">Nama supplier</th>
      <th scope="col">Alamat</th>
      <th scope="col">No.telp</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(empty($suppliers)): ?>
          <tr>
             <td colspan=5>Tidak ada data</td> 
          </tr>
  <?php else: ?>
    <?php foreach($suppliers as $index=> $supplier): ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $supplier->name ?></td>       
        <td><?= $supplier->address ?></td>
        <td><?= $supplier->Number ?></td>
        <td>
          <form action="/suppliers/delete" method="post">
            <input type="hidden" name="method" value="DELETE"/>
            <input type="hidden" name="id" value="<?= $supplier->id ?>" />
            <a href="/suppliers/<?= $supplier->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>                  
    <?php endif; ?>
  </tbody>
</table>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
  </div>
  </div>