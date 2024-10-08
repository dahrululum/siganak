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
        return view('site.index',[
                'layout'  => $this->layout,
                'pub'     => $pub,
                
              ]);
        
    }
    public function indikator()
    {
      $tar = Reftarget::where('status',1)->orderby('id')->get();    
      $per = Periode::where('status',1)->first();
        return view('site.indikator',[
                'layout'  => $this->layout,
                'tar'     => $tar,
                'periode' => $per,
              ]);
        
    }
}
