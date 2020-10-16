<?php

/**
 * Classe de gerenciamento da sessão e cookies
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

    // Inicia uma sessão
    public function startSession() {
        if(!isset($_SESSION)){
            session_name($this->sessao);
            session_start();
        }
        
        if(isset($_SESSION[$this->sessao_campo])){
            unset($_SESSION[$this->sessao_campo]);
        }
    }
    
    // Testa se existe uma sessão válida
    public function sessionValid() {
        if(!isset($_SESSION)){
            session_name($this->sessao);
            session_start();
        }

        if(!isset($_SESSION[$this->sessao_campo])){
            return false;
        }
        
        return true;
    }
    
    // Testa se existe uma sessão logada válida
    public function sessionLoggedValid(){
        if(self::sessionValid()) {
            if(isset($_SESSION[$this->sessao_campo])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    // Retorna as informações da sessão
    public function getSession(){
        self::sessionValid();
        if(isset($_SESSION[$this->sessao_campo])) {
            return $_SESSION[$this->sessao_campo];
        } else {
            header("location: login.php");
        }
    }
        
    // Remove uma sessão ativa
    public function delSession() {
        unset($_SESSION[$this->sessao_campo]);
        unset($_SESSION);
    }
}