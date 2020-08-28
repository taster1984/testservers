@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">server {{ $server->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/servers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/servers/' . $server->id . '/edit') }}" title="Edit server"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/servers' . '/' . $server->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete server" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $server->id }}</td>
                                    </tr>
                                    <tr><th> Provider </th><td> {{ $server->provider }} </td></tr><tr><th> Brand </th><td> {{ $server->brand }} </td></tr><tr><th> Location </th><td> {{ $server->location }} </td></tr><tr><th> Cpu </th><td> {{ $server->cpu }} </td></tr><tr><th> Drive </th><td> {{ $server->drive }} </td></tr><tr><th> Price </th><td> {{ $server->price }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
