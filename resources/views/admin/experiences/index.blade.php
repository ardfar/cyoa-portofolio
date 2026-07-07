<x-admin.layout>
    <x-slot name="header">
        Experiences
    </x-slot>

    <div class="mb-6 flex justify-end">
        <a href="{{ route('admin.experiences.create') }}" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow-sm transition-colors text-sm">
            Add Experience
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company / Role</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Persona Tags</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($experiences as $experience)
                <tr>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900">{{ $experience->company }}</div>
                        <div class="text-sm text-gray-500">{{ $experience->role }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $experience->start_date->format('M Y') }} - 
                        {{ $experience->end_date ? $experience->end_date->format('M Y') : 'Present' }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap gap-1">
                            @if($experience->persona_tags)
                                @foreach($experience->persona_tags as $tag)
                                    <span class="px-2 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $tag === 'tech' ? 'bg-indigo-100 text-indigo-800' : '' }}
                                        {{ $tag === 'management' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                        {{ $tag === 'creative' ? 'bg-orange-100 text-orange-800' : '' }}
                                    ">
                                        {{ ucfirst($tag) }}
                                    </span>
                                @endforeach
                            @else
                                <span class="text-xs text-gray-400">None</span>
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('admin.experiences.edit', $experience) }}" class="text-persona-tech hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.experiences.destroy', $experience) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this experience?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-10 text-center text-sm text-gray-500">
                        No experiences found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin.layout>
