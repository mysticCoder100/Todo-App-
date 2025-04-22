@props(["loginFields" => []])

<x-base.base>
    <div class="grid items-center justify-items-center">
        <section class="[&>*]:p-6  w-[min(95%,30rem)]">
            <form action="" class="card bg-base-100 shadow-xl shadow-gray-300 dark:shadow-gray-900 rounded-xl p-6 max-w-md mx-auto">

            <h2 class="text-3xl font-bold text-gray-700 dark:text-white mb-8 tracking-wide">
                    Login to Your Account
                </h2>
                <div class="mb-4">
                    @foreach($loginFields as $loginField)
                        @php
                            $style = $loginField['type'] == "textarea" ? 'textarea-primary' : 'input-primary';
                        @endphp
                        <livewire:input
                            name="{{ $loginField['name'] }}"
                            label="{{ $loginField['label'] }}"
                            placeholder="{{ $loginField['placeholder'] }}"
                            type="{{ $loginField['type'] }}"
                            class="w-full {{ $style  }}"
                            isPassword="{{ $loginField['type'] === 'password'  }}"
                            classes="w-full {{ $style  }}"
                        />
                    @endforeach
                </div>
                <button class="btn btn-primary w-full lg:btn-lg mb-3">
                    Login
                </button>
                <div class="mt-2 text-center">
                    <a href="#" class="link link-primary link-hover">Forgot Password?</a>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-gray-600">Don't have an account?
                        <a href="{{ url("/register")  }}" class="link link-primary link-hover">Register</a>
                    </p>
                </div>
            </form>
        </section>
    </div>
</x-base.base>
