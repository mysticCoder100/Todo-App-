@props(["pricingPlans" => []])

<section id="pricing" class=" py-16 md:py-24 px-4 md:px-8">
        <div class="container mx-auto">
            <h2 class="text-3xl dark:text-gray-300 font-bold text-gray-800 text-center mb-12">
                Pricing Plans
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($pricingPlans as $pricingPlan)
                    <div class="bg-white rounded-2xl shadow-md p-7 hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between border border-gray-100 hover:border-blue-500/30 dark:bg-gray-800 dark:border-gray-900"
                    >
                        <h3 class="text-2xl dark:text-gray-100 font-semibold text-gray-800 mb-4">{{$pricingPlan["name"]}}</h3>
                        <p class="text-gray-600 mb-6">{{$pricingPlan["price"]}}</p>
                        <ul class="list-disc list-inside text-gray-600 space-y-3 mb-8">
                            @foreach($pricingPlan["features"] as $feature)
                                <li>{{$feature}}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-primary lg:btn-lg">
                            {{$pricingPlan["button"]}}
                        </a>
                    </div>
            @endforeach
            </div>
        </div>
</section>
