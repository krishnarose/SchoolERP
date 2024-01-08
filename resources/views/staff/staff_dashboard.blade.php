@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('staff Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A id dolores cupiditate iusto, perferendis dicta quasi consequuntur dolorum aut aliquid corporis error. Rerum dolores vel sapiente suscipit ducimus. Corporis, odit.</h1>

        </div>
        <div class="col-6">
            <h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus iste harum nostrum quis quod eum aut animi deserunt similique tempora velit tenetur suscipit, dicta nesciunt soluta eligendi dignissimos possimus odio?
            </h2>
        </div>
    </div>
</div>
@endsection
