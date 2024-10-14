<ul>
    <li><a class="nav-link scrollto " href="{{url('/')}}">
      {{-- <i class="bi bi-house-fill" style="font-size: 20px; padding:2px;"></i>  --}}
      Home</a>
    </li>
    <li><a class="nav-link scrollto" href="{{url('/')}}">Tentang Kami</a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(2)=='anak'){echo 'active';} ?>" href="{{url('/datadasar/anak')}}">Data Anak</a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(2)=='gender'){echo 'active';} ?>" href="{{url('/datadasar/gender')}}">Data Gender</a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(1)=='indikator'){echo 'active';} ?>" href="{{url('/indikator')}}">Indikator Kinerja  </a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(1)=='publikasi'){echo 'active';} ?>" href="{{url('/publikasi')}}">Publikasi</a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(1)=='artikel'){echo 'active';} ?>" href="{{url('/artikel')}}">Artikel</a></li>
    <li><a class="nav-link scrollto <?php if(Request::segment(1)=='weblink'){echo 'active';} ?>" href="{{url('/weblink')}}">Informasi</a></li>
    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="#">Drop Down 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
          <ul>
            <li><a href="#">Deep Drop Down 1</a></li>
            <li><a href="#">Deep Drop Down 2</a></li>
            <li><a href="#">Deep Drop Down 3</a></li>
            <li><a href="#">Deep Drop Down 4</a></li>
            <li><a href="#">Deep Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#">Drop Down 2</a></li>
        <li><a href="#">Drop Down 3</a></li>
        <li><a href="#">Drop Down 4</a></li>
      </ul>
    </li> --}}
    
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>

 