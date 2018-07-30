<?php include 'portalConfig.php';?>
<!doctype html>
<html lang="en">
 <head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/myportal.css" />
    <link rel="stylesheet" href="css/nav.css" />
 </head>
    <body>
        <header>
            <h1>Joel Skubinna WEB120</h1>
            <h2><?=$pageID?></h2>
        </header>
            <nav>
                 <ul class="topnav">
                 <?=makeLinks($nav1)?>
                    <!--
                     <li><a href="index.php">Welcome</a></li>
                    <li><a href="big/index.php">Big</a></li>
                    <li><a href="aia.php">AIA</a></li>
                    <li><a href="flowchart.php">Flowchart</a></li>
                    <li><a href="fp/index.php">Final Project</a></li>
                    <li><a href="contactme.php">Contact Joel</a></li>
                    -->
                    <li class="icon">
                    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
                    </li>
                </ul>
            </nav>