<?php

namespace App\Controllers;
use App\Models\MusicModel;
use App\Controllers\BaseController;

class MusicController extends BaseController
{
    protected $music;
    public function __construct()
    {
        $this->music = new MusicModel();
    }


    public function index()
    {
        $musics = $this->music->findAll();

        $data = [
            'musics' => $musics
        ];

        return view('music/index', $data);
    }

    public function create(){
        return view('music/create');
    }

    public function store(){

    $data = [
    'title' => $this->request->getPost('title'),
        'singer' => $this->request->getPost('singer'),
        'album' => $this->request->getPost('album'),
        'length' => $this->request->getPost('length')];

        $this->music->insert($data);

        return redirect()->to('music');
    }

    public function edit($id){

        $music = $this->music->find($id);
         $data = [
            'music' => $music
         ];

    return view('music/edit', $data);
    }
    public function update($id){

    $data = [
    'title' => $this->request->getVar('title'),
        'singer' => $this->request->getVar('singer'),
        'album' => $this->request->getVar('album'),
        'length' => $this->request->getVar('length')];

        $this->music->update($id,$data);

        return redirect()->to('music');
    }

    public function delete($id){
        $this->music->delete($id);
        return redirect()->to('music');
    }
}
