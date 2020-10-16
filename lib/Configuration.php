<?php
	/**
	* Classe de configuração do projeto
    * @version 1.0
    * @author Natanael Macedo
	**/
	
	class Configuration {
        //Constantes Geral
        const SITE_VERSION = '1.0';
        const SITE_TITLE = 'Projeto Atak';
        const SITE_AUTHOR = 'Natanael Macedo';
        const SITE_DESCRIPTION = 'Projeto de adimissão a Atak Sistemas';
        const SITE_THEME = '#5800a4';
        const SITE_FAVICON = 'assets/img/favicon/favicon.png';
        const SITE_LOGO = 'assets/img/brand/EasyPAC.png';

        // Funções de retorno das informações padrão
        public function getVersion() {
			return self::SITE_VERSION;
        }
        
        public function getTitle() {
			return self::SITE_TITLE;
		}
        
        public function getAuthor() {
			return self::SITE_AUTHOR;
		}
        
        public function getDescription() {
			return self::SITE_DESCRIPTION;
		}
        
        public function getTheme() {
			return self::SITE_THEME;
		}
        
        public function getFavicon() {
			return self::SITE_FAVICON;
		}
        
        public function getLogo() {
			return self::SITE_LOGO;
		}
    }