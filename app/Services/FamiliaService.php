<?php

namespace App\Services;

use App\Models\Familia;
use App\Repositories\FamiliaRepositoryInterface;
use App\Services\FamiliaServiceInterface;

class FamiliaService implements FamiliaServiceInterface {


          protected $familiaRepository;

          public function __construct(FamiliaRepositoryInterface $familiaRepository)
          {
                    $this->familiaRepository = $familiaRepository;
          }

          public function listarFamilia() {

                    $familias = $this->familiaRepository->getAllDB();
                    return $familias;
          } 

          public function traerFamiliaPorId(string $id) {

                    $familiaPorId = $this->familiaRepository->getByIdDB($id);
                    return $familiaPorId;
          }

          public function salvarFamilia(Familia $familia): void
          {
                    $this->familiaRepository->postDB($familia);
          }

          public function actualizarFamilia(Familia $familia,string $id): void {
                    $familiaUpdated = $this->familiaRepository->putDB($familia,$id);
          }

          public function borrarFamilia(string $id): void {
                    $this->familiaRepository->deleteDB($id);
          }

}