<?php


function homeDashboard()
{
?>
    <div class="container content-tab" id="home-dashboard" style="display:block;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="">
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
function homePlan()
{
?>
    <div class="container content-tab" id="home-plan" style="display:none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="">
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                        Update</button>
                    <button class="btn all_btn text-center" style="width: 200px;"><span class="badge"><i class="fas fa-ban"></i></span> Cancel
                        smallinvoice</button>
                </div>
            </div>
            <div class="mt-4">
                <div class="col-lg-5 col-md-5">
                    Your test phase expires: 02.02.2022.
                </div>
                <div class="col-lg-5 col-md-5">
                    You are testing feature set Business
                </div>

                <div class="col-lg-8 col-md-6 p-3 bg-warning">
                    You can already choose the plan that best suits your needs.
                    The chosen plan will become active immediately and will remain free of charge until the
                    test
                    phase has expired. Thereafter, the monthly plan fees stated below will apply.
                    If you do not choose your plan during the test phase, you will be asked again on the
                    first
                    logon after the test phase has expired.
                </div>
                <p>For details regarding the change of plans and billing, please consult the following faq
                    article:
                    <br>
                    <a href="" style='color:#87b040;'>3dsium.com/grandinvoice/pricing.php</a>
                </p>
            </div>
        </div>
        <span>PLAN</span>
        <div class="row">
            <div class="card col-lg-4   text-center">
                <div class="card-body">
                    <h4 class="card-title">Free</h4>
                    <h5 class="card-title">CHF 0.00 / Month</h5>
                    <p class="card-text">incl. 1 user, additional users possible.</p>
                    <p class="card-text">Free plan, ideal to invoice once in a while.</p>
                    <a href="#" class="" style='color:#87b040;'>Details</a>
                    <div class="mt-3">
                        <button class="btn btn-secondary">Activate Now</button>
                    </div>
                </div>
            </div>
            <div class="card col-lg-4 text-center">
                <div class="card-body">
                    <h4 class="card-title">Starter</h4>
                    <h5 class="card-title">CHF 15.00 / Month</h5>
                    <p class="card-text">incl. 1 user, additional users chargeable.</p>
                    <p class="card-text">Unlimited management of receivables. Perfect for entrepreneurs and
                        small companies.</p>
                    <a href="#" class="" style='color:#87b040;'>Details</a>
                    <div class="mt-3">
                        <button class="btn btn-secondary">Activate Now</button>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
            <div class="card col-lg-4 text-center">
                <div class="card-body">
                    <h4 class="card-title">Profesional</h4>
                    <h5 class="card-title">CHF 30.00 / Month</h5>
                    <p class="card-text">incl. 3 user, additional users chargeable.</p>
                    <p class="card-text">PLUS management of payables. Ideal to keep your incoming and
                        outgoing finances under control.</p>
                    <a href="#" class="" style='color:#87b040;'>Details</a>
                    <div class="mt-3">
                        <button class="btn btn-secondary">Activate Now</button>
                    </div>
                </div>
            </div>
            <div class="card col-lg-4 text-center">
                <div class="card-body">
                    <h4 class="card-title">Business</h4>
                    <h5 class="card-title">CHF 45.00 / Month</h5>
                    <p class="card-text">incl. 5 user, additional users chargeable.</p>
                    <p class="card-text">PLUS project management and time reporting. Idea for companies with
                        employees.</p>
                    <a href="#" class="" style='color:#87b040;'>Details</a>
                    <div class="mt-3">
                        <button class="btn btn-secondary">Activate Now</button>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>

        </div>



    </div>

<?php
}

function homeCredit()
{
?>
    <div class="container content-tab" id="home-credit" style="display: none;">
        <div class="row m-4 sub-tab" id="add-credit-inner" style="display: none;">
            <div class="w-100 text-center justify-content-center">
                <div class="">
                    <button class="btn all_btn"> <span class="badge"><i class="fas fa-sync-alt"></i></span>Update</button>
                    <button class="btn all_btn"> <span class="badge"><i class="fas fa-shopping-cart"></i></span>Add
                        redit card</button>
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-shopping-cart"></i></span>Top
                        up create</button>
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-pen"></i></span>Redeem
                        voucher</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 ml-4  m-3 d-flex justify-content-between">
                <div>
                    <span> CREDITE CARDS DETAILS</span>
                    <p>No credit card details have yet been entered. </p>
                    <p> <b>No credit card available?</b> Credit can also be topped up via PayPal or invoice.
                    </p>
                </div>
                <div>
                    <span> CREDITE</span>
                    <p>Credit in CHF</p>
                    <p>0.00</p>
                </div>

            </div>
        </div>
        <div class="row sub-tab" id="billing-inner" style="display: none;">
            <div class="row m-4">
                <div class="col-lg-12 col-lg-12 col-sm-12 justify-content-between ">
                    <div class="w-100 text-center justify-content-center">
                        <div class="">
                            <button class="btn all_btn ">
                                <span class="badge">
                                    <i class="fas fa-sync-alt"></i>
                                </span>Update
                            </button>
                        </div>
                    </div>
                </div>
                <div class="billing_tab1">
                    <span class="w-25 ">PERIOD</span>
                    <span class="w-25 text-center">PLAN COSTS</span>
                    <span class="w-25 text-center">MAINLING USAGE</span>
                    <span class="w-25 text-center">CREDITE PURCHASE</span>
                </div>
                <div class="billing_tab1">
                    <span class="w-25 ">junaury 2022</span>
                    <span class="w-25 text-center">-</span>
                    <span class="w-25 text-center">-</span>
                    <span class="w-25 text-center">-</span>
                </div>
                <div class="billing_tab1">
                    <span class="w-25 ">December 2021</span>
                    <span class="w-25 text-center">CHF 0.00</span>
                    <span class="w-25 text-center">-</span>
                    <span class="w-25 text-center">-</span>
                </div>
                <div class="w-100">
                    <p class="text-right">Shown objects 1-2 (2)</p>
                </div>
            </div>
        </div>

        <!-- start-cre -->

        <!-- end-cre -->

    </div>
<?php
}

function homeNotification()
{
?>
    <div class="container content-tab" id="home-notifications" style="display: none;">
        <div class="row m-4 justify-content-center">
            <nav class="w-100">
                <div class="nav text-center nav-Tabboing_tab justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-event-tab" data-toggle="tab" href="#tab-event" role="tab" aria-controls="nav-home" aria-selected="true">EVENT</a>
                    <a class="nav-item nav-link" id="nav-recipents-tab" data-toggle="tab" href="#tab-recipents" role="tab" aria-controls="nav-profile" aria-selected="false">Recipents</a>
                </div>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab-event" role="tabpanel" aria-labelledby="nav-event-tab">

                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>EVENT</th>
                                    <th>DESCRIPTION</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Recurring documents</td>
                                    <td> Receive receipts and administrative information for this account
                                    </td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td> Overdue documents</td>
                                    <td>E.g. when a document is pending for mailing or payment</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Account billing</td>
                                    <td>eceive receipts and administrative information for this account</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Custommer reminders</td>
                                    <td> Define who is notified about customer reminders</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Incomming payments</td>
                                    <td> Receive notification of incoming payments</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Customer Actions</td>
                                    <td> e.g. when the customer accepts an offer</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Mailing information</td>
                                    <td>Notification of shipping-related events</td>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Workflow</td>
                                    <td> Receive notification as soon as actions are required, e.g. sending
                                        a reminder</td>
                                    <td>Active</td>
                                </tr>
                                <tr">
                                    <td class=" text-center">Shown object 1-8(8)</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-recipents" role="tabpanel" aria-labelledby="nav-recipents-tab">
                        <div class="w-100 text-center justify-content-center">
                            <div class="">
                                <button class="btn all_btn my-3"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                    Update</button>
                                <button class="btn all_btn my-3 px-4"><span class="badge"><i class="fas fa-plus"></i></span>
                                    New</button>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>TYPE</th>
                                    <th>RECIPENTS</th>
                                    <th>STATUS</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>E-mail</td>
                                    <td>qadooswadood321@gmail.com (asd yan)</td>
                                    <td>Active</td>
                                    <td><button class="btn"><span class="badge"><i class="fas fa-cog"></i></span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </nav>
        </div>
    </div>

<?php
}
function homeAffiliate()
{
?>
    <div class="container content-tab" id="home-affiliate" style="display: none;">
        <div class="row m-4">
            <div class="w-100 text-center justify-content-center">
                <div class="">
                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                        Update</button>
                    <button class="btn all_btn px-4"><span class="badge"><i class="fas fa-plus"></i></span>
                        New</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>WEBSITE NEWS</th>
                        <th>REGISTRATION</th>
                        <th>IN TEST PHASE</th>
                        <th>CONVERSIONS</th>
                        <th>CREDITE</th>
                        <th>OPEN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No result found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php
}
function homeConfig()
{
?>
    <div class="container content-tab" id="home-configuration" style="display: block;">
        <div class="row m-4 justify-content-center">
            <div class="sub-tab" id="setting" style="display:none;">
                <div class="row justify-content-center">
                    <nav>
                        <div class="nav w-100 text-center  justify-content-center" id="nav-tab" role="tablist">
                            <a class="btn all_btn active" id="nav-config-tab" data-toggle="tab" href="#nav-setting" role="tab" aria-controls="nav-setting" aria-selected="true">Profile</a>
                            <a class="btn all_btn" id="nav-exchange-rate" data-toggle="tab" href="#nav-exchange" role="tab" aria-controls="nav-exchange" aria-selected="false">Exchange Rates</a>
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-setting" role="tabpanel" aria-labelledby="nav-config-tab">
                        <div class="row  justify-content-center">
                            <div class="w-100 text-center justify-content-center">
                                <div class="">
                                    <button class="btn all_btn " id="edit">Edite</button>
                                    <button class="btn all_btn " id="btn_save_edit" style="display: none;">Save</button>
                                </div>
                            </div>
                            <form class="setting_form mt-3 text-center">
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Company Name" id="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Phone Number" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Additional information" id="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Fax" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Street" id="">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="No" id="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 ">
                                        <input type="email" class="form-control config-form-1" disabled placeholder="E-mail" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Postcode/Code" id="">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Town" id="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Website" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Country" id="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="VAT/EU VAT ID" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control config-form-1" disabled placeholder="Currency" id="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="submit" value="submit" class="form-control config-form-1" disabled id="sub_form_t">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-exchange" role="tabpanel" aria-labelledby="nav-exchange-rate">
                        <div class="row">
                            <div class="w-100 text-center justify-content-center">
                                <div class="">
                                    <button class="btn all_btn"><span class="badge"><i class="fas fa-sync-alt"></i></span>
                                        Update</button>
                                    <button class="btn all_btn  px-4"><span class="badge"><i class="fas fa-plus"></i></span>
                                        New</button>
                                </div>
                            </div>
                            <div class="w-100">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>CURRENCY EXCHANGED FORM</th>
                                            <th>CURRENCY EXCHANGED INTO</th>
                                            <th>RATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>No result found</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-tab" id="bank_account" style="display: none;">
                <div class="row">
                    <div class="w-100 text-center mt-4 mb-4">
                        <button class="btn all_btn"><span><i class="fas fa-sync-alt"></i></span>
                            Update</button>
                        <button class="btn all_btn px-4"><span><i class="fas fa-plus"></i></span>
                            New</button>
                    </div>
                    <div class="w-100">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>DEFAULT</td>
                                    <td>PAYMENT ACCOUNT</td>
                                    <td>IBAN</td>
                                    <td>BANK NAME</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>No result found</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="sub-tab" id="integeration_setting" style="display: none;">
                <div class="row">
                    <div class="m-5 w-100">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>DESCRIPTION</th>
                                    <th>CATEGORY</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
                                </tr>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
                                </tr>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
                                </tr>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
                                </tr>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
                                </tr>
                                <tr>
                                    <td class=""><i class="fab fa-paypal fa-3x"></i></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore,
                                        ducimus.</td>
                                    <td>Mailing by post</td>
                                    <td>Not configured/inactive</td>
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
function HomeTabFunc()
{
?>
    <script>
        $(document).ready(() => {
    $(document).on("click", "a.dropdown-item", function (e) {
        e.preventDefault();
        console.log($(this))
        $(".content-tab").hide();
        $($(this).attr("href")).show();
    });
    $(document).on("click", "span.dropdown-item", function (e) {
        e.preventDefault();
        // console.log($(this))
        $(".sub-tab").hide();
        $($(this).attr("href")).show();
    });
    $(document).on("click", ".sidebar_nav", function (e) {
        e.preventDefault();
        console.log($(this));

        $(this).find(".icon-active").toggleClass('fa-minus');
        $(this).find(".icon-active").toggleClass('fa-plus');
    });
    $(document).on("click", "#edit", function () {
        // console.log($(".setting_form input").attr('disabled','false'),$(".setting_form input").prop("disabled")); //disable 
        $(".setting_form input").removeAttr('disabled'); //enable
        $("#btn_save_edit").show();
        $("#edit").hide();
    });
    $(document).on("click", "#btn_save_edit", function () {
        console.log($(this).hide());
        $(".setting_form input").attr('disabled', 'disabled'); //enable
        $("#edit").show();

    });
    $(document).on("click", "#edit2", function () {
        // console.log($(".setting_form input").attr('disabled','false'),$(".setting_form input").prop("disabled")); //disable 
        $(".confi_form input").removeAttr('disabled'); //enable
        $("#btn_save_edit2").show();
        $("#edit2").hide();
    })
    $(document).on("click", "#btn_save_edit2", function () {
        console.log($(this).hide());
        $(".confi_form input").attr('disabled', 'disabled'); //enable
        $("#edit2").show();

    });

    $(document).on("click", "#edit3", function () {
        // console.log($(".setting_form input").attr('disabled','false'),$(".setting_form input").prop("disabled")); //disable 
        $(".smtp_form input").removeAttr('disabled'); //enable
        $("#btn_save_edit3").show();
        $("#edit3").hide();
    })
    $(document).on("click", "#btn_save_edit3", function () {
        console.log($(this).hide());
        $(".smtp_form input").attr('disabled', 'disabled'); //enable
        $("#edit3").show();

    });
    $(document).on("click", "#edit4", function () {
        // console.log($(".setting_form input").attr('disabled','false'),$(".setting_form input").prop("disabled")); //disable 
        $(".workflow_form input").removeAttr('disabled'); //enable
        $(".workflow_form select").removeAttr('disabled'); //enable
        $("#btn_save_edit4").show();
        $("#edit4").hide();
    });
    $(document).on("click", "#btn_save_edit4", function () {
        console.log($(this).hide());
        $(".workflow_form input").attr('disabled', 'disabled'); //enable
        $(".workflow_form select").attr('disabled', 'disabled'); //enable
        $("#edit4").show();

    });
    
    $(document).on("click", "#edit5", function () {
        $(".payAble_config_form input").removeAttr('disabled'); //enable
        $(".payAble_config_form select").removeAttr('disabled'); //enable
        $("#btn_save_edit5").show();
        $("#edit5").hide();
    })
    $(document).on("click", "#btn_save_edit5", function () {        
        console.log($(this).hide());
        $(".payAble_config_form input").attr('disabled', 'disabled'); //enable
        $(".payAble_config_form select").attr('disabled', 'disabled'); //enable
        $("#edit5").show();

    });

    $(document).on("click", "#edit6", function () {
        $(".project_config_form input").removeAttr('disabled'); //enable
        $("#btn_save_edit6").show();
        $("#edit6").hide();
    })
    $(document).on("click", "#btn_save_edit6", function () {
        console.log($(this).hide());
        $(".project_config_form input").attr('disabled', 'disabled'); //enable
        $("#edit6").show();

    });

    $(document).on("click", ".hover_btn", function () {
        // console.log($(".side_bar").css("background-color","red"));
        console.log($(".side_bar").toggleClass("main"));
        console.log($(".overlay_row").toggleClass("overlay"));
    });
    $(document).on("click", ".close_sidebar", function () {
        // console.log($(".side_bar").css("background-color","red"));
        console.log($(".side_bar").toggleClass("main"));
        console.log($(".overlay_row").toggleClass("overlay"));
    });
    $(document).on("click", ".check .checkMe", function () {
        $(this).parent().toggleClass('fill');
    });
    $(document).on("click", ".check .checkAct", function () {
        $(".check").removeClass("fill");
        $(this).parent().toggleClass('fill');
    });
    $(document).on("click", ".check2 .checkActUn", function () {
        $(".check2").removeClass("fill");
        $(this).parent().toggleClass('fill');
    });


    $(document).on("click", ".label-text", function () {
        $(this).toggleClass('filChart');
    });

    $(document).on("click", ".check1 .checkMe", function () {
        $('.checkMe').parent().removeClass('fill2');
        $(this).parent().toggleClass('fill2');

    });

    // nested button and modal start jquery//
    $(document).on("click", ".click_export_btn", function () {
        // $("#d").slideDown("slow");
        // $("#d").slideToggle("slow");
        console.log($(".drop_export_btn").toggleClass("ddd"));
    });
    $(document).on("click", ".click_export_btn", function () {
        // $("#d").slideDown("slow");
        // $("#d").slideToggle("slow");
        console.log($(".drop_export_btn2").toggleClass("ddd2"));
    });


    $(document).on("click", ".btn_m2", function () {
        setTimeout(() => {
            $(".btn_m1").trigger("click");
        }, 0);
    });

    $(document).on("click", ".btn_m3", function () {    
        setTimeout(() => {
            $(".btn_m4").trigger("click");
        }, 0);
    });
    $(document).on("click", ".btn_m5", function () {
        setTimeout(() => {
            $(".btn_m4").trigger("click");
        }, 0);
    });

    $(document).on("click", ".btn_m6", function () {
        setTimeout(() => {
            $(".btn_m7").trigger("click");
        }, 0);
    });

});
// nested button and modal end jquery//

/* DataTable start*/
$(document).ready(function () {
    var table = $('.showUnite').DataTable({
        responsive: true
    });
});
/*DataTable end*/


    </script>
<?php

}
?>