<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Get started</h5>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>About us</h5>
                <ul>
                    <li><a href="../about-us.html">About us</a></li>
                    <li><a href="../contact-us.php">Contact us</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="../contact-us.php">Get in touch</a></li>
                    <li><a href="../faqs.html">FAQs</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Legal</h5>
                <ul>
                    <li><a href="../TermsofUse.pdf" target="_blank">Terms of Use</a></li>
                    <li><a href="../Privacypolicy.pdf" target="_blank">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2019 Oxford Careers Hub</p>
    </div>
</footer>

<!-- The Modal -->
<div class="modal" id="upload_cv">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Upload CV</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="process_update_cv.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <label>Select File to upload</label>
                            <input type="file" name="userfile" class="btn btn-primary btn-block" required>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-block">Upload</button>
                        </div>
                </form>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancel</button>
                </div>
                </div>

            </div>

            <!-- Modal footer -->

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="upload_pic">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Upload Profile Picture</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="process_update_pic.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <label>Select File to upload</label>
                            <input type="file" name="userfile" class="btn btn-primary btn-block" required>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-block">Upload</button>
                        </div>
                </form>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancel</button>
                </div>
                </div>

            </div>

            <!-- Modal footer -->

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="update_password">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Password</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="change_password.php" onsubmit="check_password(event)" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <label>Old password</label>
                            <input type="password" name="password" class="form-control" required>
                            <br/>
                            <label>New password</label>
                            <input type="password" id="password" name="new_password" class="form-control" required>
                            <span id="password_error" class="text-danger"></span>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-block">Update</button>
                        </div>
                </form>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
 </div>





 <!-- The Modal -->
<div class="modal" id="confirm_mdl">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Are you sure ? </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Would you like to remove this item from the list ? 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="canc_btn" >No</button>
        <button type="button" class="btn btn-primary" id="conf_btn" >Yes</button>
      </div>

    </div>
  </div>
</div>
 <?php include '../flash.php';?>
 
	

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/Bootstrap-Tags-Input-1.js"></script>
    <script src="../assets/js/Bootstrap-Tags-Input.js"></script>
    <script>
        $(document).ready(function() {
            $('input').focus(function() {
                $(this).parents('.form-group').addClass('focused');
            });

            $('input').blur(function() {
                    var inputValue = $(this).val();
                    if (inputValue == "") {
                        $(this).removeClass('filled');
                        $(this).parents('.form-group').removeClass('focused');
                    } else {
                        $(this).addClass('filled');
                    }
                })
                // Form read only
            document.getElementByClass('form-input').readOnly = true;
        });
    </script>

    <script>
        function check_password(e) {

            if ($('#password').val().length < 6) {

                $('#password_error').text('Password has to be atleast 6 characters');
                e.preventDefault();
                return false;
            } else {
                return true;
            }

        }
    </script>
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	
	<script>
		$(document).ready( function () {
			$('#table_id').DataTable();
		} );
	</script>


    <script>

        function get_confirm(form_id,e){

             e.preventDefault();

             $('#conf_btn').attr('onclick','auto_submit('+form_id+',this)');
             $('#canc_btn').attr('onclick','cancel('+form_id+',this)');

            $('#confirm_mdl').modal('show');

        }

        function auto_submit(form_id,ele){

            $("#"+form_id+"").removeAttr("onsubmit");
            $("#"+form_id+"").submit();
            $(this).removeAttr("onclick");
            //$("#"+form_id+"").submit('onsubmit="get_confirm('+form+',event)"');
        }

        function cancel(form_id,ele){

            $("#"+form_id+"").attr('onsubmit',"get_confirm("+form_id+",event)");
            $('#confirm_mdl').modal('hide');
            $(this).removeAttr("onclick");
        }

    </script>
    </body>

    </html>