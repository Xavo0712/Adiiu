<?php 
require_once __DIR__ . "/../head.php";
require_once __DIR__ . "../header.php";
?>

<body class="mainBody">

    <div class="info">
        <h1> In this page you can see information and comparisons about the 10 most popular dog breeds of our Database. Enjoy!</h1>
    </div>

    <div class="container meuContainer">
        <div class="div1" id="chart1"></div>
        <div class="div2" id="chart2"></div>
        <div class="div3" id="chart3"></div>
        <div class="div4" id="chart4"></div>
        <div class="divImg" id="gifImg"></div>
    </div>

</body>

<script>
$(document).ready(function() {
    $('#headerTitle').text("General info charts about dogs");
    $('#headerImg').attr("src", "./../imgs/generalDog.png");
    var data;
    getAllDogsData(function(response) {
        data = response;
    });

    popularDogsTop10 = get10PopularDogs(data);
    var processed_json = new Array();
    for (i = 0; i < popularDogsTop10.length; i++) {
        processed_json.push([popularDogsTop10[i].Breed, parseInt(popularDogsTop10[i].max_weight)]);
    }

    var processed_json2 = new Array();
    for (i = 0; i < popularDogsTop10.length; i++) {
        processed_json2.push([popularDogsTop10[i].Breed, parseInt(popularDogsTop10[i].max_height)]);
    }

    //For 2nd chart
    var processed_json3 = new Array();
    processed_json3.push([popularDogsTop10[0].Breed, parseInt(popularDogsTop10[0].max_height)]);
    processed_json3.push([popularDogsTop10[0].Breed, parseInt(popularDogsTop10[0].min_height)]);
    processed_json3.push([popularDogsTop10[0].Breed, parseInt(popularDogsTop10[0].max_weight)]);
    processed_json3.push([popularDogsTop10[0].Breed, parseInt(popularDogsTop10[0].min_weight)]);
    var processed_json4 = new Array();
    processed_json4.push([popularDogsTop10[1].Breed, parseInt(popularDogsTop10[1].max_height)]);
    processed_json4.push([popularDogsTop10[1].Breed, parseInt(popularDogsTop10[1].min_height)]);
    processed_json4.push([popularDogsTop10[1].Breed, parseInt(popularDogsTop10[1].max_weight)]);
    processed_json4.push([popularDogsTop10[1].Breed, parseInt(popularDogsTop10[1].max_weight)]);

    //For 3rd chart
    var processed_json5 = new Array();
    for (i = 0; i < popularDogsTop10.length; i++) {
        processed_json5.push([popularDogsTop10[i].Breed, parseInt(popularDogsTop10[i].max_expectancy)]);
    }

    // draw chart
    $('#chart1').highcharts({
        chart: {
            backgroundColor: '#FFF5EB',
            type: "column",
            borderColor: "#333333",
            borderRadius: 5,
            borderWidth: 5,

        },
        title: {
            text: "Doggos2"
        },
        xAxis: {
            allowDecimals: false,
            title: {
                text: "Breed"
            }
        },
        yAxis: {
            title: {
                text: "Popularity"
            }

        },
        colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
            '#FF9655', '#FFF263'
        ],
        series: [{
                data: processed_json
            },
            {
                data: processed_json2
            }
        ],
        credits: false
    });

    $('#chart2').highcharts({
        chart: {
            backgroundColor: '#FFF5EB',
            type: "bar",
            borderColor: "#333333",
            borderRadius: 5,
            borderWidth: 5,

        },
        title: {
            text: "Doggos2"
        },
        xAxis: {
            allowDecimals: false,
            title: {
                text: "Breed"
            }
        },
        yAxis: {
            title: {
                text: "Popularity"
            }

        },
        colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
            '#FF9655', '#FFF263'
        ],
        series: [{
                data: processed_json
            },
            {
                data: processed_json2
            }
        ],
        credits: false
    });

    $('#chart3').highcharts({
        chart: {
            backgroundColor: '#FFF5EB',
            type: "pie",
            borderColor: "#333333",
            borderRadius: 5,
            borderWidth: 5,

        },
        title: {
            text: "Doggos3"
        },
        xAxis: {
            allowDecimals: false,
            title: {
                text: "Breed"
            }
        },
        yAxis: {
            title: {
                text: "Popularity"
            }

        },
        colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
            '#FF9655', '#FFF263'
        ],
        series: [{
            data: processed_json5
        }],
        credits: false
    });


    $('#chart4').highcharts({
        chart: {
            backgroundColor: '#FFF5EB',
            type: "areaspline",
            borderColor: "#333333",
            borderRadius: 5,
            borderWidth: 5,
        },
        title: {
            text: "Doggos5"
        },
        xAxis: {
            allowDecimals: false,
            title: {
                text: "Breed"
            }
        },
        yAxis: {
            title: {
                text: "Popularity"
            }

        },
        colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
            '#FF9655', '#FFF263'
        ],
        series: [{
                data: processed_json
            },
            {
                data: processed_json2
            }
        ],
        credits: false
    });
});
</script>