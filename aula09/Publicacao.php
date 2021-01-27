<?php
//interface para usuario usar o sistema
    interface PublicacaoI{

        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avacarPag();
        public function voltarPag();
    }
?>