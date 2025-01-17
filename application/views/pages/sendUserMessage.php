    <!-- importing the text editor thing -->
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>

    <!-- Ignite UI Required Combined CSS Files -->
    <link href="http://cdn-na.infragistics.com/igniteui/2016.2/latest/css/themes/infragistics/infragistics.theme.css" rel="stylesheet" />
    <link href="http://cdn-na.infragistics.com/igniteui/2016.2/latest/css/structure/infragistics.css" rel="stylesheet" />

    <style>
        #sampleContainer ol {
            padding: 0px 0px 0px 15px;
            margin: 0;
        }

        #sampleContainer input {
            margin: 10px 0;
        }
        #result {
            display: none;
            color: red;
        }
    </style>

    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.8.3.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/infragistics.core.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/infragistics.lob.js"></script>

    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_core.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_collections.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_text.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_io.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_ui.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.documents.core_core.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_collectionsextended.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.excel_core.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_threading.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.ext_web.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.xml.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.documents.core_openxml.js"></script>
    <script type="text/javascript" src="http://cdn-na.infragistics.com/igniteui/2018.2/latest/js/modules/infragistics.excel_serialization_openxml.js"></script>


	<!-- Page Content -->
    <div class="container" role="main">
    	<div class="l--content">
			<div id="Body_T4A5AE2D0003">
				<div class="breadcrumb">
					<span id="Body_T4A5AE2D0003_ctl00_ctl00_BreadcrumbLabel" style="display:none;"></span>
					<!-- <div id="ctl00_Body_T4A5AE2D0003_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_Default">
						<ul class="rsmFlow rsmLevel rsmOneLevel">
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../../home" title="University of Malaya, the foremost and premier Research University (RU) in Malaysia. more than 27,000 students with 17 faculties research centres">Home</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../../about-um" title="University of Malaya (UM), the foremost and premier Research University (RU) in Malaysia.">About UM</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../../administration" title="Administration UNIVERSITI MALAYA">Administration</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfBreadcrumbNavigation"><a class="rsmLink" href="../deputy-vc-s-office">Deputy VC’s Office</a><span class="sfBreadcrumbNodeSeparator">/</span></li>
							<li class="rsmItem sfNoBreadcrumbNavigation"><a class="rsmLink" href="javascript: void(0)">Research & Innovation</a></li>
						</ul>
					</div> -->
				</div>
			</div>

            <!-- Dispatcch Marketing emails section -->
            <div class="sf_cols row">
				<div class="sf_colsOut col_three_fourth" data-placeholder-label="Contact Us Short Content">
					<div id="Body_T4A5AE2D0005_Col00" class="sf_colsIn ">
                        <div class="sfContentBlock"><h2>Send Email To User</h2>
                            <?php echo form_open_multipart('admin/sendUserMessageDispatch'); ?>
                                <div class="row loginForm">
                                    <div class="col-md-12">
                                        <h1 class="text-center"></h1>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <textarea id="editor1" type="text" class="form-control" name="post" placeholder="Post"></textarea>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Upload Image</label>
                                            <input type="file" name="image" size="250" enctype="multipart/form-data">
                                        </div> -->
                                        <button type="submit" class="btn btn-primary btn-block rihaishButton">Send Email to User</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
					</div>
				</div>
			</div>

            
    	</div>
    </div>


<style>
    td, th {
        border: 1px solid black;
        padding: 12px 30px;
    }
    table {
        width: 100%;
    }
</style>

<!-- initialise the text editor -->
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script>

        $(function () {
            $("#input").on("change", function () {
                var excelFile,
                    fileReader = new FileReader();

                $("#result").hide();

                fileReader.onload = function (e) {
                    var buffer = new Uint8Array(fileReader.result);

                    $.ig.excel.Workbook.load(buffer, function (workbook) {
                        var column, row, newRow, cellValue, columnIndex, i,
                            worksheet = workbook.worksheets(0),
                            columnsNumber = 0,
                            gridColumns = [],
                            data = [],
                            worksheetRowsCount;

                        // Both the columns and rows in the worksheet are lazily created and because of this most of the time worksheet.columns().count() will return 0
                        // So to get the number of columns we read the values in the first row and count. When value is null we stop counting columns:
                        while (worksheet.rows(0).getCellValue(columnsNumber)) {
                            columnsNumber++;
                        }

                        // Iterating through cells in first row and use the cell text as key and header text for the grid columns
                        for (columnIndex = 0; columnIndex < columnsNumber; columnIndex++) {
                            column = worksheet.rows(0).getCellText(columnIndex);
                            gridColumns.push({ headerText: column, key: column });
                        }

                        // We start iterating from 1, because we already read the first row to build the gridColumns array above
                        // We use each cell value and add it to json array, which will be used as dataSource for the grid
                        for (i = 1, worksheetRowsCount = worksheet.rows().count() ; i < worksheetRowsCount; i++) {
                            newRow = {};
                            row = worksheet.rows(i);

                            for (columnIndex = 0; columnIndex < columnsNumber; columnIndex++) {
                                cellValue = row.getCellText(columnIndex);
                                newRow[gridColumns[columnIndex].key] = cellValue;
                            }

                            data.push(newRow);
                        }

                        // we can also skip passing the gridColumns use autoGenerateColumns = true, or modify the gridColumns array
                        createGrid(data, gridColumns);
                    }, function (error) {
                        $("#result").text("The excel file is corrupted.");
                        $("#result").show(1000);
                    });
                }

                if (this.files.length > 0) {
                    excelFile = this.files[0];
                    if (excelFile.type === "application/vnd.ms-excel" || excelFile.type === "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || (excelFile.type === "" && (excelFile.name.endsWith("xls") || excelFile.name.endsWith("xlsx")))) {
                        fileReader.readAsArrayBuffer(excelFile);
                    } else {
                        $("#result").text("The format of the file you have selected is not supported. Please select a valid Excel file ('.xls, *.xlsx').");
                        $("#result").show(1000);
                    }
                }

            })
        });

        function createGrid(data, gridColumns) {
            if ($("#grid1").data("igGrid") !== undefined) {
                $("#grid1").igGrid("destroy");
            }

            $("#grid1").igGrid({
                columns: gridColumns,
                autoGenerateColumns: true,
                dataSource: data,
                width: "100%"
            });
        }
    </script>