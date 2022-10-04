<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form File</title>
</head>
<body>


<form  action="thanks.php"  method="post">

<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name">
</div>

<div>
  <label  for="prénom">Prénom :</label>
  <input type="text"  id="prénom" name="user_firstname">
</div>

<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
</div>

<div>
  <label  for="téléphone">Téléphone :</label>
  <input type="numbers"  id="téléphone" name="user_phonenumber">
</div>

<div>
  <label> Select Subject </label>  
<select name="choice">  
<option value = "Climate Change"> Climate Change   </option>  
<option value = "Food Shortage"> Food Shortage   </option>  
<option value = "Clean Water"> Clean Water </option>  
<option value = "Migration"> Migration</option>  
</select>  
</div>

<br>

<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>

<br>

<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>

</form>
</body>
</html>


