<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Utils\View;

class SystemController extends Controller {
    public function vowels() {
        $view = new View('System/vowels', 'Vogais - AlfaNum', 'system');
        $this->viewWithTemplate($view);
    }
    public function alphabet() {
        $view = new View('System/alphabet', 'Alfabeto - AlfaNum', 'system');
        $this->viewWithTemplate($view);
    }
    public function digits() {
        $view = new View('System/digits', 'Algarismos - AlfaNum', 'system');
        $this->viewWithTemplate($view);
    }
}