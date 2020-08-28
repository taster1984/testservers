@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Servers</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/servers/create') }}" class="btn btn-success btn-sm" title="Add New server">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Provider</th><th>Brand</th><th>Location</th><th>Cpu</th><th>Drive</th><th>Price</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($servers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->provider }}</td><td>{{ $item->brand }}</td><td>{{ $item->location }}</td><td>{{ $item->cpu }}</td><td>{{ $item->drive }}</td><td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ url('/admin/servers/' . $item->id) }}" title="View server"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/servers/' . $item->id . '/edit') }}" title="Edit server"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/servers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete server" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
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
