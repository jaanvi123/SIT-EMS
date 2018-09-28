<?php
session_start();
require('connect.php');
require('drawer.php');
if(@$_SESSION["user_name"])
 {
  $user_name=@$_SESSION["user_name"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>

  <body>
         <!-- js placed at the end of the document so the pages load faster -->
    <script src="Theme/assets/js/jquery.js"></script>
    <script src="Theme/assets/js/jquery-1.8.3.min.js"></script>
    <script src="Theme/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="Theme/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="Theme/assets/js/jquery.scrollTo.min.js"></script>
    <script src="Theme/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="Theme/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="Theme/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="Theme/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="Theme/assets/js/gritter-conf.js"></script>


	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
<?php
}
else
{
  echo "you must be logged in";
}
?>