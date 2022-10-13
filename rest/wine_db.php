<?php
function getRunners()
{
    if (isset($_GET['sort'])) {
        $col = $_GET['sort'];
    } else {
        $col = "name";
    }
    $query = "SELECT * FROM wine ORDER BY " . "$col";
    try {
        global $db;
        $runners = $db->query($query);
        $runners = $runners->fetchAll(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo '{"runners": ' . json_encode($runners) . '}';
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function getRunner($id)
{
    $query = "SELECT * FROM wine WHERE id = '$id'";
    try {
        global $db;
        $runners = $db->query($query);
        $runner = $runners->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($runner);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}

function findByName($name)
{
    $query = "SELECT * FROM wine WHERE UPPER(name) LIKE " . '"%' . $name . '%"' . " ORDER BY name";
    try {
        global $db;
        $runners = $db->query($query);
        $runner = $runners->fetch(PDO::FETCH_ASSOC);
        header("Content-Type: application/json", true);
        echo json_encode($runner);
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}