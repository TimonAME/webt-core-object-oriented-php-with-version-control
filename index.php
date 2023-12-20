<?php
require_once "src/video.php";
require_once "src/YouTube.php";
require_once "src/Vimeo.php";

#Youtube video Objekte erstellt
$vid1 = new YouTube("McLaren 765LT *340km/h* REVIEW on AUTOBAHN", "https://www.youtube.com/watch?v=5WM9XCnxckM&t=483s&ab_channel=AutoTopNL");
$vid2 = new YouTube("Launching Cars With A Giant Slingshot", "https://www.youtube.com/watch?v=-2d-bN0o2_E&ab_channel=WhistlinDiesel");
$vid3 = new YouTube("How a Formula 1 Race Car Works", "https://www.youtube.com/watch?v=V7707zEX9X4&ab_channel=Animagraffs");
$vid4 = new YouTube("20 WOMEN VS 1 SIDEMEN: SPEED EDITION", "https://www.youtube.com/watch?v=m7YSTtiPMl4&t=3514s&ab_channel=Sidemen");
$vid5 = new YouTube("Frauen mit Wählscheibentelefon klären", "https://www.youtube.com/watch?v=aEE9v3wb6bg&ab_channel=Iratsch");
$vid6 = new YouTube("1 Tag mit einem Callboy: Frauen bezahlen ihn für Sex", "https://www.youtube.com/watch?v=ZA82TG-v9L4&ab_channel=tomatolix");

#Vimeo video Objekte erstellt
$vimeo1 = new Vimeo("Close The Gap", "https://vimeo.com/869687763");
$vimeo2 = new Vimeo("They Dance With Their Heads", "https://vimeo.com/868399826");
$vimeo3 = new Vimeo("PLANTARIUM - animated short (2020)", "https://vimeo.com/868314085");
$vimeo4 = new Vimeo("Austyn Gillette ‘Leaning into your Palms’", "https://vimeo.com/870265868");
$vimeo5 = new Vimeo("Andy Shauf - Clove Cigarette", "https://vimeo.com/456459957");
$vimeo6 = new Vimeo("Aki Sasamoto: An Artist Walks into a Bar | Art21 “New York Close Up”", "https://vimeo.com/360656686");

echo <<<EOT
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Acolytes of Ash</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">-->
    <!-- <link rel="stylesheet" href="path/to/bootstrap.min.css"> -->
    <link rel="stylesheet" href="scss/custom.css">
</head>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Brand/logo (optional) -->
        <a class="navbar-brand" href="#">Acolytes of Ash</a>
        
        <!-- Hamburger button (collapsed on small screens) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- You can leave this empty if you don't want any navigation links -->
        </div>
    </div>
</nav>
<body class="">
    <div class="container mt-4">
        <div class="row mt-4">
            <!-- Video Set 1 -->
            <div class="col-md-12">
               <button class="btn btn-primary mb-1" data-bs-toggle="collapse" data-bs-target="#videos1">Youtube Videos</button>
                <div class="collapse show" id="videos1">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid1->getName()}</h6>
                            </div>
                            <div>
                                {$vid1->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid2->getName()}</h6>
                            </div>
                            <div>
                                {$vid2->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid3->getName()}</h6>
                            </div>
                            <div>
                                {$vid3->getEmbedCode()}   
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid4->getName()}</h6>
                            </div>
                            <div>
                                {$vid4->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid5->getName()}</h6>
                            </div>
                            <div>
                                {$vid5->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vid6->getName()}</h6>
                            </div>
                            <div>
                                {$vid6->getEmbedCode()}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <button class="btn btn-primary mb-1 " data-bs-toggle="collapse" data-bs-target="#videos2">Vimeo Videos</button>
                <div class="collapse" id="videos2">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo1->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo1->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo2->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo2->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo3->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo3->getEmbedCode()}   
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo4->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo4->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo5->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo5->getEmbedCode()}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="mt-3">
                                <h6>{$vimeo6->getName()}</h6>
                            </div>
                            <div>
                                {$vimeo6->getEmbedCode()}   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
EOT;
