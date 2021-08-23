@extends('layout.layout')

@section('content')

    <div class="container">
        <h1 class="mt-3">Welcome from My Pizza</h1>
        @if(Session("success"))
            <div class="alert alert-success" role="alert">
                {{Session("success")}}
            </div>
        @endif
        <div class="card mt-3">
            <div class="card-header p-3 navbar nav-link">Pizza Order Form</div>
        
            <div class="card-body">
                <form action="{{route('insert')}}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" class="form-control" name="username"/>
                        <label class="form-label" for="form2Example1">User Name</label>
                    </div>
                    @error('username')
                        <p class="text-danger" style="margin-top: -20px" >{{ $message }}</p>
                    @enderror
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example1" class="form-control" name="pizza_name"/>
                        <label class="form-label" for="form2Example1">Pizza Name</label>
                    </div>
                    @error('pizza_name')
                        <p class="text-danger" style="margin-top: -20px" >{{ $message }}</p>
                    @enderror
                
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example2" class="form-control" name="topping"/>
                        <label class="form-label" for="form2Example2">Toppings</label>
                    </div>
                    @error('topping')
                        <p class="text-danger" style="margin-top: -20px" >{{ $message }}</p>
                    @enderror

                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example2" class="form-control" name="sauce" />
                        <label class="form-label" for="form2Example2">Sauce</label>                       
                    </div>
                    @error('sauce')
                        <p class="text-danger" style="margin-top: -20px" >{{ $message }}</p>
                    @enderror

                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example2" class="form-control" name="price"/>
                        <label class="form-label" for="form2Example2">Price</label>                       
                    </div>
                    @error('price')
                        <p class="text-danger" style="margin-top: -20px" >{{ $message }}</p>
                    @enderror


                    <!-- Order button -->
                    <button type="submit" class="btn navbar nav-link btn-block mb-4">Order</button>
                
                    <!-- Register buttons -->
                    <div class="text-center">
                    <p>Not a member? <a class="nav-link" href="#!">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btnInfo textGreen btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                
                    <button type="button" class="btn btnInfo textGreen btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
                
                    <button type="button" class="btn btnInfo textGreen btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
                
                    <button type="button" class="btn btnInfo textGreen btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection