<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 mx-auto">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($messages as $message)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-wrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <a href="/messages/{{$message->id}}" class="text-blue-300 hover:text-blue-500 text-sm">
                                                        {{ ucwords($message->title) }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-wrap">
                                            <div class="text-sm text-gray-900">{{ $message->message }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-wrap text-right text-sm font-medium">
                                            <a href="/dashboard/message/{{ $message->id }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-wrap text-right text-sm font-medium">
                                            <a href="/dashboard/message/{{ $message->id }}/delete" class="text-red-600 hover:text-indigo-900">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{ $messages->links()}}

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>