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

    public function create()
    {
        return view('music/create');
    }

    public function store()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'singer' => $this->request->getPost('singer'),
            'album' => $this->request->getPost('album'),
            'length' => $this->request->getPost('length')
        ];

        $this->music->insert($data);

        return redirect()->to('music');
    }

    public function edit($id)
    {
        $music = $this->music->find($id);
        $data = [
            'music' => $music
        ];

        return view('music/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'singer' => $this->request->getVar('singer'),
            'album' => $this->request->getVar('album'),
            'length' => $this->request->getVar('length')
        ];

        $this->music->update($id, $data);

        return redirect()->to('music');
    }

    public function delete($id)
    {
        $this->music->delete($id);
        return redirect()->to('music');
    }

    public function softDelete($id)
    {
        $music = $this->music->find($id);

        if (!$music) {
            return redirect()->to('music')->with('error', 'Item not found.');
        }

        $this->music->delete($id);

        return redirect()->to('music')->with('success', 'Item soft deleted.');
    }
    public function trashedMusic()
    {
        $trashedMusics = $this->music->onlyDeleted()->findAll();
        $data = [
            'trashedMusics' => $trashedMusics
        ];

        return view('music/trash', $data);
    }

    public function restore($id = null)
    {
        // Check if $id is not null before performing the update
        if ($id !== null) {
            // Find the music record with soft deletes enabled
            $music = $this->music->withDeleted()->find($id);
    
            // Check if the music record was found
            if ($music) {
                // Use the update method with the proper data structure
                $data = [
                    'deleted_at' => null,
                ];
                $this->music->update($id, $data);
            }
        }
    
        return redirect()->to('music');
    }
    
    
    

    public function permanentDelete($id)
    {
        // Create a new instance of the MusicModel class
        $musicModel = new \App\Models\MusicModel();
        
        // Find the music record with soft deletes enabled
        $music = $musicModel->withDeleted()->find($id);
        
        // Check if the music record was found
        if (!$music) {
            // Return an error message if the music record was not found
            return redirect()->to('music')->with('error', 'Item not found.');
        }
        
        // Permanently delete the music record
        $musicModel->delete($id, true);
        
        // Return a success message and redirect to the music index page
        return redirect()->to('music')->with('success', 'Item permanently deleted.');
    }
    
}
