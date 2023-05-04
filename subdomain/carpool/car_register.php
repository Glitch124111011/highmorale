<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Car Pooling</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='car_regis.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</head>
<body oncontextmenu='return false' class='snippet-body'>
    <?php
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
        $id2 = $_SESSION['id'];
    ?>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
        <img style="height: 15%;width: 60%;"src="car.png" alt="" />
            <h3>Welcome</h3>
            <p>Sharing rides, saving the planet - one trip at a time.</p>
            <?php echo "<a href='landing_page.php?id=$id2'><input type='button' value='Go Back' /></a>" ?><br />
        </div>
        <div class="col-md-9 register-right">  
            <div class="tab-content" id="myTabContent">
                
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Car Registration</h3>
                    <form method="post" action="car_regis.php">
                    <center>
                    <div class="row register-form">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="text" name="car_type" class="form-control" placeholder="Car Type *" value="" required/>
                                </div>
                                <input type="text" class="form-control" name="car_model" placeholder="Car Model *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="color" placeholder="Color *" value="" required/>
                            </div>
                            <input type="hidden" class="" name="id" value="<?php echo $id2?>" />
                            <input type="submit" class="btnlogin" value="Submit" />
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" oninput="this.value = this.value.toUpperCase()" name="plate" placeholder="Plate Number *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" oninput="this.value = this.value.toUpperCase()" name="vin" placeholder="VIN Number *" value="" required/>
                            </div>
                        </div>
                    </div>
                </center>
            
                </div>
                </form>
</div>
</div>
                            <script type='text/javascript'></script>
                            </body>
                        </html>