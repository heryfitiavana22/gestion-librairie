<?php

namespace App\Controllers;

use App\Models\AuthorModel;
use App\Controllers\BaseController;

class AuthorController extends BaseController
{
    public function index()
    {
        $authorModel = new AuthorModel();
        $data['authors'] = $authorModel->findAll();

        return view('authors/index', $data);
    }

    public function create()
    {
        return view('authors/create');
    }

    public function store()
    {
        $authorModel = new AuthorModel();

        $authorModel->save([
            'name' => $this->request->getPost('name'),
        ]);

        return redirect()->to('/authors');
    }

    public function edit($id)
    {
        $authorModel = new AuthorModel();
        $data['author'] = $authorModel->find($id);

        return view('authors/edit', $data);
    }

    public function update($id)
    {
        $authorModel = new AuthorModel();

        $authorModel->update($id, [
            'name' => $this->request->getPost('name'),
        ]);

        return redirect()->to('/authors');
    }

    public function delete($id)
    {
        $authorModel = new AuthorModel();
        $authorModel->delete($id);

        return redirect()->to('/authors');
    }
}
