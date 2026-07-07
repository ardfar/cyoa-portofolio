<x-admin.layout>
    <x-slot name="header">
        Add Skill
    </x-slot>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden max-w-2xl">
        <form action="{{ route('admin.skills.store') }}" method="POST" class="p-6 space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Skill Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm" placeholder="e.g., PHP, Project Management">
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <input list="categories" name="category" id="category" value="{{ old('category') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm" placeholder="e.g., Frontend, Backend, Soft Skills">
                <datalist id="categories">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}">
                    @endforeach
                </datalist>
                @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Persona Tags -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Persona Tags</label>
                <div class="flex gap-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="tech" {{ in_array('tech', old('persona_tags', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-persona-tech focus:ring-persona-tech">
                        <span class="ml-2 text-sm text-gray-700">Tech</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="management" {{ in_array('management', old('persona_tags', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-500">
                        <span class="ml-2 text-sm text-gray-700">Management</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="creative" {{ in_array('creative', old('persona_tags', [])) ? 'checked' : '' }} class="rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                        <span class="ml-2 text-sm text-gray-700">Creative</span>
                    </label>
                </div>
                <p class="mt-1 text-xs text-gray-500">Skills without tags will show up for all personas, or you can use tags to restrict them.</p>
                @error('persona_tags') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex items-center justify-end border-t border-gray-100">
                <a href="{{ route('admin.skills.index') }}" class="text-gray-500 hover:text-gray-700 font-medium px-4 py-2">Cancel</a>
                <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                    Save Skill
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
