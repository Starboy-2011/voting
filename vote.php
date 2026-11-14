
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$candidate = $_POST["candidate"] ?? "";

$allowed = ["Samuel", "David", "Alice"];

if (!in_array($candidate, $allowed, true)) {
    exit("Invalid candidate selected.");
}

file_put_contents(
    "votes.txt",
    $candidate . PHP_EOL,
    FILE_APPEND | LOCK_EX
);

header("Location: results.php");
exit;
?>
