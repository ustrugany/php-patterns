<?php
namespace Patterns\Decorator;

/**
 * Interfejs komponentu. 
 * Najprostszy spójny interfejs jaki da się wydzielic
 * do dekorowania. 
 * @author = "piter";
 */
interface HtmlElementInterface{
    
    public function __toString();
    
    public function getName();
}

?>
