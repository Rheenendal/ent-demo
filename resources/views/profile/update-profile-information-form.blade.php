<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" disabled wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="Email" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" disabled wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Favourite Movie -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="favourite_movie" value="Favourite Movie" />
            <x-jet-input id="favourite_movie" type="favourite_movie" class="mt-1 block w-full" wire:model.defer="state.favourite_movie" />
            <x-jet-input-error for="favourite_movie" class="mt-2" />
        </div>

        <!-- Favourite Band -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="favourite_band" value="Favourite Band" />
            <x-jet-input id="favourite_band" type="favourite_band" class="mt-1 block w-full" wire:model.defer="state.favourite_band" />
            <x-jet-input-error for="favourite_band" class="mt-2" />
        </div>

        <!-- Favourite Crypto -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="favourite_cryptocurrency" value="Favourite Cryptocurrency" />
            <x-jet-input id="favourite_cryptocurrency" type="favourite_cryptocurrency" class="mt-1 block w-full" wire:model.defer="state.favourite_cryptocurrency" />
            <x-jet-input-error for="favourite_cryptocurrency" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
