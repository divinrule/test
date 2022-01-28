<?php

namespace App\Controllers;

use App\Modules\Propriete\Models\ProprieteMdl;

class Home extends BaseController
{
	public function index()
	{
		$propriete = new ProprieteMdl();
        $data['propriete'] = $propriete->findAll(5, 0);

		return view('propriete/prod_list', $data);
	}
}
