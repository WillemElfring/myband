<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';
// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'STAR WARS');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('menu.tpl');

$action= isset($_GET['action'])?$_GET['action']:'home';


switch ($action) {
    case 'home':
        
        $page_nr = isset($_GET['page_nr'])?$_GET['page_nr']:1;
//        echo $page_nr;
        

// Get newsarticles from database
        
        include('model/select_newsarticles.php');
        $templateParser->assign('result', $result);
        include('model/get_nr_newsarticle.php');
        $nr_pages = $total_number_articles/NR_ITEMS_PER_PAGE;
        $templateParser->assign('nr_pages', $nr_pages);
        $templateParser->display('newsarticle.tpl');
        break;
        
    case 'about':
        $page_nr2 = isset($_GET['page_nr2'])?$_GET['page_nr2']:1;
        include('model/select_about.php');
        $templateParser->assign('result', $result);
        include('model/get_nr_about.php');
        $nr_pages = $total_number_characters/NR_ITEMS_PER_PAGE;
        $templateParser->assign('nr_pages', $nr_pages);
        $templateParser->display('about.tpl');
        break;
        
        
    case 'movies':

        include('model/select_movies.php');
        $templateParser->assign('result', $result);
        $templateParser->display('movies.tpl');


        break;
}



$templateParser->display('footer.tpl');