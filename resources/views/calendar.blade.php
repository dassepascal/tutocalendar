@extends('base')
@section('content')
<div>
    <h1>calendrier</h1>
    <div>
@foreach ($months as $month )
<div>
    {{ $month->month }}
    </div>
       @endforeach

       </div>

</div>
<div>

</div>

@endsection
