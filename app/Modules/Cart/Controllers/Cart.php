<?php
namespace App\Modules\Cart\Controllers;

use CodeIgniter\Controller;
use App\Modules\Propriete\Models\ProprieteMdl;

class Cart extends Controller
{

    public function index()
    {
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        return view('cart/index', $data);
    }

    public function buy($id)
    {
        $propriete = new ProprieteMdl();
        $product = $propriete->find($id);
        $item = array(
            'id' => $product['id'],
            'titre' => $product['titre'],
            'image' => $product['image'],
            'prix' => $product['prix'],
            'qty' => 1
        );

        $session = session();
        if ($session->has('cart')) {
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if ($index == -1) {
                array_push($cart, $item);
            } else {
                $cart[$index]['qty']++;
            }
            $session->set('cart', $cart);
        }else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        return $this->response->redirect(base_url('shopping_cart'));
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(session('cart'));
        unset($cart[$index]);
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(base_url('shopping_cart'));
    }

    public function update()
    {
        $cart = array_values(session('cart'));
        for ($i=0; $i < count($cart); $i++) {
            $cart[$i]['qty'] = $_POST['qty'][$i];
        }
        $session = session();
        $session->set('cart', $cart);
        return $this->response->redirect(base_url('shopping_cart'));
    }

    public function checkout()
    {
        $data['items'] = array_values(session('cart'));
        $data['total'] = $this->total();
        return view('cart/checkout', $data);
    }

    private function exists($id)
    {
        $items = array_values(session('cart'));
        for ($i=0; $i < count($items); $i++) { 
            if ($items[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }

    private function total()
    {
        $s = 0;
        $items = array_values(session('cart'));
        foreach ($items as $item){
            $s += $item['prix'] * $item['qty'];
        }
        return $s;
    }
}