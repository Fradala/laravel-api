<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            
            array(
                'name_project'=>'Discord',
                'author'=>'Francesco D\'Alascio',
                'image'=>'https://www.smartworld.it/images/2022/11/29/la-voce-scarica-per-windows-consente-agli-utenti-di-scaricare-discord-in-un-computer_crop_resize.jpg',
                'date'=>'2023-12-24',
                'linguaggio_usato'=>'Bootstrap 5.3',
            ),

            array(
                'name_project'
                =>'Boolando',
                'author'=>'Francesco D\'Alascio',
                'image'=>'https://amoredellamamma.it/wp-content/uploads/2021/04/Zalando-abbigliamento-bambino.jpg',
                'date'=>'2023-12-24',
                'linguaggio_usato'=>'Bootstrap 5.3',
            ),

            array(
                'name_project'=>'Dropbox',
                'author'=>'Francesco D\'Alascio',
                'image'=>'https://aem.dropbox.com/cms/content/dam/dropbox/blog/files/2017/04/screenshot4_1300x760-hover-blue-background.png',
                'date'=>'2023-12-24',
                'linguaggio_usato'=>'Bootstrap 5.3',
            ),

            array(
                'name_project'=>'Spotify',
                'author'=>'Francesco D\'Alascio',
                'image'=>'https://m.media-amazon.com/images/I/81WkCOSK3nL.png',
                'date'=>'2023-12-24',
                'linguaggio_usato'=>'Bootstrap 5.3',
            ),

            array(
                'name_project'=>'Boolflix',
                'author'=>'Francesco D\'Alascio',
                'image'=>'https://helios-i.mashable.com/imagery/articles/05EgrMSe7mSet8QaEQVOcNi/hero-image.fill.size_1248x702.v1611617219.png',
                'date'=>'2023-12-24',
                'linguaggio_usato'=>'Bootstrap 5.3',
            ),






            
        );

        $typeIds = Type::all()->pluck('id');

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->name_project = $project['name_project'];
            $newProject->author = $project['author'];
            $newProject->image = $project['image'];
            $newProject->type_id = $typeIds[rand(0, count($typeIds) - 1)];
            $newProject->date = $project['date'];
            $newProject->linguaggio_usato = $project['linguaggio_usato'];
            $newProject->save();
        }



    
    }
}
