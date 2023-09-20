<?php

echo <<<EOT
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to dev.webt.local</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Brand/logo (optional) -->
        <a class="navbar-brand" href="#">My Website</a>
        
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
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="collapse" id="videos1">
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Video Set 2 -->
        <div class="col-md-12">
            <button class="btn btn-success mb-1" data-bs-toggle="collapse" data-bs-target="#videos2">Toggle Videos Set 2</button>
            <div class="collapse" id="videos2">
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="collapse" id="videos2">
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <!-- Video Set 3 -->
        <div class="col-md-12">
            <button class="btn btn-info mb-1" data-bs-toggle="collapse" data-bs-target="#videos3">Toggle Videos Set 3</button>
            <div class="collapse" id="videos3">
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="collapse" id="videos3">
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <iframe width="425" height="239"
                    src="https://www.youtube.com/embed/5WM9XCnxckM?si=SYnqHCS3H4vbLj0D" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- Add more video sets here -->
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
EOT;
