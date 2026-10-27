<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Create New Event</h2>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('events.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Event Title</label>
                        <input type="text" name="title" required value="{{ old('title') }}" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" rows="3" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Location</label>
                        <input type="text" name="location" value="{{ old('location') }}" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Event Date</label>
                            <input type="date" name="event_date" required value="{{ old('event_date') }}" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Time In</label>
                            <input type="time" name="time_in" required value="{{ old('time_in') }}" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2">Time Out</label>
                            <input type="time" name="time_out" required value="{{ old('time_out') }}" class="w-full border-gray-300 rounded-md shadow-sm p-2 border">
                        </div>
                    </div>

                    <div class="flex items-center justify-end">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md shadow">
                            Save Event
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> @if (session('success'))
    <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px; border-radius: 8px; margin-bottom: 20px; font-weight: bold; text-align: center;">
        🎉 {{ session('success') }}
    </div>
@endif