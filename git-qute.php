<html class="wide wow-animation desktop landscape rd-navbar-static-linked" lang="en">

<head>
    <!-- Site Title-->
    <title>Power Trasformer</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/costum.css">
    <link rel="stylesheet" href="css/animate.css">
    <![endif]-->
</head>

<body>

<!-- Page-->
<div class="page">
    <?php include('header.php') ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/panner2.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Get Quote</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="index.php">Home</a></li>
                <li class="active">Get Quote</li>
            </ul>
        </div>
    </section>

    <section class="service-pages p-50-0 new-vendor">
        <div class="container">

            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Contact Name:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Contact Name" id="c-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="c-Number">Mobile No.:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Mobile No" id="c-Number" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Company:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Company" id="c-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Email Add.:</label>
                            <input type="email" minlength="3" maxlength="30" placeholder="Email Address" id="c-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Address:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Address" id="c-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="comment">Phone No.:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Address" id="c-name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="c-City">City:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="City" id="c-City" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="c-Contact">Fax No.:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Fax No" id="c-Contact" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="c-Country">Country:</label>
                            <input type="text" minlength="3" maxlength="30" placeholder="Country" id="c-Country" required="">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="c-Web">Website:</label>
                            <input type="text" minlength="3" maxlength="50" placeholder="Website" id="c-Web" required="">
                        </div>
                    </div>



                    <div class="col-sm-6 ">
                        <div class="form-group">
                            <label for="pell">Product Type</label>
                            <select class="form-control" id="pell" required="">
                                <option value="">--select--</option>
                                <option value="1">products Type1</option>
                                <option value="2">products Type2</option>
                                <option value="3">products Type3</option>
                                <option value="4">products Type4</option>
                                <option value="5">products Type5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sel1">product name</label>
                            <select class="form-control" id="sel1" required="">
                                <option value="">--select--</option>
                                <option value="1">products name 1</option>
                                <option value="2">products name 2</option>
                                <option value="3">products name 3</option>
                                <option value="4">products name 4</option>
                            </select>
                        </div>
                        <div class="add_to_this"></div>
                        <div>
                            <button class="dd btn btn-primary" type="button" onclick="handler()">Add another product </button>
                        </div>
                        <h6>Upload file:</h6>
                        <div class="input-group">
                            <label class="input-group-btn">
                    <span class="btn btn-primary browse-up">
                        Browse… <input onchange="ValidateSize(this)" type="file" maxlength="2" style="display: none;" multiple="">
                    </span>
                            </label>
                            <input type="text" class="form-control file-uplaod" readonly="">
                        </div>
                        <span class="help-block">
                Maximum 30 MB
            </span>

                    </div>
                    <div class="col-sm-6 ">
                        <div class="form-group">
                            <label for="comment">Other Notes:</label>
                            <textarea class="form-control" rows="5" id="comment" placeholder="Your Nots"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </section>

    <!-- Page Footer-->
    <?php include('footer.php') ?>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-P9FT69"></script>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">
    function handler() {
        $('.add_to_this').append(function() {
            return $('<div class="form-group">\n' +
                '                                <label for="pell">Product Type</label>\n' +
                '                                <select class="form-control" id="pell" required>\n' +
                '                                    <option value="">--select--</option>\n' +
                '                                    <option value="1">products Type1</option>\n' +
                '                                    <option value="2">products Type2</option>\n' +
                '                                    <option value="3">products Type3</option>\n' +
                '                                    <option value="4">products Type4</option>\n' +
                '                                    <option value="5">products Type5</option>\n' +
                '                                </select>\n' +
                '                            </div>\n' +
                '\n' +
                '                            <div class="form-group">\n' +
                '                                <label for="sel1">product name</label>\n' +
                '                                <select class="form-control" id="sel1" required>\n' +
                '                                    <option value="">--select--</option>\n' +
                '                                    <option value="1">products Name1</option>\n' +
                '                                    <option value="2">products Name2</option>\n' +
                '                                    <option value="3">products Name3</option>\n' +
                '                                    <option value="4">products Name4</option>\n' +
                '                                </select>\n' +
                '                            </div>');
        }) }


    function ValidateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024; // in MB
        if (FileSize > 30) {
            alert('File size exceeds 30 MB');
            // $(file).val(''); //for clearing with Jquery
        } else {

        }
    }
</script>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');

</script>
<!-- End Google Tag Manager -->
<a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up"></a></body>
<!-- Google Tag Manager -->

</html>
