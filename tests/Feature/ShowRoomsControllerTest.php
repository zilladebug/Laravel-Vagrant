<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ShowRoomsControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/rooms');

        $response->assertStatus(200)
            ->assertSeeText('Type')
            ->assertViewIs('rooms.index')
            ->assertViewHas('rooms');
    }

    public function testRoomParameter() 
    {
        $roomTypes = factory('App\RoomType', 3)->create();
        $rooms = factory('App\Room', 20)->create();
        $roomType = $roomTypes->random();

        $response = $this->get('/rooms/'. $roomType->id);

        $response->assertStatus(200)
            ->assertSeeText('Type')
            ->assertViewIs('rooms.index')
            ->assertViewHas('rooms')
            ->assertSeeText($roomType->name);
    }

    public function testUpdateFile() {
        $file = UploadedFile::fake()->image('sample.jpg');
        $roomType = factory('App\RoomType')->create();
        $response = $this->put("/room_types/{$roomType->id}",
            ['picture' => $file]
        );

        $response->assertStatus(302)
            ->assertRedirect('/room_types');
        Storage::disk('public')->assertExists($file->hashName());
    }

  
}
