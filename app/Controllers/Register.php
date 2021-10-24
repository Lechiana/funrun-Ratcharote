<?php
namespace App\Controllers;

use App\Models\MemberModel;
use App\Models\RegisModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        helper('form');
        return view('regis');
    }

    public function insert(){
        helper('form');
            $modelMember = new MemberModel();
            $modelRegis = new RegisModel();
            $data = [
                'id_card'=> $this->request->getVar('id_card'),
                'name'=> $this->request->getVar('name'),
                'age'=> $this->request->getVar('age'),
                'password'=> password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'email'=> $this->request->getVar('email'),
                'member'=> 'required',
                'ID'=> 'required',
                'category_run'=> 'required'
            ];
            $data2 = [
              'member'=> $this->request->getVar('member'),
                'ID'=> $this->request->getVar('ID'),
                'category_run'=> $this->request->getVar('category_run'),
          ];
            $modelMember->insert($data);
            $modelRegis->insert($data2);
            return redirect()->to('/');
    }
}