@extends('datas.layout')

 
@section('content')
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Data
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('datas.update', $Data->id) }}" id="myForm" enctype="multipart/form-data">
 @csrf
 @method('PUT') <div class="form-group">
 <div class="form-group">
 <label for="email">Email</label> 
 <input type="text" name="email" class="form-control" id="email" value="{{ $Data->email }}" aria-describedby="email" > 
 </div>
 <div class="form-group">
 <label for="nama">Nama</label> 
 <input type="nama" name="nama" class="form-control" id="nama" value="{{ $Data->nama }}" aria-describedby="nama" > 
 </div>
 <div class="form-group">
 <label for="NIDN">NIDN</label>  
 <input type="text" name="NIDN" class="form-control" id="NIDN" value="{{ $Data->NIDN }}" aria-describedby="NIDN" > 
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
 <input type="text" name="studi" class="form-control" id="studi" value="{{ $Data->studi }}" aria-describedby="studi" > 
 </div>
 <div class="form-group">
 <label for="hp">No Handphone</label> 
 <input type="text" name="hp" class="form-control" id="hp" value="{{ $Data->hp }}" aria-describedby="hp" > 
 </div>
 <div class="form-group">
 <label for="jenisKl">Jenis Kl</label> 
 <input type="text" name="jenisKl" class="form-control" id="jenisKl" value="{{ $Data->jenisKl }}" aria-describedby="jenisKl" > 
 </div>
 <div class="form-group">
 <label for="judulKl">Judul Kl</label> 
 <input type="text" name="judulKl" class="form-control" id="judulKl" value="{{ $Data->judulKl }}" aria-describedby="judulKl" > 
 </div>
 <div class="form-group">
 <label for="noSertif">No Sertifikat Hak Cipta atau No Pendaftaran Paten / Paten Sederhana </label> 
 <input type="text" name="noSertif" class="form-control" id="noSertif" value="{{ $Data->noSertif }}" aria-describedby="noSertif" > 
 </div>
 <div class="form-group">
 <label for="pemegangKl">Pemegang Kekayaan Intelektual</label> 
 <input type="text" name="pemegangKl" class="form-control" id="pemegangKl" value="{{ $Data->pemegangKl }}" aria-describedby="pemegangKl" > 
 </div>
 <div class="form-group">
    <label for="file1">Sertikat Hak Cipta atau Bukti pendaftaran Paten / Paten sederhana</label>
    <input type="file" class="form-control" required="required" name="file1" value="{{$Data->fileSertif}}"></br>
    <a href="{{asset('storage/'.$Data->fileSertif)}}">Sertikat Hak Cipta atau Bukti pendaftaran Paten / Paten sederhana</a>
</div>
<div class="form-group">
    <label for="file1">Surat Pernyataan Pengajuan Insentif</label>
    <input type="file" class="form-control" required="required" name="file2" value="{{$Data->filePernyataan}}"></br>
    <a href="{{asset('storage/'.$Data->filePernyataan)}}">Surat Pernyataan Pengajuan Insentif</a>
</div>
<div class="form-group">
    <label for="file3">Identitas Usulan Insentif KI</label>
    <input type="file" class="form-control" required="required" name="file3" value="{{$Data->fileIdentitas}}"></br>
    <a href="{{asset('storage/'.$Data->fileIdentitas)}}">Identitas Usulan Insentif KI</a>
</div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection