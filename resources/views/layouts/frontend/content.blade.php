<div class="content-wrapper">
    <section class="content-header">
        <?php if(@$this->title!=null) { ?>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><?= @$this->title; ?></h1>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>

    <section class="content" id="content">

   
        @yield('content')
       
    </section>

</div>
