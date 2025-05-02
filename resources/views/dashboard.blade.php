<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php
                        $getUser = auth()->user();

                        if ($getUser->role == 0) {
                            $data = \App\Models\Superior::where('user_id', $getUser->id)->first();
                            $name = $data ? $data->first_name . ' ' . $data->last_name : 'Unknown Superior';
                        } else {
                            $data = \App\Models\Employee::where('user_id', $getUser->id)->first();
                            $name = $data ? $data->first_name . ' ' . $data->last_name : 'Unknown Employee';
                        }
                    @endphp

                    Welcome <b>{{ $name }}!</b> <br>
                    @if (auth()->user()->role == 0)
                        Employee Total : <b>{{ \App\Models\Employee::count() }}</b>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
