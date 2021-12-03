<?php

use App\Models\Comment;
use App\Models\User;

class UserController
{
    public function index()
    {
        $comments = Comment::whereHas('author', fn($q) => $q->where('active', true));
        return $comments;
    }
}