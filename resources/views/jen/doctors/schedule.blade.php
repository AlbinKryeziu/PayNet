@include('jen/pages/assets/header')

<style>
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    body {
        margin-top: 150px;
        color: #1a202c;
        text-align: left;
        background-color: #e4e8e8;
    }
    .main-body {
        padding: 15px;
    }
    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm > .col,
    .gutters-sm > [class*="col-"] {
        padding-right: 8px;
        padding-left: 8px;
    }
    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }
    .h-100 {
        height: 100% !important;
    }
    .shadow-none {
        box-shadow: none !important;
    }
    #footer {
        margin-top: 150px;
    }
</style>
<div class="container p-4">
    <div class="main-body">
        @foreach($user as $key => $user)

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('jen/assets/img/logoDoctor.png') }}" alt="Admin" class="rounded-circle" width="120" height="120px;" style="box-shadow: 5px 7px 9px -4px #d8dcdc; object-fit: cover;" />
                            <div class="mt-3">
                                <h4>{{ $user->name }}</h4>
                                <p class="text-secondary mb-1"></p>
                                <p class="text-muted font-size-sm">{{ $user->doctor->speciality }}</p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3" style="border-top: 3px solid #70c3be;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Edit Profile</h6>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Edit Proefesional Details</h6>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <a href="{{ url('doctor/schedule') }}" style="color: black;">
                                <h6 class="mb-0"><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> Create Work Schedule</h6>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card mt-3" style="border-top: 3px solid #70c3be;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-globe mr-2 icon-inline"
                                >
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                </svg>
                                Edit porfile
                            </h6>
                            <span class="text-secondary">Weebsite</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3" style="border-top: 3px solid #70c3be;">
                    <div class="card-body">
                        <h6 class="d-flex align-items-center mb-3" style="color: #00a8a3;">Create Work Schedule</h6>

                        <form method="POST" action="{{ url('doctor/add/schedule') }}">
                            @csrf
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                    <tr id="num">
                                        <th class="text-center">#</th>
                                        <th class="text-center">Day</th>
                                        <th class="text-center">Start Time</th>
                                        <th class="text-center">End Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="addr0">
                                        <td>1</td>
                                        <td><input type="text" name="day[]" id="myText" value="{{old('category[]')}}" class="form-control cta" /></td>
                                        <td><input type="time" name="start[]" id="" value="{{old('product[]')}}" class="form-control" allProducts /></td>
                                        <td><input type="time" name="end[]" id="" value="{{old('product[]')}}" class="form-control" allProducts /></td>
                                    </tr>

                                    <tr id="addr1"></tr>
                                </tbody>
                            </table>
                            <button type="submit" style="float: right;">Add</button>
                        </form>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="button" id="add_row" class="btn btn-default pull-left">Add Row</button>
                        <button type="button" id="delete_row" class="pull-right btn btn-default">Delete Row</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

<footer id="footer">
    <div class="container d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Jen</span></strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>
    </div>
</footer>
<script src="{{ asset('jen/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('jen/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('jen/assets/js/main.js') }}"></script>
<script>
    $(document).ready(function () {
        var i = 1;
        $("#add_row").click(function () {
            b = i - 1;
            $("#addr" + i)
                .html($("#addr" + b).html())
                .find("td:first-child")
                .html(i + 1);
            $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
            var lastProduct = jQuery("#addr" + (i - 1))
                .find("td:eq(1) input")
                .val();

            i++;
        });
        $("#delete_row").click(function () {
            if (i > 1) {
                $("#addr" + (i - 1)).html("");
                $("#addr" + i).remove();
                i--;
            }
            calc();
        });
        $("#tab_logic tbody").on("keyup change", function () {
            calc();
        });
        $("#tax").on("keyup change", function () {
            calc_total();
        });
    });
    $(document).ready(function () {
        $("#btn1").click(function () {
            $("ol").append("<li>other list<br>");
        });
        $("#btn2").click(function () {
            $("ol").append("<input></input><br>");
        });
    });
    function showContent() {
        myTable = document.getElementsById("form-data")[0];
        myClone = myTable.cloneNode(true);
        document.body.appendChild(myClone);
    }
    function calc() {
        $("#tab_logic tbody tr").each(function (i, element) {
            var html = $(this).html();
            var allProducts = [];
            if (html != "") {
                var qty = $(this).find(".qty").val();
                var price = $(this).find(".price").val();
                $(this)
                    .find(".total")
                    .val((qty * price).toFixed(2));
                calc_total();
            }
        });
    }
    function calc_total() {
        total = 0;
        $(".total").each(function () {
            total += parseFloat($(this).val());
        });
        $("#sub_total").val(total.toFixed(2));
        tax_sum = (total / 100) * $("#tax").val();
        $("#tax_amount").val(tax_sum.toFixed(2));
        $("#total_amount").val((tax_sum + total).toFixed(2));
    }
</script>