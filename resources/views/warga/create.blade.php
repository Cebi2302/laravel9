@extends('layouts.app')

@section('content')
<div class="container">
<h1>ADD WARGA</h1><br>

<form action="/warga/store" method="POST">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nik</label>
    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No KK</label>
    <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
    <select class="form-select" name="jenis_kelamin">
        <option value="J">-- Pilih Jenis Kelamin --</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
        </select><br>
  </div>

        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" rows="10"></textarea><br>
  </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Save">
    <a href="/warga" class="btn btn-warning" type="button" name="button" value="Back">BACK</a>

    </form>
</div>
@endsection