<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Salary Slips') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6">
                    @if (auth()->user()->role == 0)
                        <x-create-link :href="route('salary-slip.create')" wire:navigate>
                            {{ __('Create Salary Slip') }}
                        </x-create-link>
                    @else
                        <h1><b>Your Salary Slip</b></h1>
                    @endif
                    <div class="flex items-center gap-4 py-4">
                        <x-action-message class="me-3" on="dispatch-notification">
                            {{ __('Salary Slip deleted successfully.') }}
                        </x-action-message>
                    </div>
                    <div style="width: 100%;">
                        <table class="text-sm text-gray-300" style="width: 100%;">
                            <thead class="uppercase text-xs">
                                <tr>
                                    <th class="px-6 py-3">Employee</th>
                                    <th class="px-6 py-3">Salary Month</th>
                                    <th class="px-6 py-3">Earnings</th>
                                    <th class="px-6 py-3">Deductions</th>
                                    <th class="px-6 py-3">Net Salary</th>
                                    <th class="px-6 py-3">Status</th>
                                    @if (auth()->user()->role == 0)
                                        <th class="px-6 py-3" colspan="2">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-500">
                                @foreach ($salaryslips as $salaryslip)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->employee->first_name . ' ' . $salaryslip->employee->last_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->salary_month }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->earnings }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->deductions }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->net_salary }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $salaryslip->StatusTransfer }}
                                        </td>
                                        @if (auth()->user()->role == 0)
                                            <td>
                                                <x-edit-link :href="route('salary-slip.edit', $salaryslip->id)" wire:navigate style="margin-right: 10px">
                                                    {{ __('EDIT') }}
                                                </x-edit-link>
                                                <button wire:click="confirmDelete({{ $salaryslip->id }})"
                                                    class="text-red-600 font-semibold">DELETE</button>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                                <script>
                                    window.addEventListener('confirm-delete', () => {
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "Deleting data cannot be restored!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#d33',
                                            cancelButtonColor: '#3085d6',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.Livewire.dispatch('deleteConfirmed');
                                            }
                                        });
                                    });
                                </script>
                            </tbody>
                        </table>
                        {{ $salaryslips->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
