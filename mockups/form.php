<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <main>
    <form action="form1.php" method="post">
      <label for="firatname">Firstname?</label>
        <input id="firstname" type="text" name="firstname" placeholder="Firstname..." >
        <label for="lastname">Lastname?</label>
        <input id="lastname" type="text" name="lastname" placeholder="Lastname..." >
        <label for="favouritepet">Favourite Pet?</label>
        <select name="favouritepet" id="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>
      <button type="submit" >Submit</button>
    </form>
  </main>

  <style>
    body{
      display:flex;
      flex-direction: column;
      align-items: center;
    }
     main {
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent white background */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, .5);
            height:400px;
            width: 300px;
            displaY:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;;
            box-sizing: border-box;

        }

        form {
            display: flex;
            flex-direction: column;
            padding:20px;
            height: 100%;
            width:100%;
            
        }

        label {
            font-weight: bold;
            margin-top: 10px;
        }

        input {
            width: 92%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid black;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent white input background */
        }
        select{
          width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid black;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
        }

        button {
            background: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #2980b9;
        }
  </style>
</body>
</html>