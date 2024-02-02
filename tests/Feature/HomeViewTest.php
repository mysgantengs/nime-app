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
           ->assertSeeText('7296650.jpg')
            ->assertSeeText('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita repellendus, non eos reiciendis voluptatum labore totam consequatur, nemo eius hic corporis! Quod optio ad excepturi, voluptates perspiciatis ab beatae!');

    }

    public function testViews()
    {
        $this->get('/viewrenders/shadowshot')
           ->assertSeeText('Spiderman Heroics')
           ->assertSeeText('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
           'buttonName');
           

    }

}
