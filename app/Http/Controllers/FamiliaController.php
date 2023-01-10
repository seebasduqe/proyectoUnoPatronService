<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Illuminate\Http\Request;
//use App\Repositories\FamiliaRepositoryInterface;
use App\Services\FamiliaServiceInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class FamiliaController extends Controller
{
    protected $familiaService;

    public function __construct(FamiliaServiceInterface $familiaService)
    {
        $this->familiaService = $familiaService;
    }

    public function index(){
        $familias = $this->familiaService->listarFamilia();
        return view('familiaView.index', ['familias' => $familias]);
    }

    public function getById(string $id){
        $familia = $this->familiaService->traerFamiliaPorId($id);
        return Response($familia, $status = 200);
    }

    public function FormFamilia(){
        return view('familiaView.form');
    }

    public function postFamilia(Request $request){
        
        $familia = new Familia();

        $familia->codigo = $request->codigo;
        $familia->nombre = $request->nombre;
        $familia->descripcion = $request->descripcion;

        $this->familiaService->salvarFamilia($familia);

        return Redirect('familias');
    }

    //Revisar codigo
    public function putFamilia(Request $request,string $id){


        $familia = new Familia();
        $familia->codigo = $request->codigo;
        $familia->nombre = $request->nombre;
        $familia->descripcion = $request->descripcion;

        $this->familiaService->actualizarFamilia($familia, $id);

        return Redirect('familias');
    }

    public function deleteFamilia(string $id){
        $this->familiaService->borrarFamilia($id);
        return Response($status = 200);
    }
    
}
