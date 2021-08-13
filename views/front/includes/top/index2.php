
<meta charset="UTF-8">
<meta name="description" content="<?php echo $description;?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="revisit-after" content="<?php echo $revisit_after; ?> days">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
  color: #5a5a5a;
  font-family: 'Open Sans',Arial,sans-serif;
  font-size: 15px;
}
h1,h2,h3,h4,h5{
    font-family: 'Montserrat', sans-serif;
}
a, a:hover, .btn{outline:none!important;}
.btn-search{background: #FD3A13; border-color: #FD3A13; color: #fff; padding: 7px 10px}
.btn-search:hover{background: #ca1b1b; border-color: #ca1b1b}
section{padding: 30px 0; float: left; width: 100%}
.card{float: left; width:100%}
.navbar {border: medium none; float: left; margin-bottom: 0px; width: 100%;  border-radius: 0}
.title-large {font-size: 20px; margin: 10px 0 5px; line-height: 27px; color: #141517;}
.title-small { color: #141517; font-size: 16px; font-weight: 400; line-height: 23px; margin: 6px 0 0;}
.title-x-small {font-size: 18px; margin: 0px;}
.title-large a, .title-small a, .title-x-small a{color: inherit}
.banner-sec{float: left; width: 100%; background: #EBEBEB}
.card-block{padding:0 10px 10px;}
.card-text{margin: 0}
.text-time{color: #ff0000; font-weight: 600;}
.banner-sec .card-img-overlay{padding: 0; top: 3px; left: 7px; height: 30px}

header{float: left; width:100%}
.small-top{ border-bottom: 1px solid #54a5ff;float: left; width: 100%; background: #54a5ff}
.small-top .social-icon{float: right;}
.small-top .social-icon a {border-left: 1px solid #2b2b2b; color: #ca1b1b; float: left; padding: 6px 13px;}
.small-top .social-icon a:last-child {border-right: 1px solid #2b2b2b;}
.small-top .social-icon a:hover {color:#FD3A13; text-decoration: none;}
.small-top .date-sec {font-size: 13px; font-weight: 600; float: left; margin-top: 4px; color: #898989}
.top-head{background: #515b6f; margin-top:10px; width: 100%; float: left; height: 100px;}
.top-head h1 {color: #fff; font-size: 36px; font-weight: 600; margin: 18px 0 0;}
.top-head small{float: left; width: 100%; font-size: 14px; color: #c0c0c0; margin-top: 5px; margin-left: 5px;}
.top-head .admin-bar {text-align: right; margin-top: 22px;}
.top-head .admin-bar a {color: #fff; line-height: 49px; position: relative; padding:0 7px;}
.top-head .admin-bar a:hover{color: #ff0000}
.top-head .admin-bar a i{margin-right: 6px;}
.top-head .admin-bar .ping {background: #ff0000; border: 3px solid #141517; border-radius: 50%; height: 14px; position: absolute; right: 3px;    top: 13px; width: 14px; z-index: 1;}
.top-head .admin-bar img {float: right; height: 50px; width: 50px; margin-left: 18px;}
.top-nav{background: #fff; padding: 0; border-bottom: 1px solid #dbdbdb}
.top-nav .nav-link {padding-bottom: 0.7rem; padding-top: 0.7rem;}
.top-nav .navbar-nav .nav-item + .nav-item{margin-left:0}
.top-nav li a{color: #141517; text-transform: uppercase; font-size: 14px; font-weight: 700; padding: 0 10px; border-bottom: 2px solid #fff}
.top-nav li a:hover, .top-nav li a:focus, .top-nav li.active a{color: #141517; border-bottom: 2px solid #FD3A13 }
.top-nav .form-control{border-color: #fff}
.badge{background-color: #54a5ff !important;}
.navbar-toggle{background: #fff;}
.navbar-toggle .icon-bar{background:#0A2E61; }
.navbar-brand{display: none;}

.top-slider .carousel-indicators{bottom: 0}
.top-slider .carousel-indicators li{border:1px solid #000;}
.top-slider .carousel-indicators .active{background:#000;}


.side-bar .nav-tabs{border-bottom:none;}
.side-bar .nav-tabs .nav-link {color: #aeaeae; text-transform: uppercase; border: none;}
.side-bar .nav-tabs .nav-link.active, .side-bar .nav-tabs .nav-link:hover{border-bottom:2px solid #ff0000;  text-transform: uppercase; color: #222}
.sidebar-tabing .media{margin-top: 20px}
.sidebar-tabing img{width: 120px;height: 100px;}
.sidebar-tabing .title-small {line-height: 23px; margin-top: 5px; font-size: 18px}

#search {float: right; margin-top: 9px; width: 250px;}
.search {padding: 5px 0; width: 230px; height: 30px; position: relative; left: 10px; float: left; line-height: 22px;}
.search input {background: #d0d0d0; border: medium none; border-radius: 3px 0 0 3px; float: left; height: 36px; line-height: 18px; margin-left: 210px; padding: 0 9px; position: absolute; top: -3px; width: 0; -webkit-transition: all 0.7s ease-in-out; -moz-transition: all 0.7s ease-in-out;
-o-transition: all 0.7s ease-in-out; transition: all 0.7s ease-in-out;}
.search:hover input, .search input:focus { width: 200px; margin-left: 0px; background: #d0d0d0;}
.top-nav .btn {position: absolute;right: 0;top: -3px;border-radius:3px;}

.banner-sec{float: left; width:100%;}
.banner-sec .news-block{margin-bottom: 20px}
.banner-sec .news-block:last-child{margin-bottom: 0px}
.banner-sec .news-des {margin-bottom: 5px;}
.banner-sec .title-large{margin: 18px 0 0}
.banner-sec .time{margin-top: 0px; font-size: 13px;}
.banner-sec .carousel-control.left, .banner-sec .carousel-control.right{background: none;}
.banner-sec .card{margin-bottom:20px;}

.section-01{float: left; width: 100%;  border-top: 1px solid #d5d5d5; border-bottom: 1px solid #d5d5d5}
.section-01 .heading-large {border-bottom: 2px solid #222; color: #222; float: left; width: 100%; padding:0 0 6px; margin:0 0 18px; text-align: left;}
.section-01 .heading-large::before, .section-01 .heading-large::after{background: transparent;}
.section-01 .heading-small {border-bottom: 2px solid #222; color: #222; float: left; margin: 7px 0 0; width: 100%; padding-bottom: 10px; font-size: 18px }
.section-01 .title-small {margin-bottom: 5px; font-size:17px }
.section-01 .news-block{border-bottom: 1px dashed #000; padding-bottom: 30px; border: none;}
.section-01 aside > .news-block{border-bottom: 1px dashed #000; padding-bottom: 19px;}
.section-01 aside > .news-block:last-child{border-bottom: none; margin-bottom: 20px}
.section-01 .card{border: none;}
.section-01 .card-block{padding: 10px 0;}
.section-01 .video-sec {float: left; margin-top: 30px; width: 100%;}
.section-01 .video-block {float: left; margin-top: 20px; width: 100%;}

.action-sec{width:100%; float:left; background:#222}
.action-box{float:left; width:100%; text-align:center;}
.action-box h2{color:#fff; font-size:20px;}

</style>
<?php
include 'meta/'.$asset_page.'.php';
?>
<!-- Favicon -->
<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value;?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>template/front/ico/apple-touch-icon-144-precomposed.png">

<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">

<title><?php echo $page_title; ?></title>
<?php if($this->crud_model->get_type_name_by_id('general_settings','80','value') == 'ok'){?>
    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', "<?php echo $this->db->get_where('general_settings',array('type'=>'google_analytics_key'))->row()->value; ?>", 'auto');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->
<?php } ?>

<?php $pixel_code = $this->crud_model->get_settings_value('general_settings','facebook_pixel_id','value'); ?>
<?php if($this->crud_model->get_settings_value('general_settings','facebook_pixel_set','value') == 'ok') { ?>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?= $pixel_code?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=<?= $pixel_code?>&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
<?php } ?>

<?php if($this->crud_model->get_settings_value('general_settings','facebook_chat_set','value') == 'ok') { ?>
    <?php $facebook_chat_page_id = $this->crud_model->get_settings_value('general_settings','facebook_chat_page_id','value'); ?>
    <?php $facebook_chat_theme_color = $this->crud_model->get_settings_value('general_settings','facebook_chat_theme_color','value'); ?>
    <?php $facebook_chat_logged_in_greeting = $this->crud_model->get_settings_value('general_settings','facebook_chat_logged_in_greeting','value'); ?>
    <?php $facebook_chat_logged_out_greeting = $this->crud_model->get_settings_value('general_settings','facebook_chat_logged_out_greeting','value'); ?>
<!-- facebook chat starts -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v6.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="<?= $facebook_chat_page_id ?>"
     <?php if (!empty($facebook_chat_theme_color)) { ?> theme_color="<?= $facebook_chat_theme_color ?>" <?php } ?>
    <?php if (!empty($facebook_chat_logged_in_greeting)) { ?>  logged_in_greeting="<?= $facebook_chat_logged_in_greeting ?>"  <?php } ?>
    <?php if (!empty($facebook_chat_logged_out_greeting)) { ?>  logged_out_greeting="<?= $facebook_chat_logged_out_greeting?>"> <?php } ?>
</div>
<!-- facebook chat ends -->
<?php } ?>
<div class="small-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 date-sec">
        <div id="Date"></div>
      </div>
            <div class="col-lg-3 offset-lg-5">
      </div>
      </div>
          </div>
  </div>
        <div class="top-head left">
    <div class="container">
            <div class="row">
        <div class="col-md-6 col-lg-4">
                <h1>Optazoom News<small>Get the latest News</small></h1>
              </div>
        <div class="col-md-6 col-lg-3 ml-auto admin-bar hidden-sm-down">
              </div>
      </div>
          </div>
  </div>
      </header>
      <section class="banner-sec">
        <div class="container">
    <div class="row">
      <?php 
$url= "https://www.opticianonline.net//site/GetRssFeed/News";
$xml = simplexml_load_file($url);
// print_r($xml);
for($i = 0; $i < 4; $i++){
$title = $xml->channel->item[$i]->title;
$link = $xml->channel->item[$i]->link;
$description = $xml->channel->item[$i]->description;
$ttl = $xml->channel->item[$i]->ttl;


echo  '
            <a href="'.$link.'"> <div class="col-md-3">
        <div class="card"> 
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">News</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a href="#">'.$title.'</a></h2>
                    <h2 class=" title-small"><a href="#">'.$description.'</a></h2>
                  </div>
                  </a>
            <p class="card-text"><small class="text-time"><em>3 mins ago</em></small></p>
          </div>
              </div>
      </div>';
}
?>
</div>
</div>
</section>
           
                    
                <?php 
                $url= "http://www.visionmonday.com/rss/eyecare/";
                $xml = simplexml_load_file($url);
                // print_r($xml);
                for($i = 0; $i < 5; $i++){
                $title = $xml->channel->item[$i]->title;
                $link = $xml->channel->item[$i]->link;
                $description = $xml->channel->item[$i]->description;
                $ttl = $xml->channel->item[$i]->ttl;
                $pundate = $xml->channel->item[$i]->pubDate;
                                    
    //         echo '<a href="'.$link.'"<div class="card"> <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/war.jpg" alt="">
    //                 <div class="card-body">
    //             <div class="news-title">'.$title.'<a href="#">
    //               <h2 class=" title-small"></h2>
    //               </a></div>
    //             <p class="card-text">'.$description.'</p>
    //             <p class="card-text"><small class="text-time"><em>'.$pundate .'</em></small></p>
    //           </div>
    //               </div>
    //       </div>
              
    //           </div>
    //   </div>';
      
  echo    '<div class="container>
  <div class="row"><div class="col-md-offset-1 col-md-10 mt-3 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> '.$title.'</h5>
        <p class="card-text">'.$description.'</p>
        <p class="card-text" style="color:red;">'.$pundate.'</p>
        <a href="'.$link.'" class="btn btn-primary mt-3">Read more..</a>
      </div>
    </div>
  </div></div></div>';
    }  ?>
          
     
      
      
      
      
<!-- CSS Global -->
<link href="<?php echo base_url(); ?>template/front/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/animate/animate.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/modal/css/sm.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/rateit/rateit.css" rel="stylesheet">


<!-- Theme CSS -->
<?php $theme =  $this->db->get_where('ui_settings',array('type' => 'header_color'))->row()->value;?>
<link href="<?php echo base_url(); ?>template/front/css/theme.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/css/theme-<?php echo $theme; ?>.css" rel="stylesheet" id="theme-config-link">

<link href="<?php echo base_url(); ?>template/front/plugins/smedia/custom-1.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/css/custom.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/css/Poppins/stylesheet.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>template/front/css/splide.min.css" rel="stylesheet">

<!-- Head Libs -->
<script src="<?php echo base_url(); ?>template/front/plugins/jquery/jquery-1.11.1.min.js"></script>
<?php
$font =  $this->db->get_where('ui_settings',array('type' => 'font'))->row()->value;
?>
<link href='https://fonts.googleapis.com/css?family=<?php echo $font; ?>:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<style>
    *{
        font-family: 'Poppins';
    }
    .remove_one{
        cursor:pointer;
        padding-left:5px;
    }
</style>

<?php
include $asset_page.'.php';
?>
		