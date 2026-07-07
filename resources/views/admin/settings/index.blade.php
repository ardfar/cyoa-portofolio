<x-admin.layout>
    <x-slot name="header">
        Site Settings
    </x-slot>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden max-w-4xl">
        <form action="{{ route('admin.settings.update') }}" method="POST" class="p-6 space-y-8">
            @csrf
            @method('PUT')

            <!-- General Settings -->
            <div>
                <h3 class="text-lg font-medium text-gray-900 border-b border-gray-200 pb-2 mb-4">General Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                        $general = $settings->get('general', collect());
                    @endphp
                    <div>
                        <label for="site_title" class="block text-sm font-medium text-gray-700">Site Title</label>
                        <input type="text" name="site_title" id="site_title" value="{{ old('site_title', $general->firstWhere('key', 'site_title')->value ?? 'CYOA Portfolio') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    </div>
                    <div>
                        <label for="contact_email" class="block text-sm font-medium text-gray-700">Contact Email</label>
                        <input type="email" name="contact_email" id="contact_email" value="{{ old('contact_email', $general->firstWhere('key', 'contact_email')->value ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    </div>
                    <div class="md:col-span-2">
                        <label for="site_description" class="block text-sm font-medium text-gray-700">Site Description (SEO)</label>
                        <textarea name="site_description" id="site_description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">{{ old('site_description', $general->firstWhere('key', 'site_description')->value ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Social Links -->
            <div>
                <h3 class="text-lg font-medium text-gray-900 border-b border-gray-200 pb-2 mb-4">Social Links</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @php
                        $social = $settings->get('social', collect());
                    @endphp
                    <div>
                        <label for="social_github" class="block text-sm font-medium text-gray-700">GitHub URL</label>
                        <input type="url" name="social_github" id="social_github" value="{{ old('social_github', $social->firstWhere('key', 'social_github')->value ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    </div>
                    <div>
                        <label for="social_linkedin" class="block text-sm font-medium text-gray-700">LinkedIn URL</label>
                        <input type="url" name="social_linkedin" id="social_linkedin" value="{{ old('social_linkedin', $social->firstWhere('key', 'social_linkedin')->value ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    </div>
                    <div>
                        <label for="social_twitter" class="block text-sm font-medium text-gray-700">Twitter/X URL</label>
                        <input type="url" name="social_twitter" id="social_twitter" value="{{ old('social_twitter', $social->firstWhere('key', 'social_twitter')->value ?? '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    </div>
                </div>
            </div>

            <!-- Persona Specific Configurations -->
            <div>
                <h3 class="text-lg font-medium text-gray-900 border-b border-gray-200 pb-2 mb-4">Persona Landing Pages</h3>
                <div class="space-y-6">
                    @php
                        $persona = $settings->get('persona', collect());
                    @endphp
                    <!-- Tech Persona -->
                    <div class="bg-indigo-50 p-4 rounded-md border border-indigo-100">
                        <h4 class="font-medium text-indigo-900 mb-2">Tech Persona</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="tech_headline" class="block text-sm font-medium text-indigo-800">Headline</label>
                                <input type="text" name="tech_headline" id="tech_headline" value="{{ old('tech_headline', $persona->firstWhere('key', 'tech_headline')->value ?? 'Software Engineer & Architect') }}" class="mt-1 block w-full rounded-md border-indigo-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="tech_subheadline" class="block text-sm font-medium text-indigo-800">Sub-headline</label>
                                <textarea name="tech_subheadline" id="tech_subheadline" rows="2" class="mt-1 block w-full rounded-md border-indigo-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('tech_subheadline', $persona->firstWhere('key', 'tech_subheadline')->value ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Management Persona -->
                    <div class="bg-yellow-50 p-4 rounded-md border border-yellow-100">
                        <h4 class="font-medium text-yellow-900 mb-2">Management Persona</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="management_headline" class="block text-sm font-medium text-yellow-800">Headline</label>
                                <input type="text" name="management_headline" id="management_headline" value="{{ old('management_headline', $persona->firstWhere('key', 'management_headline')->value ?? 'Product Manager & Leader') }}" class="mt-1 block w-full rounded-md border-yellow-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="management_subheadline" class="block text-sm font-medium text-yellow-800">Sub-headline</label>
                                <textarea name="management_subheadline" id="management_subheadline" rows="2" class="mt-1 block w-full rounded-md border-yellow-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">{{ old('management_subheadline', $persona->firstWhere('key', 'management_subheadline')->value ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Creative Persona -->
                    <div class="bg-orange-50 p-4 rounded-md border border-orange-100">
                        <h4 class="font-medium text-orange-900 mb-2">Creative Persona</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div>
                                <label for="creative_headline" class="block text-sm font-medium text-orange-800">Headline</label>
                                <input type="text" name="creative_headline" id="creative_headline" value="{{ old('creative_headline', $persona->firstWhere('key', 'creative_headline')->value ?? 'Designer & Visual Artist') }}" class="mt-1 block w-full rounded-md border-orange-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm">
                            </div>
                            <div>
                                <label for="creative_subheadline" class="block text-sm font-medium text-orange-800">Sub-headline</label>
                                <textarea name="creative_subheadline" id="creative_subheadline" rows="2" class="mt-1 block w-full rounded-md border-orange-300 shadow-sm focus:border-orange-500 focus:ring-orange-500 sm:text-sm">{{ old('creative_subheadline', $persona->firstWhere('key', 'creative_subheadline')->value ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4 flex items-center justify-end border-t border-gray-100">
                <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                    Save All Settings
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
