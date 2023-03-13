@extends('layout.layout')
 
@section('content')

<div data-contenttype="page" data-locale="en-us">
   <div class="blog-page-banner" style="background: rgb(113, 91, 221);">
      <div class="blog-page-content">
         <h1 class="hero-title"><?= $blog["page_components"][0]["hero_banner"]["banner_title"] ?></h1>
         <p class="hero-description"><?= $blog["page_components"][0]["hero_banner"]["banner_description"] ?></p>
      </div>
   </div>
</div>

<div class="blog-container">
   <div class="blog-column-left">
      <?php foreach($home as $row){ ?>
      <div class="blog-list">
         <a href="<?= $row["url"] ?>"><img class="blog-list-img" src="<?= $row["featured_imageConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $row["featured_imageConnection"]["edges"][0]["node"]["filename"] ?>"></a>
         <div class="blog-content">
            <a href="<?= $row["url"] ?>">
               <h3><?= $row["title"] ?></h3>
            </a>
            <p><?php $date=date_create($row["date"]); echo date_format($date,"D, M d Y"); ?>, <strong><?= $row["authorConnection"]["edges"][0]["node"]["title"] ?></strong></p>
            <div style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5;       line-clamp: 2; -webkit-box-orient: vertical;">
              <?php echo ($row["body"]); ?>
            </div>
            
            <a href="<?= $row["url"] ?>"><span>Read more --&gt;</span></a>
         </div>
      </div>
   <?php } ?>
      
   </div>
   <div class="blog-column-right">
      <h2><?= $blog["page_components"][1]["widget"]["title_h2"] ?></h2>
      <?php foreach ($result as $row) { ?>
      <a href="<?= $row["url"] ?>">
         <div>
            <h4><?= $row["title"] ?></h4>
            <div style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5;       line-clamp: 2; -webkit-box-orient: vertical;">
               <?php echo ($row["body"]); ?>
            </div>
         </div>
      </a>
      <br/>
   <?php }?>
      
   </div>
   <input type="hidden" id="menu_items" value="/blog">
</div>
@endsection