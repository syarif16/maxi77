@extends('layouts.app2')

@section('content')
   <div class="container">
        <div class="row">
       
<div class="col-md-2"></div>
            <div class="col-md-8">                <div class="panel panel-default">
                    <div class="panel-heading">crew {{ $crew->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/crew') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/crew/' . $crew->id . '/edit') }}" title="Edit crew"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('crew' . '/' . $crew->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete crew" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $crew->id }}</td>
                                    </tr>
                                    <tr><th> Nama </th><td> {{ $crew->nama }} </td></tr><tr><th> Pekerjaan </th><td> {{ $crew->pekerjaan }} </td></tr><tr><th> Telepon </th><td> {{ $crew->telepon }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
