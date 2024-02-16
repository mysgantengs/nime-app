<?php

namespace App\Http\Controllers;

use App\Models\datas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ViewController extends Controller
{
    public function Home():Response{

        return response()->view('Home', [

            'title' => 'Home'

        ]);


    }

    public function Menu():Response{

        return response()->view('Menu', [
            'title' => 'Menu',
            "MenuLists" => datas::all()
        ]);

    }

    public function About():Response{

        return response()->view('About', [
            'title' => 'About',
            // 'titleII' => 'Y4KUZ4 STR4WS',
            // 'img' => '7296650.jpg',
            // 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita repellendus, non eos reiciendis voluptatum labore totam consequatur, nemo eius hic corporis! Quod optio ad excepturi, voluptates perspiciatis ab beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus repellat illum hic, dolor enim magnam neque consectetur delectus veniam totam esse nihil impedit quos perferendis quibusdam sapiente, laboriosam iure?'
        ]);

    }

    public function ViewRender(datas $men):Response{


        return response()->view('Menus', [

            'title' => 'litle Menus',
            'Menus' => $men
 

        ]);


    }

}
