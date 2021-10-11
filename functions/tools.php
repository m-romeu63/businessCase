<?php 
    /**
     * function to add taxes to a price
     * @param float $price
     * @return float
     */
    function addTVA ($price) {
        return $price = round($price*(1+(5.5/100)), $precision=2);
    }