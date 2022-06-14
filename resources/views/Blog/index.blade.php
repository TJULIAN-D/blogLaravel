@extends('partials.master')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row">
            @for($i=0; $i<12; $i++)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card mb-3 mt-3">
                        <img src="..." class="card-img-top" alt="..." height="300px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@stop
