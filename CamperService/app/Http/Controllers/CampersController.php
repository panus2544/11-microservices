<?php

namespace App\Http\Controllers;


use App\Http\Controllers\CampersController;
use App\Repositories\CampersRepository;
use App\Repositories\CampersRepositoryInterface;
use Aws\StorageGateway\StorageGatewayClient;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use Storage;

class CampersController extends Controller
{
    protected $campers;
    public function __construct(CampersRepositoryInterface $camp)
    {
        $this->campers = $camp;
    }
    public function getCampers(Request $req)
  {
     $camps = $this->campers->getCampers();
   
    return response()->json(['test' => $camps]);
  }
  public function uploadFile(Request $request)
  {
    $wip_id = 'mockupjaa';
    $time = time()+random_int(0,10);
    $file = $request->file('files');
    $filename = ($request.'_'.$wip_id);
    $destinationPath = $wip_id.'/'.$time;
    $created = Storage::disk('minio')->put($destinationPath,file_get_contents($file[0]->getRealPath()));
    dd(file_get_contents($file[0]->getRealPath()));
    $url = Storage::disk('minio')->url($destinationPath);
    return  response()->json($url, 200);
  }
}

