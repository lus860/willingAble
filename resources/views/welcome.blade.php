@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class=" @auth text-success @else text-danger @endauth text-center">
                    @auth Welcome!!! @else If you do not have an account please register so you can add a notes
                    lists... @endauth

                </h5>
            </div>
        </div>
    </div>
@endsection
