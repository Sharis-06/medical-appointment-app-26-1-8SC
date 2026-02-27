<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // devuelva una vista 
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar que se cree bien
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        // si pasa la validación creamos el rol
        Role::create([
            'name' => $request->name
        ]);

        // Alerta de funciomaiento (confirmacion de operacion exitosa) 
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol creado correctamente',
            'text' => 'El rol se ha creado correctamente'
        ]);

        // redireccionar a la vista de index (tabla principal de roles)
        return redirect(route('admin.roles.index')) ->with('success', 'Rol created successfully');
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
    public function edit(Role $role)
    {
        //devuelva una vista
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //va validar y si pasa la validación actualiza el rol (Validar que se inserte bien yq ue eexcluya la fila que se edita)
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        // si pasa la validación actualizamos el rol
        $role->update([
            'name' => $request->name
        ]);

        // Confirmación de operación exitosa
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol actualizado correctamente',
            'text' => 'El rol se ha modificado correctamente'
        ]);

        // redireccionar a la vista de editar
        return redirect(route('admin.roles.edit', $role));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //Borrar el elemento
        $role->delete();

        //Confirmación de operación exitosa
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol eliminado correctamente',
            'text' => 'El rol ha sido eliminado correctamente',
        ]);

        //Redirccion
        return redirect(route('admin.roles.index'));
    }
}
