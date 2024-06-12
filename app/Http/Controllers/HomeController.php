<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){


            return view("welcome" );
    }

    public function productos(){
        $productos = [
            ['nombre'=>'producto 1','precio'=>100, 'imagen' => 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg'],
            ['nombre'=>'producto 2','precio'=>200, 'imagen' => "#"],
            ['nombre'=>'producto 3','precio'=>300, 'imagen' => "#"],
            ['nombre'=>'producto 4','precio'=>400, 'imagen' => "#"],
        ];
        return view("productos",["productos" => $productos]);
    }
    public function servicios (){
        $productos = [
            ['nombre'=>'producto 1','precio'=>100, 'imagen' => 'https://www.freepik.es/foto-gratis/taladradora-primer-plano_7049113.htm#fromView=search&page=1&position=6&uuid=0e1f62d2-4ea1-4a2c-9f11-31e14eeea81a'],
            ['nombre'=>'producto 2','precio'=>200, 'imagen' => "#"],
            ['nombre'=>'producto 3','precio'=>300, 'imagen' => "#"],
            ['nombre'=>'producto 4','precio'=>400, 'imagen' => "#"],
        ];
        return view("servicios",["productos" => $productos]);
    }
}
