<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\MgmtRecord;
use Illuminate\Database\Seeder;

class ManagementPersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::updateOrCreate(
            ['id' => 'management'],
            [
                'name' => 'Management & Strategy',
                'headline' => 'Menerjemahkan visi bisnis menjadi produk yang sukses dan strategis.',
                'description' => 'Mentransformasi ide abstrak menjadi roadmap produk yang nyata dan terukur.',
                'roles' => ['Project Manager', 'Product Manager', 'Business Development'],
                'theme' => 'black-gold',
                'accent_color' => 'gold',
            ]
        );

        $this->seedRecordsFromDocs();
    }

    protected function seedRecordsFromDocs(): void
    {
        $path = base_path('docs/mgmt-record.md');
        if (!file_exists($path)) { return; }
        $raw = @file_get_contents($path);
        if ($raw === false) { return; }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $current = null;
        $records = [];
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') { continue; }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) { $records[] = $current; }
                $current = ['title' => $m[1], 'description' => '', 'tags' => []];
                continue;
            }
            if (!$current) { continue; }
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
                    $tags = array_values(array_filter(array_map('trim', preg_split('/\s+/', $rawTags)), fn($t) => $t !== ''));
                }
                $current['tags'] = $tags;
                continue;
            }
        }
        if ($current) { $records[] = $current; }
        foreach ($records as $r) {
            MgmtRecord::updateOrCreate(
                ['title' => $r['title']],
                [
                    'description' => $r['description'] ?? '',
                    'tags' => $r['tags'] ?? [],
                ]
            );
        }
    }
}