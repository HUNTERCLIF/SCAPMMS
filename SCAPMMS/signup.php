<!DOCTYPE html>
<html>
<head>
    <title>CSAPMMS - Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="signup-header">
            <h1>CSAPMMS</h1>
            <h2>Signup</h2>
        </div>
        <form id="signupForm">

            <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <select class="form-select" id="role" firstname="role" secondname="role" required>
                    <option value="student">Student</option>
                    <option value="admin">Admin</option>
                    <option value="employer">Employer</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="firstname" class="form-label">FirstName:</label>
                <input type="text" class="form-control" id="firstname" name="name" required>
            </div>

            <div class="mb-3">
                <label for="secondname" class="form-lable">SecondName:</label>
                <input type="text" class="form-control" id="secondname" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="college" class="firm-lable">College:</label>
                <input type="text" class="college" id="college" name="college" required>
             </div>

             <div class="mb-3">
                <label for="location" class="firm-lable">Location:</label>
                <input type="text" class="location" id="location" name="location" required>
             </div>

             <div class="mb-3">
                <label for="startingdate" class="firm-lable">StartingDate:</label>
                <input type="date" class="startingdate" id="startingdate" name="startingdate" required>
             </div>

             <div class="mb-3">
                <label for="endingdate" class="firm-lable">EndingDate:</label>
                <input type="date" class="endingdate" id="endingdate" name="endingdate" required>
             </div>

             <div class="mb-3">
                <label for="phone" class="firm-lable">Contact:</label>
                <input type="number" class="phone" id="phone" name="phone" required>
             </div>

            <div>
                <input type="submit" class="btn btn-primary" value="Sign Up">
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var signupForm = document.getElementById('signupForm');
            var roleField =  document.getElementById('role');
            var locationField= document.getElementById('locationField');
            var startingdateField = document.getElementById('startingfield');
            var endingdateField = document.getElementById('endingdatefield');


            roleField.addEventListener('change', function() {
                if (roleField.value === 'student') {
                    locationField.style.display = 'block';
                    startingdateField.style.display = 'block';
                    endingdateField.style.display = 'block';
                } else {
                    locationField.style.display = 'none';
                    startingdateField.style.display = 'none';
                    endingdateField.style.display = 'none';
                    
                }
            });

            signupForm.addEventListener('submit', function(event) {
                event.preventDefault();
                var firstname = document.getElementById('firstname').value;
                var secondname = document.getElementById('secondname').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var college = document.getElementById('college').value;
                var location = document.getElementById('location').value;
                var contact = document.getElementById('contact').value;
                var startingdate = document.getElementById('startingdate').value;
                var endingdate = document.getElementById('endingdate').value;
                var role = document.getElementById('role').value;

                // Perform signup logic based on the selected role
                if (role === 'student') {
                    // Perform student signup logic
                    console.log('Student Signup:', firstname, secondname, email, password, college, location, startingdate, endingdate, contact);
                } else if (role === 'admin') {
                    // Perform admin signup logic
                    console.log('Admin Signup:', firstname, secondname, email, password, contact);
                } else if (role === 'employer') {
                    // Perform employer signup logic
                    console.log('Employer Signup:', firstname, secondname, email, password, contact);
                }
            });
        });
    </script>
</body>
</html>
