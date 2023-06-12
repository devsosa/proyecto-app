<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(): Renderable {
        $proyectos = Proyecto::paginate();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create(): Renderable {
        $proyecto = new Proyecto;
        $title = __('Crear proyecto');
        $action = route('proyectos.store');
        $buttonText = __('Crear proyecto');
        return view('proyectos.form', compact('proyecto', 'title', 'action', 'buttonText'));
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'nombreProyecto' => 'required|unique:proyectos,nombreProyecto|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'montoPlanificado' => 'int',
            'montoPatrocinado' => 'int',
            'montoFondosPropios' => 'int'
        ]);

        Proyecto::create([
            'nombreProyecto' => $request->string('nombreProyecto'),
            'fuenteFondos' => $request->string('fuenteFondos'),
            'montoPlanificado' => $request->float('montoPlanificado'),
            'montoPatrocinado' => $request->float('montoPatrocinado'),
            'montoFondosPropios' => $request->float('montoFondosPropios')
        ]);

        return redirect()->route('proyectos.index');
    }

    public function show(Proyecto $proyecto): Renderable {
        //$proyecto->load();
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto): Renderable {
        $title = __('Editar proyecto');
        $action = route('proyectos.update', $proyecto);
        $buttonText = __('Actualizar proyecto');
        $method = 'PUT';

        return view('proyectos.form', compact('proyecto', 'title', 'action', 'buttonText', 'method'));
    }

    public function update(Request $request, Proyecto $proyecto): RedirectResponse {
        $request->validate([
            'nombreProyecto' => 'required|unique:proyectos,nombreProyecto,'.$proyecto->id.'|string|max:255',
            'fuenteFondos' => 'required|string|max:255',
            'montoPlanificado' => 'int',
            'montoPatrocinado' => 'int',
            'montoFondosPropios' => 'int'
        ]);

        $proyecto->update([
            'nombreProyecto' => $request->string('nombreProyecto'),
            'fuenteFondos' => $request->string('fuenteFondos'),
            'montoPlanificado' => $request->float('montoPlanificado'),
            'montoPatrocinado' => $request->float('montoPatrocinado'),
            'montoFondosPropios' => $request->float('montoFondosPropios')
        ]);

        return redirect()->route('proyectos.index');
    }

    public function destroy(Proyecto $proyecto): RedirectResponse {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
