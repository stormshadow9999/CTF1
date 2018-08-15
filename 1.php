
<?php include('inc/header.php')?>
<body id="home">
<?php include('inc/navbar.php')?>
<?php
if($_GET['value']!=="123"){
    $prev_value = $_GET['value'];
    header("Location:index.php");
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $val = $_POST['token'];
    if($val=="456") {//base64_encode() 
        header("Location:2.php?value=".$val);
    }else{
        header("Location:1.php?value=".$prev_value);
    }
}
?>
<section id="showcase" class="py-3">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row justify-content-center ">
                <?php include('inc/testermonial.php')?>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-left:510px" data-target="#exampleModal">
                        Click here!
                    </button>
                </div>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="1.php" method="post">
                                    <input type="text" class="form-control" name="token" placeholder="Enter token">
                                    <br/>
                                    <br/>
                                    <button type="submit" name="submit" class="btn btn-primary">Enter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>
