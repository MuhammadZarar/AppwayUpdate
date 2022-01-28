<?php

function ReceivableDashboard()
{
?>
    <div class="container content-tab" id="receivable-dashboard" style="display:none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="dash_btn">
                    <button class="btn all_btn" style="margin-bottom:20px !important"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                        Update</button>
                    <button class="btn all_btn" style="margin-bottom:20px !important"><span class="badge"><i class="fas fa-tools"></i></span>
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
function ReceivableDocument()
{
?>
    <div class="container content-tab" id="receivable-document" style="display:none;">
        <div class="row m-4 sub-tab" id="doc-invoice-inner" style="display: block;">
            <div class="w-100 text-center justify-content-center">
                <nav>
                    <div class="nav justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-invoice-tab" data-toggle="tab" href="#nav-invoice" role="tab" aria-controls="nav-invoice" aria-selected="true">Invoices</a>
                        <a class="nav-item nav-link" id="nav-recurring-tab" data-toggle="tab" href="#nav-recurring" role="tab" aria-controls="nav-recurring" aria-selected="false">Recurring</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-invoice" role="tabpanel" aria-labelledby="nav-invoice-tab">
                        <!-- Start Button -->
                        <div class="">
                            <span class="d-flex justify-content-center">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New
                                </button>
                                <!-- Nested Button Starts  -->
                                <div class="aa">
                                    <button class=" all_btn click_export_btn" id="t">
                                        <span class="badge">
                                            <i class="fas fa-cog"></i>
                                        </span>Export/Import</button>
                                    <div class="drop_export_btn">
                                        <button data-toggle="modal" data-target="#exampleModal">
                                            <span class="badge">
                                                <i class="fas fa-arrow-up mr-2"></i>
                                            </span>Export</button>
                                        <button class="btn-sm" data-toggle="modal" data-target="#exampleModalPay">
                                            <span class="badge">
                                                <i class="fas fa-arrow-down"></i>
                                            </span>Enter your payment file</button>
                                    </div>

                                    <!-- Modal One Start -->

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Export
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-row">
                                                            <div class="col-md-6 text-left">
                                                                <label for="">From</label>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <label for="">To</label>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                            <div class="col-md-12 mt-3 text-left">
                                                                <span>Export type</span>
                                                                <select name="" id="" class="form-control">
                                                                    <option class="form-control" selected value="">Default (a row / document)
                                                                    </option>
                                                                    <option class="form-control" value="">
                                                                        Detail (a row / Item)</option>
                                                                    <option class="form-control" value="">
                                                                        ZIP archive</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12 mt-3 text-left">
                                                                <span>Date</span>
                                                                <select name="" id="" class="form-control">
                                                                    <option class="form-control" selected value="">Invoice date</option>
                                                                    <option class="form-control" value="">
                                                                        Payment date</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">Only paid</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">Only
                                                                        unpaid</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">All</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_m2 all_btn" data-toggle="modal" data-target="#exampleModal2"><span class="badge"><i class="fas fa-clock"></i></span>
                                                        Prepare</button>
                                                    <button type="button" class="btn btn_m1 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                        Cencel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal One End -->

                                    <!-- Modal Tow Start -->
                                    <!-- Modal One Start -->

                                    <div class="modal  fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-scrollable" style="max-width:900px !important;">
                                            <div class="modal-content m-0" style="width: 900px;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Export
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row" id="row_modal">
                                                        <p class="ml-3">Select required columns</p>
                                                        <form action="" class="d-flex">
                                                            <div class="form-row">
                                                                <div class="px-3 text-left">
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Number
                                                                                -</b> Document no.</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Client_name
                                                                                -</b> Customer.</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Client_number
                                                                                -</b> Customer no.</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Client_groups
                                                                                -</b> Groups(separated by
                                                                            cammas)</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Date -</b>
                                                                            Date</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Period
                                                                                -</b>
                                                                            Service/delivery</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Due -</b>
                                                                            Due</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Period_from
                                                                                -</b> Period from</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Period_to
                                                                                -</b> Period to</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Total
                                                                                -</b> Total</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Total_exclvat
                                                                                -</b> Total excl.
                                                                            tax</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">
                                                                                Total_exclvat_afterdiscount
                                                                                -</b> Total Excel. tax,
                                                                            incl. discount</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Total_vat
                                                                                -</b> Total tax</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Total_vat_split
                                                                                -</b> Total tax
                                                                            split</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">currency
                                                                                -</b> currency</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Status
                                                                                -</b> Status</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- second check -->
                                                            <div class="form-row">
                                                                <div class="col-md-12 px-3 text-left">
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Notes
                                                                                -</b> Notes</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Paid_date
                                                                                -</b> Paid on</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Paid_amount
                                                                                -</b> Amount paid</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Esr_number
                                                                                -</b> Reference
                                                                            number</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Cash_discount_date
                                                                                -</b> Cash discount
                                                                            date</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Cash_discount_value
                                                                                -</b> Cash discount
                                                                            amount(%)</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Service_total
                                                                                -</b> Service total</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Service_exclvat
                                                                                -</b> Service excl.
                                                                            tax</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">
                                                                                Service_vat -</b> Service
                                                                            tax</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Service_vat_split
                                                                                -</b> Service tax
                                                                            split</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Product_total
                                                                                -</b> Product total</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Product_exclvate
                                                                                -</b> Product excl.
                                                                            tax</label>
                                                                    </div>
                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Product_vat
                                                                                -</b> Product tax</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Product_vat_split
                                                                                -</b> Prodcut tax
                                                                            split</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Rounding_difference
                                                                                -</b> Rounding
                                                                            difference</label>
                                                                    </div>

                                                                    <div class="">
                                                                        <input type="checkbox">
                                                                        <label for=""><b class="text-dark">Payments
                                                                                -</b> Pyaments</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_m3 all_btn" data-toggle="modal" data-target="#exampleModal"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                        Back</button>
                                                    <button type="button" class="btn btn_m5 all_btn" data-toggle="modal" data-target="#exampleModal3"><span class="badge"><i class="fas fa-arrow-circle-right"></i></span>
                                                        Next</button>
                                                    <button type="button" class="btn btn_m4 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                        Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal three start  -->
                                    <!-- payment modal start -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalPay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark id=" exampleModalLabel">Alert</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <p>To import files with QR-IBAN, ISR payment data or
                                                        account statements, you must now click on 'Upload'
                                                        before
                                                        you can choose the format and import the file.p </p>
                                                    <span><input type="checkbox" checked></span>
                                                    <p>
                                                        If payments are not automatically assigned, you can
                                                        manually allocate them afterwards per incoming
                                                        payment (transaction).</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <span><input type="checkbox"> Do not show again</span>
                                                    <button type="button" class="btn all_btn">Ok</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment modal end -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog " style="max-width: 600px !important;">
                                            <div class="modal-content" style="width: 600px !important;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">EXport
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        The requested export has been prepared.
                                                        Please select the required export format.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModal2"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                        Back</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        CSV</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        XLSX</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        PDF</button>
                                                    <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                        Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal three end -->
                                    <!-- Modal Tow End -->
                                </div>
                                <!-- Nested Button Starts  -->
                                <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                            </span>
                        </div>
                        <!-- Close Button -->
                        <div class="d-flex">
                            <div class="col-md-2 col-sm-6 text-left">
                                <h6 class="ml-1">Status</h6>
                                <div class="mt-2 text-right">
                                    <div class="check"><span class=" ml-3 checkMe">Draft</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Sent</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Reminders</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Paid</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Cancelled</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-10 main_table">
                                <table class="table showUnite">
                                    <thead>
                                        <tr class="text-left">
                                            <th class="ml-2"><input type="checkbox"></th>
                                            <th>INVOICE NUMBER</th>
                                            <th>CUSTOMER</th>
                                            <th>DUE ON</th>
                                            <th>AMOUNT</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-left">
                                            <td><input type="checkbox"></td>
                                            <td><button class="btn"><span><i class="fas fa-search"></i></span></button></td>
                                            <td>gul</td>
                                            <td>16.Feb 2022</td>
                                            <td>CHF 0.00</td>
                                            <td><button class="btn btn-dark">Draft</button></td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><input type="checkbox"></td>
                                            <td><button class="btn"><span><i class="fas fa-search"></i></span></button></td>
                                            <td>gul</td>
                                            <td>16.Feb 2022</td>
                                            <td>CHF 0.00</td>
                                            <td><button class="btn btn-dark">Draft</button></td>
                                        </tr>
                                        <tr class="text-left">
                                            <td><input type="checkbox"></td>
                                            <td><button class="btn"><span><i class="fas fa-search"></i></span></button></td>
                                            <td>gul</td>
                                            <td>16.Feb 2022</td>
                                            <td>CHF 0.00</td>
                                            <td><button class="btn btn-dark">Draft</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-recurring" role="tabpanel" aria-labelledby="nav-recurring-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                                <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                            </span>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-2 col-sm-2 text-left">
                                <h6 class="ml-1">Status</h6>
                                <div class="mt-2 text-right">
                                    <div class="check"><span class=" ml-3 checkMe">Draft</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-10 mt-4">
                                <table class="table">
                                    <thead>
                                        <tr class="text-left">
                                            <th><input type="checkbox"></th>
                                            <th>FREQUENCY</th>
                                            <th>CUSTOMER</th>
                                            <th>FIRST INVOICE</th>
                                            <th>NEXT</th>
                                            <th>EDITE DATE</th>
                                            <th>AMOUNT</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-left">
                                            <td>No invoices available</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-4 sub-tab" id="doc-offer-inner" style="display: none;">
            <div class="w-100 text-center justify-content-center">
                <!-- Start Button -->
                <div class="">
                    <span class="d-flex justify-content-center">
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New
                        </button>
                        <!-- Nested Button Starts  -->
                        <div class="aa">
                            <button class=" all_btn click_export_btn" id="t">
                                <span class="badge">
                                    <i class="fas fa-cog"></i>
                                </span>Export/Import</button>
                            <div class="drop_export_btn2">
                                <button data-toggle="modal" data-target="#exampleModalOffer">
                                    <span class="badge">
                                        <i class="fas fa-arrow-up mr-2"></i>
                                    </span>Export</button>
                            </div>

                            <!-- Modal One Start -->

                            <div class="modal fade" id="exampleModalOffer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Set export period
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-row">
                                                    <div class="col-md-6 text-left">
                                                        <label for="">From</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <label for="">To</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 mt-3 text-left">
                                                        <span>Export type</span>
                                                        <select name="" id="" class="form-control">
                                                            <option class="form-control" selected value="">Default (a row / document)
                                                            </option>
                                                            <option class="form-control" value="">
                                                                Detail (a row / Item)</option>
                                                            <option class="form-control" value="">
                                                                ZIP archive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m2 all_btn" data-toggle="modal" data-target="#exampleModal2Offer"><span class="badge"><i class="fas fa-clock"></i></span>
                                                Prepare</button>
                                            <button type="button" class="btn btn_m1 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cencel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal One End -->

                            <!-- Modal Tow Start -->
                            <!-- Modal One Start -->

                            <div class="modal  fade" id="exampleModal2Offer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable" style="max-width:900px !important;">
                                    <div class="modal-content m-0" style="width: 900px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Export
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row" id="row_modal">
                                                <p class="ml-3">Select required columns</p>
                                                <form action="" class="d-flex">
                                                    <div class="form-row">
                                                        <div class="px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Number
                                                                        -</b> Document no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_name
                                                                        -</b> Customer.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_number
                                                                        -</b> Customer no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_groups
                                                                        -</b> Groups(separated by
                                                                    cammas)</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Date -</b>
                                                                    Date</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period
                                                                        -</b>
                                                                    Service/delivery</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Due -</b>
                                                                    Due</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_from
                                                                        -</b> Period from</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_to
                                                                        -</b> Period to</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total
                                                                        -</b> Total</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_exclvat
                                                                        -</b> Total excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Total_exclvat_afterdiscount
                                                                        -</b> Total Excel. tax,
                                                                    incl. discount</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat
                                                                        -</b> Total tax</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- second check -->
                                                    <div class="form-row">
                                                        <div class="col-md-12 px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Notes
                                                                        -</b> Notes</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_total
                                                                        -</b> Service total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_exclvat
                                                                        -</b> Service excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Service_vat -</b> Service
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_vat_split
                                                                        -</b> Service tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_total
                                                                        -</b> Product total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_exclvate
                                                                        -</b> Product excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat
                                                                        -</b> Product tax</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat_split
                                                                        -</b> Prodcut tax
                                                                    split</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Rounding_difference
                                                                        -</b> Rounding
                                                                    difference</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat_split
                                                                        -</b> Total tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">currency
                                                                        -</b> currency</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Status
                                                                        -</b> Status</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m3 all_btn" data-toggle="modal" data-target="#exampleModalOffer"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn btn_m5 all_btn" data-toggle="modal" data-target="#exampleModal3Offer"><span class="badge"><i class="fas fa-arrow-circle-right"></i></span>
                                                Next</button>
                                            <button type="button" class="btn btn_m4 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three start  -->
                            <div class="modal fade" id="exampleModal3Offer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " style="max-width: 600px !important;">
                                    <div class="modal-content" style="width: 600px !important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">EXport
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                The requested export has been prepared.
                                                Please select the required export format.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModal2Offer"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                CSV</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                XLSX</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                PDF</button>
                                            <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three end -->
                            <!-- Modal Tow End -->
                        </div>
                        <!-- Nested Button Starts  -->
                        <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                    </span>
                </div>
                <!-- Close Button -->
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">Status</h6>
                        <div class="mt-2 text-right">
                            <div class="check"><span class=" ml-3 checkMe">Draft</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Sent</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Accepted</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Rejected</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Invoice</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 mt-4 col-sm-10">
                        <table class="table showUnite">
                            <thead>
                                <tr class="text-left">
                                    <th><input type="checkbox"></th>
                                    <th>NO. FOR OFFER</th>
                                    <th>CUSTOMER</th>
                                    <th>VALID UNTIL</th>
                                    <th>AMOUNT</th>
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
        <div class="row m-4 sub-tab" id="doc-order-inner" style="display: none;">
            <div class="w-100 text-center justify-content-center">
                <!-- Start Button -->
                <div class="">
                    <span class="d-flex justify-content-center">
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New
                        </button>
                        <!-- Nested Button Starts  -->
                        <div class="aa">
                            <button class=" all_btn click_export_btn" id="t">
                                <span class="badge">
                                    <i class="fas fa-cog"></i>
                                </span>Export / Import</button>
                            <div class="drop_export_btn2">
                                <button data-toggle="modal" data-target="#exampleModalOder">
                                    <span class="badge">
                                        <i class="fas fa-arrow-up mr-2"></i>
                                    </span>Export</button>
                            </div>

                            <!-- Modal One Start -->

                            <div class="modal fade" id="exampleModalOder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Set export period
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-row">
                                                    <div class="col-md-6 text-left">
                                                        <label for="">From</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <label for="">To</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 mt-3 text-left">
                                                        <span>Export type</span>
                                                        <select name="" id="" class="form-control">
                                                            <option class="form-control" selected value="">Default (a row / document)
                                                            </option>
                                                            <option class="form-control" value="">
                                                                Detail (a row / Item)</option>
                                                            <option class="form-control" value="">
                                                                ZIP archive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m2 all_btn" data-toggle="modal" data-target="#exampleModal2Oder"><span class="badge"><i class="fas fa-clock"></i></span>
                                                Prepare</button>
                                            <button type="button" class="btn btn_m1 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cencel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal One End -->

                            <!-- Modal Tow Start -->
                            <!-- Modal One Start -->

                            <div class="modal  fade" id="exampleModal2Oder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable" style="max-width:900px !important;">
                                    <div class="modal-content m-0" style="width: 900px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Export
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row" id="row_modal">
                                                <p class="ml-3">Select required columns</p>
                                                <form action="" class="d-flex">
                                                    <div class="form-row">
                                                        <div class="px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Number
                                                                        -</b> Document no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_name
                                                                        -</b> Customer.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_number
                                                                        -</b> Customer no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_groups
                                                                        -</b> Groups(separated by
                                                                    cammas)</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Date -</b>
                                                                    Date</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period
                                                                        -</b>
                                                                    Service/delivery</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_from
                                                                        -</b> Period from</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_to
                                                                        -</b> Period to</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total
                                                                        -</b> Total</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_exclvat
                                                                        -</b> Total excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Total_exclvat_afterdiscount
                                                                        -</b> Total Excel. tax,
                                                                    incl. discount</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat
                                                                        -</b> Total tax</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- second check -->
                                                    <div class="form-row">
                                                        <div class="col-md-12 px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Notes
                                                                        -</b> Notes</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_total
                                                                        -</b> Service total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_exclvat
                                                                        -</b> Service excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Service_vat -</b> Service
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_vat_split
                                                                        -</b> Service tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_total
                                                                        -</b> Product total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_exclvate
                                                                        -</b> Product excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat
                                                                        -</b> Product tax</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat_split
                                                                        -</b> Prodcut tax
                                                                    split</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Rounding_difference
                                                                        -</b> Rounding
                                                                    difference</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat_split
                                                                        -</b> Total tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">currency
                                                                        -</b> currency</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Status
                                                                        -</b> Status</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m3 all_btn" data-toggle="modal" data-target="#exampleModalOder"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn btn_m5 all_btn" data-toggle="modal" data-target="#exampleModal3Oder"><span class="badge"><i class="fas fa-arrow-circle-right"></i></span>
                                                Next</button>
                                            <button type="button" class="btn btn_m4 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three start  -->
                            <div class="modal fade" id="exampleModal3Oder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " style="max-width: 600px !important;">
                                    <div class="modal-content" style="width: 600px !important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">EXport
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                The requested export has been prepared.
                                                Please select the required export format.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModal2Oder"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                CSV</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                XLSX</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                PDF</button>
                                            <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three end -->
                            <!-- Modal Tow End -->
                        </div>
                        <!-- Nested Button Starts  -->
                        <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                    </span>
                </div>
                <!-- Close Button -->

                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">Status</h6>
                        <div class="mt-2 text-right">
                            <div class="check"><span class=" ml-3 checkMe">Draft</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Sent</span></div>
                            <div class="check"><span class=" ml-3 checkMe">invoice</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 mt-4">
                        <table class="table showUnite">
                            <thead>
                                <tr class="text-left">
                                    <th><input type="checkbox"></th>
                                    <th>ORDER CONF.NO.</th>
                                    <th>CUSTOMER</th>
                                    <th>DATE</th>
                                    <th>AMOUNT</th>
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
        <div class="row m-4 sub-tab" id="doc-delivery-inner" style="display: none;">
            <div class="w-100 text-center justify-content-center">
                <!-- Start Button -->
                <div class="">
                    <span class="d-flex justify-content-center">
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New
                        </button>
                        <!-- Nested Button Starts  -->
                        <div class="aa">
                            <button class=" all_btn click_export_btn" id="t">
                                <span class="badge">
                                    <i class="fas fa-cog"></i>
                                </span>Export/Import</button>
                            <div class="drop_export_btn2">
                                <button data-toggle="modal" data-target="#exampleModalDelivery">
                                    <span class="badge">
                                        <i class="fas fa-arrow-up mr-2"></i>
                                    </span>Export</button>
                            </div>

                            <!-- Modal One Start -->

                            <div class="modal fade" id="exampleModalDelivery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Set export period
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-row">
                                                    <div class="col-md-6 text-left">
                                                        <label for="">From</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-6 text-left">
                                                        <label for="">To</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                    <div class="col-md-12 mt-3 text-left">
                                                        <span>Export type</span>
                                                        <select name="" id="" class="form-control">
                                                            <option class="form-control" selected value="">Default (a row / document)
                                                            </option>
                                                            <option class="form-control" value="">
                                                                Detail (a row / Item)</option>
                                                            <option class="form-control" value="">
                                                                ZIP archive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m2 all_btn" data-toggle="modal" data-target="#exampleModal2Delivery"><span class="badge"><i class="fas fa-clock"></i></span>
                                                Prepare</button>
                                            <button type="button" class="btn btn_m1 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cencel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal One End -->

                            <!-- Modal Tow Start -->
                            <!-- Modal One Start -->

                            <div class="modal  fade" id="exampleModal2Delivery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog  modal-dialog-scrollable" style="max-width:900px !important;">
                                    <div class="modal-content m-0" style="width: 900px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Export
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row" id="row_modal">
                                                <p class="ml-3">Select required columns</p>
                                                <form action="" class="d-flex">
                                                    <div class="form-row">
                                                        <div class="px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Number
                                                                        -</b> Document no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_name
                                                                        -</b> Customer.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_number
                                                                        -</b> Customer no.</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Client_groups
                                                                        -</b> Groups(separated by
                                                                    cammas)</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Date -</b>
                                                                    Date</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period
                                                                        -</b>
                                                                    Service/delivery</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Due -</b>
                                                                    Due</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_from
                                                                        -</b> Period from</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Period_to
                                                                        -</b> Period to</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total
                                                                        -</b> Total</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_exclvat
                                                                        -</b> Total excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Total_exclvat_afterdiscount
                                                                        -</b> Total Excel. tax,
                                                                    incl. discount</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat
                                                                        -</b> Total tax</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- second check -->
                                                    <div class="form-row">
                                                        <div class="col-md-12 px-3 text-left">
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Notes
                                                                        -</b> Notes</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_total
                                                                        -</b> Service total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_exclvat
                                                                        -</b> Service excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">
                                                                        Service_vat -</b> Service
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Service_vat_split
                                                                        -</b> Service tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_total
                                                                        -</b> Product total</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_exclvate
                                                                        -</b> Product excl.
                                                                    tax</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat
                                                                        -</b> Product tax</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Product_vat_split
                                                                        -</b> Prodcut tax
                                                                    split</label>
                                                            </div>

                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Rounding_difference
                                                                        -</b> Rounding
                                                                    difference</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Total_vat_split
                                                                        -</b> Total tax
                                                                    split</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">currency
                                                                        -</b> currency</label>
                                                            </div>
                                                            <div class="">
                                                                <input type="checkbox">
                                                                <label for=""><b class="text-dark">Status
                                                                        -</b> Status</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m3 all_btn" data-toggle="modal" data-target="#exampleModalDelivery"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn btn_m5 all_btn" data-toggle="modal" data-target="#exampleModal3Delivery"><span class="badge"><i class="fas fa-arrow-circle-right"></i></span>
                                                Next</button>
                                            <button type="button" class="btn btn_m4 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three start  -->
                            <div class="modal fade" id="exampleModal3Delivery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog " style="max-width: 600px !important;">
                                    <div class="modal-content" style="width: 600px !important;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">EXport
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                The requested export has been prepared.
                                                Please select the required export format.
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModal2Delivery"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                Back</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                CSV</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                XLSX</button>
                                            <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                PDF</button>
                                            <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                Cancel</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal three end -->
                            <!-- Modal Tow End -->
                        </div>
                        <!-- Nested Button Starts  -->
                        <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                    </span>
                </div>
                <!-- Close Button -->

                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">Status</h6>
                        <div class="mt-2 text-right">
                            <div class="check"><span class=" ml-3 checkMe">Draft</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Sent</span></div>
                            <div class="check"><span class=" ml-3 checkMe">invoice</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 col-sm-10 mt-4">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th><input type="checkbox"></th>
                                    <th>DELIVERY NOTE NO.</th>
                                    <th>CUSTOMER</th>
                                    <th>DELIVERY DATE</th>
                                    <th>AMOUNT</th>
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
function ReceivableCatalogue()
{
?>
    <div class="container content-tab" id="receivable-catalogue" style="display: none;">
        <div class="row m-4 sub-tab" id="receivable-service-inner" style="display: block;">
            <div class="w-100 text-center justify-content-center">
                <nav>
                    <div class="nav text-center justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-services-tab" data-toggle="tab" href="#nav-services" role="tab" aria-controls="nav-services" aria-selected="true">Services</a>
                        <a class="nav-link" id="nav-categories-tab" data-toggle="tab" href="#nav-categories" role="tab" aria-controls="nav-categories" aria-selected="false">Categories</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab">
                        <!-- Start Button -->
                        <div class="">
                            <span class="d-flex justify-content-center">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New
                                </button>
                                <!-- Nested Button Starts  -->
                                <div class="aa">
                                    <button class=" all_btn click_export_btn" id="t">
                                        <span class="badge">
                                            <i class="fas fa-cog"></i>
                                        </span>Import/Export</button>
                                    <div class="drop_export_btn">
                                        <button>
                                            <span class="badge">
                                                <i class="fas fa-arrow-up mr-2"></i>
                                            </span>Export</button>
                                        <button class="btn-sm" data-toggle="modal" data-target="#exampleModalService">
                                            <span class="badge">
                                                <i class="fas fa-arrow-down"></i>
                                            </span> Export</button>
                                    </div>


                                    <!-- Catalogue modal start -->
                                    <div class="modal fade" id="exampleModalService" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <h6 class="text-left mb-4">Select required coloumns</h6>
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Number</b>- Item</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Name</b>- Name</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Description</b>- description</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Price</b>- price</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Unit</b>- unit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Vat</b>- VAt/turnover tax</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Category</b>- category</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Inc_vat</b>- Price incl/excl</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Def_amount</b>- def tamount</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Notes</b>- Notes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn all_btn  btn_m8" style="margin-bottom: -1px !important;" data-toggle="modal" data-target="#exampleModalSerExport"><span class="badge"><i class="fas fa-arrow-right"></i></span> Next</button>
                                                    <button type="button" class="btn all_btn  btn_m9" style="margin-bottom: -1px !important;" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CAtalogye modal end -->

                                    <!-- catalogue modal 2 start -->
                                    <div class="modal fade" id="exampleModalSerExport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog " style="max-width: 600px !important;">
                                            <div class="modal-content" style="width: 600px !important;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">EXport
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        The requested export has been prepared.
                                                        Please select the required export format.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModalService"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                        Back</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        CSV</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        XLSX</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        PDF</button>
                                                    <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                        Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- catalogue modal2 end -->



                                </div>
                                <!-- Nested Button Starts  -->
                                <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                            </span>
                        </div>
                        <!-- Close Button -->
                        <div class="col-md-12 col-lg-12 mt-4 col-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th><input type="checkbox"></th>
                                        <th>ITEM NO</th>
                                        <th>NAME</th>
                                        <th>CATEGORY</th>
                                        <th>PRICE</th>
                                        <th>UNIT</th>
                                        <th>VAT</th>
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
                    <div class="tab-pane fade" id="nav-categories" role="tabpanel" aria-labelledby="nav-categories-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 c ol-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th><input type="checkbox"></th>
                                        <th>CATEGORY</th>
                                        <th>NO.USES</th>
                                        <th>UNIT</th>
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
        <div class="row m-4 sub-tab" id="receivable-product-inner" style="display: none;">
            <div class="w-100 text-center justify-content-center">
                <nav>
                    <div class="nav  text-center justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-product" aria-selected="true">Product</a>
                        <a class="nav-link" id="nav-categ-tab" data-toggle="tab" href="#nav-categ" role="tab" aria-controls="nav-categ" aria-selected="false">Categories</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                        <div class="">
                            <span class="d-flex justify-content-center">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New
                                </button>
                                <!-- Nested Button Starts  -->
                                <div class="aa">
                                    <button class=" all_btn click_export_btn" id="t">
                                        <span class="badge">
                                            <i class="fas fa-cog"></i>
                                        </span>Import/Export
                                    </button>
                                    <div class="drop_export_btn">
                                        <button>
                                            <span class="badge">
                                                <i class="fas fa-arrow-up mr-2"></i>
                                            </span>Export</button>
                                        <button class="btn-sm" data-toggle="modal" data-target="#exampleModalProduct">
                                            <span class="badge">
                                                <i class="fas fa-arrow-down"></i>
                                            </span> Export
                                        </button>
                                    </div>


                                    <!-- Catalogue modal start -->
                                    <div class="modal fade" id="exampleModalProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <h6 class="text-left mb-4">Select required coloumns</h6>
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Number</b>- Item</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Name</b>- Name</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Description</b>- description</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Price</b>- price</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Unit</b>- unit</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Vat</b>- VAt/turnover tax</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Category</b>- category</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Inc_vat</b>- Price incl/excl</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Def_amount</b>- def tamount</label>
                                                                </div>
                                                                <div class="">
                                                                    <input type="checkbox" class="">
                                                                    <label for=""><b>Notes</b>- Notes</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn all_btn  btn_m8" style="margin-bottom: -1px !important;" data-toggle="modal" data-target="#exampleModalProductExport"><span class="badge"><i class="fas fa-arrow-right"></i></span> Next</button>
                                                    <button type="button" class="btn all_btn  btn_m9" style="margin-bottom: -1px !important;" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- CAtalogye modal end -->

                                    <!-- catalogue modal 2 start -->
                                    <div class="modal fade" id="exampleModalProductExport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog " style="max-width: 600px !important;">
                                            <div class="modal-content" style="width: 600px !important;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">EXport
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        The requested export has been prepared.
                                                        Please select the required export format.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn_m6 all_btn" data-toggle="modal" data-target="#exampleModalProduct"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                                        Back</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        CSV</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        XLSX</button>
                                                    <button type="button" class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                                        PDF</button>
                                                    <button type="button" class="btn btn_m7 all_btn" data-dismiss="modal"><span class="badge"><i class="fas fa-ban"></i></span>
                                                        Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- catalogue modal2 end -->



                                </div>
                                <!-- Nested Button Starts  -->
                                <button class="btn all_btn"><span><i class="fas fa-wrench"></i></span></button>
                            </span>
                        </div>

                        <div class="col-md-12 col-lg-12 mt-4 col-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th><input type="checkbox"></th>
                                        <th>ITEM NO.</th>
                                        <th>NAME</th>
                                        <th>CATEGORY</th>
                                        <th>PRICE</th>
                                        <th>UNIT</th>
                                        <th>VAT</th>
                                        <th>AVAILABLE</th>
                                        <th>RESERVED</th>
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
                    <div class="tab-pane fade" id="nav-categ" role="tabpanel" aria-labelledby="nav-categ-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 c ol-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th><input type="checkbox"></th>
                                        <th>CATEGORY</th>
                                        <th>NO. USES</th>
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
    </div>
<?php
}
function ReceivableMailing()
{
?>
    <div class="container content-tab" id="receivable-mailling" style="display:none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <nav>
                    <div class="nav text-center mb-3 justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class=" active" style="width: 100px;" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="true">E-mail</a>
                        <a class="" style="width: 100px;" id="nav-post-tab" data-toggle="tab" href="#nav-post" role="tab" aria-controls="nav-post" aria-selected="false">Post</a>
                        <a class="" style="width: 100px;" id="nav-e-bill-tab" data-toggle="tab" href="#nav-e-bill" role="tab" aria-controls="nav-e-bill" aria-selected="false">E-bill</a>
                        <a class="" id="nav-debt-tab" data-toggle="tab" href="#nav-debt" role="tab" aria-controls="nav-debt" aria-selected="false">Debt collection</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 c ol-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th>DOCUMENT</th>
                                        <th>RECIPIENTS</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No documents have been sent yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-post" role="tabpanel" aria-labelledby="nav-post-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 mt col-sm-12">
                            <table class="table showUnite">
                                <thead>
                                    <tr class="text-left">
                                        <th>DOCUMENT</th>
                                        <th>SHIPPING OPTION</th>
                                        <th>COSTS</th>
                                        <th>RECIPIENTS</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No documents have been sent yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-e-bill" role="tabpanel" aria-labelledby="nav-e-bill-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 c ol-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th>DOCUMENT</th>
                                        <th>RECIPIENTS</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No documents have been sent yet</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-debt" role="tabpanel" aria-labelledby="nav-debt-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                            </span>
                        </div>
                        <div class="col-md-12 col-lg-12 c ol-sm-12">
                            <table class="table">
                                <thead>
                                    <tr class="text-left">
                                        <th>DOCUMENT</th>
                                        <th>SHIPPING OPTION</th>
                                        <th>COSTS</th>
                                        <th>RECIPIENTS</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-left">
                                        <td>No documents have been sent yet</td>
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
function ReceivableStatistics()
{
?>
    <div class="containe content-tab" id="receivable-statitics" style="display: none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <nav>
                    <div class="nav text-center justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class=" active" id="nav-turnover-tab" data-toggle="tab" href="#nav-turnover" role="tab" aria-controls="nav-turnover" aria-selected="true" style="width: 200px;">Turnover Statistics</a>
                        <a class="" id="nav-customer-tab" data-toggle="tab" href="#nav-customer" role="tab" style="width: 200px;" aria-controls="nav-customer" aria-selected="false">Customer
                            Statitics</a>
                        <a class="" id="nav-item-tab" data-toggle="tab" href="#nav-item" role="tab" aria-controls="nav-item" aria-selected="false">Item Statitics</a>
                    </div>
                </nav>
                <div class="tab-content justify-content-center text-center " id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-turnover" role="tabpanel" aria-labelledby="nav-turnover-tab">
                        <div class="m-4">
                            <span class="static_btn">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-calendar"></i></span>
                                    Period</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-image"></i></span>
                                    Bars</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-file-download"></i></span>
                                    Export</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-print"></i></span>
                                </button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
                                </button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-left"></i></span>
                                    Past</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-right"></i></span>
                                    Future</button>

                            </span>
                        </div>
                        <div class="d-flex w-100 justify-content-center mb-4 ">
                            <div class="d-flex row justify-content-center">
                                <label class="fiLterCheck">
                                    <span class="label-text">Invoices</span>
                                    <input type="checkbox">
                                    <span class="checkM"></span>
                                </label>
                                <label class="fiLterCheck">
                                    <span class="label-text">Recurring invoices</span>
                                    <input type="checkbox">
                                    <span class="checkM"></span>
                                </label>
                                <label class="fiLterCheck">
                                    <span class="label-text">Offer</span>
                                    <input type="checkbox">
                                    <span class="checkM"></span>
                                </label>
                                <label class="fiLterCheck">
                                    <span class="label-text">Delviery notes</span>
                                    <input type="checkbox">
                                    <span class="checkM"></span>
                                </label>
                                <label class="fiLterCheck">
                                    <span class="label-text">Order confirmation</span>
                                    <input type="checkbox">
                                    <span class="checkM"></span>
                                </label>
                            </div>
                        </div>
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab">
                        <div class="">
                            <span class="static_btn2">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-calendar"></i></span>
                                    Period</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-image"></i></span>
                                    Bars</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-down"></i></span>
                                    Alphabetical</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-print"></i></span>
                                </button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
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
                    </div>
                    <div class="tab-pane fade" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab">
                        <div class="">
                            <span class="static_btn3">
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-calendar"></i></span>
                                    Period</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-image"></i></span>
                                    Bars</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-down"></i></span>
                                    Alphabetical</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-bars  "></i></span>
                                    Services</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-print"></i></span>
                                </button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-download"></i></span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
function ReceivableData()
{
?>

    <div class="container content-tab" id="receivable-data" style="display:none;">
        <div class="row  m-4 sub-tab" id="receivable-import-inner" style="display: none;">
            <div class="w-100 justify-content-center text-center">
                <nav>
                    <div class="nav  justify-content-center nav-Tabboing_tab text-center" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-product-tb" data-toggle="tab" href="#nav-productTb" role="tab" aria-controls="nav-productTb" aria-selected="true">Products</a>
                        <a class="nav-link" id="nav-services-tb" data-toggle="tab" href="#nav-serve-tb" role="tab" aria-controls="nav-serve-tb" aria-selected="false">Services</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-productTb" role="tabpanel" aria-labelledby="nav-product-tb">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-up"></i></span>
                                    Export / Import</button>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FILE</th>
                                        <th>ROWS</th>
                                        <th>ADDED</th>
                                        <th>UPDATED</th>
                                        <th>STATUS</th>
                                        <th>CREATED</th>
                                        <th>COMPLETED</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-serve-tb" role="tabpanel" aria-labelledby="nav-services-tb">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-up"></i></span>
                                    Export / Import</button>
                            </span>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FILE</th>
                                        <th>ROWS</th>
                                        <th>ADDED</th>
                                        <th>UPDATED</th>
                                        <th>STATUS</th>
                                        <th>CREATED</th>
                                        <th>COMPLETED</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-4 sub-tab" id="receivable-export-inner" style="display: block;">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-down"></i></span>
                            Generated</button>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">Status</h6>
                        <div class="mt-2 text-right">
                            <div class="check"><span class=" ml-3 checkMe">Queue</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Inprocessing</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Archived</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Error</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Completed</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 c ol-sm-10">
                        <table class="table">
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
        <div class="row m-4 sub-tab" id="receivable-bankstatement-inner" style="display: none;">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-up"></i></span>
                            Upload file</button>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1">STATUS</h6>
                        <div class="mt-2">
                            <div class="check"><span class=" ml-3 checkMe">Assigned</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Not assigned</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Duplicate</span></div>
                            <div class="check"><span class=" ml-3 checkMe">Ignored</span></div>
                        </div>
                        <h6 class="ml-1 mt-2">TIMELINE</h6>
                        <div class="mt-2">
                            <div class="check"><span class=" ml-3 checkMe">Everything</span></div>
                            <div class="check"><span class=" ml-3 checkMe">2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">June 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">May 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">April 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">March 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">February 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">January 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">2021</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 c ol-sm-10">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th><input type="checkbox"></th>
                                    <th>ACCOUNT</th>
                                    <th>DATE</th>
                                    <th>AMOUNT</th>
                                    <th>CURRENCY</th>
                                    <th>ADDITOIONAL INFORMATION</th>
                                    <th>STATUS</th>
                                    <th>INVOICE</th>
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
function ReceivableConfiguration()
{
?>

    <div class="container content-tab" id="receivable-configuration" style="display: none;">
        <div class="row m-4 sub-tab" id="receivable-layout-inner" style="display: block;">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New</button>
                    </span>
                </div>
                <div class="mt-2">
                    <img src="document.png" class="img-fluid table-bordered" alt="">
                    <h5 class="mt-3">Default layout</h5>
                </div>
            </div>
        </div>
        <div class="row m-4 sub-tab" id="receivable-software-inner" style="display: none;">
            <div class="w-100 justify-content-center" style="display: block;">
                <nav>
                    <div class="nav justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class=" active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                        <a class="mb-3" id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="false">Inpayment slips</a>
                        <a class="mb-3" id="nav-Smtp-tab" data-toggle="tab" href="#nav-Smtp" role="tab" aria-controls="nav-Smtp" aria-selected="false">SMTP</a>
                        <a class="mb-3" id="nav-units-tab" data-toggle="tab" href="#nav-units" role="tab" aria-controls="nav-units" aria-selected="false">Units</a>
                        <a class="mb-3" id="nav-workflow-tab" data-toggle="tab" href="#nav-workflow" role="tab" aria-controls="nav-workflow" aria-selected="false"> Workflow</a>
                    </div>
                </nav>
                <div class="tab-content justify-content-center text-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <button class="btn all_btn " id="edit2"><span class="badge">
                                        <i class="fas fa-pen"></i></span> Edite</button>
                                <button class="btn all_btn " id="btn_save_edit2" style="display: none;"><span class="badge"><i class="fas fa-save"></i></span> Save</button>
                            </div>
                            <div class="row">
                                <form class="confi_form text-center">
                                    <div class="justify-content-center  mb-2 form-row">
                                        <h3>GENERAL SETTINGS</h3>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Round amount to 0.05</span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Invoice</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>10002</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <label>Normal payment deadline for invoices</label>
                                            <div>30 days</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Offer</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>10000</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <label>Normal validity of offer</label>
                                            <div>10 days</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Oder conf.</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>10000</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <label>Document default language</label>
                                            <input type="text" class="form-control" disabled placeholder="Germen" id="">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Delviery note</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>10000</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <label>Default VAT</label>
                                            <input type="text" class="form-control" disabled placeholder="7.7%" id="">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Catalogue</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>100</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <label>Standard prices VAT</label>
                                            <input type="text" class="form-control" disabled placeholder="Excl. VAT" id="">
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <label>Customer</label>
                                            <div>{N}</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4">
                                            <span>No.</span>
                                            <div>1002</div>
                                        </div>
                                        <div class="form-group col-md-2 col-sm-4  text-left">
                                            <span>Reset</span>
                                            <input type="text" class="form-control" disabled placeholder="Never" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>Stock-relevant document type</label>
                                            <input type="text" class="form-control" disabled placeholder="Invoice" id="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 text-left">
                                            <label class="font-weight-bold">Note on templates and
                                                numberings:</label>
                                            <div>Any combination of free text and placeholders can be used
                                                in the template, e.g. 'K-{N}'.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>Accounting</label>
                                            <input type="text" class="form-control" disabled placeholder="Schweiz" id="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 text-left">
                                            <label class="font-weight-bold">Available placeholders
                                                are:</label>
                                            <div>{N} - Continuous numbering
                                                {YYYY} - Current year, e.g. 2022
                                                {YY} - Current year, e.g. 22
                                                {MM} - Current month, e.g. 04
                                                {M} - Current month, e.g. 4
                                                {DD} - Current day, e.g. 03
                                                {D} - Current day, e.g. 3</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>Standard currency for new documents</label>
                                            <input type="text" class="form-control" disabled placeholder="CHF" id="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>When creating documents</label>
                                            <input type="text" class="form-control" disabled placeholder="Add empty product..." id="">
                                        </div>

                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <span>Incremental sub-total</span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4 text-left">
                                            <span>CSV exports in UTF-8</span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center m-2">
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>Default sender for e-mail</label>
                                            <input type="text" class="form-control" disabled placeholder="abc (no-reply@smallinvoice.com..." id="">
                                        </div>
                                        <div class="form-group col-md-4 col-sm-4  text-left">
                                            <label>When creating documents</label>
                                            <input type="text" class="form-control" disabled placeholder="Add empty product..." id="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div class="col-md-6 col-sm-6 text-center">
                                            <span>Copy to me when sending documents by e-mail</span>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="form-group justify-content-center text-center mt-4">
                                            <input type="submit" value="submit" class="form-control all_btn" disabled id="confi_sub">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
                        <div class="">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                        </div>
                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TYPE</th>
                                        <th>SWISS POST SUBSCRIBER NUMBER</th>
                                        <th>RECIPIENTS</th>
                                        <th>DELIVERY NUMBER/IBAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Smtp" role="tabpanel" aria-labelledby="nav-Smtp-tab">
                        <div>
                            <div class="">
                                <button class="btn all_btn " id="edit3">
                                    <span class="badge"><i class="fas fa-pen"></i></span> Edite</button>
                                <button class="btn all_btn " id="btn_save_edit3" style="display: none;"><span class="badge"><i class="fas fa-save"></i></span> Save</button>
                            </div>
                            <form action="" class="smtp_form d-flex col-md-12">
                                <div class="form-row justify-content-center">
                                    <div class="col-md-5 m-1">
                                        OWN SMTP SERVER FOR DOCUMENT MAILING
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <span>OWN SMTP SERVER FOR DOCUMENT MAILING</span>
                                    </div>
                                    <div class="col-md-5 m-1 ">
                                        <span>CSV exports in UTF-8</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" disabled type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" disabled type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <h6>Google-Mail (Gmail):</h6>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="Server" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <p>Server: smtp.gmail.com
                                            Port: 465
                                            SSL: SSL
                                            Username: your@email.com
                                            Password: Your password</p>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="Port" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <p>Important: If you use Office365 please note the following FAQ
                                            article.
                                        </p>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="SMTP auth user" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <p>Important: If you use Google Mail (Gmail) please note the
                                            following FAQ
                                            article.</p>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="password" disabled placeholder="SMTP auth password" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <p>Help with configuration required? Simply send an e-mail to
                                            Support. We
                                            would be happy to help.</p>
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="email" disabled placeholder="Sender e-mail" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="Sender Name" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="Replies to e-mail" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1">
                                        <input type="text" disabled placeholder="Replies to names" class="form-control">
                                    </div>
                                    <div class="col-md-5 m-1 mt-3">
                                        <label for="">Ready to confirmation</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" disabled type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" disabled type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane  fade" id="nav-units" role="tabpanel" aria-labelledby="nav-units-tab">
                        <div class="mb-3">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-left mt-5 mb-3">
                                <h1 class="text-dark">ITEM TYPE</h1>
                                <div class="check1 mt-5"><span class=" ml-3 checkMe">Services</span></div>
                                <div class="check1"><span class=" ml-3 checkMe">Prodcut</span></div>
                            </div>
                            <div class="col-md-8 mt-5">
                                <table class="table showUnite">
                                    <thead>
                                        <tr>
                                            <th>NUMBER</th>
                                            <th>UNIT</th>
                                            <th>DISPLAY FOR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>14</td>
                                            <td>-</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>Credit</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Day</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Flat</td>
                                            <td>Services</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Hour</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Km</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>Metres</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>Minutes</td>
                                            <td>All</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Month</td>
                                            <td>Services</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Quarter</td>
                                            <td>Services</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Semester</td>
                                            <td>Services</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Year</td>
                                            <td>Services</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-workflow" role="tabpanel" aria-labelledby="nav-workflow-tab">
                        <div class="mb-3">
                            <button class="btn all_btn" id="edit4"><span class="badge">
                                    <i class="fas fa-pen"></i></span> Edite</button>
                            <button class="btn all_btn" id="btn_save_edit4" style="display: none;"><span><i class="fas fa-save"></i></span> Save</button>
                        </div>
                        <div>
                            <form action="" class="d-flex workflow_form">
                                <div class="form-row col-md-12 justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6 pytm_workflow">
                                        <label for="">PAYMENT REM</label>
                                        <div>
                                            <div for="" class="text-left">Active</div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <label>Days after due date</label>
                                            <input disabled type="text" class="form-control border_workflow" placeholder="0">
                                        </div>
                                        <div class="text-left mb-5">
                                            <label for="">Action</label>
                                            <select name="" disabled id="" class="form-control border_workflow">
                                                <option value="" selected>Remind me</option>
                                                <option value=""> By e-mail to customers</option>
                                                <option value=""> By post to customers</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 pytm_workflow">
                                        <label for="">1ST REMINDER</label>
                                        <div>
                                            <div for="" class="text-left">Active</div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <label>Days after due date</label>
                                            <input disabled type="text" class="form-control border_workflow" placeholder="4">
                                        </div>
                                        <div class="text-left mb-5">
                                            <label for="">Action</label>
                                            <select name="" disabled id="" class="form-control border_workflow">
                                                <option value="" selected>Remind me</option>
                                                <option value=""> By e-mail to customers</option>
                                                <option value=""> By post to customers</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 pytm_workflow">
                                        <label for="">2ND REMINDER</label>
                                        <div>
                                            <div for="" class="text-left">Active</div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <label>Days after due date</label>
                                            <input disabled type="text" class="form-control border_workflow" placeholder="10">
                                        </div>
                                        <div class="text-left mb-5">
                                            <label for="">Action</label>
                                            <select name="" disabled id="" class="form-control border_workflow">
                                                <option value="" selected>Remind me</option>
                                                <option value=""> By e-mail to customers</option>
                                                <option value=""> By post to customers</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 pytm_workflow">
                                        <label for="">3RD REMINDER</label>
                                        <div>
                                            <div for="" class="text-left">Active</div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input disabled class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                        </div>
                                        <div class="text-left">
                                            <label>Days after due date</label>
                                            <input disabled type="text" class="form-control border_workflow" placeholder="15">
                                        </div>
                                        <div class="text-left mb-5">
                                            <label for="">Action</label>
                                            <select name="" disabled id="" class="form-control border_workflow">
                                                <option value="" selected>Remind me</option>
                                                <option value=""> By e-mail to customers</option>
                                                <option value=""> By post to customers</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-4 sub-tab" id="txt-and-templates" style="display: none;">
            <div class="w-100 justify-content-center">
                <nav class="w-100">
                    <div class="nav justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-text_book-home" data-toggle="tab" href="#nav-txt-book" role="tab" aria-controls="nav-txt-book" aria-selected="true">Text blocks</a>
                        <a class="nav-link" style="width: 200px;" id="nav-free_tempates-tab" data-toggle="tab" href="#nav-free-tmpl" role="tab" aria-controls="nav-free-tmpl" aria-selected="false">Free text templates</a>
                        <a class="nav-link" id="nav-signature" data-toggle="tab" href="#nav-sign" role="tab" aria-controls="nav-sign" aria-selected="false">Signature</a>
                        <a class="nav-link" id="nav-documents" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="false">Documents</a>
                        <a class="nav-link" id="nav-custome" data-toggle="tab" href="#nav-cus" role="tab" aria-controls="nav-cus" aria-selected="false">Custom fields</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-txt-book" role="tabpanel" aria-labelledby="nav-text_book-home">
                        <div class="w-100 justify-content-center text-center">
                            <span>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </span>
                            <div class="d-flex w-100 mt-4">
                                <div class="col-md-2">
                                    <div class="mt-2 text-left">
                                        <h5 class="m-1">DOCUMENT</h5>
                                        <div class="check"><span class=" ml-3 checkAct">Invoices</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkAct">Offers</span></div>
                                        <div class="check"><span class=" ml-3 checkAct">Delivery
                                                notes</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkAct">Order
                                                confirmation</span></div>
                                    </div>
                                    <div class="mt-2 text-left">
                                        <h5 class="m-1">TYPE</h5>
                                        <div class="check2"><span class=" ml-3 checkActUn">Document</span>
                                        </div>
                                        <div class="check2  "><span class=" ml-3 checkActUn">E-mail</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <table class="table showUnite">
                                        <thead>
                                            <tr>
                                                <th>USE</th>
                                                <th>STATUS</th>
                                                <th>LANGUAGE</th>
                                                <th>TEXT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>No results found</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-free-tmpl" role="tabpanel" aria-labelledby="nav-free_tempates-tab">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <span>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                </span>
                            </div>
                            <table class="table mt-4 showUnite">
                                <thead>
                                    <tr>
                                        <th>TEXT</th>
                                        <th>X</th>
                                        <th>Y</th>
                                        <th>SIZE</th>
                                        <th>PAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-sign" role="tabpanel" aria-labelledby="nav-signature">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <span>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-up"></i></span>
                                        Upload</button>
                                </span>
                            </div>
                            <table class="table mt-4 showUnite">
                                <thead>
                                    <tr>
                                        <th>TEXT</th>
                                        <th>X</th>
                                        <th>Y</th>
                                        <th>SIZE</th>
                                        <th>PAGE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-doc" role="tabpanel" aria-labelledby="nav-documents">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <span>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                </span>
                            </div>
                            <table class="table mt-4 showUnite">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>NAME</th>
                                        <th>TYPE</th>
                                        <th>SIZE</th>
                                        <th>CREATED</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-cus" role="tabpanel" aria-labelledby="nav-custome">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <span>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-circle-up"></i></span>
                                        Upload</button>
                                </span>
                            </div>
                            <table class="table mt-4 showUnite">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox"></th>
                                        <th>NAME</th>
                                        <th>TYPE</th>
                                        <th>KEY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No results found</td>
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