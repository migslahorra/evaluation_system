<div class="register-form">
    <form action="../../BACKEND/AUTHENTICATION/REGISTER/register.php" method="post">
        <h2 align="center">
            Register School Account
        </h2>
        <label for="name">
            <i class="fa-solid fa-user"></i> Name
        </label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label for="email">
            <i class="fa-solid fa-envelope"></i> Email
        </label>
        <input type="email" name="email" placeholder="Enter your email" required>

        <label for="upassword">
            <i class="fa-solid fa-lock"></i> Password
        </label>
        <input type="password" name="upassword" placeholder="Enter your password" required>

        <label for="confirm_password">
            <i class="fa-solid fa-lock"></i> Confirm Password
        </label>
        <input type="password" name="confirm_password" placeholder="Confirm your password" required>

        <label for="role">
            <i class="fa-solid fa-user-tag"></i> Role
        </label>
        <select name="role" required>
            <option value="">Select role</option>
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
            <option value="it_staff">IT Staff</option>
        </select>

        <button type="submit" class="submit">
            <i class="fa-solid fa-user-plus"></i> Register
        </button>
    </form>
    <div class="container signin">
        <p align="center">Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>
</div>

