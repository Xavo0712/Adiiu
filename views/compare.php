<?php
require_once __DIR__ . "/../head.php";
require_once __DIR__ . "../header.php";

require_once __DIR__ . "/../utils/db_utils.php";
/* Getting demo_viewer table data */
$sql = "SELECT * FROM mytable";
$dogs = mysqli_query($mysqli, $sql);
?>

<body class="mainBody">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <select id="dogBreed1" class="form-select">
                    <option value="" selected>Choose a breed</option>
                    <?php
                    foreach ($dogs as $dog) {
                        echo '<option value="' . $dog["Breed"] . '">' . $dog["Breed"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-6">
                <select id="dogBreed2" class="form-select">
                    <option value="" selected>Choose a breed</option>
                    <?php
                    foreach ($dogs as $dog) {
                        echo '<option value="' . $dog["Breed"] . '">' . $dog["Breed"] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="container comparisonContainer">
        <div class="div1" id="chart1"></div>
        <div class="div2" id="chart2"></div>
        <div class="div3" id="chart3"></div>
        <div class="div4" id="chart4"></div>
        <div class="div5" id="chart5"></div>
        <div class="div6" id="chart6"></div>
    </div>

</body>



<script>
    $(document).ready(function() {
        $('#headerTitle').text("Comparison tool");
        $('#headerImg').attr("src", "./../imgs/compareDog.png");
        var select1 = document.querySelector('#dogBreed1');
        dselect(select1, {
            search: true
        });

        var select2 = document.querySelector('#dogBreed2')
        dselect(select2, {
            search: true
        });

        $('#dogBreed1').change(function() {
            getComparisonDogsData($('#dogBreed1').val(), $('#dogBreed2').val());
        });

        $('#dogBreed2').change(function() {
            getComparisonDogsData($('#dogBreed1').val(), $('#dogBreed2').val());
        });

        $('#chart1').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,

            },
            title: {
                text: "Popularity Comparison"
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
            series: [{}, {}],
            credits: false
        });

        $('#chart2').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,

            },
            title: {
                text: "Mean Weight Comparison"
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: "Breed"
                }
            },
            yAxis: {
                title: {
                    text: "Mean Weight"
                }

            },
            colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                '#FF9655', '#FFF263'
            ],
            series: [{}, {}],
            credits: false
        });

        $('#chart3').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,

            },
            title: {
                text: "Mean Height Comparison"
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: "Breed"
                }
            },
            yAxis: {
                title: {
                    text: "Mean Height"
                }

            },
            colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                '#FF9655', '#FFF263'
            ],
            series: [{}, {}],
            credits: false
        });


        $('#chart4').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,
            },
            title: {
                text: "Mean Expectancy Comparison"
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: "Breed"
                }
            },
            yAxis: {
                title: {
                    text: "Mean Expectancy"
                }

            },
            colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                '#FF9655', '#FFF263'
            ],
            series: [{}, {}],
            credits: false
        });

        $('#chart5').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,
            },
            title: {
                text: "Trainability Level Comparison"
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: "Breed"
                }
            },
            yAxis: {
                title: {
                    text: "Trainability Level"
                }

            },
            colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                '#FF9655', '#FFF263'
            ],
            series: [{}, {}],
            credits: false
        });

        $('#chart6').highcharts({
            chart: {
                backgroundColor: '#FFF5EB',
                type: "column",
                borderColor: "#333333",
                borderRadius: 5,
                borderWidth: 5,
            },
            title: {
                text: "Energy Level Comparison"
            },
            xAxis: {
                allowDecimals: false,
                title: {
                    text: "Breed"
                }
            },
            yAxis: {
                title: {
                    text: "Energy Level"
                }

            },
            colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
                '#FF9655', '#FFF263'
            ],
            series: [{}, {}],
            credits: false
        });
    });
</script>