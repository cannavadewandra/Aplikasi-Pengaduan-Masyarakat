  <!-- Footer -->
  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy ; UKK Cannava Dewa 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('C_dewaAuth/logout ')?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- js subkategori -->
    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script>
     $(document).ready(function(){
 
 $('#kategori').change(function(){ 
     var id=$(this).val();
     $.ajax({
         url : "<?php echo base_url()?>C_dewaUser/get_sub_kategori",
         method : "POST",
         data : {id : id},
         async : true,
         dataType : 'json',
         success: function(data){
              
             var html = '';
             var i;
             for(i=0; i<data.length; i++){
              
                 html += '<option value='+data[i].id_subkategori+'>'+data[i].sub_kategori+'</option>';
             }
             $('#subkategori').html(html);
            // console.dir(data);
            // console.log();    

         }
     });
     return false;
    
 }); 
  
});
</script>


    <!-- Bootstrap core JavaScript-->
    <script src=<?= base_url('assets/vendor/jquery/jquery.min.js')?>></script>
    <script src=<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?= base_url('assets/js/sb-admin-2.min.js')?>></script>

    <!-- Page level plugins -->
    <script src=<?= base_url('assets/vendor/chart.js/Chart.min.js')?>></script>

    <!-- Page level custom scripts -->
    <script src=<?= base_url('assets/js/demo/chart-area-demo.js')?>></script>
    <script src=<?= base_url('assets/js/demo/chart-pie-demo.js')?>></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/') ?>js/demo/datatables-demo.js"></script>
    
    <script src="<?=base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/')?>js/demo/datatables-demo.js"></script>

    


</body>

</html>