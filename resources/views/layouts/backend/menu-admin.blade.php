<ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-accordion="false" data-widget="treeview" role="menu">
    <li class="nav-item">
        <a class="nav-link" href="<?= url('/admin'); ?>">
            <i class="nav-icon fas fa-home"></i>  <p>Dashboard</p>
        </a>
    </li>
    <!--
    <li class="nav-item has-treeview <?php if(Request::segment(2)=='jabutama' or Request::segment(2)=='jabuptd' or Request::segment(2)=='jabcabdin' or Request::segment(2)=='jabsekolah' or Request::segment(4)=='jabutama' or Request::segment(4)=='jabuptd' or Request::segment(4)=='jabcabdin' or Request::segment(4)=='jabsekolah'){echo 'menu-open';} ?>">
        <a class="nav-link " href="#"><i class="nav-icon fa fa-tags"></i>  <p>Nomenklatur Jabatan <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview" style="<?php if(Request::segment(2)=='jabutama' or Request::segment(2)=='jabuptd' or Request::segment(2)=='jabcabdin' or Request::segment(2)=='jabsekolah' or Request::segment(4)=='jabutama' or Request::segment(4)=='jabuptd' or Request::segment(4)=='jabcabdin' or Request::segment(4)=='jabsekolah' or Request::segment(3)=='editjpeng' or Request::segment(3)=='editjpel' or Request::segment(3)=='editjfung'){echo 'display:block';}else{echo 'display:none';} ?>">
            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2)=='jabutama' or Request::segment(4)=='jabutama'){echo 'active';} ?>" href="<?= url('/admin/jabutama'); ?>">
                    <i class="nav-icon fa fa-angle-double-right"></i>  <p> Utama</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2)=='jabuptd' or Request::segment(4)=='jabuptd' or Request::segment(2)=='detailuptd'){echo 'active';} ?>" href="<?= url('/admin/jabuptd'); ?>">
                    <i class="nav-icon fa fa-angle-double-right"></i>  <p> UPTD/UPTB </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2)=='jabcabdin' or Request::segment(4)=='jabcabdin'){echo 'active';} ?>" href="<?= url('/admin/jabcabdin'); ?>">
                    <i class="nav-icon fa fa-angle-double-right"></i>  <p> Cabdin </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(Request::segment(2)=='jabsekolah' or Request::segment(4)=='jabsekolah' or Request::segment(2)=='detailsek'){echo 'active';} ?>" href="<?= url('/admin/jabsekolah'); ?>">
                    <i class="nav-icon fa fa-angle-double-right"></i>  <p> Sekolah </p>
                </a>
            </li>
        
        </ul>
    </li>
    !-->
    <li class="nav-header">Formasi Jabatan</li>
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='jabatan'){echo 'active';} ?>" href="<?= url('/admin/jabatan/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p>Jabatan</p>
        </a>
    </li> 
    {{-- <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='uraianjabatan'){echo 'active';} ?>" href="<?= url('/admin/uraianjabatan/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p> Uraian Jabatan</p>
        </a>
    </li> --}}
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='uraianjabatan'){echo 'active';} ?>" href="<?= url('/admin/uraianjabatan/'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p> Uraian Jabatan</p>
        </a>
    </li>
    <li class="nav-header">Analisa Kebutuhan Jabatan</li>
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='analisajabatan'){echo 'active';} ?>" href="<?= url('/admin/analisajabatan/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p>Analisa Beban Kerja</p>
        </a>
    </li> 
    {{-- <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='uraianjabatan'){echo 'active';} ?>" href="<?= url('/admin/uraianjabatan/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p> Kebutuhan Pegawai</p>
        </a>
    </li> --}}
{{--     
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='formasijab'){echo 'active';} ?>" href="<?= url('/admin/formasijab/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p> Formasi Jabatan</p>
        </a>
    </li> --}}
    <li class="nav-header">Usul Formasi Jabatan</li>
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='jabatan'){echo 'active';} ?>" href="<?= url('/admin/usulformasi/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p>Usul Kebutuhan Formasi ASN</p>
        </a>
    </li> 
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='jabatan'){echo 'active';} ?>" href="<?= url('/admin/verusulformasi/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p>Penetapan Formasi ASN</p>
        </a>
    </li> 
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='jabatan'){echo 'active';} ?>" href="<?= url('/admin/distribusiformasi/1'); ?>">
            <i class="nav-icon fas fa-table"></i>  <p>Redistribusi Pegawai ASN</p>
        </a>
    </li> 
    <li class="nav-header">UTILITAS</li>
     
    <li class="nav-item has-treeview <?php if(Request::segment(2)=='useradmin' or Request::segment(2)=='userpd' or Request::segment(2)=='adduseradmin' or Request::segment(2)=='edituseradmin' or Request::segment(2)=='adduserpd' or Request::segment(2)=='edituserpd' ){echo 'menu-open';} ?>"><a class="nav-link " href="#"><i class="nav-icon fa fa-user"></i>  <p>User <i class="right fa fa-angle-left"></i> </p></a>
        <ul class="nav nav-treeview">
            <!--<li class="nav-item"><a class="nav-link " href="<?= url('/user/index?id_user_role=1'); ?>"><i class="nav-icon fa fa-circle-o"></i>  <p>Admin</p></a></li>
            !-->
            <li class="nav-item"><a class="nav-link <?php if(Request::segment(2)=='useradmin' or Request::segment(2)=='adduseradmin' or Request::segment(2)=='edituseradmin'){echo 'active';} ?>" href="<?= url('/admin/useradmin'); ?>"><i class="far fa-circle nav-icon"></i>  <p>Administrator</p></a></li>
            <li class="nav-item"><a class="nav-link <?php if(Request::segment(2)=='userpd' or Request::segment(2)=='adduserpd' or Request::segment(2)=='edituserpd'){echo 'active';} ?>" href="<?= url('/admin/userpd'); ?>"><i class="far fa-circle nav-icon"></i>  <p>Operator</p></a></li>

        </ul>
    </li>
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='instansi' or Request::segment(2)=='addinstansi' or  Request::segment(2)=='editinstansi'  ){echo 'active';} ?>" href="<?= url('/admin/instansi'); ?>">
            <i class="nav-icon fas fa-list-ol"></i>  <p>Instansi</p>
        </a>
    </li>
    
    <li class="nav-item ">
        <a class="nav-link <?php if(Request::segment(2)=='pegawai'  or Request::segment(2)=='addpegawai' or Request::segment(2)=='editpegawai' ){echo 'active';} ?>" href="<?= url('/admin/pegawai'); ?>">
            <i class="nav-icon fas fa-users"></i>  <p> Pegawai </p>
        </a>
    </li>
   
    <li class="nav-header">KELUAR ?</li>
    <li class="nav-item">
        <a class="nav-link" href="<?= url('/admin/logout'); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>  <p>Logout</p>
        </a>
        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>
</ul>
