@extends('layouts.app')

@section('content')
<div class="container-fluid main-container ">
    <div class="row h-100 ">
        <div class="col h-100">
            <section>
                <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                    <main role="main"
                        class="inner cover d-flex justify-content-center align-items-center flex-column h-100">
                        <h1 class="cover-heading">Cover your page.</h1>
                        <p class="lead">Cover is a one-page template for building simple and beautiful home pages.
                            Download,
                            edit the text, and add your own fullscreen background photo to make it your own.</p>
                        <p class="lead">
                            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
                        </p>
                    </main>
                </div>
            </section>

        </div>

    </div>

    <div class="row h-100 ">
        <div class="col h-100">
            <section>
                <div class=" d-flex w-100 h-100 p-3 mx-auto flex-column">
                    <main role="main"
                        class="inner cover d-flex justify-content-center align-items-center flex-column h-100">
                        <h1 class="cover-heading">Cover your page.</h1>
                        <p class="lead">Cover is a one-page template for building simple and beautiful home pages.
                            Download,
                            edit the text, and add your own fullscreen background photo to make it your own.</p>
                        <p class="lead">
                            <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
                        </p>
                    </main>
                </div>
            </section>

        </div>

    </div>

    @endsection


    @section('scripts')
    <script>
        navbar = document.querySelector('#navbar')
    navbar.classList.add("sticky-top");
    </script>
    @endsection