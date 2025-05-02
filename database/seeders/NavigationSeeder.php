<?php

namespace Database\Seeders;

use App\Models\NavigationCategory;
use App\Models\NavigationItem;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat kategori untuk Bidang Studi
        $bidangStudi = NavigationCategory::create([
            'name' => 'Bidang Studi',
            'slug' => 'bidang-studi',
            'has_dropdown' => true,
            'is_active' => true,
            'order' => 1,
        ]);

        // Buat kategori untuk Layanan Jasa
        $layananJasa = NavigationCategory::create([
            'name' => 'Layanan Jasa',
            'slug' => 'layanan-jasa',
            'has_dropdown' => true,
            'is_active' => true,
            'order' => 2,
        ]);

        // Buat item untuk Bidang Studi
        NavigationItem::create([
            'navigation_category_id' => $bidangStudi->id,
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'route' => '#',
            'order' => 1,
            'is_active' => true,
        ]);

        NavigationItem::create([
            'navigation_category_id' => $bidangStudi->id,
            'name' => 'Komputer Akuntansi',
            'slug' => 'komputer-akuntansi',
            'route' => '#',
            'order' => 2,
            'is_active' => true,
        ]);

        // Buat item untuk Layanan Jasa
        NavigationItem::create([
            'navigation_category_id' => $layananJasa->id,
            'name' => 'IT & Multimedia',
            'slug' => 'it-multimedia',
            'route' => '#',
            'order' => 1,
            'is_active' => true,
        ]);

        NavigationItem::create([
            'navigation_category_id' => $layananJasa->id,
            'name' => 'Branding & Design',
            'slug' => 'branding-design',
            'route' => '#',
            'order' => 2,
            'is_active' => true,
        ]);

        NavigationItem::create([
            'navigation_category_id' => $layananJasa->id,
            'name' => 'Web Development',
            'slug' => 'web-development',
            'route' => '#',
            'order' => 3,
            'is_active' => true,
        ]);

        NavigationItem::create([
            'navigation_category_id' => $layananJasa->id,
            'name' => 'Mobile Apps Development',
            'slug' => 'mobile-apps-development',
            'route' => '#',
            'order' => 4,
            'is_active' => true,
        ]);
    }
}
