<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b  border-white/10">
        <div>
            <a href="#">
                <img src="{{asset('images/logo.svg')}}" alt="">
            </a>
        </div>
        <div class="space-x-6 font-bold ">
         
            <a href="" class="hover:bg-white/25 transition-colors duration-300 border border-transparent hover:border-blue-600">Jobs</a>
            <a href="" class="hover:bg-white/25 transition-colors duration-300 border border-transparent hover:border-blue-600">Salaries</a>
            <a href="" class="hover:bg-white/25 transition-colors duration-300 border border-transparent hover:border-blue-600">Companies</a>
            <a href="" class="hover:bg-white/25  transition-colors duration-300 border border-transparent hover:border-blue-600">Careers</a>
        </div>
        <div class="flex space-x-6">
            @auth
            <a href="/jobs/create">Post a Job</a>
             
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button class="">Log Out</button>
            </form>
            @endauth
            @guest
            <a href="/login" class="hover:bg-white/25 transition-colors duration-300 border border-transparent hover:border-blue-600">Login</a>
            <a href="/register" class="hover:bg-white/25 transition-colors duration-300 border border-transparent hover:border-blue-600">Register</a> 
            @endguest
        </div>



        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>


 
</body>
</html>