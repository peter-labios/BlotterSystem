<br><br><br>
    </div>
</div>
 <!-- /.content-wrapper-->
 <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-charts.min.js"></script>
    <!-- ownmade js -->
    <script src="<?php echo base_url('assets/admin/js/sb-admin-ownmade.js'); ?>"></script>
    
    <script src="<?php echo base_url('assets/admin/combobox/js/bootstrap-combobox.js'); ?>"></script>
    <script src="<?php echo base_url('assets/CKEditor/ckeditor.js');?>"></script>

    <!--for webcam-->
    <script type=\"text/javascript\" src="js/webcam/excanvas.js"></script>
    <script type=\"text/javascript\" src="js/webcam/jquery.webcam.js"></script>

    <script>
        $("#preview .close").click(function(){
        $("#buttons .save_profile_pic").attr('disabled',true);
        $('.timer').hide();
        $('#preview').hide();
        $('#previewImg').attr('src',baseurl+'img/preload.gif');
        $('.click').show();
    });
    
    var profileImage = null;
    $("#buttons .save_profile_pic").click(function(){
    
        $.post(baseurl+"save_image_from_webcam.php",
        { image: profileImage},
        function(data){
            window.location = 'save_image_from_webcam.php';
        });
    });
    
    function capturePic(){
        $('.click').hide();
        $('.timer').show();
        webcam.capture(3);
    }
    
    function webcam_init() {
        var pos = 0, ctx = null, saveCB, image = [];
        var canvas = document.createElement("canvas");
        canvas.setAttribute('width', 320);
        canvas.setAttribute('height', 240);
    
            if (canvas.toDataURL) {
                ctx = canvas.getContext("2d");
    
                image = ctx.getImageData(0, 0, 320, 240);
    
                saveCB = function(data) {
    
                    var col = data.split(";");
                    var img = image;
    
                    for(var i = 0; i < 320; i++) { var tmp = parseInt(col[i]); img.data[pos + 0] = (tmp >> 16) & 0xff;
                        img.data[pos + 1] = (tmp >> 8) & 0xff;
                        img.data[pos + 2] = tmp & 0xff;
                        img.data[pos + 3] = 0xff;
                        pos+= 4;
                    }
    
                    if (pos >= 4 * 320 * 240) {
                        ctx.putImageData(img, 0, 0);
                        $('#preview').show();
                        $.post(baseurl+"save_image_from_webcam.php", {type: "data", image: canvas.toDataURL("image/png")},function(data){
                            $("#buttons .save_profile_pic").attr('disabled',false);
                            profileImage = data;
                            $('#previewImg').attr('src',''+baseurl+data);
                        });
                        pos = 0;
                    }
                };
            }else{
    
                saveCB = function(data) {
                    image.push(data);
    
                    pos+= 4 * 320;
    
                    if (pos >= 4 * 320 * 240) {
                            $('#preview').show();
                            $.post(baseurl+"save_image_from_webcam.php", {type: "pixel", image: image.join('|')},function(data){
                                $("#buttons .save_profile_pic").attr('disabled',false);
                                profileImage = data;
                                $('#previewImg').attr('src',''+baseurl+data);
                            });
                            pos = 0;
                            image = [];
                    }
                }
            }
    
            $("#webcam").webcam({
                    width: 320,
                    height: 240,
                    mode: "callback",
                    swffile: baseurl+"js/webcam/jscam_canvas_only.swf",
    
                    onSave: saveCB,
    
                    onCapture: function () {
    
                        jQuery("#flash").css("display", "block");
                        jQuery("#flash").fadeOut("fast", function () {
                            jQuery("#flash").css("opacity", 1);
                        });
    
                        webcam.save();
                    },
    
                    onTick: function(remain) {
                        $('.timer').show();
    
                        if (0 == remain) {
                            $('.timer').hide();
                        } else {
                            jQuery(".timer").text(remain);
                        }
                    },
    
                    debug: function (type, string) {
                            if(type == 'error'){
                                $("#nocamera").show();
                            }else{
                                $("#nocamera").hide();
                            }
    
                    },
    
                    onLoad: function() {
                        //var cams = webcam.getCameraList();
                    }
            });
    
    }
    
    (function ($) {
        webcam_init();
    })(jQuery);
    </script>
  </div>
</body>

</html>