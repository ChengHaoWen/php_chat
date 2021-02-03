<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>人員新增</title>
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
                    
                </ul>
            </div>
        </div>
    </div>

    <div class="container body-content">
        

<h2>人員新增</h2>

<form action="insertProcess.php" method="POST" enctype="multipart/form-data">

    <input name="__RequestVerificationToken" type="hidden" value="sambZAmdp0AwprCE6ivmNvfj4q2qQtYk57XRqx-YACWi5GzFsmFRaM0aGFsEOYBxQAfqpXC2q7XZo6fOdLfrAmHlJfCu7OYok9HeQudo6BU1">

    <div class="form-horizontal">
        
        <hr>
        
        
        <div class="form-group">
            <label class="control-label col-md-2" for="ID">編號</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="ID" name="ID" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="ID" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="Name">姓名</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="Name" name="Name" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>
		
        <div class="form-group">
            <label class="control-label col-md-2" for="Gender">性別</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="Gender" name="Gender" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Gender" data-valmsg-replace="true"></span>
            </div>
        </div>
		
        <div class="form-group">
            <label class="control-label col-md-2" for="Age">年齡</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-number="欄位 年齡 必須是數字。" id="Age" name="Age" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Age" data-valmsg-replace="true"></span>
            </div>
        </div>
		
		       <!-- <div class="form-group">
            <label class="control-label col-md-2" for="Pid">Pid</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val="true" data-val-number="欄位 年齡 必須是數字。" id="Pid" name="Pid" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Age" data-valmsg-replace="true"></span>
            </div>
        </div>-->



        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" value="新增" class="btn btn-default">
                
            </div>
        </div>
    </div>
   </form>

    <div>
        <a href="/">返回人員列表</a>
    </div>

        <hr>
        <footer>
            
        </footer>
    </div>

    <script src="/Scripts/jquery-1.10.2.min.js"></script>
    <script src="/Scripts/bootstrap.min.js"></script>

</body></html>