@section('page-top')
    <div class="col-xs-10">
        <h1 class="page-title">Billing section</h1>
        {{--<p class="text-muted">..</p>--}}
    </div>
@endsection

<div class="panel-body">
    <div class="alert alert-info filter-container">
        <h4 class="heading_a">Filters</h4>
        <p><b>Instructions:</b></p>
        <ol>
            <li>Select products that You need to bill. (Required)</li>
            <li>Select a client to set client name into invoice. (Required)</li>
            <li>Inside the table, select the quantity of every product.</li>
            <li>At footer, include a note. (Optional)</li>
            <li>Build invoice to press Generate button.</li>
        </ol>
        <div class="row">
            <div class="col-xs-3">
                <label for="filter_product">PRODUCT</label>
                <input type="text" id="filter_product" class="form-control billingFilter" placeholder="Type a product..">
            </div>
            <div class="col-xs-3">
                <label for="filter-client">CLIENT</label>
                <input type="text" id="filter_client"class="form-control billingFilter" placeholder="Type a client name.."/>
            </div>
            <div class="col-xs-3 col-md-push-3">
                <label for="filter-client">SELLER</label>
                <input type="text" class="form-control" id="current_user" value="{{ $seller }}" data-user="{{ $client_id }}"readonly/>
            </div>
            {{--<div class="col-xs-offset-1 col-xs-2 text-right">--}}
            {{--<button class="btn btn-lg btn-success" type="button">GENERATE</button>--}}
            {{--</div>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered invoice_table text-center" id="billing_table">
                <thead>
                    <tr id="client_data">
                        <th class="bg-primary" colspan="5">
                            <p id="client_name"><small>Client: </small> -  </p>
                            <p id="client_address"><small>Address: </small> -  </p>
                        </th>
                        <th class="bg-primary" colspan="2">
                            <p class="pull-right clearfix"><small>Date: </small>{{ date('D M dS, Y', time()) }} </p>
                            {{--No.:--}}
                        </th>
                    </tr>
                    <tr class="product_headers">
                        <th>-</th>
                        <th>Sku</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Tax</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr></tr>
                </tbody>
                <tfoot>
                    <tr>
                        {{--<td colspan="4"></td>--}}
                        <td colspan="5" rowspan="4">
                            <label for="invoice_notes" class="text-left">Notes:</label>
                            <textarea id="invoice_notes" class="form-control" cols="5" rows="4"></textarea>
                        </td>
                        {{--<td colspan="2" rowspan="4"></td>--}}
                        <td class="col_total text-right">Subtotal</td>
                        <td class="col_total" id="finalSubtotal">C$ <strong>0.00</strong></td>
                    </tr>
                    <tr>
                        {{--<td colspan="1"></td>--}}
                        <td class="col_total text-right">Tax</td>
                        <td class="col_total">C$ <strong> 0.00 </strong></td>
                    </tr>
                    <tr>
                        {{--<td colspan="1"></td>--}}
                        <td class="col_total text-right">Discount</td>
                        <td class="col_total">C$ <strong>{{ '0.00' }} </strong></td>
                    </tr>
                    <tr class="grand_total">
                        {{--<td colspan="1"></td>--}}
                        <td class="col_total text-right"> Total</td>
                        <td class="col_total" id="finalGrandtotal">C$ <strong>0.00</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
            <div class="col-xs-12 text-right">
            <img src="http://www.adidas.com/dwstatic/aaqx_prd/on/demandware.static/Sites-adidas-US-Site/-/en_US/v1420104265362/images/loading-small.gif" class="hide loading"/>
            <button class="btn btn-lg btn-success" type="button" id="invoice_generateBtn">GENERATE</button>
        </div>
    </div>
</div>
