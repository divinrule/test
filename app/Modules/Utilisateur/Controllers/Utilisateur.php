<?php
namespace App\Modules\Utilisateur\Controllers;

use CodeIgniter\Controller;
use App\Modules\Utilisateur\Models\UtilisateurMdl;
use App\Modules\Propriete\Models\ProprieteMdl;
use App\Libraries\Hash;

class Utilisateur extends Controller
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function login()
    {
        echo view('utilisateur/signin');
    }

    public function register()
    {
        echo view('utilisateur/register');
    }

}