@extends('layout.admin')

@section('section')
<div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
      <h3 class="mb-0"> {{ $ecole->nom }} <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Gestion</span>
      </h3>
      <div class="d-flex">
        <button type="button" class="btn btn-sm bg-white btn-icon-text border">
          <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
        <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
          <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
        <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
        <div class="row">
          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
            <div class="card bg-warning">
              <div class="card-body px-3 py-4">
                <div class="d-flex justify-content-between align-items-start">
                  <div class="color-card">
                    <p class="mb-0 color-card-head">Les classes</p>
                    <h2 class="text-white"> {{ $classes->count() }}
                    </h2>
                  </div>
                  <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                </div>
                <h6 class="text-white">18.33% depuis le dernier mois</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
            <div class="card bg-danger">
              <div class="card-body px-3 py-4">
                <div class="d-flex justify-content-between align-items-start">
                  <div class="color-card">
                    <p class="mb-0 color-card-head">Eleves</p>
                    <h2 class="text-white"> {{ $eleves->count() }}
                    </h2>
                  </div>
                  <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                </div>
                <h6 class="text-white">13.21% Depuis le dernier mois</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
            <div class="card bg-primary">
              <div class="card-body px-3 py-4">
                <div class="d-flex justify-content-between align-items-start">
                  <div class="color-card">
                    <p class="mb-0 color-card-head">Agents</p>
                    <h2 class="text-white"> {{ $users->count() }}
                    </h2>
                  </div>
                  <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
                </div>
                <h6 class="text-white">67.98% Depuis le dernier mois</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
            <div class="card bg-success">
              <div class="card-body px-3 py-4">
                <div class="d-flex justify-content-between align-items-start">
                  <div class="color-card">
                    <p class="mb-0 color-card-head">Messages</p>
                    <h2 class="text-white">{{ 0 }}</h2>
                  </div>
                  <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
                </div>
                <h6 class="text-white">20.32% Depuis le dernier mois</h6>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-xl-9 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-7">
                <h5>Surveillance des messages</h5>
                <p class="text-muted"> 2021 <a class="text-muted font-weight-medium pl-2" href="#"><u>Voir le détail</u></a>
                </p>
              </div>
              <div class="col-sm-5 text-md-right">
                <button type="button" class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal">
                  <i class="mdi mdi-email btn-icon-prepend"></i>Télécharger le rapport </button>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-sm-12">
                <div class="flot-chart-wrapper">
                  <div id="flotChart" class="flot-chart">
                    <canvas class="flot-base"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <p class="text-muted mb-0"> Les messages sont adressés aux parents par mail</b>
                </p>
              </div>
              <div class="col-sm-4">
                <p class="mb-0 text-muted">Sales Revenue</p>
                <h5 class="d-inline-block survey-value mb-0"> $2,45,500 </h5>
                <p class="d-inline-block text-danger mb-0"> last 8 months </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-8 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body px-0 overflow-auto">
            <h4 class="card-title pl-4">Quelques éléves</h4>
            <div class="table-responsive">
              <table class="table">
                <thead class="bg-light">
                  <tr>
                    <th>Nom complet</th>
                    <th>Classe</th>
                    <th>Messages concernés</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($eleves->take(10) as $p)
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="assets/images/faces/face1.jpg" alt="image" />
                        <div class="table-user-name ml-3">
                          <p class="mb-0 font-weight-medium">
                            <span class="text-uppercase">{{ $p->nom }}</span>
                            <span class="text-capitalize">{{ $p->prenom }}</span>
                          </p>
                          <small> fille</small>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="badge badge-inverse-success"> {{ $p->classe->label }} </div>
                    </td>
                    <td>0</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a class="text-black mt-3 d-block pl-4" href="{{ route('front.pupil') }}">
              <span class="font-weight-medium h6">Voir tous les élèves</span>
              <i class="mdi mdi-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-title font-weight-medium"> Les classes </div>
            <p class="text-muted"> Notre école compte {{ $classes->count() }} classes </p>
            @foreach ($classes->take(3) as $p)
            <div class="d-flex flex-wrap border-bottom py-2 border-top justify-content-between">
                <img class="survey-img mb-lg-3" src="assets/images/dashboard/img_3.jpg" alt="" />
                <div class="pt-2">
                  <h5 class="mb-0">{{ $p->label }}</h5>
                  <p class="mb-0 text-muted">{{ $p->cycle }}</p>
                  <h5 class="mb-0">{{ $p->promotion }}</h5>
                </div>
            </div>
            @endforeach
            <a class="text-black mt-3 d-block font-weight-medium h6" href="{{ route('front.class') }}">
                Voir tout <i class="mdi mdi-chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-8 grid-margin stretch-card">
        <div class="card card-calender">
          <div class="card-body">
            <div class="row pt-4">
              <div class="col-sm-6">
                <h1 class="text-white">10:16PM</h1>
                <h5 class="text-white">Monday 25 October, 2016</h5>
                <h5 class="text-white pt-2 m-0">Precipitation:50%</h5>
                <h5 class="text-white m-0">Humidity:23%</h5>
                <h5 class="text-white m-0">Wind:13 km/h</h5>
              </div>
              <div class="col-sm-6 text-sm-right pt-3 pt-sm-0">
                <h3 class="text-white">Clear Sky</h3>
                <p class="text-white m-0">Kinshasa</p>
                <h3 class="text-white m-0">21°C</h3>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-sm-12">
                <ul class="d-flex pl-0 overflow-auto">
                  <li class="weakly-weather-item text-white font-weight-medium text-center active">
                    <p class="mb-0">TODAY</p>
                    <i class="mdi mdi-weather-cloudy"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">MON</p>
                    <i class="mdi mdi-weather-hail"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">TUE</p>
                    <i class="mdi mdi-weather-cloudy"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">WED</p>
                    <i class="mdi mdi-weather-fog"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">THU</p>
                    <i class="mdi mdi-weather-hail"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">FRI</p>
                    <i class="mdi mdi-weather-cloudy"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">SAT</p>
                    <i class="mdi mdi-weather-hail"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                  <li class="weakly-weather-item text-white font-weight-medium text-center">
                    <p class="mb-0">SUN</p>
                    <i class="mdi mdi-weather-cloudy"></i>
                    <p class="mb-0">21<span class="symbol">°c</span></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 grid-margin stretch-card">
        <!--activity-->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              <span class="d-flex justify-content-between">
                <span>Activités</span>
                <span class="dropdown dropleft d-block">
                  <span id="dropdownMenuButton1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span><i class="mdi mdi-dots-horizontal"></i></span>
                  </span>
                  <span class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="#">Message</a>
                    <a class="dropdown-item" href="#">Eleves</a>
                    <a class="dropdown-item" href="#">Classes</a>
                  </span>
                </span>
              </span>
            </h4>
            <ul class="gradient-bullet-list border-bottom">
              @foreach ( $activities as $p)
                <li>
                    <h6 class="mb-0"> {{ $p }} </h6>
                    <p class="text-muted"></p>
                </li>
              @endforeach
            </ul>
         </div>
        </div>
        <!--activity ends-->
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
        <div class="card card-invoice">
          <div class="card-body">
            <h4 class="card-title pb-3">Pending invoices</h4>
            <div class="list-card">
              <div class="row align-items-center">
                <div class="col-7 col-sm-8">
                  <div class="row align-items-center">
                    <div class="col-sm-4">
                      <img src="assets/images/faces/face2.jpg" alt="" />
                    </div>
                    <div class="col-sm-8 pr-0 pl-sm-0">
                      <span>06 Jan 2019</span>
                      <h6 class="mb-1 mb-sm-0">Isabel Cross</h6>
                    </div>
                  </div>
                </div>
                <div class="col-5 col-sm-4">
                  <div class="d-flex pt-1 align-items-center">
                    <div class="reload-outer bg-info">
                      <i class="mdi mdi-reload"></i>
                    </div>
                    <div class="dropdown dropleft pl-1 pt-3">
                      <div id="dropdownMenuButton2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <p><i class="mdi mdi-dots-vertical"></i></p>
                      </div>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item" href="#">Sales</a>
                        <a class="dropdown-item" href="#">Track Invoice</a>
                        <a class="dropdown-item" href="#">Payment History</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="list-card">
              <div class="row align-items-center">
                <div class="col-7 col-sm-8">
                  <div class="row align-items-center">
                    <div class="col-sm-4">
                      <img src="assets/images/faces/face3.jpg" alt="" />
                    </div>
                    <div class="col-sm-8 pr-0 pl-sm-0">
                      <span>18 Mar 2019</span>
                      <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                    </div>
                  </div>
                </div>
                <div class="col-5 col-sm-4">
                  <div class="d-flex pt-1 align-items-center">
                    <div class="reload-outer bg-primary">
                      <i class="mdi mdi-reload"></i>
                    </div>
                    <div class="dropdown dropleft pl-1 pt-3">
                      <div id="dropdownMenuButton3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <p><i class="mdi mdi-dots-vertical"></i></p>
                      </div>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item" href="#">Sales</a>
                        <a class="dropdown-item" href="#">Track Invoice</a>
                        <a class="dropdown-item" href="#">Payment History</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="list-card">
              <div class="row align-items-center">
                <div class="col-7 col-sm-8">
                  <div class="row align-items-center">
                    <div class="col-sm-4">
                      <img src="assets/images/faces/face11.jpg" alt="" />
                    </div>
                    <div class="col-sm-8 pr-0 pl-sm-0">
                      <span>10 Apr 2019</span>
                      <h6 class="mb-1 mb-sm-0">Don Bennett</h6>
                    </div>
                  </div>
                </div>
                <div class="col-5 col-sm-4">
                  <div class="d-flex pt-1 align-items-center">
                    <div class="reload-outer bg-warning">
                      <i class="mdi mdi-reload"></i>
                    </div>
                    <div class="dropdown dropleft pl-1 pt-3">
                      <div id="dropdownMenuButton4" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <p><i class="mdi mdi-dots-vertical"></i></p>
                      </div>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <a class="dropdown-item" href="#">Sales</a>
                        <a class="dropdown-item" href="#">Track Invoice</a>
                        <a class="dropdown-item" href="#">Payment History</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="list-card">
              <div class="row align-items-center">
                <div class="col-7 col-sm-8">
                  <div class="row align-items-center">
                    <div class="col-sm-4">
                      <img src="assets/images/faces/face3.jpg" alt="" />
                    </div>
                    <div class="col-sm-8 pr-0 pl-sm-0">
                      <span>18 Mar 2019</span>
                      <h6 class="mb-1 mb-sm-0">Carrie Parker</h6>
                    </div>
                  </div>
                </div>
                <div class="col-5 col-sm-4">
                  <div class="d-flex pt-1 align-items-center">
                    <div class="reload-outer bg-info">
                      <i class="mdi mdi-reload"></i>
                    </div>
                    <div class="dropdown dropleft pl-1 pt-3">
                      <div id="dropdownMenuButton5" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <p><i class="mdi mdi-dots-vertical"></i></p>
                      </div>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                        <a class="dropdown-item" href="#">Sales</a>
                        <a class="dropdown-item" href="#">Track Invoice</a>
                        <a class="dropdown-item" href="#">Payment History</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 grid-margin stretch-card">
        <!--datepicker-->
        <div class="card">
          <div class="card-body">
            <div id="inline-datepicker" class="datepicker table-responsive"></div>
          </div>
        </div>
        <!--datepicker ends-->
      </div>
      <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
        <!--browser stats-->
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Browser stats</h4>
            <div class="row py-2">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                  <div>
                    <img class="mr-2" src="assets/images/browser-logo/opera-logo.png" alt="" />
                    <span class="p">opera mini</span>
                  </div>
                  <p class="mb-0">23%</p>
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                  <div>
                    <img class="mr-2" src="assets/images/browser-logo/safari-logo.png" alt="" />
                    <span class="p">Safari</span>
                  </div>
                  <p class="mb-0">07%</p>
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                  <div>
                    <img class="mr-2" src="assets/images/browser-logo/chrome-logo.png" alt="" />
                    <span class="p">Chrome</span>
                  </div>
                  <p class="mb-0">33%</p>
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                  <div>
                    <img class="mr-2" src="assets/images/browser-logo/firefox-logo.png" alt="" />
                    <span class="p">Firefox</span>
                  </div>
                  <p class="mb-0">17%</p>
                </div>
              </div>
            </div>
            <div class="row py-2">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <div>
                    <img class="mr-2" src="assets/images/browser-logo/explorer-logo.png" alt="" />
                    <span class="p">Explorer</span>
                  </div>
                  <p class="mb-0">05%</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--browser stats ends-->
      </div>
    </div>
  </div>
  @endsection
