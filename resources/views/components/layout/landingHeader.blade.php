@props(["navLinks" => []])

<header class="py-4 px-4 md:px-8 bg-base-100 shadow-md sticky top-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-primary">
            Todo App
        </a>
        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                @foreach($navLinks as $links)
                    <li>
                        <a href="{{$links["url"]}}"
                           class="text-base-content hover:text-primary transition-colors duration-300">
                            {{$links["label"]}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="flex gap-4">
            <a href="{{ url('/login')  }}" class="btn btn-outline btn-primary">
                Login
            </a>
            <a href="{{ url('/register')  }}" class="hidden md:inline-flex btn btn-primary">
                Get Started
            </a>
        </div>
    </div>
</header>
