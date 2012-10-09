<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Interfejs komponentu. 
 * Najprostszy spójny interfejs jaki da się wydzielic
 * do dekorowania. 
 * @author = "piter";
 */
interface HtmlElement{
    
    public function __toString();
    
    public function getName();
}

?>
