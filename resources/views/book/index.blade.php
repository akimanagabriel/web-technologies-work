<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($books)
                        <p>All books</p>

                        <div class="my-3">
                            <table class="border w-100">
                                <thead>
                                    <tr class="border">
                                        <th class="border px-5 border-gray-500 text-gray-300">Name</th>
                                        <th class="border px-5 border-gray-500 text-gray-300">Author</th>
                                        <th class="border px-5 border-gray-500 text-gray-300">Publisher</th>
                                        <th class="border px-5 border-gray-500 text-gray-300">Publication date</th>
                                        <th class="border px-5 border-gray-500 text-gray-300">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr class="border border-gray-500 text-gray-300">
                                            <td class="border border-gray-500 px-5 py-1">{{ $book->name }}</td>
                                            <td class="border border-gray-500 px-5 py-1">{{ $book->author }}</td>
                                            <td class="border border-gray-500 px-5 py-1">{{ $book->publisher }}</td>
                                            <td class="border border-gray-500 px-5 py-1">{{ $book->published_at }}</td>
                                            <td class="border border-gray-500 px-5 py-1">
                                                <div class="flex gap-3">
                                                    {{-- delete --}}
                                                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit"
                                                        class="py-1 px-4 rounded bg-orange-600 text-white">REMOVE</button>
                                                </form>

                                                {{-- edit --}}
                                                <a href="{{ route('books.edit', $book->id) }}">
                                                    <button type="submit"
                                                        class="py-1 px-4 rounded bg-sky-600 text-white">EDIT</button>
                                                </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No books available</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
