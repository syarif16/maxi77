@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <div class="row">
            
            <div class="col-md-1"></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="{{ url('/bus/create') }}" class="btn btn-success btn-sm" title="Add New bus">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/bus') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search">Search</i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>TipeBus</th><th>Seat</th><th>JumlahKursi</th><th>Harga</th><th>Fasilitas</th><th>Kuantitas</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($bus as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->tipeBus }}</td><td>{{ $item->seat }}</td><td>{{ $item->jumlahKursi }}</td><td>{{$item->hargaSewa}}</td><td>{{$item->fasilitas}}</td><td>{{$item->kuantitas}}</td>
                                        <td>
                                            <a href="{{ url('/bus/' . $item->id) }}" title="View bus"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/bus/' . $item->id . '/edit') }}" title="Edit bus"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/bus' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete bus" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bus->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
