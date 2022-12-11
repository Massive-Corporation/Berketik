@extends('frontend.partial.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
@endsection
@section('content')
    {{-- header --}}
    <section>
        <div class="container">
            <div class="row my-3 ">
                <div class="col-6">
                    <button type="button" class="btn btn-danger mx-auto d-block btn-lg">New Release</button>
                </div>
                <div class="col-6 ">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">Coming Soon</button>
                </div>
            </div>
            <div class="container">
                <div class="container-header">
                    <div class="panel active"
                        style="background-image: url('https://images3.alphacoders.com/106/thumb-1920-1061065.png')">
                        <h3>What do you find so entertaining?</h3>
                    </div>

                    <div class="panel" style="background-image: url('https://wallpaperaccess.com/full/5283070.jpg')">
                        <h3>What's so amusing about this?</h3>
                    </div>
                    <div class="panel"
                        style="background-image: url('https://images8.alphacoders.com/103/thumb-1920-1034735.png')">
                        <h3>What do you take life for, exactly?</h3>
                    </div>
                    <div class="panel" style="background-image: url('https://wallpaperaccess.com/full/5112296.jpg')">
                        <h3>Why can't you understand?</h3>
                    </div>
                    <div class="panel" style="background-image: url('https://wallpaperaccess.com/full/3518463.jpg')">
                        <h3>How can you forget?</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- endheader --}}

    <section>
        {{-- list --}}
        <div class="container">
            <div class="row ">
                <div class="col-3 my-1">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">All</button>
                </div>
                <div class="col-3 my-1">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">Action</button>
                </div>
                <div class="col-3 my-1">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">Romance</button>
                </div>
                <div class="col-3 my-1">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">Thriller</button>
                </div>
                <div class="col-3 my-1">
                    <button type="button" class="btn btn-outline-danger mx-auto d-block btn-lg">Slice Of Life</button>
                </div>
            </div>
        </div>

        <div class="container text-dark">
            <div class="row">
                <div class="col-5 mx-auto d-block">
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>

                </div>
                <div class="col-5 mx-auto d-block">
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>
                    <a href="{{url('/one-piece')}}" class="text-dark text-decoration-none" >
                        <div class="row my-4 bg-light rounded-5" >
                            <div class="col-6  my-4">
                                <img src="{{asset('image/one-piece.png')}}" class="img-fluid rounded mx-auto d-block" alt="">
                            </div>
                            <div class="col-6 my-4">
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
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </section>
    {{-- endlist --}}
@endsection

@section('js')
    <script>
        const panels = document.querySelectorAll(".panel");

        panels.forEach((panel) => {
            panel.addEventListener("click", () => {
                removeActiveClasses();
                panel.classList.add("active");
            });
        });

        const removeActiveClasses = () => {
            panels.forEach((panel) => {
                panel.classList.remove("active");
            });
        };
    </script>
@endsection
