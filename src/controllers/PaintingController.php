<?php
require_once __DIR__ . '/../models/Painting.php';

class PaintingController
{
    public function index()
    {
        $paintings = Painting::all();
        include __DIR__ . '/../views/paintings/index.php';
    }
}
