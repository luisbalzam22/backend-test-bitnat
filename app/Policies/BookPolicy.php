<?php

namespace App\Policies;
require_once __DIR__.'/../Models/constants.php';

use Illuminate\Auth\Access\Response;
use App\Models\Book;
use App\Models\User;

class BookPolicy
{

    /**
     * Determine whether the user can add a book.
     */
    public function addBook(User $user): bool
    {

        return $user->role == USER_GROUPS['PUBLISHER'];
    }

    /**
     * Determine whether the user is authenticated, and can read a book.
     */
    public function getBook(User $user): bool
    {

        return $user->email && true ;
    }

}
