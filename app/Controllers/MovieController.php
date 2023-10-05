<?php namespace App\Controllers;

use App\Models\MovieModel;

class MovieController extends BaseController
{
    public function index()
    {
        $model = new MovieModel();
        $data['movies'] = $model->findAll();

        return view('movie/index', $data);
    }

    public function create()
    {

            return view('movie/create', ['validation' => $this->validator]);
        
    }

    public function store()
    {
        $model = new MovieModel();
        
        $validationRules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'total_episode' => 'required|numeric',
            'episode_watched' => 'required|numeric|less_than[total_episode]',
            'status' => 'required|in_list[Plan to Watch,Watching,Finished]'
        ];
    
        if ($this->validate($validationRules)) {
            $data = [
                'title' => $this->request->getPost('title'),
                'total_episode' => $this->request->getPost('total_episode'),
                'episode_watched' => $this->request->getPost('episode_watched'),
                'status' => $this->request->getPost('status')
            ];
            $model->insert($data);
            return redirect()->to('/movie');
        } else {
            return view('movie/create', ['validation' => $this->validator]);
        }
    }
    

    public function edit($id)
    {
        $model = new MovieModel();
        $data['movie'] = $model->find($id);

        return view('movie/edit', $data);
    }

    public function update($id)
    {
        $model = new MovieModel();
        
        $validationRules = [
            'title' => 'required|min_length[3]|max_length[255]',
            'total_episode' => 'required|numeric',
            'episode_watched' => 'required|numeric|less_than[total_episode]',
            'status' => 'required|in_list[Plan to Watch,Watching,Finished]'
        ];
    
        if ($this->validate($validationRules)) {
            $data = [
                'title' => $this->request->getPost('title'),
                'total_episode' => $this->request->getPost('total_episode'),
                'episode_watched' => $this->request->getPost('episode_watched'),
                'status' => $this->request->getPost('status')
            ];
            $model->update($id, $data);
            return redirect()->to('/movie');
        } else {
           
            return view('movie/edit', ['movie' => $model->find($id), 'validation' => $this->validator]);
        }
    }
    

    public function delete($id)
    {
        $model = new MovieModel();
        $model->delete($id);

        return redirect()->to('/movie');
    }
}
