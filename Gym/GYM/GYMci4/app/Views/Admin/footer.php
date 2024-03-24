 <!--**********************************
            Footer start
        ***********************************-->
        <footer class="footer text-center" style="color:black;">
       All Rights Reserved by Gurudatta Fitness Center.Designed and Developed by WOLFOX.</footer>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
 
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('vendor/global/global.min.js')?>"></script>
	<script src="<?php echo base_url('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
    <script src="<?php echo base_url('js/custom.min.js')?>"></script>
	<script src="<?php echo base_url('js/deznav-init.js')?>"></script>
	
    


    <script src="<?php echo base_url('vendor/jquery-steps/build/jquery.steps.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/jquery-validation/jquery.validate.min.js')?>"></script>
    <!-- Form validate init -->
    <script src="<?php echo base_url('js/plugins-init/jquery.validate-init.js')?>"></script>


	<script src="<?php echo base_url('vendor/datatables/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('js/plugins-init/datatables.init.js')?>"></script>

   <!-- Form Steps -->
	<script src="<?php echo base_url('vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')?>"></script>
	
	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>

 
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
     <!-- for copy excel print  -->
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
	
 <script>
        //=============================================//
        //    File export                              //
        //=============================================//
		// Setup - add a text input to each footer cell
  $(document).ready(function() {
  
	  
    // Setup - add a text input to each footer cell
    $('#file_export thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<label>'+title+'</label><br><input style="width:100px;" type="text" placeholder="Search Here" />' );
    } );
    // DataTable
    var table = $('#file_export').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
                $( 'input', this.header() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
			
        },
		dom: 'Bfrtip',
        buttons:
		  [
		  {
                extend: 'excelHtml5',
                title:'Daily_Transaction_Report',
                filename:'Daily_Transaction_Report',
                text: 'Click Here to Download Excel Report',
                orientation: 'landscape',
                pageSize: 'A4',
                exportOptions: {
                    modifier: {
                        selected: null
                    },
                    columns: [   2, 3,4,5]
                }
            },
            {
                extend: 'print',
                title:'',
                filename:'Daily_Transaction_Report',
                text: 'Click here to Download/ Print Report',
                orientation: 'landscape',
                pageSize: 'A4',
                customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '16pt' )
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                },
                exportOptions: {
                    modifier: {
                        selected: null
                    },
                    columns: [   2, 3,4,5]
                }
            }
            ]
    });
	
	$('.buttons-copy, .buttons-print, .buttons-excel').addClass('printbutton');
} )
	</script>
					