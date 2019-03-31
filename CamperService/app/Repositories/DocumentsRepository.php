<?php
namespace App\Repositories;
use App\Models\Documents;
use App\Repositories\DocumentsRepositoryInterface;

class DocumentsRepository implements DocumentsRepositoryInterface
{
  public function checkDocId($wipId)
  {
    $docId = 'doc_id_'.$wipId;
    $docId = Documents::select('doc_id')->where('doc_id',$docId)->get();
    return $docId->isEmpty();
  }

  public function ctreateDocBywipId($wipId,$path,$type)
  {
    $status = 'unsuccess'; 
    $createDoc = Documents::create([
      'doc_id' => 'doc_id_'.$wipId,
       $type => $path,
      'status' => $status,
      'reason' => null,
      'pick_location' => null,
      'size' => null
    ]);
    return $createDoc;
  }

  public function updateDoc($wipId,$path,$type)
  {
    $docId = 'doc_id_'.$wipId;
    $docId = Documents::where('doc_id',$docId)->update(array($type => $path));
    return $docId;
  }
}