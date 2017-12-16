@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Coin overview</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($results['results'] as $coin)
                        Price: {{ $coin['id'] }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
