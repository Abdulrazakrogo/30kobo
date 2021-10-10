<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4646ff" />
    <title>ThirtyKobo  </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="currency-converter.css" rel="stylesheet"/>

    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="./vendor/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

 
   

<body>
<?php
    // set API Endpoint and API key 
    $endpoint = 'latest';
    $access_key = '8f463f4e5097124b4490912b86d0ff7d';
    $base_usd = 'USD';

    
 

    // Initialize CURL:
$ch = curl_init('https://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&base='.$base_usd.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);


// Decode JSON response:
$gbpRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
$usd = $exchangeRates['rates']['USD'];
$gbp = $exchangeRates['rates']['GBP'];
$eur = $exchangeRates['rates']['EUR'];
$ngn = $exchangeRates['rates']['NGN'];
$cny = $exchangeRates['rates']['CNY'];
$cad = $exchangeRates['rates']['CAD'];
$chf = $exchangeRates['rates']['CHF'];
$xof = $exchangeRates['rates']['XOF'];
$myr = $exchangeRates['rates']['MYR'];
$sar = $exchangeRates['rates']['SAR'];
$qar = $exchangeRates['rates']['QAR'];

    
    // Accessing the exchange rate values, e.g. USD from response.:
    
   // $usd = $result['rates']['USD'];
   // $gbp = $result['rates']['GBP'];
  //  $eur = $result['rates']['EUR'];
    

    $busd = $airport_usd * $usd;
    $bgbp = ((18 / 100) * $gbp) + $gbp;
    $beur = ((18 / 100) * $eur) + $eur;
    $bngn = $airport_usd * $ngn;
   
    
    
    ?>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper pt-0">

        <div class="header landing_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 position-relative">
                        <nav class="navbar navbar-expand-lg navbar-light px-0">
                            <a class="navbar-brand" href="https://www.thirtykobo.com"><img src="./images/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#" data-scroll-nav="0">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Parallel Market Rates</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Lagos/Airport</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Lagos/Lagos Island</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Lagos/Victoria Island</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Kano</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Abuja</a>
                                            </li>
                                        </ul>
                                    </li> 
                                   <!-- <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="2">Parallel Market Rates</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="21">Interbank Rates</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-scroll-nav="1">CBN rates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://blog.thirtykobo.com/" data-scroll-nav="3">News</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Resources</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://blog.thirtykobo.com/category/currency-tips/" data-scroll-nav="3">Currency Tips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://blog.thirtykobo.com/category/market-analysis/" data-scroll-nav="3">Market Analysis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="https://blog.thirtykobo.com/category/finance/" data-scroll-nav="3">Finance</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="dashboard_log">
                                <div class="d-flex align-items-center">
                                    <div class="header_auth">
                                        <a href="https://blog.thirtykobo.com/contact" class="btn btn-primary">Get in Touch</a>
                                        <!--<a href="./signup.html" class="btn btn-outline-primary">Sign Up</a> -->
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro section-padding position-relative" id="intro" data-scroll-index="0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-md-6">
                        <div class="intro-content">
                            <h2>Welcome to <br>ThirtyKobo</h2>
                            <p>Live Naira exchange rates at a glance</p>
                            <div class="mt-4">
                            <a href="#" data-scroll-nav="2" class="btn btn-primary">Parallel Market</a>
                            <a href="#" data-scroll-nav="1" class="btn btn-primary">CBN Rates</a>
                            </div>
                        </div>
                    </div>
                    
                    
               
                    <div class="col-xl-5 col-md-6 py-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="page_title-content">
                                    <p>Currency Converter</p>
                                </div>
                                
                                <div class="buy-sell-widget">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                href="#buy">Parallel Market</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" 
                                                href="#sell">CBN Rates</a>
                                        </li> 
                                    </ul>
                                    <div class="tab-content tab-content-default">
                                        <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                            <div id="example-1"></div>
                                        </div>
                                        <div class="tab-pane fade" id="sell">
                                            <div id="example-2"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>



<!--




 
 -->




        <div class="market section-padding page-section" data-scroll-index="2">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>Explore</span>
                            <h3>The Nigeria's Leading Foreign Exchange updates platform</h3>
                            <p>Real-time updates at your fingertips</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Lagos/Airport</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock12"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='airportUSD'>
                                                    </td>

                                                    <td id='CBNairportUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='airportEUR'>
                                                    </td>

                                                    <td id='CBNairportEUR'>
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='airportGBP'>
                                                    </td>

                                                    <td id='CBNairportGBP'>
                                                    </td>

                                                   
                                                </tr>

                                               <!--New Currencies -->
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='airportCNY'>
                                                    </td>

                                                    <td id='CBNairportCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='airportCAD'>
                                                    </td>

                                                    <td id='CBNairportCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='airportCHF'>
                                                    </td>

                                                    <td id='CBNairportCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='airportXOF'>
                                                    </td>

                                                    <td id='CBNairportXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='airportMYR'>
                                                    </td>

                                                    <td id='CBNairportMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='airportSAR'>
                                                    </td>

                                                    <td id='CBNairportSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='airportQAR'>
                                                    </td>

                                                    <td id='CBNairportQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Lagos/Lagos Island</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock24"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='islandUSD'>
                                                    </td>

                                                    <td id='CBNislandUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='islandEUR'>
                                                    </td>

                                                    <td id='CBNislandEUR'>
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='islandGBP'>
                                                    </td>

                                                    <td id='CBNislandGBP'>
                                                    </td>

                                                   
                                                </tr>
                                                <!--New Currencies -->
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='islandCNY'>
                                                    </td>

                                                    <td id='CBNislandCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='islandCAD'>
                                                    </td>

                                                    <td id='CBNislandCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='islandCHF'>
                                                    </td>

                                                    <td id='CBNislandCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='islandXOF'>
                                                    </td>

                                                    <td id='CBNislandXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='islandMYR'>
                                                    </td>

                                                    <td id='CBNislandMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='islandSAR'>
                                                    </td>

                                                    <td id='CBNislandSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='islandQAR'>
                                                    </td>

                                                    <td id='CBNislandQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Lagos Victoria Island</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock25"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='victoriaUSD'>
                                                    </td>

                                                    <td id='CBNvictoriaUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='victoriaEUR'>
                                                    </td>

                                                    <td id='CBNvictoriaEUR'>
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='victoriaGBP'>
                                                    </td>

                                                    <td id='CBNvictoriaGBP'>
                                                    </td>

                                                   
                                                </tr>
                                                 <!--New Currencies -->
                                                 <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='victoriaCNY'>
                                                    </td>

                                                    <td id='CBNvictoriaCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='victoriaCAD'>
                                                    </td>

                                                    <td id='CBNvictoriaCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='victoriaCHF'>
                                                    </td>

                                                    <td id='CBNvictoriaCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='victoriaXOF'>
                                                    </td>

                                                    <td id='CBNvictoriaXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='victoriaMYR'>
                                                    </td>

                                                    <td id='CBNvictoriaMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='victoriaSAR'>
                                                    </td>

                                                    <td id='CBNvictoriaSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='victoriaQAR'>
                                                    </td>

                                                    <td id='CBNvictoriaQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Kano</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock26"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='kanoUSD'>
                                                    </td>

                                                    <td id='CBNkanoUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='kanoEUR'>
                                                    </td>

                                                    <td id='CBNkanoEUR'> 
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='kanoGBP'>
                                                    </td>

                                                    <td id='CBNkanoGBP'> 
                                                    </td>

                                                   
                                                </tr>
                                                <!--New Currencies -->
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='kanoCNY'>
                                                    </td>

                                                    <td id='CBNkanoCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='kanoCAD'>
                                                    </td>

                                                    <td id='CBNkanoCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='kanoCHF'>
                                                    </td>

                                                    <td id='CBNkanoCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='kanoXOF'>
                                                    </td>

                                                    <td id='CBNkanoXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='kanoMYR'>
                                                    </td>

                                                    <td id='CBNkanoMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='kanoSAR'>
                                                    </td>

                                                    <td id='CBNkanoSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='kanoQAR'>
                                                    </td>

                                                    <td id='CBNkanoQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Abuja</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock27"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='abujaUSD'>
                                                    </td>

                                                    <td id='CBNabujaUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='abujaEUR'>
                                                    </td>

                                                    <td id='CBNabujaEUR'>
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='abujaGBP'>
                                                    </td>

                                                    <td id='CBNabujaGBP'>
                                                    </td>

                                                   
                                                </tr>
                                                 <!--New Currencies -->
                                                 <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='abujaCNY'>
                                                    </td>

                                                    <td id='CBNabujaCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='abujaCAD'>
                                                    </td>

                                                    <td id='CBNabujaCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='abujaCHF'>
                                                    </td>

                                                    <td id='CBNabujaCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='abujaXOF'>
                                                    </td>

                                                    <td id='CBNabujaXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='abujaMYR'>
                                                    </td>

                                                    <td id='CBNabujaMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='abujaSAR'>
                                                    </td>

                                                    <td id='CBNabujaSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='abujaQAR'>
                                                    </td>

                                                    <td id='CBNabujaQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>CBN official rates</h4>
                                                </div>
                                            </div>
                                        </div>
                                  <!--  <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h6>Live Updates</h6>
                                                                <p id="clock28"></p>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Buy</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <h4>Sell</h4>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td >
                                                        <span><h4><img class="mr-3" src="./images/usd.png" alt="" width="25">1 USD</h4></span>
                                                    </td>

                                                    <td id='cbnUSD'>
                                                    </td>

                                                    <td id='CBNcbnUSD'>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td id='cbnEUR'>
                                                    </td>

                                                    <td id='CBNcbnEUR'>
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td id='cbnGBP'>
                                                    </td>

                                                    <td id='CBNcbnGBP'>
                                                    </td>

                                                   
                                                </tr>
                                                 <!--New Currencies -->
                                                 <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cny.png" alt="" width="25">1 CNY</h4></span>
                                                    </td>

                                                    <td id='cbnCNY'>
                                                    </td>

                                                    <td id='CBNcbnCNY'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/cad.png" alt="" width="25">1 CAD</h4></span>
                                                    </td>

                                                    <td id='cbnCAD'>
                                                    </td>

                                                    <td id='CBNcbnCAD'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/chf.png" alt="" width="25">1 CHF</h4></span>
                                                    </td>

                                                    <td id='cbnCHF'>
                                                    </td>

                                                    <td id='CBNcbnCHF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/xof.png" alt="" width="25">1 XOF</h4></span>
                                                    </td>

                                                    <td id='cbnXOF'>
                                                    </td>

                                                    <td id='CBNcbnXOF'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/myr.png" alt="" width="25">1 MYR</h4></span>
                                                    </td>

                                                    <td id='cbnMYR'>
                                                    </td>

                                                    <td id='CBNcbnMYR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/sar.png" alt="" width="25">1 SAR</h4></span>
                                                    </td>

                                                    <td id='cbnSAR'>
                                                    </td>

                                                    <td id='CBNcbnSAR'>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/qar.png" alt="" width="25">1 QAR </h4></span>
                                                    </td>

                                                    <td id='cbnQAR'>
                                                    </td>

                                                    <td id='CBNcbnQAR'>
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
        const clock12 = document.getElementById('clock12')
        const clock24 = document.getElementById('clock24')
        const clock25 = document.getElementById('clock25')
        const clock26 = document.getElementById('clock26')
        const clock27 = document.getElementById('clock27')
        const clock28 = document.getElementById('clock28')

        // Concatenate a zero to the left of every single digit time frame
        function concatZero(timeFrame) {
        return timeFrame < 10 ? '0'.concat(timeFrame) : timeFrame
        }

        function realTime() {
        let date = new Date()
        let sec = date.getSeconds()
        let mon = date.getMinutes()
        let hr = date.getHours()
        //  hour time
        // If the hour equals 0 or 12, the remainder equals 0, so output 12 instead. (0 || 12 = 12)
        clock12.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
        //  hour time
        clock24.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
         //  hour time
         clock25.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
          //  hour time
        clock26.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
         //  hour time
         clock27.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
          //  hour time
        clock28.textContent = `${concatZero((hr % 12) || 12)} : ${concatZero(mon)} : ${concatZero(sec)} ${hr >= 12 ? 'PM' : 'AM'}`
        }

        setInterval(realTime, 1000)
        </script>


        <div class="contact-form section-padding" data-scroll-index="4">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>Ask Question</span>
                            <h3>Let us hear from you directly!</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-4">
                        <div class="info-list">
                            <h4 class="mb-3">Address</h4>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> Lagos, Nigeria</li>

                                <li><i class="fa fa-envelope"></i> info@thirtykobo.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8 col-sm-8">
                        <form method="post" name="myform" class="contact_validate">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="contactName">
                                            Full name
                                        </label>
                                        <input type="text" class="form-control" id="contactName" placeholder="Full name"
                                            name="firstname">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="contactEmail">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="hello@domain.com">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control p-3" name="message" rows="5"
                                            placeholder="Tell us what we can help you with!"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary px-4">
                                Send message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer landing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="footer-link text-left">
                            <a href="#" class="m_logo"><img src="./images/logo.png" alt=""></a>
                            <!--<a href="about.html">About</a>
                            <a href="privacy-policy.html">Privacy Policy</a>
                            <a href="term-condition.html">Term & Service</a> -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-lg-right text-center">
                        <div class="social">
                            <a href="https://www.instagram.com/thirtykobo"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.twitter.com/thirtykobo"><i class="fa fa-twitter"></i></a>
                            <a href="https://web.facebook.com/Thirtykobo-105702958464982"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-12 text-center text-lg-right">
                        <div class="copy_right text-center text-lg-center">
                            Copyright © 2021 ThirtyKobo. All Rights Reserved. 
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

   <!-- <div class="cookie_alert">

        <div class="alert alert-light fade show">
            <p>
                We use cookies to enhance your experience. By using Treemium , you agree to our <a href="#">Terms of
                    Use</a> and <a href="#">Privacy
                    Policy</a>
            </p>
            <button class="btn btn-success btn-block" data-dismiss="alert">Accept</button>
        </div>
    </div> -->






    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="./vendor/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="./js/plugins/owl-carousel-init.js"></script>
    <script src="./vendor/scrollit/scrollIt.js"></script>
    <script src="./js/plugins/scrollit-init.js"></script>

    <!-- Chart sparkline plugin files -->
    <script src="./vendor/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="./js/plugins/sparkline-init.js"></script>

    <script src="./vendor/validator/jquery.validate.js"></script>
    <script src="./vendor/validator/validator-init.js"></script>
    <script src="./js/scripts.js"></script>




</body>










<script>

function Initialize() {
  setTimeout(function(){ 
   $.ajax({
     url: 'rates',
     type: 'get',
     success: function(response0){
         console.log(JSON.parse(response0).Airport)
      document.getElementById("airportUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.USD+"</font>";
      document.getElementById("airportEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.EUR+"</font>";
      document.getElementById("airportGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.GBP+"</font>";
      document.getElementById("airportCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CNY+"</font>";
      document.getElementById("airportCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CAD+"</font>";
      document.getElementById("airportCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CHF+"</font>";
      document.getElementById("airportXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.XOF+"</font>";
      document.getElementById("airportMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.MYR+"</font>";
      document.getElementById("airportSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.SAR+"</font>";
      document.getElementById("airportQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.QAR+"</font>";
      

      document.getElementById("CBNairportUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.USDSell+"</font>";
      document.getElementById("CBNairportEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.EURSell+"</font>";
      document.getElementById("CBNairportGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.GBPSell+"</font>";
      document.getElementById("CBNairportCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CNYSell+"</font>";
      document.getElementById("CBNairportCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CADSell+"</font>";
      document.getElementById("CBNairportCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.CHFSell+"</font>";
      document.getElementById("CBNairportXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.XOFSell+"</font>";
      document.getElementById("CBNairportMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.MYRSell+"</font>";
      document.getElementById("CBNairportSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.SARSell+"</font>";
      document.getElementById("CBNairportQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.QARSell+"</font>";
      
      document.getElementById("islandUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.USD+"</font>";
      document.getElementById("islandEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.EUR+"</font>";
      document.getElementById("islandGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.GBP+"</font>";
      document.getElementById("islandCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CNY+"</font>";
      document.getElementById("islandCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CAD+"</font>";
      document.getElementById("islandCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CHF+"</font>";
      document.getElementById("islandXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.XOF+"</font>";
      document.getElementById("islandMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.MYR+"</font>";
      document.getElementById("islandSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.SAR+"</font>";
      document.getElementById("islandQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.QAR+"</font>";

      document.getElementById("CBNislandUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.USDSell+"</font>";
      document.getElementById("CBNislandEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.EURSell+"</font>";
      document.getElementById("CBNislandGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.GBPSell+"</font>";
      document.getElementById("CBNislandCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CNYSell+"</font>";
      document.getElementById("CBNislandCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CADSell+"</font>";
      document.getElementById("CBNislandCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.CHFSell+"</font>";
      document.getElementById("CBNislandXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.XOFSell+"</font>";
      document.getElementById("CBNislandMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.MYRSell+"</font>";
      document.getElementById("CBNislandSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.SARSell+"</font>";
      document.getElementById("CBNislandQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.QARSell+"</font>";
      
      document.getElementById("victoriaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.USD+"</font>";
      document.getElementById("victoriaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.EUR+"</font>";
      document.getElementById("victoriaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.GBP+"</font>";
      document.getElementById("victoriaCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CNY+"</font>";
      document.getElementById("victoriaCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CAD+"</font>";
      document.getElementById("victoriaCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CHF+"</font>";
      document.getElementById("victoriaXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.XOF+"</font>";
      document.getElementById("victoriaMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.MYR+"</font>";
      document.getElementById("victoriaSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.SAR+"</font>";
      document.getElementById("victoriaQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.QAR+"</font>";

      document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.USDSell+"</font>";
      document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.EURSell+"</font>";
      document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.GBPSell+"</font>";
      document.getElementById("CBNvictoriaCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CNYSell+"</font>";
      document.getElementById("CBNvictoriaCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CADSell+"</font>";
      document.getElementById("CBNvictoriaCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.CHFSell+"</font>";
      document.getElementById("CBNvictoriaXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.XOFSell+"</font>";
      document.getElementById("CBNvictoriaMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.MYRSell+"</font>";
      document.getElementById("CBNvictoriaSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.SARSell+"</font>";
      document.getElementById("CBNvictoriaQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.QARSell+"</font>";
      
      document.getElementById("kanoUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.USD+"</font>";
      document.getElementById("kanoEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.EUR+"</font>";
      document.getElementById("kanoGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.GBP+"</font>";
      document.getElementById("kanoCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CNY+"</font>";
      document.getElementById("kanoCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CAD+"</font>";
      document.getElementById("kanoCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CHF+"</font>";
      document.getElementById("kanoXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.XOF+"</font>";
      document.getElementById("kanoMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.MYR+"</font>";
      document.getElementById("kanoSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.SAR+"</font>";
      document.getElementById("kanoQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.QAR+"</font>";

      document.getElementById("CBNkanoUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.USDSell+"</font>";
      document.getElementById("CBNkanoEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.EURSell+"</font>";
      document.getElementById("CBNkanoGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.GBPSell+"</font>";
      document.getElementById("CBNkanoCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CNYSell+"</font>";
      document.getElementById("CBNkanoCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CADSell+"</font>";
      document.getElementById("CBNkanoCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.CHFSell+"</font>";
      document.getElementById("CBNkanoXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.XOFSell+"</font>";
      document.getElementById("CBNkanoMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.MYRSell+"</font>";
      document.getElementById("CBNkanoSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.SARSell+"</font>";
      document.getElementById("CBNkanoQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.QARSell+"</font>";
      
      document.getElementById("abujaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.USD+"</font>";
      document.getElementById("abujaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.EUR+"</font>";
      document.getElementById("abujaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.GBP+"</font>";
      document.getElementById("abujaCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CNY+"</font>";
      document.getElementById("abujaCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CAD+"</font>";
      document.getElementById("abujaCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CHF+"</font>";
      document.getElementById("abujaXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.XOF+"</font>";
      document.getElementById("abujaMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.MYR+"</font>";
      document.getElementById("abujaSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.SAR+"</font>";
      document.getElementById("abujaQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.QAR+"</font>";

      document.getElementById("CBNabujaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.USDSell+"</font>";
      document.getElementById("CBNabujaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.EURSell+"</font>";
      document.getElementById("CBNabujaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.GBPSell+"</font>";
      document.getElementById("CBNabujaCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CNYSell+"</font>";
      document.getElementById("CBNabujaCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CADSell+"</font>";
      document.getElementById("CBNabujaCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.CHFSell+"</font>";
      document.getElementById("CBNabujaXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.XOFSell+"</font>";
      document.getElementById("CBNabujaMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.MYRSell+"</font>";
      document.getElementById("CBNabujaSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.SARSell+"</font>";
      document.getElementById("CBNabujaQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.QARSell+"</font>";



      document.getElementById("cbnUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.USD+"</font>";
      document.getElementById("cbnEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.EUR+"</font>";
      document.getElementById("cbnGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.GBP+"</font>";
      document.getElementById("cbnCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CNY+"</font>";
      document.getElementById("cbnCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CAD+"</font>";
      document.getElementById("cbnCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CHF+"</font>";
      document.getElementById("cbnXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.XOF+"</font>";
      document.getElementById("cbnMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.MYR+"</font>";
      document.getElementById("cbnSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.SAR+"</font>";
      document.getElementById("cbnQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.QAR+"</font>";

      document.getElementById("CBNcbnUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.USDSell+"</font>";
      document.getElementById("CBNcbnEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.EURSell+"</font>";
      document.getElementById("CBNcbnGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.GBPSell+"</font>";
      document.getElementById("CBNcbnCNY").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CNYSell+"</font>";
      document.getElementById("CBNcbnCAD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CADSell+"</font>";
      document.getElementById("CBNcbnCHF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.CHFSell+"</font>";
      document.getElementById("CBNcbnXOF").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.XOFSell+"</font>";
      document.getElementById("CBNcbnMYR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.MYRSell+"</font>";
      document.getElementById("CBNcbnSAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.SARSell+"</font>";
      document.getElementById("CBNcbnQAR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.QARSell+"</font>";
      
      
      

     }
   });

   }, 15);
};
Initialize();


function fetchdata(){
    $.ajax({
     url: 'rates',
     type: 'get',
     success: function(response){  


        setInterval(function () {
         $.ajax({
     url: 'rates',
     type: 'get',
     success: function(responseJson){ 


        if(JSON.parse(response).Airport.USD > JSON.parse(responseJson).Airport.USD){
         document.getElementById("airportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USD+"</font>";
         document.getElementById("CBNairportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
        }else{
         document.getElementById("airportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USD+"</font>";
         document.getElementById("CBNairportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
        }
        if(JSON.parse(response).Airport.EUR > JSON.parse(responseJson).Airport.EUR){
         document.getElementById("airportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
         document.getElementById("CBNairportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
        }else{
         document.getElementById("airportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
         document.getElementById("CBNairportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
        }
        if(JSON.parse(response).Airport.GBP > JSON.parse(responseJson).Airport.GBP){
         document.getElementById("airportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
         document.getElementById("CBNairportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
        }else{
         document.getElementById("airportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
         document.getElementById("CBNairportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
        }
        if(JSON.parse(response).Airport.CNY > JSON.parse(responseJson).Airport.CNY){
         document.getElementById("airportCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CNY+"</font>";
         document.getElementById("CBNairportCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CNYSell+"</font>";
        }else{
         document.getElementById("airportCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CNY+"</font>";
         document.getElementById("CBNairportCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CNYSell+"</font>";
        }
        if(JSON.parse(response).Airport.CAD > JSON.parse(responseJson).Airport.CAD){
         document.getElementById("airportCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CAD+"</font>";
         document.getElementById("CBNairportCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CADSell+"</font>";
        }else{
         document.getElementById("airportCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CAD+"</font>";
         document.getElementById("CBNairportCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CADSell+"</font>";
        }
        if(JSON.parse(response).Airport.CHF > JSON.parse(responseJson).Airport.CHF){
         document.getElementById("airportCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CHF+"</font>";
         document.getElementById("CBNairportCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CHFSell+"</font>";
        }else{
         document.getElementById("airportCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CHF+"</font>";
         document.getElementById("CBNairportCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CHFSell+"</font>";
        }
        if(JSON.parse(response).Airport.XOF > JSON.parse(responseJson).Airport.XOF){
         document.getElementById("airportXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.XOF+"</font>";
         document.getElementById("CBNairportXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.XOFSell+"</font>";
        }else{
         document.getElementById("airportXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.XOF+"</font>";
         document.getElementById("CBNairportXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.XOFSell+"</font>";
        }
        if(JSON.parse(response).Airport.MYR > JSON.parse(responseJson).Airport.MYR){
         document.getElementById("airportMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.MYR+"</font>";
         document.getElementById("CBNairportMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.MYRSell+"</font>";
        }else{
         document.getElementById("airportMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.MYR+"</font>";
         document.getElementById("CBNairportMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.MYRSell+"</font>";
        }
        if(JSON.parse(response).Airport.SAR > JSON.parse(responseJson).Airport.SAR){
         document.getElementById("airportSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.SAR+"</font>";
         document.getElementById("CBNairportSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.SARSell+"</font>";
        }else{
         document.getElementById("airportSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.SAR+"</font>";
         document.getElementById("CBNairportSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.SARSell+"</font>";
        }
        if(JSON.parse(response).Airport.QAR > JSON.parse(responseJson).Airport.QAR){
         document.getElementById("airportQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.QAR+"</font>";
         document.getElementById("CBNairportQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.QARSell+"</font>";
        }else{
         document.getElementById("airportQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.QAR+"</font>";
         document.getElementById("CBNairportQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Island.USD > JSON.parse(responseJson).Island.USD){
         document.getElementById("islandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USD+"</font>";
         document.getElementById("CBNislandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
        }else{
         document.getElementById("islandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USD+"</font>";
         document.getElementById("CBNislandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
        }
        if(JSON.parse(response).Island.EUR > JSON.parse(responseJson).Island.EUR){
         document.getElementById("islandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EUR+"</font>";
         document.getElementById("CBNislandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
        }else{
         document.getElementById("islandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EUR+"</font>";
         document.getElementById("CBNislandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
        }
        if(JSON.parse(response).Island.GBP > JSON.parse(responseJson).Island.GBP){
         document.getElementById("islandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBP+"</font>";
         document.getElementById("CBNislandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
        }else{
         document.getElementById("islandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBP+"</font>";
         document.getElementById("CBNislandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
        }
        if(JSON.parse(response).Island.CNY > JSON.parse(responseJson).Island.CNY){
         document.getElementById("islandCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CNY+"</font>";
         document.getElementById("CBNislandCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CNYSell+"</font>";
        }else{
         document.getElementById("islandCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CNY+"</font>";
         document.getElementById("CBNislandCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CNYSell+"</font>";
        }
        if(JSON.parse(response).Island.CAD > JSON.parse(responseJson).Island.CAD){
         document.getElementById("islandCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CAD+"</font>";
         document.getElementById("CBNislandCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CADSell+"</font>";
        }else{
         document.getElementById("islandCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CAD+"</font>";
         document.getElementById("CBNislandCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CADSell+"</font>";
        }
        if(JSON.parse(response).Island.CHF > JSON.parse(responseJson).Island.CHF){
         document.getElementById("islandCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CHF+"</font>";
         document.getElementById("CBNislandCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CHFSell+"</font>";
        }else{
         document.getElementById("islandCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CHF+"</font>";
         document.getElementById("CBNislandCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CHFSell+"</font>";
        }
        if(JSON.parse(response).Island.XOF > JSON.parse(responseJson).Island.XOF){
         document.getElementById("islandXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.XOF+"</font>";
         document.getElementById("CBNislandXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.XOFSell+"</font>";
        }else{
         document.getElementById("islandXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.XOF+"</font>";
         document.getElementById("CBNislandXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.XOFSell+"</font>";
        }
        if(JSON.parse(response).Island.MYR > JSON.parse(responseJson).Island.MYR){
         document.getElementById("islandMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.MYR+"</font>";
         document.getElementById("CBNislandMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.MYRSell+"</font>";
        }else{
         document.getElementById("islandMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.MYR+"</font>";
         document.getElementById("CBNislandMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.MYRSell+"</font>";
        }
        if(JSON.parse(response).Island.SAR > JSON.parse(responseJson).Island.SAR){
         document.getElementById("islandSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.SAR+"</font>";
         document.getElementById("CBNislandSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.SARSell+"</font>";
        }else{
         document.getElementById("islandSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.SAR+"</font>";
         document.getElementById("CBNislandSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.SARSell+"</font>";
        }
        if(JSON.parse(response).Island.QAR > JSON.parse(responseJson).Island.QAR){
         document.getElementById("islandQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.QAR+"</font>";
         document.getElementById("CBNislandQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.QARSell+"</font>";
        }else{
         document.getElementById("islandQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.QAR+"</font>";
         document.getElementById("CBNislandQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Victoria.USD > JSON.parse(responseJson).Victoria.USD){
         document.getElementById("victoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
         document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
        }else{
         document.getElementById("victoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
         document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
        }
        if(JSON.parse(response).Victoria.EUR > JSON.parse(responseJson).Victoria.EUR){
         document.getElementById("victoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
         document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
        }else{
         document.getElementById("victoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
         document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
        }
        if(JSON.parse(response).Victoria.GBP > JSON.parse(responseJson).Victoria.GBP){
         document.getElementById("victoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
         document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
        }else{
         document.getElementById("victoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
         document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
        }
        
        if(JSON.parse(response).Victoria.CNY > JSON.parse(responseJson).Victoria.CNY){
         document.getElementById("victoriaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CNY+"</font>";
         document.getElementById("CBNvictoriaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CNYSell+"</font>";
        }else{
         document.getElementById("victoriaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CNY+"</font>";
         document.getElementById("CBNvictoriaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CNYSell+"</font>";
        }
        if(JSON.parse(response).Victoria.CAD > JSON.parse(responseJson).Victoria.CAD){
         document.getElementById("victoriaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CAD+"</font>";
         document.getElementById("CBNvictoriaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CADSell+"</font>";
        }else{
         document.getElementById("victoriaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CAD+"</font>";
         document.getElementById("CBNvictoriaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CADSell+"</font>";
        }
        if(JSON.parse(response).Victoria.CHF > JSON.parse(responseJson).Victoria.CHF){
         document.getElementById("victoriaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CHF+"</font>";
         document.getElementById("CBNvictoriaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CHFSell+"</font>";
        }else{
         document.getElementById("victoriaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CHF+"</font>";
         document.getElementById("CBNvictoriaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CHFSell+"</font>";
        }
        if(JSON.parse(response).Victoria.XOF > JSON.parse(responseJson).Victoria.XOF){
         document.getElementById("victoriaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.XOF+"</font>";
         document.getElementById("CBNvictoriaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.XOFSell+"</font>";
        }else{
         document.getElementById("victoriaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.XOF+"</font>";
         document.getElementById("CBNvictoriaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.XOFSell+"</font>";
        }
        if(JSON.parse(response).Victoria.MYR > JSON.parse(responseJson).Victoria.MYR){
         document.getElementById("victoriaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.MYR+"</font>";
         document.getElementById("CBNvictoriaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.MYRSell+"</font>";
        }else{
         document.getElementById("victoriaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.MYR+"</font>";
         document.getElementById("CBNvictoriaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.MYRSell+"</font>";
        }
        if(JSON.parse(response).Victoria.SAR > JSON.parse(responseJson).Victoria.SAR){
         document.getElementById("victoriaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.SAR+"</font>";
         document.getElementById("CBNvictoriaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.SARSell+"</font>";
        }else{
         document.getElementById("victoriaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.SAR+"</font>";
         document.getElementById("CBNvictoriaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.SARSell+"</font>";
        }
        if(JSON.parse(response).Victoria.QAR > JSON.parse(responseJson).Victoria.QAR){
         document.getElementById("victoriaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.QAR+"</font>";
         document.getElementById("CBNvictoriaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.QARSell+"</font>";
        }else{
         document.getElementById("victoriaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.QAR+"</font>";
         document.getElementById("CBNvictoriaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Kano.USD > JSON.parse(responseJson).Kano.USD){
         document.getElementById("kanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USD+"</font>";
         document.getElementById("CBNkanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
        }else{
         document.getElementById("kanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USD+"</font>";
         document.getElementById("CBNkanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
        }
        if(JSON.parse(response).Kano.EUR > JSON.parse(responseJson).Kano.EUR){
         document.getElementById("kanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
         document.getElementById("CBNkanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
        }else{
         document.getElementById("kanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
         document.getElementById("CBNkanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
        }
        if(JSON.parse(response).Kano.GBP > JSON.parse(responseJson).Kano.GBP){
         document.getElementById("kanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
         document.getElementById("CBNkanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
        }else{
         document.getElementById("kanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
         document.getElementById("CBNkanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
        }

        if(JSON.parse(response).Kano.CNY > JSON.parse(responseJson).Kano.CNY){
         document.getElementById("kanoCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CNY+"</font>";
         document.getElementById("CBNkanoCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CNYSell+"</font>";
        }else{
         document.getElementById("kanoCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CNY+"</font>";
         document.getElementById("CBNkanoCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CNYSell+"</font>";
        }
        if(JSON.parse(response).Kano.CAD > JSON.parse(responseJson).Kano.CAD){
         document.getElementById("kanoCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CAD+"</font>";
         document.getElementById("CBNkanoCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CADSell+"</font>";
        }else{
         document.getElementById("kanoCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CAD+"</font>";
         document.getElementById("CBNkanoCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CADSell+"</font>";
        }
        if(JSON.parse(response).Kano.CHF > JSON.parse(responseJson).Kano.CHF){
         document.getElementById("kanoCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CHF+"</font>";
         document.getElementById("CBNkanoCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CHFSell+"</font>";
        }else{
         document.getElementById("kanoCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CHF+"</font>";
         document.getElementById("CBNkanoCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CHFSell+"</font>";
        }
        if(JSON.parse(response).Kano.XOF > JSON.parse(responseJson).Kano.XOF){
         document.getElementById("kanoXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.XOF+"</font>";
         document.getElementById("CBNkanoXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.XOFSell+"</font>";
        }else{
         document.getElementById("kanoXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.XOF+"</font>";
         document.getElementById("CBNkanoXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.XOFSell+"</font>";
        }
        if(JSON.parse(response).Kano.MYR > JSON.parse(responseJson).Kano.MYR){
         document.getElementById("kanoMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.MYR+"</font>";
         document.getElementById("CBNkanoMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.MYRSell+"</font>";
        }else{
         document.getElementById("kanoMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.MYR+"</font>";
         document.getElementById("CBNkanoMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.MYRSell+"</font>";
        }
        if(JSON.parse(response).Kano.SAR > JSON.parse(responseJson).Kano.SAR){
         document.getElementById("kanoSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.SAR+"</font>";
         document.getElementById("CBNkanoSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.SARSell+"</font>";
        }else{
         document.getElementById("kanoSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.SAR+"</font>";
         document.getElementById("CBNkanoSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.SARSell+"</font>";
        }
        if(JSON.parse(response).Kano.QAR > JSON.parse(responseJson).Kano.QAR){
         document.getElementById("kanoQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.QAR+"</font>";
         document.getElementById("CBNkanoQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.QARSell+"</font>";
        }else{
         document.getElementById("kanoQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.QAR+"</font>";
         document.getElementById("CBNkanoQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Abuja.USD > JSON.parse(responseJson).Abuja.USD){
         document.getElementById("abujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
         document.getElementById("CBNabujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
        }else{
         document.getElementById("abujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
         document.getElementById("CBNabujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
        }
        if(JSON.parse(response).Abuja.EUR > JSON.parse(responseJson).Abuja.EUR){
         document.getElementById("abujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNabujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }else{
         document.getElementById("abujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNabujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }
        if(JSON.parse(response).Abuja.GBP > JSON.parse(responseJson).Abuja.GBP){
         document.getElementById("abujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
         document.getElementById("CBNabujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
        }else{
         document.getElementById("abujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
         document.getElementById("CBNabujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
        }
       
        if(JSON.parse(response).Abuja.CNY > JSON.parse(responseJson).Abuja.CNY){
         document.getElementById("abujaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CNY+"</font>";
         document.getElementById("CBNabujaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CNYSell+"</font>";
        }else{
         document.getElementById("abujaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CNY+"</font>";
         document.getElementById("CBNabujaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CNYSell+"</font>";
        }
        if(JSON.parse(response).Abuja.CAD > JSON.parse(responseJson).Abuja.CAD){
         document.getElementById("abujaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CAD+"</font>";
         document.getElementById("CBNabujaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CADSell+"</font>";
        }else{
         document.getElementById("abujaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CAD+"</font>";
         document.getElementById("CBNabujaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CADSell+"</font>";
        }
        if(JSON.parse(response).Abuja.CHF > JSON.parse(responseJson).Abuja.CHF){
         document.getElementById("abujaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CHF+"</font>";
         document.getElementById("CBNabujaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CHFSell+"</font>";
        }else{
         document.getElementById("abujaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CHF+"</font>";
         document.getElementById("CBNabujaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CHFSell+"</font>";
        }
        if(JSON.parse(response).Abuja.XOF > JSON.parse(responseJson).Abuja.XOF){
         document.getElementById("abujaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.XOF+"</font>";
         document.getElementById("CBNabujaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.XOFSell+"</font>";
        }else{
         document.getElementById("abujaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.XOF+"</font>";
         document.getElementById("CBNabujaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.XOFSell+"</font>";
        }
        if(JSON.parse(response).Abuja.MYR > JSON.parse(responseJson).Abuja.MYR){
         document.getElementById("abujaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.MYR+"</font>";
         document.getElementById("CBNabujaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.MYRSell+"</font>";
        }else{
         document.getElementById("abujaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.MYR+"</font>";
         document.getElementById("CBNabujaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.MYRSell+"</font>";
        }
        if(JSON.parse(response).Abuja.SAR > JSON.parse(responseJson).Abuja.SAR){
         document.getElementById("abujaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.SAR+"</font>";
         document.getElementById("CBNabujaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.SARSell+"</font>";
        }else{
         document.getElementById("abujaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.SAR+"</font>";
         document.getElementById("CBNabujaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.SARSell+"</font>";
        }
        if(JSON.parse(response).Abuja.QAR > JSON.parse(responseJson).Abuja.QAR){
         document.getElementById("abujaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.QAR+"</font>";
         document.getElementById("CBNabujaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.QARSell+"</font>";
        }else{
         document.getElementById("abujaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.QAR+"</font>";
         document.getElementById("CBNabujaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.QARSell+"</font>";
        }
         //

         if(JSON.parse(response).CBN.USD > JSON.parse(responseJson).CBN.USD){
         document.getElementById("cbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USD+"</font>";
         document.getElementById("CBNcbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
        }else{
         document.getElementById("cbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USD+"</font>";
         document.getElementById("CBNcbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
        }
        if(JSON.parse(response).CBN.EUR > JSON.parse(responseJson).Abuja.EUR){
         document.getElementById("cbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNcbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }else{
         document.getElementById("cbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EUR+"</font>";
         document.getElementById("CBNcbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EURSell+"</font>";
        }
        if(JSON.parse(response).CBN.GBP > JSON.parse(responseJson).Abuja.GBP){
         document.getElementById("cbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
         document.getElementById("CBNcbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
        }else{
         document.getElementById("cbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
         document.getElementById("CBNcbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
        }
        
        if(JSON.parse(response).CBN.CNY > JSON.parse(responseJson).Abuja.CNY){
         document.getElementById("cbnCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CNY+"</font>";
         document.getElementById("CBNcbnCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CNYSell+"</font>";
        }else{
         document.getElementById("cbnCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CNY+"</font>";
         document.getElementById("CBNcbnCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CNYSell+"</font>";
        }
        if(JSON.parse(response).CBN.CAD > JSON.parse(responseJson).Abuja.CAD){
         document.getElementById("cbnCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CAD+"</font>";
         document.getElementById("CBNcbnCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CADSell+"</font>";
        }else{
         document.getElementById("cbnCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CAD+"</font>";
         document.getElementById("CBNcbnCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CADSell+"</font>";
        }
        if(JSON.parse(response).CBN.CHF > JSON.parse(responseJson).Abuja.CHF){
         document.getElementById("cbnCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CHF+"</font>";
         document.getElementById("CBNcbnCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CHFSell+"</font>";
        }else{
         document.getElementById("cbnCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CHF+"</font>";
         document.getElementById("CBNcbnCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CHFSell+"</font>";
        }
        if(JSON.parse(response).CBN.XOF > JSON.parse(responseJson).Abuja.XOF){
         document.getElementById("cbnXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.XOF+"</font>";
         document.getElementById("CBNcbnXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.XOFSell+"</font>";
        }else{
         document.getElementById("cbnXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.XOF+"</font>";
         document.getElementById("CBNcbnXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.XOFSell+"</font>";
        }
        if(JSON.parse(response).CBN.MYR > JSON.parse(responseJson).Abuja.MYR){
         document.getElementById("cbnMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.MYR+"</font>";
         document.getElementById("CBNcbnMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.MYRSell+"</font>";
        }else{
         document.getElementById("cbnMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.MYR+"</font>";
         document.getElementById("CBNcbnMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.MYRSell+"</font>";
        }
        if(JSON.parse(response).CBN.SAR > JSON.parse(responseJson).Abuja.SAR){
         document.getElementById("cbnSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.SAR+"</font>";
         document.getElementById("CBNcbnSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.SARSell+"</font>";
        }else{
         document.getElementById("cbnSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.SAR+"</font>";
         document.getElementById("CBNcbnSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.SARSell+"</font>";
        }
        if(JSON.parse(response).CBN.QAR > JSON.parse(responseJson).Abuja.QAR){
         document.getElementById("cbnQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.QAR+"</font>";
         document.getElementById("CBNcbnQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.QARSell+"</font>";
        }else{
         document.getElementById("cbnQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.QAR+"</font>";
         document.getElementById("CBNcbnQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.QARSell+"</font>";
        }


         }
   })

        }, 15000);


     }
    });
   }



   function fetchdata1(){
    $.ajax({
     url: 'rates',
     type: 'get',
     success: function(response){  


        setTimeout(function () {
         $.ajax({
     url: 'rates',
     type: 'get',
     success: function(responseJson){ 


        if(JSON.parse(response).Airport.USD > JSON.parse(responseJson).Airport.USD){
         document.getElementById("airportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USD+"</font>";
         document.getElementById("CBNairportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
        }else{
         document.getElementById("airportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USD+"</font>";
         document.getElementById("CBNairportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
        }
        if(JSON.parse(response).Airport.EUR > JSON.parse(responseJson).Airport.EUR){
         document.getElementById("airportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
         document.getElementById("CBNairportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
        }else{
         document.getElementById("airportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
         document.getElementById("CBNairportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
        }
        if(JSON.parse(response).Airport.GBP > JSON.parse(responseJson).Airport.GBP){
         document.getElementById("airportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
         document.getElementById("CBNairportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
        }else{
         document.getElementById("airportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
         document.getElementById("CBNairportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
        }
        if(JSON.parse(response).Airport.CNY > JSON.parse(responseJson).Airport.CNY){
         document.getElementById("airportCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CNY+"</font>";
         document.getElementById("CBNairportCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CNYSell+"</font>";
        }else{
         document.getElementById("airportCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CNY+"</font>";
         document.getElementById("CBNairportCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CNYSell+"</font>";
        }
        if(JSON.parse(response).Airport.CAD > JSON.parse(responseJson).Airport.CAD){
         document.getElementById("airportCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CAD+"</font>";
         document.getElementById("CBNairportCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CADSell+"</font>";
        }else{
         document.getElementById("airportCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CAD+"</font>";
         document.getElementById("CBNairportCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CADSell+"</font>";
        }
        if(JSON.parse(response).Airport.CHF > JSON.parse(responseJson).Airport.CHF){
         document.getElementById("airportCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CHF+"</font>";
         document.getElementById("CBNairportCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.CHFSell+"</font>";
        }else{
         document.getElementById("airportCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CHF+"</font>";
         document.getElementById("CBNairportCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.CHFSell+"</font>";
        }
        if(JSON.parse(response).Airport.XOF > JSON.parse(responseJson).Airport.XOF){
         document.getElementById("airportXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.XOF+"</font>";
         document.getElementById("CBNairportXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.XOFSell+"</font>";
        }else{
         document.getElementById("airportXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.XOF+"</font>";
         document.getElementById("CBNairportXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.XOFSell+"</font>";
        }
        if(JSON.parse(response).Airport.MYR > JSON.parse(responseJson).Airport.MYR){
         document.getElementById("airportMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.MYR+"</font>";
         document.getElementById("CBNairportMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.MYRSell+"</font>";
        }else{
         document.getElementById("airportMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.MYR+"</font>";
         document.getElementById("CBNairportMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.MYRSell+"</font>";
        }
        if(JSON.parse(response).Airport.SAR > JSON.parse(responseJson).Airport.SAR){
         document.getElementById("airportSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.SAR+"</font>";
         document.getElementById("CBNairportSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.SARSell+"</font>";
        }else{
         document.getElementById("airportSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.SAR+"</font>";
         document.getElementById("CBNairportSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.SARSell+"</font>";
        }
        if(JSON.parse(response).Airport.QAR > JSON.parse(responseJson).Airport.QAR){
         document.getElementById("airportQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.QAR+"</font>";
         document.getElementById("CBNairportQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.QARSell+"</font>";
        }else{
         document.getElementById("airportQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.QAR+"</font>";
         document.getElementById("CBNairportQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Island.USD > JSON.parse(responseJson).Island.USD){
         document.getElementById("islandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USD+"</font>";
         document.getElementById("CBNislandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
        }else{
         document.getElementById("islandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USD+"</font>";
         document.getElementById("CBNislandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
        }
        if(JSON.parse(response).Island.EUR > JSON.parse(responseJson).Island.EUR){
         document.getElementById("islandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EUR+"</font>";
         document.getElementById("CBNislandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
        }else{
         document.getElementById("islandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EUR+"</font>";
         document.getElementById("CBNislandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
        }
        if(JSON.parse(response).Island.GBP > JSON.parse(responseJson).Island.GBP){
         document.getElementById("islandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBP+"</font>";
         document.getElementById("CBNislandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
        }else{
         document.getElementById("islandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBP+"</font>";
         document.getElementById("CBNislandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
        }
        if(JSON.parse(response).Island.CNY > JSON.parse(responseJson).Island.CNY){
         document.getElementById("islandCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CNY+"</font>";
         document.getElementById("CBNislandCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CNYSell+"</font>";
        }else{
         document.getElementById("islandCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CNY+"</font>";
         document.getElementById("CBNislandCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CNYSell+"</font>";
        }
        if(JSON.parse(response).Island.CAD > JSON.parse(responseJson).Island.CAD){
         document.getElementById("islandCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CAD+"</font>";
         document.getElementById("CBNislandCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CADSell+"</font>";
        }else{
         document.getElementById("islandCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CAD+"</font>";
         document.getElementById("CBNislandCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CADSell+"</font>";
        }
        if(JSON.parse(response).Island.CHF > JSON.parse(responseJson).Island.CHF){
         document.getElementById("islandCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CHF+"</font>";
         document.getElementById("CBNislandCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.CHFSell+"</font>";
        }else{
         document.getElementById("islandCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CHF+"</font>";
         document.getElementById("CBNislandCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.CHFSell+"</font>";
        }
        if(JSON.parse(response).Island.XOF > JSON.parse(responseJson).Island.XOF){
         document.getElementById("islandXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.XOF+"</font>";
         document.getElementById("CBNislandXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.XOFSell+"</font>";
        }else{
         document.getElementById("islandXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.XOF+"</font>";
         document.getElementById("CBNislandXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.XOFSell+"</font>";
        }
        if(JSON.parse(response).Island.MYR > JSON.parse(responseJson).Island.MYR){
         document.getElementById("islandMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.MYR+"</font>";
         document.getElementById("CBNislandMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.MYRSell+"</font>";
        }else{
         document.getElementById("islandMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.MYR+"</font>";
         document.getElementById("CBNislandMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.MYRSell+"</font>";
        }
        if(JSON.parse(response).Island.SAR > JSON.parse(responseJson).Island.SAR){
         document.getElementById("islandSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.SAR+"</font>";
         document.getElementById("CBNislandSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.SARSell+"</font>";
        }else{
         document.getElementById("islandSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.SAR+"</font>";
         document.getElementById("CBNislandSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.SARSell+"</font>";
        }
        if(JSON.parse(response).Island.QAR > JSON.parse(responseJson).Island.QAR){
         document.getElementById("islandQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.QAR+"</font>";
         document.getElementById("CBNislandQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.QARSell+"</font>";
        }else{
         document.getElementById("islandQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.QAR+"</font>";
         document.getElementById("CBNislandQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Victoria.USD > JSON.parse(responseJson).Victoria.USD){
         document.getElementById("victoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
         document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
        }else{
         document.getElementById("victoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
         document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
        }
        if(JSON.parse(response).Victoria.EUR > JSON.parse(responseJson).Victoria.EUR){
         document.getElementById("victoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
         document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
        }else{
         document.getElementById("victoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
         document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
        }
        if(JSON.parse(response).Victoria.GBP > JSON.parse(responseJson).Victoria.GBP){
         document.getElementById("victoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
         document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
        }else{
         document.getElementById("victoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
         document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
        }
        
        if(JSON.parse(response).Victoria.CNY > JSON.parse(responseJson).Victoria.CNY){
         document.getElementById("victoriaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CNY+"</font>";
         document.getElementById("CBNvictoriaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CNYSell+"</font>";
        }else{
         document.getElementById("victoriaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CNY+"</font>";
         document.getElementById("CBNvictoriaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CNYSell+"</font>";
        }
        if(JSON.parse(response).Victoria.CAD > JSON.parse(responseJson).Victoria.CAD){
         document.getElementById("victoriaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CAD+"</font>";
         document.getElementById("CBNvictoriaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CADSell+"</font>";
        }else{
         document.getElementById("victoriaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CAD+"</font>";
         document.getElementById("CBNvictoriaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CADSell+"</font>";
        }
        if(JSON.parse(response).Victoria.CHF > JSON.parse(responseJson).Victoria.CHF){
         document.getElementById("victoriaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CHF+"</font>";
         document.getElementById("CBNvictoriaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.CHFSell+"</font>";
        }else{
         document.getElementById("victoriaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CHF+"</font>";
         document.getElementById("CBNvictoriaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.CHFSell+"</font>";
        }
        if(JSON.parse(response).Victoria.XOF > JSON.parse(responseJson).Victoria.XOF){
         document.getElementById("victoriaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.XOF+"</font>";
         document.getElementById("CBNvictoriaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.XOFSell+"</font>";
        }else{
         document.getElementById("victoriaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.XOF+"</font>";
         document.getElementById("CBNvictoriaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.XOFSell+"</font>";
        }
        if(JSON.parse(response).Victoria.MYR > JSON.parse(responseJson).Victoria.MYR){
         document.getElementById("victoriaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.MYR+"</font>";
         document.getElementById("CBNvictoriaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.MYRSell+"</font>";
        }else{
         document.getElementById("victoriaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.MYR+"</font>";
         document.getElementById("CBNvictoriaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.MYRSell+"</font>";
        }
        if(JSON.parse(response).Victoria.SAR > JSON.parse(responseJson).Victoria.SAR){
         document.getElementById("victoriaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.SAR+"</font>";
         document.getElementById("CBNvictoriaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.SARSell+"</font>";
        }else{
         document.getElementById("victoriaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.SAR+"</font>";
         document.getElementById("CBNvictoriaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.SARSell+"</font>";
        }
        if(JSON.parse(response).Victoria.QAR > JSON.parse(responseJson).Victoria.QAR){
         document.getElementById("victoriaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.QAR+"</font>";
         document.getElementById("CBNvictoriaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.QARSell+"</font>";
        }else{
         document.getElementById("victoriaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.QAR+"</font>";
         document.getElementById("CBNvictoriaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Kano.USD > JSON.parse(responseJson).Kano.USD){
         document.getElementById("kanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USD+"</font>";
         document.getElementById("CBNkanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
        }else{
         document.getElementById("kanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USD+"</font>";
         document.getElementById("CBNkanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
        }
        if(JSON.parse(response).Kano.EUR > JSON.parse(responseJson).Kano.EUR){
         document.getElementById("kanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
         document.getElementById("CBNkanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
        }else{
         document.getElementById("kanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
         document.getElementById("CBNkanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
        }
        if(JSON.parse(response).Kano.GBP > JSON.parse(responseJson).Kano.GBP){
         document.getElementById("kanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
         document.getElementById("CBNkanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
        }else{
         document.getElementById("kanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
         document.getElementById("CBNkanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
        }

        if(JSON.parse(response).Kano.CNY > JSON.parse(responseJson).Kano.CNY){
         document.getElementById("kanoCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CNY+"</font>";
         document.getElementById("CBNkanoCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CNYSell+"</font>";
        }else{
         document.getElementById("kanoCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CNY+"</font>";
         document.getElementById("CBNkanoCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CNYSell+"</font>";
        }
        if(JSON.parse(response).Kano.CAD > JSON.parse(responseJson).Kano.CAD){
         document.getElementById("kanoCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CAD+"</font>";
         document.getElementById("CBNkanoCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CADSell+"</font>";
        }else{
         document.getElementById("kanoCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CAD+"</font>";
         document.getElementById("CBNkanoCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CADSell+"</font>";
        }
        if(JSON.parse(response).Kano.CHF > JSON.parse(responseJson).Kano.CHF){
         document.getElementById("kanoCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CHF+"</font>";
         document.getElementById("CBNkanoCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.CHFSell+"</font>";
        }else{
         document.getElementById("kanoCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CHF+"</font>";
         document.getElementById("CBNkanoCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.CHFSell+"</font>";
        }
        if(JSON.parse(response).Kano.XOF > JSON.parse(responseJson).Kano.XOF){
         document.getElementById("kanoXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.XOF+"</font>";
         document.getElementById("CBNkanoXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.XOFSell+"</font>";
        }else{
         document.getElementById("kanoXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.XOF+"</font>";
         document.getElementById("CBNkanoXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.XOFSell+"</font>";
        }
        if(JSON.parse(response).Kano.MYR > JSON.parse(responseJson).Kano.MYR){
         document.getElementById("kanoMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.MYR+"</font>";
         document.getElementById("CBNkanoMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.MYRSell+"</font>";
        }else{
         document.getElementById("kanoMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.MYR+"</font>";
         document.getElementById("CBNkanoMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.MYRSell+"</font>";
        }
        if(JSON.parse(response).Kano.SAR > JSON.parse(responseJson).Kano.SAR){
         document.getElementById("kanoSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.SAR+"</font>";
         document.getElementById("CBNkanoSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.SARSell+"</font>";
        }else{
         document.getElementById("kanoSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.SAR+"</font>";
         document.getElementById("CBNkanoSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.SARSell+"</font>";
        }
        if(JSON.parse(response).Kano.QAR > JSON.parse(responseJson).Kano.QAR){
         document.getElementById("kanoQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.QAR+"</font>";
         document.getElementById("CBNkanoQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.QARSell+"</font>";
        }else{
         document.getElementById("kanoQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.QAR+"</font>";
         document.getElementById("CBNkanoQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.QARSell+"</font>";
        }

        //

        if(JSON.parse(response).Abuja.USD > JSON.parse(responseJson).Abuja.USD){
         document.getElementById("abujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
         document.getElementById("CBNabujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
        }else{
         document.getElementById("abujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
         document.getElementById("CBNabujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
        }
        if(JSON.parse(response).Abuja.EUR > JSON.parse(responseJson).Abuja.EUR){
         document.getElementById("abujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNabujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }else{
         document.getElementById("abujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNabujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }
        if(JSON.parse(response).Abuja.GBP > JSON.parse(responseJson).Abuja.GBP){
         document.getElementById("abujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
         document.getElementById("CBNabujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
        }else{
         document.getElementById("abujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
         document.getElementById("CBNabujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
        }
       
        if(JSON.parse(response).Abuja.CNY > JSON.parse(responseJson).Abuja.CNY){
         document.getElementById("abujaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CNY+"</font>";
         document.getElementById("CBNabujaCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CNYSell+"</font>";
        }else{
         document.getElementById("abujaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CNY+"</font>";
         document.getElementById("CBNabujaCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CNYSell+"</font>";
        }
        if(JSON.parse(response).Abuja.CAD > JSON.parse(responseJson).Abuja.CAD){
         document.getElementById("abujaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CAD+"</font>";
         document.getElementById("CBNabujaCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CADSell+"</font>";
        }else{
         document.getElementById("abujaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CAD+"</font>";
         document.getElementById("CBNabujaCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CADSell+"</font>";
        }
        if(JSON.parse(response).Abuja.CHF > JSON.parse(responseJson).Abuja.CHF){
         document.getElementById("abujaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CHF+"</font>";
         document.getElementById("CBNabujaCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.CHFSell+"</font>";
        }else{
         document.getElementById("abujaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CHF+"</font>";
         document.getElementById("CBNabujaCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.CHFSell+"</font>";
        }
        if(JSON.parse(response).Abuja.XOF > JSON.parse(responseJson).Abuja.XOF){
         document.getElementById("abujaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.XOF+"</font>";
         document.getElementById("CBNabujaXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.XOFSell+"</font>";
        }else{
         document.getElementById("abujaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.XOF+"</font>";
         document.getElementById("CBNabujaXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.XOFSell+"</font>";
        }
        if(JSON.parse(response).Abuja.MYR > JSON.parse(responseJson).Abuja.MYR){
         document.getElementById("abujaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.MYR+"</font>";
         document.getElementById("CBNabujaMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.MYRSell+"</font>";
        }else{
         document.getElementById("abujaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.MYR+"</font>";
         document.getElementById("CBNabujaMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.MYRSell+"</font>";
        }
        if(JSON.parse(response).Abuja.SAR > JSON.parse(responseJson).Abuja.SAR){
         document.getElementById("abujaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.SAR+"</font>";
         document.getElementById("CBNabujaSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.SARSell+"</font>";
        }else{
         document.getElementById("abujaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.SAR+"</font>";
         document.getElementById("CBNabujaSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.SARSell+"</font>";
        }
        if(JSON.parse(response).Abuja.QAR > JSON.parse(responseJson).Abuja.QAR){
         document.getElementById("abujaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.QAR+"</font>";
         document.getElementById("CBNabujaQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.QARSell+"</font>";
        }else{
         document.getElementById("abujaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.QAR+"</font>";
         document.getElementById("CBNabujaQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.QARSell+"</font>";
        }
         //

         if(JSON.parse(response).CBN.USD > JSON.parse(responseJson).CBN.USD){
         document.getElementById("cbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USD+"</font>";
         document.getElementById("CBNcbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
        }else{
         document.getElementById("cbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USD+"</font>";
         document.getElementById("CBNcbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
        }
        if(JSON.parse(response).CBN.EUR > JSON.parse(responseJson).Abuja.EUR){
         document.getElementById("cbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
         document.getElementById("CBNcbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
        }else{
         document.getElementById("cbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EUR+"</font>";
         document.getElementById("CBNcbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EURSell+"</font>";
        }
        if(JSON.parse(response).CBN.GBP > JSON.parse(responseJson).Abuja.GBP){
         document.getElementById("cbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
         document.getElementById("CBNcbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
        }else{
         document.getElementById("cbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
         document.getElementById("CBNcbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
        }
        
        if(JSON.parse(response).CBN.CNY > JSON.parse(responseJson).Abuja.CNY){
         document.getElementById("cbnCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CNY+"</font>";
         document.getElementById("CBNcbnCNY").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CNYSell+"</font>";
        }else{
         document.getElementById("cbnCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CNY+"</font>";
         document.getElementById("CBNcbnCNY").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CNYSell+"</font>";
        }
        if(JSON.parse(response).CBN.CAD > JSON.parse(responseJson).Abuja.CAD){
         document.getElementById("cbnCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CAD+"</font>";
         document.getElementById("CBNcbnCAD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CADSell+"</font>";
        }else{
         document.getElementById("cbnCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CAD+"</font>";
         document.getElementById("CBNcbnCAD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CADSell+"</font>";
        }
        if(JSON.parse(response).CBN.CHF > JSON.parse(responseJson).Abuja.CHF){
         document.getElementById("cbnCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CHF+"</font>";
         document.getElementById("CBNcbnCHF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.CHFSell+"</font>";
        }else{
         document.getElementById("cbnCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CHF+"</font>";
         document.getElementById("CBNcbnCHF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.CHFSell+"</font>";
        }
        if(JSON.parse(response).CBN.XOF > JSON.parse(responseJson).Abuja.XOF){
         document.getElementById("cbnXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.XOF+"</font>";
         document.getElementById("CBNcbnXOF").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.XOFSell+"</font>";
        }else{
         document.getElementById("cbnXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.XOF+"</font>";
         document.getElementById("CBNcbnXOF").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.XOFSell+"</font>";
        }
        if(JSON.parse(response).CBN.MYR > JSON.parse(responseJson).Abuja.MYR){
         document.getElementById("cbnMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.MYR+"</font>";
         document.getElementById("CBNcbnMYR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.MYRSell+"</font>";
        }else{
         document.getElementById("cbnMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.MYR+"</font>";
         document.getElementById("CBNcbnMYR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.MYRSell+"</font>";
        }
        if(JSON.parse(response).CBN.SAR > JSON.parse(responseJson).Abuja.SAR){
         document.getElementById("cbnSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.SAR+"</font>";
         document.getElementById("CBNcbnSAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.SARSell+"</font>";
        }else{
         document.getElementById("cbnSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.SAR+"</font>";
         document.getElementById("CBNcbnSAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.SARSell+"</font>";
        }
        if(JSON.parse(response).CBN.QAR > JSON.parse(responseJson).Abuja.QAR){
         document.getElementById("cbnQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.QAR+"</font>";
         document.getElementById("CBNcbnQAR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.QARSell+"</font>";
        }else{
         document.getElementById("cbnQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.QAR+"</font>";
         document.getElementById("CBNcbnQAR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.QARSell+"</font>";
        }



         }
   })

        }, 200);


     }
    });
   }
   $(document).ready(function(){
   setTimeout(fetchdata1,1)
});

   $(document).ready(function(){
    setInterval(fetchdata,300000000);
   });

</script>
<script src="https://prismjs.com/prism.js"></script>
<script src="./dist/currency-converter.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
 
    
 currencyConverter("#example-1", {
     currencyData: {
         NGN: <?php echo $airport_usd; ?>,
         USD: <?php echo $usd; ?>,
         GBP: 0.7133,
         EUR: 0.8516,
         CNY: <?php echo $cny; ?>,
         CAD: <?php echo $cad; ?>,
         CHF: <?php echo $chf; ?>,
         XOF: <?php echo $xof; ?>,
         MYR: <?php echo $myr; ?>,
         SAR: <?php echo $sar; ?>,
         QAR: <?php echo $qar; ?>
     },
     toCurrency: "NGN",
 });

 currencyConverter("#example-2", {
     currencyData: {
         NGN: <?php echo $ngn; ?>,
         USD: <?php echo $usd; ?>,
         GBP: <?php echo $gbp; ?>,
         EUR: <?php echo $eur; ?>,
         CNY: <?php echo $cny; ?>,
         CAD: <?php echo $cad; ?>,
         CHF: <?php echo $chf; ?>,
         XOF: <?php echo $xof; ?>,
         MYR: <?php echo $myr; ?>,
         SAR: <?php echo $sar; ?>,
         QAR: <?php echo $qar; ?>
     },
     toCurrency: "NGN",
 });


 // Bind the events
 elm.addEventListener( 'onReady', function ( event ) {
     // Set amount
     cc.setAmount( 500 );
 } );

 elm.addEventListener( 'onChange', function ( event ) {
     console.log( event.data );
 } );
});

</script>



</html>