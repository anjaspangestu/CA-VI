@extends('welcome')

@section('title', 'Kategori')

@section('css')

@endsection

@section('content')

<<<<<<< HEAD
  <div class="container-fluid pb-0">
      <div class="row">
          <div class="col-sm-12 col-md-12 sl-mb20">
            <button type="button" class="btn btn-primary btn-lg right" data-toggle="modal" onclick="openModal(this)">
              Tambah Produk
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 id="title">Tambah Data Produk</h3>
=======
  <div class="container-fluid upload-details">
    <div class="row">
      <div class="col-sm-12 col-md-12 sl-mb20">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Tambah Kategori
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 id="title">Tambah Kategori</h3>
              </div>
              <form class="" id="form" onsubmit="return false">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="" id="product-id">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="name_product">Nama</label>
                    <input type="text" name="name_product" class="form-control" id="name_product">
                  </div>
                  <div class="form-group" style="width:200px;height:200px;">
                    <div class="slim-content">
                      <div class="slim circle photo-container" {{-- data-label="upload image here" --}}
                        data-size="230,230" {{-- Ukuran Gambar--}}
                        data-ratio="1:1"
                        data-jpeg-compression="80"
                        data-status-upload-success="berhasil disimpan"
                        data-force-type="jpg" id="product-image">
                        <input type="file" name="image[]" required />
                      </div>
                    </div>
>>>>>>> b6a196a1b979199487346c175ff183a33da6c939
                  </div>
                  <form class="" id="form" onsubmit="return false">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="" id="product-id">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="name_product">Nama</label>
                        <input type="text" name="name_product" class="form-control" id="name_product">
                      </div>
                      <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" name="price" class="form-control" id="price" data-mask="00/00/0000" data-mask-reverse="true">
                      </div>
                      <div class="form-group">
                        <label for="discount">Dicount tanpa persen</label>
                        <input type="text" name="discount" class="form-control" id="discount">
                      </div>
                      <div class="form-group" style="width:200px;height:200px;">
                        <div class="slim-content">
                          <div class="slim circle photo-container" {{-- data-label="upload image here" --}}
                            data-size="230,230" {{-- Ukuran Gambar--}}
                            data-ratio="1:1"
                            data-jpeg-compression="80"
                            data-status-upload-success="berhasil disimpan"
                            data-force-type="jpg" id="product-image">
                            <input type="file" name="image[]" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="saveItem(this)">Simpan</button>
                    </div>
                  </form>
                </div>
<<<<<<< HEAD
              </div>
            </div>
          </div>
          <div class="table-responsive">
              <table class="table mt-1" id="table-categories">
                  <thead>
                      <tr>
                        <td>No</td>
                        <td>Nama Kategori</td>
                        <td>Tanggal Dibuat</td>
                        <td>Terakhir Diubah</td>
                        <td></td>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($item as $key)
                      <tr>
                          <td>{{ $key->id }}</td>
                          <td>{{ $key->judul_kategori }}</td>
                          <td>{{ $key->created_at }}</td>
                          <td>{{ $key->updated_at }}</td>
                          <td>
                              <button onclick="showDetails(this)" class="btn btn-light" data-val="{{ json_encode($key->product) }}"><i class="fas fa-eye"></i>Show</button>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
          </div>
        </div>
=======
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="saveItem(this)">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-12">
        <table class="responsive-table" id="table">
          <thead>
              <tr>
                <td>No</td>
                <td>Kategori</td>
                <td>Action</td>
              </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
>>>>>>> b6a196a1b979199487346c175ff183a33da6c939
  </div>

@endsection

@section('js')
{{-- <script src="{{ asset('js/admin.js') }}"></script> --}}
@endsection
