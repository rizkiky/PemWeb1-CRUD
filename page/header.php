<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-info">
        <a class="navbar-brand text-white" href="#">Manajemen Data Pengguna</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="nabarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Kelola Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="logout()">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function logout() {

            const sessionToken = localStorage.getItem('session_token');

            localStorage.removeItem('nama');

            const formData = new FormData();
            formData.append('session_token', sessionToken);

            axios.post('https://asepstroberi.000webhostapp.com/logout.php', formData).then(response => {

                if (response.data.status == 'success') {
                    localStorage.removeItem('nama');
                    localStorage.removeItem('session_token');
                    window.location.href = 'login.php';
                } else {
                    alert('Logout failed. Please try again');
                }
            })
                .catch(error => {
                    console.error('Error during logout:', error);
                });
        }
    </script>
</body>

</html>