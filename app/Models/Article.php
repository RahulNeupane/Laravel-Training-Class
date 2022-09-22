<?php
    namespace App\Models;

    class Article{
        public static function getAllArticles(){
            return 
            [
                [
                    'title'=> 'News one',
                    'description'=> 'Dashai holiday starts from 14 Ashoj'
                ],
                [
                    'title'=> 'News two',
                    'description'=> 'No class will be conducted between dashai and tihar'
                ]
            ];
        }
    }


?>