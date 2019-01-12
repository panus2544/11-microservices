<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SponsorRepository;

class SponsorController extends Controller
{
    protected $sponRepo;

    public function __construct(){
        $this->sponRepo = new SponsorRepository;
    }

    public function getPosts(){
        $spons = $this->sponRepo->getPosts();
        return response()->json($spons);
    }

    public function getPost($sponsor_id){
        $spon = $this->sponRepo->getPost($sponsor_id);
        return response()->json($spon);
    }

    public function updateSponname(Request $request){
        $spon = $request->all();
        $spon = $this->sponRepo->updatesponname($spon['sponsor_name'],$spon['sponsor_id']);
        return response()->json(['message'=>'update success']);
    }
    
    public function updateSponorder(Request $request){
        $spon = $request->all();
        $spon = $this->sponRepo->updatesponorder($spon['sponsor_order'],$spon['sponsor_id']);
        return response()->json(['message'=>'update success']);
    }

    public function createSponsor(Request $request){
        $createsuccess = 201;
        $spon = $request->all();
        $this->sponRepo->create($spon);
        return response()->json($spon,$createsuccess);
    }

    public function delete($id){
        $spons = $this->sponRepo->delete($id);
        return response()->json($spons);
    }
}
