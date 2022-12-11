@extends('frontend.partial.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail ">
                        <a href="{{asset('/image/one-piece-cover.png')}}" class="text-decoration-none text-dark">
                            <img src="{{asset('/image/one-piece-cover.png')}}" class="img-fluid rounded-3 mx-auto d-block my-2" alt="Lights" style="width:30%">
                            <div class="caption bg-light rounded-2 p-3">
                                <div class="row my-4 bg-light rounded-5" >
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
                                        <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, ad deserunt consequuntur dolorem distinctio, harum voluptatibus exercitationem iste quos ex sequi aliquid, consectetur mollitia animi suscipit. Voluptatum distinctio non eligendi.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
