@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">bus {{ $bus->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/bus') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/bus/' . $bus->id . '/edit') }}" title="Edit bus"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('bus' . '/' . $bus->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete bus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $bus->id }}</td>
                                    </tr>
                                    <tr><th> NamaBus </th><td> {{ $bus->namaBus }} </td>
                                    </tr>
                                    <tr><th> TipeBus </th><td> {{ $bus->tipeBus }} </td>
                                    </tr>
                                    <tr><th> Seat </th><td> {{ $bus->seat }} </td>
                                    </tr>
                                    <tr><th> JumlahKursi </th><td> {{ $bus->jumlahKursi }} </td>
                                    </tr>
                                     <tr><th> Fasilitas </th><td> {{ $bus->fasilitas }} </td>
                                    </tr>
                                     <tr><th> Kuantitas </th><td> {{ $bus->kuantitas }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
