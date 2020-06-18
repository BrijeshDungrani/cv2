<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>

<body>
    <?php include_once('header.html') ?>

    <div class="row cardrow">
        <div class="card" id="Totalcard" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total Cases</h5>
                <p class="card-text">500</p>
            </div>
        </div>
        <div class="card" id="Activecard" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Active Cases</h5>
                <p class="card-text">185</p>
            </div>
        </div>
        <div class="card" id="Recoverycard" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Recovery</h5>
                <p class="card-text">150</p>
            </div>
        </div>
        <div class="card" id="deathcard" style="width: 18rem">
            <div class="card-body">
                <h5 class="card-title">Total Death</h5>
                <p class="card-text">5</p>
            </div>
        </div>

    </div>
    <div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Total Cases Line chart</div>
                    <div class="card-body"><canvas id="linechart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Line Graph</div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
                label: "My First dataset",
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                ],
                borderColor: [
                    'rgba(200, 99, 132, .7)',
                ],
                borderWidth: 2
            },
            {
                label: "My Second dataset",
                data: [28, 48, 40, 19, 86, 27, 90],
                backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                ],
                borderColor: [
                        'rgba(0, 10, 130, .7)',
                ],
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true
    }
});
</script>

</html>