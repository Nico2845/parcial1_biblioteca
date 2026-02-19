<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Name extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ['Don Quijote de la Mancha', 'Cien Años de Soledad', 'Orgullo y Prejuicio', 'Crimen y Castigo', 'El Principito','1984','La Odisea','El Gran Gatsby','Rayuela','Hamlet'];
        $description= ['Aventuras de un caballero loco','Historia de la familia Buendía','Novela de costumbres y amor','ilemas morales y justicia','Relato corto sobre la vida','Distopía política y vigilancia','Viaje épico de Ulises','El sueño americano en los años 20','Novela experimental de Cortázar','Tragedia de venganza y duda'];
    }
}
