<x-admin-layout title="Usuarios" :breadcrumbs="[
        [
            'name' => 'Dashboard',
            'href' => route('admin.dashboard')
        ],

        [
            'name' => 'Usuarios',
            'href' => route('admin.users.index'),
        ],
        [
            'name' => 'Crear',
            
        ]

    ]">

    <x-wire-card>
        <x-validation-errors class="mb-4"/>

        <form action="{{route('admin.users.store')}}" method="POST">
            @csrf

        <div class="space-y-4">
            <div class="grid lg:grid-cols-2 gap-4">
            <x-wire-input label="Nombre" name="name" placeholder="Nombre completo" required
            :value="old('name')"></x-wire-input>

            <x-wire-input label="Correo" name="email" type="email" placeholder="ejemplo@dominio.com" required automcomplete="email"
            :value="old('email')"></x-wire-input>

            <x-wire-input label="Contraseña" name="password" type="password" placeholder="Mínimo 8 caracteres" required 
            autocomplete="new-password"></x-wire-input>

            <x-wire-input label="Confirmar contraseña" name="password_confirmation" type="password" placeholder="Repite la contraseña" required 
            autocomplete="new-password"></x-wire-input>

            <x-wire-input label="Número de ID" name="id_number" placeholder="Ej. 123456789" autocomplete="off" required inputmode="numeric" :value="old('id_number')"></x-wire-input>

            <x-wire-input label="Télefono" name="phone" placeholder="Ej. 9911099943" autocomplete="tel" required inputmode="tel" :value="old('phone')"></x-wire-input>
            </div>
            <x-wire-input name="address" label="Dirección" required :value="old('address')" placeholder="Ej. Calle 90 293" autocomplete="street-address"></x-wire-input>

            <div class="space-y-1">
                <x-wire-native-select name="role_id" label="Rol" required >
                    <option value="">
                        Seleccione un Rol
                    </option>
                

                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" @selected(old('role_id') == $role->id)> {{ $role->name}}</option>
                    @endforeach
                </x-wire-native-select>
                <p class="text-sm text-gray-500">
                    Define los permisos y accesos del usuario
                </p>
            </div>

                <div class="flex justify-end">
                    <x-wire-button type="submit" blue> Guardar </x-wire-button>
                </div>
            </div>
            
        </form>    
    </x-wire-card>  

</x-admin-layout>