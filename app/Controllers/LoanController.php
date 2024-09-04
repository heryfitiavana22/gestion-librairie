<?php

namespace App\Controllers;

use App\Models\LoanModel;
use App\Models\UserModel;
use App\Models\BookModel;
use App\Controllers\BaseController;

class LoanController extends BaseController
{
    public function index()
    {
        $loanModel = new LoanModel();
        $data['loans'] = $loanModel->getLoansWithDetails();

        return view('loans/index', $data);
    }

    public function create()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('loans/create', $data);
    }

    public function store()
    {
        $loanModel = new LoanModel();

        $bookId = $this->request->getPost('book_id');
        $existingLoan = $loanModel->where('book_id', $bookId)
                                  ->where('return_date IS NULL', null, false)
                                  ->first();
    
        if ($existingLoan) {
            return redirect()->back()->with('existingLoan', 'Ce livre est déjà emprunté.');
        }

        $loanModel->save([
            'user_name' => $this->request->getPost('user_name'),
            'book_id' => $this->request->getPost('book_id'),
            'loan_date' => $this->request->getPost('loan_date'),
            'return_date' => $this->request->getPost('return_date'),
        ]);

        return redirect()->to('/loans');
    }

    public function edit($id)
    {
        $loanModel = new LoanModel();
        $bookModel = new BookModel();

        $data['loan'] = $loanModel->find($id);
        $data['books'] = $bookModel->findAll();

        return view('loans/edit', $data);
    }

    public function update($id)
    {
        $loanModel = new LoanModel();

        $loanModel->update($id, [
            'user_name' => $this->request->getPost('user_name'),
            'book_id' => $this->request->getPost('book_id'),
            'loan_date' => $this->request->getPost('loan_date'),
            'return_date' => $this->request->getPost('return_date'),
        ]);

        return redirect()->to('/loans');
    }

    public function delete($id)
    {
        $loanModel = new LoanModel();
        $loanModel->delete($id);

        return redirect()->to('/loans');
    }
}
