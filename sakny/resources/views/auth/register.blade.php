<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name / الاسم')" />
            <x-text-input id="name" class="block my-2 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
    <x-input-label for="phone" :value="__('Phone / رقم الهاتف')" class="mt-2" />
    <x-text-input id="phone" class="block my-2 w-full"
                  type="text"
                  name="phone"
                  :value="old('phone')"
                  required autofocus />
    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
</div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password / كلمه المرور')" />

            <x-text-input id="password" class="block my-2 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password / تاكيد كلمه المرور')" />

            <x-text-input id="password_confirmation" class="block my-2 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-2 justify-end mt-3">
            <a class="underline text-xs md:text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('لديك حساب بالفعل؟') }}
            </a>

            <x-primary-button class="">
                {{ __('Register / تسجيل الان') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
