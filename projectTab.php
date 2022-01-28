<?php

function projectDashboard()
{
?>
    <div class="container content-tab" id="project-dashboard" style="display:none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="dash_btn">
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                        Update</button>
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-tools"></i></span>
                        Manage
                        tiles</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>Invoice</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>

                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">

                        <div class="category">
                            <span>invoice</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>

                    </div>
                </div>

                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>

            </div>

            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>Contacts</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">
                        <div class="category">
                            <span>Contacts</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>costs</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">
                        <div class="category">
                            <span>costs</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>Invoice</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">
                        <div class="category">
                            <span>invoice</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>Contacts</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">
                        <div class="category">
                            <span>Contacts</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 invoice-col">
                <div class="invoice-box">
                    <div class="title-div">
                        <h5 class="w-100">Quick Acess <span>costs</span></h5>
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="invoice-main">
                        <input type="text" placeholder="Enter search term" class="input-felid">
                        <div class="category">
                            <span>costs</span>
                            <span>Amount</span>
                        </div>
                        <div class="srch-items">
                            <p>No entries found</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn create-btn">create</button>
                </div>
            </div>
        </div>

    </div>
<?php
}

?>
<?php
function projectProjectTab()
{
?>
    <div class="container content-tab" id="project-project" style="display: none;">
        <div class="row m-4 sub-tab">
            <div class="w-100 text-center justify-content-center">
                <!-- Start Button -->
                <div class="">
                    <span class="d-flex justify-content-center">
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New
                        </button>
                    </span>
                </div>
                <!-- Close Button -->
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">Status</h6>
                        <div class="mt-2 text-right">
                            <div class="check"><span class=" ml-3 checkMe">Open</span></div>
                            <div class="check"><span class=" ml-3 checkMe">In progress</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Closed</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Billed</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 mt-4 col-sm-10">
                        <table class="table showUnite">
                            <thead>
                                <tr class="text-left">
                                    <th>NUMBER
                                    <th>
                                    <th>NAME</th>
                                    <th>CUSTOMER</th>
                                    <th>START</th>
                                    <th>EFFORT</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-left">
                                    <td>No results found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
function timeReportTab()
{
?>
    <div class="container content-tab" id="project-timereport" style="display: none;">
        <div class="row m-4 sub-tab" id="project-timemanagemnet-inner" style="display: block;">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-down"></i></span>
                            Current month</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-down"></i></span>
                            Export </button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-play"></i></span>
                            Stop Watch </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row m-4 sub-tab" id="project-employeereports-inner" style="display: none;">
            <div class="w-100 justify-content-center text-center">

            </div>
        </div>
    </div>
<?php
}
?>
<?php

function customerReportTab()
{
?>

    <div class="container content-tab" id="project-customer-report" style="display: none;">
        <div class="row m-4">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1 mt-2">TIMELINE</h6>
                        <div class="mt-2">
                            <div class="check"><span class=" ml-3 checkMe">2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">June 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">May 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">April 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">March 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">February 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">January 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">2021</span></div>
                        </div>
                        <div class="mt-2">
                            <h6>OPTIONS</h6>
                            <div class="check"><span class=" ml-3 checkMe">Hide billed items</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 c ol-sm-10">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th>CUSTOMER</th>
                                    <th>TOTAL COSTS</th>
                                    <th>OPEN COSTS</th>
                                    <th>TOTAL EXPENSES</th>
                                    <th>OPEN EXPENSES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-left">
                                    <td>No results found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php

function costUnit()
{
?>
    <div class="container content-tab" id="project-costs-units" style="display:none;">
        <div class="row m-4">
            <div class="w-100 justify-content-center text-center">
                <div class="w-100 justify-content-center text-center">
                    <div class="">
                        <span>
                            <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                Update</button>
                        </span>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-2 col-sm-2 text-left">
                            <h6 class="ml-1 mt-2">STATUS</h6>
                            <div class="mt-2">
                                <div class="check"><span class=" ml-3 checkMe">Productive</span></div>
                                <div class="check"><span class=" ml-3 checkMe">Unproductive </span></div>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-10 c ol-sm-10">
                            <table class="table showUnite dataTable no-footer">
                                <thead>
                                    <tr class="text-left">
                                        <th>NUMBER</th>
                                        <th>NAME</th>
                                        <th>EFFORT THIS MONTH (H)</th>
                                        <th>LAST REPORT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No cost units available</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php

function statiTics()
{
?>
    <div class="container content-tab" id="project-statics" style="display: none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="">
                    <span class="static_btn3">
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-calendar"></i></span>
                            Period</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-image"></i></span>
                            Bars</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                            Past</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-right  "></i></span>
                            Future</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-calendar"></i></span>
                            Months
                        </button>
                    </span>
                </div>
                <div class="m-4">
                    <span>Statistics for abc </span>
                    <br>
                    <span>February 2021 - January - 2020 </span>
                </div>
                <span class="text-center mt-5">Total (CHF)</span>
                <div class="d-flex w-100  justify-content-center mb-4 ">
                    <div class="d-flex row justify-content-center">
                        <label class="fiLterCheck">Invoices
                            <input type="checkbox">
                            <span class="checkM"></span>
                        </label>
                        <label class="fiLterCheck">Recurring invoices
                            <input type="checkbox">
                            <span class="checkM"></span>
                        </label>
                        <label class="fiLterCheck">Offers
                            <input type="checkbox">
                            <span class="checkM"></span>
                        </label>
                        <label class="fiLterCheck">Delviery notes
                            <input type="checkbox">
                            <span class="checkM"></span>
                        </label>
                        <label class="fiLterCheck">Order confirmation
                            <input type="checkbox">
                            <span class="checkM"></span>
                        </label>
                    </div>
                </div>
                <div class="chartContainer row"></div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php

function daTa()
{
?>
    <div class="container content-tab" id="project-data" style="display: none;">
        <div class="row m-4">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-down"></i></span>
                            Generate export</button>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <div class="mt-2">
                            <div class="check"><span class=" ml-3 checkMe">Queue</span></div>
                            <div class="check"><span class=" ml-3 checkMe">in Processing</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Archived</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Error</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Completed</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 c ol-sm-10">
                        <table class="table showUnite dataTable no-footer">
                            <thead>
                                <tr class="text-left">
                                    <th>TYPE</th>
                                    <th>FORMAT</th>
                                    <th>MODE</th>
                                    <th>CREATED</th>
                                    <th>GENERATED</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-left">
                                    <td>No results found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
function confiGuration()
{
?>
    <div class="container content-tab" id="project-configuration" style="display: none;">
        <div class="row m-4 sub-tab" style="display: block;" id="project-general-inner">
            <div class="w-100 justify-content-center text-center">
                <nav>
                    <div class="nav nav-Tabboing_tab justify-content-center text-center" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                        <a class="nav-link" id="nav-activities-tab" data-toggle="tab" href="#nav-activities" role="tab" aria-controls="nav-activities" aria-selected="false">Activities</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                        <div class="">
                            <button class="btn all_btn " id="edit6">
                                <span class="badge"><i class="fas fa-pen"></i></span> Edite</button>
                            <button class="btn all_btn " id="btn_save_edit6" style="display: none;"><span class="badge"><i class="fas fa-save"></i></span> Save</button>
                        </div>
                        <form action="" class="project_config_form d-flex col-md-12">
                            <div class="form-row text-left justify-content-center">
                                <div class="col-md-10 text-left m-1">
                                    <h4>DEFAULT VALUES</h4>
                                    <h6>Hourly display</h6>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Decimal</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Hours:minutes</label>
                                    </div>
                                </div>
                                <hr class="w-100">
                                <div class="col-md-5 text-left m-1">
                                    <h4>NUMBER</h4> <br>
                                    <label for="">Project</label>
                                    <input type="text" disabled placeholder="{N}" class="form-control">
                                </div>
                                <div class="col-md-5 text-left m-1">
                                    <label for="">No.</label>
                                    <input type="text" disabled placeholder="1000" class="form-control">
                                </div>
                                <div class="col-md-5 text-left m-1">
                                    <label for="">Reset</label>
                                    <input type="text" disabled placeholder="Never" class="form-control">
                                </div>
                                <div class="col-md-5 text-left m-1">
                                    <label for="">Cost unit</label>
                                    <input type="text" disabled placeholder="{N}" class="form-control">
                                </div>
                                <div class="col-md-5 text-left m-1">
                                    <label for="">No.</label>
                                    <input type="text" disabled placeholder="1000" class="form-control">
                                </div>
                                <div class="col-md-5 text-left m-1">
                                    <label for="">Reset</label>
                                    <input type="text" disabled placeholder="Never" class="form-control">
                                </div>
                                <div class="col-md-10 text-left m-1">
                                    <h6>Note on templates and numberings:</h6>
                                    <p>Any combination of free text and placeholders can be used in the template,
                                        e.g. 'K-{N}'.</p>
                                    <h6>Available placeholders are:</h6>
                                    <p>
                                        {N} - Continuous numbering
                                        {YYYY} - Current year, e.g. 2022
                                        {YY} - Current year, e.g. 22
                                        {MM} - Current month, e.g. 04
                                        {M} - Current month, e.g. 4
                                        {DD} - Current day, e.g. 03
                                        {D} - Current day, e.g. 3
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-activities" role="tabpanel" aria-labelledby="nav-activities-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <table class="table showUnite dataTable no-footer">
                                <thead>
                                    <tr class="text-left">
                                        <th>NAME</th>
                                        <th>ASSIGNED TO ARTICLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No result found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>