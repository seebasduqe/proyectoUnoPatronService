<?php

namespace App\Repositories;

use App\Models\Familia;

interface FamiliaRepositoryInterface {

          public function getAllDB();

          public function getByIdDB(string $id);

          public function postDB(Familia $familia);

          public function putDB(Familia $familia,string $id);

          public function deleteDB(string $id);

}