@extends('layouts.normallayout')

@section('content')
    <div class=" home-section" style="width:100%">
        <header class="masthead  "
            style="background-image: url('{{ asset('assets/images/Hero picture.jpg') }}'); height:92vh; width:100% ; background-size:cover ">

            <div class="site-heading d-flex flex-column justify-content-center align-items-center "
                style="width:100%; height:92vh; text-align:center; color:black; ">
                <h1>Welcome to Blog Nest</h1>
                <span class="subheading">Discovering, Learning, and Growing Together</span>
            </div>

        </header>
    </div>
@endsection
