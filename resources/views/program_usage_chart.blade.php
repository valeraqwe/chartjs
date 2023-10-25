<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Usage Chart</title>
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Include Axios for making AJAX requests -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

<!-- Canvas element for the chart -->
<div style="max-width: 800px; margin: auto;">
    <canvas id="myChart"></canvas>
</div>

<script>
    // Make an AJAX call to fetch the data
    axios.get('/program-usage-data')
        .then(function (response) {
            // Process the data
            let labels = response.data.map(d => d.record_date);
            let data = response.data.map(d => d.hours_used);

            // Create the chart
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar', // or 'line', 'pie', etc.
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Hours Used',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(function (error) {
            console.log(error);
        });
</script>

</body>

</html>
