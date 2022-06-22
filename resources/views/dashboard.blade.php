<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{URL::asset('css/dashboard.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h3>Dashboard</h3>
            <p class="lead">Welcome Admin!</p>
        </div>
        <div class="team-card">
            <p><i class="fa-duotone fa-calendar-range w-100"></i></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                    <div class="h1 bg-light rounded-circle p-4 text-dark"><i class="bi bi-cup"></i></div>
                    <div class="d-flex flex-column">
                        <p class="fs-1 fw-bold">16</p>
                        <p class="fs-4">Total Dishes</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                    <div class="h1 bg-light rounded-circle p-4 text-dark"><i class="bi bi-menu-down"></i></div>
                    <div class="d-flex flex-column">
                        <p class="fs-1 fw-bold">95</p>
                        <p class="fs-4">Total Orders</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                    <div class="h1 bg-light rounded-circle p-4 text-dark"><i class="bi bi-people"></i></div>
                    <div class="d-flex flex-column">
                        <p class="fs-1 fw-bold">37</p>
                        <p class="fs-4">Customers</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                    <div class="h1 bg-light rounded-circle p-4 text-dark"><i class="bi bi-currency-dollar"></i></div>
                    <div class="d-flex flex-column">
                        <p class="fs-1 fw-bold">1032</p>
                        <p class="fs-4">Total Revenue</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-3 border-0 shadow text-center bg-blue text-white">
                    <div class="row d-flex justify-content-evenly">
                        <div>
                            <h4>Order Summary</h4>
                            <p class="lead">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                        <div class="btn-group tab" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary tablinks" onclick="openTab(event, 'Monthly')" id="defaultOpen">Monthly</button>
                            <button type="button" class="btn btn-secondary tablinks" onclick="openTab(event, 'Weekly')">Weekly</button>
                            <button type="button" class="btn btn-secondary tablinks" onclick="openTab(event, 'Today')">Today</button>
                        </div>
                        <div id="Monthly" class="tabcontent py-4">
                            <div class="rounded d-flex justify-content-evenly">
                                <div class="d-flex">
                                    <p class="px-3 h4 rounded bg-success">25</p>
                                    <p class="ps-3 lead">New Orders</p>
                                </div>
                                <a class="text-light" href="{{ url('orders') }}">Manage Orders<i class="bi bi-caret-right"></i></a>
                            </div>
                            <div class="row d-flex justify-content-evenly">
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">35</p>
                                            <p class="fs-4">On Delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">55</p>
                                            <p class="fs-4">Delivered</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">10</p>
                                            <p class="fs-4">Cancelled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5">
                                <svg id="SvgjsSvg1378" width="120" height="116.89999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1380" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                        <g id="SvgjsG1384" class="apexcharts-pie">
                                            <g id="SvgjsG1385" transform="translate(0, 0) scale(1)">
                                                <g id="SvgjsG1387" class="apexcharts-slices">
                                                    <path id="SvgjsPath1389" d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" fill="rgba(255,92,90,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="162" data:startAngle="0" data:strokeWidth="2" data:value="45" data:pathOrig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1391" d="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" fill="rgba(43,193,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="126" data:startAngle="162" data:strokeWidth="2" data:value="35" data:pathOrig="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1393" d="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" fill="rgba(64,74,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="72" data:startAngle="288" data:strokeWidth="2" data:value="20" data:pathOrig="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" stroke="#ffffff"></path>
                                                </g>
                                            </g>
                                        </g>
                                </svg>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Delivered</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:35%; height:8px;background-color: rgba(43,193,86,1);" role="progressbar">
                                                <span class="sr-only">35% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">35</span>
                                    </div>
                                    <div class="d-flex align-items-center  mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">On Delivery</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:55%; height:8px;background-color: rgba(255,92,90,1);" role="progressbar">
                                                <span class="sr-only">55% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">55</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Cancelled</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:10%; height:8px;background-color:rgba(64,74,86,1);" role="progressbar">
                                                <span class="sr-only">10% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">10</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Weekly" class="tabcontent py-4">
                            <div class="rounded d-flex justify-content-evenly">
                                <div class="d-flex">
                                    <p class="px-3 h4 rounded bg-success">25</p>
                                    <p class="ps-3 lead">New Orders</p>
                                </div>
                                <a class="text-light" href="{{ url('orders') }}">Manage Orders<i class="bi bi-caret-right"></i></a>
                            </div>
                            <div class="row d-flex justify-content-evenly">
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">45</p>
                                            <p class="fs-4">On Delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">95</p>
                                            <p class="fs-4">Delivered</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">6</p>
                                            <p class="fs-4">Cancelled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5">
                                <svg id="SvgjsSvg1378" width="120" height="116.89999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1380" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                        <g id="SvgjsG1384" class="apexcharts-pie">
                                            <g id="SvgjsG1385" transform="translate(0, 0) scale(1)">
                                                <g id="SvgjsG1387" class="apexcharts-slices">
                                                    <path id="SvgjsPath1389" d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" fill="rgba(255,92,90,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="162" data:startAngle="0" data:strokeWidth="2" data:value="45" data:pathOrig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1391" d="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" fill="rgba(43,193,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="126" data:startAngle="162" data:strokeWidth="2" data:value="35" data:pathOrig="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1393" d="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" fill="rgba(64,74,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="72" data:startAngle="288" data:strokeWidth="2" data:value="20" data:pathOrig="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" stroke="#ffffff"></path>

                                                </g>
                                            </g>
                                        </g>
                                </svg>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Delivered</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:45%; height:8px;background-color: rgba(43,193,86,1);" role="progressbar">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">45</span>
                                    </div>
                                    <div class="d-flex align-items-center  mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">On Delivery</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:95%; height:8px;background-color: rgba(255,92,90,1);" role="progressbar">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">95</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Cancelled</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:6%; height:8px;background-color:rgba(64,74,86,1);" role="progressbar">
                                                <span class="sr-only">6% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="Today" class="tabcontent py-4">
                            <div class="rounded d-flex justify-content-evenly">
                                <div class="d-flex">
                                    <p class="px-3 rounded h4 bg-success">5</p>
                                    <p class="ps-3 lead">New Orders</p>
                                </div>
                                <a class="text-light" href="{{ url('orders') }}">Manage Orders<i class="bi bi-caret-right"></i></a>
                            </div>
                            <div class="row d-flex justify-content-evenly">
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">45</p>
                                            <p class="fs-4">On Delivery</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">95</p>
                                            <p class="fs-4">Delivered</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 px-3 my-2">
                                    <div class="bg-dark text-light card py-3 border-0 shadow d-flex flex-row justify-content-evenly align-items-center">
                                        <div class="d-flex flex-column">
                                            <p class="fs-1 fw-bold">6</p>
                                            <p class="fs-4">Cancelled</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-5">
                                <svg id="SvgjsSvg1378" width="120" height="116.89999999999999" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1380" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                        <g id="SvgjsG1384" class="apexcharts-pie">
                                            <g id="SvgjsG1385" transform="translate(0, 0) scale(1)">
                                                <g id="SvgjsG1387" class="apexcharts-slices">
                                                    <path id="SvgjsPath1389" d="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" fill="rgba(255,92,90,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="162" data:startAngle="0" data:strokeWidth="2" data:value="45" data:pathOrig="M 60 3.463414634146339 A 56.53658536585366 56.53658536585366 0 0 1 77.47076568197873 113.76948792127234 L 68.73538284098937 86.88474396063617 A 28.26829268292683 28.26829268292683 0 0 0 60 31.73170731707317 L 60 3.463414634146339 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1391" d="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" fill="rgba(43,193,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="126" data:startAngle="162" data:strokeWidth="2" data:value="35" data:pathOrig="M 77.47076568197873 113.76948792127234 A 56.53658536585366 56.53658536585366 0 0 1 6.2305120787276564 42.529234318021246 L 33.11525603936383 51.264617159010626 A 28.26829268292683 28.26829268292683 0 0 0 68.73538284098937 86.88474396063617 L 77.47076568197873 113.76948792127234 z" stroke="#ffffff"></path>
                                                    <path id="SvgjsPath1393" d="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" fill="rgba(64,74,86,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="72" data:startAngle="288" data:strokeWidth="2" data:value="20" data:pathOrig="M 6.2305120787276564 42.529234318021246 A 56.53658536585366 56.53658536585366 0 0 1 59.9901325044254 3.463415495247773 L 59.9950662522127 31.731707747623886 A 28.26829268292683 28.26829268292683 0 0 0 33.11525603936383 51.264617159010626 L 6.2305120787276564 42.529234318021246 z" stroke="#ffffff"></path>

                                                </g>
                                            </g>
                                        </g>
                                </svg>
                                <div class="col-xl-9 col-lg-10 col-xxl-8 col-sm-9 col-md-9">
                                    <div class="d-flex align-items-center mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Delivered</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:45%; height:8px;background-color: rgba(43,193,86,1);" role="progressbar">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">45</span>
                                    </div>
                                    <div class="d-flex align-items-center  mb-3">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">On Delivery</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:95%; height:8px;background-color: rgba(255,92,90,1);" role="progressbar">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">95</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-14 me-2 col-4 col-xxl-5 px-0">Cancelled</p>
                                        <div class="progress mb-0" style="height:8px; width:100%;">
                                            <div class="progress-bar progress-animated" style="width:6%; height:8px;background-color:rgba(64,74,86,1);" role="progressbar">
                                                <span class="sr-only">6% Complete</span>
                                            </div>
                                        </div>
                                        <span class="pull-right ms-auto col-1 col-xxl-2 px-0 text-right">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-12 px-3 my-2">
                <div class="bg-dark text-light card py-4 border-0 shadow text-center text-white d-flex flex-column">
                    <a class="btn-lg btn-secondary py-3 pt-4 my-3" href="{{ url('accounts') }}">
                        <h4>Accounts</h4>
                    </a>
                    <a class="btn-lg btn-secondary py-3 my-3" href="{{ url('reservationadmin') }}">
                        <h4>Reservations</h4>
                    </a>
                    <a class="btn-lg btn-secondary py-3 my-3" href="{{ url('dishes') }}">
                        <h4>Dishes</h4>
                    </a>
                    <a class="btn-lg btn-secondary py-3 my-3" href="{{ url('orders') }}">
                        <h4>Orders</h4>
                    </a>
                    <a class="btn-lg btn-secondary py-3 my-3" href="{{ url('teamadmin') }}">
                        <h4>Team</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8fa3510126.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        document.getElementById("defaultOpen").click();

        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</body>

</html>