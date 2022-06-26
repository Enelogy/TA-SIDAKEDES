    <!-- SCRIPTS -->

    <!-- JQuery -->

    <script type="text/javascript" src="<?= base_url(); ?>assets/LandingPage/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tooltips -->

    <script type="text/javascript" src="<?= base_url(); ?>assets/LandingPage/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->

    <script type="text/javascript" src="<?= base_url(); ?>assets/LandingPage/js/bootstrap.min.js"></script>





    <!-- Compiled and minified JavaScript -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->

    <!-- MDB core JavaScript -->

    <script type="text/javascript" src="<?= base_url(); ?>assets/LandingPage/js/mdb.min.js"></script>

    <!-- Initializations -->

    <script type="text/javascript">
        // Animations initialization

        new WOW().init();



        function topFunction() {

            document.body.scrollTop = 0;

            document.documentElement.scrollTop = 0;

        }
    </script>

    <script>
        // Except only numbers and slash (/) for salary textbox

        function onlySlashAndNumbers(event) {

            var charCode = (event.which) ? event.which : event.keyCode

            if (charCode == 47) {

                return true;

            }

            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;



            return true;

        }

        // Except only numbers and dot (.) for salary textbox

        function onlyDotsAndNumbers(event) {

            var charCode = (event.which) ? event.which : event.keyCode

            if (charCode == 46) {

                return true;

            }

            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;



            return true;

        }

        //Except only numbers for Age textbox

        function onlyNumbers(event) {

            var charCode = (event.which) ? event.which : event.keyCode

            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;



            return true;

        }



        function currentFormat(id, value) {

            value = value.split(',').join("");

            var bilangan = value;

            console.log(value)

            var number_string = bilangan.toString(),

                sisa = number_string.length % 3,

                rupiah = number_string.substr(0, sisa),

                ribuan = number_string.substr(sisa).match(/\d{3}/g);



            if (ribuan) {

                separator = sisa ? ',' : '';

                rupiah += separator + ribuan.join(',');

            }

            var idInput = document.getElementById(id);

            idInput.value = rupiah;

            console.log(rupiah)

            return rupiah // "$1,000.00"

        }



        // No alphabets for Emp No textbox

        function noAlphabets(event) {

            var charCode = (event.which) ? event.which : event.keyCode

            if ((charCode >= 97) && (charCode <= 122) || (charCode >= 65) && (charCode <= 90))

                return false;



            return true;

        }
    </script>





    <!-- Include SmartWizard JavaScript source -->

    <!-- <script type="text/javascript" src="<?= base_url(); ?>assets/SmartWizardMultiStep/js/jquery.smartWizard.js"></script> -->



    <script type="text/javascript">
        $(document).ready(function() {


            // $("#yt-subscribe").on("click", "a", function (event) {
            //     console.log('a');
            // });
            // $( ".yt-username" ).click(function() {
            //   console.log( "Handler for .click() called." );
            // });
            document.getElementById("liStep1").classList.remove("waves-effect");

            document.getElementById("liStep2").classList.remove("waves-effect");

            document.getElementById("liStep3").classList.remove("waves-effect");

            document.getElementById("liStep4").classList.remove("waves-effect");

            document.getElementById("liStep5").classList.remove("waves-effect");



            // $('.datepicker').pickadate();

            $(".datepicker").pickadate({

                monthSelector: true,

                yearSelector: true,

                selectMonths: true, // Creates a dropdown to control month

                selectYears: 29, // Creates a dropdown of 15 years to control year,

                max: true,

                today: 'Today',

                clear: 'Clear',

                close: 'Ok',

                format: 'dd mmmm, yyyy',

                // closeOnSelect: false // Close upon selecting a date,

            });



            // Step show event

            // $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {

            //    //alert("You are on step "+stepNumber+" now");

            //    if(stepPosition === 'first'){

            //        $("#prev-btn").addClass('disabled');

            //    }else if(stepPosition === 'final'){

            //        $("#next-btn").addClass('disabled');

            //    }else{

            //        $("#prev-btn").removeClass('disabled');

            //        $("#next-btn").removeClass('disabled');

            //    }

            // });



            // Toolbar extra buttons

            // var btnFinish = $('<button></button>').text('Finish')

            //                                  .addClass('btn btn-info')

            //                                  .on('click', function(){ alert('Finish Clicked'); });

            // var btnCancel = $('<button></button>').text('Cancel')

            //                                  .addClass('btn btn-danger')

            //                                  .on('click', function(){ $('#smartwizard').smartWizard("reset"); });



            // Please note enabling option "showStepURLhash" will make navigation conflict for multiple wizard in a page.

            // so that option is disabling => showStepURLhash: false

            // <?php

                ?>

            //     DetailPekerjaan('<?php  ?>', 'Ayah', 'Utama');

            //     DetailPekerjaan('<?php  ?>', 'Ayah', 'Sampingan');

            //     DetailPekerjaan('<?php  ?>', 'Ibu', 'Utama');

            //     DetailPekerjaan('<?php  ?>', 'Ibu', 'Sampingan');

            // <?php

                // }

                ?>



            $('#smartwizard').smartWizard({

                selected: 0,

                theme: 'arrows',

                transitionEffect: 'fade',

                showStepURLhash: false,

                toolbarSettings: {

                    toolbarPosition: 'bottom',

                    showNextButton: false, // show/hide a Next button

                    showPreviousButton: false // show/hide a Previous button

                    //,toolbarExtraButtons: [btnFinish, btnCancel]

                }

            });



            // $('.selectpicker').selectpicker({

            //     liveSearch: true,

            //     maxOptions: 1

            //   });

            //$('.mdb-select').material_Select();



            //$("#selectedTest").formSelect();

        });
    </script>



    <script type="text/javascript">
        function DetailPekerjaan(pekerjaan, orangtua, jenis_kerjaan) {

            switch (pekerjaan) {

                case '0':

                    // code block

                    break;

                case '1':

                    // code block

                    document.getElementById('div_pangkat_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_golongan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_sertifikasi_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '2':

                    // code block

                    document.getElementById('div_pangkat_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_golongan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '3':

                    // code block

                    document.getElementById('div_pangkat_kehormatan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '4':

                    // code block

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_sertifikasi_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '5':

                    // code block

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '6':

                    // code block

                    document.getElementById('div_punya_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_luas_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '7':

                    // code block

                    document.getElementById('div_pekerjaan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '8':

                    // code block

                    document.getElementById('div_punya_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_luas_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '9':

                    // code block

                    document.getElementById('div_pekerjaan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '13':

                    // code block

                    document.getElementById('div_jabatan_struktural_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '14':

                    // code block

                    document.getElementById('div_punya_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    document.getElementById('div_luas_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                case '99':

                    // code block

                    document.getElementById('div_pekerjaan_' + jenis_kerjaan + '_' + orangtua).style.display = "block";

                    break;

                default:

                    // code block

            }

        }
    </script>

    <!-- <script type="text/javascript" src="<?= base_url(); ?>assets/SmartWizardMultiStep/bootstrap-material-datetimepicker/js/pickadate.js"></script> -->

    <!-- <script type="text/javascript" src="<?= base_url(); ?>assets/LandingPage/js/pickadate.js"></script>  -->
