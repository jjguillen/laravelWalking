<?php

namespace App\Http\Controllers;

use App\Models\Sendero;
use App\Models\User;
use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SenderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.senderos', [ 'senderos' => Sendero::paginate(9) ]);
    }

    public function indexAdmin()
    {
        return view('admin.senderos', [ 'senderos' => Sendero::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formNuevoSendero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        foreach($request->all() as $input)
            echo $input . "<br>";
        */
        
        //Mete los datos del input en la sesión
        $request->flash();


        if (!$request->filled('localidad')) {
            return back()->withInput();
        }

        //Grabar un objeto Sendero en BBDD con los datos del $request
        $sendero = new Sendero();
        $sendero->nombre = $request->input('nombre');
        $sendero->kms = $request->input('kms');
        $sendero->descripcion = $request->input('descripcion');
        $sendero->dificultad = $request->input('dificultad');
        $sendero->localidad = $request->input('localidad');

        //Imagen
        $path = $request->file('img')->store('public');
        // /public/nombreimagengenerado.jpg
        //Cambiamos public por storage en la BBDD para que se pueda ver la imagen en la web
        $sendero->img =  str_replace('public', 'storage', $path);

        $sendero->save();

        return view('admin.senderos', [ 'senderos' => Sendero::all() ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function show(Sendero $sendero)
    {
        return view('web.senderoDetalle', ['sendero' => $sendero]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function edit(Sendero $sendero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sendero $sendero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sendero  $sendero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sendero $sendero)
    {
        $sendero->delete();
        return redirect('/senderos');
    }


    //Formulario para registrar que haces una ruta con un grupo de amigos
    public function registro(Sendero $sendero) {

        //Sacar todos los grupo del usuario logueado
        $grupos = Auth::user()->grupos()->get();

        return view('web.formRegistrarSendero', ['grupos' => $grupos, 'sendero' => $sendero]);
    }

    //Grabar la valoración/registro de haber hecho un sendero en grupo
    public function registrar(Sendero $sendero, Request $request) {

        $sendero_id = $sendero->id;
        $grupo_id = $request->grupo;
        $descripcion = $request->descripcion;
        $fecha = $request->fecha;
        
        if ($request->filled('img')) {
            $path = $request->file('img')->store('public');
            $img =  str_replace('public', 'storage', $path);
        } else {
            $img = "";
        }

        $sendero->grupos()->attach($grupo_id, ['descripcion' => $descripcion, 'fecha' => $fecha, 'img' => $img]);

        return redirect('/senderos');

    }


}
