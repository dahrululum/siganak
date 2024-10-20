<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;

use Illuminate\Database\Eloquent\Model;
use DB;
 
use App\Models\Elemen;
use App\Models\Nilai;
use App\Models\Refjenis;
use App\Models\Refwilayah;
use App\Models\Reftarget;
use App\Models\Periode;
use App\Models\Publikasi;
use App\Models\Weblink;
use App\Models\Artikel;
use App\Models\Admin;
 

use Session;
use Carbon;


class FrontController extends Controller
{
    //
    public $layout = 'layouts.frontend.main';

    public function index()
    {
      $ynow = date('Y');
      $per = Periode::where('status',1)->first();
      $wil = Refwilayah::where('status',1)
            ->orderby('id','asc')  
            ->get();
     
      $namawil = "";
      $n1 = "";
      $n2 = "";
      $n3 = "";
      foreach($wil as $wilayah){
         
        $namawil .= '"' .$wilayah->ket. '"'.',';
        //nlaki
        $cekn1= Nilai::where(
          [
              ['id_elemen','=',2],
              ['id_jenis','=',1],
              ['id_wilayah','=',$wilayah->id],
              ['tahun','=',$per->thnakhir],
          ]
          )->count();
          if($cekn1 != 0 ){
            $nilaina1= Nilai::where(
              [
                  ['id_elemen','=',2],
                  ['id_jenis','=',1],
                  ['id_wilayah','=',$wilayah->id],
                  ['tahun','=',$per->thnakhir],
              ]
              )->first();

              $nilaielement1=$nilaina1->nilai;
              $n1 .= $nilaielement1 .",";  
          }else{
            $nilaielement1=0;
            $n1 .= $nilaielement1 .",";  
          }
        
        //nperempuan
        $cekn2= Nilai::where(
          [
              ['id_elemen','=',2],
              ['id_jenis','=',1],
              ['id_wilayah','=',$wilayah->id],
              ['tahun','=',$per->thnakhir],
          ]
          )->count();
          if($cekn2 != 0 ){
            $nilaina2= Nilai::where(
              [
                  ['id_elemen','=',3],
                  ['id_jenis','=',1],
                  ['id_wilayah','=',$wilayah->id],
                  ['tahun','=',$per->thnakhir],
              ]
              )->first();

              $nilaielement2=$nilaina2->nilai;
              $n2 .= $nilaielement2 .",";  
          }else{
            $nilaielement2=0;
            $n2 .= $nilaielement2 .",";  
          }
        //nkper
        $cekn3= Nilai::where(
          [
              ['id_elemen','=',59],
              ['id_jenis','=',1],
              ['id_wilayah','=',$wilayah->id],
              ['tahun','=',$per->thnakhir],
          ]
          )->count();
          if($cekn3 != 0 ){
            $nilaina3= Nilai::where(
              [
                  ['id_elemen','=',59],
                  ['id_jenis','=',1],
                  ['id_wilayah','=',$wilayah->id],
                  ['tahun','=',$per->thnakhir],
              ]
              )->first();

              $nilaielement3=$nilaina3->nilai;
              $n3 .= $nilaielement3 .",";  
          }else{
            $nilaielement3=0;
            $n3 .= $nilaielement3 .",";  
          }

 
      }
      $arrwil = $namawil;
      $arrn1 = $n1; 
      $arrn2 = $n2;
      $arrn3 = $n3;

      $pub = Publikasi::where('status',1)
            ->orderby('id')
            ->limit(3)
            ->get();    
      $art = Artikel::where('status_publish',1)
            ->orderby('id')
            ->limit(3)
            ->get(); 
      $web = Weblink::where('status',1)
            ->orderby('id')
             
            ->get();     
        return view('site.index',[
                'layout'  => $this->layout,
                'pub'     => $pub,
                'art'     => $art,
                'ynow'    => $ynow,
                'wl'       => $web,
                'allwil'   => $arrwil,
                'jml1'      => $arrn1,
                'jml2'      => $arrn2,
                'jml3'      => $arrn3,
                
                
                
              ]);
        
    }
    public function datadasar($jenis, $idwil = null)
    {
      if(empty($idwil)){
        $kdwil="1";
      }else{
        $kdwil=$idwil;

      }
      if($jenis=="gender"){
        $kdjenis=1;
      }else{
        $kdjenis=2;
      }

      $datel = Elemen::where('id_jenis',$kdjenis)
                      ->where('id_induk',0)
                      ->get();    
      $per = Periode::where('status',1)->first();
      $getwil = Refwilayah::where('id',$kdwil)->first();
      $wil = Refwilayah::where('status',1)->get();
       
      $label = "Data Dasar  ".ucfirst($jenis);
        return view('site.datadasar',[
                'layout'    => $this->layout,
                'el'        => $datel,
                'periode'   => $per,
                'wilayah'   => $wil,
                'kdwil'     => $kdwil,
                'label'     => $label,
                'getwil'    => $getwil,
              ]);
        
    }

    public function indikator()
    {
      $tar = Reftarget::where('status',1)->orderby('id')->get();    
      $per = Periode::where('status',1)->first();
      $label = "Indikator Kinerja";
        return view('site.indikator',[
                'layout'  => $this->layout,
                'tar'     => $tar,
                'periode' => $per,
                'label'   => $label
              ]);
        
    }
    public function publikasi()
    {
      $pub = Publikasi::where('status',1)->orderby('id')->get();    
      $per = Periode::where('status',1)->first();
      $label = "Publikasi";
        return view('site.publikasi',[
                'layout'  => $this->layout,
                'pub'     => $pub,
                'periode' => $per,
                'label'   => $label
              ]);
        
    }
    public function detailpublikasi($alias)
    {
      $pub = Publikasi::where('alias',$alias)->first();    
     
      $label = "Detail Publikasi";
        return view('site.detailpublikasi',[
                'layout'  => $this->layout,
                'pub'     => $pub,
                'label'   => $label
              ]);
        
    }
    //detail artikel
    public function detailartikel($alias)
    {
      $pub = Artikel::where('alias',$alias)->first();    
     
      $label = "Detail Artikel";
        return view('site.detailartikel',[
                'layout'  => $this->layout,
                'pub'     => $pub,
                'label'   => $label
              ]);
        
    }
    public function search(Request $request)
    {
      

        $per = Periode::where('status',1)->first();
        $wil = Refwilayah::all();
        $jen = Refjenis::where('status',1)->get();

        $params = $request->query();
        if(!empty($params)){
            if(!empty($params['key'])){$key=$params['key'];}else{$key="";}
            

            $arrpar="?key=".$key;
        
        }else{
            $arrpar="";
        }

        
          
        $queryEL = Elemen::querysearch($params);

        //$queryEL->latest();
        //$allEL = $queryEL->paginate(10);
        $model = $queryEL->get();
        $jmlkey = $queryEL->count();
        return view('site.search' , [
          'layout' => $this->layout,
          'periode'       => $per,
          'wilayah'       => $wil,
          'jenis'         => $jen,
          'params'        => $params,
          'arrpar'        => $arrpar,
          'model'         => $model,
          'jmlkey'        => $jmlkey,
          
           
        ]);

      
    
    
    }

}
