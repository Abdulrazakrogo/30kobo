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
    $access_key = '8453e58a709c1d807524403a28cfb813';
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
                                                <a class="nav-link" href="#" data-scroll-nav="3">lagos/Lagos Island</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Lagos victoria Island</a>
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
                                    <p>Naira Currency Converter</p>
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
                                                                <h5>Live Updates</h5>
                                                                <h6>{{$ldate = date('d-m-Y')}}</h6>
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
                                                                <h5>Live Updates</h5>
                                                                <h6>{{$ldate = date('d-m-Y')}}</h6>
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
                                                                <h5>Live Updates</h5>
                                                                <h6>{{$ldate = date('d-m-Y')}}</h6>
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
                                                                <h5>Live Updates</h5>
                                                                <h6>{{$ldate = date('d-m-Y')}}</h6>
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
                                                                <h5>Live Updates </h5>
                                                                <h6>{{$ldate = date('d-m-Y')}}</h6>
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

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Economic Calendar</h4>
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
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                    <iframe src="https://sslecal2.forexprostools.com?borderColor=%233535fa&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,10,35,43,20,56,36,110,11,26,12,4,5&calType=week&timeZone=166&lang=1" width="650" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #333333;text-decoration: none;">Real Time Economic Calendar provided by <a href="https://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a>.</span></div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <!--     <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="market-table">
                                <div class="d-flex justify-content-between mb-3">
                                        <div class="buyer-info">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h4>Parallel market <br>rates by location</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h5>NGN</h5>
                                                            <h6>Market Locatio</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/usd.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 USD</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/eur.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 EUR</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/gdp.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 GDP</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    </td>
                                                    <td >
                                                        <span>Lagos/Airport</span>
                                                    </td>

                                                    <td>
                                                        {{ $airport_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($airport_eur_live ?? '',2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($airport_gdp_live ?? '',2)) }}
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    </td>
                                                    <td>
                                                        <span>lagos/lagos Island</span>
                                                    </td>

                                                    <td>
                                                    {{ $island_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_eur_live ?? '',2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_gdp_live ?? '',2)) }}
                                                    </td>
                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    </td>
                                                    <td>
                                                        <span>Lagos Victoria Island</span>
                                                    </td>

                                                    <td>
                                                    {{ $victoria_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_eur_live ?? '',2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_gdp_live ?? '',2)) }}
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    
                                                    </td>
                                                    <td>
                                                        <span>Kano</span>
                                                    </td>

                                                    <td>
                                                    {{ $kano_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($kano_eur_live ?? '',2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($kano_gdp_live ?? '',2)) }}
                                                    </td>
                                                    
                                                </tr>

                                                <tr>
                                                    
                                                    </td>
                                                    <td>
                                                        <span>Abuja</span>
                                                    </td>

                                                    <td>
                                                    {{ $abuja_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($abuja_eur_live ?? '',2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($abuja_gdp_live ?? '',2)) }}
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="market section-padding page-section" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
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
                                        <div class="seller-info text-right">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h5>Live Update</h5>
                                                    <a href="#">{{$ldate = date('d-m-Y')}}</a>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h5>NGN</h5>
                                                            <h6>&nbsp;</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/usd.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 USD</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/eur.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 EUR</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                    <th>
                                                    <div class="media">
                                                        <img class="mr-3" src="./images/gdp.png" alt="" width="30"><br>
                                                        <div class="media-body">
                                                            <h4>1 GDP</h4>
                                                            <h6>Buy/Sell</h6>
                                                        </div>
                                                    </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    </td>
                                                    <td>
                                                        <span>Rates</span>
                                                    </td>

                                                    <td>
                                                        <xy id='cbnUSD'></xy> / <xy id='CBNcbnUSD'></xy>
                                                    </td>

                                                    <td>
                                                    <xy id='cbnEUR'></xy> / <xy id='CBNcbnEUR'></xy>
                                                    </td>

                                                    <td>
                                                    <xy id='cbnGBP'></xy> / <xy id='CBNcbnGBP'></xy>
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    </td>
                                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features section-padding">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>Features</span>
                            <h3>The most trusted forex update platform in Nigeria</h3>
                            <p>Here are a few reasons why you should choose ThirtyKobo</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-shield"></i></span>
                            <h4>Live Updates</h4>
                            <p>We store the vast majority of the digital assets in secure offline storage.</p>
                            <a href="#">Learn more <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-cubes"></i></span>
                            <h4>Market News $ Tips</h4>
                            <p>Treemium ocurrency stored on our servers is covered by our insurance policy.</p>
                            <a href="#">Learn more <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-content">
                            <span><i class="fa fa-life-ring"></i></span>
                            <h4>Market Analysis</h4>
                            <p>Treemium supports a variety of the most popular digital currencies.</p>
                            <a href="#">Learn more <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--
        <div class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>Join Us</span>
                            <h3>Create your Treemium ocurrency portfolio today</h3>
                            <p>Treemium  has a variety of features that make it the best place to start trading</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-md-6">
                        <div class="portfolio_img">
                            <img src="./images/portfolio.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div> 
                <div class="row portfolio_list">
                    <div class="col-xl-6 col-md-6">
                        <div class="media">
                            <span class="port-icon"> <i class="la la-chart-bar"></i></span>
                            <div class="media-body">
                                <h4>Manage your portfolio</h4>
                                <p>Buy and sell popular digital currencies, keep track of them in the one place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="media">
                            <span class="port-icon"> <i class="la la-calendar-check"></i></span>
                            <div class="media-body">
                                <h4>Recurring buys</h4>
                                <p>Invest in Treemium ocurrency slowly over time by scheduling buys daily, weekly, or
                                    monthly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="media">
                            <span class="port-icon"> <i class="la la-lock"></i></span>
                            <div class="media-body">
                                <h4>Vault protection</h4>
                                <p>For added security, store your funds in a vault with time delayed withdrawals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="media">
                            <span class="port-icon"> <i class="la la-mobile"></i></span>
                            <div class="media-body">
                                <h4>Mobile apps</h4>
                                <p>Stay on top of the markets with the Treemium  app for <a href="#">Android</a> or
                                    <a href="#">iOS</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <div class="testimonial section-padding" data-scroll-index="3">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section_heading">
                            <span>What's Say</span>
                            <h3>Trusted by 2 million customers</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-md-11">
                        <div class="testimonial-content">
                            <div class="owl-carousel owl-theme">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="./images/testimonial/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="customer-review px-4">
                                            <img class="img-fluid" src="./images/brand/2.webp" alt="">
                                            <p>Integrating Treemium  services into Trezor Wallet's exchange has been a
                                                great success for all parties, especially the users.
                                            </p>
                                            <div class="customer-info">
                                                <h5>Mr John Doe</h5>
                                                <p>CEO, Example Company</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="customer-img">
                                            <img class="img-fluid" src="./images/testimonial/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="customer-review px-4">
                                            <img class="img-fluid" src="./images/brand/3.webp" alt="">
                                            <p>MEW is excited to bring Treemium Ã¢â‚¬â„¢s extensive range of Treemium o assets,
                                                competitive rates and seamless swap functionality</p>
                                            <div class="customer-info">
                                                <h5>Mr Abraham</h5>
                                                <p>CEO, Example Company</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <li><i class="fa fa-phone"></i> (+234) 1243 665566</li>
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
                            <a href="about.html">About</a>
                            <a href="privacy-policy.html">Privacy Policy</a>
                            <a href="term-condition.html">Term & Service</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 text-lg-right text-center">
                        <div class="social">
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-12 text-center text-lg-right">
                        <div class="copy_right text-center text-lg-center">
                            Copyright Ã‚Â© 2021 ThirtyKobo. All Rights Reserved. Powered by <a href="https://www.easylife.ng">EasyLife Creative Studio</a>
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

      document.getElementById("CBNairportUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.USDSell+"</font>";
      document.getElementById("CBNairportEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.EURSell+"</font>";
      document.getElementById("CBNairportGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Airport.GBPSell+"</font>";
      
      document.getElementById("islandUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.USD+"</font>";
      document.getElementById("islandEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.EUR+"</font>";
      document.getElementById("islandGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.GBP+"</font>";

      document.getElementById("CBNislandUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.USDSell+"</font>";
      document.getElementById("CBNislandEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.EURSell+"</font>";
      document.getElementById("CBNislandGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Island.GBPSell+"</font>";
      
      document.getElementById("victoriaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.USD+"</font>";
      document.getElementById("victoriaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.EUR+"</font>";
      document.getElementById("victoriaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.GBP+"</font>";

      document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.USDSell+"</font>";
      document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.EURSell+"</font>";
      document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Victoria.GBPSell+"</font>";
      
      document.getElementById("kanoUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.USD+"</font>";
      document.getElementById("kanoEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.EUR+"</font>";
      document.getElementById("kanoGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.GBP+"</font>";

      document.getElementById("CBNkanoUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.USDSell+"</font>";
      document.getElementById("CBNkanoEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.EURSell+"</font>";
      document.getElementById("CBNkanoGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Kano.GBPSell+"</font>";
      
      document.getElementById("abujaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.USD+"</font>";
      document.getElementById("abujaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.EUR+"</font>";
      document.getElementById("abujaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.GBP+"</font>";

      document.getElementById("CBNabujaUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.USDSell+"</font>";
      document.getElementById("CBNabujaEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.EURSell+"</font>";
      document.getElementById("CBNabujaGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).Abuja.GBPSell+"</font>";



      document.getElementById("cbnUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.USD+"</font>";
      document.getElementById("cbnEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.EUR+"</font>";
      document.getElementById("cbnGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.GBP+"</font>";

      document.getElementById("CBNcbnUSD").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.USDSell+"</font>";
      document.getElementById("CBNcbnEUR").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.EURSell+"</font>";
      document.getElementById("CBNcbnGBP").innerHTML = "<font color='#8691B4'>"+JSON.parse(response0).CBN.GBPSell+"</font>";
      
      
      

     }
   });

   }, 15);
};
Initialize();

// function start_now() {
//   setTimeout(function(){ 
    
//     $.ajax({
//      url: 'rates',
//      type: 'get',
//      success: function(responseJson){ 


//         if(JSON.parse(response).Airport.USD > JSON.parse(responseJson).Airport.USD){
//          document.getElementById("airportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USD+"</font>";
//          document.getElementById("CBNairportUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
//         }else{
//          document.getElementById("airportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USD+"</font>";
//          document.getElementById("CBNairportUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.USDSell+"</font>";
//         }
//         if(JSON.parse(response).Airport.EUR > JSON.parse(responseJson).Airport.EUR){
//          document.getElementById("airportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
//          document.getElementById("CBNairportEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
//         }else{
//          document.getElementById("airportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EUR+"</font>";
//          document.getElementById("CBNairportEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.EURSell+"</font>";
//         }
//         if(JSON.parse(response).Airport.GBP > JSON.parse(responseJson).Airport.GBP){
//          document.getElementById("airportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
//          document.getElementById("CBNairportGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
//         }else{
//          document.getElementById("airportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBP+"</font>";
//          document.getElementById("CBNairportGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Airport.GBPSell+"</font>";
//         }

//         //

//         if(JSON.parse(response).Island.USD > JSON.parse(responseJson).Island.USD){
//          document.getElementById("islandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USD+"</font>";
//          document.getElementById("CBNislandUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
//         }else{
//          document.getElementById("islandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USD+"</font>";
//          document.getElementById("CBNislandUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.USDSell+"</font>";
//         }
//         if(JSON.parse(response).Island.EUR > JSON.parse(responseJson).Island.EUR){
//          document.getElementById("islandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EUR+"</font>";
//          document.getElementById("CBNislandEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
//         }else{
//          document.getElementById("islandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EUR+"</font>";
//          document.getElementById("CBNislandEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.EURSell+"</font>";
//         }
//         if(JSON.parse(response).Island.GBP > JSON.parse(responseJson).Island.GBP){
//          document.getElementById("islandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBP+"</font>";
//          document.getElementById("CBNislandGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
//         }else{
//          document.getElementById("islandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBP+"</font>";
//          document.getElementById("CBNislandGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Island.GBPSell+"</font>";
//         }

//         //

//         if(JSON.parse(response).Victoria.USD > JSON.parse(responseJson).Victoria.USD){
//          document.getElementById("victoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
//          document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
//         }else{
//          document.getElementById("victoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USD+"</font>";
//          document.getElementById("CBNvictoriaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.USDSell+"</font>";
//         }
//         if(JSON.parse(response).Victoria.EUR > JSON.parse(responseJson).Victoria.EUR){
//          document.getElementById("victoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
//          document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
//         }else{
//          document.getElementById("victoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EUR+"</font>";
//          document.getElementById("CBNvictoriaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.EURSell+"</font>";
//         }
//         if(JSON.parse(response).Victoria.GBP > JSON.parse(responseJson).Victoria.GBP){
//          document.getElementById("victoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
//          document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
//         }else{
//          document.getElementById("victoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBP+"</font>";
//          document.getElementById("CBNvictoriaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Victoria.GBPSell+"</font>";
//         }

//         //

//         if(JSON.parse(response).Kano.USD > JSON.parse(responseJson).Kano.USD){
//          document.getElementById("kanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USD+"</font>";
//          document.getElementById("CBNkanoUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
//         }else{
//          document.getElementById("kanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USD+"</font>";
//          document.getElementById("CBNkanoUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.USDSell+"</font>";
//         }
//         if(JSON.parse(response).Kano.EUR > JSON.parse(responseJson).Kano.EUR){
//          document.getElementById("kanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
//          document.getElementById("CBNkanoEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
//         }else{
//          document.getElementById("kanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EUR+"</font>";
//          document.getElementById("CBNkanoEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.EURSell+"</font>";
//         }
//         if(JSON.parse(response).Kano.GBP > JSON.parse(responseJson).Kano.GBP){
//          document.getElementById("kanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
//          document.getElementById("CBNkanoGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
//         }else{
//          document.getElementById("kanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBP+"</font>";
//          document.getElementById("CBNkanoGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Kano.GBPSell+"</font>";
//         }

//         //

//         if(JSON.parse(response).Abuja.USD > JSON.parse(responseJson).Abuja.USD){
//          document.getElementById("abujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
//          document.getElementById("CBNabujaUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
//         }else{
//          document.getElementById("abujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USD+"</font>";
//          document.getElementById("CBNabujaUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.USDSell+"</font>";
//         }
//         if(JSON.parse(response).Abuja.EUR > JSON.parse(responseJson).Abuja.EUR){
//          document.getElementById("abujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
//          document.getElementById("CBNabujaEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
//         }else{
//          document.getElementById("abujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
//          document.getElementById("CBNabujaEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
//         }
//         if(JSON.parse(response).Abuja.GBP > JSON.parse(responseJson).Abuja.GBP){
//          document.getElementById("abujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
//          document.getElementById("CBNabujaGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
//         }else{
//          document.getElementById("abujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBP+"</font>";
//          document.getElementById("CBNabujaGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).Abuja.GBPSell+"</font>";
//         }
       
//          //

//          if(JSON.parse(response).CBN.USD > JSON.parse(responseJson).CBN.USD){
//          document.getElementById("cbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USD+"</font>";
//          document.getElementById("CBNcbnUSD").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
//         }else{
//          document.getElementById("cbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USD+"</font>";
//          document.getElementById("CBNcbnUSD").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.USDSell+"</font>";
//         }
//         if(JSON.parse(response).CBN.EUR > JSON.parse(responseJson).Abuja.EUR){
//          document.getElementById("cbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EUR+"</font>";
//          document.getElementById("CBNcbnEUR").innerHTML = "<font color='red'>"+JSON.parse(responseJson).Abuja.EURSell+"</font>";
//         }else{
//          document.getElementById("cbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EUR+"</font>";
//          document.getElementById("CBNcbnEUR").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.EURSell+"</font>";
//         }
//         if(JSON.parse(response).CBN.GBP > JSON.parse(responseJson).Abuja.GBP){
//          document.getElementById("cbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
//          document.getElementById("CBNcbnGBP").innerHTML = "<font color='red'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
//         }else{
//          document.getElementById("cbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBP+"</font>";
//          document.getElementById("CBNcbnGBP").innerHTML = "<font color='green'>"+JSON.parse(responseJson).CBN.GBPSell+"</font>";
//         }



//          }
//    })

//    }, 15);
// };
start_now();

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



         }
   })

        }, 15000);


     }
    });
   }
   
   $(document).ready(function(){
    setInterval(fetchdata,15000);
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
         EUR: 0.8516
     },
     toCurrency: "NGN",
 });

 currencyConverter("#example-2", {
     currencyData: {
         NGN: <?php echo $ngn; ?>,
         USD: <?php echo $usd; ?>,
         GBP: <?php echo $gbp; ?>,
         EUR: <?php echo $eur; ?>
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