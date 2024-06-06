<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KI CHAI</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img class="profile-pic1" src="assets/images/c5abd606624e92030a4e5501e1f9c44de4a0fecd.png" alt="Profile Picture">
      <div class="review-content1">
        <h2 class="reviewer-name1">Aladin Mia</h2>
        <h3 class="reviewer-title1">Plumber - 1000 <i class="fas taka-icon">&#2547;</i></h3>
        <p class="reviewer-location1"><span class="location-icon1"></span> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Bashundora R/A</p>
        <h3 class="review-text-11"><span class="review-icon1"></span>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Review</h3>
        <p class="review-text1">Plumber Helper Responsibilities:
          Packing and sorting plumbing equipment for each job.
          Adjusting water pressure valves.
          Assisting the Master Plumber with plumbing installations and repairs.
          Replacing faucet washers and toilet wax rings.
          Measuring, cutting, and threading pipes.
          Installing gutters, drainpipes, and runoff systems.</p>
      </div>
      <div class="review-rating1">
        <span class="rating-stars1">★★★★☆</span>
        <span class="rating-label1">Ratings</span>
      </div>
      <button class="see-more-btn1">Continue</button>
    </div>
  </div>

  <button id="myBtn">Open Modal</button>

  <script>
        // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

  </script>

</body>
</html>