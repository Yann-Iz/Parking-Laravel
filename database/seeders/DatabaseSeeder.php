<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        parking::insert(array(
            array(
                'idParking' => 1,
                'numeroPlace' => '1A',
            ),
            array(
                'idParking' => 2,
                'numeroPlace' => '2A',
            ),
            array(
                'idParking' => 3,
                'numeroPlace' => '3A',
            ),
            array(
                'idParking' => 4,
                'numeroPlace' => '4A',
            ),
            array(
                'idParking' => 5,
                'numeroPlace' => '5A',
            ),
            array(
                'idParking' => 6,
                'numeroPlace' => '6A',
            ),
            array(
                'idParking' => 7,
                'numeroPlace' => '7A',
            ),
            array(
                'idParking' => 8,
                'numeroPlace' => '8A',
            ),
            array(
                'idParking' => 9,
                'numeroPlace' => '9A',
            ),
            array(
                'idParking' => 10,
                'numeroPlace' => '10A',
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'admin', 'nom' => 'admin', 'Prenom' => 'admin', 'mail' => 'admin@admin.com', 'motDePasseUtilisateur' => Hash::make('admin123'), 'estInscrit' => true, 'isAdministrateur' => true,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'YannI', 'nom' => 'Izeghlouche', 'Prenom' => 'Yann', 'mail' => 'yann.izeghlouche@gmail.com', 'motDePasseUtilisateur' => Hash::make('1234'), 'estInscrit' => true, 'isAdministrateur' => false,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'AntoineC', 'nom' => 'Cage', 'Prenom' => 'Antoine', 'mail' => 'cage.antoine@yahoo.fr', 'motDePasseUtilisateur' => Hash::make('1234'), 'estInscrit' => true, 'isAdministrateur' => false,
            ),

        ));
        reservation::insert(array(
            array(
                'idReservation' => 2, 'positionFileAttente' => 1, 'numeroPlace' => 1, 'utilisateur' => 2, 'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null, 'numeroPlace' => null, 'utilisateur' => 3, 'etatReservation' => 1, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
        ));
    }
}
