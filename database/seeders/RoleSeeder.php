<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name' =>'Gerente Transporte']);


        
        ////////////PERMISOS DE USUARIOS /////////////////

        Permission::create(['name' => 'usuario.index',
                                'description'=>'Lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.create',
                                'description'=>'Registrar Usuarios'])->syncRoles([$role1]); 
        Permission::create(['name' => 'usuario.edit',
                                'description'=>'Editar Usuarios'])->syncRoles([$role1]);           
        Permission::create(['name' => 'usuario.destroy',
                                'description'=>'Eliminar Usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuario.show',
                                'description'=>'Ver Datos de Usuario'])->syncRoles([$role1]);
        ///MODULO ROLES


        Permission::create(['name' => 'role.index',
                                'description'=>'Lista de Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'role.create',
                                'description'=>'Registrar Roles'])->syncRoles([$role1]); 
        Permission::create(['name' => 'role.edit',
                                'description'=>'Editar Roles'])->syncRoles([$role1]);            
        Permission::create(['name' => 'role.destroy',
                                'description'=>'Eliminar Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'role.show',
                                'description'=>'Ver Datos de Rol'])->syncRoles([$role1]);

        ///MODULO TIPO DE ORGANIZACION

        Permission::create(['name' => 'tipo-organizacion.index',
                                'description'=>'Lista de Tipo De Organizaciones'])->syncRoles([$role2]);
        Permission::create(['name' => 'tipo-organizacion.create',
                                'description'=>'Registrar Tipo De Organizaciones'])->syncRoles([$role2]); 
        Permission::create(['name' => 'tipo-organizacion.edit',
                                'description'=>'Editar Tipo De Organizaciones'])->syncRoles([$role2]);
                     
        Permission::create(['name' => 'tipo-organizacion.destroy',
                                'description'=>'Eliminar Tipo De Organizaciones'])->syncRoles([$role2]);
        Permission::create(['name' => 'tipo-organizacion.show',
                                'description'=>'Ver Datos de Tipo Organizacion'])->syncRoles([$role2]);
        ///MODULO RESOLUCIONES

        Permission::create(['name' => 'resolucion.index',
                                'description'=>'Lista de Resoluciones'])->syncRoles([$role2]);
        Permission::create(['name' => 'resolucion.create',
                                'description'=>'Registrar Resoluciones'])->syncRoles([$role2]); 
        Permission::create(['name' => 'resolucion.edit',
                                'description'=>'Editar Resoluciones'])->syncRoles([$role2]);
                    
        Permission::create(['name' => 'resolucion.destroy',
                                'description'=>'Eliminar Resoluciones'])->syncRoles([$role2]);
        Permission::create(['name' => 'resolucion.show',
                                'description'=>'Ver Datos de Resolucion'])->syncRoles([$role2]);
        /////////////MODULO EMPRESAS 
        Permission::create(['name' => 'empresa.index',
                                'description'=>'Lista de empresas'])->syncRoles([$role2]);
        Permission::create(['name' => 'empresa.create',
                                'description'=>'Registrar empresas'])->syncRoles([$role2]); 
        Permission::create(['name' => 'empresa.edit',
                                'description'=>'Editar empresas'])->syncRoles([$role2]);
                     
        Permission::create(['name' => 'empresa.destroy',
                                'description'=>'Eliminar empresas'])->syncRoles([$role2]);
        Permission::create(['name' => 'empresa.show',
                                'description'=>'Ver Datos de Empresa'])->syncRoles([$role2]);
        /////MODULO ZONAS
        Permission::create(['name' => 'zona.index',
                                'description'=>'Lista de Zonas'])->syncRoles([$role2]);
        Permission::create(['name' => 'zona.create',
                                'description'=>'Registrar Zonas'])->syncRoles([$role2]); 
        Permission::create(['name' => 'zona.edit',
                                'description'=>'Editar Zonas'])->syncRoles([$role2]);
                    
        Permission::create(['name' => 'zona.destroy',
                                'description'=>'Eliminar Zonas'])->syncRoles([$role2]);
        Permission::create(['name' => 'zona.show',
                                'description'=>'Ver Datos de Zona'])->syncRoles([$role2]);
        /////MODULO PARADERO
        Permission::create(['name' => 'paradero.index',
                                'description'=>'Lista de Paraderos'])->syncRoles([$role2]);
        Permission::create(['name' => 'paradero.create',
                                'description'=>'Registrar Paraderos'])->syncRoles([$role2]); 
        Permission::create(['name' => 'paradero.edit',
                                'description'=>'Editar Paraderos'])->syncRoles([$role2]);
                   
        Permission::create(['name' => 'paradero.destroy',
                                'description'=>'Eliminar Paraderos'])->syncRoles([$role2]); 
        Permission::create(['name' => 'paradero.show',
                                'description'=>'Ver Datos de Paradero'])->syncRoles([$role2]);
                                
        /////MODULO PERSONAS

        Permission::create(['name' => 'persona.index',
                                'description'=>'Lista de Personas'])->syncRoles([$role2]);
        Permission::create(['name' => 'persona.create',
                                'description'=>'Registrar Personas'])->syncRoles([$role2]); 
        Permission::create(['name' => 'persona.edit',
                                'description'=>'Editar Personas'])->syncRoles([$role2]);
                     
        Permission::create(['name' => 'persona.destroy',
                                'description'=>'Eliminar Personas'])->syncRoles([$role2]);
        Permission::create(['name' => 'persona.show',
                                'description'=>'Ver Datos de Persona'])->syncRoles([$role2]);

        /////MODULO PERSONAS

        Permission::create(['name' => 'vehiculo.index',
                                'description'=>'Lista de Vehiculos'])->syncRoles([$role2]);
        Permission::create(['name' => 'vehiculo.create',
                                'description'=>'Registrar Vehiculos'])->syncRoles([$role2]); 
        Permission::create(['name' => 'vehiculo.edit',
                                'description'=>'Editar Vehiculos'])->syncRoles([$role2]);
                    
        Permission::create(['name' => 'vehiculo.destroy',
                                'description'=>'Eliminar Vehiculos'])->syncRoles([$role2]);
        Permission::create(['name' => 'vehiculo.show',
                                'description'=>'Ver Datos de Vehiculo'])->syncRoles([$role2]);
        
    
    }
}
