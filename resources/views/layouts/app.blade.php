<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweetr</title>
    <link rel="stylesheet"  href="{{asset('css/app.css')}}">
    
</head>
<body>

    <body> {{-- class="bg-gray-300" --}}
        
        {{-- <nav class="p-6 bg-white flex justify-between mb-8"> --}}
    
        
        <ul {{-- class="flex item-center" --}}>
            
    <li>
     <a  {{-- class="p-3" --}} href="{{'/'}}">Home</a> 
    
    </li>


    <li>
        <a {{-- class="p-3" --}} href="{{route('dashboard')}}">Dashboard</a> 
    </li> 
       {{-- @auth --}}
       {{-- <li>
        <a  class="p-3"   href="{{route('tweets')}}">Tweet</a>
       </li>    --}}
       {{-- @endauth --}}
      
    </ul> 
    
    <ul {{-- class="flex item-center" --}}>
        
    
     {{-- you can choose to do the @if (auth()-user()) or you 
     can decide to use @auth @endauth @guest @endguest method as well --}}
    
        @auth
        <li>
            <a class="p-3"  href="">{{auth()->user()->username}}</a>
            
           
            
            
           </li>  
    
    
           <form action="{{route('logout')}}" method="post" class="p-3 inline">
            @csrf
            
           <li>
            <button type="submit">Logout</button>
           </li>
        </form>
        @endauth
    
        @guest
        <li>
            <a  {{-- class="p-3" --}} href="{{route('login')}}">Login</a>
            
           </li>
           <li>
            <a {{-- class="p-3" --}} href="{{route('register')}}">Register</a>
           </li>   
        @endguest
       
        
       
       
       
    
          
        </ul>   
    </nav>

@yield('content')
</body>
</html>