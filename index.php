<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="form.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="submit.php" method="get">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">#</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" required>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" required >
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password" required>
          
        </fieldset>
        <button type="submit">Buzz</button>
      </form>
      
    </body>
</html>