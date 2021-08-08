<?php

namespace App\Http\Controllers;

use App\Models\calc;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
  public function index(){
    $iNowNum = calc::where('id',1)->first();
    // dd($iNowNum->number);
    return view('calc')->with('nowNumber',$iNowNum->number);
  }

  // 加1
  public function plus1(){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = 1;
    $iUpdateNum = $iNowNum->number + $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 加10
  public function plus10(){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = 10;
    $iUpdateNum = $iNowNum->number + $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 歸零
  public function clear(){
    $iNowNum = calc::where('id',1)->first();
    // $iChangeNum = 1;
    // $iUpdateNum = $iNowNum->number + $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>0));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 加
  public function plus(Request $request){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = $request->input('plusnum');
    // dd($iNowNum,$iChangeNum);
    $iUpdateNum = $iNowNum->number + $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 減
  public function less(Request $request){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = $request->input('lessnum');
    $iUpdateNum = $iNowNum->number - $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 乘
  public function Multiply(Request $request){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = $request->input('Multiplynum');
    $iUpdateNum = $iNowNum->number * $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
  // 除
  public function divide(Request $request){
    $iNowNum = calc::where('id',1)->first();
    $iChangeNum = $request->input('dividenum');
    $iUpdateNum = $iNowNum->number / $iChangeNum;
    $sUpdate = calc::where('id',1)->update(array('number'=>$iUpdateNum));
    $iNowNum = calc::where('id',1)->first();
    return $iNowNum->number;
  }
}
