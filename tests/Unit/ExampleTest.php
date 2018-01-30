<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user=factory(\App\User::class)->create([
            'name'=>'Duilio Palacios',
        ]);

        $this->actingAs($user,'api')
            ->visit('api/user')
            ->see('Duilio Palacios');
    }
}
