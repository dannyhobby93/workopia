<x-layout>
    <h1 class="text-2xl">Create New Job</h1>

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div class="my-5">
            <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="my-5">
            <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
            @error('description')
                <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</x-layout>
