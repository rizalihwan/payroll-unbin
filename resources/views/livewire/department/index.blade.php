<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Departments') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6">
                    <x-create-link :href="route('department.create')" wire:navigate>
                        {{ __('Create Department') }}
                    </x-create-link>
                    <div class="flex items-center gap-4 py-4">
                        <x-action-message class="me-3" on="dispatch-notification">
                            {{ __('Department deleted successfully.') }}
                        </x-action-message>
                    </div>
                    <div style="width: 100%;">
                        <table class="text-sm text-gray-300" style="width: 100%;">
                            <thead class="uppercase text-xs">
                                <tr>
                                    <th class="px-6 py-3">Department</th>
                                    <th class="px-6 py-3" colspan="6">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-500">
                                @foreach ($departments as $department)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4">{{ $department->name }}</td>
                                        <td>
                                            <x-edit-link :href="route('department.edit', $department->id)" wire:navigate style="margin-right: 10px">
                                                {{ __('EDIT') }}
                                            </x-edit-link>
                                            <button wire:click="confirmDelete({{ $department->id }})"
                                                class="text-red-600 font-semibold">DELETE</button>
                                        </td>
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
                        {{ $departments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
