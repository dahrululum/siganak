<!-- ======= Footer ======= -->
<footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-start text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>DP3ACSKB Provinsi Kepulauan Bangka Belitung</strong>. 
            </p>
             
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Beranda</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">Tentang SI-GANAK</a>
              </li>
 
              
              <li class="list-inline-item">
                <a href="#contact">Kontak Kami</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"></script>
  <script>
    @php 
    
    @endphp
    const ctx1 = document.getElementById('chart1');
      var barChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ["<?php echo $wil1; ?> ", "<?php echo $wil2; ?> ","<?php echo $wil3; ?> ","<?php echo $wil4; ?> ","<?php echo $wil5; ?> ","<?php echo $wil6; ?> ","<?php echo $wil7; ?> ","<?php echo $wil8; ?> "  ],
        datasets: [
            {
                label: "Laki-laki",
                backgroundColor: "#890bb2",
                data: [3,7]
            },
            {
                label: "Perempuan",
                backgroundColor: "#0bb21f",
                data: [4,3]
            },
            
        ]
      }
      });
  
  </script>