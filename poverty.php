<?php
$startYear = 1997;
$endYear = 2022;
$country = 'PER';
$apiUrl = 'https://api.worldbank.org/pip/v1/pip?country=' . $country . '&year=';
$data = [];

for ($year = $startYear; $year <= $endYear; $year++) {
    $url = $apiUrl . $year;
    $response = file_get_contents($url);
    $json = json_decode($response, true);

    if (isset($json[0]['headcount'])) {
        $data[$year] = $json[0]['headcount'];
    } else {
        $data[$year] = null;
    }
}
$dataJson = json_encode($data);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pobreza en Perú</title>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div id="container" style="width:100%; height:400px;"></div>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            const localStorageKey = 'povertyDataPeru';
            const storedData = localStorage.getItem(localStorageKey);

            if (storedData) {
                renderChart(JSON.parse(storedData));
            } else {
                fetchDataAndStore();
            }

            function fetchDataAndStore() {
                const data = <?php echo $dataJson; ?>;
                localStorage.setItem(localStorageKey, JSON.stringify(data));
                renderChart(data);
            }

            function renderChart(data) {
                const years = Object.keys(data);
                const values = Object.values(data);

                Highcharts.chart('container', {
                    chart: {
                        type: 'line'
                    },
                    title: {
                        text: 'Índice de Pobreza en Perú (1997-2022)'
                    },
                    xAxis: {
                        categories: years,
                        title: {
                            text: 'Años'
                        }
                    },
                    yAxis: {
                        title: {
                            text: 'Índice de Pobreza (%)'
                        }
                    },
                    series: [{
                        name: 'Pobreza',
                        data: values
                    }]
                });
            }
        });
    </script>
</body>
</html>
