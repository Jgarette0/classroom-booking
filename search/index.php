<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Search Form</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="search-container">

        <form class="searchform" action="search.php" method="post">
          <label for="search">Search for user: </label>
            <input id="search" type="text" name="usersearch" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
        
    </div>
</body>
</html>
