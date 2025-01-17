<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Report</title>
    <style>
        .print_page {
            width: 815px;
            height: 1000px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .top {
            margin-top: 100px;
        }

        .header .header_img img {
            display: inline;
            height: 150px;
            width: 200px;
            float: left;
            padding: 10px;
        }

        .header .header_text {
            width: 100px;
            height: 100px;
            display: inline;
            text-align: center;
        }

        .header_text .title {
            font-size: 35px;
            padding: 5px;
        }

        .header_text .address {
            padding: 5px;
            font-size: 20px;
        }

        .mobile,
        .email {
            font-size: 20px;
        }

        .address_table {
            margin-top: 50px;
            width: 100%;
        }


        .address_table,
        .address_table th,
        .address_table td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            font-size: 20px;
        }

        .thank {
            border: 2px solid black;
            border-radius: 5px;
            padding: 15px;
            text-align: center;
            width: 700px;
            margin-top: 60px;
            margin-bottom: 40px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .content_table,
        th,
        td {
            padding: 5px;
            font-size: 20px;
        }

        .footer {
            margin-top: 300px;
            padding-bottom: 0px;
            float: right;
            display: block;
            clear: both;
        }

        .print {
            text-align: center;
            clear: both;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <div class="print_page" id="print_page">
        <div class="top"></div>
        <div class="header">
            <div class="header_img">
                <img src="image/logo/logo.png" alt="">
            </div>
            <div class="header_text">
                <div class="title">আমজাদ আলী মেমোরিয়াল ফাউন্ডেশন</div>
                <div class="address">ইমাদপুর, পয়ারী, ফুলপুর, ময়মনসিংহ</div>
                <div class="mobile">মোবাইল : ০১৭১১৮২৪৬৩৩</div>
                <div class="email">Email : mhoque10@gmail.com</div>
            </div>
        </div>

        <table class="address_table">
            <tr>
                <td>Pt. ID</td>
            <td>{{$wholeAbdomenMale->patient->id}}</td>
                <td>Date: </td>
                <td>{{ \Carbon\Carbon::parse($wholeAbdomenMale->created_at)->format('d/m/Y') }}</td>
                <td>Age:</td>
                <td colspan="2">{{$wholeAbdomenMale->patient->age}} Years</td>
            </tr>
            <tr>
                <td>Pt. Name</td>
                <td colspan="3">{{$wholeAbdomenMale->patient->name}}</td>
                <td>Gender:</td>
                <td>{{$wholeAbdomenMale->patient->gender}}</td>

            </tr>
            <tr>
                <td>Ref. By</td>
                <td colspan="5">{{$wholeAbdomenMale->user->name}}</td>

            </tr>
            <tr>
                <td>Name of Exam</td>
                <td colspan="5"> USE OF KUB &amp; PVR</td>

            </tr>
        </table>

        <h3 class="thank">Thank you for the courtesy of this kind referral</h3>

        <table class="content_table">
            <tr>
                <td>Liver</td>
                <td>:</td>
                <td>The liver is normal in size. Hepatic parenchyma shows uniform echopattern. No definite focal lesion is detected. Portal vein is normal in calibre.</td>
            </tr>
            <tr>
                <td>Gall Bladder</td>
                <td>:</td>
                <td>The gall bladder is normal in size. Wall thickness is within normal limit. No define intraluminal abnormality is detected.</td>
            </tr>
            <tr>
                <td>Biliary tree</td>
                <td>:</td>
                <td>CBD & intrahepatic biliary channels are not dilated.</td>
            </tr>
            <tr>
                <td>Pancreas</td>
                <td>:</td>
                <td>Visualized part of the pancreas appears normal.</td>
            </tr>
            <tr>
                <td>Spleen</td>
                <td>:</td>
                <td>The Spleen is normal in size with uniform echotexture.</td>
            </tr>
            <tr>
                <td>Kidneys</td>
                <td>:</td>
                <td>Both Kidneys are normal in size, shape and position. Bipolar measurement of right kidney is about
                    <strong>{{$wholeAbdomenMale->kidney}} mm.</strong> and that of the left is
                    <strong>{{$wholeAbdomenMale->kidney_left}} mm.</strong> Parenchymal thickness of RK
                    <strong>{{$wholeAbdomenMale->rk}} mm.</strong> and that of LK is
                    <strong>{{$wholeAbdomenMale->lk}} mm.</strong> Cortico-sinusal differentiation is maintained. Pelvicalyceal system of both kidneys are not dilated. Parenchymal thickness and echogenicity appear normal. No Calculus or SOL is detected.
                </td>
            </tr>
            <tr>
                <td>Urinary bladder</td>
                <td>:</td>
                <td>The urinary bladder is well filled. Wall thickness is within normal limit. No intra vesical lesion
                    is seen.</td>
            </tr>
            <tr>
                <td>Uterus</td>
                <td>:</td>
                <td>The uterus is normal in size. Myometrium shows uniform echotexture. No definite focal lesion is noted. Endometrial echo is central.</td>
            </tr>
            <tr>
                <td>Adnexae</td>
                <td>:</td>
                <td>No solid or cystic lesion is detected in the adnexal regions.</td>
            </tr>
            <tr>
                <td>Pouch of Douglas</td>
                <td>:</td>
                <td>Free of any collection.</td>
            </tr>
            <tr>
                <td>Interpretation</td>
                <td>:</td>
                <td>{{$wholeAbdomenMale->interpretation}} Normal findings at USG.</td>
            </tr>
        </table>

        <div class="footer">
            <h3>Dr. Romina Sharmin Shanta</h3>
            <p>MBBS (DU), MD ( Radiology)</p>
            <p>Junior Consultant, Radiology &amp; Imaging</p>
        </div>
    </div>

    <input class="print btn btn-info px-5" type="button" onclick="printDiv('print_page')" value="Print">

    <br>

    <script>
        function printDiv(print_page) {
            var printContents = document.getElementById(print_page).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</body>
</html>
