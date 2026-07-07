<x-admin.layout>
    <x-slot name="header">
        Skills & Certifications
    </x-slot>

    <div class="mb-6 flex justify-end">
        <a href="{{ route('admin.skills.create') }}" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow-sm transition-colors text-sm">
            Add Skill
        </a>
    </div>

    <div class="space-y-8">
        @forelse ($skillsByCategory as $category => $skills)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">{{ $category }}</h3>
                </div>
                <ul class="divide-y divide-gray-200">
                    @foreach ($skills as $skill)
                        <li class="px-6 py-4 hover:bg-gray-50 flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium text-gray-900 flex items-center gap-2">
                                    {{ $skill->name }}
                                    @if($skill->certifications_count > 0)
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $skill->certifications_count }} Cert(s)
                                        </span>
                                    @endif
                                </div>
                                <div class="mt-1 flex flex-wrap gap-1">
                                    @if($skill->persona_tags)
                                        @foreach($skill->persona_tags as $tag)
                                            <span class="px-2 py-0.5 inline-flex text-[10px] leading-4 font-semibold rounded-full 
                                                {{ $tag === 'tech' ? 'bg-indigo-100 text-indigo-800' : '' }}
                                                {{ $tag === 'management' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                                {{ $tag === 'creative' ? 'bg-orange-100 text-orange-800' : '' }}
                                            ">
                                                {{ ucfirst($tag) }}
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <a href="{{ route('admin.skills.edit', $skill) }}" class="text-persona-tech hover:text-indigo-900 text-sm font-medium">Edit</a>
                                <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Delete this skill? All associated certifications will also be deleted.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 text-sm font-medium">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-10 text-center text-sm text-gray-500">
                No skills found.
            </div>
        @endforelse
    </div>
</x-admin.layout>
