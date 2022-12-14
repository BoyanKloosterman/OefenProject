<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($buildings as $building)
                        <h1 class="mb-5">{{$building->name}}</h1>
                        <div class="w-2/4">
                            <table class="w-full mw-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th>Employee name</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($building->employees as $employee)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="p-3">{{$employee->name}}</td>
                                            <td class="p-3">{{$employee->role->name}}</td>

                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
