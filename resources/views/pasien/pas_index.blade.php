@include('layouts.header')
@include('layouts.sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            {{-- @if (Auth::user()->level=='admin')
                
            @else
                
            @endif --}}
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('assets/javascript:void(0)')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{asset('assets/javascript:void(0)')}}">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">Data Pasien</h1>
                                <button type="button" class="btn mb-1 btn-success"><a href="/pasien/create">Tambah Data</a></button>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                {{-- <th>No</th> --}}
                                                <th>No.RM</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No HP</th>
                                                <th>Tgl Lahir</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        @foreach ($pasien as $p)
                                        <tr>
                                            {{-- <td>{{$p->id}}</td> --}}
                                            <td>{{$p->no_rm}}</td>
                                            <td>{{$p->nama_pasien}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>{{$p->jk}}</td>
                                            <td>{{$p->no_hp}}</td>
                                            <td>{{$p->tgl_lahir}}</td>
                                            <td><button type="button" class="btn mb-1 btn-primary"><a href="/pasien/{{$p->no_rm}}/edit">Edit</a></button></td>
                                            <form action="{{'/pasien/'.$p->no_rm}}" method="post" onsubmit="return confirm('Apa anda yakin ingin menghapus?')" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <td><button type="submit" class="btn mb-1 btn-danger">Hapus</button></td>
                                            </form>
                                            {{-- <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a></span> --}}
                                            {{-- <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span></td> --}}
                                        </tr>
                                        
                                        @endforeach

                                        
                                        {{-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@include('layouts.footer')
@include('layouts.script')