<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Periodo;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotaController extends Controller
{
    public function index()
    {
        $materias = Asignatura::paginate();
        return view('nota.index', compact('materias'));
    }

    public function create()
    {
        $nota = new Nota();
        return view('nota.calificar', compact('nota'));
    }


    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $nota = Nota::create($request->all());
        $nota->fecha = now()->format('Y-m-d H:i:s');
        $fechaNota = $nota->fecha;
        $periodo = Periodo::where('fechaInicio', '<=', $fechaNota)
                        ->where('fechaFin', '>=', $fechaNota)
                        ->first();
        $nota->idPeriodo = $periodo->id;
        $nota->save();

        return redirect()->route('calificar.create')
            ->with('success', 'Nota created successfully.');
    }


    public function show(Nota $nota)
    {
        //
    }


    public function edit(Nota $nota)
    {
        //
    }

 
    public function update(Request $request, Nota $nota)
    {
        //
    }


    public function destroy(Nota $nota)
    {
        //
    }


    public function notasPeriodo(){
        $notas = Nota::all();
        $estudiantes = User::role('alumno')->get();
        $idEstudiante = Auth::user()->id;
        $estudiante = Persona::find($idEstudiante);

        $resultados = $this->CalcularNotaPeriodo();
        $notaPeriodo = $resultados['promedio_notas'];



        return view('nota.notasPeriodos', compact('notas','estudiante','estudiantes','notaPeriodo'));
    }

    public function notaPeridoIndividual(){
        $periodos = Periodo::pluck('periodo', 'id');
        $estudiante = Persona::find(auth()->user()->id);
        $notas = $estudiante->notas;
        return view('nota.notasPorPeriodo', compact('periodos','notas'));
    }
    
    // public function capturarIdPeriodo(){
    //     $periodoSeleccionado = request('periodo');
    //     return $periodoSeleccionado;
    // }
    



    public function CalcularNotaPeriodo(){
        $periodo = Periodo::find(1);
    
        $notas = Nota::whereBetween('fecha', [$periodo->fechaInicio, $periodo->fechaFin])->get();
            
        $sumatoriaNotas = $notas->sum('valor');
        $numeroDeNotas = $notas->count();
        $promedioNotas = $numeroDeNotas > 0 ? $sumatoriaNotas / $numeroDeNotas : 0;
    
        return [
                'sumatoria_notas' => $sumatoriaNotas,
                'numero_de_notas' => $numeroDeNotas,
                'promedio_notas' => $promedioNotas
        ];
    }
    
}
