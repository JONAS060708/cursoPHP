<?php

//agregação
require_once 'Pessoa.php';
require_once 'Publicacao.php';
    class Livro implements PublicacaoI{
        //atributos
        private $titulo,$autor,$totPaginas,$pagAtual,$aberto,$leitor;

        //CONSTRUTOR
        public function __construct($titulo,$autor,$totPaginas,$leitor)
        {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }
        //geters e seters
        public function getTitulo(){ return $this->titulo;}
        public function setTitulo($titulo){ $this->titulo = $titulo;}
        //geters e seters
        public function getAutor(){ return $this->autor;}
        public function setAutor($autor){ $this->autor = $autor;}
        //geters e seters
        public function getTotPaginas(){ return $this->totPaginas;}
        public function setTotPaginas($totPaginas){ $this->totPaginas = $totPaginas;}
        //geters e seters
        public function getPagAtual(){ return $this->pagAtual;}
        public function setPagAtual($pagAtual){ $this->pagAtual = $pagAtual;}
        //geters e seters
        public function getAberto(){ return $this->aberto;}
        public function setAberto($aberto){ $this->aberto = $aberto;}
        //geters e seters
        public function getLeitor(){ return $this->leitor;}
        public function setLeitor($leitor){ $this->leitor = $leitor;}

        //métodos simples
        public function detalhes(){
            echo'<hr><h4>DETALHES DO LIVRO E QUEM ESTÁ LENDO NO MOMENTO</h4>
            LIVRO: '.$this->getTitulo().'
            LENDO : '.$this->leitor->getNome().'
            PÁGINAS: '.$this->totPaginas.'
            PG atual : '.$this->pagAtual.'
            
            ';
        }
        //imprementação de métodos da interface
        public function abrir(){
            $this->abrir = true;
        }
        public function fechar(){
            $this->fechar = true;
        }
        public function folhear($p=0){
            if ($p > $this->totPaginas) {
                echo'Não tem mais páginas';
            }else{

                $this->folhear = $p;
                $this->pagAtual=$p;
            }
        }
        public function avacarPag(){
            if ($this->pagAtual > $this->totPaginas) {
                $this->pagAtual = 0;
            }else {
                # code...
                $this->pagAtual ++;
            }
        }
        public function voltarPag(){
            if ($this->pagAtual < 0 ) {
                $this->pagAtual = 0;
            }else {
            $this->pagAtual --;
        }
    }

    }
?>