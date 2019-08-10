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

{{--                        <a class="navbar-brand" href="{{route('notes.index') }}">--}}
{{--                            Show Notes--}}
{{--                        </a>--}}
{{--                        <a class="navbar-brand" href="{{route('notes.create') }}">--}}
{{--                            Create Note--}}
{{--                        </a>                </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection