<!DOCTYPE html>
<?php   include('server.php'); ?>
<?php
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$results = mysqli_query($db, "SELECT * FROM datas where id = '$id' ");
		$data = mysqli_fetch_assoc( $results);
		if(!$data){
			$results = mysqli_query($db, "SELECT * FROM datas where id = 'home' ");
			$id='home';
			$data = mysqli_fetch_assoc( $results);
		}
	}else{
		$id="admin";
	}
 ?>
<html lang="en">
  <!--begin::Head-->
  <head>
    <base href="" />
    <meta charset="utf-8" />
    <title>UML | Admin</title>
    <meta name="description" content="Updates and statistics" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link
      href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link
      href="assets/plugins/global/plugins.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/custom/prismjs/prismjs.bundle.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="./uml-logo.png" />
		<?php echo   $head_form; ?>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body
    id="kt_body"
    style="background-image: url(assets/media/bg/bg-10.jpg)"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"
  >
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
      <!--begin::Logo-->
      <a href="index.html">
        <img alt="Logo" src="./uml-logo.png" class="logo-default max-h-30px" />
      </a>
      <!--end::Logo-->
      <!--begin::Toolbar-->
      <div class="d-flex align-items-center">
        <button
          class="btn p-0 burger-icon burger-icon-left ml-4"
          id="kt_header_mobile_toggle"
        >
          <span></span>
        </button>
        <button
          class="btn btn-icon btn-hover-transparent-white p-0 ml-3"
          id="kt_header_mobile_topbar_toggle"
        >
          <span class="svg-icon svg-icon-xl">
            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="24px"
              height="24px"
              viewBox="0 0 24 24"
              version="1.1"
            >
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <path
                  d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                  fill="#000000"
                  fill-rule="nonzero"
                  opacity="0.3"
                />
                <path
                  d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                  fill="#000000"
                  fill-rule="nonzero"
                />
              </g>
            </svg>
            <!--end::Svg Icon-->
          </span>
        </button>
      </div>
      <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header header-fixed">
            <!--begin::Container-->
            <div
              class="container d-flex align-items-stretch justify-content-between"
            >
              <!--begin::Left-->
              <div class="d-flex align-items-stretch mr-3">
                <!--begin::Header Logo-->
                <div class="header-logo">
                  <a href="index.html">
                    <img
                      alt="Logo"
                      src="./uml-logo.png"
                      class="logo-default max-h-40px"
                    />
                    <img
                      alt="Logo"
                      src="./uml-logo.png"
                      class="logo-sticky max-h-40px"
                    />
                  </a>
                </div>
                <!--end::Header Logo-->
                <?php include('./component/header.php');  ?>
              </div>
              <!--end::Left-->
              <!--begin::Topbar-->
              <div class="topbar">
                <!--begin::Languages-->
                <div class="dropdown">
                  <div
                    class="topbar-item"
                    data-toggle="dropdown"
                    data-offset="10px,0px"
                    aria-expanded="false"
                  >
                    <div
                      class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1"
                    >
                      <img
                        class="h-20px w-20px rounded-sm"
                        src="assets/media/svg/flags/226-united-states.svg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div
                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right"
                    style=""
                  >
                    <ul class="navi navi-hover py-4">
                      <li class="navi-item">
                        <a href="admin.php?lan=en" class="navi-link">
                          <span class="symbol symbol-20 mr-3">
                            <img
                              src="assets/media/svg/flags/226-united-states.svg"
                              alt=""
                            />
                          </span>
                          <span class="navi-text">English</span>
                        </a>
                      </li>
                      <li class="navi-item active">
                        <a href="admin.php?lan=mon" class="navi-link">
                          <span class="symbol symbol-20 mr-3">
                            <img
                              src="https://www.pngrepo.com/download/248818/mongolia.png"
                              alt=""
                            />
                          </span>
                          <span class="navi-text">????????????</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--end::Languages-->
              </div>
              <!--end::Topbar-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Subheader-->
            <div
              class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent"
              id="kt_subheader"
            >
              <div
                class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap"
              >
                <!--begin::Details-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">
											?????????? ??????????
                    </h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div
                      class="d-flex align-items-center font-weight-bold my-2"
                    >
                      <!--begin::Item-->
                      <a href="#" class="opacity-75 hover-opacity-100">
                        <i class="flaticon2-shelter text-white icon-1x"></i>
                      </a>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <span
                        class="label label-dot label-sm bg-white opacity-75 mx-3"
                      ></span>
                      <a
                        href=""
                        class="text-white text-hover-white opacity-75 hover-opacity-100"
                        >UML</a
                      >
                      <!--end::Item-->
                      <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                  </div>
                  <!--end::Heading-->
                </div>
                <!--end::Details-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                  <!--begin::Button-->
                  <!-- <a
                    onclick="printDiv()"
                    class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2"
                    >??????????</a
                  > -->
                  <!--end::Button-->
                </div>
                <!--end::Toolbar-->
              </div>
            </div>
            <!--end::Subheader-->
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container">
                <!--begin::Dashboard-->
                <div class="row">
                  <!-- <div class="col-lg-3 col-xl-3 pt-5">
                    <div
                      class="card card-custom gutter-b example example-compact"

                    >
                      <div class="card-body" data-wheel-propagation="true">
												<ul class="navi navi-hover navi-active">
													<li class="navi-item">
														<a class="navi-link active" href="#">
															<span class="navi-icon">
																<i class="flaticon2-analytics"></i>
															</span>
															<span class="navi-text">Messages</span>
															<span class="navi-label">
																<span class="label label-danger label-rounded">2</span>
															</span>
														</a>
													</li>
													<li class="navi-item">
														<a class="navi-link" href="#">
															<span class="navi-icon">
																<i class="flaticon2-pie-chart-2"></i>
															</span>
															<span class="navi-text">Settings</span>
														</a>
													</li>
													<li class="navi-item">
														<a class="navi-link" href="#">
															<span class="navi-icon">
																<i class="flaticon2-layers"></i>
															</span>
															<span class="navi-text">Profile</span>
														</a>
													</li>
													<li class="navi-item">
														<a class="navi-link" href="#">
															<span class="navi-icon">
																<i class="flaticon2-box-1"></i>
															</span>
															<span class="navi-text">Tasks</span>
															<span class="navi-label">
																<span class="label label-warning label-rounded">5</span>
															</span>
														</a>
													</li>
												</ul>
                      </div>
                    </div>
                  </div> -->

									<div class="col-lg-12 col-xl-12 pt-5">
                    <div
                      class="card card-custom gutter-b example example-compact"

                    >
                      <div class="card-body" data-wheel-propagation="true">
												<form class="" action="server.php" method="post">
													<div class="form-group">
														<label>id</label>
														<input type="text" name="id" class="form-control" placeholder="uml-....">
													</div>
													<div class="form-group">
														<label>??????</label>
														<input type="text" name="title" class="form-control" placeholder="???????????? ????????????">
													</div>
													<div class="form-group">
														<label>Name</label>
														<input type="text" name="title_en" class="form-control" placeholder="?????? ????????????">
													</div>
													<div class="form-group" style="position: relative;">
	              						<label for="post">????????????</label>
	              						<textarea name="body" id="body_mon_1" class="form-control" cols="30" rows="5" ></textarea>
	              					</div>
	                        <div class="form-group" style="position: relative;">
	              						<label for="post">Englsih</label>
	              						<textarea name="body_en" id="body_mon_2" class="form-control" cols="30" rows="5" ></textarea>
	              					</div>
													<div class="form-group">
		                         <button type="submit" name="insert_data" class="btn btn-success">??????????????</button>
		                       </div>
												</form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end::Dashboard-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Entry-->
          </div>
          <!--end::Content-->
          <!--begin::Footer-->
          <div
            class="footer bg-white py-4 d-flex flex-lg-column"
            id="kt_footer"
          >
            <!--begin::Container-->
            <div
              class="container d-flex flex-column flex-md-row align-items-center justify-content-between"
            >
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span
                  class="text-muted font-weight-bold mr-2"
                  id="footer_date"
                ></span>
                <a
                  href=""
                  class="text-dark-75 text-hover-primary"
                  >uml-diagrams.mn</a
                >
              </div>
              <!--end::Copyright-->
              <!--begin::Nav-->
              <!--end::Nav-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
      <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          width="24px"
          height="24px"
          viewBox="0 0 24 24"
          version="1.1"
        >
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24" />
            <rect
              fill="#000000"
              opacity="0.3"
              x="11"
              y="10"
              width="2"
              height="10"
              rx="1"
            />
            <path
              d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
              fill="#000000"
              fill-rule="nonzero"
            />
          </g>
        </svg>
        <!--end::Svg Icon-->
      </span>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Sticky Toolbar-->

    <!--end::Sticky Toolbar-->
    <script>
      var HOST_URL = "https://keenthemes.com/metronic/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
      var KTAppSettings = {
        breakpoints: { sm: 576, md: 768, lg: 992, xl: 1200, xxl: 1200 },
        colors: {
          theme: {
            base: {
              white: "#ffffff",
              primary: "#6993FF",
              secondary: "#E5EAEE",
              success: "#1BC5BD",
              info: "#8950FC",
              warning: "#FFA800",
              danger: "#F64E60",
              light: "#F3F6F9",
              dark: "#212121",
            },
            light: {
              white: "#ffffff",
              primary: "#E1E9FF",
              secondary: "#ECF0F3",
              success: "#C9F7F5",
              info: "#EEE5FF",
              warning: "#FFF4DE",
              danger: "#FFE2E5",
              light: "#F3F6F9",
              dark: "#D6D6E0",
            },
            inverse: {
              white: "#ffffff",
              primary: "#ffffff",
              secondary: "#212121",
              success: "#ffffff",
              info: "#ffffff",
              warning: "#ffffff",
              danger: "#ffffff",
              light: "#464E5F",
              dark: "#ffffff",
            },
          },
          gray: {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121",
          },
        },
        "font-family": "Poppins",
      };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->
    <script type="text/javascript">
      var d = new Date();
      document.getElementById("footer_date").innerHTML = d.getFullYear() + " ??";
    </script>
		<script src="./vendor/ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
			CKEDITOR.replace('body_mon_1', {
			extraPlugins: 'media',
			extraPlugins: 'mathjax',
			language: 'mn',
			mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
			height: 320,
			on: {
					instanceReady: function() {
							this.dataProcessor.htmlFilter.addRules( {
									elements: {
											img: function( el ) {
													if ( !el.attributes.alt )
															el.attributes.alt = 'An image';
													el.addClass( 'img-fluid' );
											},
											iframe: function( el ) {
													if ( !el.attributes.alt )
													el.addClass( 'img-fluid' );
											},
											table: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'table table-bordered' );
                      },
									}
							} );
					}
			}
		});
		CKEDITOR.replace('body_mon_2', {
			extraPlugins: 'media',
			extraPlugins: 'mathjax',
			language: 'mn',
			mathJaxLib: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-AMS_HTML',
			height: 320,
			on: {
					instanceReady: function() {
							this.dataProcessor.htmlFilter.addRules( {
									elements: {
											img: function( el ) {
													if ( !el.attributes.alt )
															el.attributes.alt = 'An image';
													el.addClass( 'img-fluid' );
											},
											iframe: function( el ) {
													if ( !el.attributes.alt )
													el.addClass( 'img-fluid' );
											},
											table: function( el ) {
                          if ( !el.attributes.alt )
                          el.addClass( 'table table-bordered' );
                      },
									}
							} );
					}
			}
		});
		</script>
  </body>
  <!--end::Body-->
</html>
