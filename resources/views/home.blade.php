@extends('layout.layout')
 
@section('content')
 
	<div data-pageref="" data-contenttype="page" data-locale="en-us">
   <div class="hero-banner" style="background: rgb(113, 92, 221);">
      <div class="home-content" style="color: rgb(255, 255, 255);">
         <h1 class="hero-title"><?= $home["page_components"][0]["hero_banner"]["banner_title"] ?></h1>
         <p class="hero-description" style="color: rgb(255, 255, 255);"><?= $home["page_components"][0]["hero_banner"]["banner_description"] ?></p>
         <a class="btn tertiary-btn" href="<?= url($home["page_components"][0]["hero_banner"]["call_to_action"]["href"]) ?>"><?= $home["page_components"][0]["hero_banner"]["call_to_action"]["title"] ?></a>
      </div>
      <img alt="<?= $home["page_components"][0]["hero_banner"]["banner_imageConnection"]["edges"][0]["node"]["filename"] ?>" src="<?= $home["page_components"][0]["hero_banner"]["banner_imageConnection"]["edges"][0]["node"]["url"] ?>">
   </div>
   <div class="home-advisor-section">
      <img src="<?= $home["page_components"][1]["section"]["imageConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][1]["section"]["imageConnection"]["edges"][0]["node"]["title"] ?>">
      <div class="home-content">
         <h2><?= $home["page_components"][1]["section"]["title_h2"] ?></h2>
         <p><?= $home["page_components"][1]["section"]["description"] ?></p>
         <a class="btn secondary-btn" href="<?= url($home["page_components"][1]["section"]["call_to_action"]["href"]) ?>"><?= $home["page_components"][1]["section"]["call_to_action"]["title"] ?></a>
      </div>
   </div>
   <div class="member-main-section">
      <div class="member-head">
         <h2><?= $home["page_components"][2]["section_with_buckets"]["title_h2"] ?></h2>
         <p><?= $home["page_components"][2]["section_with_buckets"]["description"] ?></p>
      </div>
      <div class="member-section">
         <?php foreach($home["page_components"][2]["section_with_buckets"]["buckets"] as $row){ ?>
         <div class="content-section">
            <img src="<?= $row["iconConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $row["iconConnection"]["edges"][0]["node"]["title"] ?>">
            <h3><?= $row["title_h3"] ?></h3>
            <div>
               <?php echo $row["description"]; ?>
            </div>
            <a href="<?= url($row["call_to_action"]["href"]) ?>"><?= $row["call_to_action"]["title"] ?> --&gt;</a>
         </div>
      <?php } ?>
      </div>
   </div>
   <div class="community-section">
      <div class="community-head">
         <h2><?= $home["page_components"][3]["from_blog"]["title_h2"] ?></h2>
         <a class="btn secondary-btn article-btn" href="<?= url($home["page_components"][3]["from_blog"]["view_articles"]["href"]) ?>"><?= $home["page_components"][3]["from_blog"]["view_articles"]["title"] ?></a>
      </div>
      <div class="home-featured-blogs">
         <?php foreach($home["page_components"][3]["from_blog"]["featured_blogsConnection"]["edges"] as $row) { ?>
         <div class="featured-blog">
            <img src="<?= $row["node"]["featured_imageConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $row["node"]["featured_imageConnection"]["edges"][0]["node"]["filename"] ?>" class="blog-post-img">
            <div class="featured-content">
               <h3><?= $row["node"]["title"] ?></h3>
               <div style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5;       line-clamp: 2; -webkit-box-orient: vertical;">
                  <?php echo $row["node"]["body"]; ?>
               </div>
               <a class="blogpost-readmore" href="<?= url($row["node"]["url"]) ?>">Read More --&gt;</a>
            </div>
         </div>
      <?php } ?>
     
      </div>
   </div>
   <div class="demo-section">
      <?php foreach($home["page_components"][4]["section_with_cards"]["cards"] as $row){ ?>
      <div class="cards">
         <h3><?= $row["title_h3"] ?></h3>
         <p><?= $row["description"] ?> </p>
         <div class="card-cta"><a class="btn primary-btn" href="<?= url($row["call_to_action"]["href"]) ?>"><?= $row["call_to_action"]["title"] ?></a></div>
      </div>
      <?php }?>
      
   </div>
   <input type="hidden" id="menu_items" value="/">
</div>
 
@endsection


	
  
     


