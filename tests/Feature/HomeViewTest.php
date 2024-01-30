<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeViewTest extends TestCase
{
    
    public function testHomes()
    {
        $this->get('/Homes')
            ->assertSeeText('Reina')
            ->assertSeeText('gambar');

    }
}
