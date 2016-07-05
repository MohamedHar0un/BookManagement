<?php include'dheader.php';?>
<?php include'dsidebar.php';?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
<?php 
include('search-questions.php');
          echo 'We found<strong> ['.$count.'] </strong>items:<br>';
          	echo "<div class='row'>".$output."</div>";
           ?>
           </div>
</div>
</div>
<?php include_once ('footer.php');?>
</body>
</html>