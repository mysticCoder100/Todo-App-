@props(["contactFields" => []])

<section id="contact" class="py-16 md:py-24 px-4 md:px-8">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold dark:text-gray-300 text-gray-800 text-center mb-12">Contact Us</h2>
        <div class="bg-white dark:bg-gray-800 dark:border-gray-900 rounded-2xl shadow-md p-8 md:p-12 max-w-lg mx-auto border border-gray-200">
            <form class="space-y-6" method="POST">
                @csrf

                @foreach($contactFields as $key => $contactField)
                    @php
                        $style = $contactField['type'] == "textarea" ? 'textarea-primary' : 'input-primary';
                    @endphp
                    <livewire:input
                        name="{{ $contactField['name'] }}"
                        label="{{ $contactField['label'] }}"
                        placeholder="{{ $contactField['placeholder'] }}"
                        type="{{ $contactField['type'] }}"
                        classes="w-full {{ $style  }}"
                    />
                @endforeach
                <button type="submit" class="btn btn-primary lg:btn-lg w-full">Send Message</button>
            </form>
        </div>
    </div>
</section>
