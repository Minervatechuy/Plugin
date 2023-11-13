<?php require_once 'context.php'; ?>
<script src="<?=APIURL?>static/js/portada.js"></script>

<div id="body-div">
    <div id='div_response'>
        <link rel="stylesheet" href='<?=APIURL?>static/css/portada.css' />
        <div id="wrapper" class="wrapper-div" style="min-height: 30vh !important;">
            <a onclick="APIrequest(0)" class="my-super-cool-btn">
                <div class="dots-container">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <span>Comenzar</span>
            </a>
        </div>
    </div>

    <!-- Map container -->
    <div id="div_response_2" style="display: none;">
        
    </div>
</div>

<?php
echo "<script src='".plugin_dir_url( __DIR__ )."/js/maps.js'></script>";
echo "<script src='".plugin_dir_url( __DIR__ )."/js/auto-complete.js'></script>";
echo "<script>
        function initMapAndAutocomplete() {
            initMap();
            initAutocomplete();
        }
      </script>";
echo "<script async defer src='https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=drawing,places&v=weekly&callback=initMapAndAutocomplete'></script>";
?>