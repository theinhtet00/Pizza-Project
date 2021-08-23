@extends('layout.layout')

@section('content')
    <div class="container">
      @if (Session('delete'))
          <div class="alert alert-danger my-3" role="alert">
            {{Session('delete')}}
          </div>
      @endif
      @if (Session('update'))
          <div class="alert alert-warning my-3" role="alert">
            {{Session('update')}}
          </div>
      @endif
      <div class="table-responsive">
          <table class="table table-hover mt-3">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">User Name</th>
                <th scope="col">Pizza Name</th>
                <th scope="col">Toppings</th>
                <th scope="col">Sauce</th>
                <th scope="col">Price</th>
                <th scope="col">Edit Order</th>
                <th scope="col">Order Complete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pizzas as $pizza)
                <tr>
                  <th scope="row">{{$pizza['id']}}</th>
                  <td>{{$pizza['username']}}</td>
                  <td>{{$pizza['pizza_name']}}</td>
                  <td>{{$pizza['topping']}}</td>
                  <td>{{$pizza['sauce']}}</td>
                  <td>${{$pizza['price']}}</td>
                  <td><a class="btn btn-sm btn-warning" href="{{route('edit',$pizza->id)}}" >Edit</a></td>
                  <td><a class="btn btn-sm btn-success" href="{{route('delete',$pizza->id)}}">Complete</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>    
    </div>
@endsection
