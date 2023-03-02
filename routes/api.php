<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\SenderoCollection;
use App\Http\Resources\GrupoResource;
use App\Models\Sendero;
use App\Models\Grupo;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//////////////////////////////////////////////////


Route::middleware('auth:sanctum')->group(function () {
   
    Route::get('grupos/{id}',  function ($id) {
        /*
        $grupo = Grupo::find($id);
        if ($grupo == null) {
            return response()->json([ 'msg:' => 'Error, grupo no encontrado']);
        } else {
            return new GrupoResource(Grupo::findOrFail($id));
        }
        */
        return new GrupoResource(Grupo::findOrFail($id));
    });
    
    Route::get('grupos/',  function () {
        return GrupoResource::collection(Grupo::all());
    });
    
    Route::get('senderos/',  function () {
        return new SenderoCollection(Sendero::paginate(4));
    });

    Route::post('senderos/{id}/registrar' ,  function (Request $request, $id) {
        $sendero_id = $id;
        $sendero = Sendero::find($id);
        $grupo_id = $request->grupo;
        $descripcion = $request->descripcion;
        $fecha = $request->fecha;

        $sendero->grupos()->attach($grupo_id, ['descripcion' => $descripcion, 'fecha' => $fecha, 'img' => ""]);

        return response()->json(['msg:' => 'Sendero realizado']);

    });

});


//CREAR TOKEN
Route::post('/tokens/create', function (Request $request) {
  
    $user = User::where('email', $request->email)->first();
  
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Usuario o contraseña incorrectos']);
        /*
        throw ValidationException::withMessages([
          'email' => ['The provided credentials are incorrect.'],
        ]);
        */
    }

    $token = $user->createToken($request->email);
 
    return response()->json(['token' => $token->plainTextToken]);
});