<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class datas
{
    // use HasFactory;

    private static $datas_list = [

        [
        'images' => 'GAMBAR1.png',
        'cardtitle' => 'amuragu',
       'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
        ],

        [
        'images' => 'bem.jpg',
        'cardtitle' => 'city longers',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
            
        ],

       [
    
        'images' => 'gambar2.png',
        'cardtitle' => 'Endixys',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
       
       ],  
       
       [
    
        'images' => 'hashiramas.jpg',
        'cardtitle' => 'Naruto Legends',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
       
       ],    

       [
    
        'images' => 'shadowshot.jpg',
        'cardtitle' => 'Shadow War',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
       
       ],    

       [
    
        'images' => 'spidermans.jpg',
        'cardtitle' => 'Spiderman Heroics',
        'descriptions' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto laborum itaque, ducimus consequatur perspiciatis, doloribus voluptatem aliquam obcaecati, aspernatur eius explicabo vero veniam! Est quisquam distinctio dignissimos repudiandae optio voluptate.',
        'buttonName' => 'View'
       
       ],    


    ];

    public static function alls(){

        return self::$datas_list;

    }        

}
