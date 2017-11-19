@extends('layouts.app')

@section('content')
<div class="container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2><b>Selemat Datang , {{ Auth::user()->name }}</b></h2>

                    <br>
<div class="page-content">
    
  <div class="col-md-10">


        <div class="panel-body">
                <div class="col-md-3">
                    <div id='external-events'>
                        <h4>Draggable Events</h4>
                        <div class='external-event'>My Event 1</div>
                        <div class='external-event'>My Event 2</div>
                        <div class='external-event'>My Event 3</div>
                        <div class='external-event'>My Event 4</div>
                        <div class='external-event'>My Event 5</div>
                        <div class='external-event'>My Event 6</div>
                        <div class='external-event'>My Event 7</div>
                        <div class='external-event'>My Event 8</div>
                        <div class='external-event'>My Event 9</div>
                        <div class='external-event'>My Event 10</div>

                            <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                        </p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
</div>
@endsection
