<?php

function PayableDashbaord()
{
?>
    <div class="container content-tab" id="payable-dashboard" style="display:none;">
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

function PayableCost()
{
?>
    <div class="container content-tab" id="payable-cost" style="display: none;">
        <div class="row m-4 justify-content-center">
            <div class="w-100  justify-content-center text-center">
                <nav>
                    <div class="nav justify-content-center nav-Tabboing_tab" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-cost-tab" data-toggle="tab" href="#nav-cost" role="tab" aria-controls="nav-cost" aria-selected="true">Home</a>
                        <a class="nav-link" id="nav-draft-tab" data-toggle="tab" href="#nav-recurring-cost" role="tab" aria-controls="nav-recurring-cost" aria-selected="false">Profile</a>
                        <a class="nav-link" id="nav-recurring-cost-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    </div>
                </nav>
                <div class="tab-content justify-content-center text-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-cost" role="tabpanel" aria-labelledby="nav-cost-tab">
                        <div class="w-100 justify-content-center text-center">
                            <div class="">
                                <span>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New with PDF</button>
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-shopping-cart"></i></span>
                                        Pay open costs</button>
                                    <button class="btn all_btn w-auto"><span class="badge"><i class="fas fa-cog"></i></span>
                                    </button>

                                </span>
                            </div>
                            <div class="d-flex">
                                <div class="col-md-2 col-sm-2 text-left">
                                    <h6 class="ml-1">STATUS</h6>
                                    <div class="mt-2">
                                        <div class="check"><span class=" ml-3 checkMe">Open</span></div>
                                        <div class="check"><span class=" ml-3 checkMe">Pending</span></div>
                                        <div class="check"><span class=" ml-3 checkMe">Paid</span></div>
                                        <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                                    </div>
                                    <h6 class="ml-1 mt-2">TIMELINE</h6>
                                    <div class="mt-2">
                                        <div class="check"><span class=" ml-3 checkMe">Everything</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">2022</span></div>
                                        <div class="check"><span class=" ml-3 checkMe">June 2022</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">May 2022</span></div>
                                        <div class="check"><span class=" ml-3 checkMe">April 2022</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">March 2022</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">February 2022</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">January 2022</span>
                                        </div>
                                        <div class="check"><span class=" ml-3 checkMe">2021</span></div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-lg-10 c ol-sm-10">
                                    <table class="table showUnite">
                                        <thead>
                                            <tr class="text-left">
                                                <th><input type="checkbox"></th>
                                                <th>NUMBER</th>
                                                <th>CREDITOR</th>
                                                <th>DATE</th>
                                                <th>DUE DATE</th>
                                                <th>CURRENCY</th>
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
                    <div class="tab-pane fade" id="nav-recurring-cost" role="tabpanel" aria-labelledby="nav-draft-tab">
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
                                        <th><input type="checkbox"></th>
                                        <th>COST NO.</th>
                                        <th>UPLOADED</th>
                                        <th>USER</th>
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
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-recurring-cost-tab">
                        <div class="">
                            <button class="btn all_btn"><span class="badge">
                                    <i class="fas fa-sync-alt"></i></span> Update</button>
                            <button class="btn all_btn" span class="badge"><i class="fas fa-plus"></i></span> New</button>

                        </div>
                        <div class="d-flex">
                            <div class="col-md-2 col-sm-2 text-left">
                                <h6 class="ml-1">Status</h6>
                                <div class="mt-2 text-right">
                                    <div class="check"><span class=" ml-3 checkMe">Active</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Inactive</span></div>
                                    <div class="check"><span class=" ml-3 checkMe">Deleted</span></div>
                                </div>
                            </div>
                            <div class="col-md-10 col-lg-10 col-sm-10">
                                <table class="table showUnite dataTable no-footer">
                                    <thead>
                                        <tr class="text-left">
                                            <th><input type="checkbox"></th>
                                            <th>PERIODICITY CREDITOR</th>
                                            <th>FIRST EXECUTION</th>
                                            <th>NEXT EXECUTION</th>
                                            <th>LAST EXECUTION</th>
                                            <th>CURRENCY AMOUNT STATUS</th>
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
    </div>

<?php
}

?>
<?php

function PayableCreditors()
{
?>
    <div class="container content-tab" id="payable-creditiors" style="display:none;">
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
                            <div class="check"><span class=" ml-3 checkMe">Everything</span></div>
                            <div class="check"><span class=" ml-3 checkMe">2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">June 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">May 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">April 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">March 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">February 2022</span>
                            </div>
                            <div class="check"><span class=" ml-3 checkMe">January 2022</span></div>
                            <div class="check"><span class=" ml-3 checkMe">2021</span></div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-10 c ol-sm-10">
                        <table class="table showUnite dataTable no-footer">
                            <thead>
                                <tr class="text-left">
                                    <th>NUMBER</th>
                                    <th>ADDRESS</th>
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
function PaybaleCatagories()
{
?>
    <div class="container content-tab" id="payable-Categories" style="display: none;">
        <div class="row m-4">
            <div class="w-100 justify-content-center text-center">
                <div class="">
                    <span>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn"><span class="badge"><i class="fas fa-plus"></i></span>
                            New</button>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="col-md-2 col-sm-2 text-left">
                        <h6 class="ml-1 mt-2">STATUS</h6>
                        <div class="mt-2">
                            <div class="check1"><span class=" ml-3 checkMe">Active</span></div>
                            <div class="check1"><span class=" ml-3 checkMe">Inactive</span></div>
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
                        <table class="table showUnite dataTable no-footer">
                            <thead>
                                <tr class="text-left">
                                    <th><input type="checkbox"></th>
                                    <th>NAME</th>
                                    <th>LAST USED</th>
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
function PayableData()
{
?>
    <div class="container content-tab" id="payable-data" style="display: none;">
        <div class="row m-4 sub-tab" id="pay-export-innner" style="display: block;">
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
                            <div class="check"><span class=" ml-3 checkMe">In processing</span></div>
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
        <div class="row m-4 sub-tab justify-content-center text-center" id="pay-statment-innner" style="display:none">
            <nav>
                <div class="nav nav-Tabboing_tab" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-transaction-tab" data-toggle="tab" href="#nav-transaction" role="tab" aria-controls="nav-transaction" aria-selected="true">Transaction</a>
                    <a class="nav-item nav-link" id="nav-statements-tab" data-toggle="tab" href="#nav-statements" role="tab" aria-controls="nav-statements" aria-selected="false">Statements</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-transaction" role="tabpanel" aria-labelledby="nav-transaction-tab">
                    <div class="">
                        <span>
                            <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                Update</button>
                            <button class="btn all_btn"><span class="badge"><i class="fas fa-arrow-up"></i></span>
                                Upload file</button>
                        </span>
                    </div>
                    <div class="d-flex">
                        <div class="col-md-2 col-sm-2 text-left">
                            <h6 class="ml-1">STATUS</h6>
                            <div class="mt-2">
                                <div class="check"><span class=" ml-3 checkMe">Assigned</span></div>
                                <div class="check"><span class=" ml-3 checkMe">Not Assigned</span></div>
                                <div class="check"><span class=" ml-3 checkMe">Duplicate</span></div>
                                <div class="check"><span class=" ml-3 checkMe">Ignored</span></div>
                            </div>
                            <h6 class="ml-1 mt-2">TIMELINE</h6>
                            <div class="mt-2">
                                <div class="check"><span class=" ml-3 checkMe">Everything</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">2022</span></div>
                                <div class="check"><span class=" ml-3 checkMe">June 2022</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">May 2022</span></div>
                                <div class="check"><span class=" ml-3 checkMe">April 2022</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">March 2022</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">February 2022</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">January 2022</span>
                                </div>
                                <div class="check"><span class=" ml-3 checkMe">2021</span></div>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-10 col-sm-10">
                            <table class="table showUnite">
                                <thead>
                                    <tr class="text-left">
                                        <th><input type="checkbox"></th>
                                        <th>ACCOUNT</th>
                                        <th>DATE</th>
                                        <th>AMOUNT</th>
                                        <th>CURRENCY</th>
                                        <th>ADDITIONAL INFORMATION</th>
                                        <th>STATUS</th>
                                        <th>COST</th>
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
                <div class="tab-pane fade" id="nav-statements" role="tabpanel" aria-labelledby="nav-statements-tab">
                    <div class="">
                        <span>
                            <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                Update</button>
                        </span>
                    </div>
                    <div class="col-md-12 col-lg-12 Col-sm-12">
                        <table class="table">
                            <thead>
                                <tr class="text-left">
                                    <th>ACCOUNT</th>
                                    <th>FILE FORMATE</th>
                                    <th>NUMBER OF TRANSACTION</th>
                                    <th>DATE</th>
                                    <th>STATUS</th>
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

<?php
}
?>
<?php

function PayableConfig()
{
?>
    <div class="container content-tab" id="payable-configuration" style="display: none;">
        <div class="row m-4">
            <div class="justify-content-center text-center">
                <div class="">
                    <button class="btn all_btn " id="edit5">
                        <span class="badge"><i class="fas fa-pen"></i></span> Edite</button>
                    <button class="btn all_btn " id="btn_save_edit5" style="display: none;"><span class="badge"><i class="fas fa-save"></i></span> Save</button>
                </div>
                <form action="" class="payAble_config_form d-flex col-md-12">
                    <div class="form-row justify-content-center">
                        <div class="col-md-5 text-left m-1">
                            <h4>DEFAULT VALUE</h4> <br>
                            <label for="">Costs due in a certain number of days</label>
                            <input type="text" disabled placeholder="Days" class="form-control">
                        </div>
                        <div class="col-md-5 text-left m-1">
                            <label for="">Pay costs</label>
                            <input type="text" disabled placeholder="Days before due date" class="form-control">
                        </div>
                        <div class="col-md-5 text-left m-1">
                            <label for="">VAT rate</label>
                            <input type="text" disabled placeholder="%" class="form-control">
                        </div>
                        <div class="col-md-5 text-left m-1">
                            <label for="">Status after generation of payment file</label>
                            <select name="" id="" disabled class="form-control">
                                <option value="" selected>Pending</option>
                                <option value="">Paid</option>
                            </select>
                        </div>
                        <hr class="w-100">
                        <div class="col-md-5 text-left m-1">
                            <h4>NUMBER</h4> <br>
                            <label for="">Cost</label>
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
        </div>
    </div>
<?php
}

?>