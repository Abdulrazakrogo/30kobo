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

    <!-- Custom Stylesheet -->


    <link rel="stylesheet" href="./vendor/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

   <?php
// set API Endpoint and API key 
$endpoint = 'latest';
$api_key = '82191452465d124d16c65fd640a682db';
$base_currency = 'EUR';

// Initialize CURL:
$curl = curl_init("http://data.fixer.io/api/$endpoint?access_key=$api_key&base=$base_currency");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Storing data to $json variable:
$json = curl_exec($curl);
curl_close($curl);

// Decoding JSON response to array:
$result = json_decode($json, true);

// Accessing the exchange rate values, e.g. USD from response.:

$usd = $result['rates']['USD'];
$eur = $result['rates']['USD'];
$usd_blackM = $usd+20;
//echo "USD black market".$usd_blackM;

$airport_gdp_live = $airport_usd * $usd;
$airport_eur_live = $airport_usd * $eur;

$island_gdp_live = $island_usd * $usd;
$island_eur_live = $island_usd * $eur;

$victoria_gdp_live = $victoria_usd * $usd;
$victoria_eur_live = $victoria_usd * $eur;

$kano_gdp_live = $kano_usd * $usd;
$kano_eur_live = $kano_usd * $eur;

$abuja_gdp_live = $abuja_usd * $usd;
$abuja_eur_live = $abuja_usd * $eur;

?>
   

<body>

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
                                        <a class="nav-link" href="#" data-scroll-nav="3">News</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Resources</span> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Currency Tips</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Market Analysis</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-scroll-nav="3">Newsletters</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="dashboard_log">
                                <div class="d-flex align-items-center">
                                    <div class="header_auth">
                                        <a href="#" data-scroll-nav="4" class="btn btn-primary">Get in Touch</a>
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
                            <a href="#" data-scroll-nav="2" class="btn btn-primary">Black Market</a>
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
                                                href="#buy">Black Market</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sell">CBN Rates</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tab-content-default">
                                        <div class="tab-pane fade show active" id="buy" role="tabpanel">
                                            <form method="post" name="myform" class="currency_validate">
                                                <div class="form-group">
                                                    <label class="mr-sm-2">From</label>
                                                    <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="1 USD">
                                                        <select name='currency' class="form-control">
                                                            <option value="">USD</option>
                                                            <option value="bitcoin">Bitcoin</option>
                                                            <option value="litecoin">Litecoin</option>
                                                        </select>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Amount</p>
                                                        <h6 class="mb-0">Currency</h6>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mr-sm-2">To</label>
                                                    <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="477 NGN">
                                                        <select name='currency' class="form-control">
                                                            <option value="">NGN</option>
                                                            <option value="bitcoin">Bitcoin</option>
                                                            <option value="litecoin">Litecoin</option>
                                                        </select>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Amount</p>
                                                        <h6 class="mb-0">Currency</h6>
                                                    </div>
                                                </div>

                                                <!--<button type="submit" name="submit"
                                                    class="btn btn-success btn-block">Exchange
                                                    Now</button> -->

                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="sell">
                                            <form method="post" name="myform" class="currency2_validate">
                                                <div class="form-group">
                                                    <label class="mr-sm-2">Naira Currency Converter</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="cc BTC-alt"></i></label>
                                                        </div>
                                                        <select name='currency' class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="bitcoin">Bitcoin</option>
                                                            <option value="litecoin">Litecoin</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mr-sm-2">Payment Method</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text"><i
                                                                    class="fa fa-bank"></i></label>
                                                        </div>
                                                        <select class="form-control" name="method">
                                                            <option value="">Select</option>
                                                            <option value="bank">Bank of America ********45845</option>
                                                            <option value="master">Master Card ***********5458</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="mr-sm-2">Enter your amount</label>
                                                    <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control"
                                                            placeholder="0.0214 BTC">
                                                        <input type="text" name="usd_amount" class="form-control"
                                                            placeholder="125.00 USD">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Monthly Limit</p>
                                                        <h6 class="mb-0">$49750 remaining</h6>
                                                    </div>
                                                </div>
                                                <!--<button type="submit" name="submit"
                                                    class="btn btn-success btn-block">Exchange
                                                    Now</button> -->

                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>






        <!DOCTYPE html>
<head>
<title> eXchnage </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<div>Black Market(EUR):  <xy id="EUR"></xy></div>
<br />
<div>Black Market(GBP):  <xy id="GBP"></xy></div>

 

<script>

function Initialize() {
  setTimeout(function(){ 
   $.ajax({
     url: 'api',
     type: 'get',
     success: function(response0){
      document.getElementById("EUR").innerHTML = "<font color='#000'>"+response0.EUR+"</font>";
      document.getElementById("GBP").innerHTML = "<font color='#000'>"+response0.GBP+"</font>";

     }
   });

   }, 1000);
};
Initialize();
function fetchdata(){
    $.ajax({
     url: 'api',
     type: 'get',
     success: function(response){  

        setInterval(function () {
         $.ajax({
     url: 'api',
     type: 'get', 
     success: function(responseJson){ 
        if(response.EUR > responseJson.EUR){
         document.getElementById("EUR").innerHTML = "<font color='red'>"+responseJson.EUR+"</font>";
        }else{
         document.getElementById("EUR").innerHTML = "<font color='green'>"+response.EUR+"</font>";
        }
        
        if(response.GBP > responseJson.GBP){
         document.getElementById("GBP").innerHTML = "<font color='red'>"+responseJson.GBP+"</font>";
        }else{
         document.getElementById("GBP").innerHTML = "<font color='green'>"+response.GBP+"</font>";
        }
        console.log(responseJson.EUR);

        setInterval(function () {
         $.ajax({
     url: 'api',
     type: 'get', 
     success: function(responseJson0){

      if(responseJson.EUR > responseJson0.EUR){
         document.getElementById("EUR").innerHTML = "<font color='red'>"+responseJson0.EUR+"</font>";
        }else{
         document.getElementById("EUR").innerHTML = "<font color='green'>"+responseJson.EUR+"</font>";
        }
        console.log(responseJson0.EUR)
        if(responseJson.GBP > responseJson.GBP){
         document.getElementById("GBP").innerHTML = "<font color='red'>"+responseJson0.GBP+"</font>";
        }else{
         document.getElementById("GBP").innerHTML = "<font color='green'>"+responseJson.GBP+"</font>";
        }

     }
         })
}, 2000)
     
     }
   })

        }, 10000);


     }
    });
   }
   
   $(document).ready(function(){
    setInterval(fetchdata,20000);
   });
</script>





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
                    <div class="col-xl-3">
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
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
                                            <thead>
                                                <tr>
                                                
                                                   <th>    
                                                        <div class="media">
                                                            <!--<img class="mr-3" src="./images/ngn.png" alt="" width="30"><br>-->
                                                            <div class="media-body">
                                                                <h5>Live Update</h5>
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

                                                    <td>
                                                        {{ $airport_usd }}
                                                    </td>

                                                    <td>
                                                    {{ $airport_usd }}
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                               
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/eur.png" alt="" width="25">1 EUR</h4></span>
                                                    </td>

                                                    <td>
                                                    {{ $island_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_eur_live,2)) }}
                                                    </td>

                                                  
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                    <span><h4><img class="mr-3" src="./images/gdp.png" alt="" width="25">1 GBP</h4></span>
                                                    </td>

                                                    <td>
                                                    {{ $victoria_usd }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_eur_live,2)) }}
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
                                    <div class="table-responsive">
                                        <table class="table mb-0 table-responsive-sm">
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
                                                    {{ (round($airport_eur_live,2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($airport_gdp_live,2)) }}
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
                                                    {{ (round($island_eur_live,2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_gdp_live,2)) }}
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
                                                    {{ (round($island_eur_live,2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($island_gdp_live,2)) }}
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
                                                    {{ (round($kano_eur_live,2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($kano_gdp_live,2)) }}
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
                                                    {{ (round($abuja_eur_live,2)) }}
                                                    </td>

                                                    <td>
                                                    {{ (round($abuja_gdp_live,2)) }}
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
                                                        680/175
                                                    </td>

                                                    <td>
                                                        680/175
                                                    </td>

                                                    <td>
                                                        680/175
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
                                            <p>MEW is excited to bring Treemium â€™s extensive range of Treemium o assets,
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
                            Copyright Â© 2021 ThirtyKobo. All Rights Reserved. Powered by <a href="https://www.easylife.ng">EasyLife Creative Studio</a>
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

</html>