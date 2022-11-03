<?php
require_once __DIR__ . "/../head.php";
require_once __DIR__ . "../header.php";

/* Getting demo_viewer table data */
$sql = "SELECT * FROM mytable";
$dogs = mysqli_query($mysqli, $sql);
?>

<body class="mainBody">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <select id="dogBreed1" class="form-select">
                    <option value="" selected>Choose a breed</option>
                    <?php
                    foreach($dogs as $dog) {
                        echo '<option value="'. $dog["Breed"] .'">'. $dog["Breed"] .'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-lg-6">
                <select id="dogBreed2" class="form-select">
                    <option value="" selected>Choose a breed</option>
                    <?php
                    foreach($dogs as $dog) {
                        echo '<option value="'. $dog["Breed"] .'">'. $dog["Breed"] .'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="container meuContainer">
        <div class="div1" id="chart1"></div>
        <div class="div2" id="chart2"></div>
        <div class="div3" id="chart3"></div>
        <div class="div4" id="chart4"></div>
        <div class="div5" id="chart5"></div>
    </div>

</body>



<script>
    var select1 = document.querySelector('#dogBreed1');
    dselect(select1, {
        search: true
    });

    var select2 = document.querySelector('#dogBreed2')
    dselect(select2, {
        search: true
    });


</script>