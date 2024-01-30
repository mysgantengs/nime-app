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
           ->assertSeeText('{{$img}}')
            ->assertSeeText('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita repellendus, non eos reiciendis voluptatum labore totam consequatur, nemo eius hic corporis! Quod optio ad excepturi, voluptates perspiciatis ab beatae!');

    }
}
