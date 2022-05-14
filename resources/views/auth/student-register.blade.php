<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('student.register') }}">
            @csrf

            <!-- Student Card -->
            <div>
                <x-label for="student_card" :value="__('Student Card')" />

                <x-input id="student_card" class="block mt-1 w-full" type="text" name="student_card" :value="old('student_card')" required autofocus />
            </div>
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Gender -->
            <div class="mt-4">
                <x-label for="gender" :value="__('Gender')" />
               <div class="mt-2"> <x-input id="gender1" class="mx-2" type="radio" name="gender" :value="'male'" required />  Male </span> </div>
               <div class="mt-2"> <x-input id="gender2" class="mx-2" type="radio" name="gender" :value="'female'" required /> Female </div>
                <div class="mt-2"><x-input id="gender3" class="mx-2" type="radio" name="gender" :value="'neutral/other'" required /> Gender Neutral/Other </div>
            </div>
            <!-- Date of Birth -->
            <div class="mt-4">
                <x-label for="dob" :value="__('DOB')" />

                <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            </div>
            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>
            <!-- Phone Number -->
            <div class="mt-4">
                <x-label for="phone_no" :value="__('Phone Number')" />

                <x-input id="phone_no" class="block mt-1 w-full" type="number" name="phone_no" :value="old('phone_no')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('advisor.register') }}">
                    {{ __('Are you an advisor?') }}
                </a>
                <div class="px-4"></div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
