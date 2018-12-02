<?php
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location:../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=s8rllctl0k3ztz9f0dbz126tmbskuo0upshzyxenmkpemdvm"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#myTextarea',
            theme: 'modern',
            width: 1428,
            height: 700,
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fullpage | forecolor backcolor emoticons',

            // without images_upload_url set, Upload tab won't show up
            images_upload_url: './upload.php',

            // override default upload handler to simulate successful upload
            images_upload_handler: function (blobInfo, success, failure) {
                let xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', './upload.php');

                xhr.onload = function() {

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    success(xhr.responseText);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            }
        });
    </script>
    <title>NBA Criteria 2 TEMPLATE</title>
    
    <!-- ICON -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/8/8d/National_Board_of_Accreditation.svg/1200px-National_Board_of_Accreditation.svg.png">

    <style>
        #logout-button {
            display: inline;
            margin-left: 2%;
            height: 50%;
        }
    </style>
</head>
<body>
    <div class=" container input-group input-group-lg my-2">
        <div class="alert alert-light" role="alert">
          <p class="p-0 my-0 mx-0">Enter the File name and hit enter to load:</p>
        </div>
      <input id="documentName" type="text" class="form-control block" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"
                placeholder="Enter the document name" value="DEFAULT">
        <a id="logout-button" class="btn btn-outline-danger" href="../index.php?logout=True">Sign out</a>

    </div>
    <textarea id="myTextarea" class="ml-1"></textarea>

    <script>
        
        documentName = document.querySelector("#documentName");
        documentNameKey = documentName.value;
        documentName.addEventListener("change", function(){
            documentNameKey = documentName.value;
            body.innerHTML = localStorage[documentNameKey] || '<p style="text-align: center;" data-mce-style="text-align: center;"><strong>BMS Institute of Technology and Mgmt.</strong></p><p style="text-align: center;" data-mce-style="text-align: center;"><strong>Computer Science &amp; Engg.</strong></p><hr><p><br></p><h2><strong>2</strong> <strong>PROGRAM CURRICULUM AND TEACHING ­ LEARNING PROCESSES (120)</strong> </h2><hr><h3><br><strong>2.1</strong> Program Curriculum (20)</h3><p><br data-mce-bogus="1"></p><hr><h4><br><strong>2.1.1</strong> State the process used to identify extent of compliance of the University curriculum for attaining the Program Outcomes and Program Specific Outcomes as mentioned in AnnexureI. Also mention the identified curricular gaps, if any&nbsp;<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p>(State the process details; also mention identified curricular gaps). <br><strong>Note</strong> : In case all POs are being demonstrably met through University Curriculum then 2.1.2 will not be applicable and the weightage of 2.1.1 will be 20.</p><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h4><strong>2.1.2</strong> State the delivery details of the content beyond the syllabus for the attainment of POs and PSOs (10) ﻿<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p>(Provide details of the additional course/ learning material/ content/ laboratory experiments/ projects etc., arising from the gaps identified in 2.1.1 in a tabular form in the format given below) <br><strong>Note</strong> : Please mention in detail whether the Institution has given such inputs and suggestions to the Affiliating University regarding curricular gaps and possible addition of new content/ add­on courses in the curriculum, to bridge the gap and to better attain program outcome(s).</p><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h3><strong>2.2</strong> Teaching ­ Learning Processes (100)</h3><hr><h4><br><strong>2.2.1</strong> Describe processes followed to improve quality of Teaching &amp; Learning (25)&nbsp;<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><h4>(Processes may include adherence to academic calendar and improving instruction methods using pedagogical initiatives such as real world examples, collaborative learning, quality of laboratory experience with regard to conducting experiments, recording observations, analysis of data etc. encouraging bright students, assisting weak students etc. The implementation details and impact analysis need to be documented)</h4><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h4><strong>2.2.2</strong> Quality of internal semester Question papers, Assignments and Evaluation (20) ﻿<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p>(Mention the initiatives, implementation details and analysis of learning levels related to quality of semester question papers, assignments and evaluation)</p><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h4><strong>2.2.3</strong> Quality of student projects (25) ﻿<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p>(Quality of the project is measured in terms of consideration to factors including, but not limited to, environment, safety, ethics, cost, type(application, product, research, review etc.) and standards. Processes related to project identification, allotment, continuous monitoring, evaluation including demonstration of working prototypes and enhancing the relevance of projects. Mention Implementation details including details.</p><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h4><strong>2.2.4</strong> Initiative related to industry interaction (15) ﻿<a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p>(Give details of the industry involvement in the program such as industry­attached laboratories, partial delivery of appropriate courses by industry experts etc.&nbsp;</p><p><br></p><p><img class="mce-pagebreak" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-mce-resize="false" data-mce-placeholder=""></p><p><br></p><h4><strong>2.2.5</strong> Initiative related to industry internship/summer training (15) ﻿<a href="http://SARUGTireIITemplateRevisedQuestion.aspx?Appid=1660&amp;Progid=558&amp;QuestID=28" target="_blank" rel="noopener" data-mce-href="http://SARUGTireIITemplateRevisedQuestion.aspx?Appid=1660&amp;Progid=558&amp;QuestID=28"></a><a href="https://enba.nbaind.org/Account/Login.aspx?reason=1" target="_blank" rel="noopener" data-mce-href="https://enba.nbaind.org/Account/Login.aspx?reason=1">Open Seperately</a></h4><p><a href="http://SARUGTireIITemplateRevisedQuestion.aspx?Appid=1660&amp;Progid=558&amp;QuestID=28" target="_blank" rel="noopener" data-mce-href="http://SARUGTireIITemplateRevisedQuestion.aspx?Appid=1660&amp;Progid=558&amp;QuestID=28">﻿</a></p><p>(Mention the initiatives, implementation details and impact analysis)</p>'
        });
    </script>
    <script src="save.js"></script>
</body>
</html>