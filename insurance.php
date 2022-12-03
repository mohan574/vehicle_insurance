<?php include('sidemenu.php'); 

?>




<style>
    .page-header {
        margin: 0 0 0.5rem 0 !important;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .img-preview2 {
        background-image: url(images/preview.jpg);
        background-size: 100%;
        background-repeat: no-repeat;
        height: 492px;
        width: 260px !important;
        background-size: auto;
        border-top-right-radius: 45px;
        border-top-left-radius: 43px;
        border-bottom-left-radius: 60px 59px;
        border-bottom-right-radius: 63px;
    }

    
    .larger-banner {
        width: 85%;
        margin: 0 auto;
        padding-top: 55px;
        float: left;
        margin-left: 13px;
    }

    #cardtitletarget {
        width: 88%;
        margin-left: 7%;
        margin-top: 30px;
        font-size: 14px;
        font-weight: bold;
        text-transform: capitalize;
        color: #000;
        margin-bottom: 0;
        word-break: break-all;
    }

    #carddesctarget {
        width: 77%;
        margin-left: 8%;
        font-size: 11px;
        text-transform: capitalize;
        color: #555;
        word-break: break-all;
        line-height: 17px;
        font-weight: bold;
        margin-top: 6px;
    }

    #imgrichcardblah {
        display: none;
    }

    .card .card-body {
        padding: 2rem;
    }

    .datetime {
        display: none;
    }


    #richcard {

        width: 100%;

    }

   

    /* @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap'); */

:root {
  --primary-color: #f5826e;  
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  letter-spacing: 0.5px;
}

/* body {
  background-color: var(--primary-color);
} */

.invoice-card {
    display: flex;
    flex-direction: column;
    position: absolute;
    padding: 10px 2em;
    top: 35%;
    left: 78%;
    transform: translate(-50%, -50%);
    min-height: 25em;
    width: 48em;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 10px 30px 5px rgb(0 0 0 / 15%);
}

.invoice-card > div {
  margin: 5px 0;
}

.invoice-title {
  flex: 3;
}

.invoice-title #date {
  display: block;
  margin: 8px 0;
  font-size: 12px;
}

.invoice-title #main-title {
  display: flex;
  justify-content: space-between;
  margin-top: 2em;
}

.invoice-title #main-title h4 {
  letter-spacing: 2.5px;
}

.invoice-title span {
  color: rgba(0, 0, 0, 0.4);
}

.invoice-details {
  flex: 1;
  border-top: 0.5px dashed grey;
  border-bottom: 0.5px dashed grey;
  display: flex;
  align-items: center;
}

.invoice-table {
  width: 100%;
  border-collapse: collapse;
}

.invoice-table thead tr td {
  font-size: 12px;
  letter-spacing: 1px;
  color: grey;
  padding: 8px 0;
}

.invoice-table thead tr td:nth-last-child(1),
.row-data td:nth-last-child(1),
.calc-row td:nth-last-child(1)
{
  text-align: right;
}

.invoice-table tbody tr td {
    padding: 8px 0;
    letter-spacing: 0;
}

.invoice-table .row-data #unit {
  text-align: center;
}

.invoice-table .row-data span {
  font-size: 13px;
  color: rgba(0, 0, 0, 0.6);
}

.invoice-footer {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.invoice-footer #later {
  margin-right: 5px;
}

/* .btn {
  border: none;
  padding: 5px 0px;
  background: none;
  cursor: pointer;
  letter-spacing: 1px;
  outline: none;
} */

.btn.btn-secondary {
  color: rgba(0, 0, 0, 0.3);
}

.btn.btn-primary {
  color: var(--primary-color);
  background-color: #6dcd9c;
  border: none;
}


.btn.btn-primary:hover {
  /* color: ; */
  background-color: #619abf;
  border: none;
}

.btn#later {
  margin-right: 2em;
}


</style>

<head>

    <script src="js/vendor.bundle.base.js"></script>
    <script type="text/javascript" src="datetime.js"></script>
    <link type="text/css" href="datetime.css" rel="stylesheet" />
</head>
    

<?php

session_start();
$category = $_GET['category'];
?>



<?php
if (isset($_POST['insurance_submit'])) {


    $brand_fetch = $_POST['brand'];
    $model_fetch = $_POST['model'];
    $postData  = array(
        "brand" => $brand_fetch,
        "model" => $model_fetch,
    );
   
    
    
    $url = "http://127.0.0.1:5000/insurance";
  $headers = "Content-Type: multipart/form-data";
  $ch = curl_init();
  curl_setopt( $ch,CURLOPT_URL, $url);
  curl_setopt( $ch,CURLOPT_POST, true);
  curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
  curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt( $ch,CURLOPT_POSTFIELDS,$postData);
  $result = curl_exec($ch );
  
  error_log($result);
  $rs = json_decode($result,true);
  
  $status = $rs['status'];

  $car_price = $rs['car_price'];
  $year_premium = $rs['Yearly_premium'];
  $monthly_premium = $rs['monthly_premium'];
  $tax = $rs['tax'];

    if ($status == 200) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
            <strong>Success !! </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>


    <?php
    } else {  ?>


        <div class="alert alert-danger alert-dismissible fade show" role="alert" data-tor="show:[rotateX.from(90deg) @--tor-translateZ(-5rem; 0rem) pull.down(full)] slow">
            <strong>Failed !! </strong> Please Try again..
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

<?php }


    curl_close($curl);
}
?>

<div class="main-panel">
    <div class="content-wrapper" style=" margin-left:250px;">
        <div class="page-header">
            <h4 class="page-title">SUV</h4>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form action="#" method="post" autocomplete="off" enctype="multipart/form-data" class="forms-sample">
                            <div class="form-group">
                                <label>Vehicle Number</label>
                                <input type="text" name="nickname" class="form-control" id="nickname" minlength="4" maxlength="45" size="45" required placeholder="campagin nickname">
                            </div>

                            <div class="form-group">
                                <label>Car Brand</label>
                                <select class="form-control" id ="brand"name="brand" required>


                                    <option>--SELECT Brand--</option>

                                    <?php

                                    include('config.php');
                                    


                                        $query = "select distinct(brand) as brand from TBL_CAR_DETAILS where category='$category'";
                                        $run_query = mysqli_query($link, $query);
                                        //Count total number of rows
                                        $count = mysqli_num_rows($run_query);

                                        if ($count > 0) {
                                            while ($row = mysqli_fetch_array($run_query)) {
                                                $brand = $row['brand'];
                                                echo "<option  value='$brand'>$brand</option>";
                                            }
                                        } else {
                                            echo '<option value="">BRAND NOT AVALIBLE</option>';
                                        }
                                  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Car Model</label>

                                <select name="model" id="model" class="form-control">
                                    <option value="SELECT">--SELECT Model--</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-gradient-primary mr-2" name="insurance_submit" style="float: left;width: 45%;padding: 15px 0;background-color: #619abf;">Get Price</button>
                        </form>
                    </div><!--  -->
                </div>
            </div>

        </div>



        <div class="invoice-card">
  <div class="invoice-title">
    <div id="main-title">
      <h4>INVOICE</h4>
      <span>#<?php echo rand(10,10000);?></span>
    </div>
    
    <span id="date"><?php echo date("m/d/Y")?></span>
  </div>
  
  <div class="invoice-details">
    <table class="invoice-table">
      <thead>
        <tr>
          <td>PRODUCT</td>
          <td>PRICE</td>
        </tr>
      </thead>
      
      <tbody>
        <tr class="row-data">
          <td>Car Price<span>(basic)</span></td>
          <td><?php echo $car_price;?></td>
        </tr>
        
        <tr class="row-data">
          <td>Monthly Premium</td>
          <td><?php echo $monthly_premium;?></td>
        </tr>
        <tr class="row-data">
          <td>Yearly Premium</td>
          <td><?php echo $year_premium;?></td>
        </tr>

        <tr class="row-data">
          <td>Tax</td>
          <td><?php echo $tax;?></td>
        </tr>
        <tr class="calc-row">
          <td ><hr></td>
          <td><hr></td>
        </tr>
        <tr class="calc-row">
          <td >Total</td>
          <td><?php echo $total=$year_premium+$tax; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  
  <div class="invoice-footer">
    <button class="btn btn-secondary" id="later">LATER</button>
    <button class="btn btn-primary" ><a href = "payment.php?amount=<?php echo base64_encode($total)?>" style="color: #000;">Pay NOW</a></button>
  </div>
</div>
    </div>

</div>


<link href="https://cdn.syncfusion.com/19.3.0.43/js/web/flat-azure/ej.web.all.min.css" rel="stylesheet" />
<script src="https://cdn.syncfusion.com/19.3.0.43/js/web/ej.web.all.min.js"></script>
<script type="text/javascript" src="datetime.js"></script>
<link type="text/css" href="datetime.css" rel="stylesheet" />



<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>


<script src="jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#brand').on('change', function() {
            var Brand = $(this).val();
            console.log('Zone name :: ' + Brand);
            if (Brand) {
                $.ajax({
                    type: 'POST',
                    url: 'Brand.php',
                    data: 'Brand=' + Brand,
                    success: function(html) {
                        $('#model').html(html);
                        $('#city').html('<option value="">Select Brand </option>');
                    }
                });
            } else {
                $('#circle').html('<option value="">Select country first</option>');
                $('#city').html('<option value="">Select state first</option>');
            }
        });
    });
</script>

<script src="js/vendor.bundle.base.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/chart.js"></script>
<script src="js/Chart.min.js"></script>