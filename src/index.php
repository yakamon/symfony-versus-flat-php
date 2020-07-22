<?
$connection = new PDO('mysql:host=mysql;dbname=my_db', 'root', 'root');
$result = $connection->query('SELECT id, title FROM post');
?>

<!DOCTYPE html>
<html>

<head>
    <title>List of Posts</title>
</head>

<body>
    <h1>List of Posts</h1>
    <ul>
        <? while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <li>
            <a href="/show.php?id=<?= $row['id'] ?>">
                <?= $row['title'] ?>
            </a>
        </li>
        <? endwhile ?>
    </ul>
</body>

</html>

<?
$connection = null
?>
