<?php

namespace App\Http\Controllers;

use App\Models\MgmtRecord;
use App\Models\Persona;
use App\Models\Role;
use App\Models\TechExperience;
use App\Models\TechProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PersonaController extends Controller
{
    /**
     * Display the gateway page with persona selection
     */
    public function index(Request $request): View
    {
        $activePersona = $request->query('persona', 'gateway');

        return view('gateway', [
            'activePersona' => $activePersona,
            'personas' => $this->getPersonas(),
        ]);
    }

    /**
     * Get persona content via AJAX
     */
    /**
     * Get persona content via AJAX
     */
    public function content(string $persona): View
    {
        $personas = $this->getPersonas();
        $key = $persona === 'creative' ? 'operations' : $persona;
        if (! isset($personas[$key])) {
            abort(404);
        }

        $data = ['persona' => $personas[$key]];
        
        if ($key === 'operations') { // Creative Persona
            $allPhotos = $this->getAllPhotos();
            // Shuffle and take 6 for preview
            shuffle($allPhotos);
            $data['gallery_preview'] = array_slice($allPhotos, 0, 6);
        }

        if ($key === 'tech') {
            $dbPersona = null;
            if (Schema::hasTable('personas')) {
                $dbPersona = Persona::find('tech');
            }
            if ($dbPersona) {
                $data['persona'] = [
                    'id' => $dbPersona->id,
                    'name' => $dbPersona->name,
                    'headline' => $dbPersona->headline,
                    'description' => $dbPersona->description,
                    'roles' => $dbPersona->roles,
                    'theme' => $dbPersona->theme,
                    'accent_color' => $dbPersona->accent_color,
                ];
            }
            $projects = [];
            if (Schema::hasTable('tech_projects')) {
                $projects = TechProject::orderBy('id')->get()->map(function ($p) {
                    return [
                        'title' => $p->title,
                        'description' => $p->description,
                        'technologies' => $p->technologies ?? [],
                        'link' => $p->link,
                        'image' => $p->image,
                    ];
                })->all();
            }
            $experiences = [];
            if (Schema::hasTable('tech_experiences')) {
                $experiences = TechExperience::orderBy('id')->get()->map(function ($e) {
                    return [
                        'title' => $e->title,
                        'org' => $e->org,
                    ];
                })->all();
            }
            if (count($projects) === 0) {
                $projects = $this->getTechProjects();
            }
            if (count($experiences) === 0) {
                $experiences = $this->getTechExperiences();
            }
            $data['projects'] = $projects;
            $data['experiences'] = $experiences;
            if (count($experiences) === 0) {
                $experiences = $this->getTechExperiences();
            }
            $data['projects'] = $projects;
            $data['experiences'] = $experiences;
            $data['stack'] = $this->getTechStack();
        }
        if ($key === 'management') {
            $dbPersona = null;
            if (Schema::hasTable('personas')) {
                $dbPersona = Persona::find('management');
            }
            if ($dbPersona) {
                $data['persona'] = [
                    'id' => $dbPersona->id,
                    'name' => $dbPersona->name,
                    'headline' => $dbPersona->headline,
                    'description' => $dbPersona->description,
                    'roles' => $dbPersona->roles,
                    'theme' => $dbPersona->theme,
                    'accent_color' => $dbPersona->accent_color,
                ];
            }
            $records = [];
            if (Schema::hasTable('mgmt_records')) {
                $records = MgmtRecord::orderBy('id')->get()->map(function ($r) {
                    return [
                        'title' => $r->title,
                        'description' => $r->description,
                        'tags' => $r->tags ?? [],
                    ];
                })->all();
            }
            if (count($records) === 0) {
                $records = $this->getMgmtRecords();
            }
            $data['records'] = $records;
            $data['metrics'] = $this->getMgmtMetrics();
            $data['roadmap'] = $this->getMgmtRoadmap();
        }

        return view('personas.'.($key === 'operations' ? 'creative' : $key), $data);
    }

    /**
     * Display the resume/overview page
     */
    public function resume(): View
    {
        return view('resume', [
            'roles' => $this->getAllRoles(),
            'personas' => $this->getPersonas(),
            'skills' => config('portfolio.skills'),
            'projects' => config('portfolio.projects'),
            'site' => config('portfolio.site'),
        ]);
    }

    /**
     * Display the full photography gallery page grouped by theme
     */
    public function gallery(): View
    {
        $allPhotos = $this->getAllPhotos();
        $themes = [];
        
        foreach ($allPhotos as $photo) {
            $themes[$photo['theme']][] = $photo;
        }

        return view('gallery', [
            'themes' => $themes,
            'photos' => $allPhotos,
        ]);
    }

    /**
     * Get all photos from the portfolio directory
     */
    private function getAllPhotos(): array
    {
        $basePath = public_path('images/portofolio');
        $allPhotos = [];

        if (is_dir($basePath)) {
            // Define allowed themes/folders
            $allowedThemes = ['Building', 'Foods', 'Sunset', 'Transportation'];
            
            foreach ($allowedThemes as $theme) {
                $dir = $basePath . '/' . $theme;
                if (is_dir($dir)) {
                    $files = glob($dir.'/*.{jpg,jpeg,png,gif}', GLOB_BRACE) ?: [];
                    foreach ($files as $file) {
                        $allPhotos[] = [
                            'url' => asset('images/portofolio/'.$theme.'/'.basename($file)),
                            'file' => $file,
                            'theme' => $theme,
                            'title' => pathinfo($file, PATHINFO_FILENAME),
                        ];
                    }
                }
            }
        }

        // Sort photos consistently by URL
        usort($allPhotos, function ($a, $b) {
            return strcmp($a['url'], $b['url']);
        });

        return $allPhotos;
    }

    /**
     * Get all personas configuration
     */
    private function getPersonas(): array
    {
        if (Schema::hasTable('personas')) {
            $items = Persona::orderBy('id')->get()->all();
            $result = [];
            foreach ($items as $p) {
                $result[$p->id === 'creative' ? 'operations' : $p->id] = [
                    'id' => $p->id,
                    'name' => $p->name,
                    'headline' => $p->headline,
                    'description' => $p->description,
                    'roles' => $p->roles,
                    'theme' => $p->theme,
                    'accent_color' => $p->accent_color,
                ];
            }
            if (! empty($result)) {
                return $result;
            }
        }

        return [
            'tech' => [
                'id' => 'tech',
                'name' => 'Technology & Engineering',
                'headline' => 'Bukan Sekadar Kode. Saya Membangun Ekosistem Digital Cerdas.',
                'description' => 'Menggabungkan ketangguhan Full-Stack Development dengan kecerdasan Artificial Intelligence. Siap membantu Anda menciptakan aplikasi yang scalable, efisien, dan berwawasan.',
                'roles' => ['Full Stack Developer', 'AI/ML Engineer'],
                'theme' => 'blue-purple',
                'accent_color' => 'blue',
            ],
            'management' => [
                'id' => 'management',
                'name' => 'Management & Strategy',
                'headline' => 'Menerjemahkan visi bisnis menjadi produk yang sukses dan strategis.',
                'description' => 'Mentransformasi ide abstrak menjadi roadmap produk yang nyata dan terukur.',
                'roles' => ['Project Manager', 'Product Manager', 'Business Development'],
                'theme' => 'black-gold',
                'accent_color' => 'gold',
            ],
            'operations' => [
                'id' => 'creative',
                'name' => 'Creative & Visual',
                'headline' => 'Menangkap Jiwa di Balik Logika.',
                'description' => 'Menerjemahkan ide abstrak menjadi pengalaman visual yang menyentuh rasa. Dari desain identitas hingga fotografi yang bercerita.',
                'roles' => ['Visual Storyteller', 'Photographer', 'Graphic Designer'],
                'theme' => 'emerald-mint',
                'accent_color' => 'emerald',
            ],
        ];
    }

    /**
     * Get all 8 roles for resume page
     */
    private function getAllRoles(): array
    {
        if (Schema::hasTable('roles')) {
            $items = Role::orderBy('id')->get()->map(function ($r) {
                return [
                    'title' => $r->title,
                    'category' => $r->category,
                    'skills' => $r->skills ?? [],
                    'description' => $r->description,
                ];
            })->all();
            if (! empty($items)) {
                return $items;
            }
        }

        return [
            [
                'title' => 'Full Stack Developer',
                'category' => 'Technology & Engineering',
                'skills' => ['Laravel', 'Python', 'JavaScript & TypeScript', 'MySQL & NoSQL', 'Docker', 'CI/CD'],
                'description' => 'Pengembangan aplikasi web end-to-end dengan teknologi modern dan praktik terbaik.',
            ],
            [
                'title' => 'AI/ML Engineer',
                'category' => 'Technology & Engineering',
                'skills' => ['Python', 'TensorFlow', 'PyTorch', 'YOLO', 'OpenCV', 'CUDA'],
                'description' => 'Pengembangan model AI/ML untuk solusi computer vision dan data analytics.',
            ],
            [
                'title' => 'Project Manager',
                'category' => 'Management & Strategy',
                'skills' => ['Project Management', 'Agile/Scrum', 'Risk Management', 'Stakeholder Management'],
                'description' => 'Pengelolaan proyek teknologi dari perencanaan hingga implementasi yang sukses.',
            ],
            [
                'title' => 'Product Manager',
                'category' => 'Management & Strategy',
                'skills' => ['Product Strategy', 'User Research', 'Roadmap Planning', 'Data Analysis'],
                'description' => 'Pengembangan strategi produk yang berfokus pada kebutuhan pengguna dan tujuan bisnis.',
            ],
            [
                'title' => 'Business Development',
                'category' => 'Management & Strategy',
                'skills' => ['Market Analysis', 'Partnership Development', 'Go-to-Market Strategy', 'Sales'],
                'description' => 'Pengembangan peluang bisnis dan strategi pertumbuhan yang berkelanjutan.',
            ],
            [
                'title' => 'IT Support',
                'category' => 'Operations & Creative',
                'skills' => ['Technical Support', 'System Administration', 'Network Management', 'Troubleshooting'],
                'description' => 'Pemeliharaan sistem IT dan dukungan teknis untuk operasional bisnis.',
            ],
            [
                'title' => 'Photographer',
                'category' => 'Operations & Creative',
                'skills' => ['Adobe Suite', 'Photo Editing', 'Visual Storytelling', 'Creative Direction'],
                'description' => 'Fotografi profesional untuk storytelling visual dan kebutuhan branding.',
            ],
            [
                'title' => 'Desain Grafis',
                'category' => 'Operations & Creative',
                'skills' => ['Adobe Suite', 'Visual Design', 'Branding', 'Creative Direction'],
                'description' => 'Karya desain grafis untuk mendukung identitas merek dan komunikasi visual.',
            ],
        ];
    }

    /**
     * Parse docs/tech-project.md and return structured projects
     */
    private function getTechProjects(): array
    {
        $path = base_path('docs/tech-project.md');
        if (! file_exists($path)) {
            return [];
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return [];
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $projects = [];
        $current = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) {
                    $projects[] = $current;
                }
                $current = ['title' => $m[1], 'description' => '', 'technologies' => [], 'link' => null, 'image' => null];

                continue;
            }
            if (! $current) {
                continue;
            }
            if (preg_match('/^-\s*Description:\s*(.+)/i', $line, $m)) {
                $current['description'] = $m[1];

                continue;
            }
            if (preg_match('/^-\s*Technologies:\s*(.+)/i', $line, $m)) {
                $techs = array_map('trim', preg_split('/,\s*/', $m[1]));
                $current['technologies'] = $techs;

                continue;
            }
            if (preg_match('/^-\s*Link:\s*(.+)/i', $line, $m) || preg_match('/^-\s*link:\s*(.+)/i', $line, $m)) {
                $current['link'] = trim($m[1]);
                $current['image'] = $this->extractImageFromReadme($current['link']);

                continue;
            }
        }
        if ($current) {
            $projects[] = $current;
        }

        return $projects;
    }

    /**
     * Attempt to fetch first image from a GitHub README
     */
    private function extractImageFromReadme(?string $githubUrl): ?string
    {
        if (! $githubUrl || ! preg_match('/github.com\/([^\/]+)\/([^\/?#]+)/', $githubUrl, $m)) {
            return null;
        }
        $owner = $m[1];
        $repo = $m[2];
        $branches = ['main', 'master'];
        foreach ($branches as $branch) {
            $rawUrl = "https://raw.githubusercontent.com/{$owner}/{$repo}/{$branch}/README.md";
            $ctx = stream_context_create(['http' => ['timeout' => 2]]);
            $readme = @file_get_contents($rawUrl, false, $ctx);
            if ($readme === false) {
                continue;
            }
            if (preg_match('/!\[[^\]]*\]\(([^)]+)\)/', $readme, $mm)) {
                $img = $mm[1];
                if (preg_match('/^https?:\/\//', $img)) {
                    return $img;
                }
                $img = ltrim($img, './');

                return "https://raw.githubusercontent.com/{$owner}/{$repo}/{$branch}/{$img}";
            }
        }

        return null;
    }

    private function getTechExperiences(): array
    {
        $path = base_path('docs/tech-experience.md');
        if (! file_exists($path)) {
            return [];
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return [];
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $exps = [];
        $current = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) {
                    $exps[] = $current;
                }
                $current = ['title' => $m[1], 'org' => null];

                continue;
            }
            if ($current && preg_match('/^@\s*(.+)/', $line, $m)) {
                $current['org'] = $m[1];

                continue;
            }
        }
        if ($current) {
            $exps[] = $current;
        }

        return $exps;
    }

    private function getMgmtRecords(): array
    {
        $path = base_path('docs/mgmt-record.md');
        if (! file_exists($path)) {
            return [];
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return [];
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $records = [];
        $current = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) {
                    $records[] = $current;
                }
                $current = ['title' => $m[1], 'description' => '', 'tags' => []];

                continue;
            }
            if (! $current) {
                continue;
            }
            if (preg_match('/^-\s*Deskripsi:\s*(.+)/i', $line, $m)) {
                $current['description'] = $m[1];

                continue;
            }
            if (preg_match('/^-\s*Tags:\s*(.+)/i', $line, $m)) {
                $rawTags = trim($m[1]);
                $tags = [];
                if (strpos($rawTags, ',') !== false) {
                    $tags = array_map('trim', preg_split('/,\s*/', $rawTags));
                } else {
                    $tags = array_values(array_filter(array_map('trim', preg_split('/\s+/', $rawTags)), fn ($t) => $t !== ''));
                }
                $current['tags'] = $tags;

                continue;
            }
        }
        if ($current) {
            $records[] = $current;
        }

        return $records;
    }
    private function getTechStack(): array
    {
        return [
            'backend' => [
                'title' => '01_BACKEND',
                'items' => [
                    ['name' => 'Laravel', 'level' => 'Expert', 'class' => 'text-tech'],
                    ['name' => 'PHP 8+', 'level' => 'Expert', 'class' => 'text-tech'],
                    ['name' => 'Python', 'level' => 'Adv', 'class' => 'text-slate-500'],
                    ['name' => 'Node.js', 'level' => 'Int', 'class' => 'text-slate-500'],
                ]
            ],
            'frontend' => [
                'title' => '02_FRONTEND',
                'items' => [
                    ['name' => 'Vue.js', 'level' => 'Adv', 'class' => 'text-tech'],
                    ['name' => 'React', 'level' => 'Int', 'class' => 'text-slate-500'],
                    ['name' => 'Tailwind', 'level' => 'Expert', 'class' => 'text-tech'],
                    ['name' => 'Figma', 'level' => 'Adv', 'class' => 'text-slate-500'],
                ]
            ],
            'intelligence' => [
                'title' => '03_INTELLIGENCE',
                'items' => [
                    ['name' => 'TensorFlow', 'level' => 'Int', 'class' => 'text-slate-500'],
                    ['name' => 'YOLOv5', 'level' => 'Adv', 'class' => 'text-tech'],
                    ['name' => 'OpenCV', 'level' => 'Int', 'class' => 'text-slate-500'],
                    ['name' => 'Pandas', 'level' => 'Adv', 'class' => 'text-slate-500'],
                ]
            ],
            'devops' => [
                'title' => '04_DEVOPS',
                'items' => [
                    ['name' => 'Docker', 'level' => 'Int', 'class' => 'text-slate-500'],
                    ['name' => 'AWS', 'level' => 'Basic', 'class' => 'text-slate-500'],
                    ['name' => 'CI/CD', 'level' => 'Int', 'class' => 'text-tech'],
                ]
            ]
        ];
    }

    private function getMgmtMetrics(): array
    {
        return [
            [
                'value' => '25%',
                'label' => 'Cost Reduction',
                'desc' => 'Melalui efisiensi operasional di Dapur BuAs.',
                'color' => 'text-mgmt-gold',
            ],
            [
                'value' => '10+',
                'label' => 'SME Helped',
                'desc' => 'Transformasi digital untuk UMKM lokal.',
                'color' => 'text-gray-900',
            ],
            [
                'value' => '98%',
                'label' => 'Satisfaction',
                'desc' => 'Customer Satisfaction Score (CSAT).',
                'color' => 'text-emerald-500',
            ],
            [
                'value' => '2x',
                'label' => 'Efficiency',
                'desc' => 'Peningkatan kecepatan delivery tim.',
                'color' => 'text-blue-600',
            ],
        ];
    }

    private function getMgmtRoadmap(): array
    {
        return [
            [
                'step' => '01',
                'title' => 'Discovery',
                'desc' => 'Audit masalah, riset pasar, dan definisi tujuan bisnis (KPIs).',
                'border' => 'border-mgmt-gold',
                'text' => 'text-mgmt-gold',
            ],
            [
                'step' => '02',
                'title' => 'Strategy',
                'desc' => 'Perancangan roadmap produk, alokasi sumber daya, dan mitigasi risiko.',
                'border' => 'border-gray-300',
                'text' => 'text-gray-400',
            ],
            [
                'step' => '03',
                'title' => 'Execution',
                'desc' => 'Implementasi Agile, sprint management, dan quality assurance.',
                'border' => 'border-gray-300',
                'text' => 'text-gray-400',
            ],
            [
                'step' => '04',
                'title' => 'Optimization',
                'desc' => 'Analisis data performa, feedback loop, dan scaling strategy.',
                'border' => 'border-green-500',
                'text' => 'text-green-600',
            ],
        ];
    }
}
