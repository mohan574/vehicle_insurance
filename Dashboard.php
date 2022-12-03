<?php include('sidemenu.php'); ?>
<style>
    #example_filter {

        float: right;
        margin-bottom: 24px;
    }

    .table-style {}

    .dataTables_paginate {
        float: right !important;
        margin: 10px !important;
    }

    .dataTables_info {
        display: none !important;
    }


    .textoverlap {
        text-align: left;
        margin: 5px 0;
        text-transform: capitalize;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        width: 120px;
    }

    .form-check {
        margin: 5px !important;
    }


    .odd {
        background: #fff;
    }

    thead,
    tbody,
    tfoot,
    tr {
        background: #fff;

    }

    thead,
    tbody,
    tr*:hover {
        background: #cccccc6e;
    }

    .dataTables_length {

        display: none;
    }

    .form-check .form-check-label input[type="checkbox"]+.input-helper:before {
        width: 14px;
        height: 14px;
        border: 1px solid #763B75;
    }

    .form-check .form-check-label input[type="checkbox"]:checked+.input-helper:before {
        background: #763B75 !important;
        border-width: 0;
    }

    .table-striped>tbody>tr:nth-of-type(odd)>* {
        --bs-table-accent-bg: #fff !important;
        color: var(--bs-table-striped-color);
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: #cccccc9c !important;
    }

    .card .card-body {
        padding: 1rem !important
    }


    .table th,
    .table td {
        padding: 5px;
    }

    .arrow {
        margin: 0;
        font-size: 12px;
        color: #000;
        float: left;
    }

    .arrow i {
        margin: 5px 0 !important;
        font-size: 9px !important;
        color: #000 !important;
    }


    #example1_filter {
        float: right;
    }

    #example2_filter {
        float: right;
        display: none;
    }

    #example_filter {
        float: right;
        display: none;

    }

    .card .card-title {
        color: #763b75;
    }



    .paginate_button {
        line-height: 0.8;
    }


    .table thead th {
        font-weight: bold;
        font-size: 15px;
    }

    #example th {
        padding: 5px 10px;

    }



    #example2_paginate {

        display: none;

    }



    #example2 td {
        padding: 5px 10px;
    }

    #example2 th {
        padding: 10px;

    }


    .card-title {

        border-bottom: 1px solid #763b75;
        padding-bottom: 8px;

    }

    #example1_filter input {
        width: 140px;
        margin: 7px 0;
    }

    #example2_filter input {
        width: 140px;
        margin: 7px 0;
    }

    #example_filter input {
        width: 140px;
        margin: 7px 0;
    }

    .table thead th {
        font-weight: bold;
    }

    #example1_filter {
        color: #fff;
    }

    .sort-by {
        display: block;
        float: left;
        margin-top: 7px;
        width: 10px;
        color: #000 !important;
        margin-right: 2px;
    }


    #example_filter1 input {
        width: 170px;
    }


    .sort-by:before,
    .sort-by:after {

        border: 4px solid transparent;
        content: "";
        display: block;
        height: 0;
        width: 0;
        float: left;
        color: #000;


    }


    .table-responsive-lg {
        width: 100%;
    }



    .sort-by:before {
        border-bottom-color: #666;
        margin-top: -9px;
    }

    .sort-by:after {
        border-top-color: #666;
        margin-top: 1px;
    }


    @media (max-width: 1270px) {
        .table {
            margin-bottom: 0;
            width: max-content;
        }
    }



    .more {
        float: right;
        margin: 19px 13px;
        color: #763B75;
        font-weight: bold;
        text-decoration: underline;
    }

    #overlay {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        z-index: 100;
    }

    #popup {
        display: none;
        position: fixed;
        top: 35%;
        left: 50%;
        background: #fff;
        width: 30%;

        margin-left: -250px;
        /*Half the value of width to center div*/
        margin-top: -250px;
        /*Half the value of height to center div*/
        z-index: 200;
        box-shadow: 0px 1px 20px 2px;
        border-radius: 6px;
    }

    #popupclose {
        float: right;
        padding: 10px;
        cursor: pointer;
    }

    .popupcontent {
        padding: 25px;
    }

    #button {
        cursor: pointer;
        margin: -5px;
        padding: 10px 6px;
        width: 102px;
        font-size: 12px;
        float: right;
    }


    button.btn.btn-gradient-primary.mr-2.button_invite_tester {
        width: auto;
        margin: 10px auto;
    }


    table#example2 {
        width: 100%;
    }



    @media (max-width : 430px) {

        #popup {
            display: none;
            position: fixed;
            top: 35%;
            left: 66%;
            background: #fff;
            width: 96%;
            margin-left: -250px;
            margin-top: -83px;
            z-index: 200;
            box-shadow: 0px 1px 20px 2px;
            border-radius: 6px;
        }
    }

    @media (max-width : 1440px) {

        #popup {
            top: 48%;
        }
    }


    .image_coupe {

        width: 100%;

    }

    .snip1527 {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        color: #ffffff;
        float: left;
        font-family: 'Lato', Arial, sans-serif;
        font-size: 16px;
        margin: 10px 1%;
        max-width: 310px;
        min-width: 250px;
        overflow: hidden;
        position: relative;
        text-align: left;
        width: 100%;
    }

    .snip1527 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .snip1527 img {
        max-width: 100%;
        vertical-align: top;
        position: relative;
    }

    .snip1527 figcaption {
        width: 100%;
        padding: 25px 20px 25px;
        position: absolute;
        bottom: 0;
        z-index: 1;
    }

    .snip1527 figcaption:before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #700877;
        content: '';
        background: -moz-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        background: -webkit-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        background: linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        opacity: 0.8;
        z-index: -1;
    }

    .snip1527 .date {
        background-color: #fff;
        border-radius: 50%;
        color: #700877;
        font-size: 18px;
        font-weight: 700;
        min-height: 48px;
        min-width: 48px;
        padding: 10px 0;
        position: absolute;
        right: 15px;
        text-align: center;
        text-transform: uppercase;
        top: -25px;
    }

    .snip1527 .date span {
        display: block;
        line-height: 14px;
    }

    .snip1527 .date .month {
        font-size: 11px;
    }

    .snip1527 h3,
    .snip1527 p {
        margin: 0;
        padding: 0;
    }

    .snip1527 h3 {
        display: inline-block;
        font-weight: 700;
        letter-spacing: -0.4px;
        margin-bottom: 5px;
    }

    .snip1527 p {
        font-size: 0.8em;
        line-height: 1.6em;
        margin-bottom: 0px;
    }

    .snip1527 a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: absolute;
        z-index: 1;
    }

    .snip1527:hover img,
    .snip1527.hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>



<div class="main-panel">
    <div class="content-wrapper" style="margin-left:250px;">
        <div class="page-header">
            <h3 class="page-title">
                Select CAR Type
            </h3>
        </div>
        <div class="row">


            <div class="col-md-3 stretch-card grid-margin">
            
                <figure class="snip1527">
                    <div class="image"><img src="./images/SUV.jpg" alt="pr-sample23" /></div>
                    <figcaption>
                        <h3>Jeep</h3>
                    </figcaption>
                    <a href="insurance.php?category=Jeep"></a>
                </figure>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=sedan">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/sedan.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Sedan</h3>

                    </figure>
                </a>
            </div>

            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=Limousine">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/MUV.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Limousine</h3>

                    </figure>
                </a>
            </div>

            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=Hatchback">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/hatchback.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Hatchback</h3>

                    </figure>
                </a>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=Coupe">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/coupe.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Coupe</h3>

                    </figure>
                </a>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=Cabriolet">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/Convertibles.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Cabriolet</h3>

                    </figure>
                </a>
            </div>

            <div class="col-md-3 stretch-card grid-margin">
                <a href="insurance.php?category=Pickup">
                    <figure class="snip1527">
                        <div class="image"><img src="./images/Pickup_Trucks.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Pickup Trucks</h3>

                    </figure>
                </a>
            </div>
        </div>






    </div>
</div>




</div>

<script src="js/vendor.bundle.base.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/chart.js"></script>
<script src="js/Chart.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({});


        $('label').html(function(index, text) {
            console.log('label');
            return text.replace('Search:', '<p style="display:none;">specific</p>');
        })

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example1').DataTable({});
    });
</script>



<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable({});
    });
</script>


<script>
    $(document).ready(function() {
        $("#example1_filter input").removeAttr('placeholder');
        $("#example1_filter input").attr("placeholder", "Search..");
    });
</script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script src="js/chart.js"></script>




<script type="text/javascript">
    // Initialize Variables
    var closePopup = document.getElementById("popupclose");
    var overlay = document.getElementById("overlay");
    var popup = document.getElementById("popup");
    var button = document.getElementById("button");
    // Close Popup Event
    closePopup.onclick = function() {
        overlay.style.display = 'none';
        popup.style.display = 'none';
    };
    // Show Overlay and Popup
    button.onclick = function() {
        overlay.style.display = 'block';
        popup.style.display = 'block';
    }
</script>