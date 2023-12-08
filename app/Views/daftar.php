<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link rel="shortcut icon" href="drma.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
         <div class="position-absolute top-50 start-50 translate-middle p-3">
            <div class="text-center mb-3">
                <h1>Daftar</h1>
            </div>
            <div>
                <form action="/daftar" method="post">
                    <div class="input-group mb-3">
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Username" 
                        aria-label="Username" 
                        aria-describedby="basic-addon1"
                        name="username"
                        id="username"
                        value="<?= set_value('username') ?>"
                        >
                        
                    </div>
                    <div class="input-group mb-3">
                        <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Password" 
                        aria-label="Username" 
                        aria-describedby="basic-addon1"
                        name="password"
                        id="password"
                        >
                    </div>
                    <div class="input-group mb-3">
                        <input 
                        type="password" 
                        class="form-control" 
                        placeholder="Password validation" 
                        aria-label="Username" 
                        aria-describedby="basic-addon1"
                        name="password_validation"
                        id="password_validation"
                        >
                    </div>
                    <div class="input-group mb-3 d-grid gap-2 col-6 mx-auto">
                        <button 
                        type="submit" 
                        class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
            <div>
                <span>Sudah punya Akun? <a href="/">Login disini!</a></span>
            </div>
         </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>