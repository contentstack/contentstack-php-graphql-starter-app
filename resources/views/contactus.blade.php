@extends('layout.layout')
 
@section('content')
    <div data-pageref="blteb31a195576c2dd4" data-contenttype="page" data-locale="en-us">
   <div class="contact-page-section max-width">
      <div class="contact-page-content">
         <h1><?= $home["page_components"][0]["section_with_html_code"]["title"] ?></h1>
         <div>
            <?php echo ($home["page_components"][0]["section_with_html_code"]["description"]); ?>
         </div>
      </div>
      <div class="contact-page-form">
         <?= $home["page_components"][0]["section_with_html_code"]["html_code"]   ?>
      </div>
   </div>
   <div class="contact-maps-section max-width">
      <div class="maps-details"><?= $home["page_components"][1]["section_with_html_code"]["html_code"]   ?></div>
      <div class="contact-maps-content">
         <h2><?= $home["page_components"][1]["section_with_html_code"]["title"]   ?></h2>
         <div>
            <?php echo ($home["page_components"][1]["section_with_html_code"]["description"]); ?>
         </div>
      </div>
   </div>
   <input type="hidden" id="menu_items" value="/contact-us">
</div>
@endsection