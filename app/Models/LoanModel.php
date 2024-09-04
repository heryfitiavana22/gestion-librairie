<?php

namespace App\Models;

use CodeIgniter\Model;

class LoanModel extends Model
{
    protected $table = 'loans';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_name', 'book_id', 'loan_date', 'return_date'];

    public function getLoansWithDetails()
    {
        return $this->select('loans.*, books.title as book_title')
                    ->join('books', 'books.id = loans.book_id')
                    ->findAll();
    }
}
