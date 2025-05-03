<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Salary Slip') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6">
                    <x-create-link :href="route('salary-slip.index')" wire:navigate>
                        {{ __('Back') }}
                    </x-create-link>
                    <div class="p-2">
                        <form wire:submit.prevent="update" class="mt-6 space-y-6">
                            <div>
                                <x-input-label for="employee_id" :value="__('Employee')" />
                                <x-text-input wire:model="employee" id="employee" name="employee" type="text"
                                    class="mt-1 block w-full" disabled />
                                <input type="hidden" wire:model="employee_id" name="employee_id" id="employee_id">
                                <x-input-error class="mt-2" :messages="$errors->get('employee_id')" />
                            </div>

                            <div>
                                <x-input-label for="salary_month" :value="__('Salary Month')" />
                                <x-text-input wire:model="salary_month" id="salary_month" name="salary_month"
                                    type="date" class="mt-1 block w-full" autofocus autocomplete="salary_month" />
                                <x-input-error class="mt-2" :messages="$errors->get('salary_month')" />
                            </div>

                            <div>
                                <x-input-label for="earnings" :value="__('Earnings')" />
                                <x-text-input wire:model="earnings" id="earnings" name="earnings" type="text"
                                    class="mt-1 block w-full" autofocus autocomplete="earnings" />
                                <x-input-error class="mt-2" :messages="$errors->get('earnings')" />
                            </div>

                            <div>
                                <x-input-label for="deductions" :value="__('Deductions')" />
                                <x-text-input wire:model="deductions" id="deductions" name="deductions" type="text"
                                    class="mt-1 block w-full" autofocus autocomplete="deductions" />
                                <x-input-error class="mt-2" :messages="$errors->get('deductions')" />
                            </div>

                            <div>
                                <x-input-label for="net_salary" :value="__('Net Salary')" />
                                <x-text-input wire:model="net_salary" id="net_salary" name="net_salary" type="text"
                                    class="mt-1 block w-full" autofocus autocomplete="net_salary" />
                                <x-input-error class="mt-2" :messages="$errors->get('net_salary')" />
                            </div>

                            <div>
                                <x-input-label for="status" :value="__('Status')" />
                                <select wire:model="status" id="status" name="status"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="1">Already Transferred</option>
                                    <option value="0">Not Yet Transferred</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('status')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                <x-action-message class="me-3" on="dispatch-notification">
                                    {{ __('Salary Slip updated successfully.') }}
                                </x-action-message>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
