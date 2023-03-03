<?php

namespace App\Http\Controllers;


use App\Models\Grupo;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Facades\CartFacade;
use \Cart;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.grupos', [ 'grupos' => Grupo::paginate(10) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("web.gruponuevo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Grabar un objeto Grupo en BBDD con los datos del $request
        $grupo = new Grupo();
        $grupo->nombre = $request->input('nombre');
        $grupo->nivel = $request->input('nivel');

        //Checkbox
        if ($request->has('federado'))
            $grupo->federado = 1;
        else
            $grupo->federado = 0;
            
       $grupo->save();

       return view('web.grupos', [ 'grupos' => Grupo::paginate(10) ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        echo "Aquí sacamos los componentes del grupo";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        //Borrar un grupo solo si estoy inscrito en él
        if ($grupo->componentes()->where('user_id', Auth::user()->id)->get()->count() == 1) {
            Grupo::destroy($grupo->id);
            //Otra forma: $grupo->delete();
        }


        return view('web.grupos', [ 'grupos' => Grupo::paginate(10) ]);

    }



    //MÉTODOS MANY TO MANY
    public function componentes(Grupo $grupo)
    {
        return view('web.grupocomponentes' , ['grupo' => $grupo, 'componentes' => $grupo->componentes()->orderBy('name', 'asc')->get()]);
    }

    public function inscribir(Grupo $grupo, User $user) {
        if ( $grupo->componentes()->where('user_id', $user->id)->get()->count() == 0)
            $grupo->componentes()->attach($user->id, [ 'created_at' => Carbon::now()]);
        
        return view('web.grupocomponentes' , ['grupo' => $grupo, 'componentes' => $grupo->componentes()->orderBy('name', 'asc')->get()]);
    }

    public function desinscribir(Grupo $grupo, User $user) {
        if ( $grupo->componentes()->where('user_id', $user->id)->get()->count() == 1)
            $grupo->componentes()->detach($user->id);
        
        return view('web.grupocomponentes' , ['grupo' => $grupo, 'componentes' => $grupo->componentes()->orderBy('name', 'asc')->get()]);
    }


    /**
     * Método de prueba para mostrar cómo se haría para simular un carrito de la copra
     */
    public function addCarrito(Grupo $grupo, Request $request) {

        $request->session()->push('carrito.lineas', array(
            'id' => $grupo->id,
            'name' => $grupo->nombre,
            'price' => 100,
            'quantity' => 1
        ));

        //Ver carro
        echo "Ver carro";

        $value = session('carrito.lineas');

        foreach($value as $val) {
            echo $val['id'] . " " . $val['name'] . " " . $val['price'] . "<br>"; 
        }

    }
}
