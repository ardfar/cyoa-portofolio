<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\TechExperience;
use App\Models\TechProject;
use Illuminate\Database\Seeder;

class TechPersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::updateOrCreate(
            ['id' => 'tech'],
            [
                'name' => 'Technology & Engineering',
                'headline' => 'Bukan Sekadar Kode. Saya Membangun Ekosistem Digital Cerdas.',
                'description' => 'Menggabungkan ketangguhan Full-Stack Development dengan kecerdasan Artificial Intelligence. Siap membantu Anda menciptakan aplikasi yang scalable, efisien, dan berwawasan.',
                'roles' => ['Full Stack Developer', 'AI/ML Engineer'],
                'theme' => 'blue-purple',
                'accent_color' => 'blue',
            ]
        );

        $this->seedProjectsFromDocs();
        $this->seedExperiencesFromDocs();
    }

    protected function seedProjectsFromDocs(): void
    {
        $path = base_path('docs/tech-project.md');
        if (! file_exists($path)) {
            return;
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return;
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $current = null;
        $projects = [];
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
                $current['image'] = null;

                continue;
            }
        }
        if ($current) {
            $projects[] = $current;
        }
        foreach ($projects as $p) {
            TechProject::updateOrCreate(
                ['title' => $p['title']],
                [
                    'description' => $p['description'] ?? '',
                    'technologies' => $p['technologies'] ?? [],
                    'link' => $p['link'] ?? null,
                    'image' => $p['image'] ?? null,
                ]
            );
        }
    }

    protected function seedExperiencesFromDocs(): void
    {
        $path = base_path('docs/tech-experience.md');
        if (! file_exists($path)) {
            return;
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return;
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $current = null;
        $rows = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) {
                    $rows[] = $current;
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
            $rows[] = $current;
        }
        foreach ($rows as $r) {
            TechExperience::updateOrCreate(
                ['title' => $r['title']],
                ['org' => $r['org']]
            );
        }
    }
}
