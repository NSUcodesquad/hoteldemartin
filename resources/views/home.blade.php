@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <button type="submit" class="button button1">
                        <a class="nav-link" href="\posts">{{ __('Books') }}</a></button>

                             <button type="submit" class="button button1">
                        <a class="nav-link" href="\reserve">{{ __('Reserve') }}</a></button>

            </div>
        </div>
    </div>
</div>
@endsection
