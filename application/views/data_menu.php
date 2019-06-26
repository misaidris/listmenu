
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Isa App</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .m-right {
        margin-right: 10px;
      }

      .m-left {
        margin-left: 3px;
      }

      .show {
        display: inline;
      }

      .hide {
        display: none;
      }

      .search {
        float: right;
      }

      .h-width {
        width: 50%;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="">List Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Booking'); ?>">Booking <span class="sr-only">(current)</span></a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>List Menu</h2>
        <br>

        <div class="row">
            <div class="col-md-6">
              <button type="button" id="btnTampilTambah" class="btn btn-success"><i class="fas fa-plus"></i> Tambah Menu</button>
            </div>

            <div class="col-md-6">
              <form class="form-inline search">
                <h7 class="m-right">Cari Menu</h7>
                <input type="text" id="keyword" class="form-control" placeholder='Masukkan pencarian..' onkeyup="filterData($(this).val())">
              </form>
            </div>
        </div>
        
        <table id="table_transaksi" class="table table-striped table-hover" width="100%">
        	<thead>
        		<th>No</th>
        		<th>Nama Menu</th>
        		<th>Kategori</th>
            <th>Harga</th>
            <th>Status</th>
            <th></th>
        	</thead>
        	<tbody id="data_menu">
        		
        	</tbody>
        </table>

      </div>
    </div>

  </div>
    <hr>
</main>

<footer class="container">
  <p>Muhammad Isa Idris 2019</p>
</footer>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="formTambahMenu" action="">

          <div class="form-group">
            <label for="nama_menu">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Nasi Goreng" required>
          </div>

          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori">
            </select>
          </div>

          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" placeholder="1000" required>
          </div>

          <div class="form-group">
            <label for="pinjam">Status</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="Ready">
              <label class="form-check-label" for="inlineRadio1">Ready</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="Not">
              <label class="form-check-label" for="inlineRadio2">Not</label>
            </div>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button onclick="" id="btnTambah" class="btn btn-success">Tambah Menu</button>
        <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  
    </div>
  </div>
</div>
<!-- End of Modal -->

<!-- Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Ubah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="formUbahMenu">

          <div class="form-group">
            <input type="hidden" class="form-control" id="ubah_id_menu" name="ubah_id_menu">
          </div>

          <div class="form-group">
            <label for="ubah_nama_menu">Nama Menu</label>
            <input type="text" class="form-control" id="ubah_nama_menu" name="ubah_nama_menu" placeholder="Nasi Goreng" required>
          </div>

          <div class="form-group">
            <label for="ubah_kategori">Kategori</label>
            <select class="form-control" id="ubah_kategori" name="ubah_kategori">
            </select>
          </div>

          <div class="form-group">
            <label for="ubah_harga">Harga</label>
            <input type="text" class="form-control" id="ubah_harga" name="ubah_harga" placeholder="1000" required>
            </select>
          </div>

          <div class="form-group">
            <label for="pinjam">Status</label>
            <br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ubah_status" id="inlineRadio1" value="Ready">
              <label class="form-check-label" for="inlineRadio1">Ready</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="ubah_status" id="inlineRadio2" value="Not">
              <label class="form-check-label" for="inlineRadio2">Not</label>
            </div>
          </div>

        </form>

      </div>
      <div class="modal-footer">
        <button onclick="" id="btnUbah" class="btn btn-success">Ubah Data</button>
        <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  
    </div>
  </div>
</div>
<!-- End of Modal -->

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Konfirmasi hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin?
      </div>
      <div class="modal-footer">
        <button onclick="" id="btnDelete" class="btn btn-danger">Hapus Data</button>
        <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  
    </div>
  </div>
</div>
<!-- End of Modal --> 


<!-- link to js -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>


<!-- js -->
<script type="text/javascript">

  $(document).ready(function(){

    function tampilData()
    {
    $.ajax({
      url: "<?php echo base_url('index.php/getDataMenu') ?>",
      type: "GET",
      dataType: "json",
      success: function(response){
       $('#data_menu').html();
       for (var i=0; i<response.length; i++){
     
        $('#data_menu').append(
          '<tr>'+
            '<td>'+(i+1)+'</td>'+
            '<td>'+response[i].nama_menu+'</td>'+
            '<td>'+response[i].nama_kategori+'</td>'+
            '<td>'+response[i].harga+'</td>'+
            '<td>'+response[i].status+'</td>'+
            '<td>'+
                '<a href="javascript:;" class="btn btn-danger float-right btn-sm item-delete" data="'+response[i].id_menu+'" ><i class="fas fa-trash"></i></a>'+
                '<button class="btn btn-success float-right btn-sm" onclick="tampilDataMenu(\''+response[i].id_menu+'\')"><i class="fas fa-edit"></i></button>'+
            '</td>'+
          '</tr>'
        );
        }
      }
    });
    }

    tampilData();

    // Get kategori
    $.ajax({
        url: "<?php echo base_url('index.php/getDataKategori') ?>",
        type: "GET",
        dataType: "json",
        success: function(response){
          $('[id*=kategori').empty();
          $('[id*=kategori').append('<option>-Pilih Kategori-</option>');
          for (var i=0; i<response.length; i++){
          $('[id*=kategori').append(
            '<option value='+response[i].id_kategori+'>'+response[i].nama_kategori+'</option>'
          );
         }
        },
      });
    // End of get kategori

    // Reset Modal
    $('#btnClose').click(function(){
      $('#formModal').modal('hide');
      $('#formModal').on('hidden.bs.modal', function () {
      $(this).find('form').trigger('reset');
      });
    });
    // End of Reset Modal

    $('#btnTampilTambah').click(function()
      {
        $('#formModal').modal('show');
      });

    // Tambah data
    $('#btnTambah').click(function()
      {
        // event.preventDefault();
        $.ajax(
          {
            type:"POST",
            dataType: "json",
            url: "<?php echo base_url('index.php/MenuController/tambah'); ?>",
            data: $('#formTambahMenu').serialize(),
            success: function(data)
            {
              $('#data_menu').html('');
              $('#formModal').modal('hide');
              $('#formModal').on('hidden.bs.modal', function () {
              $(this).find('form').trigger('reset');
              })
              tampilData();
              alert(data.info);
            },
            error: function()
            {
              alert("Data menu gagal ditambahkan");
            }
          }
        );
      });
    // End of tambah data

    // Ubah data kelas
    $('#btnUbah').click(function()
      {
        // event.preventDefault();
        $.ajax(
          {
            type:"POST",
            dataType: "json",
            url: "<?php echo base_url('index.php/MenuController/ubah'); ?>",
            data: $('#formUbahMenu').serialize(),
            success: function(data)
            {
              $('#data_menu').html('');
              $('#ubahModal').modal('hide');
              $('#ubahModal').on('hidden.bs.modal', function () {
              $(this).find('form').trigger('reset');
              })
              tampilData();
              alert(data.info);
            },
            error: function()
            {
              alert("Data menu gagal diubah");
            }
          }
        );
      });
    // End of Ubah data

    // Delete
    $('#data_menu').on('click', '.item-delete', function()
      {
        var id = $(this).attr('data');
        $('#deleteModal').modal('show');
        $('#btnDelete').unbind().click(function(){
          $.ajax({
            type: 'ajax',
            method: 'get',
            asycn: false,
            url: '<?php echo base_url('index.php/MenuController/hapus') ?>',
            data: {id:id},
            dataType: 'json',
            success: function(response){
              $('#data_menu').html('');
              $('#deleteModal').modal('hide');
              tampilData();
              alert("Data berhasil dihapus");
            },
            error: function(){
              alert('Data gagal dihapus');
            }
          });
        });
      });


    // End of Delete

  });

  function filterData(keyword)
  {
    if(keyword == '') keyword = '1';
    $.ajax({
      url: "<?php echo base_url('index.php/filterData/') ?>"+keyword,
      type: "GET",
      dataType: "json",
      success: function(response){
       $('#data_menu').html('');
       for (var i=0; i<response.length; i++){
     
       // tampilData();
       $('#data_menu').append(
          '<tr>'+
            '<td>'+(i+1)+'</td>'+
            '<td>'+response[i].nama_menu+'</td>'+
            '<td>'+response[i].nama_kategori+'</td>'+
            '<td>'+response[i].harga+'</td>'+
            '<td>'+response[i].status+'</td>'+
            '<td>'+
                '<a href="javascript:;" class="btn btn-danger float-right btn-sm item-delete" data="'+response[i].id_menu+'" ><i class="fas fa-trash"></i></a>'+
                '<button class="btn btn-success float-right btn-sm" onclick="tampilDataMenu(\''+response[i].id_menu+'\')"><i class="fas fa-edit"></i></button>'+
            '</td>'+
          '</tr>'
        );
       }

      }
    });
  }

  function tampilDataMenu(id)
  {
    $.ajax({
      url: '<?php echo base_url('index.php/getDataMenu2/') ?>'+id,
      type: "GET",
      dataType:"JSON",
      success: function(data){
        $('#ubah_id_menu').val(data.id_menu);
        $('#ubah_nama_menu').val(data.nama_menu);
        $('#ubah_kategori').val(data.id_kategori);
        $('input[name="ubah_status"][value="' + data.status + '"]').prop('checked', true);
        $('#ubah_harga').val(data.harga);
      }
    });
    $('#ubahModal').modal('show');
  }

</script>

</body>
</html>
