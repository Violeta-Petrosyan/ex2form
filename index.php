<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <style>
        form {
            width: 200px;
            border: 1px solid;
            padding: 10px;
            display: flex;
            flex-flow: column wrap;
            align-content: center;
        }
    </style>
</head>
<body>
<form method="post" action="action.php">
    <div>
        <input type="text" placeholder="String Length" name="stringlength" style="margin: 10px">
    </div>
    <div>
        <label for="choice" style="text-align: center">String Contains of</label>
    </div>
    <div>
        <select id="choice" name="choice" style="margin: 10px">
            <option value="numbers">Numbers</option>
            <option value="letters">Letters</option>
            <option value="numlet">Numbers and Letters</option>
        </select>
    </div>
    <div>
    <button type="submit" name="submit">Generate</button>
    </div>
</form>
</body>
</html>
