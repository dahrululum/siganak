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
      $wil = Refwilayah::where('status',1)->get();
      $wil1 = Refwilayah::where('id',1)->first();
      $wil2 = Refwilayah::where('id',2)->first();
      $wil3 = Refwilayah::where('id',3)->first();
      $wil4 = Refwilayah::where('id',4)->first();
      $wil5 = Refwilayah::where('id',5)->first();
      $wil6 = Refwilayah::where('id',6)->first();
      $wil7 = Refwilayah::where('id',7)->first();
      $wil8 = Refwilayah::where('id',8)->first();
      
      
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
                'wil1'     => $wil1->ket,
                'wil2'     => $wil2->ket,
                'wil3'     => $wil3->ket,
                'wil4'     => $wil4->ket,
                'wil5'     => $wil5->ket,
                'wil6'     => $wil6->ket,
                'wil7'     => $wil7->ket,
                'wil8'     => $wil8->ket,
                'wl'      => $web,
                
                
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
