<?php
namespace App\Repositories;
use App\Models\Campers;
use App\Repositories\CampersRepositoryInterface;

class CampersRepository implements CampersRepositoryInterface
{
  public function getCampers()
  {
    $registrants = 'hello';
  return $registrants;
  }
}