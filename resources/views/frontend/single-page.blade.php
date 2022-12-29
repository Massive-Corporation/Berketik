@extends('frontend.partial.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail ">
                        <a href="{{ asset('/image/one-piece-cover.png') }}" class="text-decoration-none text-dark">
                            <img src="{{ asset('/image/one-piece-cover.png') }}"
                                class="img-fluid rounded-3 mx-auto d-block my-2" alt="Lights" style="width:30%">
                            <div class="caption bg-light rounded-2 p-3">
                                <div class="row my-4 bg-light rounded-5">
                                    <div class="col-6 d-block ">
                                        <h3>ONE PIECE</h3>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Genre : </p>
                                            </div>
                                            <div class="col-4">
                                                <p>Action </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Pengarang : </p>
                                            </div>
                                            <div class="col-4">
                                                <p>Echiro Oda </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Tahun : </p>
                                            </div>
                                            <div class="col-4">
                                                <p>2022</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>Rating : </p>
                                            </div>
                                            <div class="col-4">
                                                <p>9.5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <img src="{{ asset('image/one-piece.png') }}"
                                            class="img-fluid rounded mx-auto d-block" alt="">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt
                                    consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi
                                    aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt
                                    consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi
                                    aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt
                                    consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi
                                    aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="thumbnail">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <div class="caption bg-light rounded-2 p-3">
                            <div class="row">
                                <div class="col-md-10">
                                    <h4>Komentar</h4>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-danger float-end">Terbaik</button>
                                </div>
                            </div>
                        </div>
                        <div class="caption bg-light rounded-2 p-3 ">
                            <div class="row  my-1 ">
                                <div class="col-md-2">
                                    <img src="{{ asset('image/logo.png') }}" alt=""
                                        class="rounded-circle border border-danger" width="40" height="40">
                                </div>
                                <div class="col-md-10">
                                    <div class="input-group">
                                        <textarea class="form-control" id="" rows="3" placeholder="Tulis Komentar Anda!"></textarea>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-1 ">
                                <div class="col-md-2">
                                    <img src="{{ asset('image/logo.png') }}" alt=""
                                        class="rounded-circle border border-danger" width="40" height="40">
                                </div>
                                <div class="col-md-10">
                                    <h4>Jhon Doe</h4>
                                    <span>20 October, 2018</span>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda
                                        hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                                        <div class="row">
                                            <div class="col-2 text-danger">Suka</div>
                                            <div class="col-2 text-danger">Balas</div>
                                        </div>
                                </div>
                            </div>
                            <div class="row my-1 ">
                                <div class="col-md-2">
                                    <img src="{{ asset('image/logo.png') }}" alt=""
                                        class="rounded-circle border border-danger" width="40" height="40">
                                    <p class="text-danger float-right">Reply</p>
                                </div>
                                <div class="col-md-10">
                                    <h4>Jhon Doe</h4>
                                    <span>20 October, 2018</span>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam assumenda
                                        hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                                    <div class="row">
                                        <div class="col-2 text-danger">Suka</div>
                                        <div class="col-2 text-danger">Balas</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="row ">
                                        <div class="col-md-2">
                                            <img src="{{ asset('image/logo.png') }}" alt=""
                                                class="rounded-circle border border-danger" width="40" height="40">
                                        </div>
                                        <div class="col-md-10">
                                            <h4>Jhon Doe</h4>
                                            <span>20 October, 2018</span>
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus numquam
                                                assumenda
                                                hic aliquam vero sequi velit molestias doloremque molestiae dicta?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="caption bg-light rounded-2 p-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4>Thread Seru Lainnya</h4>
                                </div>
                                <div class="col-md-4"><button class="btn btn-outline-danger float-end">Terbaik</button>
                                </div>
                            </div>
                            <div class="row">
                                <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                                    <div class="row my-4 bg-light rounded-5" >
                                        <div class="col-6">
                                            <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                                        </div>
                                        <div class="col-6">
                                            <h3>ONE PIECE</h3>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>Genre : </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>Action </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>Pengarang : </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>Echiro Oda </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>Tahun : </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>2022</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>Rating : </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>9.5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
