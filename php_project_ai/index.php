<?php
require_once __DIR__ . '/auth.php';

if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$loginError = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postedToken = $_POST['csrf_token'] ?? '';
    $emailInput = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (
        !is_string($postedToken)
        || !isset($_SESSION['csrf_token'])
        || !hash_equals($_SESSION['csrf_token'], $postedToken)
    ) {
        $loginError = 'Your session has expired. Please try again.';
    } elseif (is_string($emailInput) && is_string($password)) {
        $email = strtolower(trim($emailInput));

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            require_once __DIR__ . '/dbconfig.php';

            $escapedEmail = mysqli_real_escape_string($conn, $email);
            $query = "SELECT id, email, password_hash FROM users WHERE email = '$escapedEmail' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if ($result === false) {
                error_log('Login query failed: ' . mysqli_error($conn));
                mysqli_close($conn);
                $loginError = 'Unable to sign in right now. Please try again later.';
            } else {
                $user = mysqli_fetch_assoc($result);
                mysqli_free_result($result);

                if ($user && hash_equals($user['password_hash'], md5($password))) {
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];
                    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
                    mysqli_close($conn);

                    header('Location: dashboard.php');
                    exit;
                }

                mysqli_close($conn);
                $loginError = 'Invalid email or password.';
            }
        } else {
            $loginError = 'Invalid email or password.';
        }
    } else {
        $loginError = 'Invalid email or password.';
    }
}

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roksyn - Bootstrap 5 Admin Template</title>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
  <!--Styles-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/icons.css">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/dark-theme.css" rel="stylesheet">

</head>

<body>


  <!--authentication-->

  <div class="section-authentication-cover">
    <div class="">
      <div class="row g-0">

        <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex bg-primary">

          <div class="card rounded-0 mb-0 border-0 bg-transparent">
            <div class="card-body">
              <img src="assets/images/boxed-login.png" class="img-fluid auth-img-cover-login" width="650"
                alt="">
            </div>
          </div>

        </div>

        <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
          <div class="card rounded-0 m-3 mb-0 border-0">
            <div class="card-body p-sm-5">
              <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
              <h4 class="fw-bold">Get Started Now</h4>
              <p class="mb-0">Enter your credentials to login your account</p>

              <div class="row g-3 my-4">
                <div class="col-12 col-lg-6">
                  <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/google-2.png" width="18" class="me-2" alt="">Log In with Google</button>
                </div>
                <div class="col col-lg-6">
                  <button class="btn btn-light py-2 border-3 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/apple-logo.png" width="18" class="me-2" alt="">Log In with Apple</button>
                </div>
              </div>

              <div class="separator section-padding">
                <div class="line"></div>
                <p class="mb-0 fw-bold">OR</p>
                <div class="line"></div>
              </div>

              <div class="form-body mt-4">
                <form class="row g-3" method="post" action="index.php">
                  <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8') ?>">
                  <?php if ($loginError !== ''): ?>
                    <div class="col-12">
                      <div class="alert alert-danger mb-0" role="alert"><?= htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8') ?></div>
                    </div>
                  <?php endif; ?>
                  <div class="col-12">
                    <label for="inputEmailAddress" class="form-label">Email</label>
                    <input type="email" class="form-control border-3" id="inputEmailAddress" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" placeholder="jhon@example.com" autocomplete="username" required>
                  </div>
                  <div class="col-12">
                    <label for="inputChoosePassword" class="form-label">Password</label>
                    <div class="input-group" id="show_hide_password">
                      <input type="password" class="form-control border-end-0 border-3" id="inputChoosePassword" name="password" placeholder="Enter Password" autocomplete="current-password" required>
                      <a href="javascript:;" class="input-group-text bg-transparent  border-3"><i class="bi bi-eye-slash-fill"></i></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check form-switch  border-3">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                      <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-md-6 text-end">	<a href="auth-cover-forgot-password.html">Forgot Password ?</a>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button type="submit" class="btn  border-3 btn-primary">Login</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-start">
                      <p class="mb-0">Don't have an account yet? <a href="auth-cover-register.html">Sign up here</a>
                      </p>
                    </div>
                  </div>
                </form>
              </div>

          </div>
          </div>
        </div>

      </div>
      <!--end row-->
    </div>
  </div>

  <!--authentication-->




  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
          $('#show_hide_password input').attr('type', 'password');
          $('#show_hide_password i').addClass("bi-eye-slash-fill");
          $('#show_hide_password i').removeClass("bi-eye-fill");
        } else if ($('#show_hide_password input').attr("type") == "password") {
          $('#show_hide_password input').attr('type', 'text');
          $('#show_hide_password i').removeClass("bi-eye-slash-fill");
          $('#show_hide_password i').addClass("bi-eye-fill");
        }
      });
    });
  </script>

</body>

</html>