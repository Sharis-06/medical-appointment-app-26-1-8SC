{{-- Lógica de PHP para menejar errores y controlar la pestaña activa --}}

@php
// definimos qué campos pertenecen a cada pestaña para dtetectar errores 
$errorGroups = [
    'antecedentes' => ['allergies', 'chronic_conditions', 'surgical_history', 'family_history'],
    'informacion-general' => ['blood_type_id', 'observations'],
    'contacto-emergencia' => [
            'emergency_contact_name', 
            'emergency_contact_phone', 
            'emergency_contact_relationship',
        ],
];

// Pestaña por defecto 
    $initialTab = 'datos-personales';

    // Si hay errores, buscamos en que grupo están para abrir esa pestaña 
    foreach ($errorGroups as $tabName => $fields) {
        if ($errors->hasAny($fields)) {
            $initialTab = $tabName;
            break; // Salimos del bucle una vez que encontramos la primera pestaña con errores
        }
        # code...
    }
    
@endphp
<x-admin-layout title="Pacientes" :breadcrumbs="[
        [
            'name' => 'Dashboard',
            'href' => route('admin.dashboard')
        ],

        [
            'name' => 'Pacientes',
            'href' => route('admin.patients.index'),
        ],
        [
            'name' => 'Editar',
            
        ]

    ]">

    {{-- Enacebzado con fotos y acciones --}}
        <form action="{{route('admin.patients.update', $patient)}}" method="POST">
            @csrf
            @method('PUT')
        <x-wire-card class="mb-8">
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center">
                    <img src="{{$patient->user->profile_photo_url}}" alt="{{$patient->user->name}}"
                    class="h-20 w-20 rounded-full object-cover object-center">
                    <div>
                        <p class="text-2x font-bold text-gray-900 ml-4">{{$patient->user->name}}</p>
                    </div>
                </div>
                <div class="flex space-x-3 mt-6 lg:mt-0">
                    <x-wire-button outline gray href="{{route('admin.patients.index')}}">Volver
                    </x-wire-button>
                    <x-wire-button type="submit">
                        <i class="fa-solid fa-check"></i>
                        Guardar cambios
                    </x-wire-button>
                </div>
            </div>
        </x-wire-card>

        {{-- Taps de navegación --}}
        <x-wire-card>
            <x-tabs :active="$initialTab">

                <x-slot name="header">
                    <x-tabs-link tab="datos-personales">
                        <i class="fa-solid fa-user me-2"></i>
                        Datos personales
                    </x-tabs-link>

                    <x-tabs-link tab="antecedentes"
                        :error="$errors->hasAny($errorGroups['antecedentes'])">
                        <i class="fa-solid fa-file-lines me-2"></i>
                        Antecedentes 
                    </x-tabs-link>

                    <x-tabs-link tab="informacion-general"
                        :error="$errors->hasAny($errorGroups['informacion-general'])">
                        <i class="fa-solid fa-info me-2"></i>
                        Información general
                    </x-tabs-link>

                    <x-tabs-link tab="contacto-emergencia"
                        :error="$errors->hasAny($errorGroups['contacto-emergencia'])">
                        <i class="fa-solid fa-heart me-2"></i>
                        Contacto de emergencia
                    </x-tabs-link>
                </x-slot>

                {{-- CONTENIDO --}}

                <x-tab-content tab="datos-personales">
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4 shadow-sm">
                        <div class="flex justify-between">
                            <div>
                                <h3 class="text-sm font-bold text-blue-800">
                                    Edición de cuenta de usuario
                                </h3>
                                <p class="text-sm text-blue-600">
                                    La información de acceso debe gestionarse desde la cuenta de usuario
                                </p>
                            </div>

                            <x-wire-button primary sm 
                                href="{{route('admin.users.edit',$patient->user)}}" 
                                target="_blank">
                                Editar usuario 
                            </x-wire-button>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-4">
                        <div>
                            <span class="text-gray-500 font-semibold">Teléfono:</span>
                            <span class="ml-1">{{$patient->user->phone}}</span>
                        </div>

                        <div>
                            <span class="text-gray-500 font-semibold">Email:</span>
                            <span class="ml-1">{{$patient->user->email}}</span>
                        </div>

                        <div>
                            <span class="text-gray-500 font-semibold">Dirección:</span>
                            <span class="ml-1">{{$patient->user->address}}</span>
                        </div>
                    </div>
                </x-tab-content>


                <x-tab-content tab="antecedentes">
                    <div class="grid lg:grid-cols-2 gap-4">
                        <x-wire-textarea label="Alergias conocidas" name="allergies">
                            {{old('allergies', $patient->allergies)}}
                        </x-wire-textarea>

                        <x-wire-textarea label="Enfermedades crónicas" name="chronic_conditions">
                            {{old('chronic_conditions', $patient->chronic_conditions)}}
                        </x-wire-textarea>

                        <x-wire-textarea label="Antecedentes quirúrgicos" name="surgical_history">
                            {{old('surgical_history', $patient->surgical_history)}}
                        </x-wire-textarea>

                        <x-wire-textarea label="Antecedentes familiares" name="family_history">
                            {{old('family_history', $patient->family_history)}}
                        </x-wire-textarea>
                    </div>
                </x-tab-content>

                <x-tab-content tab="informacion-general">
                    <x-wire-native-select label="Tipo de sangre" name="blood_type_id">
                        <option value="">Selecciona un tipo</option>
                        @foreach ($bloodTypes as $bloodType)
                            <option value="{{$bloodType->id}}" 
                                @selected(old('blood_type_id', $patient->blood_type_id) == $bloodType->id)>
                                {{$bloodType->name}}
                            </option>
                        @endforeach
                    </x-wire-native-select>

                    <x-wire-textarea label="Observaciones" name="observations">
                        {{old('observations', $patient->observations)}}
                    </x-wire-textarea>
                </x-tab-content>

                <x-tab-content tab="contacto-emergencia">
                    <x-wire-input label="Nombre del contacto de emergencia" name="emergency_contact_name"
                        value="{{old('emergency_contact_name', $patient->emergency_contact_name)}}" />
                    <x-wire-phone label="Teléfono del contacto de emergencia" name="emergency_contact_phone" mask="(###) ###-####"
                        value="{{old('emergency_contact_phone', $patient->emergency_contact_phone)}}" />
                    <x-wire-input label="Relación con contacto de emergencia" name="emergency_contact_relationship"
                        value="{{old('emergency_contact_relationship', $patient->emergency_contact_relationship)}}" />
                </x-tab-content>
            </x-tabs>
        </x-wire-card>
    </form>
</x-admin-layout>

