<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new usuario
     */
    public function create()
    {
        return view('admin.users.registro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string|min:3|max:50',
            'email' => 'email|max:15',
            'password' => 'string|min:8|confirmed:confiermed:password',

        ]);


        try {
            $usuario = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            if(!$usuario){
                Alert::error('no se realizo el registro');
                return $this->create();
            }
            Alert::sucess('registro de usuario completado');
            return $this->create();
        } catch (Exception $e) {
            Alert::error(
                'No fue posible almacenar el registro del usuario',
            );
            Log::error('UsuarioWebController.store ->' . $e->getMessage());
            return $this->create();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
