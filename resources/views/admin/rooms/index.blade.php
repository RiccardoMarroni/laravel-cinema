@extends('layouts.admin')
@section('title', 'Rooms')

@section('content')
 <div class="container">
 <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Seats Number</th>
              <th scope="col">I sense</th>
              <th scope="col">Base Price</th>
              <th scope="col">Image</th>
              <th scope="col">Created At</th>
              <th scope="col">Update At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rooms as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->name}}</td>
                <td>{{$room->seats_num}}</td>
                <td>{{$room->isense}}</td>
                <td>{{$room->base_price}}</td>
                <td>{{$room->image}}</td>
                <td>{{$room->created_at}}</td>
                <td>{{$room->updated_at}}</td>

                {{-- <td>
                    <a href="{{route('admin.rooms.show', $room->slug)}}" title="Show" class="text-black px-2"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('admin.rooms.edit', $room->slug)}}" title="Edit" class="text-black px-2"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.rooms.destroy', $room->slug)}}" method="POST" class="d-inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="delete-button border-0 bg-transparent"  data-item-title="{{ $room->title }}" data-item-id = "{{ $room->id }}">
                        <i class="fa-solid fa-trash"></i>
                      </button>

                    </form>


                </td> --}}
              </tr>
            @endforeach


          </tbody>
      </table>

 </div>
@endsection
