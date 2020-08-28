@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Admin Home</div>
                    <div class="card-body">
                        <button onclick="importJson()">Import from json</button>
                        <div id="importResult"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function importJson()
        {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '{{ url('/admin/import') }}', false);
            xhr.send();
            if (xhr.status != 200) {
                var el = document.getElementById("importResult");
                el.innerHTML = xhr.status + ': ' + xhr.statusText;
            } else {
                var el = document.getElementById("importResult");
                el.innerHTML = xhr.responseText;
            }
        }
    </script>
@endsection
