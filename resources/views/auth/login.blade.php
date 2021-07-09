@extends('layouts.app')
<link rel="stylesheet"  href="{{asset('css/login.css')}}">

@section('content')
    
 @if (session('status'))

        {{session('status')}}
        
        @endif  
    
    <form action="{{route('login')}}" method="post">
        @csrf

    {{-- <div class="main"></div><br> --}}
    <h3>Login to Twitter</h3>
    
    
    <div class="main">
        {{-- <input type="text" id="text" placeholder="phone,email,or username"><br> --}}
       
        <label for="name" form="sr-only">Email</label>
       <input type="text" id="email" name="email" placeholder="email"  class="bg-gray-100 border-2 w-full p-4 
       rounded-lg @error('email') border-red-500 @enderror"  value="{{old('email')}}"><br>


        <!--   handle Error -->
        @error('email')
        <div class="text-red-500 mt-2 text-sm">    
            {{$message}}
        </div>  
        @enderror
       </div>

    
       
       <div class="main">
        <label for="password" form="sr-only">Password</label>
        {{-- <input type="password" id="password" placeholder="password"><br> --}}
       <input type="password" id="password" name="password" placeholder="password" class="
       {{-- bg-gray-100 border-2 w-full p-4  --}}
       {{-- rounded-lg  --}}
       @error('password') 
       {{-- border-red-500  --}}
       @enderror" value=""><br>

         <!--  Error handle -->
     @error('email')
     <div class="text-red-500 mt-2 text-sm">    
         {{$message}}
     </div>  
     @enderror
    </div>

    {{-- <form action="login"> --}}     
        
    
    {{-- <button>Log in</button> --}}
    <button type="submit" class="button">Log in</button><br>
    <div class="tee">
     <p>Forgot password?</p>
     <p>Sign Up for Twitter</p>
    </div>
    </form>
    @endsection