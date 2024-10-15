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
                'wl'      => $web,
                
                
              ]);
        
    }
    public function datadasar($jenis, $wil = null)
    {
      if(empty($wil)){
        $kdwil=1;
      }else{
        $kdwil=$wil;

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
       
      $label = "Data Dasar  ".ucfirst($jenis);
        return view('site.datadasar',[
                'layout'  => $this->layout,
                'el'     => $datel,
                'periode' => $per,
                'label'   => $label
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
}
