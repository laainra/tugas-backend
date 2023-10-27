<?php

namespace App\Controllers;

use App\Models\MovieModel;
use CodeIgniter\API\ResponseTrait;


class MovieController extends BaseController
{
    use ResponseTrait;
    private $movie;

    public function __construct()
    {
        $this->movie = new MovieModel();
    }
    public function index()
    {

        $movies = $this->movie->findAll();

        // $data['movie']= $this->movie->findAll();

        $data = [
            'movies' => $movies
        ];

        return view('movie/index', $data);

        // if (empty($movies)) {
        //     return $this->response->setJSON([
        //         'code' => 404, // Change the code to represent "Not Found"
        //         'status' => "Not Found",
        //         'message' => "No movies found"
        //     ]);
        // }
    
        // return $this->response->setJSON([
        //     'code' => 200,
        //     'status' => "OK",
        //     'data' => $movies
        // ]);

    }

    public function create()
    {
        return view('movie/create');
    }

    public function getMovie($id)
    {
        $model = new MovieModel();

        $data = $model->find($id);
                
        if (!$data) {
            $this->response->setStatusCode(404);
            return $this->response->setJSON([
                'code' => 404,
                'status' => "NOT FOUND",
                'data' => null
            ]);
        }

        return $this->response->setJSON([
            'code' => 200,
            'status' => "OK",
            'data' => $data]);
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
