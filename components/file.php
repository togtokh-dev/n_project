<?php
  $query = "SELECT * FROM ajiltan where ajiltanCode ='$user_id'";
  $results = mysqli_query($db, $query);
  $user_datas = mysqli_fetch_assoc($results);
 ?>
<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container ">
      <!--begin::Card-->
      <div class="card card-custom">
        <!--begin::Card header-->
        <div class="card-header card-header-tabs-line nav-tabs-line-3x">
          <!--begin::Toolbar-->
          <div class="card-toolbar">
            <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
              <!--begin::Item-->
              <li class="nav-item mr-3">
                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                  <span class="nav-icon">
                    <span class="svg-icon">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                          <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </span>
                  <span class="nav-text font-size-lg">Профайл</span>
                </a>
              </li>
              <!--end::Item-->
              <!--begin::Item-->
              <li class="nav-item mr-3">
                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                  <span class="nav-icon">
                    <span class="svg-icon">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </span>
                  <span class="nav-text font-size-lg">Баримт бичиг</span>
                </a>
              </li>
              <!--end::Item-->
            </ul>
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body px-0">
          <form class="form" id="kt_form" action="./update.php" method="post" enctype="multipart/form-data">
            <div class="tab-content">
              <!--begin::Tab-->
              <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                <!--begin::Row-->
                <div class="row">
                  <div class="col-xl-2"></div>
                  <div class="col-xl-7 my-2">
                    <!--begin::Row-->
                    <div class="row">
                      <label class="col-3"></label>
                      <div class="col-9">
                        <h6 class="text-dark font-weight-bold mb-10">Хэрэглэгчийн мэдээлэл:</h6>
                      </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Group-->
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Аватар</label>
                      <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid mb-1" type="file" name="profile_avatar" id="imageFile_img" />
                          <input type="text" name="profile_avatar" value="<?php if($user_datas['zurag']){echo $user_datas['zurag'];}else{ echo 'assets/media/users/blank.png';} ?>" hidden>
                        <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" >
                          <img src="<?php if($user_datas['zurag']){echo $user_datas['zurag'];}else{ echo 'assets/media/users/blank.png';} ?>" class="image-input-wrapper" id="preview_img" alt="">
                        </div>
                      </div>
                    </div>
                    <!--end::Group-->
                    <!--begin::Group-->
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Овог</label>
                      <div class="col-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="<?php print_r($user_datas['ajiltanOvog']); ?>"disabled />
                      </div>
                    </div>
                    <!--end::Group-->
                    <!--begin::Group-->
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Нэр</label>
                      <div class="col-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="<?php print_r($user_datas['ajiltanNer']); ?>"disabled/>
                      </div>
                    </div>
                    <!--end::Group-->
                    <!--begin::Group-->
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Email</label>
                      <div class="col-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" value="<?php print_r($user_datas['mail']); ?>" disabled/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Холбоо барих дугаар</label>
                      <div class="col-9">
                        <input class="form-control form-control-lg form-control-solid" type="text" name="number" value="<?php print_r($user_datas['number']); ?>"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-form-label col-3 text-lg-right text-left">Хаяг</label>
                      <div class="col-9">
                        <input class="form-control form-control-lg form-control-solid" type="text"  name="address" value="<?php print_r($user_datas['address']); ?>" />
                      </div>
                    </div>
                  </div>
                </div>
                <!--end::Row-->
                <div class="card-footer pb-0">
                  <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-7">
                      <div class="row">
                        <div class="col-3"></div>
                        <div class="col-9">
                          <button  type="submit" name="user" class="btn btn-light-primary font-weight-bold">Хадгалах</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Tab-->
              <!--begin::Tab-->
              <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                <!--begin::Body-->
                <div class="card-body">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-7">
                      <!--begin::Group-->
                      <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">3 үеийн намтар</label>
                        <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid mb-1" type="file" name="gurvanUy"  />
                          <input type="text" name="gurvanUy" value="<?php echo $user_datas['gurvanUy']; ?>" hidden>
                          <?php if($user_datas['gurvanUy']!=''){ ?>
                            <a href="<?php echo $user_datas['gurvanUy']; ?>">Татах</a>
                          <?php } ?>
                        </div>
                      </div>
                      <!--end::Group-->
                      <!--begin::Group-->
                      <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Диплом хуулбар</label>
                        <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid mb-1" type="file" name="diplomm"  />
                          <input type="text" name="diplomm" value="<?php echo $user_datas['diplomm']; ?>" hidden>
                          <?php if($user_datas['diplomm']!=''){ ?>
                            <a href="<?php echo $user_datas['diplomm']; ?>">Татах</a>
                          <?php } ?>
                        </div>
                      </div>
                      <!--end::Group-->
                      <!--begin::Group-->
                      <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">И-Үнэмлэхийн хуулбар</label>
                        <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid mb-1" type="file" name="IUnemleh"  />
                          <input type="text" name="IUnemleh" value="<?php echo $user_datas['IUnemleh']; ?>" hidden>
                          <?php if($user_datas['IUnemleh']!=''){ ?>
                            <a href="<?php echo $user_datas['IUnemleh']; ?>">Татах</a>
                          <?php } ?>
                        </div>
                      </div>
                      <!--end::Group-->
                      <!--begin::Group-->
                      <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Хуучин ажилын тодохойлолт</label>
                        <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid mb-1" type="file" name="todorhoilol"  />
                          <input type="text" name="todorhoilol" value="<?php echo $user_datas['todorhoilol']; ?>" hidden>
                          <?php if($user_datas['todorhoilol']!=''){ ?>
                            <a href="<?php echo $user_datas['todorhoilol']; ?>">Татах</a>
                          <?php } ?>
                        </div>
                      </div>
                      <!--end::Group-->
                      <div class="form-group row">
                        <label class="col-form-label col-3 text-lg-right text-left">Данс</label>
                        <div class="col-9">
                          <input class="form-control form-control-lg form-control-solid" type="text"  name="dans" value="<?php print_r($user_datas['dans']); ?>" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Row-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer pb-0">
                  <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-7">
                      <div class="row">
                        <div class="col-3"></div>
                        <div class="col-9">
                          <button type="submit" name="user" class="btn btn-light-primary font-weight-bold">Хадгалах</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end::Footer-->
              </div>
              <!--end::Tab-->
            </div>
          </form>
        </div>
        <!--begin::Card body-->
      </div>
      <!--end::Card-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
<script type="text/javascript">
$('#imageFile_img').change(function(evt) {
          var files = evt.target.files;
          var file = files[0];
          if (file) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('#preview_img').attr('src',e.target.result)
              };
              reader.readAsDataURL(file);
          }
      });
</script>
