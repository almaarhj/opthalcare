@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
@endsection

@section('page-style')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')

    <div class="row">


        <!-- Sales last year -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Sales</h5>
                    <small class="text-muted">Last Year</small>
                </div>
                <div id="salesLastYear" style="min-height: 78px;">
                    <div id="apexchartsf5xz7sur" class="apexcharts-canvas apexchartsf5xz7sur apexcharts-theme-light"
                        style="width: 167px; height: 78px;"><svg id="SvgjsSvg1553" width="167" height="78"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1555" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                <defs id="SvgjsDefs1554">
                                    <clipPath id="gridRectMaskf5xz7sur">
                                        <rect id="SvgjsRect1560" width="173" height="80" x="-3" y="-1" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskf5xz7sur"></clipPath>
                                    <clipPath id="nonForecastMaskf5xz7sur"></clipPath>
                                    <clipPath id="gridRectMarkerMaskf5xz7sur">
                                        <rect id="SvgjsRect1561" width="171" height="82" x="-2" y="-2" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <linearGradient id="SvgjsLinearGradient1566" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1567" stop-opacity="0.6" stop-color="rgba(40,199,111,0.6)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop1568" stop-opacity="0.25" stop-color="rgba(212,244,226,0.25)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop1569" stop-opacity="0.25" stop-color="rgba(212,244,226,0.25)"
                                            offset="1"></stop>
                                    </linearGradient>
                                </defs>
                                <line id="SvgjsLine1559" x1="0" y1="0" x2="0" y2="78"
                                    stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="78" fill="#b1b9c4"
                                    filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1572" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1573" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g>
                                </g>
                                <g id="SvgjsG1579" class="apexcharts-grid">
                                    <g id="SvgjsG1580" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1582" x1="0" y1="0" x2="167"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1583" x1="0" y1="15.6" x2="167"
                                            y2="15.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1584" x1="0" y1="31.2" x2="167"
                                            y2="31.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1585" x1="0" y1="46.8" x2="167"
                                            y2="46.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1586" x1="0" y1="62.4" x2="167"
                                            y2="62.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1587" x1="0" y1="78" x2="167"
                                            y2="78" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1581" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1589" x1="0" y1="78" x2="167"
                                        y2="78" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                    <line id="SvgjsLine1588" x1="0" y1="1" x2="0"
                                        y2="78" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                </g>
                                <g id="SvgjsG1562" class="apexcharts-area-series apexcharts-plot-series">
                                    <g id="SvgjsG1563" class="apexcharts-series" seriesName="seriesx1"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1570"
                                            d="M 0 78L 0 43.333333333333336C 19.483333333333334 43.333333333333336 36.18333333333334 68.46666666666667 55.66666666666667 68.46666666666667C 75.15 68.46666666666667 91.85000000000001 8.666666666666671 111.33333333333334 8.666666666666671C 130.81666666666666 8.666666666666671 147.51666666666668 34.666666666666664 167 34.666666666666664C 167 34.666666666666664 167 34.666666666666664 167 78M 167 34.666666666666664z"
                                            fill="url(#SvgjsLinearGradient1566)" fill-opacity="1" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf5xz7sur)"
                                            pathTo="M 0 78L 0 43.333333333333336C 19.483333333333334 43.333333333333336 36.18333333333334 68.46666666666667 55.66666666666667 68.46666666666667C 75.15 68.46666666666667 91.85000000000001 8.666666666666671 111.33333333333334 8.666666666666671C 130.81666666666666 8.666666666666671 147.51666666666668 34.666666666666664 167 34.666666666666664C 167 34.666666666666664 167 34.666666666666664 167 78M 167 34.666666666666664z"
                                            pathFrom="M -1 78L -1 78L 55.66666666666667 78L 111.33333333333334 78L 167 78">
                                        </path>
                                        <path id="SvgjsPath1571"
                                            d="M 0 43.333333333333336C 19.483333333333334 43.333333333333336 36.18333333333334 68.46666666666667 55.66666666666667 68.46666666666667C 75.15 68.46666666666667 91.85000000000001 8.666666666666671 111.33333333333334 8.666666666666671C 130.81666666666666 8.666666666666671 147.51666666666668 34.666666666666664 167 34.666666666666664"
                                            fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1"
                                            stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                            class="apexcharts-area" index="0" clip-path="url(#gridRectMaskf5xz7sur)"
                                            pathTo="M 0 43.333333333333336C 19.483333333333334 43.333333333333336 36.18333333333334 68.46666666666667 55.66666666666667 68.46666666666667C 75.15 68.46666666666667 91.85000000000001 8.666666666666671 111.33333333333334 8.666666666666671C 130.81666666666666 8.666666666666671 147.51666666666668 34.666666666666664 167 34.666666666666664"
                                            pathFrom="M -1 78L -1 78L 55.66666666666667 78L 111.33333333333334 78L 167 78">
                                        </path>
                                        <g id="SvgjsG1564" class="apexcharts-series-markers-wrap" data:realIndex="0"></g>
                                    </g>
                                    <g id="SvgjsG1565" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <line id="SvgjsLine1590" x1="0" y1="0" x2="167" y2="0"
                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1591" x1="0" y1="0" x2="167" y2="0"
                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1592" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1593" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1594" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1558" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe"></rect>
                            <g id="SvgjsG1578" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)">
                            </g>
                            <g id="SvgjsG1556" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 39px;"></div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">175k</h4>
                        <small class="text-danger">-16.2%</small>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 168px; height: 220px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>

        <!-- Sessions Last month -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <h5 class="card-title mb-0">Sessions</h5>
                    <small class="text-muted">Last Month</small>
                </div>
                <div class="card-body" style="position: relative;">
                    <div id="sessionsLastMonth" style="min-height: 78px;">
                        <div id="apexchartsyyb277xh" class="apexcharts-canvas apexchartsyyb277xh apexcharts-theme-light"
                            style="width: 119px; height: 78px;"><svg id="SvgjsSvg1595" width="119" height="78"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1597" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(-8, -11)">
                                    <defs id="SvgjsDefs1596">
                                        <linearGradient id="SvgjsLinearGradient1601" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1602" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1603" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1604" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskyyb277xh">
                                            <rect id="SvgjsRect1606" width="142" height="90" x="-2.5" y="-0.5"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskyyb277xh"></clipPath>
                                        <clipPath id="nonForecastMaskyyb277xh"></clipPath>
                                        <clipPath id="gridRectMarkerMaskyyb277xh">
                                            <rect id="SvgjsRect1607" width="141" height="93" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1605" width="0" height="89" x="0" y="0" rx="0"
                                        ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1601)" class="apexcharts-xcrosshairs"
                                        y2="89" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1623" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1624" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, 2.75)"></g>
                                    </g>
                                    <g id="SvgjsG1633" class="apexcharts-grid">
                                        <g id="SvgjsG1634" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1636" x1="0" y1="0" x2="137"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1637" x1="0" y1="17.8" x2="137"
                                                y2="17.8" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1638" x1="0" y1="35.6" x2="137"
                                                y2="35.6" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1639" x1="0" y1="53.400000000000006"
                                                x2="137" y2="53.400000000000006" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1640" x1="0" y1="71.2" x2="137"
                                                y2="71.2" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1641" x1="0" y1="89" x2="137"
                                                y2="89" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1635" class="apexcharts-gridlines-vertical" style="display: none;">
                                        </g>
                                        <line id="SvgjsLine1643" x1="0" y1="89" x2="137"
                                            y2="89" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1642" x1="0" y1="1" x2="0"
                                            y2="89" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1608" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1609" class="apexcharts-series" seriesName="PRODUCTxA"
                                            rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1611"
                                                d="M 8.219999999999999 48.4L 8.219999999999999 34.666666666666664Q 8.219999999999999 29.666666666666664 13.219999999999999 29.666666666666664L 13.18 29.666666666666664Q 18.18 29.666666666666664 18.18 34.666666666666664L 18.18 34.666666666666664L 18.18 48.4Q 18.18 53.4 13.18 53.4L 13.219999999999999 53.4Q 8.219999999999999 53.4 8.219999999999999 48.4z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 8.219999999999999 48.4L 8.219999999999999 34.666666666666664Q 8.219999999999999 29.666666666666664 13.219999999999999 29.666666666666664L 13.18 29.666666666666664Q 18.18 29.666666666666664 18.18 34.666666666666664L 18.18 34.666666666666664L 18.18 48.4Q 18.18 53.4 13.18 53.4L 13.219999999999999 53.4Q 8.219999999999999 53.4 8.219999999999999 48.4z"
                                                pathFrom="M 8.219999999999999 48.4L 8.219999999999999 48.4L 18.18 48.4L 18.18 48.4L 18.18 48.4L 18.18 48.4L 18.18 48.4L 8.219999999999999 48.4"
                                                cy="29.666666666666664" cx="35.12" j="0" val="4"
                                                barHeight="23.733333333333334" barWidth="10.96"></path>
                                            <path id="SvgjsPath1612"
                                                d="M 35.62 48.4L 35.62 40.599999999999994Q 35.62 35.599999999999994 40.62 35.599999999999994L 40.58 35.599999999999994Q 45.58 35.599999999999994 45.58 40.599999999999994L 45.58 40.599999999999994L 45.58 48.4Q 45.58 53.4 40.58 53.4L 40.62 53.4Q 35.62 53.4 35.62 48.4z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 35.62 48.4L 35.62 40.599999999999994Q 35.62 35.599999999999994 40.62 35.599999999999994L 40.58 35.599999999999994Q 45.58 35.599999999999994 45.58 40.599999999999994L 45.58 40.599999999999994L 45.58 48.4Q 45.58 53.4 40.58 53.4L 40.62 53.4Q 35.62 53.4 35.62 48.4z"
                                                pathFrom="M 35.62 48.4L 35.62 48.4L 45.58 48.4L 45.58 48.4L 45.58 48.4L 45.58 48.4L 45.58 48.4L 35.62 48.4"
                                                cy="35.599999999999994" cx="62.519999999999996" j="1" val="3"
                                                barHeight="17.8" barWidth="10.96"></path>
                                            <path id="SvgjsPath1613"
                                                d="M 63.019999999999996 48.4L 63.019999999999996 22.799999999999997Q 63.019999999999996 17.799999999999997 68.02 17.799999999999997L 67.97999999999999 17.799999999999997Q 72.97999999999999 17.799999999999997 72.97999999999999 22.799999999999997L 72.97999999999999 22.799999999999997L 72.97999999999999 48.4Q 72.97999999999999 53.4 67.97999999999999 53.4L 68.02 53.4Q 63.019999999999996 53.4 63.019999999999996 48.4z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 63.019999999999996 48.4L 63.019999999999996 22.799999999999997Q 63.019999999999996 17.799999999999997 68.02 17.799999999999997L 67.97999999999999 17.799999999999997Q 72.97999999999999 17.799999999999997 72.97999999999999 22.799999999999997L 72.97999999999999 22.799999999999997L 72.97999999999999 48.4Q 72.97999999999999 53.4 67.97999999999999 53.4L 68.02 53.4Q 63.019999999999996 53.4 63.019999999999996 48.4z"
                                                pathFrom="M 63.019999999999996 48.4L 63.019999999999996 48.4L 72.97999999999999 48.4L 72.97999999999999 48.4L 72.97999999999999 48.4L 72.97999999999999 48.4L 72.97999999999999 48.4L 63.019999999999996 48.4"
                                                cy="17.799999999999997" cx="89.91999999999999" j="2" val="6"
                                                barHeight="35.6" barWidth="10.96"></path>
                                            <path id="SvgjsPath1614"
                                                d="M 90.41999999999999 48.4L 90.41999999999999 34.666666666666664Q 90.41999999999999 29.666666666666664 95.41999999999999 29.666666666666664L 95.38 29.666666666666664Q 100.38 29.666666666666664 100.38 34.666666666666664L 100.38 34.666666666666664L 100.38 48.4Q 100.38 53.4 95.38 53.4L 95.41999999999999 53.4Q 90.41999999999999 53.4 90.41999999999999 48.4z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 90.41999999999999 48.4L 90.41999999999999 34.666666666666664Q 90.41999999999999 29.666666666666664 95.41999999999999 29.666666666666664L 95.38 29.666666666666664Q 100.38 29.666666666666664 100.38 34.666666666666664L 100.38 34.666666666666664L 100.38 48.4Q 100.38 53.4 95.38 53.4L 95.41999999999999 53.4Q 90.41999999999999 53.4 90.41999999999999 48.4z"
                                                pathFrom="M 90.41999999999999 48.4L 90.41999999999999 48.4L 100.38 48.4L 100.38 48.4L 100.38 48.4L 100.38 48.4L 100.38 48.4L 90.41999999999999 48.4"
                                                cy="29.666666666666664" cx="117.32" j="3" val="4"
                                                barHeight="23.733333333333334" barWidth="10.96"></path>
                                            <path id="SvgjsPath1615"
                                                d="M 117.82 48.4L 117.82 40.599999999999994Q 117.82 35.599999999999994 122.82 35.599999999999994L 122.78 35.599999999999994Q 127.78 35.599999999999994 127.78 40.599999999999994L 127.78 40.599999999999994L 127.78 48.4Q 127.78 53.4 122.78 53.4L 122.82 53.4Q 117.82 53.4 117.82 48.4z"
                                                fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 117.82 48.4L 117.82 40.599999999999994Q 117.82 35.599999999999994 122.82 35.599999999999994L 122.78 35.599999999999994Q 127.78 35.599999999999994 127.78 40.599999999999994L 127.78 40.599999999999994L 127.78 48.4Q 127.78 53.4 122.78 53.4L 122.82 53.4Q 117.82 53.4 117.82 48.4z"
                                                pathFrom="M 117.82 48.4L 117.82 48.4L 127.78 48.4L 127.78 48.4L 127.78 48.4L 127.78 48.4L 127.78 48.4L 117.82 48.4"
                                                cy="35.599999999999994" cx="144.72" j="4" val="3"
                                                barHeight="17.8" barWidth="10.96"></path>
                                        </g>
                                        <g id="SvgjsG1616" class="apexcharts-series" seriesName="PRODUCTxB"
                                            rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1618"
                                                d="M 8.219999999999999 63.4L 8.219999999999999 71.2Q 8.219999999999999 76.2 13.219999999999999 76.2L 13.18 76.2Q 18.18 76.2 18.18 71.2L 18.18 71.2L 18.18 63.4Q 18.18 58.4 13.18 58.4L 13.219999999999999 58.4Q 8.219999999999999 58.4 8.219999999999999 63.4z"
                                                fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 8.219999999999999 63.4L 8.219999999999999 71.2Q 8.219999999999999 76.2 13.219999999999999 76.2L 13.18 76.2Q 18.18 76.2 18.18 71.2L 18.18 71.2L 18.18 63.4Q 18.18 58.4 13.18 58.4L 13.219999999999999 58.4Q 8.219999999999999 58.4 8.219999999999999 63.4z"
                                                pathFrom="M 8.219999999999999 63.4L 8.219999999999999 63.4L 18.18 63.4L 18.18 63.4L 18.18 63.4L 18.18 63.4L 18.18 63.4L 8.219999999999999 63.4"
                                                cy="66.2" cx="35.12" j="0" val="-3" barHeight="-17.8"
                                                barWidth="10.96"></path>
                                            <path id="SvgjsPath1619"
                                                d="M 35.62 63.4L 35.62 77.13333333333333Q 35.62 82.13333333333333 40.62 82.13333333333333L 40.58 82.13333333333333Q 45.58 82.13333333333333 45.58 77.13333333333333L 45.58 77.13333333333333L 45.58 63.4Q 45.58 58.4 40.58 58.4L 40.62 58.4Q 35.62 58.4 35.62 63.4z"
                                                fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 35.62 63.4L 35.62 77.13333333333333Q 35.62 82.13333333333333 40.62 82.13333333333333L 40.58 82.13333333333333Q 45.58 82.13333333333333 45.58 77.13333333333333L 45.58 77.13333333333333L 45.58 63.4Q 45.58 58.4 40.58 58.4L 40.62 58.4Q 35.62 58.4 35.62 63.4z"
                                                pathFrom="M 35.62 63.4L 35.62 63.4L 45.58 63.4L 45.58 63.4L 45.58 63.4L 45.58 63.4L 45.58 63.4L 35.62 63.4"
                                                cy="72.13333333333333" cx="62.519999999999996" j="1" val="-4"
                                                barHeight="-23.733333333333334" barWidth="10.96"></path>
                                            <path id="SvgjsPath1620"
                                                d="M 63.019999999999996 63.4L 63.019999999999996 71.2Q 63.019999999999996 76.2 68.02 76.2L 67.97999999999999 76.2Q 72.97999999999999 76.2 72.97999999999999 71.2L 72.97999999999999 71.2L 72.97999999999999 63.4Q 72.97999999999999 58.4 67.97999999999999 58.4L 68.02 58.4Q 63.019999999999996 58.4 63.019999999999996 63.4z"
                                                fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 63.019999999999996 63.4L 63.019999999999996 71.2Q 63.019999999999996 76.2 68.02 76.2L 67.97999999999999 76.2Q 72.97999999999999 76.2 72.97999999999999 71.2L 72.97999999999999 71.2L 72.97999999999999 63.4Q 72.97999999999999 58.4 67.97999999999999 58.4L 68.02 58.4Q 63.019999999999996 58.4 63.019999999999996 63.4z"
                                                pathFrom="M 63.019999999999996 63.4L 63.019999999999996 63.4L 72.97999999999999 63.4L 72.97999999999999 63.4L 72.97999999999999 63.4L 72.97999999999999 63.4L 72.97999999999999 63.4L 63.019999999999996 63.4"
                                                cy="66.2" cx="89.91999999999999" j="2" val="-3"
                                                barHeight="-17.8" barWidth="10.96"></path>
                                            <path id="SvgjsPath1621"
                                                d="M 90.41999999999999 63.4L 90.41999999999999 65.26666666666667Q 90.41999999999999 70.26666666666667 95.41999999999999 70.26666666666667L 95.38 70.26666666666667Q 100.38 70.26666666666667 100.38 65.26666666666667L 100.38 65.26666666666667L 100.38 63.4Q 100.38 58.4 95.38 58.4L 95.41999999999999 58.4Q 90.41999999999999 58.4 90.41999999999999 63.4z"
                                                fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 90.41999999999999 63.4L 90.41999999999999 65.26666666666667Q 90.41999999999999 70.26666666666667 95.41999999999999 70.26666666666667L 95.38 70.26666666666667Q 100.38 70.26666666666667 100.38 65.26666666666667L 100.38 65.26666666666667L 100.38 63.4Q 100.38 58.4 95.38 58.4L 95.41999999999999 58.4Q 90.41999999999999 58.4 90.41999999999999 63.4z"
                                                pathFrom="M 90.41999999999999 63.4L 90.41999999999999 63.4L 100.38 63.4L 100.38 63.4L 100.38 63.4L 100.38 63.4L 100.38 63.4L 90.41999999999999 63.4"
                                                cy="60.266666666666666" cx="117.32" j="3" val="-2"
                                                barHeight="-11.866666666666667" barWidth="10.96"></path>
                                            <path id="SvgjsPath1622"
                                                d="M 117.82 63.4L 117.82 71.2Q 117.82 76.2 122.82 76.2L 122.78 76.2Q 127.78 76.2 127.78 71.2L 127.78 71.2L 127.78 63.4Q 127.78 58.4 122.78 58.4L 122.82 58.4Q 117.82 58.4 117.82 63.4z"
                                                fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke="#ffffff"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="1"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMaskyyb277xh)"
                                                pathTo="M 117.82 63.4L 117.82 71.2Q 117.82 76.2 122.82 76.2L 122.78 76.2Q 127.78 76.2 127.78 71.2L 127.78 71.2L 127.78 63.4Q 127.78 58.4 122.78 58.4L 122.82 58.4Q 117.82 58.4 117.82 63.4z"
                                                pathFrom="M 117.82 63.4L 117.82 63.4L 127.78 63.4L 127.78 63.4L 127.78 63.4L 127.78 63.4L 127.78 63.4L 117.82 63.4"
                                                cy="66.2" cx="144.72" j="4" val="-3" barHeight="-17.8"
                                                barWidth="10.96"></path>
                                        </g>
                                        <g id="SvgjsG1610" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1617" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1644" x1="0" y1="0" x2="137"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1645" x1="0" y1="0" x2="137"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1646" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1647" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1648" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1632" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-18, 0)"></g>
                                <g id="SvgjsG1598" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 39px;"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                        <h4 class="mb-0">45.1k</h4>
                        <small class="text-success">+12.6%</small>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 168px; height: 149px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Profit -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="badge p-2 bg-label-danger mb-2 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
                    <h5 class="card-title mb-1 pt-2">Total Profit</h5>
                    <small class="text-muted">Last week</small>
                    <p class="mb-2 mt-1">1.28k</p>
                    <div class="pt-1">
                        <span class="badge bg-label-secondary">-12.2%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Sales -->
        <div class="col-xl-2 col-md-4 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="badge p-2 bg-label-info mb-2 rounded"><i class="ti ti-chart-bar ti-md"></i></div>
                    <h5 class="card-title mb-1 pt-2">Total Sales</h5>
                    <small class="text-muted">Last week</small>
                    <p class="mb-2 mt-1">$4,673</p>
                    <div class="pt-1">
                        <span class="badge bg-label-secondary">+25.2%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Growth -->
        <div class="col-xl-4 col-md-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="position: relative;">
                        <div class="d-flex flex-column">
                            <div class="card-title mb-auto">
                                <h5 class="mb-1 text-nowrap">Revenue Growth</h5>
                                <small>Weekly Report</small>
                            </div>
                            <div class="chart-statistics">
                                <h3 class="card-title mb-1">$4,673</h3>
                                <span class="badge bg-label-success">+15.2%</span>
                            </div>
                        </div>
                        <div id="revenueGrowth" style="min-height: 170px;">
                            <div id="apexcharts6hs4bwwm"
                                class="apexcharts-canvas apexcharts6hs4bwwm apexcharts-theme-light"
                                style="width: 173px; height: 170px;"><svg id="SvgjsSvg1649" width="173"
                                    height="170" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1651" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 10)">
                                        <defs id="SvgjsDefs1650">
                                            <linearGradient id="SvgjsLinearGradient1654" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1655" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1656" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1657" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMask6hs4bwwm">
                                                <rect id="SvgjsRect1659" width="177" height="135.157" x="-2" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask6hs4bwwm"></clipPath>
                                            <clipPath id="nonForecastMask6hs4bwwm"></clipPath>
                                            <clipPath id="gridRectMarkerMask6hs4bwwm">
                                                <rect id="SvgjsRect1660" width="177" height="139.157" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1658" width="0" height="135.157" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke-dasharray="3" fill="url(#SvgjsLinearGradient1654)"
                                            class="apexcharts-xcrosshairs" y2="135.157" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1679" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1680" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1682"
                                                    font-family="Public Sans" x="12.357142857142858" y="164.157"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1683">M</tspan>
                                                    <title>M</title>
                                                </text><text id="SvgjsText1685" font-family="Public Sans"
                                                    x="37.07142857142857" y="164.157" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1686">T</tspan>
                                                    <title>T</title>
                                                </text><text id="SvgjsText1688" font-family="Public Sans"
                                                    x="61.78571428571428" y="164.157" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1689">W</tspan>
                                                    <title>W</title>
                                                </text><text id="SvgjsText1691" font-family="Public Sans" x="86.5"
                                                    y="164.157" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1692">T</tspan>
                                                    <title>T</title>
                                                </text><text id="SvgjsText1694" font-family="Public Sans"
                                                    x="111.21428571428572" y="164.157" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1695">F</tspan>
                                                    <title>F</title>
                                                </text><text id="SvgjsText1697" font-family="Public Sans"
                                                    x="135.92857142857144" y="164.157" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1698">S</tspan>
                                                    <title>S</title>
                                                </text><text id="SvgjsText1700" font-family="Public Sans"
                                                    x="160.64285714285717" y="164.157" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1701">S</tspan>
                                                    <title>S</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1704" class="apexcharts-grid">
                                            <g id="SvgjsG1705" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1707" x1="0" y1="0" x2="173"
                                                    y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1708" x1="0" y1="27.0314" x2="173"
                                                    y2="27.0314" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1709" x1="0" y1="54.0628" x2="173"
                                                    y2="54.0628" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1710" x1="0" y1="81.0942" x2="173"
                                                    y2="81.0942" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1711" x1="0" y1="108.1256" x2="173"
                                                    y2="108.1256" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1712" x1="0" y1="135.157" x2="173"
                                                    y2="135.157" stroke="#e0e0e0" stroke-dasharray="0"
                                                    stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1706" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1714" x1="0" y1="135.157" x2="173"
                                                y2="135.157" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1713" x1="0" y1="1" x2="0"
                                                y2="135.157" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1661" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1662" class="apexcharts-series" rel="1"
                                                seriesName="seriesx1" data:realIndex="0">
                                                <path id="SvgjsPath1666"
                                                    d="M 6.178571428571429 129.157L 6.178571428571429 107.36775Q 6.178571428571429 101.36775 12.178571428571429 101.36775L 12.535714285714285 101.36775Q 18.535714285714285 101.36775 18.535714285714285 107.36775L 18.535714285714285 107.36775L 18.535714285714285 129.157Q 18.535714285714285 135.157 12.535714285714285 135.157L 12.178571428571429 135.157Q 6.178571428571429 135.157 6.178571428571429 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 6.178571428571429 129.157L 6.178571428571429 107.36775Q 6.178571428571429 101.36775 12.178571428571429 101.36775L 12.535714285714285 101.36775Q 18.535714285714285 101.36775 18.535714285714285 107.36775L 18.535714285714285 107.36775L 18.535714285714285 129.157Q 18.535714285714285 135.157 12.535714285714285 135.157L 12.178571428571429 135.157Q 6.178571428571429 135.157 6.178571428571429 129.157z"
                                                    pathFrom="M 6.178571428571429 129.157L 6.178571428571429 129.157L 18.535714285714285 129.157L 18.535714285714285 129.157L 18.535714285714285 129.157L 18.535714285714285 129.157L 18.535714285714285 129.157L 6.178571428571429 129.157"
                                                    cy="101.36775" cx="30.892857142857146" j="0" val="25"
                                                    barHeight="33.78925" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1668"
                                                    d="M 30.892857142857146 129.157L 30.892857142857146 87.0942Q 30.892857142857146 81.0942 36.892857142857146 81.0942L 37.25 81.0942Q 43.25 81.0942 43.25 87.0942L 43.25 87.0942L 43.25 129.157Q 43.25 135.157 37.25 135.157L 36.892857142857146 135.157Q 30.892857142857146 135.157 30.892857142857146 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 30.892857142857146 129.157L 30.892857142857146 87.0942Q 30.892857142857146 81.0942 36.892857142857146 81.0942L 37.25 81.0942Q 43.25 81.0942 43.25 87.0942L 43.25 87.0942L 43.25 129.157Q 43.25 135.157 37.25 135.157L 36.892857142857146 135.157Q 30.892857142857146 135.157 30.892857142857146 129.157z"
                                                    pathFrom="M 30.892857142857146 129.157L 30.892857142857146 129.157L 43.25 129.157L 43.25 129.157L 43.25 129.157L 43.25 129.157L 43.25 129.157L 30.892857142857146 129.157"
                                                    cy="81.0942" cx="55.60714285714286" j="1" val="40"
                                                    barHeight="54.06280000000001" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1670"
                                                    d="M 55.60714285714286 129.157L 55.60714285714286 66.82065Q 55.60714285714286 60.82065 61.60714285714286 60.82065L 61.96428571428572 60.82065Q 67.96428571428572 60.82065 67.96428571428572 66.82065L 67.96428571428572 66.82065L 67.96428571428572 129.157Q 67.96428571428572 135.157 61.96428571428572 135.157L 61.60714285714286 135.157Q 55.60714285714286 135.157 55.60714285714286 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 55.60714285714286 129.157L 55.60714285714286 66.82065Q 55.60714285714286 60.82065 61.60714285714286 60.82065L 61.96428571428572 60.82065Q 67.96428571428572 60.82065 67.96428571428572 66.82065L 67.96428571428572 66.82065L 67.96428571428572 129.157Q 67.96428571428572 135.157 61.96428571428572 135.157L 61.60714285714286 135.157Q 55.60714285714286 135.157 55.60714285714286 129.157z"
                                                    pathFrom="M 55.60714285714286 129.157L 55.60714285714286 129.157L 67.96428571428572 129.157L 67.96428571428572 129.157L 67.96428571428572 129.157L 67.96428571428572 129.157L 67.96428571428572 129.157L 55.60714285714286 129.157"
                                                    cy="60.82065" cx="80.32142857142858" j="2" val="55"
                                                    barHeight="74.33635000000001" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1672"
                                                    d="M 80.32142857142858 129.157L 80.32142857142858 46.5471Q 80.32142857142858 40.5471 86.32142857142858 40.5471L 86.67857142857144 40.5471Q 92.67857142857144 40.5471 92.67857142857144 46.5471L 92.67857142857144 46.5471L 92.67857142857144 129.157Q 92.67857142857144 135.157 86.67857142857144 135.157L 86.32142857142858 135.157Q 80.32142857142858 135.157 80.32142857142858 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 80.32142857142858 129.157L 80.32142857142858 46.5471Q 80.32142857142858 40.5471 86.32142857142858 40.5471L 86.67857142857144 40.5471Q 92.67857142857144 40.5471 92.67857142857144 46.5471L 92.67857142857144 46.5471L 92.67857142857144 129.157Q 92.67857142857144 135.157 86.67857142857144 135.157L 86.32142857142858 135.157Q 80.32142857142858 135.157 80.32142857142858 129.157z"
                                                    pathFrom="M 80.32142857142858 129.157L 80.32142857142858 129.157L 92.67857142857144 129.157L 92.67857142857144 129.157L 92.67857142857144 129.157L 92.67857142857144 129.157L 92.67857142857144 129.157L 80.32142857142858 129.157"
                                                    cy="40.5471" cx="105.0357142857143" j="3" val="70"
                                                    barHeight="94.60990000000001" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1674"
                                                    d="M 105.0357142857143 129.157L 105.0357142857143 26.27355Q 105.0357142857143 20.27355 111.0357142857143 20.27355L 111.39285714285717 20.27355Q 117.39285714285717 20.27355 117.39285714285717 26.27355L 117.39285714285717 26.27355L 117.39285714285717 129.157Q 117.39285714285717 135.157 111.39285714285717 135.157L 111.0357142857143 135.157Q 105.0357142857143 135.157 105.0357142857143 129.157z"
                                                    fill="rgba(40,199,111,0.85)" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 105.0357142857143 129.157L 105.0357142857143 26.27355Q 105.0357142857143 20.27355 111.0357142857143 20.27355L 111.39285714285717 20.27355Q 117.39285714285717 20.27355 117.39285714285717 26.27355L 117.39285714285717 26.27355L 117.39285714285717 129.157Q 117.39285714285717 135.157 111.39285714285717 135.157L 111.0357142857143 135.157Q 105.0357142857143 135.157 105.0357142857143 129.157z"
                                                    pathFrom="M 105.0357142857143 129.157L 105.0357142857143 129.157L 117.39285714285717 129.157L 117.39285714285717 129.157L 117.39285714285717 129.157L 117.39285714285717 129.157L 117.39285714285717 129.157L 105.0357142857143 129.157"
                                                    cy="20.27355" cx="129.75000000000003" j="4" val="85"
                                                    barHeight="114.88345000000001" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1676"
                                                    d="M 129.75000000000003 129.157L 129.75000000000003 46.5471Q 129.75000000000003 40.5471 135.75000000000003 40.5471L 136.1071428571429 40.5471Q 142.1071428571429 40.5471 142.1071428571429 46.5471L 142.1071428571429 46.5471L 142.1071428571429 129.157Q 142.1071428571429 135.157 136.1071428571429 135.157L 135.75000000000003 135.157Q 129.75000000000003 135.157 129.75000000000003 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 129.75000000000003 129.157L 129.75000000000003 46.5471Q 129.75000000000003 40.5471 135.75000000000003 40.5471L 136.1071428571429 40.5471Q 142.1071428571429 40.5471 142.1071428571429 46.5471L 142.1071428571429 46.5471L 142.1071428571429 129.157Q 142.1071428571429 135.157 136.1071428571429 135.157L 135.75000000000003 135.157Q 129.75000000000003 135.157 129.75000000000003 129.157z"
                                                    pathFrom="M 129.75000000000003 129.157L 129.75000000000003 129.157L 142.1071428571429 129.157L 142.1071428571429 129.157L 142.1071428571429 129.157L 142.1071428571429 129.157L 142.1071428571429 129.157L 129.75000000000003 129.157"
                                                    cy="40.5471" cx="154.46428571428575" j="5" val="70"
                                                    barHeight="94.60990000000001" barWidth="12.357142857142858"></path>
                                                <path id="SvgjsPath1678"
                                                    d="M 154.46428571428575 129.157L 154.46428571428575 66.82065Q 154.46428571428575 60.82065 160.46428571428575 60.82065L 160.8214285714286 60.82065Q 166.8214285714286 60.82065 166.8214285714286 66.82065L 166.8214285714286 66.82065L 166.8214285714286 129.157Q 166.8214285714286 135.157 160.8214285714286 135.157L 160.46428571428575 135.157Q 154.46428571428575 135.157 154.46428571428575 129.157z"
                                                    fill="#28c76f29" fill-opacity="1" stroke-opacity="1"
                                                    stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                    class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMask6hs4bwwm)"
                                                    pathTo="M 154.46428571428575 129.157L 154.46428571428575 66.82065Q 154.46428571428575 60.82065 160.46428571428575 60.82065L 160.8214285714286 60.82065Q 166.8214285714286 60.82065 166.8214285714286 66.82065L 166.8214285714286 66.82065L 166.8214285714286 129.157Q 166.8214285714286 135.157 160.8214285714286 135.157L 160.46428571428575 135.157Q 154.46428571428575 135.157 154.46428571428575 129.157z"
                                                    pathFrom="M 154.46428571428575 129.157L 154.46428571428575 129.157L 166.8214285714286 129.157L 166.8214285714286 129.157L 166.8214285714286 129.157L 166.8214285714286 129.157L 166.8214285714286 129.157L 154.46428571428575 129.157"
                                                    cy="60.82065" cx="179.17857142857147" j="6" val="55"
                                                    barHeight="74.33635000000001" barWidth="12.357142857142858"></path>
                                                <g id="SvgjsG1664" class="apexcharts-bar-goals-markers"
                                                    style="pointer-events: none">
                                                    <g id="SvgjsG1665" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1667" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1669" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1671" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1673" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1675" className="apexcharts-bar-goals-groups"></g>
                                                    <g id="SvgjsG1677" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1663" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1715" x1="0" y1="0" x2="173"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1716" x1="0" y1="0" x2="173"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1717" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1718" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1719" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1702" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-8, 0)">
                                        <g id="SvgjsG1703" class="apexcharts-yaxis-texts-g"></g>
                                    </g>
                                    <g id="SvgjsG1652" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 85px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 312px; height: 171px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earning Reports Tabs-->
        <div class="col-12 col-xl-8 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Earning Reports</h5>
                        <small class="text-muted">Yearly Earnings Overview</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReportsTabsId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs widget-nav-tabs pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);"
                                class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-orders-id"
                                aria-controls="navs-orders-id" aria-selected="true">
                                <div class="badge bg-label-secondary rounded p-2"><i
                                        class="ti ti-shopping-cart ti-sm"></i></div>
                                <h6 class="tab-widget-title mb-0 mt-2">Orders</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);"
                                class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-sales-id"
                                aria-controls="navs-sales-id" aria-selected="false" tabindex="-1">
                                <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-chart-bar ti-sm"></i>
                                </div>
                                <h6 class="tab-widget-title mb-0 mt-2"> Sales</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);"
                                class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-profit-id"
                                aria-controls="navs-profit-id" aria-selected="false" tabindex="-1">
                                <div class="badge bg-label-secondary rounded p-2"><i
                                        class="ti ti-currency-dollar ti-sm"></i></div>
                                <h6 class="tab-widget-title mb-0 mt-2">Profit</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);"
                                class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                                role="tab" data-bs-toggle="tab" data-bs-target="#navs-income-id"
                                aria-controls="navs-income-id" aria-selected="false" tabindex="-1">
                                <div class="badge bg-label-secondary rounded p-2"><i
                                        class="ti ti-chart-pie-2 ti-sm"></i></div>
                                <h6 class="tab-widget-title mb-0 mt-2">Income</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="javascript:void(0);"
                                class="nav-link btn d-flex align-items-center justify-content-center disabled"
                                role="tab" data-bs-toggle="tab" aria-selected="false" tabindex="-1">
                                <div class="badge bg-label-secondary rounded p-2"><i class="ti ti-plus ti-sm"></i></div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content p-0 ms-0 ms-sm-2">
                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel"
                            style="position: relative;">
                            <div id="earningReportsTabsOrders" style="min-height: 258px;">
                                <div id="apexcharts2puzaeyz"
                                    class="apexcharts-canvas apexcharts2puzaeyz apexcharts-theme-light"
                                    style="width: 689px; height: 258px;"><svg id="SvgjsSvg1720" width="689"
                                        height="258" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1722" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(30.116668701171875, 30)">
                                            <defs id="SvgjsDefs1721">
                                                <linearGradient id="SvgjsLinearGradient1726" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1727" stop-opacity="0.4"
                                                        stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                    <stop id="SvgjsStop1728" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1729" stop-opacity="0.5"
                                                        stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                </linearGradient>
                                                <clipPath id="gridRectMask2puzaeyz">
                                                    <rect id="SvgjsRect1731" width="672.8833312988281"
                                                        height="191.157" x="-2" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask2puzaeyz"></clipPath>
                                                <clipPath id="nonForecastMask2puzaeyz"></clipPath>
                                                <clipPath id="gridRectMarkerMask2puzaeyz">
                                                    <rect id="SvgjsRect1732" width="672.8833312988281"
                                                        height="195.157" x="-2" y="-2" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                            </defs>
                                            <rect id="SvgjsRect1730" width="0" height="191.157" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke-dasharray="3" fill="url(#SvgjsLinearGradient1726)"
                                                class="apexcharts-xcrosshairs" y2="191.157" filter="none"
                                                fill-opacity="0.9"></rect>
                                            <g id="SvgjsG1791" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1792" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1794"
                                                        font-family="Public Sans" x="37.16018507215712" y="220.157"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a5a3ae"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1795">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1797" font-family="Public Sans"
                                                        x="111.48055521647136" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1798">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1800" font-family="Public Sans"
                                                        x="185.80092536078558" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1801">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1803" font-family="Public Sans"
                                                        x="260.12129550509985" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1804">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1806" font-family="Public Sans"
                                                        x="334.44166564941406" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1807">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1809" font-family="Public Sans"
                                                        x="408.7620357937283" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1810">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1812" font-family="Public Sans"
                                                        x="483.0824059380425" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1813">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text><text id="SvgjsText1815" font-family="Public Sans"
                                                        x="557.4027760823567" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1816">Aug</tspan>
                                                        <title>Aug</title>
                                                    </text><text id="SvgjsText1818" font-family="Public Sans"
                                                        x="631.7231462266709" y="220.157" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a5a3ae" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Public Sans;">
                                                        <tspan id="SvgjsTspan1819">Sep</tspan>
                                                        <title>Sep</title>
                                                    </text></g>
                                                <line id="SvgjsLine1820" x1="0" y1="192.157"
                                                    x2="668.8833312988281" y2="192.157" stroke="#dbdade"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt">
                                                </line>
                                            </g>
                                            <g id="SvgjsG1835" class="apexcharts-grid">
                                                <g id="SvgjsG1836" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1838" x1="0" y1="0"
                                                        x2="668.8833312988281" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1839" x1="0" y1="38.2314"
                                                        x2="668.8833312988281" y2="38.2314" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1840" x1="0" y1="76.4628"
                                                        x2="668.8833312988281" y2="76.4628" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1841" x1="0" y1="114.6942"
                                                        x2="668.8833312988281" y2="114.6942" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1842" x1="0" y1="152.9256"
                                                        x2="668.8833312988281" y2="152.9256" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1843" x1="0" y1="191.157"
                                                        x2="668.8833312988281" y2="191.157" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1837" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1845" x1="0" y1="191.157"
                                                    x2="668.8833312988281" y2="191.157" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1844" x1="0" y1="1"
                                                    x2="0" y2="191.157" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1733" class="apexcharts-bar-series apexcharts-plot-series">
                                                <g id="SvgjsG1734" class="apexcharts-series" rel="1"
                                                    seriesName="seriesx1" data:realIndex="0">
                                                    <path id="SvgjsPath1738"
                                                        d="M 21.9245091925727 191.157L 21.9245091925727 91.10907999999999Q 21.9245091925727 84.10907999999999 28.9245091925727 84.10907999999999L 45.39586095174154 84.10907999999999Q 52.39586095174154 84.10907999999999 52.39586095174154 91.10907999999999L 52.39586095174154 91.10907999999999L 52.39586095174154 191.157Q 52.39586095174154 191.157 52.39586095174154 191.157L 21.9245091925727 191.157Q 21.9245091925727 191.157 21.9245091925727 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 21.9245091925727 191.157L 21.9245091925727 91.10907999999999Q 21.9245091925727 84.10907999999999 28.9245091925727 84.10907999999999L 45.39586095174154 84.10907999999999Q 52.39586095174154 84.10907999999999 52.39586095174154 91.10907999999999L 52.39586095174154 91.10907999999999L 52.39586095174154 191.157Q 52.39586095174154 191.157 52.39586095174154 191.157L 21.9245091925727 191.157Q 21.9245091925727 191.157 21.9245091925727 191.157z"
                                                        pathFrom="M 21.9245091925727 191.157L 21.9245091925727 191.157L 52.39586095174154 191.157L 52.39586095174154 191.157L 52.39586095174154 191.157L 52.39586095174154 191.157L 52.39586095174154 191.157L 21.9245091925727 191.157"
                                                        cy="84.10907999999999" cx="96.24487933688694" j="0"
                                                        val="28" barHeight="107.04792000000002"
                                                        barWidth="30.471351759168837"></path>
                                                    <path id="SvgjsPath1744"
                                                        d="M 96.24487933688694 191.157L 96.24487933688694 159.9256Q 96.24487933688694 152.9256 103.24487933688694 152.9256L 119.71623109605578 152.9256Q 126.71623109605578 152.9256 126.71623109605578 159.9256L 126.71623109605578 159.9256L 126.71623109605578 191.157Q 126.71623109605578 191.157 126.71623109605578 191.157L 96.24487933688694 191.157Q 96.24487933688694 191.157 96.24487933688694 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 96.24487933688694 191.157L 96.24487933688694 159.9256Q 96.24487933688694 152.9256 103.24487933688694 152.9256L 119.71623109605578 152.9256Q 126.71623109605578 152.9256 126.71623109605578 159.9256L 126.71623109605578 159.9256L 126.71623109605578 191.157Q 126.71623109605578 191.157 126.71623109605578 191.157L 96.24487933688694 191.157Q 96.24487933688694 191.157 96.24487933688694 191.157z"
                                                        pathFrom="M 96.24487933688694 191.157L 96.24487933688694 191.157L 126.71623109605578 191.157L 126.71623109605578 191.157L 126.71623109605578 191.157L 126.71623109605578 191.157L 126.71623109605578 191.157L 96.24487933688694 191.157"
                                                        cy="152.9256" cx="170.5652494812012" j="1" val="10"
                                                        barHeight="38.23140000000001" barWidth="30.471351759168837">
                                                    </path>
                                                    <path id="SvgjsPath1750"
                                                        d="M 170.5652494812012 191.157L 170.5652494812012 26.115699999999975Q 170.5652494812012 19.115699999999975 177.5652494812012 19.115699999999975L 194.03660124037003 19.115699999999975Q 201.03660124037003 19.115699999999975 201.03660124037003 26.115699999999975L 201.03660124037003 26.115699999999975L 201.03660124037003 191.157Q 201.03660124037003 191.157 201.03660124037003 191.157L 170.5652494812012 191.157Q 170.5652494812012 191.157 170.5652494812012 191.157z"
                                                        fill="rgba(115,103,240,0.85)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="round" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-bar-area"
                                                        index="0" clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 170.5652494812012 191.157L 170.5652494812012 26.115699999999975Q 170.5652494812012 19.115699999999975 177.5652494812012 19.115699999999975L 194.03660124037003 19.115699999999975Q 201.03660124037003 19.115699999999975 201.03660124037003 26.115699999999975L 201.03660124037003 26.115699999999975L 201.03660124037003 191.157Q 201.03660124037003 191.157 201.03660124037003 191.157L 170.5652494812012 191.157Q 170.5652494812012 191.157 170.5652494812012 191.157z"
                                                        pathFrom="M 170.5652494812012 191.157L 170.5652494812012 191.157L 201.03660124037003 191.157L 201.03660124037003 191.157L 201.03660124037003 191.157L 201.03660124037003 191.157L 201.03660124037003 191.157L 170.5652494812012 191.157"
                                                        cy="19.115699999999975" cx="244.88561962551543" j="2"
                                                        val="45" barHeight="172.04130000000004"
                                                        barWidth="30.471351759168837"></path>
                                                    <path id="SvgjsPath1756"
                                                        d="M 244.88561962551543 191.157L 244.88561962551543 52.87768Q 244.88561962551543 45.87768 251.88561962551543 45.87768L 268.35697138468424 45.87768Q 275.35697138468424 45.87768 275.35697138468424 52.87768L 275.35697138468424 52.87768L 275.35697138468424 191.157Q 275.35697138468424 191.157 275.35697138468424 191.157L 244.88561962551543 191.157Q 244.88561962551543 191.157 244.88561962551543 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 244.88561962551543 191.157L 244.88561962551543 52.87768Q 244.88561962551543 45.87768 251.88561962551543 45.87768L 268.35697138468424 45.87768Q 275.35697138468424 45.87768 275.35697138468424 52.87768L 275.35697138468424 52.87768L 275.35697138468424 191.157Q 275.35697138468424 191.157 275.35697138468424 191.157L 244.88561962551543 191.157Q 244.88561962551543 191.157 244.88561962551543 191.157z"
                                                        pathFrom="M 244.88561962551543 191.157L 244.88561962551543 191.157L 275.35697138468424 191.157L 275.35697138468424 191.157L 275.35697138468424 191.157L 275.35697138468424 191.157L 275.35697138468424 191.157L 244.88561962551543 191.157"
                                                        cy="45.87768" cx="319.20598976982967" j="3" val="38"
                                                        barHeight="145.27932" barWidth="30.471351759168837"></path>
                                                    <path id="SvgjsPath1762"
                                                        d="M 319.20598976982967 191.157L 319.20598976982967 140.8099Q 319.20598976982967 133.8099 326.20598976982967 133.8099L 342.6773415289985 133.8099Q 349.6773415289985 133.8099 349.6773415289985 140.8099L 349.6773415289985 140.8099L 349.6773415289985 191.157Q 349.6773415289985 191.157 349.6773415289985 191.157L 319.20598976982967 191.157Q 319.20598976982967 191.157 319.20598976982967 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 319.20598976982967 191.157L 319.20598976982967 140.8099Q 319.20598976982967 133.8099 326.20598976982967 133.8099L 342.6773415289985 133.8099Q 349.6773415289985 133.8099 349.6773415289985 140.8099L 349.6773415289985 140.8099L 349.6773415289985 191.157Q 349.6773415289985 191.157 349.6773415289985 191.157L 319.20598976982967 191.157Q 319.20598976982967 191.157 319.20598976982967 191.157z"
                                                        pathFrom="M 319.20598976982967 191.157L 319.20598976982967 191.157L 349.6773415289985 191.157L 349.6773415289985 191.157L 349.6773415289985 191.157L 349.6773415289985 191.157L 349.6773415289985 191.157L 319.20598976982967 191.157"
                                                        cy="133.8099" cx="393.5263599141439" j="4" val="15"
                                                        barHeight="57.347100000000005" barWidth="30.471351759168837">
                                                    </path>
                                                    <path id="SvgjsPath1768"
                                                        d="M 393.5263599141439 191.157L 393.5263599141439 83.4628Q 393.5263599141439 76.4628 400.5263599141439 76.4628L 416.9977116733127 76.4628Q 423.9977116733127 76.4628 423.9977116733127 83.4628L 423.9977116733127 83.4628L 423.9977116733127 191.157Q 423.9977116733127 191.157 423.9977116733127 191.157L 393.5263599141439 191.157Q 393.5263599141439 191.157 393.5263599141439 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 393.5263599141439 191.157L 393.5263599141439 83.4628Q 393.5263599141439 76.4628 400.5263599141439 76.4628L 416.9977116733127 76.4628Q 423.9977116733127 76.4628 423.9977116733127 83.4628L 423.9977116733127 83.4628L 423.9977116733127 191.157Q 423.9977116733127 191.157 423.9977116733127 191.157L 393.5263599141439 191.157Q 393.5263599141439 191.157 393.5263599141439 191.157z"
                                                        pathFrom="M 393.5263599141439 191.157L 393.5263599141439 191.157L 423.9977116733127 191.157L 423.9977116733127 191.157L 423.9977116733127 191.157L 423.9977116733127 191.157L 423.9977116733127 191.157L 393.5263599141439 191.157"
                                                        cy="76.4628" cx="467.8467300584581" j="5" val="30"
                                                        barHeight="114.69420000000001" barWidth="30.471351759168837">
                                                    </path>
                                                    <path id="SvgjsPath1774"
                                                        d="M 467.8467300584581 191.157L 467.8467300584581 64.34709999999998Q 467.8467300584581 57.34709999999998 474.8467300584581 57.34709999999998L 491.31808181762693 57.34709999999998Q 498.31808181762693 57.34709999999998 498.31808181762693 64.34709999999998L 498.31808181762693 64.34709999999998L 498.31808181762693 191.157Q 498.31808181762693 191.157 498.31808181762693 191.157L 467.8467300584581 191.157Q 467.8467300584581 191.157 467.8467300584581 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 467.8467300584581 191.157L 467.8467300584581 64.34709999999998Q 467.8467300584581 57.34709999999998 474.8467300584581 57.34709999999998L 491.31808181762693 57.34709999999998Q 498.31808181762693 57.34709999999998 498.31808181762693 64.34709999999998L 498.31808181762693 64.34709999999998L 498.31808181762693 191.157Q 498.31808181762693 191.157 498.31808181762693 191.157L 467.8467300584581 191.157Q 467.8467300584581 191.157 467.8467300584581 191.157z"
                                                        pathFrom="M 467.8467300584581 191.157L 467.8467300584581 191.157L 498.31808181762693 191.157L 498.31808181762693 191.157L 498.31808181762693 191.157L 498.31808181762693 191.157L 498.31808181762693 191.157L 467.8467300584581 191.157"
                                                        cy="57.34709999999998" cx="542.1671002027723" j="6"
                                                        val="35" barHeight="133.80990000000003"
                                                        barWidth="30.471351759168837"></path>
                                                    <path id="SvgjsPath1780"
                                                        d="M 542.1671002027723 191.157L 542.1671002027723 83.4628Q 542.1671002027723 76.4628 549.1671002027723 76.4628L 565.6384519619411 76.4628Q 572.6384519619411 76.4628 572.6384519619411 83.4628L 572.6384519619411 83.4628L 572.6384519619411 191.157Q 572.6384519619411 191.157 572.6384519619411 191.157L 542.1671002027723 191.157Q 542.1671002027723 191.157 542.1671002027723 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 542.1671002027723 191.157L 542.1671002027723 83.4628Q 542.1671002027723 76.4628 549.1671002027723 76.4628L 565.6384519619411 76.4628Q 572.6384519619411 76.4628 572.6384519619411 83.4628L 572.6384519619411 83.4628L 572.6384519619411 191.157Q 572.6384519619411 191.157 572.6384519619411 191.157L 542.1671002027723 191.157Q 542.1671002027723 191.157 542.1671002027723 191.157z"
                                                        pathFrom="M 542.1671002027723 191.157L 542.1671002027723 191.157L 572.6384519619411 191.157L 572.6384519619411 191.157L 572.6384519619411 191.157L 572.6384519619411 191.157L 572.6384519619411 191.157L 542.1671002027723 191.157"
                                                        cy="76.4628" cx="616.4874703470865" j="7" val="30"
                                                        barHeight="114.69420000000001" barWidth="30.471351759168837">
                                                    </path>
                                                    <path id="SvgjsPath1786"
                                                        d="M 616.4874703470865 191.157L 616.4874703470865 167.57188000000002Q 616.4874703470865 160.57188000000002 623.4874703470865 160.57188000000002L 639.9588221062553 160.57188000000002Q 646.9588221062553 160.57188000000002 646.9588221062553 167.57188000000002L 646.9588221062553 167.57188000000002L 646.9588221062553 191.157Q 646.9588221062553 191.157 646.9588221062553 191.157L 616.4874703470865 191.157Q 616.4874703470865 191.157 616.4874703470865 191.157z"
                                                        fill="#7367f029" fill-opacity="1" stroke-opacity="1"
                                                        stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                        class="apexcharts-bar-area" index="0"
                                                        clip-path="url(#gridRectMask2puzaeyz)"
                                                        pathTo="M 616.4874703470865 191.157L 616.4874703470865 167.57188000000002Q 616.4874703470865 160.57188000000002 623.4874703470865 160.57188000000002L 639.9588221062553 160.57188000000002Q 646.9588221062553 160.57188000000002 646.9588221062553 167.57188000000002L 646.9588221062553 167.57188000000002L 646.9588221062553 191.157Q 646.9588221062553 191.157 646.9588221062553 191.157L 616.4874703470865 191.157Q 616.4874703470865 191.157 616.4874703470865 191.157z"
                                                        pathFrom="M 616.4874703470865 191.157L 616.4874703470865 191.157L 646.9588221062553 191.157L 646.9588221062553 191.157L 646.9588221062553 191.157L 646.9588221062553 191.157L 646.9588221062553 191.157L 616.4874703470865 191.157"
                                                        cy="160.57188000000002" cx="690.8078404914007" j="8"
                                                        val="8" barHeight="30.585120000000003"
                                                        barWidth="30.471351759168837"></path>
                                                    <g id="SvgjsG1736" class="apexcharts-bar-goals-markers"
                                                        style="pointer-events: none">
                                                        <g id="SvgjsG1737" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1743" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1749" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1755" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1761" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1767" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1773" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1779" className="apexcharts-bar-goals-groups"></g>
                                                        <g id="SvgjsG1785" className="apexcharts-bar-goals-groups"></g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1735" class="apexcharts-datalabels" data:realIndex="0">
                                                    <g id="SvgjsG1740" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1742"
                                                            font-family="Public Sans" x="37.16018507215712"
                                                            y="79.60907999999999" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="15px"
                                                            font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="37.16018507215712"
                                                            cy="79.60907999999999">28k</text></g>
                                                    <g id="SvgjsG1746" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1748"
                                                            font-family="Public Sans" x="111.48055521647137" y="148.4256"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="111.48055521647137"
                                                            cy="148.4256">10k</text></g>
                                                    <g id="SvgjsG1752" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1754"
                                                            font-family="Public Sans" x="185.8009253607856"
                                                            y="14.615699999999975" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="15px"
                                                            font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="185.8009253607856"
                                                            cy="14.615699999999975">45k</text></g>
                                                    <g id="SvgjsG1758" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1760"
                                                            font-family="Public Sans" x="260.12129550509985" y="41.37768"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="260.12129550509985"
                                                            cy="41.37768">38k</text></g>
                                                    <g id="SvgjsG1764" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1766"
                                                            font-family="Public Sans" x="334.44166564941406" y="129.3099"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="334.44166564941406"
                                                            cy="129.3099">15k</text></g>
                                                    <g id="SvgjsG1770" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1772"
                                                            font-family="Public Sans" x="408.7620357937283" y="71.9628"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="408.7620357937283"
                                                            cy="71.9628">30k</text></g>
                                                    <g id="SvgjsG1776" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1778"
                                                            font-family="Public Sans" x="483.0824059380425"
                                                            y="52.84709999999998" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="15px"
                                                            font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="483.0824059380425"
                                                            cy="52.84709999999998">35k</text></g>
                                                    <g id="SvgjsG1782" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1784"
                                                            font-family="Public Sans" x="557.4027760823567" y="71.9628"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="557.4027760823567"
                                                            cy="71.9628">30k</text></g>
                                                    <g id="SvgjsG1788" class="apexcharts-data-labels"
                                                        transform="rotate(0)"><text id="SvgjsText1790"
                                                            font-family="Public Sans" x="631.7231462266709"
                                                            y="156.07188000000002" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="15px"
                                                            font-weight="500" fill="#6f6b7d"
                                                            class="apexcharts-datalabel"
                                                            style="font-family: Public Sans;" cx="631.7231462266709"
                                                            cy="156.07188000000002">8k</text></g>
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1846" x1="0" y1="0"
                                                x2="668.8833312988281" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1847" x1="0" y1="0"
                                                x2="668.8833312988281" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1848" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1849" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1850" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <g id="SvgjsG1821" class="apexcharts-yaxis" rel="0"
                                            transform="translate(7.116668701171875, 0)">
                                            <g id="SvgjsG1822" class="apexcharts-yaxis-texts-g"><text
                                                    id="SvgjsText1823" font-family="Public Sans" x="20" y="31.5"
                                                    text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                    font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1824">50k</tspan>
                                                    <title>50k</title>
                                                </text><text id="SvgjsText1825" font-family="Public Sans" x="20"
                                                    y="69.73140000000001" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1826">40k</tspan>
                                                    <title>40k</title>
                                                </text><text id="SvgjsText1827" font-family="Public Sans" x="20"
                                                    y="107.96280000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1828">30k</tspan>
                                                    <title>30k</title>
                                                </text><text id="SvgjsText1829" font-family="Public Sans" x="20"
                                                    y="146.19420000000002" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1830">20k</tspan>
                                                    <title>20k</title>
                                                </text><text id="SvgjsText1831" font-family="Public Sans" x="20"
                                                    y="184.42560000000003" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1832">10k</tspan>
                                                    <title>10k</title>
                                                </text><text id="SvgjsText1833" font-family="Public Sans" x="20"
                                                    y="222.65700000000004" text-anchor="end" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a5a3ae"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Public Sans;">
                                                    <tspan id="SvgjsTspan1834">0k</tspan>
                                                    <title>0k</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1723" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 129px;"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 690px; height: 259px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel" style="position: relative;">
                            <div id="earningReportsTabsSales" style="min-height: 258px;">
                                <div id="apexchartsdrube17ql" class="apexcharts-canvas apexchartsdrube17ql"
                                    style="width: 0px; height: 258px;"><svg id="SvgjsSvg1851" width="0"
                                        height="258" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1854" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG1853" class="apexcharts-inner apexcharts-graphical">
                                            <defs id="SvgjsDefs1852"></defs>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 1px; height: 1px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel" style="position: relative;">
                            <div id="earningReportsTabsProfit" style="min-height: 258px;">
                                <div id="apexcharts68x3iwvz" class="apexcharts-canvas apexcharts68x3iwvz"
                                    style="width: 0px; height: 258px;"><svg id="SvgjsSvg1855" width="0"
                                        height="258" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1858" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG1857" class="apexcharts-inner apexcharts-graphical">
                                            <defs id="SvgjsDefs1856"></defs>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 1px; height: 1px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-income-id" role="tabpanel" style="position: relative;">
                            <div id="earningReportsTabsIncome" style="min-height: 258px;">
                                <div id="apexchartsds00jdut" class="apexcharts-canvas apexchartsds00jdut"
                                    style="width: 0px; height: 258px;"><svg id="SvgjsSvg1859" width="0"
                                        height="258" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1862" class="apexcharts-annotations"></g>
                                        <g id="SvgjsG1861" class="apexcharts-inner apexcharts-graphical">
                                            <defs id="SvgjsDefs1860"></defs>
                                        </g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 1px; height: 1px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sales last 6 months -->
        <div class="col-md-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Sales</h5>
                        <small class="text-muted">Last 6 Months</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesLastMonthMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesLastMonthMenu">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="position: relative;">
                    <div id="salesLastMonth" style="min-height: 355px;">
                        <div id="apexchartsr9renx14" class="apexcharts-canvas apexchartsr9renx14 apexcharts-theme-light"
                            style="width: 311px; height: 340px;"><svg id="SvgjsSvg1865" width="311"
                                height="340" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="311" height="340">
                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                        style="inset: auto 0px 1px; position: absolute; max-height: 170px;">
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="1"
                                            seriesname="Sales" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(115, 103, 240) !important; color: rgb(115, 103, 240); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="1" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(111, 107, 125); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                rel="1" i="0" data:default-text="Sales"
                                                data:collapsed="false">Sales</span></div>
                                        <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="2"
                                            seriesname="Visits" data:collapsed="false"><span
                                                class="apexcharts-legend-marker"
                                                style="background: rgb(0, 207, 232) !important; color: rgb(0, 207, 232); height: 10px; width: 10px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                rel="2" data:collapsed="false"></span><span
                                                class="apexcharts-legend-text"
                                                style="color: rgb(111, 107, 125); font-size: 13px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                rel="2" i="1" data:default-text="Visits"
                                                data:collapsed="false">Visits</span></div>
                                    </div>
                                    <style type="text/css">
                                        .apexcharts-legend {
                                            display: flex;
                                            overflow: auto;
                                            padding: 0 10px;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom,
                                        .apexcharts-legend.apx-legend-position-top {
                                            flex-wrap: wrap
                                        }

                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            flex-direction: column;
                                            bottom: 0;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                        .apexcharts-legend.apx-legend-position-right,
                                        .apexcharts-legend.apx-legend-position-left {
                                            justify-content: flex-start;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                            justify-content: center;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                            justify-content: flex-end;
                                        }

                                        .apexcharts-legend-series {
                                            cursor: pointer;
                                            line-height: normal;
                                        }

                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                            display: flex;
                                            align-items: center;
                                        }

                                        .apexcharts-legend-text {
                                            position: relative;
                                            font-size: 14px;
                                        }

                                        .apexcharts-legend-text *,
                                        .apexcharts-legend-marker * {
                                            pointer-events: none;
                                        }

                                        .apexcharts-legend-marker {
                                            position: relative;
                                            display: inline-block;
                                            cursor: pointer;
                                            margin-right: 3px;
                                            border-style: solid;
                                        }

                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                            display: inline-block;
                                        }

                                        .apexcharts-legend-series.apexcharts-no-click {
                                            cursor: auto;
                                        }

                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                            display: none !important;
                                        }

                                        .apexcharts-inactive-legend {
                                            opacity: 0.45;
                                        }
                                    </style>
                                </foreignObject>
                                <g id="SvgjsG1867" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(12, 30)">
                                    <defs id="SvgjsDefs1866">
                                        <clipPath id="gridRectMaskr9renx14">
                                            <rect id="SvgjsRect1870" width="281.0166664123535" height="257" x="-2"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskr9renx14"></clipPath>
                                        <clipPath id="nonForecastMaskr9renx14"></clipPath>
                                        <clipPath id="gridRectMarkerMaskr9renx14">
                                            <rect id="SvgjsRect1871" width="281.0166664123535" height="261" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <g id="SvgjsG1926" class="apexcharts-grid">
                                        <g id="SvgjsG1927" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1929" x1="0" y1="0"
                                                x2="277.0166664123535" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1930" x1="0" y1="64.25"
                                                x2="277.0166664123535" y2="64.25" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1931" x1="0" y1="128.5"
                                                x2="277.0166664123535" y2="128.5" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1932" x1="0" y1="192.75"
                                                x2="277.0166664123535" y2="192.75" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1933" x1="0" y1="257"
                                                x2="277.0166664123535" y2="257" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1928" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1935" x1="0" y1="257"
                                            x2="277.0166664123535" y2="257" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1934" x1="0" y1="1" x2="0"
                                            y2="257" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1872" class="apexcharts-radar-series apexcharts-plot-series"
                                        transform="translate(138.50833320617676, 128.5)">
                                        <polygon id="SvgjsPolygon1914"
                                            points="0,-115.36031704857236 99.90496515269074,-57.68015852428619 99.90496515269075,57.68015852428615 1.4127564302215797e-14,115.36031704857236 -99.9049651526907,57.68015852428623 -99.90496515269078,-57.68015852428609 "
                                            fill="none" stroke="#dbdade" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon1915"
                                            points="0,-86.52023778642926 74.92872386451805,-43.26011889321464 74.92872386451806,43.26011889321461 1.0595673226661848e-14,86.52023778642926 -74.92872386451802,43.26011889321467 -74.92872386451808,-43.26011889321457 "
                                            fill="none" stroke="#dbdade" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon1916"
                                            points="0,-57.68015852428618 49.95248257634537,-28.840079262143096 49.952482576345375,28.840079262143075 7.0637821511078985e-15,57.68015852428618 -49.95248257634535,28.840079262143114 -49.95248257634539,-28.840079262143046 "
                                            fill="none" stroke="#dbdade" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon1917"
                                            points="0,-28.84007926214309 24.976241288172684,-14.420039631071548 24.976241288172687,14.420039631071537 3.5318910755539493e-15,28.84007926214309 -24.976241288172677,14.420039631071557 -24.976241288172695,-14.420039631071523 "
                                            fill="none" stroke="#dbdade" stroke-width="1"></polygon>
                                        <polygon id="SvgjsPolygon1918" points="0,0 0,0 0,0 0,0 0,0 0,0 "
                                            fill="none" stroke="#dbdade" stroke-width="1"></polygon>
                                        <line id="SvgjsLine1908" x1="0" y1="-115.36031704857236"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1909" x1="99.90496515269074" y1="-57.68015852428619"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1910" x1="99.90496515269075" y1="57.68015852428615"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1911" x1="1.4127564302215797e-14" y1="115.36031704857236"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1912" x1="-99.9049651526907" y1="57.68015852428623"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1913" x1="-99.90496515269078" y1="-57.68015852428609"
                                            x2="0" y2="0" stroke="#dbdade" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <g id="SvgjsG1919" class="apexcharts-xaxis"><text id="SvgjsText1920"
                                                font-family="Public Sans" x="0" y="-125.36031704857236"
                                                text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a5a3ae" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="0"
                                                cy="-125.36031704857236">Jan</text><text id="SvgjsText1921"
                                                font-family="Public Sans" x="109.90496515269074" y="-57.68015852428619"
                                                text-anchor="start" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a5a3ae" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="109.90496515269074"
                                                cy="-57.68015852428619">Feb</text><text id="SvgjsText1922"
                                                font-family="Public Sans" x="109.90496515269075" y="57.68015852428615"
                                                text-anchor="start" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a5a3ae" class="apexcharts-datalabel"
                                                style="font-family: Public Sans;" cx="109.90496515269075"
                                                cy="57.68015852428615">Mar</text><text id="SvgjsText1923"
                                                font-family="Public Sans" x="1.4127564302215797e-14"
                                                y="125.36031704857236" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a5a3ae"
                                                class="apexcharts-datalabel" style="font-family: Public Sans;"
                                                cx="1.4127564302215797e-14" cy="125.36031704857236">Apr</text><text
                                                id="SvgjsText1924" font-family="Public Sans" x="-109.9049651526907"
                                                y="57.68015852428623" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a5a3ae"
                                                class="apexcharts-datalabel" style="font-family: Public Sans;"
                                                cx="-109.9049651526907" cy="57.68015852428623">May</text><text
                                                id="SvgjsText1925" font-family="Public Sans" x="-109.90496515269078"
                                                y="-57.68015852428609" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a5a3ae"
                                                class="apexcharts-datalabel" style="font-family: Public Sans;"
                                                cx="-109.90496515269078" cy="-57.68015852428609">Jun</text></g>
                                        <g id="SvgjsG1874" class="apexcharts-series" data:longestSeries="true"
                                            seriesName="Sales" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1877"
                                                d="M 0 -92.2882536388579L 0 -92.2882536388579L 67.43585147806625 -38.93410700389318L 67.43585147806627 38.93410700389316L 1.0595673226661848e-14 86.52023778642926L -62.44060322043168 36.050099077678894L -62.44060322043173 -36.05009907767881Z"
                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="0"
                                                pathTo="M 0 -92.2882536388579L 0 -92.2882536388579L 67.43585147806625 -38.93410700389318L 67.43585147806627 38.93410700389316L 1.0595673226661848e-14 86.52023778642926L -62.44060322043168 36.050099077678894L -62.44060322043173 -36.05009907767881Z"
                                                pathFrom="M 0 0"></path>
                                            <path id="SvgjsPath1878"
                                                d="M 0 -92.2882536388579L 0 -92.2882536388579L 67.43585147806625 -38.93410700389318L 67.43585147806627 38.93410700389316L 1.0595673226661848e-14 86.52023778642926L -62.44060322043168 36.050099077678894L -62.44060322043173 -36.05009907767881Z"
                                                fill="rgba(115,103,240,1)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="0"
                                                pathTo="M 0 -92.2882536388579L 0 -92.2882536388579L 67.43585147806625 -38.93410700389318L 67.43585147806627 38.93410700389316L 1.0595673226661848e-14 86.52023778642926L -62.44060322043168 36.050099077678894L -62.44060322043173 -36.05009907767881Z"
                                                pathFrom="M 0 0"></path>
                                            <g id="SvgjsG1875" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG1880" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1879" r="0" cx="0"
                                                        cy="-92.2882536388579" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1882" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1881" r="0" cx="67.43585147806625"
                                                        cy="-38.93410700389318" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="1" j="1"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1884" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1883" r="0" cx="67.43585147806627"
                                                        cy="38.93410700389316" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="2" j="2"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1886" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1885" r="0" cx="1.0595673226661848e-14"
                                                        cy="86.52023778642926" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="3" j="3"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1888" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1887" r="0" cx="-62.44060322043168"
                                                        cy="36.050099077678894" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="4" j="4"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1890" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1889" r="0" cx="-62.44060322043173"
                                                        cy="-36.05009907767881" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#7367f0" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="5" j="5"
                                                        index="0" default-marker-size="0"></circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1941" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker wff0d9uie" stroke="#ffffff"
                                                        fill="#7367f0" fill-opacity="1" stroke-width="1"
                                                        stroke-opacity="1" default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1891" class="apexcharts-series" data:longestSeries="true"
                                            seriesName="Visits" rel="2" data:realIndex="1">
                                            <path id="SvgjsPath1894"
                                                d="M 0 -72.10019815535772L 0 -72.10019815535772L 87.41684450860438 -50.47013870875042L 49.952482576345375 28.840079262143075L 7.0637821511078985e-15 57.68015852428618L -49.95248257634535 28.840079262143114L -49.95248257634539 -28.840079262143046Z"
                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="1"
                                                pathTo="M 0 -72.10019815535772L 0 -72.10019815535772L 87.41684450860438 -50.47013870875042L 49.952482576345375 28.840079262143075L 7.0637821511078985e-15 57.68015852428618L -49.95248257634535 28.840079262143114L -49.95248257634539 -28.840079262143046Z"
                                                pathFrom="M 0 0"></path>
                                            <path id="SvgjsPath1895"
                                                d="M 0 -72.10019815535772L 0 -72.10019815535772L 87.41684450860438 -50.47013870875042L 49.952482576345375 28.840079262143075L 7.0637821511078985e-15 57.68015852428618L -49.95248257634535 28.840079262143114L -49.95248257634539 -28.840079262143046Z"
                                                fill="rgba(0,207,232,0.85)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-radar" index="1"
                                                pathTo="M 0 -72.10019815535772L 0 -72.10019815535772L 87.41684450860438 -50.47013870875042L 49.952482576345375 28.840079262143075L 7.0637821511078985e-15 57.68015852428618L -49.95248257634535 28.840079262143114L -49.95248257634539 -28.840079262143046Z"
                                                pathFrom="M 0 0"></path>
                                            <g id="SvgjsG1892" class="apexcharts-series-markers-wrap">
                                                <g id="SvgjsG1897" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1896" r="0" cx="0"
                                                        cy="-72.10019815535772" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1899" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1898" r="0" cx="87.41684450860438"
                                                        cy="-50.47013870875042" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="1" j="1"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1901" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1900" r="0" cx="49.952482576345375"
                                                        cy="28.840079262143075" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="2" j="2"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1903" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1902" r="0" cx="7.0637821511078985e-15"
                                                        cy="57.68015852428618" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="3" j="3"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1905" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1904" r="0" cx="-49.95248257634535"
                                                        cy="28.840079262143114" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="4" j="4"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g id="SvgjsG1907" class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1906" r="0" cx="-49.95248257634539"
                                                        cy="-28.840079262143046" class="apexcharts-marker"
                                                        stroke="#ffffff" fill="#00cfe8" fill-opacity="1"
                                                        stroke-width="1" stroke-opacity="1" rel="5" j="5"
                                                        index="1" default-marker-size="0"></circle>
                                                </g>
                                                <g class="apexcharts-series-markers">
                                                    <circle id="SvgjsCircle1942" r="0" cx="0" cy="0"
                                                        class="apexcharts-marker w4y4yapn9" stroke="#ffffff"
                                                        fill="#00cfe8" fill-opacity="1" stroke-width="1"
                                                        stroke-opacity="1" default-marker-size="0"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1873" class="apexcharts-yaxis"></g>
                                        <g id="SvgjsG1876" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        <g id="SvgjsG1893" class="apexcharts-datalabels" data:realIndex="1"></g>
                                    </g>
                                    <line id="SvgjsLine1936" x1="0" y1="0" x2="277.0166664123535"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1937" x1="0" y1="0" x2="277.0166664123535"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1938" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1939" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1940" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1868" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(115, 103, 240);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 207, 232);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 360px; height: 392px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Browser States -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title m-0 me-2">
                        <h5 class="m-0 me-2">Browser States</h5>
                        <small class="text-muted">Counter April 2022</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="employeeList" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="employeeList">
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1 align-items-center">
                            <img src="../../assets/img/icons/brands/chrome.png" alt="Chrome" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Google Chrome</h6>
                                    </div>

                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">90.4%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="secondary" data-series="85"
                                    style="min-height: 35.7px;">
                                    <div id="apexchartsvcqp3716"
                                        class="apexcharts-canvas apexchartsvcqp3716 apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2102" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2104" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2103">
                                                    <clipPath id="gridRectMaskvcqp3716">
                                                        <rect id="SvgjsRect2106" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskvcqp3716"></clipPath>
                                                    <clipPath id="nonForecastMaskvcqp3716"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskvcqp3716">
                                                        <rect id="SvgjsRect2107" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2108" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2109">
                                                        <g id="SvgjsG2110" class="apexcharts-tracks">
                                                            <g id="SvgjsG2111"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2113">
                                                            <g id="SvgjsG2115"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2116"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 19.523292683151464 22.798412788836565"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(168,170,174,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="306" data:value="85" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 19.523292683151464 22.798412788836565">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2114" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2117" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2118" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2105" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1 align-items-center">
                            <img src="../../assets/img/icons/brands/safari.png" alt="Safari" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Apple Safari</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">70.6%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="success" data-series="70"
                                    style="min-height: 35.7px;">
                                    <div id="apexchartsq051xt5l"
                                        class="apexcharts-canvas apexchartsq051xt5l apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2119" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2121" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2120">
                                                    <clipPath id="gridRectMaskq051xt5l">
                                                        <rect id="SvgjsRect2123" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskq051xt5l"></clipPath>
                                                    <clipPath id="nonForecastMaskq051xt5l"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskq051xt5l">
                                                        <rect id="SvgjsRect2124" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2125" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2126">
                                                        <g id="SvgjsG2127" class="apexcharts-tracks">
                                                            <g id="SvgjsG2128"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2130">
                                                            <g id="SvgjsG2132"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2133"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 17.42053613626615 36.074695121726585"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(40,199,111,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="252" data:value="70" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 17.42053613626615 36.074695121726585">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2131" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2134" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2135" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2122" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1 align-items-center">
                            <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Mozilla Firefox</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">35.5%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="primary" data-series="25"
                                    style="min-height: 35.7px;">
                                    <div id="apexchartsror1qly4g"
                                        class="apexcharts-canvas apexchartsror1qly4g apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2136" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2138" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2137">
                                                    <clipPath id="gridRectMaskror1qly4g">
                                                        <rect id="SvgjsRect2140" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskror1qly4g"></clipPath>
                                                    <clipPath id="nonForecastMaskror1qly4g"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskror1qly4g">
                                                        <rect id="SvgjsRect2141" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2142" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2143">
                                                        <g id="SvgjsG2144" class="apexcharts-tracks">
                                                            <g id="SvgjsG2145"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2147">
                                                            <g id="SvgjsG2149"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2150"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 0 1 46.3040243902439 31.5"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(115,103,240,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="90" data:value="25" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 0 1 46.3040243902439 31.5">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2148" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2151" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2152" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2139" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1 align-items-center">
                            <img src="../../assets/img/icons/brands/opera.png" alt="Opera" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Opera Mini</h6>
                                    </div>

                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">80.0%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="danger" data-series="75"
                                    style="min-height: 35.7px;">
                                    <div id="apexcharts30182p7d"
                                        class="apexcharts-canvas apexcharts30182p7d apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2153" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2155" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2154">
                                                    <clipPath id="gridRectMask30182p7d">
                                                        <rect id="SvgjsRect2157" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask30182p7d"></clipPath>
                                                    <clipPath id="nonForecastMask30182p7d"></clipPath>
                                                    <clipPath id="gridRectMarkerMask30182p7d">
                                                        <rect id="SvgjsRect2158" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2159" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2160">
                                                        <g id="SvgjsG2161" class="apexcharts-tracks">
                                                            <g id="SvgjsG2162"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2164">
                                                            <g id="SvgjsG2166"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2167"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 16.695975609756097 31.500000000000004"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(234,84,85,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="270" data:value="75" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 16.695975609756097 31.500000000000004">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2165" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2168" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2169" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2156" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1 align-items-center">
                            <img src="../../assets/img/icons/brands/edge.png" alt="Edge" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Internet Explorer</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">62.2%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="info" data-series="60"
                                    style="min-height: 35.7px;">
                                    <div id="apexchartsgm80bo9r"
                                        class="apexcharts-canvas apexchartsgm80bo9r apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2170" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2172" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2171">
                                                    <clipPath id="gridRectMaskgm80bo9r">
                                                        <rect id="SvgjsRect2174" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskgm80bo9r"></clipPath>
                                                    <clipPath id="nonForecastMaskgm80bo9r"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskgm80bo9r">
                                                        <rect id="SvgjsRect2175" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2176" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2177">
                                                        <g id="SvgjsG2178" class="apexcharts-tracks">
                                                            <g id="SvgjsG2179"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2181">
                                                            <g id="SvgjsG2183"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2184"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 22.798412788836565 43.47670731684853"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(0,207,232,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="216" data:value="60" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 22.798412788836565 43.47670731684853">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2182" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2185" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2186" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2173" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="../../assets/img/icons/brands/brave.png" alt="Brave" height="28"
                                class="me-3 rounded">
                            <div class="d-flex w-100 align-items-center gap-2" style="position: relative;">
                                <div class="d-flex justify-content-between flex-grow-1 flex-wrap">
                                    <div>
                                        <h6 class="mb-0">Brave</h6>
                                    </div>
                                    <div class="user-progress d-flex align-items-center gap-2">
                                        <h6 class="mb-0">46.3%</h6>
                                    </div>
                                </div>
                                <div class="chart-progress" data-color="warning" data-series="45"
                                    style="min-height: 35.7px;">
                                    <div id="apexcharts5id5q5hb"
                                        class="apexcharts-canvas apexcharts5id5q5hb apexcharts-theme-light"
                                        style="width: 43px; height: 35.7px;"><svg id="SvgjsSvg2187" width="43"
                                            height="35.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG2189" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-5, -15)">
                                                <defs id="SvgjsDefs2188">
                                                    <clipPath id="gridRectMask5id5q5hb">
                                                        <rect id="SvgjsRect2191" width="69" height="75" x="-3"
                                                            y="-1" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask5id5q5hb"></clipPath>
                                                    <clipPath id="nonForecastMask5id5q5hb"></clipPath>
                                                    <clipPath id="gridRectMarkerMask5id5q5hb">
                                                        <rect id="SvgjsRect2192" width="67" height="77" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG2193" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2194">
                                                        <g id="SvgjsG2195" class="apexcharts-tracks">
                                                            <g id="SvgjsG2196"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428"
                                                                    fill="none" fill-opacity="1" stroke="#a8aaae29"
                                                                    stroke-opacity="1" stroke-linecap="round"
                                                                    stroke-width="3.186568292682929"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 1 1 31.49741621033156 16.69597583523428">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2198">
                                                            <g id="SvgjsG2200"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="Progress" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath2201"
                                                                    d="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 0 1 36.074695121726585 45.57946386373385"
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="rgba(255,159,67,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="round"
                                                                    stroke-width="3.285121951219514"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="162" data:value="45" index="0"
                                                                    j="0"
                                                                    data:pathOrig="M 31.5 16.695975609756097 A 14.804024390243903 14.804024390243903 0 0 1 36.074695121726585 45.57946386373385">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2199" r="8.210740243902439"
                                                                cx="31.5" cy="31.5"
                                                                class="apexcharts-radialbar-hollow" fill="transparent">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2202" x1="0" y1="0"
                                                    x2="63" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2203" x1="0" y1="0"
                                                    x2="63" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG2190" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 268px; height: 37px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Project Status -->
        <div class="col-12 col-xl-4 mb-4 col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="mb-0 card-title">Project Status</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="projectStatusId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatusId">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="position: relative;">
                    <div class="d-flex align-items-start">
                        <div class="badge rounded bg-label-warning p-2 me-3 rounded"><i
                                class="ti ti-currency-dollar ti-sm"></i></div>
                        <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
                            <div class="me-2">
                                <h6 class="mb-0">$4,3742</h6>
                                <small class="text-muted">Your Earnings</small>
                            </div>
                            <p class="mb-0 text-success">+10.2%</p>
                        </div>
                    </div>
                    <div id="projectStatusChart" style="min-height: 255px;">
                        <div id="apexchartsi1gjen9zg"
                            class="apexcharts-canvas apexchartsi1gjen9zg apexcharts-theme-light"
                            style="width: 311px; height: 240px;"><svg id="SvgjsSvg2045" width="311"
                                height="240" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG2047" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, 30)">
                                    <defs id="SvgjsDefs2046">
                                        <clipPath id="gridRectMaski1gjen9zg">
                                            <rect id="SvgjsRect2052" width="322" height="198" x="-3.5" y="-1.5"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaski1gjen9zg"></clipPath>
                                        <clipPath id="nonForecastMaski1gjen9zg"></clipPath>
                                        <clipPath id="gridRectMarkerMaski1gjen9zg">
                                            <rect id="SvgjsRect2053" width="319" height="199" x="-2" y="-2"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <linearGradient id="SvgjsLinearGradient2058" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop2059" stop-opacity="0.6"
                                                stop-color="rgba(255,159,67,0.6)" offset="0"></stop>
                                            <stop id="SvgjsStop2060" stop-opacity="0.15"
                                                stop-color="rgba(255,207,161,0.15)" offset="0.95"></stop>
                                            <stop id="SvgjsStop2061" stop-opacity="0.15"
                                                stop-color="rgba(255,207,161,0.15)" offset="1"></stop>
                                        </linearGradient>
                                    </defs>
                                    <line id="SvgjsLine2051" x1="0" y1="0" x2="0"
                                        y2="195" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="195"
                                        fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG2064" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2065" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"></g>
                                    </g>
                                    <g id="SvgjsG2084" class="apexcharts-grid">
                                        <g id="SvgjsG2085" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2087" x1="0" y1="0" x2="315"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2088" x1="0" y1="39" x2="315"
                                                y2="39" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2089" x1="0" y1="78" x2="315"
                                                y2="78" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2090" x1="0" y1="117" x2="315"
                                                y2="117" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2091" x1="0" y1="156" x2="315"
                                                y2="156" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2092" x1="0" y1="195" x2="315"
                                                y2="195" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2086" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine2094" x1="0" y1="195" x2="315"
                                            y2="195" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2093" x1="0" y1="1" x2="0"
                                            y2="195" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2054" class="apexcharts-area-series apexcharts-plot-series">
                                        <g id="SvgjsG2055" class="apexcharts-series" seriesName="seriesx1"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath2062"
                                                d="M 0 195L 0 156L 21 156L 42 78L 63 78L 84 115.05000000000001L 105 115.05000000000001L 126 156L 147 156L 168 115.05000000000001L 189 115.05000000000001L 210 50.70000000000002L 231 50.70000000000002L 252 126.75L 273 126.75L 294 11.700000000000017L 315 11.700000000000017L 315 195M 315 11.700000000000017z"
                                                fill="url(#SvgjsLinearGradient2058)" fill-opacity="1"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                stroke-dasharray="0" class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaski1gjen9zg)"
                                                pathTo="M 0 195L 0 156L 21 156L 42 78L 63 78L 84 115.05000000000001L 105 115.05000000000001L 126 156L 147 156L 168 115.05000000000001L 189 115.05000000000001L 210 50.70000000000002L 231 50.70000000000002L 252 126.75L 273 126.75L 294 11.700000000000017L 315 11.700000000000017L 315 195M 315 11.700000000000017z"
                                                pathFrom="M -1 234L -1 234L 21 234L 42 234L 63 234L 84 234L 105 234L 126 234L 147 234L 168 234L 189 234L 210 234L 231 234L 252 234L 273 234L 294 234L 315 234">
                                            </path>
                                            <path id="SvgjsPath2063"
                                                d="M 0 156L 21 156L 42 78L 63 78L 84 115.05000000000001L 105 115.05000000000001L 126 156L 147 156L 168 115.05000000000001L 189 115.05000000000001L 210 50.70000000000002L 231 50.70000000000002L 252 126.75L 273 126.75L 294 11.700000000000017L 315 11.700000000000017"
                                                fill="none" fill-opacity="1" stroke="#ff9f43" stroke-opacity="1"
                                                stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                class="apexcharts-area" index="0"
                                                clip-path="url(#gridRectMaski1gjen9zg)"
                                                pathTo="M 0 156L 21 156L 42 78L 63 78L 84 115.05000000000001L 105 115.05000000000001L 126 156L 147 156L 168 115.05000000000001L 189 115.05000000000001L 210 50.70000000000002L 231 50.70000000000002L 252 126.75L 273 126.75L 294 11.700000000000017L 315 11.700000000000017"
                                                pathFrom="M -1 234L -1 234L 21 234L 42 234L 63 234L 84 234L 105 234L 126 234L 147 234L 168 234L 189 234L 210 234L 231 234L 252 234L 273 234L 294 234L 315 234">
                                            </path>
                                            <g id="SvgjsG2056" class="apexcharts-series-markers-wrap"
                                                data:realIndex="0"></g>
                                        </g>
                                        <g id="SvgjsG2057" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2095" x1="0" y1="0" x2="315"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2096" x1="0" y1="0" x2="315"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2097" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2098" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2099" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect2100" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect2101" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                                <rect id="SvgjsRect2050" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2082" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-8, 0)">
                                    <g id="SvgjsG2083" class="apexcharts-yaxis-texts-g"></g>
                                </g>
                                <g id="SvgjsG2048" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 120px;"></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0">Donates</h6>
                        <div class="d-flex">
                            <p class="mb-0 me-3">$756.26</p>
                            <p class="mb-0 text-danger">-139.34</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pb-1">
                        <h6 class="mb-0">Podcasts</h6>
                        <div class="d-flex">
                            <p class="mb-0 me-3">$2,207.03</p>
                            <p class="mb-0 text-success">+576.24</p>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 360px; height: 403px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Projects -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="mb-0">Active Project</h5>
                        <small class="text-muted">Average 72% Completed</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="activeProjects" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/laravel-logo.png" alt="laravel-logo"
                                    class="me-3" width="35">
                                <div>
                                    <h6 class="mb-0">Laravel</h6>
                                    <small class="text-muted">eCommerce</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 54%"
                                        aria-valuenow="54" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">54%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/figma-logo.png" alt="figma-logo"
                                    class="me-3" width="35">
                                <div>
                                    <h6 class="mb-0">Figma</h6>
                                    <small class="text-muted">App UI Kit</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 86%"
                                        aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">86%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/vue-logo.png" alt="vue-logo" class="me-3"
                                    width="35">
                                <div>
                                    <h6 class="mb-0">VueJs</h6>
                                    <small class="text-muted">Calendar App</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">90%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/react-logo.png" alt="react-logo"
                                    class="me-3" width="35">
                                <div>
                                    <h6 class="mb-0">React</h6>
                                    <small class="text-muted">Dashboard</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                        aria-valuenow="37" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">37%</span>
                            </div>
                        </li>
                        <li class="mb-3 pb-1 d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/bootstrap-logo.png" alt="bootstrap-logo"
                                    class="me-3" width="35">
                                <div>
                                    <h6 class="mb-0">Bootstrap</h6>
                                    <small class="text-muted">Website</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 22%"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">22%</span>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="d-flex w-50 align-items-center me-3">
                                <img src="../../assets/img/icons/brands/sketch-logo.png" alt="sketch-logo"
                                    class="me-3" width="35">
                                <div>
                                    <h6 class="mb-0">Sketch</h6>
                                    <small class="text-muted">Website Design</small>
                                </div>
                            </div>
                            <div class="d-flex flex-grow-1 align-items-center">
                                <div class="progress w-100 me-3" style="height:8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 29%"
                                        aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span class="text-muted">29%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Last Transaction -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title m-0 me-2">Last Transaction</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless border-top">
                        <thead class="border-bottom">
                            <tr>
                                <th>CARD</th>
                                <th>DATE</th>
                                <th>STATUS</th>
                                <th>TREND</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa"
                                                height="30">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">*4230</p><small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">Sent</p>
                                        <small class="text-muted text-nowrap">17 Mar 2022</small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success">Verified</span></td>
                                <td>
                                    <p class="mb-0 fw-medium">+$1,678</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="../../assets/img/icons/payments/master-card-img.png"
                                                alt="Visa" height="30">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">*5578</p><small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">Sent</p>
                                        <small class="text-muted text-nowrap">12 Feb 2022</small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-danger">Rejected</span></td>
                                <td>
                                    <p class="mb-0 fw-medium">-$839</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="../../assets/img/icons/payments/american-express-img.png"
                                                alt="Visa" height="30">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">*4567</p><small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">Sent</p>
                                        <small class="text-muted text-nowrap">28 Feb 2022</small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success">Verified</span></td>
                                <td>
                                    <p class="mb-0 fw-medium">+$435</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa"
                                                height="30">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">*5699</p><small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">Sent</p>
                                        <small class="text-muted text-nowrap">8 Jan 2022</small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-secondary">Pending</span></td>
                                <td>
                                    <p class="mb-0 fw-medium">+$2,345</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="me-3">
                                            <img src="../../assets/img/icons/payments/visa-img.png" alt="Visa"
                                                height="30">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0 fw-medium">*5699</p><small class="text-muted">Credit</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0 fw-medium">Sent</p>
                                        <small class="text-muted text-nowrap">8 Jan 2022</small>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-danger">Rejected</span></td>
                                <td>
                                    <p class="mb-0 fw-medium">-$234</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Activity Timeline -->
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title m-0 me-2 pt-1 mb-2 d-flex align-items-center"><i
                            class="ti ti-list-details ms-n1 me-2"></i> Activity Timeline</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <ul class="timeline ms-1 mb-0">
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-warning"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Client Meeting</h6>
                                    <small class="text-muted">Today</small>
                                </div>
                                <p class="mb-2">Project meeting with john @10:15am</p>
                                <div class="d-flex flex-wrap">
                                    <div class="avatar me-2">
                                        <img src="../../assets/img/avatars/3.png" alt="Avatar"
                                            class="rounded-circle">
                                    </div>
                                    <div class="ms-1">
                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                        <span>CEO of Infibeam</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Create a new project for client</h6>
                                    <small class="text-muted">2 Day Ago</small>
                                </div>
                                <p class="mb-0">Add files to new design folder</p>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Shared 2 New Project Files</h6>
                                    <small class="text-muted">6 Day Ago</small>
                                </div>
                                <p class="mb-2">Sent by Mollie Dixon</p>
                                <div class="d-flex flex-wrap gap-2 pt-1">
                                    <a href="javascript:void(0)" class="me-3 d-flex align-items-center">
                                        <i class="ti ti-file-text text-warning me-2 ti-xs"></i>
                                        <span class="fw-medium text-heading">App Guidelines</span>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center">
                                        <i class="ti ti-table text-success me-2 ti-xs"></i>
                                        <span class="fw-medium text-heading">Testing Results</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent ps-4 border-transparent">
                            <span class="timeline-point timeline-point-secondary"></span>
                            <div class="timeline-event pb-0">
                                <div class="timeline-header">
                                    <h6 class="mb-0">Project status updated</h6>
                                    <small class="text-muted">10 Day Ago</small>
                                </div>
                                <p class="mb-0">Woocommerce iOS App Completed</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

@endsection
