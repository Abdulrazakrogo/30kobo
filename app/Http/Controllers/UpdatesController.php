<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Models\Update;
use App\Models\Bmupdate;
use Session;
use Auth; 




class UpdatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rates() 
    {
 
 


        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");

        $airport_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('airport_usd');
        $island_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('island_usd');
        $victoria_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('victoria_usd');
        $kano_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('kano_usd');
        $abuja_usd = Bmupdate::orderBy('id', 'DESC')->latest()->value('abuja_usd');


        



        //shuffling
        $eur_usd = array("1.18699", "1.18717", "1.18714", "1.18710", "1.18700");
        $rand_keys = array_rand($eur_usd, 2);
        $eur_usd = $eur_usd[$rand_keys[0]];

        $gbp_usd = array("1.37717", "1.37715", "1.37721", "1.38752", "1.38722");
        $rand_keys = array_rand($gbp_usd, 2);
        $gbp_usd = $gbp_usd[$rand_keys[0]];

        $cny_usd = array("0.15353", "0.15493", "0.15403", "0.15453", "0.15423");
        $rand_keys = array_rand($cny_usd, 2);
        $cny_usd = $cny_usd[$rand_keys[0]];

        $cad_usd = array("0.79280", "0.79256", "0.79182", "0.79280", "0.0.79277");
        $rand_keys = array_rand($cad_usd, 2);
        $cad_usd = $cad_usd[$rand_keys[0]];

        $chf_usd = array("1.08806", "1.08848", "1.08896", "1.08823", "1.08811");
        $rand_keys = array_rand($chf_usd, 2);
        $chf_usd = $chf_usd[$rand_keys[0]];

        $xof_usd = array("0.00180", "0.00181", "0.00182", "0.00179", "0.00178");
        $rand_keys = array_rand($xof_usd, 2);
        $xof_usd = $xof_usd[$rand_keys[0]];

        $myr_usd = array("0.23757", "0.23758", "0.23754", "0.23755", "0.23753");
        $rand_keys = array_rand($myr_usd, 2);
        $myr_usd = $myr_usd[$rand_keys[0]];

        $sar_usd = array("0.26666", "0.26667", "0.26668", "0.26665", "0.26664");
        $rand_keys = array_rand($sar_usd, 2);
        $sar_usd = $sar_usd[$rand_keys[0]];

        $qar_usd = array("0.27472", "0.27470", "0.27471", "0.27473", "0.27474");
        $rand_keys = array_rand($qar_usd, 2);
        $qar_usd = $qar_usd[$rand_keys[0]];

        $usd_ngn = array("411.51112", "411.5231", "411.53241", "411.51873", "411.51421");
        $rand_keys = array_rand($usd_ngn, 2);
        $usd_ngn = $usd_ngn[$rand_keys[0]];

        $ngn_usd = array("0.00230", "0.00212", "0.00240", "0.00304", "0.00242");
        $rand_keys = array_rand($ngn_usd, 2);
        $ngn_usd = $ngn_usd[$rand_keys[0]];

        $gbp_ngn = array("566.78745", "566.78345", "566.78732", "566.78734", "566.78845");
        $rand_keys = array_rand($gbp_ngn, 2);
        $gbp_ngn = $gbp_ngn[$rand_keys[0]];

        $eur_ngn = array("485.74987", "485.74954", "485.74698", "485.74786", "485.74863");
        $rand_keys = array_rand($eur_ngn, 2);
        $eur_ngn = $eur_ngn[$rand_keys[0]];

        $cny_ngn = array("63.51086", "63.59479", "63.58581", "63.58290", "63.51180");
        $rand_keys = array_rand($cny_ngn, 2);
        $cny_ngn = $cny_ngn[$rand_keys[0]];

        $cad_ngn = array("326.24389", "326.23589", "326.23654", "326.23659", "326.24489");
        $rand_keys = array_rand($cad_ngn, 2);
        $cad_ngn = $cad_ngn[$rand_keys[0]];

        $chf_ngn = array("447.7447 ", "447.8727", "447.7547", "447.7423", "447.7563");
        $rand_keys = array_rand($chf_ngn, 2);
        $chf_ngn = $chf_ngn[$rand_keys[0]];

        $xof_ngn = array("0.74053", "0.74123", "0.74045", "0.74033", "60.74044");
        $rand_keys = array_rand($xof_ngn, 2);
        $xof_ngn = $xof_ngn[$rand_keys[0]];

        $myr_ngn = array("97.7342", "97.7523", "97.7554", "97.7534", "97.7555");
        $rand_keys = array_rand($myr_ngn, 2);
        $myr_ngn = $myr_ngn[$rand_keys[0]];

        $sar_ngn = array("109.7330", "109.7290", "109.7345", "109.7432", "109.7365");
        $rand_keys = array_rand($sar_ngn, 2);
        $sar_ngn = $sar_ngn[$rand_keys[0]];

        $qar_ngn = array("113.0487", "113.0524", "113.03412", "113.1953", "113.1834");
        $rand_keys = array_rand($qar_ngn, 2);
        $qar_ngn = $qar_ngn[$rand_keys[0]];


// 
// 


        // Declaring 
        $airportUSD = $ngn_usd+$airport_usd;
        $airportEUR = $eur_usd*$airport_usd;
        $airportGBP = $gbp_usd*$airport_usd;
        $airportCNY = $cny_usd*$airport_usd;
        $airportCAD = $cad_usd*$airport_usd;
        $airportCHF = $chf_usd*$airport_usd;
        $airportXOF = $xof_usd*$airport_usd;
        $airportMYR = $myr_usd*$airport_usd;
        $airportSAR = $sar_usd*$airport_usd;
        $airportQAR = $qar_usd*$airport_usd;
        
        $islandUSD = $ngn_usd+$island_usd;
        $islandEUR = $eur_usd*$island_usd;
        $islandGBP = $gbp_usd*$island_usd;
        $islandCNY = $cny_usd*$island_usd;
        $islandCAD = $cad_usd*$island_usd;
        $islandCHF = $chf_usd*$island_usd;
        $islandXOF = $xof_usd*$island_usd;
        $islandMYR = $myr_usd*$island_usd;
        $islandSAR = $sar_usd*$island_usd;
        $islandQAR = $qar_usd*$island_usd;
        
        $victoriaUSD = $ngn_usd+$victoria_usd;
        $victoriaEUR = $eur_usd*$victoria_usd;
        $victoriaGBP = $gbp_usd*$victoria_usd;
        $victoriaCNY = $cny_usd*$victoria_usd;
        $victoriaCAD = $cad_usd*$victoria_usd;
        $victoriaCHF = $chf_usd*$victoria_usd;
        $victoriaXOF = $xof_usd*$victoria_usd;
        $victoriaMYR = $myr_usd*$victoria_usd;
        $victoriaSAR = $sar_usd*$victoria_usd;
        $victoriaQAR = $qar_usd*$victoria_usd;
        
        $kanoUSD = $ngn_usd+$kano_usd;
        $kanoEUR = $eur_usd*$kano_usd;
        $kanoGBP = $gbp_usd*$kano_usd;
        $kanoCNY = $cny_usd*$kano_usd;
        $kanoCAD = $cad_usd*$kano_usd;
        $kanoCHF = $chf_usd*$kano_usd;
        $kanoXOF = $xof_usd*$kano_usd;
        $kanoMYR = $myr_usd*$kano_usd;
        $kanoSAR = $sar_usd*$kano_usd;
        $kanoQAR = $qar_usd*$kano_usd;
        
        $abujaUSD = $ngn_usd+$abuja_usd;
        $abujaEUR = $eur_usd*$abuja_usd;
        $abujaGBP = $gbp_usd*$abuja_usd;
        $abujaCNY = $cny_usd*$abuja_usd;
        $abujaCAD = $cad_usd*$abuja_usd;
        $abujaCHF = $chf_usd*$abuja_usd;
        $abujaXOF = $xof_usd*$abuja_usd;
        $abujaMYR = $myr_usd*$abuja_usd;
        $abujaSAR = $sar_usd*$abuja_usd;
        $abujaQAR = $qar_usd*$abuja_usd;
    
        // print_r($island_usd);

     $rates =   array(
         'Airport' =>
            array( 'USD' => number_format($airportUSD, 4),
                   'EUR' => number_format($airportEUR, 4),
                   'GBP' => number_format($airportGBP, 4),
                   'CNY' => number_format($airportCNY, 4),
                   'CAD' => number_format($airportCAD, 4),
                   'CHF' => number_format($airportCHF, 4),
                   'XOF' => number_format($airportXOF, 4),
                   'MYR' => number_format($airportMYR, 4),
                   'SAR' => number_format($airportSAR, 4),
                   'QAR' => number_format($airportCNY, 4),
                   'USDSell' => number_format($airportUSD+0.30, 4),
                   'EURSell' => number_format($airportEUR+0.30, 4),
                   'GBPSell' => number_format($airportGBP+0.30, 4),
                   'CNYSell' => number_format($airportCNY+0.30, 4),
                   'CADSell' => number_format($airportCAD+0.30, 4),
                   'CHFSell' => number_format($airportCHF+0.30, 4),
                   'XOFSell' => number_format($airportXOF+0.30, 4),
                   'MYRSell' => number_format($airportMYR+0.30, 4),
                   'SARSell' => number_format($airportSAR+0.30, 4),
                   'QARSell' => number_format($airportQAR+0.30, 4)

     ),
            'Island' =>
            array( 'USD' => number_format($islandUSD, 4),
                   'EUR' => number_format($islandEUR, 4),
                   'GBP' => number_format($islandGBP, 4),
                   'CNY' => number_format($islandCNY, 4),
                   'CAD' => number_format($islandCAD, 4),
                   'CHF' => number_format($islandCHF, 4),
                   'XOF' => number_format($islandXOF, 4),
                   'MYR' => number_format($islandMYR, 4),
                   'SAR' => number_format($islandSAR, 4),
                   'QAR' => number_format($islandCNY, 4),
                   'USDSell' => number_format($islandUSD+0.30, 4),
                   'EURSell' => number_format($islandEUR+0.30, 4),
                   'GBPSell' => number_format($islandGBP+0.30, 4),
                   'CNYSell' => number_format($islandCNY+0.30, 4),
                   'CADSell' => number_format($islandCAD+0.30, 4),
                   'CHFSell' => number_format($islandCHF+0.30, 4),
                   'XOFSell' => number_format($islandXOF+0.30, 4),
                   'MYRSell' => number_format($islandMYR+0.30, 4),
                   'SARSell' => number_format($islandSAR+0.30, 4),
                   'QARSell' => number_format($islandQAR+0.30, 4)

    ),
            'Victoria' =>
            array( 'USD' => number_format($victoriaUSD, 4),
                   'EUR' => number_format($victoriaEUR, 4),
                   'GBP' => number_format($victoriaGBP, 4),
                   'CNY' => number_format($victoriaCNY, 4),
                   'CAD' => number_format($victoriaCAD, 4),
                   'CHF' => number_format($victoriaCHF, 4),
                   'XOF' => number_format($victoriaXOF, 4),
                   'MYR' => number_format($victoriaMYR, 4),
                   'SAR' => number_format($victoriaSAR, 4),
                   'QAR' => number_format($victoriaCNY, 4),
                   'USDSell' => number_format($victoriaUSD+0.30, 4),
                   'EURSell' => number_format($victoriaEUR+0.30, 4),
                   'GBPSell' => number_format($victoriaGBP+0.30, 4),
                   'CNYSell' => number_format($victoriaCNY+0.30, 4),
                   'CADSell' => number_format($victoriaCAD+0.30, 4),
                   'CHFSell' => number_format($victoriaCHF+0.30, 4),
                   'XOFSell' => number_format($victoriaXOF+0.30, 4),
                   'MYRSell' => number_format($victoriaMYR+0.30, 4),
                   'SARSell' => number_format($victoriaSAR+0.30, 4),
                   'QARSell' => number_format($victoriaQAR+0.30, 4)

), 
            'Kano' =>
            array( 'USD' => number_format($kanoUSD, 4),
                   'EUR' => number_format($kanoEUR, 4),
                   'GBP' => number_format($kanoGBP, 4),
                   'CNY' => number_format($kanoCNY, 4),
                   'CAD' => number_format($kanoCAD, 4),
                   'CHF' => number_format($kanoCHF, 4),
                   'XOF' => number_format($kanoXOF, 4),
                   'MYR' => number_format($kanoMYR, 4),
                   'SAR' => number_format($kanoSAR, 4),
                   'QAR' => number_format($kanoCNY, 4),
                   'USDSell' => number_format($kanoUSD+0.30, 4),
                   'EURSell' => number_format($kanoEUR+0.30, 4),
                   'GBPSell' => number_format($kanoGBP+0.30, 4),
                   'CNYSell' => number_format($kanoCNY+0.30, 4),
                   'CADSell' => number_format($kanoCAD+0.30, 4),
                   'CHFSell' => number_format($kanoCHF+0.30, 4),
                   'XOFSell' => number_format($kanoXOF+0.30, 4),
                   'MYRSell' => number_format($kanoMYR+0.30, 4),
                   'SARSell' => number_format($kanoSAR+0.30, 4),
                   'QARSell' => number_format($kanoQAR+0.30, 4)

),
            'Abuja' =>
            array( 'USD' => number_format($abujaUSD, 4),
                   'EUR' => number_format($abujaEUR, 4), 
                   'GBP' => number_format($abujaGBP, 4),
                   'CNY' => number_format($abujaCNY, 4),
                   'CAD' => number_format($abujaCAD, 4),
                   'CHF' => number_format($abujaCHF, 4),
                   'XOF' => number_format($abujaXOF, 4),
                   'MYR' => number_format($abujaMYR, 4),
                   'SAR' => number_format($abujaSAR, 4),
                   'QAR' => number_format($abujaCNY, 4),
                   'USDSell' => number_format($abujaUSD+0.30, 4),
                   'EURSell' => number_format($abujaEUR+0.30, 4),
                   'GBPSell' => number_format($abujaGBP+0.30, 4),
                   'CNYSell' => number_format($abujaCNY+0.30, 4),
                   'CADSell' => number_format($abujaCAD+0.30, 4),
                   'CHFSell' => number_format($abujaCHF+0.30, 4),
                   'XOFSell' => number_format($abujaXOF+0.30, 4),
                   'MYRSell' => number_format($abujaMYR+0.30, 4),
                   'SARSell' => number_format($abujaSAR+0.30, 4),
                   'QARSell' => number_format($abujaQAR+0.30, 4)


),
            'CBN' =>
            array( 'USD' => number_format($usd_ngn, 4),
                   'EUR' => number_format($eur_ngn, 4),
                   'GBP' => number_format($gbp_ngn, 4),
                   'CNY' => number_format($cny_ngn, 4),
                   'CAD' => number_format($cad_ngn, 4),
                   'CHF' => number_format($chf_ngn, 4),
                   'XOF' => number_format($xof_ngn, 4),
                   'MYR' => number_format($myr_ngn, 4),
                   'SAR' => number_format($sar_ngn, 4),
                   'QAR' => number_format($qar_ngn, 4),
                   'USDSell' => number_format($usd_ngn+0.30, 4),
                   'EURSell' => number_format($eur_ngn+0.30, 4),
                   'GBPSell' => number_format($gbp_ngn+0.30, 4),
                   'CNYSell' => number_format($cny_ngn+0.30, 4),
                   'CADSell' => number_format($cad_ngn+0.30, 4),
                   'CHFSell' => number_format($chf_ngn+0.30, 4),
                   'XOFSell' => number_format($xof_ngn+0.30, 4),
                   'MYRSell' => number_format($myr_ngn+0.30, 4),
                   'SARSell' => number_format($sar_ngn+0.30, 4),
                   'QARSell' => number_format($qar_ngn+0.30, 4)

            )

     );

print_r(json_encode($rates));  


                
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update = new Bmupdate;
        $update->user_id = auth()->id();
        $update->airport_usd = $request->input('airport_usd');
        $update->island_usd = $request->input('island_usd');
        $update->victoria_usd = $request->input('victoria_usd');
        $update->kano_usd = $request->input('kano_usd');
        $update->abuja_usd = $request->input('abuja_usd');
        $update-> save();

        return redirect('home')->with('success', 'New rates was successfully updates');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}