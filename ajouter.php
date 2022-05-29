<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajouter.css">
</head>
<body>
  <h1>Add a promotion</h1>
    <div class="contact-us">
        <form  action="connexion.php" method="post">
          
            <input type="text" id="msg" name="user_id"placeholder="ID">
            <input type="msg" id="msg" name="depart_code" placeholder="Depart_code">
            <input type="msg" id="msg" name="user_depart"placeholder="Depart_name">
            <input id="msg" name="S_number" placeholder="student_number">
            <input id="msg" name="number" placeholder="success number">
            <input id="msg" name="user_rate" placeholder="success rate">
            <select class="option" id="country" name="level" placeholder="level">Cycle
                <option value="L1">License</option>
                <option value="L2">Master</option>
              </select> 
            <select class="option" id="country" name="cycle" placeholder="level">Level
                <option value="L1">L1</option>
                <option value="L2">L2</option>
                <option value="L3">L3</option>
                <option value="M1">M1</option>
                <option value="M1">M1</option>
              </select> 
            <input type="msg" id="msg" name="user_faculty"placeholder="faculty">
            <input id="msg" name="user_speciality"placeholder="speciality">

        </div>
          <button type="submit">Add promo</button>
        </form>
      </div>
</body>
</html>
