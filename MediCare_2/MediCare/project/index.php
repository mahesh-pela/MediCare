<?php include('header.php');?>
      <!-- Content Code -->
<body>
  
  <section>
      <h1 id="home"></h1>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
          <div class="lg:w-4/6 mx-auto">
           <div class="rounded-lg h-64 overflow-hidden">
               <img alt="content" class="object-cover object-center h-full w-full" src="https://www.verywellmind.com/thmb/C9GUBmFLZFKOeaq866LGvXemwqA=/2121x1193/smart/filters:no_upscale()/GettyImages-1147429610-fdc39f5416344b21975b65e30de6c5a3.jpg" style="width: 1000px; height: 600px">
            </div>
</section>
      <h1 class="hd1">
                Welcome To MediCare </h1>
            <br>
            <div class="para">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum id risus quis interdum. Nunc convallis scelerisque sollicitudin.Non blandit massa enim nec dui nunc mattis enim ut. Scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt. Turpis egestas maecenas pharetra convallis. Aliquet risus feugiat in ante metus dictum at. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus. Arcu bibendum at varius vel pharetra vel turpis.
              <span id="points">...</span> 
              <span id="moreText">
                 Nulla vel sagittis nunc, nec gravida purus. In ac mauris in ligula blandit ultrices. Ut dapibus ipsum nulla, nec pellentesque justo efficitur eu. Donec in semper orci, eget finibus urna. Suspendisse eget erat elit. Nulla id libero sit amet quam volutpat consectetur at consequat mauris. Donec eu leo nisl.  Tellus at urna condimentum mattis pellentesque id. Leo in vitae turpis massa sed elementum tempus. Vel fringilla est ullamcorper eget nulla facilisi. Dolor sit amet consectetur adipiscing elit duis.
</span>
<button onclick="toggleText()" id="textButton">
        Show More
    </button>
    </p>
</br>
          </div>
            

  </section>
      <!-- Department Code -->
      <h1 class="hd2" id="department"> Browse Appointment By Speciality </h1>

<section>
      <?PHP include('Department.php'); ?>
</section>

<!-- feedback -->

<hr class="separator">
<h1 class="hd2" id="feedback"> Give Us Your Feedback! </h1>
<?php include('feedback.php'); ?>
        <!-- Footer -->

        <section class="footdiv">
        <h2>Copyright ©️ 2022 MediCare. All Rights Reserved</h2>
          <div class="footdiv2">
          

            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
          </div>
</section>
<script>
        function toggleText() {

            var points = 
                document.getElementById("points");
  
            var showMoreText =
                document.getElementById("moreText");
  
            var buttonText =
                document.getElementById("textButton");
            if (points.style.display === "none") {
  
                showMoreText.style.display = "none";
                points.style.display = "inline";
                buttonText.innerHTML = "Show More";
            }

            else {

                showMoreText.style.display = "inline";
  
                points.style.display = "none";
                buttonText.innerHTML = "Show Less";
            }
        }
         </script>
</body>
</html>