@extends('layout.app')

@section('title', 'Create')

@section('container')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Form Tambah Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Tiket</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Nama Event</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Tambah Data">
                  </div>
                  <div class="form-group">
                    <select name="day" class="form-control" required>
                      <option value="">Pilih Hari</option>
                      <option value="Senin">Senin</option>
                      <option value="Selasa">Selasa</option>
                      <option value="Rabu">Rabu</option>
                      <option value="Kamis">Kamis</option>
                      <option value="Jum'at">Jum'at</option>
                      <option value="Sabtu">Sabtu</option>
                      <option value="Minggu">Minggu</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label for="date">Tanggal Event:</label>
                      <input name="date" type="date" class="form-control datepicker" id="date" placeholder="Pilih tanggal..." value="">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="price"><strong>Harga</strong></label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Masukkan harga" required>
                  </div>
                  <div class="form-group">
                    <label for="discount"><strong>Harga Diskon</strong></label>
                    <input type="number" name="discount" id="discount" class="form-control" placeholder="Masukkan harga diskon" required>
                  </div>
                  <div class="form-group">
                    <label for="stock"><strong>Stock</strong></label>
                    <input type="number" name="stock" id="stock" class="form-control" placeholder="Masukkan stock" required>
                  </div>
                  <label for="desc"><strong>Deskripsi Event</strong></label>
                  <div class="form-group">
                    <textarea type="text" name="desc" id="desc" cols="70%" rows="3" placeholder="Deskripsi Event" required></textarea>
                  </div>
                  <label for="pict">Pilih Foto</label>
                  <div class="form-group">
                     <input type="file" name="pict" id="pict" class="dropify" data-height="190" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

                    <div class="form-group">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
