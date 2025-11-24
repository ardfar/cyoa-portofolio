<?php

namespace Database\Seeders;

use App\Models\MgmtRecord;
use App\Models\Persona;
use App\Models\Role;
use App\Models\Setting;
use App\Models\TechExperience;
use App\Models\TechProject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class InitialContentSeeder extends Seeder
{
    public function run(): void
    {
        if (Schema::hasTable('personas')) {
            $seed = [
                ['id' => 'tech', 'name' => 'Technology & Engineering', 'headline' => 'Bukan Sekadar Kode. Saya Membangun Ekosistem Digital Cerdas.', 'description' => 'Menggabungkan ketangguhan Full-Stack Development dengan kecerdasan Artificial Intelligence. Siap membantu Anda menciptakan aplikasi yang scalable, efisien, dan berwawasan.', 'roles' => ['Full Stack Developer', 'AI/ML Engineer'], 'theme' => 'blue-purple', 'accent_color' => 'blue'],
                ['id' => 'management', 'name' => 'Management & Strategy', 'headline' => 'Menerjemahkan visi bisnis menjadi produk yang sukses dan strategis.', 'description' => 'Mentransformasi ide abstrak menjadi roadmap produk yang nyata dan terukur.', 'roles' => ['Project Manager', 'Product Manager', 'Business Development'], 'theme' => 'black-gold', 'accent_color' => 'gold'],
                ['id' => 'creative', 'name' => 'Operations & Creative', 'headline' => 'Mewujudkan ide visual melalui desain grafis dan fotografi.', 'description' => 'Fokus pada desain grafis dan visual storytelling untuk mendukung branding dan komunikasi yang kuat.', 'roles' => ['Desain Grafis', 'Photographer'], 'theme' => 'green-gray', 'accent_color' => 'green'],
            ];
            foreach ($seed as $p) {
                Persona::updateOrCreate(['id' => $p['id']], $p);
            }
        }

        if (Schema::hasTable('roles')) {
            $roles = [
                ['title' => 'Full Stack Developer', 'category' => 'Technology & Engineering', 'skills' => ['Laravel', 'Python', 'JavaScript & TypeScript', 'MySQL & NoSQL', 'Docker', 'CI/CD'], 'description' => 'Pengembangan aplikasi web end-to-end dengan teknologi modern dan praktik terbaik.'],
                ['title' => 'AI/ML Engineer', 'category' => 'Technology & Engineering', 'skills' => ['Python', 'TensorFlow', 'PyTorch', 'YOLO', 'OpenCV', 'CUDA'], 'description' => 'Pengembangan model AI/ML untuk solusi computer vision dan data analytics.'],
                ['title' => 'Project Manager', 'category' => 'Management & Strategy', 'skills' => ['Project Management', 'Agile/Scrum', 'Risk Management', 'Stakeholder Management'], 'description' => 'Pengelolaan proyek teknologi dari perencanaan hingga implementasi yang sukses.'],
                ['title' => 'Product Manager', 'category' => 'Management & Strategy', 'skills' => ['Product Strategy', 'User Research', 'Roadmap Planning', 'Data Analysis'], 'description' => 'Pengembangan strategi produk yang berfokus pada kebutuhan pengguna dan tujuan bisnis.'],
                ['title' => 'Business Development', 'category' => 'Management & Strategy', 'skills' => ['Market Analysis', 'Partnership Development', 'Go-to-Market Strategy', 'Sales'], 'description' => 'Pengembangan peluang bisnis dan strategi pertumbuhan yang berkelanjutan.'],
                ['title' => 'IT Support', 'category' => 'Operations & Creative', 'skills' => ['Technical Support', 'System Administration', 'Network Management', 'Troubleshooting'], 'description' => 'Pemeliharaan sistem IT dan dukungan teknis untuk operasional bisnis.'],
                ['title' => 'Photographer', 'category' => 'Operations & Creative', 'skills' => ['Adobe Suite', 'Photo Editing', 'Visual Storytelling', 'Creative Direction'], 'description' => 'Fotografi profesional untuk storytelling visual dan kebutuhan branding.'],
                ['title' => 'Desain Grafis', 'category' => 'Operations & Creative', 'skills' => ['Adobe Suite', 'Visual Design', 'Branding', 'Creative Direction'], 'description' => 'Karya desain grafis untuk mendukung identitas merek dan komunikasi visual.'],
            ];
            foreach ($roles as $r) {
                Role::updateOrCreate(['title' => $r['title'], 'category' => $r['category']], $r);
            }
        }

        if (Schema::hasTable('tech_projects')) {
            $path = base_path('docs/tech-project.md');
            if (file_exists($path)) {
                $raw = @file_get_contents($path);
                if ($raw !== false) {
                    $lines = preg_split('/\r\n|\r|\n/', $raw);
                    $current = null;
                    foreach ($lines as $line) {
                        $line = trim($line);
                        if ($line === '') {
                            continue;
                        }
                        if (preg_match('/^#\s+(.+)/', $line, $m)) {
                            if ($current) {
                                TechProject::updateOrCreate(['title' => $current['title']], $current);
                            }
                            $current = ['title' => $m[1], 'description' => '', 'technologies' => [], 'link' => null, 'image' => null];

                            continue;
                        }
                        if (! $current) {
                            continue;
                        }
                        if (preg_match('/^\-\s*Description:\s*(.+)/i', $line, $m)) {
                            $current['description'] = $m[1];

                            continue;
                        }
                        if (preg_match('/^\-\s*Technologies:\s*(.+)/i', $line, $m)) {
                            $current['technologies'] = array_map('trim', preg_split('/,\s*/', $m[1]));

                            continue;
                        }
                        if (preg_match('/^\-\s*Link:\s*(.+)/i', $line, $m) || preg_match('/^\-\s*link:\s*(.+)/i', $line, $m)) {
                            $current['link'] = trim($m[1]);

                            continue;
                        }
                    }
                    if ($current) {
                        TechProject::updateOrCreate(['title' => $current['title']], $current);
                    }
                }
            }
        }

        if (Schema::hasTable('tech_experiences')) {
            $path = base_path('docs/tech-experience.md');
            if (file_exists($path)) {
                $raw = @file_get_contents($path);
                if ($raw !== false) {
                    $lines = preg_split('/\r\n|\r|\n/', $raw);
                    $current = null;
                    foreach ($lines as $line) {
                        $line = trim($line);
                        if ($line === '') {
                            continue;
                        }
                        if (preg_match('/^#\s+(.+)/', $line, $m)) {
                            if ($current) {
                                TechExperience::updateOrCreate(['title' => $current['title'], 'org' => $current['org']], $current);
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
                        TechExperience::updateOrCreate(['title' => $current['title'], 'org' => $current['org']], $current);
                    }
                }
            }
        }

        if (Schema::hasTable('mgmt_records')) {
            $path = base_path('docs/mgmt-record.md');
            if (file_exists($path)) {
                $raw = @file_get_contents($path);
                if ($raw !== false) {
                    $lines = preg_split('/\r\n|\r|\n/', $raw);
                    $current = null;
                    foreach ($lines as $line) {
                        $line = trim($line);
                        if ($line === '') {
                            continue;
                        }
                        if (preg_match('/^#\s+(.+)/', $line, $m)) {
                            if ($current) {
                                MgmtRecord::updateOrCreate(['title' => $current['title']], $current);
                            }
                            $current = ['title' => $m[1], 'description' => '', 'tags' => []];

                            continue;
                        }
                        if (! $current) {
                            continue;
                        }
                        if (preg_match('/^\-\s*Deskripsi:\s*(.+)/i', $line, $m)) {
                            $current['description'] = $m[1];

                            continue;
                        }
                        if (preg_match('/^\-\s*Tags:\s*(.+)/i', $line, $m)) {
                            $rawTags = trim($m[1]);
                            $tags = [];
                            if (str_contains($rawTags, ',')) {
                                $tags = array_map('trim', preg_split('/,\s*/', $rawTags));
                            } else {
                                $tags = array_values(array_filter(array_map('trim', preg_split('/\s+/', $rawTags)), fn ($t) => $t !== ''));
                            }
                            $current['tags'] = $tags;

                            continue;
                        }
                    }
                    if ($current) {
                        MgmtRecord::updateOrCreate(['title' => $current['title']], $current);
                    }
                }
            }
        }

        if (Schema::hasTable('settings')) {
            $recipient = env('MAIL_FROM_ADDRESS');
            if (! $recipient || trim($recipient) === '') {
                $recipient = 'admin@example.com';
            }
            Setting::updateOrCreate(['key' => 'contact_recipient'], ['value' => $recipient]);
        }
    }
}
