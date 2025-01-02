<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Permisions') }}
            </h2>
            <a href="{{ route('permissions.create') }}"
                class="bg-slate-700 hover:bg-slate-500 text-sm rounded-md px-5 py-1 text-white">Create</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message></x-message>
            <table class="w-full table-responsive-sm">
                <thead class="bg-gray-50">
                    <tr class="border-b">
                        <th class="px-6 py-3 text-left" width="60">#</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left" width="180">Created</th>
                        <th class="px-6 py-3 text-center" width="200">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if ($permissions->isNotEmpty())
                        @foreach ($permissions as $permission)
                    <tr class="border-b">
                                <td class="px-6 py-3 text-left">
                                    {{$permission->id}}
                                </td>
                                <td class="px-6 py-3 text-left">
                                    {{$permission->name}}
                                </td>
                                <td class="px-6 py-3 text-left">
                                    {{\Carbon\Carbon::parse($permission->created_at)->format('d M, Y')}}
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <a href="{{route('permissions.edit', $permission->id)}}" class="bg-slate-600 hover:bg-slate-500 text-sm rounded-md px-2 py-2 text-white">Edit</a>
                                    <a href="#" class="bg-red-600 hover:bg-red-500 text-sm rounded-md px-2 py-2 text-white">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                </tbody>
            </table>
            <div class="my-2">
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
