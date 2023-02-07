<?php include_once './header.php'; ?>

<body>
  <main>
    <section>
      <h1>Boka flyg och hotell</h1>
      <p>Om du vill boka en resa med flyg och hotell, vänligen fyll i formuläret nedan så hjälper vi dig att ordna det. Vi erbjuder många olika destinationer och hotell att välja mellan, så vi är säkra på att vi kan hitta något som passar just dina önskemål.</p>
      <p>För att göra bokningen så smidig som möjligt för dig, behöver vi lite information om dina resplaner. Vänligen fyll i alla obligatoriska fält så kan vi börja processen med att hitta den perfekta resan för dig. Tack för att du väljer oss, vi ser fram emot att hjälpa dig att planera din drömresa!</p>
    </section>
    <section>

    <h1>Fyll i formuläret för bokning</h1>
    <p>Vi återkommer inom 24h med förslag på bokning.</p>

    <form class="row g-3">

      <div class="col-md-6">
        <label for="inputFirstName" class="form-label">Förnamn</label>
        <input type="text" class="form-control" id="inputFirstName" placeholder="Efternamn">
      </div>
      <div class="col-md-6">
        <label for="inputLastName" class="form-label">Efternamn</label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Förnamn">
      </div>

      <div class="col-12">
        <label for="inputEmail" class="form-label">E-post</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="exempel@mail.com">
      </div>

      <div class="col-md-6">
        <label for="inputFromDestination" class="form-label">Från destinaton</label>
        <input type="text" class="form-control" id="inputFromDestination" placeholder="Stad, flygplats eller land">
      </div>
      <div class="col-md-6">
        <label for="inputToDestination" class="form-label">Till destination</label>
        <input type="text" class="form-control" id="inputToDestination" placeholder="Stad, flygplats eller land">
      </div>

      <div class="col-md-6">
        <label for="inputFromDate" class="form-label">Från datum</label>
        <input type="date" class="form-control" id="inputFromDate" placeholder="Klicka för att välja från datum">
      </div>
      <div class="col-md-6">
        <label for="inputToDate" class="form-label">Till datum</label>
        <input type="date" class="form-control" id="inputToDate" placeholder="Klicka för att välja till datum">
      </div> 

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Önskar du även hotell bokning?
          </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Hitta bokning</button>
      </div>
    </form>

    </section>
  </main>
</body>

<?php include_once './aside.php'; ?>
<?php include_once './footer.php'; ?>