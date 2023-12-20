<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warehouses>
 */
class WarehousesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
                'sku' => $this->faker->randomDigit(7),
                'address' => $this->faker->address,
                'capacity' => $this->faker->randomDigit(2),
                'pricing' => 'pricing example 4%',
                'user_id' => $this->faker->randomDigit(1),
                'seller_id' => $this->faker->randomDigit(1), // Simpan path gambar di database jika perlu
                'product_id' => $this->faker->randomDigit(1), // Simpan nama gambar di database jika perlu
                'inventory_id' => $this->faker->randomDigit(1), // Simpan nama gambar di database jika perlu
                'created_at' => now(),
                'updated_at' => now(),
            'photo' => $this->faker->image(storage_path('images'), 300, 300)
        ];
    }
}
