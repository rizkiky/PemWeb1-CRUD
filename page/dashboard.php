<?php 
    include('header.php')
?>
    
    <div class="container mt-5">
        <h2 id="welcomeMessage">Selamat datang di Dashboard</h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('welcomeMessage').innerText = 'Selamat datang ' + localStorage.getItem('nama');
    </script>