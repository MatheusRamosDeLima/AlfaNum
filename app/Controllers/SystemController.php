<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utils\View;

class SystemController extends Controller {
    public function vowels() {
        $view = new View('System/vowels', 'Vogais - AlfaNum', ['System/_index', 'System/_formatation'], ['System/vowels', 'System/_index']);
        $this->viewWithTemplate($view);
    }
    public function alphabet() {
        $view = new View('System/alphabet', 'Alfabeto - AlfaNum', ['System/_index', 'System/_formatation'], ['System/alphabet', 'System/_index']);
        $this->viewWithTemplate($view);
    }
    public function digits() {
        $view = new View('System/digits', 'Algarismos - AlfaNum', 'System/_index', ['System/digits', 'System/_index']);
        $this->viewWithTemplate($view);
    }
}