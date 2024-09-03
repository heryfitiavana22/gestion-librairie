<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author_id'];

    public function getBooksWithDetails()
    {
        return $this->select('books.*, loans.id as loan_id, loans.return_date, authors.name as author_name')
            ->join('loans', 'loans.book_id = books.id AND loans.return_date IS NULL', 'left')
            ->join('authors', 'authors.id = books.author_id')
            ->findAll();
    }
}
