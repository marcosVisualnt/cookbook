<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

            use Orchestra\Parser\XmlServiceProvider;


class PagesController extends Controller
{

    public function home()
    {
        return view('home');
        }
    
    



    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


public function leerUrlVnt(Request $request)
    {
        $name = $request->name;
        //console.log();

            $xml = XmlParser::load('http://192.168.10.113:12380/vfp/select.sql?DBTableName=pesadas&DBRecordName=pesada&DATABASE=c:/pruebas/cobreros/visualnt/datos/gesco/LCO&SQL=SELECT%20*%20from%20tab_pesa.dbf%20ORDER%20BY%20fecha%20DESC');
            $pesada = $xml->parse([
                'tipo' => ['uses' => 'pesada.tipo'],
                'matricula' => ['uses' => 'pesada.matricula'],
                'cisterna' => ['uses' => 'pesada.cisterna'],
            ]);

            //
    
     }




}