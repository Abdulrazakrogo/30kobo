<?php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

?>



<div class="card">
    <div class="card-header <?php if (Auth::check() && Auth::user()->hasRole('admin', true)): ?> bg-secondary text-white <?php endif; ?>">

        Welcome <?php echo e(Auth::user()->name); ?>


        <?php if (Auth::check() && Auth::user()->hasRole('admin', true)): ?>
        <button type="button" class="pull-right btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Update</button>
        <?php else: ?>
            <span class="pull-right badge badge-warning" style="margin-top:4px">
                User Access
            </span>
            <a href="#" class="pull-right btn btn-sm btn-primary">View</a>
        <?php endif; ?>

    </div>
    <div class="card-body">
        <h2 class="lead">
            <?php echo e(trans('auth.loggedIn')); ?>

        </h2>

        <?php if (Auth::check() && Auth::user()->hasRole('admin')): ?>
        
        <?php
// set API Endpoint and API key 
$endpoint = 'latest';
$api_key = '8453e58a709c1d807524403a28cfb813';
$base_currency = 'GBP';

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
$eur = $result['rates']['EUR'];
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
            <hr>

            <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card">
                        <h5 class="card-header">CBN Rates</h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: </h5>
                            <h5 class="card-title">USD: </h5>
                            <h5 class="card-title">EUR: </h5>
                            <p class="card-text text-success">Official Rates</p>
                        </div>
                        </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="card">
                        <h5 class="card-header">Lagos/Airport <?php echo e($usd); ?> <?php echo e($eur); ?></h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: <?php echo e((round($airport_gdp_live,2))); ?></h5>
                            <h5 class="card-title">USD: <?php echo e($airport_usd); ?></h5>
                            <h5 class="card-title">EUR: <?php echo e((round($airport_eur_live,2))); ?></h5>
                            <p class="card-text text-success">Black Market Rates</p>
                        </div>
                        </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="card">
                        <h5 class="card-header">Lagos/lagos Island</h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: <?php echo e((round($island_gdp_live,2))); ?></h5>
                            <h5 class="card-title">USD: <?php echo e($island_usd); ?></h5>
                            <h5 class="card-title">EUR: <?php echo e((round($island_eur_live,2))); ?></h5>
                            <p class="card-text text-success">Black Market Rates</p>
                        </div>
                        </div>
                </div>
                
            </div>

            <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="card">
                        <h5 class="card-header">Lagos Victoria Island</h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: <?php echo e((round($island_gdp_live,2))); ?></h5>
                            <h5 class="card-title">USD: <?php echo e($victoria_usd); ?></h5>
                            <h5 class="card-title">EUR: <?php echo e((round($island_eur_live,2))); ?></h5>
                            <p class="card-text text-success">Black Market Rates</p>
                        </div>
                        </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="card">
                        <h5 class="card-header">Kano</h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: <?php echo e((round($kano_gdp_live,2))); ?></h5>
                            <h5 class="card-title">USD: <?php echo e($kano_usd); ?></h5>
                            <h5 class="card-title">EUR: <?php echo e((round($kano_eur_live,2))); ?></h5>
                            <p class="card-text text-success">Black Market Rates</p>
                        </div>
                        </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="card">
                        <h5 class="card-header">Abuja</h5>
                        <div class="card-body">
                            <h5 class="pull-right card-title">GBP: <?php echo e((round($abuja_gdp_live,2))); ?></h5>
                            <h5 class="card-title">USD: <?php echo e($abuja_usd); ?></h5>
                            <h5 class="card-title">EUR: <?php echo e((round($abuja_eur_live,2))); ?></h5>
                            <p class="card-text text-success">Black Market Rates</p>
                        </div>
                        </div>
                </div>
                
            </div>
            

<div class="row">
  <div class="col-12 col-xl-12 mb-4 mb-lg-0">
      <div class="card">
          <h5 class="card-header">Recent History</h5>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">CBN Rates</th>
                          <th scope="col">Lagos/Airport</th>
                          <th scope="col">Lagos/lagos Island</th>
                          <th scope="col">Lagos Victoria Island</th>
                          <th scope="col">Kano</th>
                          <th scope="col">Abuja</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php $__currentLoopData = $bmupdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bmupdate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($bmupdate->updated_at); ?></td>
                                <td><?php echo e($bmupdate->island_usd); ?></td>
                                <td><?php echo e($bmupdate->airport_usd); ?></td>
                                <td><?php echo e($bmupdate->island_usd); ?></td>
                                <td><?php echo e($bmupdate->victoria_usd); ?></td>
                                <td><?php echo e($bmupdate->kano_usd); ?></td>
                                <td><?php echo e($bmupdate->abuja_usd); ?></td>
                                <td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                       
                      </tbody>
                    </table>
              </div>
                <a href="#" class="btn btn-block btn-light">View all</a>
          </div>
      </div>
  </div>
  <div class="col-12 col-xl-4">
      <!-- Another widget will go here -->
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Rates Update</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
        
     
      
      <div class="modal-body">
      <?php echo Form::open(array('route' => 'updates.store', 'method' => 'POST', 'role' => 'form')); ?>

        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Lagos/Airport</label>
            <?php echo Form::text('airport_usd', $airport_usd, array('id' => 'airport_usd', 'class' => 'form-control', 'placeholder' => trans('Lagos/Airport'))); ?>

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput2">Lagos/lagos Island</label>
            <?php echo Form::text('island_usd', $island_usd, array('id' => 'island_usd', 'class' => 'form-control', 'placeholder' => trans('Lagos/lagos Island'))); ?>

        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput3">Lagos Victoria Island</label>
            <?php echo Form::text('victoria_usd', $victoria_usd, array('id' => 'victoria_usd', 'class' => 'form-control', 'placeholder' => trans('Lagos Victoria Island'))); ?>

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput4">Kano</label>
            <?php echo Form::text('kano_usd', $kano_usd, array('id' => 'kano_usd', 'class' => 'form-control', 'placeholder' => trans('Kano'))); ?>

        </div>

        <div class="form-group">
            <label for="exampleFormControlInput5">Abuja</label>
            <?php echo Form::text('abuja_usd', $abuja_usd, array('id' => 'abuja_usd', 'class' => 'form-control', 'placeholder' => trans('Abuja'))); ?>

        </div>

       
            <input type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="">
        
        
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default float-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success float-right">Save</button> 
          
      </div>
      </form>
    </div>

  </div>
</div>
  
        <?php endif; ?>

    </div>
</div>

<?php /**PATH C:\xampp\htdocs\thirtykobo\resources\views/panels/welcome-panel.blade.php ENDPATH**/ ?>