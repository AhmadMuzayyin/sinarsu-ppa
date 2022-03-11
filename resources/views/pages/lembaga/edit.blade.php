@extends('template.main')

@section('content')
    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Tambah Data Lembaga</h4>
                            <a href="{{ url('/institution') }}" class="btn btn-sm btn-info mb-3">Kembali</a>
                            @foreach ($data as $item)
                                <form action="{{ url('/institution') . '/' . $item->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="nama">Nama Lembaga</label>
                                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                    id="nama" name="nama" value="{{ $item->nama }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text"
                                                    class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                    name="alamat" value="{{ $item->alamat }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" value="{{ $item->email }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="kode_pos">Kode Pos</label>
                                                <input type="text"
                                                    class="form-control @error('kode_pos') is-invalid @enderror"
                                                    id="kode_pos" name="kode_pos" value="{{ $item->kode_pos }}"
                                                    required />
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="telepon">Telepon</label>
                                                <input type="text"
                                                    class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                                    name="telepon" value="{{ $item->telepon }}" required />
                                            </div>
                                            <div class="form-group">
                                                <label for="fax">fax</label>
                                                <input type="fax" class="form-control @error('fax') is-invalid @enderror"
                                                    id="fax" name="fax" value="{{ $item->fax }}" />
                                            </div>
                                            <div class="form-group">
                                                <label for="logo">Logo</label>
                                                <input type="file" class="form-control @error('logo') is-invalid @enderror"
                                                    id="logo" name="logo" value="{{ $item->logo }}" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->
@endsection

@push('script')
    <script>
        @if (Session::has('success'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
@endpush
