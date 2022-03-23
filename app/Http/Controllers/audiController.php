<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiController extends Controller
{
    public function index()
    {
        $images = [
            "https://cdn.motor1.com/images/mgl/vAkqR/s3/2020-audi-a4-facelift-sketch.webp",
            "https://www.desconcertante.com/wp-content/uploads/2020/07/33500.jpg",
            "https://quatrorodas.abril.com.br/wp-content/uploads/2021/03/audi_rs_e-tron_gt_4-1.jpeg?quality=70&strip=info"
        ];
        $text= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
"       ;
        $image2= 'https://www.audi.pt/media/Theme_Menu_Model_Dropdown_Item_Image_Component/root-pt-model-modelMenu-editableItems-73240-dropdown-476801-image/dh-500-a0e9a6/3203b915/1635486191/audi-a7-sportback-tfsi-e-frontansicht.jpg' ;


        return view("audi.index",
            ['images'=> $images,
             'image2'=> $image2,
             'text'=>$text]);
    }
}
