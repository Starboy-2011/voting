
<!DOCTYPE html>
<html>
<head>
    <title>Online Voting System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Vote for Your Candidate</h2>

    <form action="vote.php" method="POST">
        <label>
            <input type="radio" name="candidate" value="Samuel" required>
            Samuel
        </label>

        <label>
            <input type="radio" name="candidate" value="David">
            David
        </label>

        <label>
            <input type="radio" name="candidate" value="Alice">
            Alice
        </label>

        <button type="submit">Vote Now</button>
    </form>
</div>

</body>
</html>
