<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>create a new book</p>

                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-4">
                            <label for="name" class="block text-lg font-medium">Name:</label>
                            <input value="{{ $book->name }}" type="text" id="name" name="name"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('name')
                                <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="author" class="block text-lg font-medium">Author:</label>
                            <input value="{{ $book->author }}" type="text" id="author" name="author"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('author')
                                <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="publisher" class="block text-lg font-medium">Publisher:</label>
                            <input value="{{ $book->publisher }}" type="text" id="publisher" name="publisher"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('publisher')
                                <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="published_at" class="block text-lg font-medium">Published At:</label>
                            <input value="{{ $book->published_at }}" type="date" id="published_at"
                                name="published_at"
                                class="w-full px-4 py-2 rounded-md bg-gray-700 text-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            @error('published_at')
                                <p class="text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="px-6 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Save
                            Changes</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
