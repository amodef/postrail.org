<?php

namespace Bookshelf;

use Bookshelf\Author;

final class AuthorController
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function listAuthors($request, $response)
    {
        $this->view->render('bookshelf/author/list.twig', [
            'authors' => Author::all()
        ]);
    }

    public function listBooks($request, $response, $params)
    {
        if (isset($params['author_id'])) {
            $author = Author::find((int)$params['author_id']);
            if (!$author) {
                // not found
                throw new \Exception("Author {$params['author_id']} not found");
            }
            $books = $author->books;
        }
        $this->view->render('bookshelf/author/books.twig', [
            'author' => $author,
            'books' => $books,
        ]);
    }
}
