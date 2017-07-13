<footer class="main-footer">
    <?php if (ENVIRONMENT == 'development'): ?>
        <div class="pull-right hidden-xs">
            CI Bootstrap Version: <strong><?php echo CI_BOOTSTRAP_VERSION; ?></strong>, 
            CI Version: <strong><?php echo CI_VERSION; ?></strong>, 
            Elapsed Time: <strong>{elapsed_time}</strong> seconds, 
            Memory Usage: <strong>{memory_usage}</strong>
        </div>
    <?php endif; ?>
    <strong>&copy; <?php echo date('Y'); ?></strong> All rights reserved.
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({ dateFormat: 'yy/mm/dd' });
    
    var dateFormat = "yy/mm/dd",
            from = $(".dateStart").datepicker({changeMonth: true}).on("change", function () {
        to.datepicker("option", "minDate", getDate(this));
    }),
            to = $(".dateEnd").datepicker({changeMonth: true}).on("change", function () {
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

  } );
  </script>
<!--  <p>Format options:<br>
  <select id="format">
    <option value="yyyy/mm/dd">Default - mm/dd/yy</option>
    <option selected value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
    <option value="d M, y">Short - d M, y</option>
    <option value="d MM, y">Medium - d MM, y</option>
    <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
    <option value="&apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy">With text - 'day' d 'of' MM 'in the year' yy</option>
  </select>
</p>-->
<!--    <script>

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
</script>-->




</footer>


