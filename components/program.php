<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container pt-5">
    <!--begin::Card-->
    <div class="card card-custom">
      <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
          <h3 class="card-label">Хөтөлбөрүүд
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
              <th title="Field #1">Хариуцагч</th>
              <th title="Field #1">Үнэлгээ</th>
              <th title="Field #2">Төлөв</th>
              <th title="Field #3">Дуусах хугцаа</th>
              <th title="Field #4">Хөтөлбөрийн нэр</th>
              <th title="Field #5"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $d_id='SM';
            $query = "SELECT * FROM projects a
            left join `hutulburlist` p on p.hutListCode = a.project_type_id where a.project_b_user = '$user_id'";
            $results = mysqli_query($db, $query); ?>
            <?php while($row = mysqli_fetch_assoc($results))  {   ?>
            <tr>
              <td><?php echo one_user($row['project_a_user'])['ajiltanNer']; ?></td>
              <td><?php echo $row['project_b_user']; ?></td>
              <td><?php echo $row['project_type']; ?></td>
              <td><?php echo $row['project_ex_date']; ?></td>
              <td><?php echo $row['hutListName']; ?></td>
              <td></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <!--end: Datatable-->
      </div>
    </div>
    <!--end::Card-->
    <!--begin::Card-->
    <div class="card card-custom mt-5">
<div class="card-header">
<div class="card-title">
<h3 class="card-label">
Хуанли
</h3>
</div>
<div class="card-toolbar">

</div>
</div>
<div class="card-body">
<div id="kt_calendar"></div>
</div>
</div>
    <!--end::Card-->

  </div>
  <!--end::Container-->
</div>
<!--end::Entry-->
