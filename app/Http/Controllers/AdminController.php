<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;

use Illuminate\Database\Eloquent\Model;
use DB;
 
use App\Models\Elemen;
use App\Models\Refjenis;
use App\Models\Refwilayah;

 
use App\Models\Admin;
 

use Session;
use Carbon;

class AdminController extends Controller
{
    public $layout = 'layouts.backend.main';

    public function index()
    {
        if(Auth::guard('admin')->check()){  
           
            
            return view('admin.dashboard',[
              'layout' => $this->layout,
             
              
            ]);
          }
          return view('admin.login',[
            'layout' => $this->layout 
          ]);
    
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (auth()->guard('admin')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            return redirect()->intended('/admin');
        } else {
            
            /*    
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
                */
                return back()->withErrors([
                    'email' => 'Username/Email tidak sesuai, silahkan ulangi.',
                    'password' => 'Password tidak sesuai.',
                ]);
        }
    }
    public function postLogout()
    {
        auth()->guard('admin')->logout();
        session()->flush();

        return redirect()->route('admin.login');
    }
    //12-12-2021
    //user
    public function useradmin(Request $request)
    {
        if(Auth::guard('admin')->check()){  
                $users = Admin::Where('level',1)->get();
            
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.useradmin' , [
                    'layout' => $this->layout,
                    'pelamars' =>$users,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function adduseradmin()
    {
        if(Auth::guard('admin')->check()){  
       
            return view('admin/adduseradmin',[
            'layout' => $this->layout,
             
             
            ]);
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
            }        
       // return view('register');
    }
    public function postAdduseradmin(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:admins',
        'username' => 'required', 
        'password' => 'required|min:6',
        ]);
         
        
        Admin::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'level' => $request['level'],
            'password' => Hash::make($request['password'])
          ]);
       
        return Redirect::to("/admin")->with('success','Selamat, Anda berhasil untuk melakukan Registrasi');
    }
    
    public function edituseradmin($id)
    {
        $us = Admin::where('id', $id)->first();
       
          return view('admin/edituseradmin',[
            'layout' => $this->layout,
            'user' =>$us    
             
        ]);

       // return view('register');
    }
    public function postEdituseradmin(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
                $email=$request->input('email');
                Admin::where('email', $email)
                ->update([
                    'name' => $request['name'],
                    'level' => $request['level'],
                    'username' => $request['username'],
                    
                
                
            ]);
        
                return Redirect::to("/admin")->with('success',' Edit User berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    //user pd
    public function userpd(Request $request)
    {
        if(Auth::guard('admin')->check()){  
                $users = Admin::Where('level',2)->get();
            
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.userpd' , [
                    'layout' => $this->layout,
                    'pelamars' =>$users,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function adduserpd()
    {
        if(Auth::guard('admin')->check()){  
            $users = Admin::Where('level',2)->get();
            $allpd = Refwilayah::where('status',1)->get();
            return view('admin/adduserpd',[
            'layout' => $this->layout,
            'pel' =>$users,
            'insta'  =>$allpd, 
             
            ]);
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
            }        
       // return view('register');
    }
    public function postAdduserpd(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:admins',
        'username' => 'required', 
        'password' => 'required|min:6',
        ]);
         
        
        Admin::create([
            'name'      => $request['name'],
            'username'  => $request['username'],
            'email'     => $request['email'],
            'level'     => $request['level'],
            'id_wilayah'    => $request['id_instansi'],
            
            
            'password'  => Hash::make($request['password'])
          ]);
       
        return Redirect::to("/admin")->with('success','Selamat, Anda berhasil untuk melakukan Registrasi User');
    }
    
    public function edituserpd($id)
    {
        $us = Admin::where('id', $id)->first();
        $skpd = Refwilayah::where('id',$us->id_wilayah)->first();
        $allpd = Refwilayah::where('status',1)->get();

          return view('admin/edituserpd',[
            'layout' => $this->layout,
            'pel'   =>$us,
            'skpd'  =>$skpd,  
            'insta'  =>$allpd, 
             
        ]);

       // return view('register');
    }
    public function postEdituserpd(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
                $email=$request->input('email');
                Admin::where('email', $email)
                ->update([
                    'name'        => $request['name'],
                    'level'       => $request['level'],
                    'username'    => $request['username'],
                    'id_wilayah'  => $request['id_wilayah'],
                    'password'    => Hash::make($request['password'])
                
                
            ]);
        
                return Redirect::to("/admin")->with('success',' Edit User berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    public function deluser($id)
    {
        if(Auth::guard('admin')->check()){      
             
            $user = Admin::where('id', $id)->first();
            $user->delete();
            return Redirect::to("/admin")->with('success',' Proses Delete berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
            ]);
        }
        
        
       
    }
    //wilayah
    //10 juni 2024
    public function wilayah(){
      if(Auth::guard('admin')->check()){  
        $wil = Refwilayah::where('status',1)->get();

        return view('admin/wilayah' , [
          'layout' => $this->layout,
          'wils' =>$wil,
         
        ]);
      }else{
        return view('admin.login',[
            'layout' => $this->layout 
          ]);
        }
    }
    //formasi jabatan
    //05 des 2021
    public function jabatan($id)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['tanggal_selesai_aktif', '>=', date('Y-m-d')],
                    ['status_hapus','=',0],
                    
                    
                   
                  ]
            )->orderBy('id')->limit(1)->get();

            $jmlpeg=InstansiPegawai::where(
              [
                ['id_instansi','=',$id],
                ['tanggal_mulai', '<=', date('Y-m-d')],
                ['tanggal_selesai', '>=', date('Y-m-d')],
                ['status_hapus','=',0],

              ]
            )->count();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/jabatan' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'insta' =>$allpd,
                    'pd'    =>$inst,
                    'jpeg'  =>$jmlpeg,
                    
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function formasijab($id)
    {
        if(Auth::guard('admin')->check()){  
          $lastyear = date("Y-m-d", strtotime("-1 year"));

          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['tanggal_selesai_aktif', '>=', date('Y-m-d')],
                    ['status_hapus','=',0],
                   
                  ]
            )->orderBy('id')->limit(1)->get();

            $jmlpeg=InstansiPegawai::where(
              [
                ['id_instansi','=',$id],
                ['tanggal_mulai', '<=', date('Y-m-d')],
                ['tanggal_selesai', '>=', date('Y-m-d')],
                ['status_hapus','=',0],

              ]
            )->count();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/formasijabatan' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'insta' =>$allpd,
                    'pd'    =>$inst,
                    'jpeg'  =>$jmlpeg,
                    'lastyear'  =>$lastyear,
                    
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function postEditFormasijab(Request $request)
    {
      $idinstansi=$request['idinstansi'];
      $lastyear = date("Y-m-d", strtotime("-1 year"));
      $now=date('Y-m-d');
       $idjab=$request['idjab'];
       $nilaik=$request['nilaiabk'];
       $statusjab=$request['statusjab'];

       foreach ($idjab as $key=> $value) { 
        $idna = $idjab[$key]; // or  $value;
        $nilaina = $nilaik[$key];
        $statusna = $statusjab[$key];
        if($statusna ==2){
          $tglna=$lastyear;
        }else{
          $tglna='9999-12-31';
        }
        
        Jabatan::where('id', $idna)
                ->update([
                    'jumlah_abk'                => $nilaina,
                    'tanggal_selesai_aktif'     => $tglna,
                    
                ]);

        //echo $idna; echo": "; echo $nilaina; echo"  "; echo $statusna; echo"= "; echo $tglna;
        //echo "<br>";


      }
      return Redirect::to("/admin/formasijab/".$idinstansi)->with('success','Selamat, Anda berhasil untuk merubah Formasi Jabatan');
      

    }


    //UTILITY - INSTANSI
    public function instansi(Request $request)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();

            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/instansi' , [
                    'layout' => $this->layout,
                    'insta' =>$allpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    //instansi
    public function addinstansi()
    {
        if(Auth::guard('admin')->check()){  
            $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            $skpd = Instansi::where('id_instansi_jenis',1)->with('uptd')->get();
            //if kosong pd pada saat entri baru
            $inst = Instansi::Where('id_instansi_jenis',1)->first();
            return view('admin/addinstansi',[
            'layout' => $this->layout,
            'skpd' =>$skpd, 
            'pd'    =>$inst,
            'insta'    =>$allpd,
             
            ]);
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
            }        
       // return view('register');
    }
    public function postAddinstansi(Request $request)
    {  
        request()->validate([
        'nama' => 'required',
        'id_instansi_jenis' => 'required',
        ]);
         
        
        Instansi::create([
            'nama' => $request['nama'],
            'id_induk' => $request['id_induk'],
            'id_instansi_jenis' => $request['id_instansi_jenis'],
            'singkatan' => $request['singkatan'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telp'],
            'email' => $request['email'],
             
            
            
          ]);
       
        return Redirect::to("/admin/instansi")->with('success','Selamat, Instansi berhasil disimpan');
    }
    public function editinstansi($id)
    {
        //$us = Admin::where('id', $id)->first();
        $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
        $skpd = Instansi::where('id_instansi_jenis',1)->with('uptd')->get();
        $inst = Instansi::Where('id',$id)->first();
       
          return view('admin/editinstansi',[
            'layout' => $this->layout,
            'pd'    =>$inst,
            'insta'  =>$allpd,
                
             
        ]);

       // return view('register');
    }
    public function postEditinstansi(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
                $id=$request->input('idna');
                Instansi::where('id', $id)
                ->update([
                     
                    'nama' => $request['nama'],
                    'id_induk' => $request['id_induk'],
                    'id_instansi_jenis' => $request['id_instansi_jenis'],
                    'singkatan' => $request['singkatan'],
                    'alamat' => $request['alamat'],
                    'telepon' => $request['telp'],
                    'email' => $request['email'],
                
            ]);
        
                return Redirect::to("/admin/instansi")->with('success',' Edit Instansi berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    public function delinstansi($jenis, $id)
    {
        if(Auth::guard('admin')->check()){      
             
            $inst = Instansi::where('id', $id)->first();
            $inst->delete();
            return Redirect::to("/admin/instansi")->with('success',' Proses Delete berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
            ]);
        }
        
        
       
    }
    //strukturins
    public function strukins(Request $request)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id_instansi_jenis',1)->with('uptd')->get();

            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.strukins' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    
    
    //strukturorg - khusus jabatan
    public function strukorg(Request $request)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id_instansi_jenis',1)->with('uptd')->get();

            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/liststrukorg' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    //detail strukturorg
    public function detailorg($id)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                     
                  ]
            )->orderBy('id')->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/detailstrukorg' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'allpd' =>$allpd,
                    'pd'    =>$inst,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function detailuptd($id)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    
                     
                  ]
            )->orderBy('id')->limit(1)->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/detailsouptd' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function detailcabdin($id)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    
                     
                  ]
            )->orderBy('id')->limit(1)->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/detailsocabdin' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function detailsek($id)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id',$id)->first();
            $jabs = Jabatan::Where(
              [
                  ['id_instansi','=',$id],
                  ['id_jenis_jabatan','=',2]
                  
              ]
          )->orderBy('id_induk')->limit(1)->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/detailsosek' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jabs
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    //petajabatan
    public function petajab($id)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                     
                  ]
            )->orderBy('id')->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/detailpetajab' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'allpd' =>$allpd,
                    'pd'    =>$inst,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function printpetajab($id)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                     
                  ]
            )->orderBy('id')->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/printpetajab' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'allpd' =>$allpd,
                    'pd'    =>$inst,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    //chart
    public function orgchart($id = null)
    {
        if(Auth::guard('admin')->check()){  
          $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          $inst = Instansi::Where('id_instansi_jenis',1)->first();
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                     
                  ]
            )->orderBy('id')->get();
            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/strukturorg/orgchart' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    'allpd' =>$allpd,
                    'pd'    =>$inst,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }


    public function jabutama($pd = 1)
    {
        if(Auth::guard('admin')->check()){  
            $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            $inst = Instansi::Where('id_instansi_jenis',1)->first();

          if (is_null($pd)) {
            $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          } else {
            $skpd = Instansi::Where(
              [
                  ['id','=',$pd],
                  ['id_instansi_jenis','=',1] 
                
                ])->get();
 
          }
   
            return view('admin/jabatan/jabutama',[
              'layout' => $this->layout,
              'skpd'        => $skpd,
              'allpd'       =>$allpd,
              'pd'          =>$inst,
            ]);
          }
          return view('admin.login',[
            'layout' => $this->layout 
          ]);
    
    }
    public function jabuptd($pd = null)
    {
        if(Auth::guard('admin')->check()){  
            $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            $inst = Instansi::Where('id_instansi_jenis',1)->first();

          if (is_null($pd)) {
            $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          } else {
            $skpd = Instansi::Where(
              [
                  ['id','=',$pd],
                  ['id_instansi_jenis','=',1] 
                
                ])->get();
 
          }
   
            return view('admin/jabatan/jabuptd',[
              'layout' => $this->layout,
              'skpd'        => $skpd,
              'allpd'       =>$allpd,
              'pd'          =>$inst,
            ]);
          }
          return view('admin.login',[
            'layout' => $this->layout 
          ]);
    
    }
    public function jabcabdin($pd = null)
    {
        if(Auth::guard('admin')->check()){  
            $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            $inst = Instansi::Where('id_instansi_jenis',1)->first();

          if (is_null($pd)) {
            $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          } else {
            $skpd = Instansi::Where(
              [
                  ['id','=',$pd],
                  ['id_instansi_jenis','=',1] 
                
                ])->get();
 
          }
   
            return view('admin/jabatan/jabcabdin',[
              'layout' => $this->layout,
              'skpd'        => $skpd,
              'allpd'       =>$allpd,
              'pd'          =>$inst,
            ]);
          }
          return view('admin.login',[
            'layout' => $this->layout 
          ]);
    
    }
    public function jabsekolah($pd = 33)
    {
        if(Auth::guard('admin')->check()){  
            $allpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            $inst = Instansi::Where('id_instansi_jenis',1)->first();

          if (is_null($pd)) {
            $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
          } else {
            $skpd = Instansi::Where(
              [
                  ['id','=',$pd],
                  ['id_instansi_jenis','=',1] 
                
                ])->get();
 
          }
   
            return view('admin/jabatan/jabsekolah',[
              'layout' => $this->layout,
              'skpd'        => $skpd,
              'allpd'       =>$allpd,
              'pd'          =>$inst,
            ]);
          }
          return view('admin.login',[
            'layout' => $this->layout 
          ]);
    
    }
    //jabatan
    public function addjabatan($id)
    {
        if(Auth::guard('admin')->check()){  
          $inst = Instansi::Where('id',$id)->first();
          $jab = Jabatan::Where('id',$id)->first();
          //cek jenisjabatan e
            if($inst->id_instansi_jenis==1){
            //utama
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                ])->orderBy('id')->get();

            }elseif($inst->id_instansi_jenis==2){
              //uptd
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                ])->orderBy('id')->limit(1)->get();

            }elseif($inst->id_instansi_jenis==3){
              //sekolah
              $alljab = Jabatan::Where(
                [
                  ['id_instansi','=',$id],
                  ['id_jenis_jabatan','=',2]

                ])->orderBy('id_induk')->limit(1)->get();
            }else{
              //cabdin
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                ])->orderBy('id')->get();

            }

            return view('admin/jabatan/addjabatan',[
            'layout' => $this->layout,
            'pd'     => $inst,
            'idna'   => $id,
            'jb'     =>$jab,
            'jabs'  =>$alljab,
             
             
            ]);
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }        
       // return view('register');
    }
    public function postAddjabatan(Request $request)
    {  
      $id=$request->input('idna');
       
      if(!empty($request->input('id_induk'))){
        $idinduk=$request->input('id_induk');
      }else{
        $idinduk="118";
      }
        Jabatan::create([
          'id_instansi'               => $request['idinstansi'],
          'id_jenis_jabatan'          => $request['id_jenis_jabatan'],
          'nama'                      => $request['namajabatan'],
          'id_induk'                  => $idinduk,
          'id_eselon'                 => $request['id_eselon'],
          'id_tingkatan_fungsional'   => $request['id_tingkatan_fungsional'],
          'jml_bk'                    => $request['jmlbk'],
          'nilai_abk'                 => $request['nilaiabk'],
          
          ]);
       
        return Redirect::to("/admin/detailorg/".$id)->with('success','Selamat, Jabatan berhasil ditambah');
    }

    public function editjabatan($id,$menu = null, $pdna = null)
    {
        //$us = Admin::where('id', $id)->first();
        $jab = Jabatan::Where('id',$id)->first();
        $inst = Instansi::Where('id',$jab->id_instansi)->first();
        $alljab = Jabatan::Where(
            [
                ['id_instansi','=',$jab->id_instansi],
               
              ]
        )->orderBy('id')->limit(1)->get();
          return view('admin/jabatan/editjabatan',[
            'layout' => $this->layout,
            'idna'    =>$id,
            'menuna'    =>$menu,
            'jb'    =>$jab,
            'jabs'  =>$alljab,
            'pd'     =>$inst, 
            'pdna'     =>$pdna,   
             
             
        ]);

       // return view('register');
    }
    public function postEditjabatan(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
          $id=$request->input('idna');
          $menuna=$request->input('menuna');
          $pdna=$request->input('pdna');
          $idindukna=$request->input('idindukna');
          if($idindukna != "118"){
                Jabatan::where('id', $id)
                ->update([
                     
                    'id_instansi'               => $request['idinstansi'],
                    'id_jenis_jabatan'          => $request['id_jenis_jabatan'],
                    'nama'                      => $request['namajabatan'],
                    'id_induk'                  => $request['id_induk'],
                    'id_eselon'                 => $request['id_eselon'],
                    'id_tingkatan_fungsional'   => $request['id_tingkatan_fungsional'],
                    'jml_bk'                    => $request['jmlbk'],
                    'nilai_abk'                 => $request['nilaiabk'],
             
                
                ]);
          }else{
                Jabatan::where('id', $id)
                ->update([
                    
                    'id_instansi'               => $request['idinstansi'],
                    'id_jenis_jabatan'          => $request['id_jenis_jabatan'],
                    'nama'                      => $request['namajabatan'],
                    'id_eselon'                 => $request['id_eselon'],
                    'id_tingkatan_fungsional'   => $request['id_tingkatan_fungsional'],
                    'jml_bk'                    => $request['jmlbk'],
                    'nilai_abk'                 => $request['nilaiabk'],
          
                ]);
          }
          //detailorg
          if(!empty($pdna)){     
              return Redirect::to("/admin/".$menuna."/".$pdna)->with('success',' Edit Jabatan berhasil.');
          }else{
              return Redirect::to("/admin/".$menuna)->with('success',' Edit Jabatan berhasil.');
          }
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    public function deljabatan($id,$menu = null)
    {
        if(Auth::guard('admin')->check()){      
             
            $user = Jabatan::where('id', $id)->first();
            $user->delete();
            return Redirect::to("/admin/".$menu)->with('success',' Proses Delete berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
            ]);
        }
        
        
       
    }
    //pegawai all PD
    public function pegawai(Request $request)
    {
        if(Auth::guard('admin')->check()){  
                // $pel2 = Usulan::Where('status_verifikasi',1)->get();
                /*
                 $response1 = Http::get('https://webapi.bps.go.id/v1/api/list/model/subject/lang/ind/domain/1906/subcat/1/key/b2da99d6cd045241b5a07b3b3009549c/');
                 $jsonDataSosial = $response1->json();
                 $catsosial = $jsonDataSosial["data"][1];
                */
              $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
              $response = Http::get('http://satamasn.babelprov.go.id/public/api/pegawai');
              $jsonData = $response->json();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.allpegawai' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'datapeg' =>$jsonData,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    
    //Jabatan Pegawai
    public function jabpeg(Request $request)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id_instansi_jenis',1)->get();

            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/jabpeg/listjabpeg' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function detailjbutama($id)
    {
        if(Auth::guard('admin')->check()){  
            $skpd = Instansi::where('id',$id)->first();
            $jab = Jabatan::Where(
                [
                    ['id_instansi','=',$id],
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                     
                  ]
            )->orderBy('id')->get();
           

            //$skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin/jabpeg/detailjb_utama' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                    'jabs'  =>$jab,
                    
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    //addjabatanpegawai
    public function addjabpeg($id, $menu=null)
    {
        if(Auth::guard('admin')->check()){  
          $inst = Instansi::Where('id',$id)->first();
          $jab = Jabatan::Where('id',$id)->first();
           //pegawai
           $response = Http::get('http://satamasn.babelprov.go.id/public/api/pegawai');
           $jsonData = $response->json();

          //cek jenisjabatan e
            if($inst->id_instansi_jenis==1){
            //utama
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                    ['id_jenis_jabatan','=',1],
                    ['id_induk','=',118]
                ])->orderBy('id')->limit(1)->get();

            }elseif($inst->id_instansi_jenis==2){
              //uptd
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                ])->orderBy('id')->limit(1)->get();

            }elseif($inst->id_instansi_jenis==3){
              //sekolah
              $alljab = Jabatan::Where(
                [
                  ['id_instansi','=',$id],
                  ['id_jenis_jabatan','=',2]

                ])->orderBy('id_induk')->limit(1)->get();
            }else{
              //cabdin
              $alljab = Jabatan::Where(
                [
                    ['id_instansi','=',$id], 
                ])->orderBy('id')->get();

            }

            return view('admin/jabpeg/addjabpeg',[
            'layout' => $this->layout,
            'pd'     => $inst,
            'idpd'   => $id,
            'jb'     =>$jab,
            'jabs'  =>$alljab,
            'menu'  =>$menu,
            'datapeg' =>$jsonData,
             
             
            ]);
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }        
       // return view('register');
    }
    public function postAddjabpeg(Request $request)
    {  
      $idpd=$request->input('idpd');
      $menuna=$request->input('menuna');
      $idjab=$request->input('idjabatan');
      $nippeg=$request->input('nip');

      //pegawai
      $cekpeg = Http::get('https://satamasn.babelprov.go.id/simadig/public/api/pegawai/view/'.$nippeg);
      $detpeg = $cekpeg->json();
      $namapeg=$detpeg["nama"];

      //jabatan
      $jab = Jabatan::Where('id',$idjab)->first();
       
      $namajab=$jab->nama;
      $jenjab=$jab->id_jenis_jabatan;
      $indukinst=$jab->id_induk;


        Pegawaijabatan::create([
          'id_instansi'               => $request['idpd'],
          'id_induk'                  => $indukinst,
          'id_jenis_jabatan'          => $jenjab,
          
          'id_jabatan'                => $request['idjabatan'],
          'nama_jabatan'              => $namajab,
          'nip'                       => $request['nip'],
          'nama_pegawai'              => $namapeg,
          
          
          ]);
       
        return Redirect::to("/admin/".$menuna."/".$idpd)->with('success','Selamat, Pegawai Jabatan berhasil ditambah');
    }

    //utama
    public function iutama(Request $request)
    {
        if(Auth::guard('admin')->check()){  
                // $pel2 = Usulan::Where('status_verifikasi',1)->get();
                $skpd = Instansi::Where('id_instansi_jenis',1)->orderBy('id')->get();
            
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.iutama' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function editskpd($id)
    {
        //$us = Admin::where('id', $id)->first();
        $skpd = Skpd::Where('id',$id)->first();
       
          return view('admin/editskpd',[
            'layout' => $this->layout,
            'pd' =>$skpd    
             
        ]);

       // return view('register');
    }
    public function postEditskpd(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
                $id=$request->input('idna');
                Skpd::where('id', $id)
                ->update([
                     
                    'namaskpd' => $request['namaskpd'],
                
            ]);
        
                return Redirect::to("/admin/skpd")->with('success',' Edit SKPD berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    public function subskpd(Request $request)
    {
        if(Auth::guard('admin')->check()){  
                // $pel2 = Usulan::Where('status_verifikasi',1)->get();
                //$subskpd = Subskpd::all()->sortBy('kdsubskpd');
            $skpd = Skpd::Where('parent_skpd',1)->orderBy('kdskpd')->get();
            //return view('/pelamar/datatable', compact('pelamars'));
                return view('admin.subskpd' , [
                    'layout' => $this->layout,
                    'skpd' =>$skpd,
                     
            ]);
        }else{
                return view('admin.login',[
                    'layout' => $this->layout 
                  ]);
                }
    }
    public function editsubskpd($id)
    {
        //$us = Admin::where('id', $id)->first();
        $subskpd = Subskpd::Where('id',$id)->first();
        $kdpd = $subskpd->kdskpd;
        $skpd = Skpd::Where('kdskpd',$kdpd)->first();

          return view('admin/editsubskpd',[
            'layout' => $this->layout,
            'pd' =>$skpd,
            'sub'   =>$subskpd    
             
        ]);

       // return view('register');
    }
    public function postEditsubskpd(Request $request)
    {  
        if(Auth::guard('admin')->check()){      
                 
                $id=$request->input('idna');
                Subskpd::where('id', $id)
                ->update([
                    'kdcab' => $request['kdcab'],
                    'namasubskpd' => $request['namasubskpd'],
                
            ]);
        
                return Redirect::to("/admin/skpd")->with('success',' Edit Sub SKPD berhasil.');
        }else{
            return view('admin.login',[
                'layout' => $this->layout 
              ]);
        }
    }
    

    
    

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
