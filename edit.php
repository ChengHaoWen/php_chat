<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯 - 大才全資訊科技股份有限公司</title>
    <link href="/Content/Site.css" rel="stylesheet" type="text/css">
    <link href="/Content/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/Scripts/modernizr-2.6.2.js"></script>
</head>
<body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">人員管理系統</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">人員列表</a></li>
                    <li><a href="Create">人員新增</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container body-content">
        

<h2>編輯</h2>


    <form action="/Home/Edit" method="post" enctype="multipart/form-data">


        <input name="__RequestVerificationToken" type="hidden" value="RJINwSVArq8uR71I1xzEjHnMTG7io0gN_72GGc7nzGUM3D446mG8a05bHRNOFSx2tmTpRXrKIgQZNufLNr8GdimlOR-ZY1fb2ovto9ogEjY1">

        <div class="form-horizontal">
            <h4>tProduct</h4>
            <hr>
            
            <input id="fId" name="fId" type="hidden" value="P01">

            <div class="form-group">
                <label class="control-label col-md-2" for="ID">ID</label>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" id="fName" name="fName" type="text" value="iPhone7">
                    <span class="field-validation-valid text-danger" data-valmsg-for="fName" data-valmsg-replace="true"></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="Name">Name</label>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-number="欄位 單價 必須是數字。" id="fPrice" name="fPrice" type="text" value="32000.00">
                    <span class="field-validation-valid text-danger" data-valmsg-for="fPrice" data-valmsg-replace="true"></span>
                </div>
            </div>
			
            <div class="form-group">
                <label class="control-label col-md-2" for="Gender">Gender</label>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-number="欄位 單價 必須是數字。" id="fPrice" name="fPrice" type="text" value="32000.00">
                    <span class="field-validation-valid text-danger" data-valmsg-for="fPrice" data-valmsg-replace="true"></span>
                </div>
            </div>
			
            <div class="form-group">
                <label class="control-label col-md-2" for="Age">Age</label>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-number="欄位 單價 必須是數字。" id="fPrice" name="fPrice" type="text" value="32000.00">
                    <span class="field-validation-valid text-danger" data-valmsg-for="fPrice" data-valmsg-replace="true"></span>
                </div>
            </div>			


            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="儲存" class="btn btn-default">
                </div>
            </div>
        </div>


        </form>

        <div>
            <a href="/">返回人員列表</a>
        </div>

        <hr>
        <footer>
            <p></p>
        </footer>
    </div>

    <script src="/Scripts/jquery-1.10.2.min.js"></script>
    <script src="/Scripts/bootstrap.min.js"></script>

</body></html>