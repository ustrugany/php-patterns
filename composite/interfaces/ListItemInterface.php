<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Konkretny Komponent deklarujacy interfejs
 * z jakiego bedzie korzystal Klient
 * @author = "piter";
 */
interface ListItemInterface{
    
    public function listItems();
    public function getDescription();
    public function setDescription($description);
    public function setTitle($title);
    public function getTitle();
    public function __toString();
}

?>
