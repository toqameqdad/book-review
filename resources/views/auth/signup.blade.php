<x-auth-layout :title="'Signup'">
    <div class="flex justify-center items-center min-h-screen">
        <form method="POST" action="{{ route('auth.signupStore') }}"
              class="bg-white/40 backdrop-blur-sm p-8 rounded-2xl shadow-lg w-full max-w-md space-y-6">
            @csrf

            <h2 class="text-2xl font-semibold text-gray-900 text-center">Sign Up</h2>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-gray-900 placeholder:text-gray-400 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm mt-2">
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-gray-900 placeholder:text-gray-400 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm mt-2">
                @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div x-data="{ show: false }" class="relative">
                <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                <input :type="show ? 'text' : 'password'" id="password" name="password"
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-gray-900 placeholder:text-gray-400 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm mt-2">
                <button type="button" @click="show = !show"
                        class="absolute right-0 top-1/2 -translate-y-1/2 px-3 text-gray-400" tabindex="-1">
                    <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3l18 18"/>
                    </svg>
                </button>
                @error('password') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation"
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-gray-900 placeholder:text-gray-400 outline-1 outline-gray-300 focus:outline-2 focus:outline-indigo-600 sm:text-sm mt-2">
            </div>

            <button type="submit"
                    class="w-full rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Sign Up
            </button>

            <p class="text-center text-sm text-gray-700">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
            </p>
        </form>
    </div>
</x-auth-layout>
