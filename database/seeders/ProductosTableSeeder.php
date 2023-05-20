<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto1 = new Producto ;
        $producto1->id = '1';
        $producto1->name = 'Grand Court';
        $producto1->descripcion ='zapatilla adidas';
        $producto1->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw7c2aa55d/products/AD_F36392/AD_F36392_1.JPG';
        $producto1->precio='19999';
        $producto1->tipo_id='1';
        $producto1->marca_id='1';
        $producto1->save();

        $producto2 = new Producto ;
        $producto2->id = '2';
        $producto2->name = 'Comet 2';
        $producto2->descripcion ='zapatilla puma';
        $producto2->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw7cf05cef/products/PU_195648-01/PU_195648-01-1.JPG';
        $producto2->precio='20999';
        $producto2->tipo_id='1';
        $producto2->marca_id='2';
        $producto2->save();

        $producto3 = new Producto ;
        $producto3->id = '3';
        $producto3->name = 'Revolution 6';
        $producto3->descripcion ='zapatilla nike';
        $producto3->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwf69a1410/products/NI_DC3728-003/NI_DC3728-003-1.JPG';
        $producto3->precio='26899';
        $producto3->tipo_id='1';
        $producto3->marca_id='3';
        $producto3->save();
     
        $producto4 = new Producto ;
        $producto4->id = '4';
        $producto4->name = 'Cm997 Hombre';
        $producto4->descripcion ='zapatilla new balance';
        $producto4->URLimagen='https://celadasa.vtexassets.com/arquivos/ids/219509-800-auto?v=638035112505270000&width=800&height=auto&aspect=true';
        $producto4->precio='37299';
        $producto4->tipo_id='1';
        $producto4->marca_id='5';
        $producto4->save();
     
        $producto5 = new Producto ;
        $producto5->id = '5';
        $producto5->name = 'Back To Sport';
        $producto5->descripcion ='campera adidas';
        $producto5->URLimagen='https://sporting.vtexassets.com/arquivos/ids/630016-800-800?v=637988385472230000&width=800&height=800&aspect=true';
        $producto5->precio='70999';
        $producto5->tipo_id='2';
        $producto5->marca_id='1';
        $producto5->save();
     
        $producto6 = new Producto ;
        $producto6->id = '6';
        $producto6->name = 'Sportswear';
        $producto6->descripcion ='campera nike';
        $producto6->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw2ca0518a/products/NI_BV2645-010/NI_BV2645-010-1.JPG';
        $producto6->precio='129187';
        $producto6->tipo_id='2';
        $producto6->marca_id='3';
        $producto6->save();
     
        $producto7 = new Producto ;
        $producto7->id = '7';
        $producto7->name = 'Classic';
        $producto7->descripcion ='campera Umbro';
        $producto7->URLimagen='https://http2.mlstatic.com/D_NQ_NP_633044-MLA54244219416_032023-W.jpg';
        $producto7->precio='23540';
        $producto7->tipo_id='2';
        $producto7->marca_id='4';
        $producto7->save();
     
        $producto8 = new Producto ;
        $producto8->id = '8';
        $producto8->name = 'Power Colorblock';
        $producto8->descripcion ='campera puma';
        $producto8->URLimagen='https://sportline.vtexassets.com/arquivos/ids/892860-800-1422?v=638108333307330000&width=800&height=1422&aspect=true';
        $producto8->precio='9666';
        $producto8->tipo_id='2';
        $producto8->marca_id='2';
        $producto8->save();
     
        $producto9 = new Producto ;
        $producto9->id = '9';
        $producto9->name = 'Essentials Regular Fit';
        $producto9->descripcion ='pantalon adidas';
        $producto9->URLimagen='https://sportline.vtexassets.com/arquivos/ids/953729-800-1422?v=638144820751570000&width=800&height=1422&aspect=true';
        $producto9->precio='13999';
        $producto9->tipo_id='4';
        $producto9->marca_id='1';
        $producto9->save();
     
        $producto10 = new Producto ;
        $producto10->id = '10';
        $producto10->name = 'desportivos';
        $producto10->descripcion ='pantalon puma';
        $producto10->URLimagen='https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_480,h_480/global/538305/01/mod01/fnd/ARG/fmt/png';
        $producto10->precio='32999';
        $producto10->tipo_id='4';
        $producto10->marca_id='2';
        $producto10->save();
     
        $producto11 = new Producto ;
        $producto11->id = '11';
        $producto11->name = 'pantalon classico';
        $producto11->descripcion ='pantalon umbro';
        $producto11->URLimagen='https://umbroar.vtexassets.com/arquivos/ids/2281759-800-auto?v=638140583632370000&width=800&height=auto&aspect=true';
        $producto11->precio='13410';
        $producto11->tipo_id='4';
        $producto11->marca_id='4';
        $producto11->save();
     
        $producto12 = new Producto ;
        $producto12->id = '12';
        $producto12->name = 'NSW Icon Futura';
        $producto12->descripcion ='remerra nike';
        $producto12->URLimagen='https://sporting.vtexassets.com/arquivos/ids/197609-800-800?v=637105595749470000&width=800&height=800&aspect=true';
        $producto12->precio='9199';
        $producto12->tipo_id='3';
        $producto12->marca_id='3';
        $producto12->save();
     
        $producto13 = new Producto ;
        $producto13->id = '13';
        $producto13->name = 'Essentials Logo';
        $producto13->descripcion ='remerra puma';
        $producto13->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwdbc15e1c/products/PU_845885-01/PU_845885-01-1.JPG';
        $producto13->precio='8999';
        $producto13->tipo_id='3';
        $producto13->marca_id='2';
        $producto13->save();
     
        $producto14 = new Producto ;
        $producto14->id = '14';
        $producto14->name = 'Essentials';
        $producto14->descripcion ='remerra adidas';
        $producto14->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw16e14397/products/AD_GK9120/AD_GK9120-1.JPG';
        $producto14->precio='9499';
        $producto14->tipo_id='3';
        $producto14->marca_id='1';
        $producto14->save();
     
        $producto15 = new Producto ;
        $producto15->id = '15';
        $producto15->name = 'Est. Rex';
        $producto15->descripcion ='remerra umbro';
        $producto15->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwee06a3ca/products/UB_U11L00244-6577/UB_U11L00244-6577-1.JPG';
        $producto15->precio='7399';
        $producto15->tipo_id='3';
        $producto15->marca_id='4';
        $producto15->save();
     
        $producto16 = new Producto ;
        $producto16->id = '16';
        $producto16->name = 'Futur Icons 3S';
        $producto16->descripcion ='short adidas';
        $producto16->URLimagen='https://sportline.vtexassets.com/arquivos/ids/883217-800-1422?v=638103095577730000&width=800&height=1422&aspect=true';
        $producto16->precio='15999';
        $producto16->tipo_id='5';
        $producto16->marca_id='1';
        $producto16->save();
     
        $producto17 = new Producto ;
        $producto17->id = '17';
        $producto17->name = 'Active Women';
        $producto17->descripcion ='short puma';
        $producto17->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwd372b7ab/products/PU_671079-01/PU_671079-01-1.JPG';
        $producto17->precio='13999';
        $producto17->tipo_id='5';
        $producto17->marca_id='2';
        $producto17->save();
     
        $producto18 = new Producto ;
        $producto18->id = '18';
        $producto18->name = 'Plana';
        $producto18->descripcion ='short umbro';
        $producto18->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw3bc7d424/products/UB_U11TW020-6577/UB_U11TW020-6577-1.JPG';
        $producto18->precio='8499';
        $producto18->tipo_id='5';
        $producto18->marca_id='4';
        $producto18->save();
     
        $producto19 = new Producto ;
        $producto19->id = '19';
        $producto19->name = 'Essential SWSH';
        $producto19->descripcion ='gorra nike';
        $producto19->URLimagen='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81stVhev5AL._AC_UL1500_.jpg';
        $producto19->precio='12830';
        $producto19->tipo_id='6';
        $producto19->marca_id='3';
        $producto19->save();
     
        $producto20 = new Producto ;
        $producto20->id = '20';
        $producto20->name = 'Essentials';
        $producto20->descripcion ='gorra puma';
        $producto20->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwcb9c18b0/products/PU_052919-09/PU_052919-09-1.JPG';
        $producto20->precio='6799';
        $producto20->tipo_id='6';
        $producto20->marca_id='2';
        $producto20->save();
        
    }

}

