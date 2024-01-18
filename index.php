<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/BookRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection


// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;
// $page = $_SERVER["REQUEST_URI"];
// $BASE_PATH = "\BeCode\The Mountain\Fullstack\PHP\07-crud";

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create($databaseManager);
        break;
    case 'edit':
        edit($databaseManager);
        break;
    case 'delete':
        echo "Deleted post n°" . $_GET['id'];
        delete($databaseManager);
        break;
    default:
        overview($databaseManager);
        break;
}

function overview(DatabaseManager $databaseManager)
{
    $bookRepository = new BookRepository($databaseManager);
    $books = $bookRepository->get();
    require 'overview.php';
}

function create($databaseManager)
{
    if(isset($_POST['submit'])) {
            $bookRepository = new BookRepository($databaseManager);
            $bookRepository->create();
            overview($databaseManager);
    } else require 'createView.php';
}

function edit($databaseManager)
{
    if(isset($_POST['submit'])) {
        $bookRepository = new BookRepository($databaseManager);
        $bookRepository->update();
        overview($databaseManager);
    } else {
        $bookRepository = new BookRepository($databaseManager);
        $foundBook = $bookRepository->find()[0];
        require 'editView.php';
    }
}

function delete($databaseManager) {
    $bookRepository = new BookRepository($databaseManager);
    $bookRepository->delete();
    overview($databaseManager);
}