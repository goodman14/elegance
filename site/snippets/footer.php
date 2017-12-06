  <footer class="footer cf" role="contentinfo">
    <div class="container">
      <div class="row">
        <!-- address and contact  -->
        <div class="col d-flex flex-column">
          <div class="address">
            <h3>Address</h3>
            <p>173a Annesley Road</p>
            <p>Hucknall</p>
            <p>Nottingham</p>
            <p>NG15 7DB</p>
          </div>
          <div>
            <h3>Contact</h3>
              <p><i class="fa fa-phone" aria-hidden="true"></i> 0115 964 1642</p>
              <p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@elegancebydesign.co.uk</p>
          </div>
        </div>
        <!-- opening times -->
        <div class="col">
          <h3>Opening Times</h3>
          <table class="table">
            <tbody>
              <tr>
                <td>Monday</td>
                <td><?= $page->monday() ?></td>
              </tr>
              <tr>
                <td>Tuesday</td>
                <td><?= $page->tuesday() ?></td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td><?= $page->wednesday() ?></td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td><?= $page->thursday() ?></td>
              </tr>
              <tr>
                <td>Friday</td>
                <td><?= $page->friday() ?></td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td><?= $page->saturday() ?></td>
              </tr>
              <tr>
                <td>Sunday</td>
                <td><?= $page->sunday() ?></td>
              </tr>
            </tbody>
          </table>
        </div>  

        <!-- google map -->
        <div class="col">
          <iframe width="400" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJky7oylOVeUgR-0jRc2AW18o&key=AIzaSyAAYK0EWPAVqLS6BLZ0n0bR_Kx16ULLM5E" allowfullscreen></iframe>
        </div>    
      </div>
      <div class="d-flex justify-content-between business-details">
        <p>
          <span class="text-primary">"Where Customer Satisfaction Counts!!"</span>
        </p>
        <p>
          Director: Mr. R Del Rosso
        </p>
        <p>
          VAT No. 598 425 979
        </p>
        <p>
          Company No. 10529440
        </p>
      </div>
    </div>
  </footer>
</div>
</body>
</html>