@extends('layout.app')

@section('title','Ticket')

@section('container')

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ticket</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Ticket</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-2 ">
                        <a href="{{url('/create')}}">
                          <div class="btn btn-block btn-success">+Tambah</div>
                        </a>
                      </div>
                  </div>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Deskripsi Event</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($tickets as $ticket)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->day}}</td>
                    <td>{{$ticket->date}}</td>
                    <td>{{$ticket->jam_mulai}}</td>
                    <td>{{$ticket->jam_selesai}}</td>
                    <td>{{$ticket->price}}</td>
                    <td>{{$ticket->discount}}</td>
                    <td>{{$ticket->stock}}</td>
                    <td>
                      <img src="{{asset('img/ticket/'. $ticket->pict)}}" width="120" alt="Ticket">
                    </td>
                    <td>{{$ticket->desc}}</td>
                    <td>       
                      <a href="/edit/{{$ticket->id}}" class="btn btn-sm btn-primary btn-circle " style="float:left">Edit</a>
                      <form action="/ticket/{{$ticket->id}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
@endsection
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>