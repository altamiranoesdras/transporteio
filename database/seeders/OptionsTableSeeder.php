<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-home',
                'icono_r' => NULL,
                'id' => 1,
                'nombre' => 'Inicio',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'dashboard',
                'updated_at' => '2023-10-10 22:23:18',
            ),
            1 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-tools',
                'icono_r' => NULL,
                'id' => 2,
                'nombre' => 'Admin',
                'option_id' => NULL,
                'orden' => 15,
                'ruta' => '',
                'updated_at' => '2021-03-14 21:01:22',
            ),
            2 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-users',
                'icono_r' => NULL,
                'id' => 3,
                'nombre' => 'Usuarios',
                'option_id' => 2,
                'orden' => 0,
                'ruta' => 'users.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            3 => 
            array (
                'color' => 'bg-info',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-user-tag',
                'icono_r' => NULL,
                'id' => 4,
                'nombre' => 'Roles',
                'option_id' => 2,
                'orden' => 2,
                'ruta' => 'roles.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            4 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-key',
                'icono_r' => NULL,
                'id' => 5,
                'nombre' => 'Permisos',
                'option_id' => 2,
                'orden' => 3,
                'ruta' => 'permissions.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            5 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2021-03-14 21:17:37',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 6,
                'nombre' => 'Configuraciones',
                'option_id' => 2,
                'orden' => 4,
                'ruta' => 'profile.business',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            6 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2021-03-14 21:11:34',
                'deleted_at' => '2023-10-10 22:24:11',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-file-code',
                'icono_r' => NULL,
                'id' => 7,
                'nombre' => 'Developer',
                'option_id' => NULL,
                'orden' => 25,
                'ruta' => 'x',
                'updated_at' => '2023-10-10 22:24:11',
            ),
            7 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2023-10-10 22:23:56',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-check-circle',
                'icono_r' => NULL,
                'id' => 8,
                'nombre' => 'Prueba API\'S',
                'option_id' => 7,
                'orden' => 21,
                'ruta' => 'dev.prueba.api',
                'updated_at' => '2023-10-10 22:23:56',
            ),
            8 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2023-10-10 22:24:03',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 9,
                'nombre' => 'Configuraciones',
                'option_id' => 7,
                'orden' => 20,
                'ruta' => 'dev.configurations.index',
                'updated_at' => '2023-10-10 22:24:03',
            ),
            9 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2023-10-10 22:23:53',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-passport',
                'icono_r' => NULL,
                'id' => 10,
                'nombre' => 'Clientes Passport',
                'option_id' => 7,
                'orden' => 22,
                'ruta' => 'dev.passport.clients',
                'updated_at' => '2023-10-10 22:23:53',
            ),
            10 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2023-10-10 22:24:06',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-list',
                'icono_r' => NULL,
                'id' => 11,
                'nombre' => 'Menu',
                'option_id' => 7,
                'orden' => 1,
                'ruta' => 'options.index',
                'updated_at' => '2023-10-10 22:24:06',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-10 22:20:26',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-question',
                'icono_r' => NULL,
                'id' => 12,
                'nombre' => 'Ayuda',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'admin.ayuda',
                'updated_at' => '2023-10-13 19:56:28',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-10 22:20:55',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-info',
                'icono_r' => NULL,
                'id' => 13,
                'nombre' => 'Informacion',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'admin.informacion',
                'updated_at' => '2023-10-13 19:56:54',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-10 22:21:44',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-folder-open',
                'icono_r' => NULL,
                'id' => 14,
                'nombre' => 'Ejemplos',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'admin.ejemplos',
                'updated_at' => '2023-10-13 19:57:04',
            ),
            14 => 
            array (
                'color' => NULL,
                'created_at' => '2023-10-10 22:22:17',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-images',
                'icono_r' => NULL,
                'id' => 15,
                'nombre' => 'Galería',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'admin.galeria',
                'updated_at' => '2023-10-13 19:57:13',
            ),
        ));
        
        
    }
}