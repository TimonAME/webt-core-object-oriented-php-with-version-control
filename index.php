<?php
require_once "src/video.php";

$vid1 = new video("McLaren 765LT *340km/h* REVIEW on AUTOBAHN by AutoTopNL", "https://www.youtube.com/watch?v=5WM9XCnxckM&t=483s&ab_channel=AutoTopNL", '<iframe width="425" height="239" src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');
$vid2 = new video("Launching Cars With A Giant Slingshot", "https://www.youtube.com/watch?v=-2d-bN0o2_E&ab_channel=WhistlinDiesel", '<iframe width="425" height="239" src="https://www.youtube.com/embed/-2d-bN0o2_E?si=6_Nc7yQF7FyNHLaT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');
$vid3 = new video("How a Formula 1 Race Car Works", "https://www.youtube.com/watch?v=V7707zEX9X4&ab_channel=Animagraffs", '<iframe width="425" height="239" src="https://www.youtube.com/embed/V7707zEX9X4?si=m_KHgCHJc48v5EaN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>');

echo <<<EOT
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Acolytes of Ash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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

<div class="container mt-4">
    <div class="row mt-4">
        <!-- Video Set 1 -->
        <div class="col-md-12">
           <button class="btn btn-primary mb-1" data-bs-toggle="collapse" data-bs-target="#videos1">Toggle Videos Set 1</button>
            <div class="collapse" id="videos1">
                <div class="row">
                    <div class="col-md-4">
                        <h6>{$vid1->getName()}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>{$vid2->getName()}</h6>
                    </div>
                    <div class="col-md-4">
                        <h6>{$vid3->getName()}</h6>
                    </div>
                    <div class="col-md-4">
                        {$vid1->getEmbedCode()}
                    </div>
                    <div class="col-md-4">
                        {$vid2->getEmbedCode()}
                    </div>
                    <div class="col-md-4">
                        {$vid3->getEmbedCode()}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Video Set 2 -->
        <div class="col-md-12">
            <button class="btn btn-success mb-1" data-bs-toggle="collapse" data-bs-target="#videos2">Toggle Videos Set 2</button>
            <div class="collapse" id="videos2">
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
            </div>
            <div class="collapse" id="videos2">
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Video Set 3 -->
        <div class="col-md-12">
            <button class="btn btn-info mb-1" data-bs-toggle="collapse" data-bs-target="#videos3">Toggle Videos Set 3</button>
            <div class="collapse" id="videos3">
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
            </div>
            <div class="collapse" id="videos3">
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
                {$vid1->getEmbedCode()}
            </div>
        </div>
    </div>
    <!-- Add more video sets here -->
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
EOT;
