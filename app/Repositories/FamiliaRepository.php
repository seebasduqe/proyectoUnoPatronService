<?php

namespace App\Repositories;
use App\Models\Familia;

class FamiliaRepository implements FamiliaRepositoryInterface {

        protected $familia;

        public function __construct(Familia $familia)
        {
                $this->familia = $familia;
        }

          public function getAllDB()
          {
                  return Familia::all(); 
          }

          public function getByIdDB(string $id)
          {
                    return Familia::find($id);
          }

          public function postDB(Familia $familia)
          {
                    $familia->save();
          }

          public function putDB(Familia $familia, string $id)
          {
                    Familia::find($id)->update($familia);   
          }

          public function deleteDB(string $id)
          {
                    Familia::destroy($id);
          }
}
