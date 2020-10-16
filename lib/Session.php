<?php

/**
 * Classe de gerenciamento da sessão
 * @version 1.0
 * @author Natanael Macedo
 */
Class Session {
    // Variável privada
    private $sessao = "";
    private $sessao_campo = "";

    // Construtor da classe
    public function __construct() {
        $this->sessao = 'sessao_atak';
        $this->sessao_campo = '@area_restrita@';
    }

    public function iniciarSessao() {
        if(!isset($_SESSION)){
            session_name($this->sessao);
            session_start();
        }
        
        if(isset($_SESSION[$this->sessao_campo])){
            unset($_SESSION[$this->sessao_campo]);
        }
    }
        
    public function SessaoValida(){
        if(!isset($_SESSION)){
            session_name($this->sessao);
            session_start();
        }

        if(!isset($_SESSION[$this->sessao_campo])){
            return false;
        }
        
        return true;
    }
        
    public function SessaoLogadoValida(){
        if(self::SessaoValida()) {
            if(isset($_SESSION[$this->sessao_campo])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
        
    public function getSessao(){
        self::SessaoValida();
        if(isset($_SESSION[$this->sessao_campo])) {
            return $_SESSION[$this->sessao_campo];
        } else {
            header("location: login.php");
        }
    }
        
    public function finalizarSessao() {
        unset($_SESSION[$this->sessao_campo]);
        unset($_SESSION);
    }
}