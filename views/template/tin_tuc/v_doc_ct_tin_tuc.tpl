{extends file="layout/masterSanPham.tpl"}
{block name='content'}
    <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-book fa-4x"></i>
                        </div>
                       
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        {if $CTTin}
      						{foreach $CTTin as $tt}
      							{$array[]=$tt}
      						{/foreach}
							{/if}
                           
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8" id="mainTinTuc">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="300ms">                               
                             
								<div  class="post-excerpt">
									<h2>{$array['1']}</h2>
									
									<p><h3>{$array['4']}</h3></p>
                                    <p align="right">{$array['6']}</p>
                                    <p align="right">Ngày đăng: {$array['7']}
								</div>
								<div class="post-meta">
									<span class="comments">
										<i class="fa fa-comments"></i>18 Bình Luận
									</span>
									<span class="post-view">
										<i class="fa fa-eye"></i>{$array['9']} Lượt Xem
									</span>
								</div>
                            </article>
                            <!-- End Single Post -->
						
                            <div class="author-about clearfix">
                                
                                
                            </div>
                            
                            <div id="comments" class="comments-section">
                                <h4>Bình Luận</h4>
                                <ol class="comment-list">
                                    <li id="comment-1">
                                        <div class="comment-wrap">
                                            <div class="author-avatar pull-left">
                                                <img src="{$iPath}blog/user.jpg" alt="">
                                            </div>
                                           
                                            <div class="comment-content">
                                                <p>Bình Luận...</p>
                                            </div>
                                        </div>
                                        
                    
                                    </li>
                                </ol>
                            </div>
                            
                            <div class="comment-reply-form">
                               <h3>Để Lại Bình Luận</h3>
                                <form id="comment-form" method="post" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Tên *" id="name" name="name" required>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail *" id="email" name="email" required>
                                    </div>
                                    <!-- End .form-group -->
                                    
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Nội Dung *" id="message" name="message" rows="5" cols="5" required></textarea>
                                    </div>
                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <input type="submit" id="post-comment" value="Gửi Bình Luận" class="btn btn-transparent">
                                    </div>
                                    <!-- End .form-group -->
                                </form>
                            </div>
                            <!-- End Single Post -->

                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInUp"  data-wow-duration="1000ms">
							<div class="widget-title">
                               <h3>Top News</h3>
							</div>
                           
                        </aside>
                        <!-- End Single Widget -->
						
                      
                       
                       <!-- Single Widget -->
                       
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
              
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                    
                        <!-- End Single Widget -->
                       
                       <!-- Single Widget -->
                       
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->




{/block}