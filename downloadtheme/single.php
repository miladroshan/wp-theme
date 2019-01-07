<?php get_header(); ?>
<!-- Start Main Container -->
<div class="main-container">
        <!-- Start Article Container -->
    <div class="main-post">
        <div class="clear"></div>
        <!-- Start Article -->
        <?php
            while(have_posts())
            {
                the_post();
        ?>
            <!-- Start Article -->
            <article class="post">
                <header>
                    <div class="post-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                </header>
                <div class="post-content">
                    <?php the_content("") ?>
                </div>
                <footer>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub1<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-user"></span></a>
                        <div style="display:none">
                            <div id="sub1<?php the_ID(); ?>">نویسنده: <?php the_author(); ?></div>
                        </div>
                    </div>
                    
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub2<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-sitemap"></span></a>
                        <div style="display:none">
                            <div id="sub2<?php the_ID(); ?>"><?php the_category(','); ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub3<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-calendar"></span></a>
                        <div style="display:none">
                            <div id="sub3<?php the_ID(); ?>">تاریخ انتشار: <?php echo get_the_date('Y/m/d') ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub4<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-comment"></span></a>
                        <div style="display:none">
                            <div id="sub4<?php the_ID(); ?>">نظرات: <?php echo get_comments_number(); ?></div>
                        </div>
                    </div>
                    <div>
                        <a href="#" onmouseover="tooltip.pop(this, '#sub5<?php the_ID(); ?>', {position:0, effect:'slide'})"><span class="fa fa-tags"></span></a>
                        <div style="display:none">
                            <div id="sub5<?php the_ID(); ?>">برچسب ها: <?php the_tags(''); ?></div>
                        </div>
                    </div>
                </footer>
            </article>
            <!-- End Article -->
<?php
    }
?>
        <!-- End Article -->
        <div class="clear"></div>
        <!-- Start Meta -->
        <div class="post-meta">
            <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub10', {position:0, effect:'slide'})">
                <span class="fa fa-download"></span> دانلود
            </a>
            <div style="display:none">
                    <div id="sub10">حجم فایل 300 مگابایت</div>
                </div>
            <a href="#" class="help" onmouseover="tooltip.pop(this, '#sub11', {position:0, effect:'slide'})">
                <span class="fa fa-life-ring"></span> راهنما
            </a>
            <div style="display:none">
                    <div id="sub11">راهنمای کامل استفاده از فایل</div>
                </div>
            <a href="#" class="password" onmouseover="tooltip.pop(this, '#sub12', {position:0, effect:'slide'})">
                <span class="fa fa-info"></span> رمز فایل
            </a>
            <div style="display:none">
                    <div id="sub12">pass : MiladRoshan</div>
                </div>

        </div>
        <!-- End Meta -->
        <div class="clear"></div>
        <!-- Start Related -->
        <div class="related">
            <h4>مطالب مرتبط</h4>
            <ul>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="download" onmouseover="tooltip.pop(this, '#sub14', {position:0, effect:'slide'})"><img src="images/slider/4.jpg" alt=""></a>
                    <div style="display:none">
                        <div id="sub14">حجم فایل 300 مگابایت</div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Related -->
    </div>
    <!-- Start sidebar -->
    <?php get_sidebar("single"); ?>
    <!-- End sidebar -->
    </div>
    </div>
    <div class="clear"></div>
    <!-- Start Footer -->
    <?php get_footer(); ?>
    <!-- End Footer -->