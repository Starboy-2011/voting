
<?php
$candidates = [
    "Samuel" => 0,
    "David" => 0,
    "Alice" => 0
];

if (file_exists("votes.txt")) {
    $votes = file("votes.txt", FILE_IGNORE_NEW_LINES);

    foreach ($votes as $vote) {
        if (isset($candidates[$vote])) {
            $candidates[$vote]++;
        }
    }
}

$total = array_sum($candidates);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voting Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Election Results</h2>
    <p>Total Votes: <?= $total ?></p>

    <?php foreach ($candidates as $name => $votes): ?>
        <?php
        $percentage = $total > 0
            ? ($votes / $total) * 100
            : 0;
        ?>

        <div class="result">
            <h3><?= htmlspecialchars($name) ?></h3>
            <p><?= $votes ?> votes</p>

            <div class="bar">
                <div class="progress"
                     style="width: <?= $percentage ?>%">
                </div>
            </div>

            <p><?= round($percentage, 1) ?>%</p>
        </div>

    <?php endforeach; ?>
</div>

</body>
</html>
