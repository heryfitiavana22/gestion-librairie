<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\AuthorModel;
use App\Controllers\BaseController;

class BookController extends BaseController
{
    public function index()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->getBooksWithDetails();

        return view('books/index', $data);
    }

    public function create()
    {
        $authorModel = new AuthorModel();
        $data['authors'] = $authorModel->findAll();

        return view('books/create', $data);
    }

    public function store()
    {
        $bookModel = new BookModel();

        $bookModel->save([
            'title' => $this->request->getPost('title'),
            'author_id' => $this->request->getPost('author_id'),
        ]);

        return redirect()->to('/books');
    }

    public function edit($id)
    {
        $bookModel = new BookModel();
        $authorModel = new AuthorModel();

        $data['book'] = $bookModel->find($id);
        $data['authors'] = $authorModel->findAll();

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $bookModel = new BookModel();

        $bookModel->update($id, [
            'title' => $this->request->getPost('title'),
            'author_id' => $this->request->getPost('author_id'),
        ]);

        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $bookModel = new BookModel();
        $bookModel->delete($id);

        return redirect()->to('/books');
    }
}
