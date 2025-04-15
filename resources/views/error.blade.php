<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="error-wrapper">
        <div class="error-content">
            <div class="text-center">
                <h1>Unauthorized Access</h1>
                <h3>PAGE NOT FOUND</h3>
                <p>
                    The page you're trying to access is restricted or unavailable.<br/>
                    Please check your permission or contact support for assistance.
                </p>

            </div>
        </div>
    </div>

    <style>
        .error-wrapper {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100%;
            position: relative;
        }

        .error-content {
            width: 100%;
            height: 100vh;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .error-content a:hover {
            background-color: #ff9200;
            color: #fff;
        }

        .error-content img {
            height: 10rem;
        }

        .error-content h1 {
            font-size: 7rem;
            font-weight: 700;
            color: #d62323;
        }

        .error-content h3 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #3f3f46;
            letter-spacing: 3px
        }

        .error-content p {
            font-size: 1.65rem;
            letter-spacing: 1px;
            color: #3f3f46;
        }

        .error-content a {
            background-color: #ff8300;
            color: #fff;
            font-weight: 800;
            padding: 5px 15px;
        }
    </style>
    
</body>
  <!-- Bootstrap 5 JS Bundle (walang jQuery dependency) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>