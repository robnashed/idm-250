<?php
/*
Template Name: Web / Home
*/
get_header(); ?>



<!--PAGE CONTENT-->
<div class="col-3">
            <div class="pageContainer">
            <?php if (have_posts()): ?>
          <article class="post">
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
               <!-- <header>PAGE</header>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eros est, tincidunt eget tristique eget, condimentum tempus risus. Maecenas volutpat feugiat mi, nec tempus augue aliquet a. Donec euismod ligula vitae ultrices condimentum. Vivamus placerat ante quis magna laoreet elementum. Quisque ut volutpat diam. Fusce tristique neque a odio sodales ultrices. Cras nunc quam, ullamcorper faucibus eleifend id, venenatis non est. Nullam mi purus, vulputate id porttitor et, sodales a lectus. Nam suscipit mollis eros, in ornare tortor blandit ut. Nullam eu lorem lorem. Aenean nulla neque, sollicitudin at magna quis, tempor mollis lacus. Fusce id accumsan turpis, non dapibus tortor. Quisque id molestie urna. Vestibulum interdum eget nunc nec commodo. Maecenas massa purus, fringilla non massa non, ullamcorper aliquet massa.</p>
                <p><span class="gray">Cras iaculis ipsum sit amet dui blandit posuere. Vestibulum nec auctor nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent magna leo, eleifend at metus quis, gravida pellentesque lorem. Cras finibus urna eget diam pharetra, id tincidunt nisl lacinia. Phasellus nec tellus maximus, aliquam nulla eu, vulputate elit. Integer nibh ligula, posuere sit amet auctor a, consectetur eu arcu. Vivamus a rhoncus turpis.</span></p>
                <img src="dist/img/grass.png" alt="grass">
                <p class="raleway">Curabitur ut congue velit, eget scelerisque diam. Mauris vitae condimentum metus, ac tempus tortor. Ut venenatis turpis non justo ullamcorper, eu pretium est fringilla. Phasellus tortor urna, pellentesque eget sapien ut, mollis tempus lectus. Etiam in velit varius, ullamcorper nunc venenatis, tincidunt tellus. Etiam mi sem, viverra ut lorem vel, tincidunt eleifend urna. Proin odio ex, lobortis et posuere vitae, blandit sed urna. Mauris augue enim, mollis non risus id, iaculis ultricies tortor. Proin nec nibh non dui ornare varius vitae sit amet quam. Nullam fringilla sit amet est sit amet congue.</p>
                <p>Mauris ut interdum mi. Duis sagittis sit amet leo id pretium. In feugiat ac erat in tincidunt. Morbi pretium elementum arcu, eu iaculis purus lobortis id. Fusce in ipsum efficitur, efficitur enim eu, consectetur tellus. In leo quam, sagittis eget maximus in, congue id nisl. Fusce sollicitudin at mauris a efficitur. Fusce vestibulum efficitur leo, a vehicula tortor laoreet non. Integer pharetra augue eget sem eleifend mollis. Duis tincidunt tellus at urna semper, cursus rutrum nisi accumsan. Morbi elementum, magna non cursus suscipit, ligula ligula auctor nisi, accumsan pellentesque felis purus quis magna. Curabitur risus neque, viverra nec sem a, sollicitudin bibendum orci.</p>
                <p class="raleway">Nulla at lorem ac ex laoreet venenatis vitae vel lectus. Morbi et molestie augue. Sed semper nisi nisi, sollicitudin cursus nisl auctor eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque mattis purus et venenatis sodales. Pellentesque feugiat felis in ligula sagittis bibendum. Ut in finibus sapien.</p> -->
            </div>

        </div>

<?php get_footer(); ?>
