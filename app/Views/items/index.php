<div class="container ">
  <h2>TABLE LIST ITEM<h2>
<hr/>
<div class="row">
  <div class="col-12 col-xl-5 col-lg-6">
  <form action="/items" method="get" class="mb-2" id="form-search">
      <div class="input-group">
        <span class="input-group-text fw-bold">Cari Barang</span>
        <input type="text" name="search" id="search" placeholder="Masukkan nama barang" class="form-control" autocomplete="off">
        <input type="submit" value="Cari" class="btn btn-primary">
        <a href="/items/new" class="btn btn-outline-secondary">Tambah</a>
      </div>
    </form>
  
  <?php foreach (session()->getflashdata() as $key => $flash) : ?>
    <div class="alert alert-<?= $key ?>" role="alert">
  <?= $flash ?>
  </div>
    <?php endforeach; ?>

    <div id="table-result">
      <?= view('items/_items',['items' => $items]) ?>
  </div>
  <?php /* NOTE: diatas sudah render partial, harusnya dibawah ini tidak perlu lagi, karena jadi muncul double datatablenya
          <table class="table table-bordered table-hover">
          <thead>
              <tr class="table-primary">
                <th>No</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
            </thead>
          <tbody>
            <?php if(empty($items)): ?>
                    <tr>
                      <td colspan=3>Tidak ada data</td> 
                    </tr>
            <?php else: ?>
              <?php foreach($items as $index=> $item): ?>
                <tr id="item_<?= $item->id ?>">
                  <td><?= $index + 1 ?></td>
                  <td><img src="/assets/images/<?= $item->image_name ?>" alt="Image for <?= $item->name ?>" width="200px"/></td>
                  <td><?= $item->name ?></td>       
                  <td><?= $item->unit ?></td>
                  <td><?= $item->price ?></td>
                  <td>
                    <form action="/items/delete" method="post">
                      <input type="hidden" name="method" value="DELETE"/>
                      <input type="hidden" name="id" value="<?= $item->id ?>" />
                      <a href="/items/<?=$item->id ?>" class="btn btn-sm btn-info btn-lihat">Lihat</a>
                      <a href="/items/<?= $item->id ?>/edit" class="btn btn-sm btn-warning">Ubah</a>
                      <button type="submit" class="btn btn-sm btn-danger btnHapus">Hapus</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>                  
              <?php endif; ?>
            </tbody>
          </table>
*/ ?>

<script type="text/javascript">
 $(function(){
  $(',btnHapus').on("click",function(event){
    if(!confirm("yakin hapus data ini?")){
      event.preventDefault()
    }
  })

  $('.form-delete').on("submit", function(event){
      event.preventDefault()

      var form = $(this)
      var actionUrl = form.attr('action');
      $.ajax({
        type: 'post',
        url: actionUrl,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        data: form.serialize(),
        dataType: 'json',
        success: function(data){
          if(data.status == 200){
            $("#item_" + data.id).remove()
          } else {
            alert(data.message)
          }
        },
        error: function(){
          alert("Gagal menghapus data")
        },
      })
    })

 })

 $('#form-search').on("submit", function(event){
      event.preventDefault();

      var form = $(this)
      var actionUrl = form.attr('action');
      $.ajax({
        type: 'get',
        url: actionUrl,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        data: form.serialize(),
        dataType: 'html',
        success: function(data){
          $("#table-result").html(data)
        },
        error: function(){
          alert("Gagal mencari data")
        },
      })
    })

    $('.btn-lihat').on("click", function(event){
      event.preventDefault()

      var url = $(this).attr('href')
      $("#modal-show-item .modal-title").html('Loading..')
      $("#modal-show-item .modal-body").html('Loading...')
      $("#modal-show-item").modal('show')
      $.ajax({
        type: 'get',
        url: url,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        dataType: 'html',
        success: function(data){
          $("#modal-show-item .modal-title").html('Rincian Barang')
          $("#modal-show-item .modal-body").html(data)
        },
        error: function(){
          alert("Gagal mengambil data")
        },
      })
    })

    $("#search").on("keyup", function(){
      var text_search = $(this).val()
      if(text_search.length >= 3 || text_search.length == 0) {
        $("#form-search").trigger("submit")
      }
    })
</script>
  </script>

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
</nav>