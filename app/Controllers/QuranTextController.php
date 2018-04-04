<?php


namespace App\Http\Controllers;

use App\Providers\Repositories\QuranRepo;
use Illuminate\Http\Request;
use App\Models\QuranText;
use Illuminate\Support\Facades\Auth;
use App\Services;

class QuranTextController extends Controller
{
    private $_quran_service;
    private $_quranText;

    public function __construct(Services\QuranService $service, QuranText $quranText) //this is dependency injector
    {
        $this->_quran_service = $service;
        $this->_quranText = $quranText;
    }

    public function registration(){
        return ('registeration');
    }

    public function test(){
        return ('welcome');
    }

    public function index($param = null)
    {
        if($param != null){

            $data = $this->_quran_service->liveSearchTxt($param);
            return request()->json(200,$data);
        }
        else {

            $quranText = $this->_quran_service->fetchAllRecord();
            return request()->json(200, $quranText);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function surahNames()
    {
        $surahNames = $this->_quran_service->getAllSurah();
        return \request()->json(200,$surahNames);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
//        if( ! is_null($request['sura']) )
//            $data['sura'] = $request['sura'];
//            else
//                $data['sura']='';
//
//        if( ! is_null($request['aya']) )
//            $data['aya'] = $request['aya'];
//        else
//            $data['aya']='';
        if($request)
            $data['sura'] = $request['sura'];

//        dd($data);
        $quranText = $this->_quranText->fetchSpecificRecord($data);
        return request()->json(200,$quranText);
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
