<x-base.base>
   <div class="grid grid-rows-[auto_1fr_auto]">
       <x-layout.landingHeader :$navLinks />
       <main>
           <x-layout.hero />
           <x-layout.features :$features />
           <x-layout.pricing :$pricingPlans />
           <x-layout.testimonials />
           <x-layout.contacts :$contactFields />

       </main>
       <footer class="bg-gray-800 text-white py-8 px-4 md:px-8">
           <div class="container mx-auto text-center">
               <p>&copy; {{now()->format("Y")}} Todo App. All rights reserved.</p>
           </div>
       </footer>
   </div>
</x-base.base>
