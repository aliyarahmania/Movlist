<?php

namespace App\Controllers;

use App\Models\DrakorModel;
use CodeIgniter\RESTful\ResourceController;

class Drakor extends ResourceController
{


    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
        $model = new DrakorModel();
        $data = [
            'data' =>$model->findAll(),
        ];
        return view('dashboard', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
        return view('add');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
        $model = new DrakorModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' =>$this->request->getVar('deskripsi'),
            'durasi' => $this->request->getVar('durasi'),
        ];
        $model->save($data);
        return redirect()->to('/drakor');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
        $model = new DrakorModel();
        $data = [
            'data' => $model->find($id),
        ];
        
        return view('edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
        $model = new DrakorModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' =>$this->request->getVar('deskripsi'),
            'durasi' => $this->request->getVar('durasi'),
        ];
        $model->update($id, $data);
        return redirect()->to('/drakor');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
        $model = new DrakorModel();
        $model->delete($id);
        return redirect()->to('/drakor');
    }
}
