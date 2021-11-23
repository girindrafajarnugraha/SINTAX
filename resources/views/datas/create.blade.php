@extends('datas.layout')
 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Tambah Data
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('datas.store') }}" id="myForm" enctype="multipart/form-data">
 @csrf
 <div class="form-group">
 <label for="email">Email</label> 
 <input type="text" name="email" class="form-control" id="email" aria-describedby="email" > 
 </div>
 <div class="form-group">
 <label for="nama">Nama</label> 
 <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
 </div>
 <div class="form-group">
 <label for="NIDN">NIDN</label>  
 <input type="text" name="NIDN" class="form-control" id="NIDN" aria-describedby="NIDN" > 
 </div>
 <div class="form-group">
 <label for="jurusan">Jurusan</label> 
 <select class="form-control" name="Jurusan">
 @foreach($jurusan as $jrs)
    <option value="{{$jrs->id}}">{{$jrs->nama_jurusan}}</option>
@endforeach
 </select>
 </div>
 <div class="form-group">
 <label for="studi">Studi</label> 
 <input type="text" name="studi" class="form-control" id="studi" aria-describedby="studi" > 
 </div>
 <div class="form-group">
 <label for="hp">No Handphone</label> 
 <input type="text" name="hp" class="form-control" id="hp" aria-describedby="hp" > 
 </div>
 <div class="form-group">
 <label for="jenisKl">Jenis Kl</label> 
 <input type="text" name="jenisKl" class="form-control" id="jenisKl" aria-describedby="jenisKl" > 
 </div>
 <div class="form-group">
 <label for="judulKl">Judul Kl</label> 
 <input type="text" name="judulKl" class="form-control" id="judulKl" aria-describedby="judulKl" > 
 </div>
 <div class="form-group">
 <label for="noSertif">No Sertifikat Hak Cipta atau No Pendaftaran Paten / Paten Sederhana </label> 
 <input type="text" name="noSertif" class="form-control" id="noSertif" aria-describedby="noSertif" > 
 </div>
 <div class="form-group">
 <label for="pemegangKl">Pemegang Kekayaan Intelektual</label> 
 <input type="text" name="pemegangKl" class="form-control" id="pemegangKl" aria-describedby="pemegangKl" > 
 </div>
 <div class="form-group">
    <label for="file1">Sertikat Hak Cipta atau Bukti pendaftaran Paten / Paten sederhana </label>
    <input type="file" class="form-control" required="required" name="file1" id="file1">
</div>
<div class="form-group">
    <label for="file2">Surat Pernyataan Pengajuan Insentif </label>
    <input type="file" class="form-control" required="required" name="file2" id="file2">
</div>
<div class="form-group">
    <label for="file3">Identitas Usulan Insentif KI </label>
    <input type="file" class="form-control" required="required" name="file3" id="file3">
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection