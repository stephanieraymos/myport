
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css" type="text/css">  
  <title>Form</title>
</head>
<body>
  <main>
    <p>Send email</p>
    <form class= "contact-form" action="contactform.php" method="post">
      <input type="text" name="first-name" placeholder="First Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="subject" placeholder="Subject">
      <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
      <button type="submit" name="submit">Submit</button>
    </form>
  </main>
</body>
</html>