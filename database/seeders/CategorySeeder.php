<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Main', 'note' => 'Mainboard dùng để kết nối các linh kiện như CPU, RAM, ổ cứng, v.v.'],
            ['name' => 'Chip', 'note' => 'Vi xử lý trung tâm thực hiện các lệnh và điều khiển hệ thống.'],
            ['name' => 'RAM', 'note' => 'Bộ nhớ truy cập ngẫu nhiên, lưu trữ dữ liệu tạm thời cho hệ thống.'],
            ['name' => 'Ổ cứng', 'note' => 'Thiết bị lưu trữ dữ liệu tốc độ cao, loại solid-state drive.'],
            ['name' => 'Nguồn', 'note' => 'Bộ nguồn cung cấp điện cho toàn bộ hệ thống máy tính.'],
            ['name' => 'Vga', 'note' => 'Thiết bị xử lý hình ảnh và video, dùng cho game và thiết kế.'],
            ['name' => 'Quạt tản', 'note' => 'Tản nhiệt cho CPU, GPU hoặc case máy tính để tránh quá nhiệt.'],
            ['name' => 'Case', 'note' => 'Khung bao ngoài để lắp ráp linh kiện phần cứng máy tính.'],
            ['name' => 'PCIe', 'note' => 'Các card mở rộng như sound card, network card, v.v. cắm qua khe PCIe.'],
            ['name' => 'Chưa phân loại', 'note' => '...']
        ];
        $faker = Faker::create();

        foreach ($categories as &$item) {
            $date_created = $faker->dateTimeBetween('-2 years', 'now');
            $date_updated = (clone $date_created)->modify('+' . rand(0, 60) . ' days');
            $item['created_at'] = $date_created;
            $item['updated_at'] = $date_updated;
        }

        DB::table('categories')->insert($categories);
    }
}
