@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>
        <p>{{ $name }}</p>
        <!-- @for($i = 0; $i < count($pizzas); $i++) 
                <p>品項：{{ $i }} - {{ $pizzas[$i]['type'] }}</p>
            @endfor -->
        @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
            <span> - 這是循環開頭</span>
            @endif
            @if($loop->last)
            <span> - 這是循環結尾</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection