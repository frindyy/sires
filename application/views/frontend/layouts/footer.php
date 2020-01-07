<!-- Footer -->
      <footer class="border-top p-5">
        <div class="container">

          <div class="row justify-content-between">

            <div class="col-5">
              <a href="">
                <img src="<?php echo base_url(); ?>assets_user/img/Logo_umsida2.png" alt="" width="100px">
              </a>
            </div>
            <div class="col-5 text-right">
                <a href="">
                  <img src="<?php echo base_url(); ?>assets_user/img/sosial/1.png" alt="">
                </a>
                <a href="">
                    <img src="<?php echo base_url(); ?>assets_user/img/sosial/2.png" alt="">
                </a>
                <a href="">
                      <img src="<?php echo base_url(); ?>assets_user/img/sosial/3.png" alt="">
                </a>
            </div>

          </div>

          <div class="row mt-3 justify-content-between">
            <div class="col-5">
              <p>Copyright &copy; 2019. All Right Reserved by Pratama</p>
            </div>
            <div class="col-6">
                <nav class="nav justify-content-end text-uppercase">
                    <a class="nav-link active" href="#">Jobs</a>
                    <a class="nav-link" href="#">Developer</a>
                    <a class="nav-link" href="#">Terms</a>
                    <a class="nav-link pr-0" href="#">Privacy Policy</a>
                  </nav>
              </div>
          </div>

        </div>
      </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="<?php echo base_url(); ?>assets_user/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_user/js/bootstrap.js"></script>

    <!-- Font Awesome -->
    <script src="<?php echo base_url(); ?>assets_user/js/all.js"></script>

     <!--datatables -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
        
     <script>
      $(document).ready(function(){
        $('#datatable').DataTable();
      })
  </script>
     </body>
</html>