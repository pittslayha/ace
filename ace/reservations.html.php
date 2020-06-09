<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ace in the Hole Multisport Event Regestration</title>
  <meta name="description" content="Reserve your spot in the race with Ace in the Hole Multisport Events.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/styles.css" rel="stylesheet" type="text/css">
   
</head>
<body>
  
    <main>
      <h1>Sign up for an event!</h1>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="reservations">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="tour">*Tour:</label>
        <select size="1" name="tour" id="tour">
          <option>Choose Your Tour</option>
          <option value="downtown">Downtown - $50</option>
          <option value="growth">Growth - $80</option>
          <option value="landmarks">Landmarks - $70</option>
        </select>
        <label for="fname">*First Name:</label>
          <input type="text" name="fname" id="fname" required>
        <label for="lname">*Last Name:</label>
          <input type="text" name="lname" id="lname" required>
        <label for="email">*Email:</label>
          <input type="email" name="email" id="email" required>
        <label for="phone">Phone:</label>
          <input type="tel" name="phone" id="phone">
        <label for="date">*Tour Date:</label>
          <input type="date" name="date" id="date" required>
        <label for="participants">*Total Participants</label>
          <input type="number" name="participants" id="participants" min="1" max="8" required>
        <label for="allergies">*Do you have any food or drink sensitivities?</label>
          <textarea name="allergies" id="allergies" rows="2" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>


</body>
</html>