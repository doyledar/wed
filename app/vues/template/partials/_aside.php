<?php
/*--------------------------------------------------------------------------
../app/vues/template/partials/_aside.php
-----------------------------------------------------------------------------*/
 ?>

 <div class="blog_right_sidebar">
     <aside class="single_sidebar_widget search_widget">
         <form action="#">
             <div class="form-group">
                 <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder='Search Keyword'
                         onfocus="this.placeholder = ''"
                         onblur="this.placeholder = 'Search Keyword'">
                     <div class="input-group-append">
                         <button class="btns" type="button"><i class="ti-search"></i></button>
                     </div>
                 </div>
             </div>
             <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                 type="submit">Search</button>
         </form>
     </aside>

     <aside class="single_sidebar_widget post_category_widget">
       <?php
          include_once '../app/controleurs/categoriesControleur.php';
          \App\Controleurs\Categories\indexActionCategories($connexion);
        ?>
     </aside>

     <aside class="single_sidebar_widget tag_cloud_widget">
        <?php
          include_once '../app/controleurs/tagsControleur.php';
          \App\Controleurs\Tags\indexActionTags($connexion);
        ?>
     </aside>

     <aside class="single_sidebar_widget newsletter_widget">
         <h4 class="widget_title">Newsletter</h4>

         <form action="#">
             <div class="form-group">
                 <input type="email" class="form-control" onfocus="this.placeholder = ''"
                     onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
             </div>
             <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                 type="submit">Subscribe</button>
         </form>
     </aside>
 </div>
