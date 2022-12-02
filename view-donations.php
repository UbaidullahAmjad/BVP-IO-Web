<!DOCTYPE html>
<html lang="zxx">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title -->
    <title>BVP-IO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo1.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <style>
        @media(max-width: 420px){
            tr th{
                font-size: 10px !important;
            }
            tr td{
                font-size: 10px !important;
            }
            
            .header-area{
                width: 100% !important;
            }
        }
    </style>

</head>
<?php
$mysqli = new mysqli("localhost","u158205072_bvp","Bvp12345","u158205072_bvp");
if ($mysqli->connect_error) {
  die("Connection failed: " . $msqli->connect_error);
}
  $sql = "SELECT * FROM donations";
$result = $mysqli->query($sql);



  ?>
<body class="darker-blue">
    <!-- Preloader -->
   

    <!-- ##### Header Area Start ##### -->
   
    <!-- ##### Header Area End ##### -->

    <!-- ##### Welcome Area Start ##### -->

    <!-- ##### Welcome Area End ##### -->

    

    <section class="mb-5 container mt-5">
        <h2 class="text-center mb-5" style="background:#262231; color:white;padding:12px">View Donations</h2>
        <table class="table ">
            <thead>
              <tr>
                <th >Name of Charity</th>
                <th >Country of Charity</th>
                <th >Amount Donated (BVP)</th>
                <th >Date of Donation</th>
                <th >Links to Charity Organisation</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
              ?>
              <tr>

                <td><?php echo $row["charity_name"] ?></td>
                <td><?php echo $row["charity_country"] ?></td>
                <td><?php echo $row["amount"] ?></td>
                <td><?php echo $row["date"] ?></td>
                <td><a href="<?php echo $row['links'] ?>"><?php echo $row["links"] ?></a></td>
              </tr>
            <?php } } ?>


            </tbody>
          </table>
          
          <a href="index.html" class="btn btn-success float-right">Back</a>
    </section>



    <!-- ##### Footer Area Start ##### -->
   
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>

    <script src="js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="js/script.js"></script>

    <script>
        $(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $(".header-area").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $(".header-area").removeClass("active");
    }
});


var $firstButton = $(".first"),
  $secondButton = $(".second"),
  $input = $("input"),
  $name = $(".name"),
  $more = $(".more"),
  $yourname = $(".yourname"),
  $reset = $(".reset"),
  $ctr = $(".container");

$firstButton.on("click", function(e){
  $(this).text("Next...").delay(900).queue(function(){
    $ctr.addClass("center slider-two-active").removeClass("full slider-one-active");
  });
  e.preventDefault();
});

$secondButton.on("click", function(e){
  $(this).text("Next...").delay(900).queue(function(){
    $ctr.addClass("full slider-three-active").removeClass("center slider-two-active slider-one-active");
    // $name = $name.val();
    // if($name == "") {
    //   $yourname.html("Anonymous!");
    // }
    // else { $yourname.html($name+"!"); }
  });
  e.preventDefault();
});

$reset.on("click", function(e){
  $(this).text("Next...").delay(900).queue(function(){
    $ctr.addClass("slider-one-active").removeClass("full slider-two-active");
  });
  e.preventDefault();
});
// copy
// balapaCop("Step by Step Form", "#999");
    </script>

</body>


<!-- Mirrored from somia.netlify.app/index-demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 May 2021 02:40:28 GMT -->
</html>