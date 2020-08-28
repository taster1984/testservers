@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Servers</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Provider</th><th>Brand</th><th>Location</th><th>Cpu</th><th>Drive</th><th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($servers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->provider }}</td><td>{{ $item->brand }}</td><td>{{ $item->location }}</td><td>{{ $item->cpu }}</td><td>{{ $item->drive }}</td><td>{{ $item->price }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $servers->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
