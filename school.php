<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: darkblue;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Student Form</h2>

    <form action="school-api.php" method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="class" placeholder="Enter Class" required>
        <input type="text" name="roll" placeholder="Enter Roll" required>
        <input type="text" name="subject" placeholder="Enter Subject" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>