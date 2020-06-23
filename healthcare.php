<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Health Care</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php include_once('header.html') ?>
    
    <div class="row">
        <div class="container" id="covid19bedcard">
            <h3 style="padding-left: 20px; color: blue;">Covid-19 Beds</h3>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text">500</p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text">185</p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text">150</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="container" id="covid19Ventcard">
            <h3 style="padding-left: 20px; color: blue;">Covid-19 Ventilators</h3>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text">500</p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text">185</p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text">150</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

</body>
</html>