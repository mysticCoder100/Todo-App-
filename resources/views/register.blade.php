@props(["registerFields" => []])

<x-base.base>
    <div class="grid items-center justify-items-center">
        <section class="[&>*]:p-6  w-[min(95%,30rem)]">
            <form action="" class="card bg-base-100 shadow-xl shadow-gray-300 dark:shadow-gray-900 rounded-xl p-6 max-w-md mx-auto">

            <h2 class="text-3xl font-bold text-gray-700 dark:text-white mb-8 tracking-wide">
                    Create an Account
                </h2>
                <div class="mb-4">
                    @foreach($registerFields as $registerField)
                        @php
                            $style = $registerField['type'] == "textarea" ? 'textarea-primary' : 'input-primary';
                        @endphp
                        <livewire:input
                            name="{{ $registerField['name'] }}"
                            label="{{ $registerField['label'] }}"
                            placeholder="{{ $registerField['placeholder'] }}"
                            type="{{ $registerField['type'] }}"
                            class="w-full {{ $style  }}"
                            isPassword="{{ $registerField['type'] === 'password'  }}"
                            classes="w-full {{ $style  }}"
                        />
                    @endforeach
                </div>
                <button class="btn btn-primary w-full lg:btn-lg mb-3">
                    Register
                </button>

                <div class="mt-4 text-center">
                    <p class="text-gray-600">Already have an account?
                        <a href="{{ url("/login")  }}" class="link link-primary link-hover">login</a>
                    </p>
                </div>
            </form>
        </section>
    </div>
</x-base.base>
