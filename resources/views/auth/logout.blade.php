@extends('layouts.app')

@section('content')
    
<div class="flex justify-center">
    <div class="w-3/12 bg-white p-6 rounded-leg">
        @if (session('status'))
        <div class="bg-red-500 p-4 mt-2 rounded-lg  mb-6 text-white text=center">  
        {{session('status')}}
    </div> 
        @endif 


    <form action="{{route('logout')}}" method="post">
        @csrf

        

        

        <div class="mb-4">
            <label for="email" form="sr-only">Email</label>
            <input type="text" name="email" id="email" placeholder="Your Email"
            class="bg-gray-100 border-2 w-full p-4 
            rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
           
            <!--  Error handle -->

        @error('email')
        <div class="text-red-500 mt-2 text-sm">    
            {{$message}}
        </div>  
    @enderror
        </div>


        <div class="mb-4">
            <label for="password" form="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password"
            class="bg-gray-100 border-2 w-full p-4 
            rounded-lg  @error('password') border-red-500 @enderror" value="">
 <!--  Error handle -->

 @error('password')
 <div class="text-red-500 mt-2 text-sm">    
     {{$message}}
 </div>  
@enderror
        </div>
        


        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 
            rounded font-medium w-full">Login</button>
        </div>
    </form>
    </div>
</div>


@endsection