
@extends('layouts.main')

@section('content1')
<table  class=" table">
    <thead>
      <tr>
        <th scope="col">S.N.</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
        $i=1;
        @endphp
        @foreach($image as $items)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$items->Title}}</td>
        <td>
            {{$items->Description }}
        </td>
        <td>
        @if ($items->image)
        <img src="{{ asset('images/' . $items->image) }}" style="width: 100px;height:100px">
       @else
        <img src="#">
    @endif
        </td>
        <td><a href="{{ route('imagedelete', $items->id) }}" class="btn-primary "><img src="/images/deleteimg.png" style="height:25px;width:20px"></a>
        {{-- <a href="" class="btn-danger" id="del_btn"><img src="/images/deleteimg.png" style="height:25px;width:20px"></a> --}}

    </td>
      </tr>
      @endforeach
    </tbody>
  </table><br>
  @endsection
