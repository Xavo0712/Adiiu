<?php
require_once __DIR__ . "/head.php";
require_once __DIR__ . "/views/header.php";
?>

<body class="mainBody">
    <div class="container homeContainer">
        <div class="row">
            <div class="col-lg-6">
                <img src="./imgs/homeDog1.png" height="300px">
            </div>
            <div class="col-lg-6 homeText">
                <h1>Know more about dogs!</h1>
                <h3>In our general dog breeds data page, with charts and interesting information of the most important breeds.</h3>
                <button id="generalButton">Take a look!</button>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6 homeText">
                <h1>Compare dog breeds</h1>
                <h3>With our new dog breed comparer tool, so you can choose between those breeds you are doubting on.</h3>
                <button id="compareButton">Try it now!</button>
            </div>
            <div class="col-lg-6">
                <img src="./imgs/homeDog2.png" height="300px">
            </div>
        </div>
    </div>
    <br>
    <br>
    <h1 style="text-align: center">Why don't you try our other features?</h1>
    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-lg-4 homeText">
                <h3>Texto 1</h3>
            </div>
            <div class="col-lg-4 homeText">
                <h3>Texto 2</h3>
            </div>
            <div class="col-lg-4 homeText">
                <h3>Texto 3</h3>
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#headerTitle').text("Welcome to this dog page");
        $('#headerImg').attr("src", "./imgs/homeDog0.png");
    });
</script>