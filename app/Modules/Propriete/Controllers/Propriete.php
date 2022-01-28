<?php
namespace App\Modules\Propriete\Controllers;

use CodeIgniter\Controller;
use App\Modules\Propriete\Models\ProprieteMdl;

class Propriete extends Controller
{
    public function index()
    {
        $propriete = new ProprieteMdl();
        $data['propriete'] = $propriete->findAll();
        //$data['items'] = array_values(session('cart'));

        echo view('propriete/manage', $data);
    }

    public function create()
    {
        echo view('Propriete/create');
    }

    public function save()
    {
        $product = new ProprieteMdl();

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }

        $data = [
            'titre' => $this->request->getPost('titre'),
            'categorie' => $this->request->getPost('categorie'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName,
            'adresse' => $this->request->getPost('adresse'),
            'prix' => $this->request->getPost('prix'),
        ];
        $product->save($data);
        return redirect()->to('propriete')->with('status', 'Les donnees de la propriete sauvegarge');
    }

    public function edit($id)
    {
        $Propriete = new ProprieteMdl();
        $data['product'] = $Propriete->find($id);

        return view('Propriete/edit', $data);
    }

    public function update($id)
    {
        $Propriete = new ProprieteMdl();
        $prod_item = $Propriete->find($id);
        $old_img_name = $prod_item['image'];

        $file = $this->request->getFile('image');//the new image file
        if ($file->isValid() && !$file->hasMoved()) 
        {
            if (file_exists("uploads/".$old_img_name)) {
                unlink("uploads/".$old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }
        else
        {
            $imageName = $old_img_name;
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];
        $Propriete->update($id, $data);
        return redirect()->to('items')->with('status', 'Item data and image updated');
    }

    public function delete($id)
    {
        $Propriete = new ProprieteMdl();

        $data = $Propriete->find($id);
        echo $imagefile = $data['image'];
        if (file_exists("uploads/".$imagefile)) 
        {
            unlink("uploads/".$imagefile);
        }
        $Propriete->delete($id);
        return redirect()->to('items')->with('status', 'Item data and image deleted');
    }

}