<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">   
</head>
<body>
  <section class="about-card">
    <header class="about-header">
      <h1>About My</h1>
      <p>minas sahiddin</p>
    </header>

    <div class="content">
      <div class="photo-wrap">
        <img src="{{ asset('img/profile2.jpg') }}" alt="About photo">
      </div>

      <p class="info-text">
      saya minassahiddin saya mahasiswa pens jurusan saya teknik informatika saya sedang menempuh pendidikan di semester 4 saya memiliki minat pada teknologi backend baik web maupun mobile, sakarang saya mendalami bahasa pemograman php dengan framework laravel dan juga bahasa golang, saya paham dengan vcs terutama git, memiliki pemahaman lanjutan dari basisdata
      </p>
    </div>

    <div class="actions">
      <a href="{{ url('https://minassahiddin.vercel.app/') }}">
        <button type="button" class="profile-btn">Profile</button>
      </a>
    </div>
  </section>
</body>
</html>