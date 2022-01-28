<?php
namespace App\Modules\Propriete\Models;

use CodeIgniter\Model;

class ProprieteMdl extends Model
{
    protected $table = 'propriete';
    protected $primarykey = 'id';

    protected $allowedFields = [
        'titre',
        'categorie',
        'description',
        'image',
        'adresse',
        'prix'
    ];
}