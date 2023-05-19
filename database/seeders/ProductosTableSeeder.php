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
        $producto2->name = 'Galaxy 6';
        $producto2->descripcion ='zapatilla adidas';
        $producto2->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw22b1c0a5/products/AD_GW3848/AD_GW3848-1.JPG';
        $producto2->precio='23999';
        $producto2->tipo_id='1';
        $producto2->marca_id='1';
        $producto2->save();

        $producto3 = new Producto ;
        $producto3->id = '3';
        $producto3->name = 'Comet 2';
        $producto3->descripcion ='zapatilla puma';
        $producto3->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw7cf05cef/products/PU_195648-01/PU_195648-01-1.JPG';
        $producto3->precio='20999';
        $producto3->tipo_id='1';
        $producto3->marca_id='2';
        $producto3->save();

        $producto4 = new Producto ;
        $producto4->id = '4';
        $producto4->name = 'Puma clasico';
        $producto4->descripcion ='zapatilla puma';
        $producto4->URLimagen='https://www.moov.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw2815c170/products/PU_388981-01/PU_388981-01-1.JPG';
        $producto4->precio='20999';
        $producto4->tipo_id='1';
        $producto4->marca_id='2';
        $producto4->save();

        $producto5 = new Producto ;
        $producto5->id = '5';
        $producto5->name = 'Revolution 6';
        $producto5->descripcion ='zapatilla nike';
        $producto5->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwf69a1410/products/NI_DC3728-003/NI_DC3728-003-1.JPG';
        $producto5->precio='26899';
        $producto5->tipo_id='1';
        $producto5->marca_id='3';
        $producto5->save();

        $producto6 = new Producto ;
        $producto6->id = '6';
        $producto6->name = 'Court Vision';
        $producto6->descripcion ='zapatilla nike';
        $producto6->URLimagen='https://sporting.vtexassets.com/arquivos/ids/731897-800-800?v=638128474904670000&width=800&height=800&aspect=true';
        $producto6->precio='30999';
        $producto6->tipo_id='1';
        $producto6->marca_id='3';
        $producto6->save();
         
        $producto7 = new Producto ;
        $producto7->id = '7';
        $producto7->name = 'Street Jogger';
        $producto7->descripcion ='zapatilla umbro';
        $producto7->URLimagen='https://media.solodeportes.com.ar/media/catalog/product/cache/7c4f9b393f0b8cb75f2b74fe5e9e52aa/z/a/zapatillas-entrenamiento-umbro-street-jogger-gris-755010s74037810-1.jpg';
        $producto7->precio='15290';
        $producto7->tipo_id='1';
        $producto7->marca_id='4';
        $producto7->save();
    
     
        $producto8 = new Producto ;
        $producto8->id = '8';
        $producto8->name = 'Blitzing';
        $producto8->descripcion ='gorra umbro';
        $producto8->URLimagen='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQx_ClicxdnShsVT9Iiz_06T8R1Dq9PMiZDRLKhnIFmgbCtGBgm7vaHQTe7Zu7k5PY6KwI&usqp=CAU';
        $producto8->precio='6699';
        $producto8->tipo_id='6';
        $producto8->marca_id='4';
        $producto8->save();

     
        $producto9 = new Producto ;
        $producto9->id = '9';
        $producto9->name = 'Cm997 Hombre';
        $producto9->descripcion ='zapatilla new balance';
        $producto9->URLimagen='https://celadasa.vtexassets.com/arquivos/ids/219509-800-auto?v=638035112505270000&width=800&height=auto&aspect=true';
        $producto9->precio='37299';
        $producto9->tipo_id='1';
        $producto9->marca_id='5';
        $producto9->save();
     
     
        $producto10 = new Producto ;
        $producto10->id = '10';
        $producto10->name = '327';
        $producto10->descripcion ='zapatilla NB';
        $producto10->URLimagen='https://www.newbalance.com.ar/media/catalog/product/cache/4/small_image/250x195/9df78eab33525d08d6e5fb8d27136e95/z/a/zapatillas-new-balance-327-ws327lg_nb_02_i_1.jpg';
        $producto10->precio='32299';
        $producto10->tipo_id='1';
        $producto10->marca_id='5';
        $producto10->save();
     
     
        $producto11 = new Producto ;
        $producto11->id = '11';
        $producto11->name = 'Back To Sport';
        $producto11->descripcion ='campera adidas';
        $producto11->URLimagen='https://sporting.vtexassets.com/arquivos/ids/630016-800-800?v=637988385472230000&width=800&height=800&aspect=true';
        $producto11->precio='70999';
        $producto11->tipo_id='2';
        $producto11->marca_id='1';
        $producto11->save();
     
     
        $producto12 = new Producto ;
        $producto12->id = '12';
        $producto12->name = 'Sportswear';
        $producto12->descripcion ='campera nike';
        $producto12->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw2ca0518a/products/NI_BV2645-010/NI_BV2645-010-1.JPG';
        $producto12->precio='129187';
        $producto12->tipo_id='2';
        $producto12->marca_id='3';
        $producto12->save();
     
        $producto13 = new Producto ;
        $producto13->id = '13';
        $producto13->name = 'Mercedes-amg';
        $producto13->descripcion ='campera puma';
        $producto13->URLimagen='https://img.segmentify.com/s/fit-in/360x360/images.puma.net/images/534906/02/mod01/fnd/ARG/';
        $producto13->precio='36999';
        $producto13->tipo_id='2';
        $producto13->marca_id='2';
        $producto13->save();
     
     
        $producto14 = new Producto ;
        $producto14->id = '14';
        $producto14->name = 'Classic';
        $producto14->descripcion ='campera Umbro';
        $producto14->URLimagen='https://http2.mlstatic.com/D_NQ_NP_633044-MLA54244219416_032023-W.jpg';
        $producto14->precio='23540';
        $producto14->tipo_id='2';
        $producto14->marca_id='4';
        $producto14->save();
     
     
        $producto15 = new Producto ;
        $producto15->id = '15';
        $producto15->name = 'Gameday';
        $producto15->descripcion ='Campera adidas';
        $producto15->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwd4500153/products/AD_HC5490/AD_HC5490-1.JPG';
        $producto15->precio='31999';
        $producto15->tipo_id='2';
        $producto15->marca_id='1';
        $producto15->save();
     
     
        $producto16 = new Producto ;
        $producto16->id = '16';
        $producto16->name = 'Therma';
        $producto16->descripcion ='campera nike';
        $producto16->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwc30f05f4/products/NI_DD6102-652/NI_DD6102-652-1.JPG';
        $producto16->precio='39599';
        $producto16->tipo_id='2';
        $producto16->marca_id='3';
        $producto16->save();
     
     
        $producto17 = new Producto ;
        $producto17->id = '17';
        $producto17->name = 'Power Colorblock';
        $producto17->descripcion ='campera puma';
        $producto17->URLimagen='https://sportline.vtexassets.com/arquivos/ids/892860-800-1422?v=638108333307330000&width=800&height=1422&aspect=true';
        $producto17->precio='9666';
        $producto17->tipo_id='2';
        $producto17->marca_id='2';
        $producto17->save();
     
     
        $producto18 = new Producto ;
        $producto18->id = '18';
        $producto18->name = 'classic black';
        $producto18->descripcion ='campera umbro';
        $producto18->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw7c0745a7/products/UB_U11L188-6585/UB_U11L188-6585-1.JPG';
        $producto18->precio='11799';
        $producto18->tipo_id='2';
        $producto18->marca_id='4';
        $producto18->save();
     
     
        $producto19 = new Producto ;
        $producto19->id = '19';
        $producto19->name = 'sportswear';
        $producto19->descripcion ='campera adidas';
        $producto19->URLimagen='https://media.solodeportes.com.ar/media/catalog/product/cache/7c4f9b393f0b8cb75f2b74fe5e9e52aa/c/a/campera-adidas-sportswear-colorblock-mujer-negra-100020h20221001-1.jpg';
        $producto19->precio='28499';
        $producto19->tipo_id='2';
        $producto19->marca_id='1';
        $producto19->save();
     
     
        $producto20 = new Producto ;
        $producto20->id = '20';
        $producto20->name = 'futura negra';
        $producto20->descripcion ='campera nike';
        $producto20->URLimagen='https://media.solodeportes.com.ar/media/catalog/product/cache/7c4f9b393f0b8cb75f2b74fe5e9e52aa/5/1/51102036e092023-1.jpg';
        $producto20->precio='16319';
        $producto20->tipo_id='2';
        $producto20->marca_id='3';
        $producto20->save();
     
     
        $producto21 = new Producto ;
        $producto21->id = '21';
        $producto21->name = 'Essentials Regular Fit';
        $producto21->descripcion ='pantalon adidas';
        $producto21->URLimagen='https://sportline.vtexassets.com/arquivos/ids/953729-800-1422?v=638144820751570000&width=800&height=1422&aspect=true';
        $producto21->precio='13999';
        $producto21->tipo_id='4';
        $producto21->marca_id='1';
        $producto21->save();
     
     
        $producto22 = new Producto ;
        $producto22->id = '22';
        $producto22->name = 'French Terry';
        $producto22->descripcion ='pantalon adidas';
        $producto22->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwf82e6b90/products/AD_GM8733/AD_GM8733-1.JPG';
        $producto22->precio='13999';
        $producto22->tipo_id='4';
        $producto22->marca_id='1';
        $producto22->save();
     
     
        $producto23 = new Producto ;
        $producto23->id = '23';
        $producto23->name = 'desportivos';
        $producto23->descripcion ='pantalon puma';
        $producto23->URLimagen='https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_480,h_480/global/538305/01/mod01/fnd/ARG/fmt/png';
        $producto23->precio='32999';
        $producto23->tipo_id='4';
        $producto23->marca_id='2';
        $producto23->save();
     
     
        $producto24 = new Producto ;
        $producto24->id = '24';
        $producto24->name = 'Fandom';
        $producto24->descripcion ='Fandom';
        $producto24->URLimagen='https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_480,h_480/global/536113/01/mod01/fnd/ARG/fmt/png';
        $producto24->precio='28999';
        $producto24->tipo_id='4';
        $producto24->marca_id='2';
        $producto24->save();
     
     
        $producto25 = new Producto ;
        $producto25->id = '25';
        $producto25->name = 'pantalon classico';
        $producto25->descripcion ='pantalon umbro';
        $producto25->URLimagen='https://umbroar.vtexassets.com/arquivos/ids/2281759-800-auto?v=638140583632370000&width=800&height=auto&aspect=true';
        $producto25->precio='13410';
        $producto25->tipo_id='4';
        $producto25->marca_id='4';
        $producto25->save();
    
     
        $producto26 = new Producto ;
        $producto26->id = '26';
        $producto26->name = 'NSW Icon Futura';
        $producto26->descripcion ='remerra nike';
        $producto26->URLimagen='https://sporting.vtexassets.com/arquivos/ids/197609-800-800?v=637105595749470000&width=800&height=800&aspect=true';
        $producto26->precio='9199';
        $producto26->tipo_id='3';
        $producto26->marca_id='3';
        $producto26->save();

     
        $producto27 = new Producto ;
        $producto27->id = '27';
        $producto27->name = 'Dri-Fit Miler';
        $producto27->descripcion ='remerra nike';
        $producto27->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwe4cb3ade/products/NICJ5332-010/NICJ5332-010-1.JPG';
        $producto27->precio='8499';
        $producto27->tipo_id='3';
        $producto27->marca_id='3';
        $producto27->save();
     
     
        $producto28 = new Producto ;
        $producto28->id = '28';
        $producto28->name = 'Essentials Logo';
        $producto28->descripcion ='remerra puma';
        $producto28->URLimagen='https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwdbc15e1c/products/PU_845885-01/PU_845885-01-1.JPG';
        $producto28->precio='8999';
        $producto28->tipo_id='3';
        $producto28->marca_id='2';
        $producto28->save();
     
     
        $producto29 = new Producto ;
        $producto29->id = '29';
        $producto29->name = 'Essentials';
        $producto29->descripcion ='remerra adidas';
        $producto29->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw16e14397/products/AD_GK9120/AD_GK9120-1.JPG';
        $producto29->precio='9499';
        $producto29->tipo_id='3';
        $producto29->marca_id='1';
        $producto29->save();
     
        $producto30 = new Producto ;
        $producto30->id = '30';
        $producto30->name = 'Est. Rex';
        $producto30->descripcion ='remerra umbro';
        $producto30->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwee06a3ca/products/UB_U11L00244-6577/UB_U11L00244-6577-1.JPG';
        $producto30->precio='7399';
        $producto30->tipo_id='3';
        $producto30->marca_id='4';
        $producto30->save();
     
     
        $producto31 = new Producto ;
        $producto31->id = '31';
        $producto31->name = 'Futur Icons 3S';
        $producto31->descripcion ='short adidas';
        $producto31->URLimagen='https://sportline.vtexassets.com/arquivos/ids/883217-800-1422?v=638103095577730000&width=800&height=1422&aspect=true';
        $producto31->precio='15999';
        $producto31->tipo_id='5';
        $producto31->marca_id='1';
        $producto31->save();
     
     
        $producto32 = new Producto ;
        $producto32->id = '32';
        $producto32->name = 'Own The Run';
        $producto32->descripcion ='short adidas';
        $producto32->URLimagen='https://sporting.vtexassets.com/arquivos/ids/597399-800-800?v=637956498187530000&width=800&height=800&aspect=true';
        $producto32->precio='14999';
        $producto32->tipo_id='5';
        $producto32->marca_id='1';
        $producto32->save();
     
     
        $producto33 = new Producto ;
        $producto33->id = '33';
        $producto33->name = 'Active Women';
        $producto33->descripcion ='short puma';
        $producto33->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwd372b7ab/products/PU_671079-01/PU_671079-01-1.JPG';
        $producto33->precio='13999';
        $producto33->tipo_id='5';
        $producto33->marca_id='2';
        $producto33->save();
     
     
        $producto34 = new Producto ;
        $producto34->id = '34';
        $producto34->name = 'Dri-FIT';
        $producto34->descripcion ='short nike';
        $producto34->URLimagen='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81B1UO-919L._AC_UL1500_.jpg';
        $producto34->precio='15690';
        $producto34->tipo_id='5';
        $producto34->marca_id='3';
        $producto34->save();
     
     
        $producto35 = new Producto ;
        $producto35->id = '35';
        $producto35->name = 'Plana';
        $producto35->descripcion ='short umbro';
        $producto35->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw3bc7d424/products/UB_U11TW020-6577/UB_U11TW020-6577-1.JPG';
        $producto35->precio='8499';
        $producto35->tipo_id='5';
        $producto35->marca_id='4';
        $producto35->save();
     
     
        $producto36 = new Producto ;
        $producto36->id = '36';
        $producto36->name = 'Essential SWSH';
        $producto36->descripcion ='gorra nike';
        $producto36->URLimagen='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/81stVhev5AL._AC_UL1500_.jpg';
        $producto36->precio='12830';
        $producto36->tipo_id='6';
        $producto36->marca_id='3';
        $producto36->save();
     
     
        $producto37 = new Producto ;
        $producto37->id = '37';
        $producto37->name = 'Legacy 91 Tech';
        $producto37->descripcion ='gorra nike';
        $producto37->URLimagen='https://media.solodeportes.com.ar/media/catalog/product/cache/3cb7d75bc2a65211451e92c5381048e9/g/o/gorra-nike-legacy-91-tech-gris-96970352-511040dh1640070-1.jpg';
        $producto37->precio='10599';
        $producto37->tipo_id='6';
        $producto37->marca_id='3';
        $producto37->save();
     
     
        $producto38 = new Producto ;
        $producto38->id = '38';
        $producto38->name = 'Essentials';
        $producto38->descripcion ='gorra puma';
        $producto38->URLimagen='https://www.stockcenter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwcb9c18b0/products/PU_052919-09/PU_052919-09-1.JPG';
        $producto38->precio='6799';
        $producto38->tipo_id='6';
        $producto38->marca_id='2';
        $producto38->save();
     
     
        $producto39 = new Producto ;
        $producto39->id = '39';
        $producto39->name = 'Originals';
        $producto39->descripcion ='gorra adidas';
        $producto39->URLimagen='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/7105gGsM6QL._AC_UL1500_.jpg';
        $producto39->precio='10230';
        $producto39->tipo_id='6';
        $producto39->marca_id='1';
        $producto39->save();
        
    }


   


}

