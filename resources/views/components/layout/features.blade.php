@props(["features" => []])

<section id="features" class=" py-16 md:py-24 px-4 md:px-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold dark:text-gray-300 text-gray-800 text-center mb-12">Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
           @foreach($features as $feature)
                <div class="bg-white dark:border-gray-900 dark:bg-gray-800 rounded-2xl shadow-md p-7 hover:shadow-lg transition-shadow duration-300 border border-gray-100 hover:border-blue-500/30">
                    <h3 class="text-2xl font-semibold dark:text-base-300 text-primary mb-4">{{$feature["title"]}}</h3>
                    <p class="text-gray-600">{{$feature["text"]}}</p>
                </div>
           @endforeach
        </div>
    </div>
</section>
