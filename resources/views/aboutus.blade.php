@extends('layout.layout')
 
@section('content')
      <div data-pageref="bltc33628447a3d7283" data-contenttype="page" data-locale="en-us">
   <div class="hero-banner" style="background: rgb(255, 255, 255);">
      <div class="home-content" style="color: rgb(115, 123, 125);">
         <h1 class="hero-title"><?= $home["page_components"][0]["hero_banner"]["banner_title"] ?></h1>
         <p class="hero-description" style="color: rgb(115, 123, 125);"><?= $home["page_components"][0]["hero_banner"]["banner_description"] ?>
         </p>
      </div>
      <img alt="<?= $home["page_components"][0]["hero_banner"]["banner_imageConnection"]["edges"][0]["node"]["filename"] ?>" src="<?= $home["page_components"][0]["hero_banner"]["banner_imageConnection"]["edges"][0]["node"]["url"] ?>">
   </div>
   <div class="member-main-section">
      <div class="member-head">
         <h2><?= $home["page_components"][1]["section_with_buckets"]["title_h2"] ?></h2>
      </div>
      <div class="mission-section">
         <div class="mission-content-top">
            <div class="mission-content-section">
               <img class="mission-icon" src="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][0]["iconConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][0]["iconConnection"]["edges"][0]["node"]["filename"] ?>">
               <div class="mission-section-content">
                  <h3><?= $home["page_components"][1]["section_with_buckets"]["buckets"][0]["title_h3"] ?></h3>
                  <div>
                     <?php echo ($home["page_components"][1]["section_with_buckets"]["buckets"][0]["description"]); ?>
                  </div>
               </div>
            </div>
            <div class="mission-content-section">
              <img class="mission-icon" src="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][1]["iconConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][1]["iconConnection"]["edges"][0]["node"]["filename"] ?>">
               <div class="mission-section-content">
                  <h3><?= $home["page_components"][1]["section_with_buckets"]["buckets"][1]["title_h3"] ?></h3>
                  <div>
                     <?php echo ($home["page_components"][1]["section_with_buckets"]["buckets"][1]["description"]); ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="mission-content-bottom">
            <div class="mission-content-section">
               <img class="mission-icon" src="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][2]["iconConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][2]["iconConnection"]["edges"][0]["node"]["filename"] ?>">
               <div class="mission-section-content">
                  <h3><?= $home["page_components"][1]["section_with_buckets"]["buckets"][2]["title_h3"] ?></h3>
                  <div>
                      <?php echo ($home["page_components"][1]["section_with_buckets"]["buckets"][2]["description"]); ?>
                  </div>
               </div>
            </div>
            <div class="mission-content-section">
                <img class="mission-icon" src="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][3]["iconConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][1]["section_with_buckets"]["buckets"][3]["iconConnection"]["edges"][0]["node"]["filename"] ?>">
               <div class="mission-section-content">
                  <h3><?= $home["page_components"][1]["section_with_buckets"]["buckets"][3]["title_h3"] ?></h3>
                  <div>
                     <?php echo ($home["page_components"][1]["section_with_buckets"]["buckets"][3]["description"]); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="home-advisor-section">
      <div class="home-content">
         <h2><?= $home["page_components"][2]["section"]["title_h2"] ?></h2>
         <p><?= $home["page_components"][2]["section"]["description"] ?></p>
         <a class="btn secondary-btn" href="<?= $home["page_components"][2]["section"]["call_to_action"]["href"] ?>"><?= $home["page_components"][2]["section"]["call_to_action"]["title"] ?></a>
      </div>
      <img src="<?= $home["page_components"][2]["section"]["imageConnection"]["edges"][0]["node"]["url"] ?>" alt="<?= $home["page_components"][2]["section"]["imageConnection"]["edges"][0]["node"]["filename"] ?>">
   </div>
   <div class="about-team-section">
      <div class="team-head-section">
         <h2><?= $home["page_components"][3]["our_team"]["title_h2"] ?></h2>
         <p><?= $home["page_components"][3]["our_team"]["description"] ?></p>
      </div>
      <div class="team-content">
         <?php foreach ($home["page_components"][3]["our_team"]["employees"] as $row) { ?>
         <div class="team-details">
            <img alt="<?= $row["imageConnection"]["edges"][0]["node"]["filename"] ?>" src="<?= $row["imageConnection"]["edges"][0]["node"]["url"] ?>">
            <div class="team-details">
               <h4><?= $row["name"] ?></h4>
               <p><?= $row["designation"] ?></p>
            </div>
         </div>
      <?php } ?>
      </div>
   </div>
    <input type="hidden" id="menu_items" value="/about-us">
</div>
  
@endsection