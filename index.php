<?php
require_once("connect_db_remodeled.php");
$id = $_REQUEST['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- search static content-->
    <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>

    <link rel="stylesheet" type="text/css" href="design/styleSheet.css">
    <link rel="manifest" href="./manifest.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script>
        // function openNav() {
        //     document.getElementById("mySidebar").style.width = "250px";
        //     document.getElementById("main").style.marginLeft = "250px";
        // }

        // function closeNav() {
        //     document.getElementById("mySidebar").style.width = "0";
        //     document.getElementById("main").style.marginLeft = "0";
        // }
        function openNav() {

            if (document.getElementById("mySidebar").style.width == "300px" || document.getElementById("mySidebar").style.width == "0px") {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("mySidebar").style.width = "300px";
                document.getElementById("mySidebar").classList.toggle('active');
                // document.getElementById("main1").style.marginLeft = "0";
            } else {
                document.getElementById("mySidebar").style.width = "0px";
                // document.getElementById("main1").style.marginLeft = "200px";
            }
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("mySidebar").style.width = "0";
            // document.getElementById("main1").style.marginLeft = "0";
        }

        //ADd smooth scroll to 
        $(document).ready(function () {

            let loginOpened = false;
            let openAgain = false;

            $("#myForm").hide();
            // Add smooth scrolling to all links in navbar 
            $(".ul li a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            // $(function() {
            //     $("input").on("input.highlight", function() {
            //         // Determine specified search term
            //         var searchTerm = $(this).val();
            //         // Highlight search term inside a specific context
            //         $("#mainContent").unmark().mark(searchTerm);
            //     }).trigger("input.highlight").focus();
              //  });
              
            
              $("#openLogin").on('click', function(e) {
                console.log("on click");
                loginOpened = true;
                $("#myForm").show();
                
              });
              $("#mainContent").not("#myForm").click(function(e) {
                console.log("inside maincontent");  
                if(!loginOpened)
                  {
                    console.log("clicked");
                    $("#myForm").hide();
                  }
                  loginOpened = false;
                });
              $("#closeLogin").on('click', function(e) {
                //console.log("on click");
                $("#myForm").hide();
              });
              $("#search_term").on('input', function(e) {
                console.log("on click");
                loginOpened = true;
                $("#result_div").show();
                
              });
              $("#mainContent").not("#result_div").click(function(e) {
                console.log("inside maincontent");  
                if(!loginOpened)
                  {
                    console.log("clicked");
                    $("#result_div").hide();
                  }
                  loginOpened = false;
                });
     //ass slidein animation
                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
   
                        });
   
       
     
        // // Get the modal
        // var modal = document.getElementById('myForm');

        // // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function(event) {
        // if (event.target == modal) {
        //     $echo (event.target)
        //     modal.style.display = "none";
        // }
        // }
       
   

    function closeForm() {
    document.getElementById("myForm").style.display = "none";
    }
   
    </script>

    <script src="./index.js"></script>

</head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function do_search()
{
 var search_term=$("#search_term").val();
 $.ajax
 ({
  type:'post',
  url:'module_home.php',
  data:{
   search:"search",
   search_term:search_term
  },
  success:function(response) 
  {
   document.getElementById("result_div").innerHTML=response;
  }
 });
 
 return false;
}
</script>
<style>
    .h1Green {
        color: white;
        border: 5px solid #33c733;
        background-color: #33c733;
    }

    .h1purple {
        color: white;
        border: 5px solid #7b45c1;
        background-color: #7b45c1;
    }

    .h1orange {
        color: white;
        border: 5px solid #d25134;
        background-color: #d25134;
    }

    .h1blue {
        color: white;
        border: 5px solid #5391de;
        background-color: #5391de;
    }

    .h1red {
        color: white;
        border: 5px solid #8c2323;
        background-color: #8c2323;
    }

    .h1lightBlue {
        color: white;
        border: 5px solid #61c7de;
        background-color: #61c7de;
    }

    .h1pink {
        color: white;
        border: 5px solid #d021ca;
        background-color: #d021ca;
    }

    .h1navyBlue {
        color: white;
        border: 5px solid #13086b;
        background-color: #13086b;
    }

    mark {
        background: orange;
        color: black;
    }

        /* Media Queries: Tablet Landscape */
        @media screen and (max-width: 1060px) {
        #primary { width:67%; }
        #secondary { width:30%; margin-left:3%;}  
    }

    /* Media Queries: Tabled Portrait */
    @media screen and (max-width: 768px) {
        #primary { width:100%; }
        #secondary { width:100%; margin:0; border:none; }
    }

    @media (min-width: 640px) { body {font-size:1rem;} } 
    @media (min-width:960px) { body {font-size:1.2rem;} } 
    @media (min-width:1100px) { body {font-size:1.5rem;} } 

    img { max-width: 100%; height: auto; }

    html { font-size:100%; }

    .imgDimensions {
        text-align: center;
    }

    .collapse li a {
        padding-left: 5px;
    }

    .mainList {
        font-size: 24px !important;
    }

    ul.collapse a {
        font-size: 20px !important;
    }

    .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    color: rgb(22, 113, 197);
    /* color: rgb(22, 113, 197);
} */
}


.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
    

#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 padding-right:180px;
 width:600px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#585858;
}
#wrapper h1 p
{
 font-size:18px;
}
.section {
    font-size: 16px;
    margin-top: 25px;
    text-align: justify;
}

#search_box input[type="text"]
{
 /* border: 1px solid grey; */
 border-radius: 5px;
 /* height: 40px;
 width: 480px; */
 /* margin-left : 10px; */
 /* padding: 2px 23px 12px 30px; */
 outline: 0;
 background-color: #f5f5f5;
 position: fixed;
}
#search_box input[type="submit"]
{
 width:120px;
 height:40px;
 background-color:#585858;
 color:white;
 border:none;
 position: fixed;
}
    #result_div
{
 width:100%; 
 height:400px;
 margin-top: 100px;
 /* margin-left: 10px; */
 font-size:12px;
 background-color:white;
 color:white;
 border:none;
 overflow: scroll;
 position: fixed;
}
#result_div li
{ 
 margin-bottom:20px;
 list-style-type:none;
}
#result_div li a
{
 text-decoration:none;
 display:block;
 text-align:left;
}
#result_div li a .title
{
 font-weight:bold;
 font-size:18px;
 color:#5882FA;
}
#result_div li a .desc
{
 color:#6E6E6E;
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

/* Style the submit button */
.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

.open-button {
  font-size: 20px;
  color: white;
  top: 5px;
}


/* The popup form - hidden by default */

.form-popup {
    position: fixed;
    padding: 10px;
    z-index: 500;
    right: 12px;
    color: black;
    background: white;
    margin-top: 100px;
    border: 1px solid;
    box-shadow: 1px 1px 14px rgb(22, 113, 197);
    border-radius: 8px;
}


/* Add styles to the form container */

.form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
    /* color: rgb(22, 113, 197); */
    /* color: rgb(22, 113, 197);
} */
}


/* Full-width input fields */

.form-container input[type=text],
.form-container input[type=password] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: none;
    /* background: #f1f1f1;
    color: rgb(40, 137, 228); */
}


/* When the inputs get focus, do something */

.form-container input[type=text]:focus,
.form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


/* Set a style for the submit/login button */

.form-container .btn {
    background-color: #04aa49;
    color: white;
    border: none;
    cursor: pointer;
    width: fit-content;
    opacity: 0.8;
}


/* Add a red background color to the cancel button */

.form-container .cancel {
    background-color: red;
    width: fit-content;
}


/* Add some hover effects to buttons */

.form-container .btn:hover,
.open-button:hover {
    opacity: 1;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.fixednav {
    width: 100vw;
    background: black;
    position: fixed;
    top: 100;
    z-index: 5;
}

.topnav {
  overflow: hidden;
  background-color: #fffff;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}



</style>

<body>
    

    <div class="searchContentOfCHKD">
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
            <div id="introduction">
                <a href="#intro" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Introduction </a>
                <ul class="collapse " id="intro" style="margin-left: 20px;">
                    <li id="1" class="link">
                        <a href="#dedication" class='tab ' id='Topic1.1'>Dedication</a>
                    </li>

                    <li id="2" class="link">
                        <a href="#IntroTraumaProgram" class='tab ' id='Topic1.2'>Introduction and Program Mission</a>
                    </li>
                    <li id="3" class="link">
                        <a href="#traumaOrgChart" class='tab' id='Topic1.3'>Trauma Organizational Chart</a>
                    </li>
                    <li id="4" class="link">
                        <a href="#Consultant" class='tab' id='Topic1.4'>Consultant Contact Information</a>
                    </li>
                    <li id="5" class="link">
                        <a href="#surgeryTraumaEmergency" class='tab' id='Topic1.5'>Surgery/Trauma/Emergency Medical
                            Phone Numbers</a>
                    </li>
                </ul>
            </div>
            <div id="#traumaActivations">
                <a href="#trauma" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Trauma Activations
                </a>
                <ul class="collapse " id="trauma">
                    <li id="t2.1" class="link">
                        <a href="#topic2_1" class='tab ' id='Topic 2.1'>CHKD Trauma Triage Criteria</a>
                    </li>
                    <li id="t2.2" class="link">
                        <a href="#topic2_1" class='tab ' id='Topic 2.2'>Trauma Admission Protocol</a>
                    </li>
                    <li id="t2.3" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.3'>Patient Access Technician - ED</a>
                    </li>
                    <li id="t2.4" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.4'>CHKD Transfer Center - Kid Comm</a>
                    </li>
                    <li id="t2.5" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.5'>Activation of the Trauma System from Scene by
                            EMS</a>
                    </li>
                    <li id="t2.6" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.6'>Activation of the Trauma System Walk-In
                            Patients</a>
                    </li>
                    <li id="t2.7" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.7'>Trauma Team Activation Pathway</a>
                    </li>
                    <li id="t2.8" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.8'>Trauma/Medical Resuscitation Pre-Arrival
                            Checklist</a>
                    </li>
                    <li id="t2.9" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.9'>Pre-Arrival/Debrief Documentation</a>
                    </li>
                    <li id="t2.10" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.10'>Trauma Team Positioning</a>
                    </li>
                    <li id="t2.11" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.11'>Trauma Roles</a>
                    </li>
                    <li id="t2.12" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.12'>Pediatric Surgery Response</a>
                    </li>
                    <li id="t2.13" class="link">
                        <a href="#topic2_1" class='tab' id='Topic 2.13'>Trauma Alert Response</a>
                    </li>

                </ul>
            </div>
            <div id="#primarySurvey">
                <a href="#primarySurveyAlgo" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Primary Survey Algorithms </a>
                <ul class="collapse " id="primarySurveyAlgo">
                    <li id="t3.1" class="link">
                        <a href="#topic3_1" class='tab ' id='Topic3.1'>Rapid Sequence Induction</a>
                    </li>
                    <li id="3.2" class="link">
                        <a href="#topic3_2" class='tab ' id='Topic3.2'>Difficult Airway Management</a>
                    </li>
                    <li id="3.3" class="link">
                        <a href="#topic3_3" class='tab' id='Topic3.3'>Emergency Department Trauma Guideline for IV
                            Access</a>
                    </li>
                    <li id="3.4" class="link">
                        <a href="#topic3_4" class='tab' id='Topic3.4'>Broselow Tape</a>
                    </li>
                    <li id="3.5" class="link">
                        <a href="#topic3_5" class='tab' id='Topic3.5'>Resuscitative/ED Thoracotomy (EDT)</a>
                    </li>
                    <li id="3.6" class="link">
                        <a href="#topic3_6" class='tab' id='Topic3.6'>Hypothermia</a>
                    </li>
                </ul>
            </div>
            <div id="#nueroTrauma">
                <a href="#neuro" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Neurological/Spine
                    Trauma </a>
                <ul class="collapse " id="neuro">
                    <li id="t4.1" class="link">
                        <a href="#topic4_1" class='tab ' id='Topic4.1'>Pediatric and Adult Glasgow Coma Score (GCS)</a>
                    </li>
                    <li id="4.2" class="link">
                        <a href="#topic4_3" class='tab ' id='Topic4.2'>Traumatic Brain Injury</a>
                    </li>
                    <li id="4.3" class="link">
                        <a href="#topic4_3" class='tab' id='Topic4.3'>Post Stabilization Algorithm for Pediatric
                            Traumatic Brain
                            Injury</a>
                    </li>
                    <li id="4.4" class="link">
                        <a href="#topic4_4" class='tab' id='Topic4.4'>Isolated Mild Head Injury</a>
                    </li>
                    <li id="4.5" class="link">
                        <a href="#topic4_5" class='tab' id='Topic4.4'>Mild Head Injury with Post-Traumatic Seizures</a>
                    </li>
                    <li id="4.6" class="link">
                        <a href="#topic4_6" class='tab' id='Topic4.4'>Headache/Persistent Vomiting After Mild Closed
                            Head
                            Trauma</a>
                    </li>
                    <li id="4.7" class="link">
                        <a href="#topic4_7" class='tab' id='Topic4.4'>Cervical Spine Injury & Clearance</a>
                    </li>
                    <li id="4.8" class="link">
                        <a href="#topic4_8" class='tab' id='Topic4.4'>Thoracic/Lumbar/Sacral Spine Injury &
                            Clearance</a>
                    </li>
                    <li id="4.9" class="link">
                        <a href="#topic4_9" class='tab' id='Topic4.4'>Guidelines for Inpatient Care of Child with Spinal
                            Cord
                            Injury</a>
                    </li>
                    <li id="4.10" class="link">
                        <a href="#topic4_10" class='tab' id='Topic4.4'>Cervical Collar Sizing Guide</a>
                    </li>
                    <li id="4.11" class="link">
                        <a href="#topic4_11" class='tab' id='Topic4.4'>Standard Neurological Classification of Spinal
                            Cord
                            Injury</a>
                    </li>

                </ul>
            </div>
            <div id="#penetratingTrauma">
                <a href="#penetrating" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i> Penetrating
                    Trauma </a>
                <ul class="collapse " id="penetrating">
                    <li id="t5.1" class="link">
                        <a href="#topic5_1" class='tab ' id='Topic5.1'>Penetrating Cardiac Injury</a>
                    </li>
                    <li id="5.2" class="link">
                        <a href="#topic5_2" class='tab ' id='Topic5.2'>Penetrating Chest Trauma</a>
                    </li>
                    <li id="5.3" class="link">
                        <a href="#topic5_3" class='tab' id='Topic5.3'>Penetrating Neck Trauma</a>
                    </li>
                    <li id="5.4" class="link">
                        <a href="#topic5_4" class='tab' id='Topic5.4'>Transmediastinal Gunshot Wounds</a>
                    </li>
                    <li id="5.5" class="link">
                        <a href="#topic5_5" class='tab' id='Topic5.5'>Truncal Stab Wounds</a>
                    </li>
                    <li id="5.6" class="link">
                        <a href="#topic5_6" class='tab' id='Topic5.6'>Abdominal Stab Wounds</a>
                    </li>
                </ul>
            </div>
            <div id="#bluntTrauma">
                <a href="#blunt" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Blunt Trauma </a>
                <ul class="collapse " id="blunt">
                    <li id="t6.1" class="link">
                        <a href="#topic6_1" class='tab ' id='Topic6.1'>Blunt Cerebrovascular Injuries (BCVI)</a>
                    </li>
                    <li id="6.2" class="link">
                        <a href="#topic6_2" class='tab ' id='Topic6.2'>Blunt Aortic Injuries (BAI)</a>
                    </li>
                    <li id="6.3" class="link">
                        <a href="#topic6_3" class='tab' id='Topic6.3'>Blunt Cardiac Injuries (BCI)</a>
                    </li>
                    <li id="6.4" class="link">
                        <a href="#topic6_4" class='tab' id='Topic6.4'>Blunt Chest Trauma</a>
                    </li>
                    <li id="6.5" class="link">
                        <a href="#topic6_5" class='tab' id='Topic6.5'>Blunt Liver & Splenic Injury</a>
                    </li>
                    <li id="6.6" class="link">
                        <a href="#topic6_6" class='tab' id='Topic6.6'>Pancreatic Injury</a>
                    </li>
                    <li id="6.7" class="link">
                        <a href="#topic6_7" class='tab' id='Topic6.6'>Renal Trauma</a>
                    </li>
                    <li id="6.8" class="link">
                        <a href="#topic6_8" class='tab' id='Topic6.6'>Blunt Bowel & Mesenteric Injury</a>
                    </li>
                    <li id="6.9" class="link">
                        <a href="#topic6_9" class='tab' id='Topic6.6'>Blunt Abdominal Injury (Level 1 and 2)</a>
                    </li>
                    <li id="6.10" class="link">
                        <a href="#topic6_10" class='tab' id='Topic6.6'>Rectal Injury</a>
                    </li>
                    <li id="6.11" class="link">
                        <a href="#topic6_11" class='tab' id='Topic6.6'>Unstable Pelvic Fractures</a>
                    </li>
                </ul>
            </div>
            <div id="#otherIssues">
                <a href="#other" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Other Issues </a>
                <ul class="collapse " id="other">
                    <li id="t7.1" class="link">
                        <a href="#topic7_1" class='tab' id='Topic7.1'>Pediatric Peripheral Vascular Trauma</a>
                    </li>
                    <li id="7.2" class="link">
                        <a href="#topic7_2" class='tab' id='Topic7.2'>Extremity Compartment Syndrome</a>
                    </li>
                    <li id="7.3" class="link">
                        <a href="#topic7_3" class='tab' id='Topic7.3'>Mangled Extremity</a>
                    </li>
                    <li id="7.4" class="link">
                        <a href="#topic7_4" class='tab' id='Topic7.4'>Pediatric Trauma Score</a>
                    </li>
                    <li id="7.5" class="link">
                        <a href="#topic7_5" class='tab' id='Topic7.5'>Injury Severity Scoring</a>
                    </li>
                    <li id="7.6" class="link">
                        <a href="#topic7_6" class='tab' id='Topic7.6'>Organ Grading Scale</a>
                    </li>
                </ul>
            </div>
            <div id="#burnssection">
                <a href="#burns" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Burns </a>
                <ul class="collapse " id="burns">
                    <li id="t8.1" class="link">
                        <a href="#topic8_1" class='tab ' id='Topic8.1'>Burn Evaluation</a>
                    </li>
                    <li id="8.2" class="link">
                        <a href="#topic8_2" class='tab ' id='Topic8.2'>Transfer to Shriners</a>
                    </li>
                    <li id="8.3" class="link">
                        <a href="#topic8_3" class='tab' id='Topic8.3'>Electrical Injury</a>
                    </li>
                    <li id="8.4" class="link">
                        <a href="#topic8_4" class='tab' id='Topic8.4'>Inhalation Injury</a>
                    </li>
                    <li id="8.5" class="link">
                        <a href="#topic8_5" class='tab' id='Topic8.5'>Burn Care Power Plan</a>
                    </li>
                    <li id="8.6" class="link">
                        <a href="#topic8_6" class='tab' id='Topic8.6'>Acute Burn Wound Care</a>
                    </li>
                </ul>
            </div>
            <div id="#specialissues">
                <a href="#splissues" class="mainList" data-toggle="collapse"><i class="fa fa-book"></i>Special Issues
                </a>
                <ul class="collapse " id="splissues">
                    <li id="t10.1" class="link">
                        <a href="#topic10_1" class='tab ' id='Topic10.1'>PICU Care & Collaboration</a>
                    </li>
                    <li id="10.2" class="link">
                        <a href="#topic10_2" class='tab ' id='Topic10.2'>Acute Care Phase</a>
                    </li>
                    <li id="10.3" class="link">
                        <a href="#topic10_3" class='tab' id='Topic10.3'>I-Stat Use Critical Trauma (IO)</a>
                    </li>
                    <li id="10.4" class="link">
                        <a href="#topic10_4" class='tab' id='Topic10.4'>CT Contrast Infusion via Intraosseous Line</a>
                    </li>
                    <li id="10.5" class="link">
                        <a href="#topic10_5" class='tab' id='Topic10.5'>Protocol for Inpatient Radiology Procedures Under Anesthesia</a>
                    </li>
                    <li id="10.6" class="link">
                        <a href="#topic10_6" class='tab' id='Topic10.6'>SNGH Registration Process for CHKD Patients Going to SNGH for Radiology</a>
                    </li>
                    <!-- <li id="10.7" class="link">
                        <a href="#topic10_7" class='tab' id='Topic10.6'>Guide to Arranging Emergent Angioembolization for CHKD Patients at SNGH</a>
                    </li> -->
                    <li id="10.7" class="link">
                        <a href="#topic10_7" class='tab' id='Topic10.7'>Guide to Arranging Emergent Angioembolization for CHKD Patients at SNGH</a>
                    </li>
                    <li id="10.8" class="link">
                        <a href="#topic10_8" class='tab' id='Topic10.8'>Trauma Transfers from SNGH Protocol</a>
                    </li>
                    <li id="10.9" class="link">
                        <a href="#topic10_9" class='tab' id='Topic10.9'>Pregnant Trauma Patient Guidelines</a>
                    </li>
                    <li id="10.10" class="link">
                        <a href="#topic10_10" class='tab' id='Topic10.10'>Helmet Removal Process</a>
                    </li>
                    <li id="10.11" class="link">
                        <a href="#topic10_11" class='tab' id='Topic10.11'>DVT Prophylaxis</a>
                    </li>
                    <li id="10.12" class="link">
                        <a href="#topic10_12" class='tab' id='Topic10.12'>Massive Transfusion Protocol</a>
                    </li>
                    <li id="10.13" class="link">
                        <a href="#topic10_13" class='tab' id='Topic10.13'>Family Presence in the Trauma Bay</a>
                    </li>
                    <li id="10.14" class="link">
                        <a href="#topic10_14" class='tab' id='Topic10.14'>Pain Management and Palliative Care</a>
                    </li>
                    <li id="10.15" class="link">
                        <a href="#topic10_15" class='tab' id='Topic10.15'>Social Work Referrals</a>
                    </li>
                    <li id="10.16" class="link">
                        <a href="#topic10_16" class='tab' id='Topic10.16'>Child Abuse and Neglect</a>
                    </li>
                    <li id="10.17" class="link">
                        <a href="#topic10_17" class='tab' id='Topic10.17'>Commercial Sexual Exploitation of Children
</a>
                    </li>
                    <li id="10.18" class="link">
                        <a href="#topic10_18" class='tab' id='Topic10.18'>Pediatric Rehab Referrals</a>
                    </li>
                    <li id="10.19" class="link">
                        <a href="#topic10_19" class='tab' id='Topic10.19'>Chain of Evidence Procedure</a>
                    </li>
                    <li id="10.20" class="link">
                        <a href="#topic10_20" class='tab' id='Topic10.20'>Disaster Management Plan</a>
                    </li>
                    <li id="10.21" class="link">
                        <a href="#topic10_21" class='tab' id='Topic10.21'>Facility Lock Down Procedure</a>
                    </li>
                </ul>
            </div>
        </div>
         

        <div id="mainContent" class="content">
            <div id="overlay" class = "container-fluid" onclick="closeNav()">
            
                
            </div>
            
            
            <!-- nav bar -->
            <!-- <div class="container-fluid fixedNav">
                
                <button class="container-fluid openbtn" onclick="openNav()"><i class="fa fa-bars"></i>
                </button>
                
                     
            </div> -->

            <div class="topnav fixedNav">
                <button class="container-fluid openbtn" onclick="openNav()"><i class="fa fa-bars"></i>
                
            </button>
    

                <div class="search-container">
                    <form method="post" action="module_home" onsubmit="return do_search();">
                        <input type="text" placeholder="Search.." name="search" id="search_term"  onkeyup="do_search();">
                    <!-- <button type="submit">Submit</button> -->
                    </form>
                </div>
            </div> 

            <div class="container-fluid search-container" id="result_div">
            </div>
           
            <div class="container-fluid" style="width: auto;
            height: 100vh;
            background-image: url(./images/Cover.png);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #2f6cbf;">
            
                <div class="container-fluid">
                <br>
                <br>
                    <button class="container-fluid add-button"> Add to Desktop</button>
                    
                </div>
                <br>
                <br>
                
                
                
                    
                    
                    
              
               
            </div>
            
        

        
    

        <br>
        <br>

       

            <div class="container-fluid section" id="dedication">

            
                
                
                    <h2>A Deon to Michele Lombardo</h2>
                    <p>Michele was special. Once you met her, you couldn't imagine a time without her. She had that
                        unique ability to make you feel better about yourself. You liked who you were when you were with
                        her. You missed her when she wasn't around. </p>
                    <p>
                        Her husband Joe posted an entry on face book for her birthday, October 23. When I read it I
                        didn't think that I could do better at describing how Michele affected everyone who came in
                        contact with her and how she approached life. With his permission I am going to share some of
                        what was posted. </p>
                    <p> "When confronted with metastatic breast cancer she persevered, choosing to go out on her terms
                        and leaving it all on the field. Rather than be weighed down by sadness, anger, or self-pity,
                        her thoughts and actions remained selfless and positive. She was far less concerned about
                        herself than of how her illness and premature passing would impact everyone else." </p>
                    <p> "Not one to brag Michele rarely 'talked the talk' although she most definitely 'walked the walk'
                        in every facet of her life. The 'Four Foot Surgeon' raised the bar higher than many of us can
                        reach, but that doesn't mean we should not aspire to do the same. Her compassion, love,
                        ingenuity, strength, humility and humor will forever be a part of each of us." </p>
                    <p>"Akin to how she met everyone with a smile and how she always demurred any deference by refusing
                        to drop the 'doctor card' (or for that matter, the 'cancer card') to garner any sort of
                        accommodation, I challenge us all to live by Michele's ideals and example."
                        Joe went on to implore us to not mourn for the loss of Michele but to celebrate her life. Enjoy
                        music, laughter, food and good friends. For those of us who know Michele well, she had eclectic
                        taste in music, an impeccable sense of humor, gourmet sensibilities, and anybody who knew her
                        could call her friend. </p>
                    <p>
                        "Please, on October 23 and every day, make it count. Be sure to lend a hand to someone in need,
                        give to a favorite charity, share your favorite Michele-related story and celebrate who she was,
                        all that she did, and all that she continues to represent."
                        To my very good friend Michele - I miss you every day and without your help this manual would
                        not exist.</p>
                    <p>
                        ~ Dr. Ann Kuhn
                    </p>


                </div>
                <div class="container-fluid section" id="IntroTraumaProgram">
                    <h2>Introduction and Trauma Program Mission</h2>
                    <p>
                        The CHKD trauma program serves the children of Hampton
                        Roads, Virginia's Eastern Shore and Northeastern North Carolina.
                        As a specialized pediatric medical center, CHKD provides a multi-
                        disciplinary approach to care for injured children for all ranges of
                        acuity and injuries. The commitment to provide care to traumatically
                        injured children and their families extends from the frontline
                        providers to the board of directors. CHKD is currently seeking
                        trauma center verification from the Virginia Department of Health
                        which will allow for pediatric specialists from ED, surgery, ICU and all
                        subspecialties to care for patients directly from the field. The trauma
                        service is staffed by board-certified pediatric surgeons and their
                        support team of physician assistants, nurse practitioners, residents,
                        interns and office staff.
                    </p>
                    <p>
                        The trauma program is led by a board-certified pediatric surgeon who
                        completed a fellowship in trauma. The program is co-managed by
                        a pediatric emergency physician and employs a full-time RN trauma
                        program manager, RN trauma registrar and RN clinical practice
                        educator specialist.
                    </p>
                    <p> The program director chairs the hospital multi-disciplinary trauma PI
                        committee which includes representatives from all the major surgical
                        specialties and services including administration and nursing. The
                        trauma PI committee provides oversight for systems, patient care,
                        quality, policies and procedures to ensure the optimum care of any
                        injured patient is achieved.
                    </p>
                    <p>
                        Trauma is a surgical disease that requires the need for multiple
                        specialty services which CHKD is uniquely qualified to provide. The
                        purpose of this manual is to document established guidelines that
                        ensure an organized and systematic approach to care.</p>
                    <br><br><br>
                    <div class="alignCenter">
                        <h3> Children's Hospital of The King's Daughters</h3>
                        <h4>601 Children's Lane, Norfolk, VA 23507</h4>
                        <h4>PHONE: 757-668-7703 | FAX: 757-668-8860</h4>

                    </div>
                    <hr>
                    <div class="alignCenter">
                        <p style="color:#2f6cbf">CHKD.org/Trauma</p>
                    </div>

                </div>
                <div class="container-fluid section" id="traumaOrgChart">
                    <h2>Trauma Organizational Chart</h2>
                    <div style="text-align: center;"><img src="./images/orgchart.png" alt="Trauma Org Chart" width="800"
                            height="800"></div>
                </div>
                <div class="container-fluid section" id="Consultant">
                    <p>
                    <h2>Consultant Contact Information</h2>
                    <p> For most CHKD specialists, the consultant can be reached through
                        Doctors Direct at extension 8-9999. The exceptions are noted below.
                        In the case of an exception, please see the following page in this
                        trauma manual for contact information for these physicians. This page
                        is for quick reference only.</p>
                    <ul>
                        <li>
                            <p> Child Abuse Team:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            <p>Interventional Radiology at SNGH:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            <p>Rehabilitation Services:</p>
                            <p>See Protocol</p>
                        </li>
                        <li>
                            Obstetrics at SNGH:
                            See Protocol
                        </li>
                        <li>
                            Oral-Maxillofacial Surgery at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Orthopedics at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Vascular at SNGH:
                            Doctor’s Line 388-4000
                        </li>
                        <li>
                            Facial Fractures - Plastic Surgery
                        </li>
                        <li>Mandibular Fractures/Dental Surgeries - OMFS
                        </li>
                    </ul>

                    </p>
                </div>
                <div class="container-fluid section" id="surgeryTraumaEmergency">
                    <p>
                    <h2>Phone Numbers - Surgery/Trauma/Emergency Medicine</h2>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Surgery</th>
                                    <th scope="col">Pager #</th>
                                    <th scope="col">Office #</th>
                                    <th scope="col">Simon #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ann Kuhn, MD</td>
                                    <td>882-6904</td>
                                    <td>8-7558</td>
                                    <td>1697</td>
                                </tr>
                                <tr>
                                    <td>Frazier W. Frantz, MD</td>
                                    <td> 475-0600</td>
                                    <td>8-9856</td>
                                    <td>1123</td>
                                </tr>
                                <tr>
                                    <td>Michael Goretsky, MD</td>
                                    <td>475-3056</td>
                                    <td>8-9363</td>
                                    <td>1100</td>
                                </tr>
                                <tr>
                                    <td>Stephanie Kapfer, MD (weekend)</td>
                                    <td> 475-3098</td>
                                    <td></td>
                                    <td>6208</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </p>
                </div>

                <?php
                                $module_id = $_REQUEST['id'];
                                $sql = "SELECT * FROM edit_modules ORDER BY module_id;";
								$result = $conn->query($sql);
								if($result->num_rows>=0){
									while($row=$result->fetch_assoc()){
                                        $module_id = $row['module_id'];
										$sql_1 = "SELECT * FROM edit_modules WHERE module_id = '$module_id';";
                                        $result_1 = $conn->query($sql_1);
                                        if($result_1->num_rows>=0){
                                            while($row=$result_1->fetch_assoc()){
                                                $content = $row['module_content'];
                                            }
                                            echo $content;
								        }
								    }
								// echo $content;
								}
							    ?>
                

                
    </div>

            <?php
            require_once("connect_db_remodeled.php");
            $sql_1 = "SELECT * FROM edit_modules;";
            $result_1 = $conn->query($sql_1);
            if($result_1->num_rows>=0){
                while($row=$result_1->fetch_assoc()){
                    $content = $row['module_content'];
                    echo $content;
                }
            }
            ?>

            <?php
                require_once("connect_db_remodeled.php");
                if(isset($_POST['search']))
                {

                $search_val=$_POST['search_term'];
                    
                $sql ="SELECT * from modules_home where MATCH(title,description) AGAINST('$search_val')";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                while($row=$result->fetch_assoc())
                {
                echo "<li><a href='".$row['status']."'><span class='title'>".$row['title']."</span><br><span class='desc'>".$row['description']."</span></a></li>";
                }
                exit();
                }
                }
            ?>
                
    </div>
    

</body>

</html>
