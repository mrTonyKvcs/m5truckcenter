@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading red-heading">Feliratkozók</div>

                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Telefonszám</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subscribes as $subscribe)
                                <tr>
                                    <th>{{ $subscribe->id }}</th>
                                    <td>{{ $subscribe->email }}</td>
                                    <td>{{ $subscribe->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
