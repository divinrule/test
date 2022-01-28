<?php
namespace App\Modules\Utilisateur\Models;

use CodeIgniter\Model;

class UtilisateurMdl extends Model
{
    protected $table = 'users';
    protected $primarykey = 'id';

    protected $allowedFields = [
        'name',
        'email',
        'pwd',
        'tel',
        'address'
        
    ];
}