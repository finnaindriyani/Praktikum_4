<?php
// function php

    function lulus(){
        $nilai = 70;
        if($nilai >= 75){
            $ket ='lulus';

        }else{
            $ket = 'tidak lulus';
        }
        return $ket;
    }
        echo lulus();

?>