<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class CmsController extends Controller
{
    /**
     * Display the CMS dashboard
     */
    public function dashboard()
    {
        $portfolioConfig = config('portfolio');
        return view('cms.dashboard', compact('portfolioConfig'));
    }

    /**
     * Update site settings
     */
    public function updateSiteSettings(Request $request)
    {
        $validated = $request->validate([
            'site_title' => 'required|string|max:255',
            'site_description' => 'required|string|max:500',
            'site_keywords' => 'required|string|max:500',
            'site_author' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable|string|max:20',
            'contact_address' => 'nullable|string|max:500',
        ]);

        $this->updateConfigFile('site', $validated);
        
        Cache::flush();
        
        return redirect()->back()->with('success', 'Site settings updated successfully!');
    }

    /**
     * Update persona settings
     */
    public function updatePersonaSettings(Request $request, string $persona)
    {
        $validated = $request->validate([
            'headline' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'seo_title' => 'required|string|max:255',
            'seo_description' => 'required|string|max:500',
            'seo_keywords' => 'required|string|max:500',
        ]);

        $this->updateConfigFile("personas.{$persona}", $validated);
        
        Cache::flush();
        
        return redirect()->back()->with('success', 'Persona settings updated successfully!');
    }

    /**
     * Update project information
     */
    public function updateProject(Request $request, string $persona, int $projectIndex)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'technologies' => 'required|string|max:500',
            'link' => 'nullable|url',
            'github' => 'nullable|url',
        ]);

        $portfolioConfig = config('portfolio');
        if (isset($portfolioConfig['personas'][$persona]['projects'][$projectIndex])) {
            $portfolioConfig['personas'][$persona]['projects'][$projectIndex] = array_merge(
                $portfolioConfig['personas'][$persona]['projects'][$projectIndex],
                $validated
            );
            
            $this->updateConfigFile("personas.{$persona}.projects", $portfolioConfig['personas'][$persona]['projects']);
        }

        Cache::flush();
        
        return redirect()->back()->with('success', 'Project updated successfully!');
    }

    /**
     * Add new project
     */
    public function addProject(Request $request, string $persona)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'technologies' => 'required|string|max:500',
            'link' => 'nullable|url',
            'github' => 'nullable|url',
        ]);

        $portfolioConfig = config('portfolio');
        $projects = $portfolioConfig['personas'][$persona]['projects'] ?? [];
        
        $newProject = [
            'title' => $validated['title'],
            'description' => $validated['description'],
            'technologies' => explode(',', $validated['technologies']),
            'link' => $validated['link'] ?? '#',
            'github' => $validated['github'] ?? '#',
            'icon' => 'code',
        ];
        
        $projects[] = $newProject;
        
        $this->updateConfigFile("personas.{$persona}.projects", $projects);

        Cache::flush();
        
        return redirect()->back()->with('success', 'Project added successfully!');
    }

    /**
     * Remove project
     */
    public function removeProject(string $persona, int $projectIndex)
    {
        $portfolioConfig = config('portfolio');
        if (isset($portfolioConfig['personas'][$persona]['projects'][$projectIndex])) {
            $projects = $portfolioConfig['personas'][$persona]['projects'];
            array_splice($projects, $projectIndex, 1);
            
            $this->updateConfigFile("personas.{$persona}.projects", $projects);
        }

        Cache::flush();
        
        return redirect()->back()->with('success', 'Project removed successfully!');
    }

    /**
     * Update configuration file
     */
    private function updateConfigFile(string $key, array $data)
    {
        $configPath = config_path('portfolio.php');
        $config = include $configPath;
        
        // Update the specific key
        $keys = explode('.', $key);
        $current = &$config;
        
        foreach ($keys as $k) {
            if (!isset($current[$k])) {
                $current[$k] = [];
            }
            $current = &$current[$k];
        }
        
        $current = $data;
        
        // Write back to file
        $content = "<?php\n\nreturn " . var_export($config, true) . ";\n";
        File::put($configPath, $content);
    }

    /**
     * Clear cache
     */
    public function clearCache()
    {
        Cache::flush();
        
        return redirect()->back()->with('success', 'Cache cleared successfully!');
    }
}