<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\KategoriBuku;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'petugas@gmail.com')->get()->isEmpty()) {
            $user = new User();
            $user->name = 'Petugas Perpus';
            $user->email = 'petugas@gmail.com';
            $user->password = Hash::make('petugas');

            $user->save();
        }

        $kategoribuku = new KategoriBuku();
        $kategoribuku->nama = 'Buku Pelajaran';
        $kategoribuku->deadline = '24';

        $kategoribuku->save();
    }
}