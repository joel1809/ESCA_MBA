<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name and Email -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-input-label for="name" :value="__('Noms et Prénoms')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <!-- Password and Confirm Password -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <!-- CV and Recommendation Letter -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
                <x-input-label for="cv" :value="__('Curriculum Vitae (CV)')" />
                <input id="cv" class="block mt-1 w-full" type="file" name="cv" required />
                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="recommendation_letter" :value="__('Lettre de recommandation')" />
                <input id="recommendation_letter" class="block mt-1 w-full" type="file" name="recommendation_letter" required/>
                <x-input-error :messages="$errors->get('recommendation_letter')" class="mt-2" />
            </div>
        </div>

        <!-- Cover Letter and Diplomas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div>
                <x-input-label for="cover_letter" :value="__('Lettre de motivation')" />
                <input id="cover_letter" class="block mt-1 w-full" type="file" name="cover_letter" required/>
                <x-input-error :messages="$errors->get('cover_letter')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="diplomas" :value="__('Copies de diplômes')" />
                <input id="diplomas" class="block mt-1 w-full" type="file" name="diplomas[]" multiple required/>
                <x-input-error :messages="$errors->get('diplomas')" class="mt-2" />
            </div>
        </div>

        <!-- Certifications -->
        <div class="mt-4">
            <x-input-label for="certifications" :value="__('Certifications')" />
            <input id="certifications" class="block mt-1 w-full" type="file" name="certifications[]" multiple required/>
            <x-input-error :messages="$errors->get('certifications')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('déjà enregistré?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __("S'inscrire") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
