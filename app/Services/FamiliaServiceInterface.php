<?php

namespace App\Services;

use App\Models\Familia;

interface FamiliaServiceInterface {

          public function listarFamilia();

          public function traerFamiliaPorId(string $id);

          public function salvarFamilia(Familia $familia);

          public function actualizarFamilia(Familia $familia, string $id);

          public function borrarFamilia(string $id);
}