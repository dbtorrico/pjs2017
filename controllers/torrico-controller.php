<?php

class TorricoController extends MainController {

    // URL: dominio.com/exemplo/
    public function index() {

        // Carrega o modelo
        $modelo = $this->load_model('torrico/torrico-model');

        // Carrega o view
        require_once ABSPATH . '/views/torrico/torrico-view.php';
    }

}
