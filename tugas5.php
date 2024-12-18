<?php 
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = test_input($_POST["nama"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment "]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>PHP Form Validation Example</title>
  <style>
    /* CSS Styles */
    .form-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input, .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group input.error, .form-group textarea.error {
      border-color: red;
    }
    .form-group label.error {
      color: red;
      font-weight: normal;
      margin-top: 5px;
    }
    .submit-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>PHP Form Validation Example</h2>
    <form id="myForm" action="#" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="website">Website:</label>
        <input type="text" id="website" name="website">
      </div>
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment"></textarea>
      </div>
      <div class="form-group">
        <label>Gender:</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <label><input type="radio" name="gender" value="male"> Male</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

  <script>
    // JavaScript Validation
    $(document).ready(function() {
      $('#myForm').validate({
        rules: {
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          website: {
            url: true
          },
          gender: {
            required: true
          }
        },
        messages: {
          name: 'Please enter your name.',
          email: 'Please enter a valid email address.',
          website: 'Please enter a valid website URL.',
          gender: 'Please select your gender.'
        },
        errorClass: 'error',
        errorElement: 'label',
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
</body>
</html>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
  if(empty($_POST["name"])){
    $nameErr = "name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if(empty($_POST["email"])){
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if(empty($_POST["website"])) {
    $website = " ";
  } else {
    $website = test_input($_POST["website"]);
  }

if(empty($_POST["comment"])){
$comment = "";
} else {
    $comment = test_input($_POST["comment"]);
}

if(empty($_POST["gender"])){
    $genderErr = "gender id required";
} else {
    $gender = test_input($_POST["gender"]);
}
?>




