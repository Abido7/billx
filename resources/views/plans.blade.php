@extends('layouts.guest')
@section('content')
    <main id="main_root" class="main-root"><!-- Page Content -->
        <div id="page_wrapper" class="wrapper">
            <!-------------------------------------- Start Body ------------------------------------------>

            <section class="section page-title-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="page-title mx-auto text-center">
                                <div class="text-box">
                                    <h1 class="mb-2 fw-bolder theme-lightblue-color">Plans</h1>
                                    <h2 class="fs-2 fw-semibold text-black">
                                        Shared Cloud SSD Hosting Powered by cPanel
                                    </h2>
                                    <p class="mb-0 fw-light ">NOW WITH FREE DOMAIN FOR LIFE AND FREE WEBSITE TRANSFER ON
                                        ALL PLANS </p>
                                </div>
                            </div>
                            <div class="plans-types d-flex flex-wrap justify-content-center my-3">
                                <div class="form-group type ">
                                    <input type="radio" name="plans-type" id="sharedHosting">
                                    <label for="sharedHosting">
                                        Shared Hosting
                                    </label>
                                </div>
                                <div class="form-group type ">
                                    <input type="radio" name="plans-type" id="cloudVPSHosting">
                                    <label for="cloudVPSHosting">
                                        Cloud VPS Hosting
                                    </label>
                                </div>
                                <div class="form-group type">
                                    <input type="radio" name="plans-type" id="dedicatedCPUServers">
                                    <label for="dedicatedCPUServers">
                                        Dedicated CPU Servers
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <div class="table-responsive rounded-3">
                                <table class="table table-theme-plans table-striped table-borderless align-middle m-0">
                                    <thead>
                                    <tr>
                                        <th>Features</th>
                                        <th>
                                            FastCloud Plus
                                            <small class="d-block font-size-13">
                                                $89.00 / month
                                            </small>
                                        </th>
                                        <th>
                                            FastCloud Plus
                                            <small class="d-block font-size-13">
                                                $189.00 / month
                                            </small>
                                        </th>
                                        <th>
                                            FastCloud Extra
                                            <small class="d-block font-size-13">$279.00 / month</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                                <span class="fw-semibold text-primary">
                                                    Analytics
                                                </span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Realtime analytics
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User analytics</td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Funnel optimization
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                <span class="fw-semibold text-primary">
                                                    Report
                                                </span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Automated
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AI data predictions
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>

                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Advanced charts
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>

                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                <span class="fw-semibold text-primary">
                                                    Security
                                                </span>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Real-time team reports
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>

                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Easy-to-share results
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>

                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Real-time team reports
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2605 12.5189C23.2605 6.65021 18.4991 1.88885 12.6305 1.88885C6.76184 1.88885 2.00049 6.65021 2.00049 12.5189C2.00049 18.3875 6.76184 23.1489 12.6305 23.1489C18.4991 23.1489 23.2605 18.3875 23.2605 12.5189Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-miterlimit="10"/>
                                                <path
                                                    d="M9.08716 16.0619L16.1738 8.97528M16.1738 16.0619L9.08716 8.97528L16.1738 16.0619Z"
                                                    stroke="#BEBEBE" stroke-width="3" stroke-linecap="round"
                                                    stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>

                                        </td>
                                        <td>
                                            <svg class="svg-img" width="25" height="25" viewBox="0 0 25 25"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.2602 12.3868C23.2602 6.51813 18.4989 1.75677 12.6302 1.75677C6.7616 1.75677 2.00024 6.51813 2.00024 12.3868C2.00024 18.2554 6.7616 23.0168 12.6302 23.0168C18.4989 23.0168 23.2602 18.2554 23.2602 12.3868Z"
                                                    stroke="#31C65B" stroke-width="3" stroke-miterlimit="10"/>
                                                <path d="M17.9454 7.95709L10.5044 16.8154L7.31543 13.2721"
                                                      stroke="#31C65B" stroke-width="3" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button class="btn btn-outline-primary">
                                                Get Started
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary">
                                                Get Started
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">
                                                Get Started
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 d-block" alt="Image 5" src="{{asset('images/billx_image_5.jpg')}}">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid w-100 d-block" alt="Image 6" src="{{asset('images/billx_image_6.jpg')}}">
                        </div>
                    </div>
                </div>
            </section>
            <!-------------------------------------- End Body ------------------------------------------>
        </div>
        <!-- Page Content End -->
    </main>
@endsection
