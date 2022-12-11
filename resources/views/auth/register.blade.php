@extends('layouts.auth')

@section('content')
<div class="card-body d-flex flex-column justify-content-center">
    <h4 class="title text-center font-weight-bold mt-4 pb-3">Daftar Dunia Konspirasi</h4>
    <form class='col-sm-10 col-12 mx-auto'>
        <div class='form-group py-1'>
            <input type="text" class="form-control " placeholder='Username'>
        </div>
        <div class='form-group py-1'>
            <input type="text" class="form-control " placeholder='Nama Lengkap'>
        </div>
        <div class='form-group py-1'>
            <input type="email" class="form-control " placeholder='Masukan email disini'>
        </div>
        <div class='form-group py-1 '>
            <input type="password" class="form-control" placeholder='***'>
        </div>
        <div class=''>
            <input type="button" class="btn  btn-outline-danger d-block w-100 " value='Login'>
        </div>
        <p class="text-center">Sudah punya akun? langsung <a href="/login">Login</a> aja</p>
    </form>
</div>
@endsection
