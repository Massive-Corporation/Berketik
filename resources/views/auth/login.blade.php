@extends('layouts.auth')

@section('content')
<div class="card-body d-flex flex-column justify-content-center">
    <h2 class="title text-center font-weight-bold mt-4 pb-3">Masuk Dunia Konspirasi</h2>
    <form class='col-sm-10 col-12 mx-auto'>
        <div class='form-group '>
            <input type="email" class="form-control " placeholder='Masukan email disini'>
        </div>
        <div class='form-group py-3 '>
            <input type="password" class="form-control" placeholder='***'>
        </div>
        <div class=''>
            <input type="button" class="btn  btn-outline-danger d-block w-100 " value='Login'>
        </div>
        <p class="text-center">Belum punya akun? <a href="/register">Register</a> dulu</p>
    </form>
</div>
@endsection
