<?php
namespace App\Controllers;
use App\Models\BooksModel;
use CodeIgniter\Controller;

class Books extends Controller{

    //private $book = '';

    public function __construct(){
        $this->book = new BooksModel();
    }

    //show view
    public function index(){
        //return view('booksView');
        $data['books'] = $this->book->orderBy('id', 'ASC')->findAll();
        return view('booksView', $data);
    }

}

?>