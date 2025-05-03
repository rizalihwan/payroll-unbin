<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Department') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6">
                    <x-create-link :href="route('department.index')" wire:navigate>
                        {{ __('Back') }}
                    </x-create-link>
                    <div class="p-2">
                        <form wire:submit.prevent="store" class="mt-6 space-y-6">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input wire:model="name" id="name" name="name" type="text"
                                    class="mt-1 block w-full" autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                <x-action-message class="me-3" on="dispatch-notification">
                                    {{ __('Department created successfully.') }}
                                </x-action-message>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
