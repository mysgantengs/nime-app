<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class datas
{
    // use HasFactory;

    public static $datas_list = [

        [
        'images' => 'GAMBAR1.png',
        'cardtitle' => 'Crazy Grils',
       'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'crazy-girls'
        ],

        [
        'images' => 'bem.jpg',
        'cardtitle' => 'City Longers',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'cit-longers'
            
        ],

       [
    
        'images' => 'gambar2.png',
        'cardtitle' => 'Endixys',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'endixys'
       
       ],  
       
       [
    
        'images' => 'hashiramas.jpg',
        'cardtitle' => 'Naruto Legends',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'hashiramas'
       
       ],    

       [
    
        'images' => 'shadowshot.jpg',
        'cardtitle' => 'Shadow War',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'shadowshot'
       
       ],    

       [
    
        'images' => 'spidermans.jpg',
        'cardtitle' => 'Spiderman Heroics',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'slugs' => 'spidermans'
       
       ]    


    ];

    public static function alls(){

        return collect(self::$datas_list);

    }
    
    public static function finds($slugs){

        $cardposts = static::alls();

        return $cardposts->firstWhere('slugs', $slugs);

    }

}
