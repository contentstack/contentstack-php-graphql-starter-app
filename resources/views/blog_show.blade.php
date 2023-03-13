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
   <article class="blog-detail">
      <h2><?= $blog_entry["title"] ?></h2>
      <p><?php $date=date_create($blog_entry["date"]); echo date_format($date,"D, M d Y"); ?>, <strong><?= $blog_entry["authorConnection"]["edges"][0]["node"]["title"] ?></p>
      <div>
         <?php echo ($blog_entry["body"]); ?>
      </div>
   </article>
   <div class="blog-column-right">
      <div class="related-post">
         <h2>Related Post</h2>
         <?php foreach ($related_post["edges"] as $row) { ?>
         <a href="<?= $row["node"]["url"] ?>">
            <div>
               <h4><?= $row["node"]["title"] ?></h4>
               <div style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5;       line-clamp: 2; -webkit-box-orient: vertical;">
                  <?php echo $row["node"]["body"]; ?>
               </div>
            </div>
         </a>
         <br/>
         <?php } ?>
      </div>
   </div>
   <input type="hidden" id="menu_items" value="/blog">
</div>
@endsection