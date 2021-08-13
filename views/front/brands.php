

<?php
    include 'includes/top/index.php';
    ?>
    <?php
$preloader = '1';
//include 'preloader/preloader_'.$preloader.'.php';
include 'preloader.php';
?>
<?php
    include 'components/cart_modal.php';
    ?>
     <?php
        include $page_name.'/index.php';
        ?>
        <?php
include 'script_texts.php';
?>
<?php
include 'includes/bottom/index.php';
?>
<style>
    .home-switch.active {
        right: 0px;
    }
    .home-switch {
        position: fixed;
        right: -220px;
        top: 20vh;
        z-index: 99999;
        box-shadow: 0 0 20px rgba(0,0,0,0.5);
        background: #fff;
        transition: all 0.3s;
        -webkit-transition: all 0.3s;
    }

    .home-switch .preview > div {
        height: 200px;
        width: 200px;
        overflow-y: auto;
        margin: 10px;
        border: 1px solid #ddd;
        cursor: pointer;
    }

    .home-switch .preview div img {
        width: 100%;
    }

    .home-switch button {
        position: absolute;
        background: #000000;
        border: 0;
        right: 100%;
        font-size: 18px;
        padding: 10px;
        box-shadow: -7px 0 10px rgba(0,0,0,0.3);
        border-right: 1px solid #ddd;
        color: #fff;
        font-weight: 700;
    }
    .home-switch .preview > div div {
        padding: 5px;
        font-size: 15px;
        text-align: center;
        background: #000;
        color: #fff;
        font-weight: 700;
    }
    .brand_name{
        font-size: 16px;
        font-weight: bold;
        color: #000000; 
        text-align: center;
    }
    .border_custom{
        border:1px solid #ccbfbf;;
    }
    .brand_images_style{
        height: 200px;
        width: 100%;
        object-fit: contain;
    }
</style>
 
  
    
    
  
<div class="container">
    <div class="page-header">
            <h2 class="section-title section-title-lg">
                <span>
                    All Brands                </span>
            </h2>
        </div>
    <div class="row">
        <?php  $brands = $this->crud_model->brands();
            
 
     foreach($brands as $brand){ ?>
        <div class="col-md-4 py-4">
            <div class="border_custom p-4">
                <div>
                    <img src="<?php echo base_url('uploads/brand_image/').$brand->logo ?>"  class="brand_images_style">
                    
                    <p class="brand_name pt-4"><?php echo $brand->name;   ?></p>
                </div>
            </div> 

        </div>
                     <?php  } ?>
    </div>
 
</div>
<script>
    $(document).ready(function(){
        $('.home-switch button').on('click', function(){
            if ($('.home-switch').hasClass('active')) {
                $('.home-switch').removeClass('active');
            } else{
                $('.home-switch').addClass('active');
            }
        });

        $('.home-switch').on('click', function (e) {
            e.stopPropagation();
        });

        $('.home-preview').on('click', function (e) {
            window.location.href =  $(this).attr('url');
        });

        $(document).on('click', function (e) {
            if ($('.home-switch').hasClass('active')) {
                $('.home-switch').removeClass('active');
            }
        });
    });

</script>


<!-- for demo only -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/603e1f531c1c2a130d63f813/1evpaua6u';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>