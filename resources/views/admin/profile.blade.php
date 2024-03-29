<x-auth-layout>


    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <livewire:admin.update-profile-information-form />

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    <livewire:admin.update-password-form />
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    <livewire:admin.two-factor-authentication-form />
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                <livewire:admin.logout-other-browser-sessions-form />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    <livewire:admin.delete-user-form />
                </div>
            @endif
        </div>
    </div>
</x-auth-layout>
