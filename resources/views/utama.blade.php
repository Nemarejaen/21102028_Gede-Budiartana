<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg  bg-success">
  <div class="container-fluid">
   
  <h3><a class="navbar-brand" href="{{url('/')}}">HOME</a></h3>
  <h3><a class="navbar-brand" aria-current="page" href="{{url('code')}}">CODE</a></h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
       
        
          <h3><a class="nav-link active" aria-current="page" href="{{url('komponenTBL')}}">TABLE KOMPONEN</a></h3>
        </li>


        
       
          </li> 
        </li>
      </ul>
    </div>
  </div>
</nav>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
                <mb-9><center><h1>Alat Monitoring Ketinngian Air dengan Ultrasonic berbasis IoT</h></center></mb-9>
                <center><img src="img/Projek.png" width="1080px" ></center>
                <h1>Pada alat ini kita dapat memonitoring ketinggian Air di Tangki Air kita melalui Aplikasi Telegram</h1>
                <h3>Komponen yang digunakan :</h3>
                <h4>- ESP 32</h4>
                <h4>- Ultrasonic HC SR-04</h4>
                <h4>- LED</h4>
                <h4>- Kabel Jumper</h4>
                <h4>- Aplikasi Telegram</h4>

    <div class="container text-center"></div>
   
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</body>

</html>