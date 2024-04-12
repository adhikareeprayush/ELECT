<x-admin-layout>
    <div class="table-container p-3 ">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sender
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Subject
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Message
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $message->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $message->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $message->subject }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $message->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $message->message }}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">
                                <form action="/admin/messages/delete/{{ $message->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
    <div class="absolute left-1/2 space-x-3 w-80">
        {{ $messages->links() }}
    </div>


</x-admin-layout>
