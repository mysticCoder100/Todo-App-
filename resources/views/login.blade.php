@props(["loginFields" => []])

<x-base.base>
    <main class="grid items-center justify-items-center">
        <section class="[&>*]:p-6  w-[min(95%,30rem)]">
            <form action="" class="card bg-base-100 shadow-xl shadow-gray-300 dark:shadow-gray-900 rounded-xl p-6 max-w-md mx-auto" method="POST">

                @csrf

                <h2 class="text-3xl font-bold text-gray-700 dark:text-white mb-8 tracking-wide">
                        Login to Your Account
                    </h2>

                    <div class="mb-2">
                        @if(session()->has('error'))
                                <div role="alert" class="alert alert-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-950">{{ session('error') }}</span>
                                </div>
                        @elseif(session()->has("success"))
                                <div role="alert" class="alert alert-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-gray-950">{{ session('success') }}</span>
                                </div>
                        @endif
                    </div>


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
    </main>
</x-base.base>
