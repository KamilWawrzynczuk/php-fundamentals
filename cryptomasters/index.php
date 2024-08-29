<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto</title>
</head>
<body>

    <h1>Crypto Masters</h1>



    <p>Enter the amoun of crypto</p>
    <form action="convert.php" method="post">
        <label for="amount">Amount</label>
        <input id="amount" name="amount"/>
        <label for="crypto">Select:</label>
        <select id="crypto" name="crypto">
            <option>BTC</option>
            <option>ETC</option>
        </select>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
