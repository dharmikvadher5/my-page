<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
</head>
<style>
    /* Login Page Styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  margin-top: 5%;
  display: flex;
  flex-direction: column;
  align-items: center;
}

h2 {
  font-weight: 500;
  margin-bottom: 1.5rem;
}

.form {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form input[type="text"] ,[type="tel"],[type="date"],[type="file"],.gender,.hobby{
  width: 90%;
  padding: 1rem;
  margin-bottom: 1rem;
  border: none;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}


.form input, :focus {
  outline: none;
  font-size: 1.2rem;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.form input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 1rem;
  width: 100%;
  font-size: 1rem;
  margin-top: 1rem;
  transition: background-color 0.3s ease;
}

.form input[type="submit"]:hover {
  background-color: #3e8e41;
}

 {
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.form .error-message {
  color: #ff0000;
  margin-top: 0.5rem;
}

</style>
<body>
  
    <form method="post" class="form" action="assignment7.php">
         <label for="name">Name</label></br>
 <input name="name" type="text" id="name"></br>
 <label for="adress">Address</label></br>
        <input type="text"name="adress" id="adress"></br>
        <label for="city">City</label></br>
        <input type="text" name="city" id="city"></br>
        <label for="phone">Phone</label></br>
        <input type="tel" maxlength="10" name="phone" id="phone"></br>
        <label for="bdate">Birth Date</label>
        <input type="date" name="bdate" id="bdate"></br>
     <div class="gender">   <label>Gender:</label>
       <input type="radio" value="male" name="gender" id="male">
        <label for="male">Male</label>
        <input type="radio" value="female" name="gender" id="female">
        <label for="female">Female</label></div>
         </br>
         <div class="hobby">
     <label>Hobbies:</label>
</br> <input type="checkbox" name="hobby[]" value="writing" id="writing">
 <label for="writing ">Writing</label>
      </br><input type="checkbox" name="hobby[]" value="singing" id="singing ">
      <label for="singing ">Singing</label>
      </br> <input type="checkbox" name="hobby[]" value="dancing" id="dancing ">
       <label for="dancing">Dancing</label>
       </br> <input type="checkbox" name="hobby[]" value="drawing" id="drawing ">
        <label for="drawing ">Drawing</label>
        </br> <input type="checkbox" name="hobby[]" value="reading" id="reading">
         <label for="reading">Reading</label></div></br></br>
        <div class="file"> 
             <label>Upload Profile Photo</label>
        <input type="file" name="file" id="file"></div>
         <input type="submit"be value="submit" name="submit">
     
    </form>     
    
      <?php require 'assignment7.php'; ?>
</body>
</html>
