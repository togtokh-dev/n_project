<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container pt-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
          <h3 class="card-label">Хэлтэс
          <span class="d-block text-muted pt-2 font-size-sm">Мэдээлэл</span></h3>
        </div>
      </div>
      <div class="card-body">
        <!--begin: Search Form-->
        <!--begin::Search Form-->
        <div class="mb-7">
          <div class="row align-items-center">
            <div class="col-lg-9 col-xl-8">
              <div class="row align-items-center">
                <div class="col-md-4 my-2 my-md-0">
                  <div class="input-icon">
                    <input type="text" class="form-control" placeholder="Хайх..." id="kt_datatable_search_query" />
                    <span>
                      <i class="flaticon2-search-1 text-muted"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
              <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
            </div> -->
          </div>
        </div>
        <!--end::Search Form-->
        <!--end: Search Form-->
        <!--begin: Datatable-->
        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
          <thead>
            <tr>
              <th title="Field #1">Хэлтэсийн нэр</th>
              <th title="Field #2">Албан тушаал</th>
              <th title="Field #3">Овог</th>
              <th title="Field #4">Нэр</th>
              <th title="Field #5">Регистрийн дугаар</th>
              <th title="Field #6">Боловсролын зэрэг</th>
              <th title="Field #7">Түвшин</th>
              <th title="Field #8">И-майл хаяг</th>
              <th title="Field #9">Ажилд орсон огноо</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $d_id=$_GET['type'];
            $query = "SELECT e.depName, p.posNer, a.ajiltanOvog, a.ajiltanNer, a.registerNumber, d.degNer, t.turulNer, a.mail, a.startDate FROM ajiltan a
            left join `position` p on p.posCode = a.posCode
            left join department e on e.depCode = a.depCode
            left join `degree` d on d.degCode = a.degCode
            left join `turul` t on t.turul = a.turul
            where e.depCode = '$d_id'";
            $results = mysqli_query($db, $query); ?>
            <?php while($row = mysqli_fetch_assoc($results))  {   ?>
            <tr>
              <td><?php echo $row['depName']; ?></td>
              <td><?php echo $row['posNer']; ?></td>
              <td><?php echo $row['ajiltanOvog']; ?></td>
              <td><?php echo $row['ajiltanNer'] ?></td>
              <td><?php echo $row['registerNumber']; ?></td>
              <td><?php echo $row['degNer']; ?></td>
              <td><?php echo $row['turulNer']; ?></td>
              <td><?php echo $row['mail'] ?></td>
              <td><?php echo $row['startDate'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <!--end: Datatable-->
      </div>
    </div>
    <!--end::Card-->
  </div>
  <!--end::Container-->
</div>
<!--end::Entry-->
