<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = config('rooms.rooms');

        foreach ($rooms as $room) {
            Room::create([
                'name' => $room['name'],
                'seats_num' => $room['seats_num'],
                'isense' => $room['isense'],
                'base_price' => $room['base_price'],
                'image' => $room['image'],
            ]);
             
    }
}
}
