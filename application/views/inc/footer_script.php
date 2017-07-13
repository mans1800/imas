
<div class="banner">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h2>Follow Us on:</h2>
            </div>
            <div class="col-lg-6">
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/Phi-Phi-Sand-Sea-View-Resort-998939380188308/" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a href="<?PHP echo base_url(); ?>">Home</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>home/room">Room</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>home/activities">Activities</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>home/gallery">Gallery</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>home/contact">Contact Us</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; PhiPhi Sand Seaview Resort. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="<?PHP echo base_url(); ?>assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?PHP echo base_url(); ?>assets/js/lib/lightbox-master/ekko-lightbox.min.js"></script>

<script src="<?PHP echo base_url(); ?>assets/js/main.js"></script>

<!--<script src='<?PHP echo base_url(); ?>/assets/js/bootstrap-datepicker.js'></script>-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>

    $(document).ready(function () {

        $(".datepicker").datepicker({
            dateFormat: "yy/mm/dd"
        });

//        $('.datepicker').datepicker({
//            format: "yyyy/mm/dd",
//            onSelect: function () {
//                $(this).hide();
//            }
//        });
    });
</script>  <script>
    $(function () {
        var dateFormat = "yy/mm/dd",
                from = $("#dateStart").datepicker({changeMonth: true}).on("change", function () {
            to.datepicker("option", "minDate", getDate(this));
        }),
                to = $("#dateEnd").datepicker({changeMonth: true}).on("change", function () {
            from.datepicker("option", "maxDate", getDate(this));
        });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>
