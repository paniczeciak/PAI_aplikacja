  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rezerwacja stolika</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="logged.php">Home</a></li>
              <li class="breadcrumb-item active">Rezerwacja stolika</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">



          <!-- /.col (left) -->
          <div class="row-cols-1">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Podaj dane dotyczące Twojej rezerwacji</h3>
              </div>
              <div class="card-body">

                  <form action="../../scripts/new_reservation.php" method="POST">

                <!-- Wybór miasta -->
                <div class="form-group">
                  <label>Wybierz miasto:</label>


                            <select class="form-control form-control-lg" name="city" id="cityID">
                                <option value="" disabled selected>-Wybierz miasto-</option>
                                <?php
                                require_once "../../scripts/connect.php";
                                $sql = "SELECT id, city FROM city";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                   echo "<option value='$row[id]'>$row[city]</option>";
                                }
                                ?>
                            </select>


                </div>


                  <!-- Wybór restauracji -->
                  <div class="form-group">
                      <label>Wybierz restauracje:</label>


                              <select class="form-control form-control-lg" name="restaurant" id="show">
                                  <option value="" >-Wybierz adres restauracji-</option>
                            <!--  Tu działa skrypt js - dynamiczna lista rozwijana -->
                              </select>

                  </div>

                      <!-- Data rezerwacji -->

                      <div class="form-group">
                          <label>Wybierz datę rezerwacji:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="date" class="form-control"  name="reservation_date"/>

                          </div>
                      </div>
                      <!-- /.form group -->

                      <!-- Godzina rezerwacji -->

                      <div class="form-group">
                          <label>Wybierz godzinę rozpoczęcia rezerwacji:</label>
                          <div class="input-group">
                          <input type="text" id="timepkr" class="form-control" placeholder="HH:MM" onclick="showpickers('timepkr',24)"/>
                          <button type="button" class="btn btn-primary" onclick="showpickers('timepkr',24)"><i class="far fa-clock"></i>

                             </div>
                      </div>

                      <div class="timepicker" data-target-input="nearest"></div>

                        <!--ChatGPT-->
                      <div class="form-group">
                          <label>Podaj liczbę godzin rezerwacji:</label>
                          <input type="number" id="hoursInput" class="form-control" min="1">
                      </div>

                      <button type="button" class="btn btn-primary" onclick="calculateEndTime()">Oblicz godzinę zakończenia rezerwacji</button>

                      <div class="form-group">
                          <label>Godzina zakończenia rezerwacji:</label>
                          <div id="endTimeDisplay"></div>
                      </div>

                      <!-- Wybór stolika -->
                <div class="form-group">
                  <label>Ile osób przy stoliku:</label>

                        <input type="text" class="form-control""/>

                </div>

                <!--Wysłanie formularza-->
                      <div class="form-group">
                          <div class="row">
                              <div class="col-lg-10">
                              </div>
                              <div class="col-2">
                                  <input type="submit" value="SUBMIT" class="btn btn-outline-primary btn-block ">
                              </div>
                          </div>
                      </div>
                  </form>




              </div>
              <!-- /.card-body -->

            <!-- /.card -->
          </div>
          <!-- /.col (right) -->
        </div>

      </div>
      <!-- /.container-fluid -->
     </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
