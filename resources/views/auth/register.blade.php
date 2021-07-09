@extends('layouts.app')

@section('content')
    
@if (session('status'))

        {{session('status')}}
        
        @endif 
    
    <form action="{{route('register')}}" method="post">
        @csrf
        
        <div class="main">
        <label for="name" form="sr-only">Name</label>
        <input type="text" id="name" name="name" placeholder="name"  class="
        {{-- bg-gray-100 border-2 w-full p-4  --}}
        {{-- rounded-lg --}}
         @error('name') 
         {{-- border-red-500  --}}
         @enderror" value="{{old('name')}}"><br>
        {{-- <input type="password" id="password" placeholder="password"> --}}
        <br>

         <!--  Error handle -->

         @error('name')
         <div class="text-red-500 mt-2 text-sm">    
             {{$message}}
         </div>  
         @enderror
        </div>

        <div class="main">
         <label for="name" form="sr-only">Email</label>
        <input type="text" id="email" name="email" placeholder="email"  class="bg-gray-100 border-2 w-full p-4 
        rounded-lg @error('name') border-red-500 @enderror" value="{{old('email')}}"><br>


         <!--  Error handle -->
         @error('email')
         <div class="text-red-500 mt-2 text-sm">    
             {{$message}}
         </div>  
         @enderror
        </div>


        <div class="main">
            <label for="password" form="sr-only">Password</label>
           <input type="password" id="password" name="password" placeholder="password" class="bg-gray-100 border-2 w-full p-4 
           rounded-lg @error('name') border-red-500 @enderror" value=""><br>

             <!--  Error handle -->
         @error('email')
         <div class="text-red-500 mt-2 text-sm">    
             {{$message}}
         </div>  
         @enderror
        </div>

        <div class="main">
            <label for="password_confirmation" form="sr-only">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" 
            placeholder="Confirm Password"
            class="bg-gray-100 border-2 w-full p-4 
            rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
        </div>


        
        <div>
            {{-- <button type="submit" class="button">SIGN UP</button> --}}
        

         {{-- <div class="button">Log in</div>
         </div> --}}
         {{-- <p>Forgot Password?</p><br> --}}
         {{-- <button class="logo">LOGO</button> --}}
         {{-- <hr>
         <hr> --}}
         <hr><br><br>
         <hr>
         <button type="submit" class="button">SIGN UP</button><br>
         {{-- <button class="signin">SIGN IN</button> --}}
        </div>
    </form>
    @endsection
