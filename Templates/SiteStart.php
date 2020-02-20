<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */

//echo $this->getBlock('Header');

//echo 'In Templates/Login.php ) ';
//echo ' <br> '.$data;

//echo $this->getBlock('Footer');

echo $this->getBlock('Head');
echo $this->getBlock('Header');
echo $this->getBlock('SidebarLeft');
?>

    <!-- Start: Content-Wrapper-->
    <section id="content_wrapper">
        <!-- Start: Topbar-Dropdown-->
        <div id="topbar-dropmenu" class="alt">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-primary light"><span class="glyphicon glyphicon-inbox text-muted"></span><span class="metro-title">Messages</span></a></div>
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-info light"><span class="glyphicon glyphicon-user text-muted"></span><span class="metro-title">Users</span></a></div>
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-success light"><span class="glyphicon glyphicon-headphones text-muted"></span><span class="metro-title">Support</span></a></div>
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-system light"><span class="glyphicon glyphicon-facetime-video text-muted"></span><span class="metro-title">Videos</span></a></div>
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-warning light"><span class="fa fa-gears text-muted"></span><span class="metro-title">Settings</span></a></div>
                <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-alert light"><span class="glyphicon glyphicon-picture text-muted"></span><span class="metro-title">Pictures</span></a></div>
            </div>
        </div>
        <!-- Start: Topbar-->
        <header id="topbar" class="alt">
            <div class="topbar-left pull-left">
                <h1 class="mn">Dashboard</h1><span class="text-shady-lady fs15">dashboard & statistics</span>
            </div>
            <div class="topbar-right">
                <div class="ib topbar-dropdown">
                    <label for="topbar-multiple" class="control-label pr10 fs11 text-muted"></label>
                    <select id="topbar-multiple" class="hidden">
                        <optgroup label="Filter By:">
                            <option value="1-1" selected="selected">17 January 2016 - 15 February 2016</option>
                            <option value="1-2">Last 30 Days</option>
                            <option value="1-3">Last Year</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </header>
        <!-- Begin: Content-->
        <section id="content" class="table-layout animated fadeIn">
            <!-- begin: .tray-center-->
            <div class="tray tray-center">
                <div class="tray-inner">
                    <div class="row flex-column-reverse-before-md">
                        <div class="col-sm-12">
                            <div class="p30">
                                <!-- dashboard tiles-->
                                <h2 class="ib mn mr20">Totals</h2><span class="fs15 text-shady-lady">Last Week</span>
                                <div class="row text-center mt35">
                                    <div class="col-sm-6 col-md-3 br-lg-r">
                                        <h2 class="mn fs47 ib pr20 monserrat">597</h2>
                                        <div class="reveal-xlg-inline-block text-center text-xlg-left">
                                            <p class="fs15 text-shady-lady mb2">New<br class="veil reveal-xlg-block"> Feedbacks
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3 br-lg-r mt-30 mt-sm-0">
                                        <h2 class="mn monserrat fs47 ib pr20">16.6M$</h2>
                                        <div class="reveal-xlg-inline-block text-center text-xlg-left">
                                            <p class="fs15 text-shady-lady mb2">Total<br class="veil reveal-xlg-block"> Profit
                                            </p>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm-block"></div>
                                    <div class="col-sm-6 col-md-3 br-lg-r mt-30 mt-md-0">
                                        <h2 class="mn monserrat fs47 ib pr20">7.5K</h2>
                                        <div class="reveal-xlg-inline-block text-center text-xlg-left">
                                            <p class="fs15 text-shady-lady mb2">New<br class="veil reveal-xlg-block"> Orders
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mt-30 mt-md-0">
                                        <h2 class="mn monserrat fs47 ib pr20">+48%</h2>
                                        <div class="reveal-xlg-inline-block text-center text-xlg-left">
                                            <p class="fs15 text-shady-lady mb2">Brand<br class="veil reveal-xlg-block"> Popularity
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <hr class="mt-35">
                        </div>
                        <div class="col-sm-12">
                            <!-- Admin-panels-->
                            <div class="admin-panels">
                                <!-- dashboard activity-->
                                <div id="p01" class="panel mbn mt-40 mt-md-0">
                                    <div class="panel-body pbn">
                                        <div class="row">
                                            <!-- Chart Column-->
                                            <div class="col-md-6">
                                                <div class="pl30 pr40">
                                                    <h2 class="ib mn mr20">Site visits</h2><span class="fs15 text-shady-lady">Weekly Stats</span>
                                                    <div class="float-sm-right mt-10 mt-sm-0"><a href="#" id="ecommerce_chart1-new-data" class="btn btn-xs btn-success chart-1 active-success">New</a><a href="#" id="ecommerce_chart1-new-data-2" class="btn btn-xs btn-default ml4 chart-1">Returning</a></div>
                                                    <div id="ecommerce_chart1" style="height: 380px;"></div>
                                                </div>
                                            </div>
                                            <!-- Multi Text Column-->
                                            <div class="col-md-6 mt-30 mt-md-0">
                                                <div class="pr30 pl40">
                                                    <h2 class="ib mn mr20">Revenue</h2><span class="fs15 text-shady-lady">Monthly Stats</span>
                                                    <div class="mt-10 mt-sm-0 pull-sm-right">
                                                        <div class="btn-group">
                                                            <button type="button" data-toggle="dropdown" class="btn btn-xs btn-info dropdown-toggle">Filter range<span class="caret ml15"></span></button>
                                                            <ul role="menu" class="dropdown-menu">
                                                                <li><a id="ecommerce_chart2-new-data" href="#" class="filter-range bg-whitesmoke">Type 1</a></li>
                                                                <li><a id="ecommerce_chart2-new-data-2" href="#" class="filter-range">Type 2</a></li>
                                                                <li><a id="ecommerce_chart2-new-data-3" href="#" class="filter-range">Type 3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div id="ecommerce_chart2" style="height: 310px;" class="pt20"></div>
                                                    <div class="row mt10">
                                                        <div class="col-xs-6 col-sm-3 col-md-4 col-xl-3 text-space-20">
                                                            <div class="fs15 text-shady-lady">Revenue:</div>
                                                            <div class="fs23 text-outer-space monserrat">$13.274</div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-3 col-md-4 col-xl-3 text-space-20">
                                                            <div class="fs15 text-shady-lady">Tax:</div>
                                                            <div class="fs23 text-outer-space monserrat">$19.962</div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-3 col-md-4 col-xl-3 text-space-20">
                                                            <div class="fs15 text-shady-lady">Shipment:</div>
                                                            <div class="fs23 text-outer-space monserrat">$1.976</div>
                                                        </div>
                                                        <div class="col-xs-6 col-sm-3 col-md-12 col-xl-3 text-space-20 mt-md-15 mt-xl-0">
                                                            <div class="fs15 text-shady-lady">Orders:</div>
                                                            <div class="fs23 text-outer-space monserrat">529 479</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt37">
                    <div class="row text-center text-sm-left">
                        <div class="col-lg-6 admin-grid">
                            <div class="pl30 pr30">
                                <h2 class="mtn">Comments</h2>
                                <div class="box-sm box-offset-20 mt-30">
                                    <div class="box__left"><img src="assets/img/avatars/avatar-01.jpg" class="br4"></div>
                                    <div class="box__body bg-white-lilac pl20 pr10 pt15 pb10 br4 w100p">
                                        <div class="fs18 ib text-black">Gary Harvey</div>
                                        <div class="float-sm-right text-mischka text-bold monserrat fs12 mt7">15 Feb 01:12 PM</div>
                                        <p class="mt7">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                </div>
                                <div class="mt15 clearfix">
                                    <div class="float-right list-inline">
                                        <li><a href="#" class="text-primary text-uppercase fs12 text-bold monserrat">Quick edit</a></li>
                                        <li><a href="#" class="text-primary text-uppercase fs12 text-bold monserrat">View</a></li>
                                        <li><a href="#" class="text-danger text-uppercase fs12 text-bold monserrat">Delete</a></li>
                                    </div>
                                </div>
                                <div class="box-sm box-offset-20 mt-60 mt-sm-30">
                                    <div class="box__left"><img src="assets/img/avatars/avatar-02.jpg" class="br4"></div>
                                    <div class="box__body bg-white-lilac pl20 pr10 pt15 pb10 br4 w100p">
                                        <div class="fs18 ib text-black">Gerald Carpenter</div>
                                        <div class="float-sm-right text-mischka text-bold monserrat fs12 mt7">15 Feb 01:12 PM</div>
                                        <p class="mt7">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                                <div class="box-sm box-offset-20 mt-60 mt-sm-30">
                                    <div class="box__left"><img src="assets/img/avatars/avatar-03.jpg" class="br4"></div>
                                    <div class="box__body bg-white-lilac pl20 pr10 pt15 pb10 br4 w100p">
                                        <div class="fs18 ib text-black">Ashley Green</div>
                                        <div class="float-sm-right text-mischka text-bold monserrat fs12 mt7">15 Feb 01:12 PM</div>
                                        <p class="mt7">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                                <div class="box-sm box-offset-20 mt-60 mt-sm-30">
                                    <div class="box__left"><img src="assets/img/avatars/avatar-04.jpg" class="br4"></div>
                                    <div class="box__body bg-white-lilac pl20 pr10 pt15 pb10 br4 w100p">
                                        <div class="fs18 ib text-black">Doris Adams</div>
                                        <div class="float-sm-right text-mischka text-bold monserrat fs12 mt7">15 Feb 01:12 PM</div>
                                        <p class="mt7">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-md-11 col-lg-6 admin-grid mt-60 mt-lg-0">
                            <div class="pl30 pr30">
                                <h2 class="mtn">Quick actions</h2>
                                <div class="mt-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-05.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Gary Harvey</div>
                                                <p class="mt7">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">
                                                Reject
                                            </a></div>
                                    </div>
                                </div>
                                <div class="mt-60 mt-sm-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-06.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Gerald Carpenter</div>
                                                <p class="mt7">It has roots in a piece of classical Latin literature from 45 BC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">
                                                Reject
                                            </a></div>
                                    </div>
                                </div>
                                <div class="mt-60 mt-sm-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-07.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Ashley Green</div>
                                                <p class="mt7">All the Lorem Ipsum generators on the Internet tend to repeat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">
                                                Reject
                                            </a></div>
                                    </div>
                                </div>
                                <div class="mt-60 mt-sm-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-04.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Doris Adams</div>
                                                <p class="mt7">All the Lorem Ipsum generators on the Internet tend to repeat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">
                                                Reject
                                            </a></div>
                                    </div>
                                </div>
                                <div class="mt-60 mt-sm-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-05.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Gary Harvey</div>
                                                <p class="mt7">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">
                                                Reject

                                            </a></div>
                                    </div>
                                </div>
                                <div class="mt-60 mt-sm-30 d-sm-flex">
                                    <div><img src="assets/img/avatars/avatar-09.jpg" class="br4"></div>
                                    <div class="pl30 pr30">
                                        <div>
                                            <div>
                                                <div class="fs18 ib text-black">Gerald Carpenter</div>
                                                <p class="mt7">It has roots in a piece of classical Latin literature from 45 BC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-mischka text-uppercase text-bold monserrat fs12 d-sm-flex flex-direction-column mla min-w145">
                                        <div><span>3 jun</span><span class="bull bg-info"></span><span>9:30-13:00</span></div>
                                        <div class="btn-group btn-group-xs mt15 d-sm-flex"><a href="#" class="btn btn-info mw70">Approve</a><a href="#" class="btn btn-danger mw70">Reject</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- Three Pane Widget-->
                        <div class="col-md-12 admin-grid">
                            <div class="panel mbn">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pl30 pr30">
                                                <h2 class="ib mn mr20">Recent Activities</h2>
                                                <div class="pull-lg-right mt10 mt-lg-0">
                                                    <div class="btn-group">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-xs btn-info dropdown-toggle">Filter by<span class="caret ml15"></span></button>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Type 1</a></li>
                                                            <li><a href="#">Type 2</a></li>
                                                            <li><a href="#">Type 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="panel-scroller scroller-xl scroller-thick scroller-blue scroller-pn pn mt30">
                                                    <table class="table list-table">
                                                        <tbody>
                                                        <tr>
                                                            <td><span class="icon text-success fa fa-check"></span>You have 4 pending tasks</td>
                                                            <td class="text-right">Just now</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-primary fa fa-bar-chart"></span>Finance Report for year 2013 has been released.</td>
                                                            <td class="text-right">20 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-warning fa fa-user"></span>You have 5 pending membership that requires a quick review.</td>
                                                            <td class="text-right">20 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="element-groups-sm-custom"><span class="icon text-system fa fa-shopping-basket"></span>New order received with <span class="label label-system">Reference Number: DR23923</span>
                                                                </div>
                                                            </td>
                                                            <td class="text-right">20 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-warning fa fa-user"></span>You have 5 pending membership that requires a quick review.</td>
                                                            <td class="text-right">25 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-lynch fa fa-bell"></span>Web server hardware needs to be upgraded.</td>
                                                            <td class="text-right">28 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-default fa fa-briefcase"></span>IPO Report for year 2013 has been released.</td>
                                                            <td class="text-right">33 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-success fa fa-check"></span>You have 6 pending tasks</td>
                                                            <td class="text-right">35 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-primary fa fa-bar-chart"></span>Finance Report for year 2013 has been released.</td>
                                                            <td class="text-right">40 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-success fa fa-bell"></span>Web server hardware needs to be upgraded.</td>
                                                            <td class="text-right">40 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-warning fa fa-briefcase"></span>IPO Report for year 2013 has been released.</td>
                                                            <td class="text-right">44 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-success fa fa-check"></span>You have 6 pending tasks</td>
                                                            <td class="text-right">47 min</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bar-chart"></span>Finance Report for year 2013 has been released.</td>
                                                            <td class="text-right">50 min</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div><a href="#" class="mt25 btn-link">See All Records</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-30 mt-md-0">
                                            <div class="pr35 pl30">
                                                <h2 class="ib mn mr20">Tasks</h2>
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-xs btn-info dropdown-toggle">More<span class="caret ml15"></span></button>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Task 1</a></li>
                                                            <li><a href="#">Task 2</a></li>
                                                            <li><a href="#">Task 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="panel-scroller scroller-xl scroller-thick scroller-blue scroller-pn pn mt30">
                                                    <table class="table list-tasks">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault3" type="checkbox">
                                                                    <label for="checkboxDefault3">Hold An Interview for Marketing Manager Position</label><span class="label label-danger">MARKETING</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault4" type="checkbox">
                                                                    <label for="checkboxDefault4">AirAsia Intranet System Project Internal Meeting</label><span class="label label-warning dark">AIRASIA</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault5" type="checkbox">
                                                                    <label for="checkboxDefault5">Technical Management Meeting</label><span class="label label-primary dark">Company</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault6" type="checkbox">
                                                                    <label for="checkboxDefault6">Kick-off Company CRM Mobile App Development
                                                                    </label><span class="label label-primary dark">INTERNAL</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault7" type="checkbox">
                                                                    <label for="checkboxDefault7">Hold An Interview for Marketing Manager Position</label><span class="label label-danger">MARKETING</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault8" type="checkbox">
                                                                    <label for="checkboxDefault8">AirAsia Intranet System Project Internal Meeting</label><span class="label label-warning dark">AIRASIA</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault9" type="checkbox">
                                                                    <label for="checkboxDefault9">Technical Management Meeting</label><span class="label label-primary dark">Company</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault10" type="checkbox">
                                                                    <label for="checkboxDefault10">Kick-off Company CRM Mobile App Development</label><span class="label label-primary dark">INTERNAL</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault11" type="checkbox">
                                                                    <label for="checkboxDefault11">Hold An Interview for Marketing Manager Position</label><span class="label label-danger">MARKETING</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault12" type="checkbox">
                                                                    <label for="checkboxDefault12">AirAsia Intranet System Project Internal Meeting</label><span class="label label-warning dark">AIRASIA</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault13" type="checkbox">
                                                                    <label for="checkboxDefault13">Technical Management Meeting</label><span class="label label-primary dark">Company</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault14" type="checkbox">
                                                                    <label for="checkboxDefault14">Kick-off Company CRM Mobile App Development</label><span class="label label-primary dark">INTERNAL</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox-custom checkbox-custom-thin mr5 element-groups-sm-custom">
                                                                    <input id="checkboxDefault15" type="checkbox">
                                                                    <label for="checkboxDefault15">Hold An Interview for Marketing Manager sition</label><span class="label label-danger">MARKETING</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div><a href="#" class="mt25 btn-link">See All Records</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- Three Pane Widget-->
                        <div class="col-md-12 admin-grid">
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="pl30 pr50">
                                                <h2 class="ib mn mr20">General Stats</h2>
                                                <div class="pull-right">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-xs btn-system"><span class="mr10 icon fa fa-refresh"></span>Reload</button>
                                                    </div>
                                                </div>
                                                <div class="mt50 row text-center">
                                                    <div class="col-sm-4 mt-30 mt-sm-0">
                                                        <div id="c1" value="55" data-circle-color="system" class="info-circle info-circle-percent"></div>
                                                        <p class="fs15 text-shady-lady mt10">
                                                            Transactions


                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4 mt-30 mt-sm-0">
                                                        <div id="c2" value="85" data-circle-color="success" class="info-circle info-circle-percent"></div>
                                                        <p class="fs15 text-shady-lady mt10">
                                                            New Visits

                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4 mt-30 mt-sm-0">
                                                        <div id="c3" value="46" data-circle-color="danger" class="info-circle info-circle-percent"></div>
                                                        <p class="fs15 text-shady-lady mt10">
                                                            Bounce

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-30 mt-md-0">
                                            <div class="pl30 pr30">
                                                <div>
                                                    <h2 class="ib mn mr20">Server Stats</h2>
                                                    <div class="pull-right">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-xs btn-system"><span class="mr10 icon fa fa-refresh"></span>Reload</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt60 text-center">
                                                    <div class="col-xs-6 col-sm-3 col-md-4 mt10 mt-md-0">
                                                        <div sparkwidth="100%" data-spark-color="primary" values="5,6,4,3,5,6,4,6,7,2,4,7,5,4,6" class="inlinesparkbars"></div>
                                                        <p class="fs15 text-shady-lady mt10">Network</p>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3 col-md-4">
                                                        <div sparkwidth="100%" data-spark-color="warning" values="5,6,4,5,6,7,8,9,12,10,14,12,9,8,5" class="inlinesparkbars"></div>
                                                        <p class="fs15 text-shady-lady mt10">CPU Load</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-4 mt-30 mt-sm-0">
                                                        <div id="ecommerce_chart3" style="height: 120px;"></div>
                                                        <p class="fs15 text-shady-lady mt10">Load Rating</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt10">
                    <div class="row">
                        <!-- Three Pane Widget-->
                        <div class="col-md-12 admin-grid">
                            <div class="panel mtn">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 mt-30 mt-md-0">
                                            <div class="pl30 pr30">
                                                <h2 class="ib mn mr20">Regional Stats</h2>
                                                <div class="clearfix mt30">
                                                    <div class="pull-left">
                                                        <div class="btn-group btn-group-xs d-sm-flex"><a href="#" class="btn btn-info">Users</a><a href="#" class="btn btn-gray">
                                                                Orders
                                                            </a></div>
                                                    </div>
                                                    <div class="pull-right">
                                                        <div class="btn-group">
                                                            <button type="button" data-toggle="dropdown" class="btn btn-xs fs10 btn-info dropdown-toggle">Select region<span class="caret ml15"></span></button>
                                                            <ul role="menu" class="dropdown-menu">
                                                                <li><a href="#">Region 1</a></li>
                                                                <li><a href="#">Region 2</a></li>
                                                                <li><a href="#">Region 3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="WidgetMap" style="width: 100%; height: 300px;" class="mt40 jvector-colors hide-jzoom"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="pl30 pr30">
                                                <h2 class="ib mn mr20">Feed</h2>
                                                <div class="panel-scroller scroller-lg scroller-thick scroller-blue scroller-pn pn mt30">
                                                    <table class="table list-table">
                                                        <tbody>
                                                        <tr>
                                                            <td><span class="icon text-warning fa fa-bell"></span>Web server hardware needs to be upgraded.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="icon text-info fa fa-bullhorn"></span>New order received. Please take care of it.</td>
                                                            <td class="text-right">2 hours</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt25">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pl30 pr30">
                                <!-- Calendar Widget-->
                                <div id="p02" class="panel panel-widget calendar-widget calendar-alt">
                                    <h2 class="mtn">Calendar</h2>
                                    <div id="calendar-widget" class="mt-35 mt-sm-0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 admin-grid">
                            <div class="pl30 pr30">
                                <h2 class="ib mtn">Chat</h2>
                                <div class="reveal-sm-inline-block float-sm-right mt5 ml-md-20">
                                    <form role="search" class="search-form-widget"><span class="fa fa-search fs18"></span>
                                        <div class="form-group">
                                            <input type="text" placeholder="Search..." class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-scroller scroller-lg scroller-thick scroller-blue scroller-pn pn bg-alabaster mt-20 mt-md-0 text-center text-sm-left">
                                    <div class="pt25 pl20 pr15 pb20">
                                        <div class="bg-info text-white pt15 pl15 pr20 pb10 fs13 lh19 br4 ml10p triangle-after-right posr mr8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt5 text-right">11:49 AM</div>
                                        </div>
                                        <div class="box-sm box-offset-10 mt-60 mt-sm-20">
                                            <div class="box__left"><img src="assets/img/avatars/avatar-09.jpg" class="br4"></div>
                                            <div class="box__body">
                                                <div class="text-black fs14 lh14">Gerald Carpenter</div>
                                                <div class="bg-white text-santas-gray br4 pt15 pl15 pr20 pb10 fs13 lh19 br4 posr mt10 triangle-after-left">Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt7">11:49 AM</div>
                                                </div>
                                            </div>
                                            <div class="bg-info text-white pt15 pl15 pr20 pb10 fs13 lh19 br4 ml10p triangle-after-right posr mt-60 mt-sm-20 mr8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt5 text-right">11:49 AM</div>
                                            </div>
                                            <div class="box-sm box-offset-10 mt-60 mt-sm-20">
                                                <div class="box__left"><img src="assets/img/avatars/avatar-04.jpg" class="br4"></div>
                                                <div class="box__body">
                                                    <div class="text-black fs14 lh14">Doris Adams</div>
                                                    <div class="bg-white text-santas-gray br4 pt15 pl15 pr20 pb10 fs13 lh19 br4 posr mt10 triangle-after-left">Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt7">11:49 AM</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-info text-white pt15 pl15 pr20 pb10 fs13 lh19 br4 ml10p triangle-after-right posr mt-60 mt-sm-20 mr8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt5 text-right">11:49 AM</div>
                                            </div>
                                            <div class="box-sm box-offset-10 mt-60 mt-sm-20">
                                                <div class="box__left"><img src="assets/img/avatars/avatar-05.jpg" class="br4"></div>
                                                <div class="box__body">
                                                    <div class="text-black fs14 lh14">Gary Harvey</div>
                                                    <div class="bg-white text-santas-gray br4 pt15 pl15 pr20 pb10 fs13 lh19 br4 posr mt10 triangle-after-left">Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                        <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt7">11:49 AM</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-info text-white pt15 pl15 pr20 pb10 fs13 lh19 br4 ml10p triangle-after-right posr mt-60 mt-sm-20 mr8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                <div class="time text-bold monserrat fs10 opacity05 text-uppercase mt5 text-right">11:49 AM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-lynch br4 p5 mb30 mb-lg-0">
                                    <form action="#" class="inline-form d-flex bg-white br4">
                                        <input type="text" placeholder="Type message here">
                                        <button type="submit" class="text-white bg-info br4 br-n mla"><span class="fa fa-envelope-o fs21 pl10 pr10"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- begin: .tray-right-->
            <aside data-tray-height="match" class="tray tray-right tray270 pn hidden">
                <!-- store activity timeline-->
                <ol class="timeline-list pl5 mt5">
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                        <div class="timeline-date">1:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Notebook</a></div>
                        <div class="timeline-date">3:05am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                        <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                        <div class="timeline-date">8:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
                        <div class="timeline-date">9:35am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-system"><span class="fa fa-fire"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                        <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                        <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                        <div class="timeline-date">5:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
                        <div class="timeline-date">7:45am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                        <div class="timeline-date">8:25am</div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
                        <div class="timeline-date">9:3</div>
                    </li>
                </ol>
            </aside>
        </section>

<?php
echo $this->getBlock('Footer');
?>

