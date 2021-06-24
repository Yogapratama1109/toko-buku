
<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('Template.navbar')

  @include('Template.sidebar')

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">

      <div class="card text-center">
                <div class="card-header mt-2">
                    <h5>Form Filter Pasok Berdasarkan Distributor</h5>
                </div>
                <div class="card-body">
                    <div class="form-group form-inline text-right">
                            <div class="controls">
                                <form method="post" action="{{url('buku/filter-pasok-buku')}}" class=" myform form-group form-inline ">
                                    @csrf
                                    <label class=" text-bold mb-1">Nama Distributor :</label>
                                    <select class="form-select" aria-label="Default select example" name="distributor">
                                        <option selected>Pilih Distributor</option>
                                        @foreach ($distributors as $distributor)
                                            <option value="{{ $distributor['id_distributor'] }}">{{ $distributor['nama_distributor'] }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-lg btn-success mt-2">Lihat</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>

</div>
  @include('Template.script')
  
  @include('sweetalert::alert')

  <script>
        $(document).ready(function() {
            $('table').dataTable();
        } );
    </script>
</body>
</html>
