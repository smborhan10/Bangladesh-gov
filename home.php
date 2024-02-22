<?php 
/**
 * Template Name: home
 */


get_header(); ?>
  <!-- Hero Part Start -->
  <section class="cont_p">
    <div class="row hero">
      <div class="col-lg-8 hero_main">
      <?php get_template_part('/templates-parts/banner'); ?>
        <!-- slider start -->
        <?php get_template_part('/templates-parts/slider'); ?>
        <!-- tab start -->
        <?php get_template_part('/templates-parts/tab'); ?>
        <!-- List Part Start -->
        <div class="list mt-4">
        <?php dynamic_sidebar('list'); ?>
        
       
        </div>
        <div class="others">Others</div>
      </div>
      <div class="col-lg-4 hero_side">
        <div class="side_img">
          <a href=""> 
          <?php dynamic_sidebar('sideimg'); ?>
          </a>
        </div>
        <h4>সকল বাতায়ন</h4>
        <form action="#">
          <select name="" id="">
            <option value="">ওয়েবসাইট বাছাই করুন</option>
            <option value="">মন্ত্রণালয়</option>
            <option value="">অধিদপ্তর </option>
            <option value="">ঢাকা বিভাগ</option>
            <option value="">চট্টগ্রাম বিভাগ</option>
          </select>
          <button>চলুন</button>
        </form>
        <div class="side_video">
          <?php dynamic_sidebar('sidevideo'); ?>
          
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Part End -->
  <?php get_footer(); ?>