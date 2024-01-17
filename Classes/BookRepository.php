<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class BookRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): void
    {
        $query = "INSERT INTO collection (System, Title, MSRP, PublishedYear, Publisher) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->databaseManager->connection->prepare($query);
        $postData = [$_POST['system'], $_POST['title'], $_POST['MSRP'], $_POST['publishedYear'], $_POST['publisher']];
        $statement->execute($postData);
    }

    // Get one
    public function find(): array
    {
        $query;
    }

    // Get all
    public function get(): array
    {
        $query = "SELECT * FROM collection";
        // TODO: Use your database connection (see $databaseManager) and send your query to your database.
        $statement = $this->databaseManager->connection->prepare($query);
        $statement->execute();
        $books = $statement->fetchAll();
        // TODO: fetch your data at the end of that action.
        // TODO: replace dummy data by real one
        return $books;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}