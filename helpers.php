<?php
    /**
     * Helper do URLi 
     */
    class URL{
        
        protected $baseUrl;
        protected $protocol = 'http://';
        protected $separator = '/';
        
        /**
         * Adres bazowy
         * @return string 
         */
        function getBaseUrl()
        {
            if(is_null($this->baseUrl))
            {
                $scriptDir = dirname(realpath($_SERVER['SCRIPT_FILENAME']));
                $scriptDir = explode('\\', $scriptDir);
                $scriptDir = end($scriptDir);

                $server_name = $_SERVER['SERVER_NAME'];

                $baseUrl = array();
                $baseUrl[] = $this->protocol . $server_name;
                $baseUrl[] = $scriptDir;
                $baseUrl = implode($this->separator, $baseUrl);

                $baseUrl .= $this->separator;
                
                $this->baseUrl = $baseUrl;
            }
            
            return $this->baseUrl;
        }
    }
?>
