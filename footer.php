
    </div>  
    </div> 
    </div> 
<!-- =====  FOOTER START ===== -->
<div class="footer pt_60 mt_30">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20 mb_20">Thông Tin</h6>
            <ul>
              <li><a href="{{ asset('home') }}">- Đồ Án Nhóm 4</a></li>
              <li><a href="{{ asset('contact') }}">- Chuyên Đề CMS</a></li>
              <li><a href="{{ asset('contact') }}">- Liên Hệ</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20 mb_20">Danh Mục</h6>
            <ul>
              <?php
                $arr_cate = array( 
                  'post_type' => 'product',
                  'child_of'  => 0, 
                  'parent'    => 0,
                  'taxonomy'  => 'product_cat'
                );
                $categories = get_categories( $arr_cate);
                foreach ($categories as $cate) {
                ?>
                  <li><a href="<?php echo get_term_link( $cate->slug, 'product_cat') ?>">- <?php echo $cate->name; ?></a></li>
                <?php
                }
                ?>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20 mb_20">Thành Viên</h6>
            <ul>
                <li><a>- Phạm Văn Hiệu</a></li>
                <li><a>- Huỳnh Đại Long</a></li>
                <li><a>- Nguyễn Đức Duy</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20 mb_20 mb_20">Liên Hệ</h6>
            <ul>
              <li>
              - <a target="_blank" href="{{$link_map}}"><span>TRƯỜNG CAO ĐẲNG CÔNG NGHỆ THỦ ĐỨC.</a></span>
              </li> 
              <li>
              <a href="">- Nhóm 4</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="text-center">&copy; Sản Phẩm Thuộc Về <a href="{{ url('home') }}" title="">Nhóm 4</a></div>
        </div>
      </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
</div>
<a id="scrollup"><i class="far fa-arrow-alt-circle-up"></i></i></a>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/jQuery_v3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/frontend/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>