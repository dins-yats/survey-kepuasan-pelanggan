<?php

namespace Database\Seeders;

use App\Models\maps;
use App\Models\pertanyaannya;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
                // User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);
                User::create([
                    'name' => 'Uyup Wak Omes',
                    'email' =>'uyupomes@gmail.com',
                    'email_verified_at' => null,
                    'password' => Hash::make('password'),
                    'two_factor_secret' => null,
                    'two_factor_recovery_codes' => null,
                    'remember_token' => null,
                    'profile_photo_path' => null,
                    'current_team_id' => null,
                ]);

                User::create([
                    'name' => 'Omes',
                    'email' =>'omesuyup123@gmail.com',
                    'email_verified_at' => null,
                    'password' => Hash::make('password'),
                    'two_factor_secret' => null,
                    'two_factor_recovery_codes' => null,
                    'remember_token' => null,
                    'profile_photo_path' => null,
                    'current_team_id' => null,
                ]);
              

                    
                    //     'name' => fake()->name(),
                    //     'email' => fake()->unique()->safeEmail(),
                    //     'email_verified_at' => now(),
                    //     'password' => static::$password ??= Hash::make('password'),
                    //     'two_factor_secret' => null,
                    //     'two_factor_recovery_codes' => null,
                    //     'remember_token' => Str::random(10),
                    //     'profile_photo_path' => null,
                    //     'current_team_id' => null,
               
                    // 'name' => 'Uyup Wak Omes',
                    // 'email' => 'test@example.com',

                
                pertanyaannya::create([
                    'pertanyaan' => 'Bagaimana Kebersihan Fasilitas Toko?',
                ]);
                
                pertanyaannya::create([
                    'pertanyaan' => 'Bagaimana Kenyamanan Toko?',
                ]);
                
                pertanyaannya::create([
                    'pertanyaan' => 'Bagaimana Pelayanan Yang Diterima?',
                ]);
                
                pertanyaannya::create([
                    'pertanyaan' => 'Bagaimana Kualitas Produk Yang Diberikan?',
                ]);
                
                pertanyaannya::create([
                    'pertanyaan' => 'Bagaimana Tarif Produk Yang Ditawarkan?',
                ]);
                
                
                // \App\Models\User::factory(2)->create();
                maps::create([
                    'map' => '
                    https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4080355.590932942!2d99.41479202499995!3d-2.896174499999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a8d7cb8479abd%3A0xa282c3808901ef92!2sUyup%20kucur%20Wak%20Omes!5e0!3m2!1sen!2sid!4v1720929965483!5m2!1sen!2sid
                   ',
                ]);
                

    }
}
