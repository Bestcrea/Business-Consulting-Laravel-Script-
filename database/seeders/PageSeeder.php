<?php

namespace Database\Seeders;

use Botble\Base\Facades\Html;
use Botble\Base\Supports\BaseSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;
use Botble\Page\Models\Page;
use Illuminate\Support\Facades\File;

class PageSeeder extends BaseSeeder
{
    use HasPageSeeder;

    public function run(): void
    {
        Page::query()->truncate();

        $this->uploadFiles('backgrounds');
        $this->uploadFiles('general');
        $this->uploadFiles('brands');
        $this->uploadFiles('icons');
        $this->uploadFiles('sliders');

        $styleDetailPage = [
            'header_style' => 'style-3',
            'header_top_sidebar_style' => 'style-2',
        ];

        $styleDefaultPage = [
            'header_style' => 'style-2',
        ];

        $footerStyle1 = [
            'footer_style' => 'style-1',
            'bottom_footer_style' => 'style-1',
            'customize_footer' => 'custom',
            'footer_background_color' => '#FFFFFF',
            'footer_text_color' => '#ffffff',
            'footer_border_color' => '#0055FF',
            'footer_text_muted_color' => '#96A1B8',
            'footer_background_image' => $this->filePath('backgrounds/bg-footer-dark.png'),
        ];

        $privacyPolicyContent = File::get(database_path('seeders/contents/privacy-policy.html'));

        $pages = [
            [
                'name' => 'Home',
                'content' => Html::tag('div', '[hero-banner title="Get a Smart Way For Your Business" subtitle="WE ARE EXPERT IN THIS FIELD" description="Agilos Helps You To Convert Your Data Into A Strategic Asset And Get Top-Notch Business Insights." button_label="Our Services" button_url="/services" button_play_video_label="Watch  The Video" youtube_url="https://www.youtube.com/watch?v=2h478iPhuEw" image="general/finance-banner-img.png" background_image="backgrounds/finance-banner-bg.png" background_image_1="backgrounds/banner-shape01.png" background_image_2="backgrounds/banner-shape02.png" background_image_3="backgrounds/banner-shape03.png" style="style-1"][/hero-banner]') .
                    Html::tag('div', '[featured-service-categories category_ids="1,2,3" enable_lazy_loading="yes"][/featured-service-categories]') .
                    Html::tag('div', '[about-us-information title=" 25 Years Of Experience In This Finance Advisory Company" subtitle="GET TO KNOW US" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum." founded_year="1993" company_description="Of Experience in This Finance Advisory Company." quantity="4" title_1="100% Better Results" title_2="Suspe Ndisse Suscipit Sagittis" title_3="Promis Specific TimelineI Guarantee" title_4="Review Credit Reports" sub_description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture" author_name="Mark Stranger,CEO, Gerow Finance" author_bio="CEO, Gerow Finance" author_avatar="general/about-author.png" author_signature="general/signature.png" image="general/about-img01.png" image_1="general/about-img02.png" background_image_1="backgrounds/about-shape01.png" background_image_2="backgrounds/about-shape02.png" background_image_3="backgrounds/about-shape03.png" enable_lazy_loading="yes"][/about-us-information]') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" enable_lazy_loading="yes"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[featured-services title="We can inspire and Offer Different Services" subtitle="WHAT WE DO FOR YOU" service_ids="1,2,3,4" button_label="See All Services" button_url="/services" background_image="backgrounds/services-bg02.png" enable_lazy_loading="yes"][/featured-services]') .
                    Html::tag('div', '[company-overview title="Plan your business strategy with Our Experts" subtitle="COMPANY OVERVIEW" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum. Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem." image="general/overview-img01.png" image_1="backgrounds/overview-img02.png" background_image="backgrounds/overview-shape.png" background_image_1="backgrounds/overview-img-shape.png" quantity="2" title_1="Best Award" logo_1="flaticon-trophy" data_1="235" unit_1="+" title_2="Happy Clients" logo_2="flaticon-rating" data_2="98" unit_2="K" style="style-1" enable_lazy_loading="yes"][/company-overview]') .
                    Html::tag('div', '[intro-video title="We’ll Ensure You Always Get the Best Guidance." description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem." button_label="Watch Video" youtube_video_url="https://www.youtube.com/watch?v=2h478iPhuEw" background_image="general/choose-bg.png" background_image_1="backgrounds/choose-shape.png" box_title="Smart & Great Finance For you Solutions" box_subtitle="WHY WE ARE THE BEST" box_description="Morem Ipsum Dolor Sit Amet Consectedipiscing Elita Florai Psum Dolor Sit Amonsectet Borem Ipsum Consectetur." quantity="3" title_1="Consulting" percent_1="85" title_2="Investment" percent_2="76" title_3="Business" percent_3="90" enable_lazy_loading="yes"][/intro-video]') .
                    Html::tag('div', '[featured-projects title="Our recently completed projects list" subtitle="COMPLETE PROJECTS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="backgrounds/project-bg02.png" project_ids="1,2,3" enable_lazy_loading="yes"][/featured-projects]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg.png" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[teams title="Our Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="/backgrounds/team-shape.png" quantity="4" team_id_1="1" image_1="teams/1-1.png" team_id_2="2" image_2="teams/1-2.png" team_id_3="3" image_3="teams/1-3.png" team_id_4="4" image_4="teams/1-4.png" team_id_5="1" team_id_6="1" style="style-1" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[testimonials title="What Customers Say’s About Our Gerow Services" subtitle="OUR TESTIMONIALS"  testimonial_ids="1,2,3,4" background_image="backgrounds/testimonial-bg.png" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('div', '[pricing title="We’ve offered the best pricing for you" subtitle="FLEXIBLE PRICING PLAN" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." package_ids="1,2,3" background_image="backgrounds/pricing-shape.png" enable_lazy_loading="yes"][/pricing]') .
                    Html::tag('div', '[news title="Read Our Latest Updates" subtitle="NEWS & BLOGS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." type="featured" limit="3" background_image="backgrounds/blog-bg-1.png" style="style-1" post_style="style-1" enable_lazy_loading="yes"][/news]'),
                'template' => 'homepage',
            ],
            [
                'name' => 'Consulting',
                'content' => Html::tag('div', '[hero-banner title="Need Business Consultation Today" description="Agilos Helps You To Convert Your Data Into A Strategic Asset And Get Top-Notch Business Insights." image="galleries/5.png" image_1="backgrounds/consulting-banner-img02.png" image_2="general/consulting-banner-img03.png" background_image_1="backgrounds/consulting-banner-shape01.png" background_image_2="backgrounds/about-shape01.png" style="style-2"][/hero-banner]') .
                    Html::tag('div', '[brands title="Trusted by 10,000+ companies around the world" quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-2"][/brands]') .
                    Html::tag('div', '[featured-service-categories title="The features that make our Service unique" subtitle="WHAT WE DO FOR YOU" category_ids="1,2,3,4" style="style-2"][/featured-service-categories]') .
                    Html::tag('div', '[about-us-information title="We are the next gen Business experience" subtitle="GET TO KNOW US" description="With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand." quantity="2" title_1="Business Growth" description_1="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_1="flaticon-profit" title_2="Target Audience" description_2="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_2="flaticon-mission" image="galleries/1.png" image_1="backgrounds/consulting-about-img02.png" background_image_1="backgrounds/mask-img.png" background_image_2="backgrounds/consulting-about-shape01.png" background_image_3="backgrounds/about-shape01.png" background_image_4="backgrounds/consulting-about-shape03.png" style="style-2"][/about-us-information]') .
                    Html::tag('div', '[company-overview title="We Prepare An Effective Strategy For Companies" subtitle="COMPANY OVERVIEW" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture." image="galleries/3.png" image_1="backgrounds/overview-img04.png" background_image="backgrounds/mask-img02.png" background_image_1="backgrounds/overview-shape01.png" background_image_2="backgrounds/overview-shape02.png" quantity="3" title_1="Consulting" data_1="85" title_2="Investment" data_2="76" title_3="Investment" data_3="90" style="style-2"][/company-overview]') .
                    Html::tag('div', '[site-statistics quantity="4" title_1="Success Rate" data_1="95" unit_1="%" title_2="Complete Projects" data_2="55" unit_2="K" title_3="Satisfied Clients" data_3="25" unit_3="K" title_4="Trade In The World" data_4="15" unit_4="K"][/site-statistics]') .
                    Html::tag('div', '[teams title="Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." quantity="4" team_id_1="1" image_1="teams/2-1.png" team_id_2="2" image_2="teams/2-2.png" team_id_3="3" image_3="teams/2-3.png" team_id_4="4" image_4="teams/2-4.png" team_id_5="1" team_id_6="1" style="style-2" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[testimonials  testimonial_ids="1,2,3,4" image="general/testimonial-img.png" background_image="backgrounds/testimonial-bg1.png" style="style-2" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg02.png" style="style-2" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[news title="Read Our Latest Updates" subtitle="NEWS & BLOGS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." type="featured" limit="3" post_style="style-2" enable_lazy_loading="yes"][/news]'),
                'template' => 'homepage',
                'metadata' => array_merge([
                    'header_style' => 'style-2',
                    'header_top_sidebar_style' => 'style-2',
                ], $footerStyle1),
            ],
            [
                'name' => 'Insurance',
                'content' => Html::tag('div', '[hero-banner title="Enjoy Life With Safety Insurance" subtitle="INSURANCE AGENCY" description="Agilos Helps You To Convert Your Data Into Rategic Asset Emand Get Top-Notch Business Insights." button_label="Discover More" button_url="/contact" image="general/insurance-banner-img.png" background_image="backgrounds/insurance-banner-bg.png" background_image_1="backgrounds/about-shape01.png" background_image_2="backgrounds/insurance-banner-shape02.png" background_image_3="backgrounds/insurance-banner-shape03.png" style="style-3"][/hero-banner]') .
                    Html::tag('div', '[featured-service-categories category_ids="1,2,3" style="style-3"][/featured-service-categories]') .
                    Html::tag('div', '[about-us-information title="Today, any health insurance deductible can feel like" subtitle="INSURANCE AGENCY" description="When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic." founded_year="2015" company_description="Years Of Experience" quantity="6" title_1="100% Better Results" title_2="Suspe Ndisse Suscipit Sagittis" title_3="Promis TimelineI Guarantee" title_4="Review Credit Reports" title_5="Insured Customers" icon_5="flaticon-trophy.png" data_5="63" unit_5="%" title_6="Satisfied Award" icon_6="flaticon-family.png" data_6="95" unit_6="%" image="galleries/4.png" image_1="general/about-img04.png" style="style-3"][/about-us-information]') .
                    Html::tag('div', '[featured-services title="We can inspire and Offer Different Services" subtitle="WHAT WE DO FOR YOU" service_ids="1,2,3,4" button_label="See All Services" button_url="/services" background_image="backgrounds/about-shape03.png" style="style-3"][/featured-services]') .
                    Html::tag('div', '[why-choose-us title="We’ll Ensure You Always Get the Best Guidance." subtitle="WHY CHOOSE US" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem." image="general/choose-img.png" background_image_1="backgrounds/choose-img-shape01.png" background_image_2="backgrounds/choose-img-shape02.png" background_image_3="backgrounds/choose-shape.png" background_color="#001641" quantity="3" title_1="Business Growth" data_1="55" unit_1="%" title_2="Trusted Clients" data_2="80" unit_2="%" title_3="Complete Insurance" data_3="98" unit_3="%"][/why-choose-us]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg03.png" style="style-3" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[request-quote title="Get an insurance quote From Our Expertise" subtitle="GET A FREE ESTIMATE" image="general/estimate-img.png" background_image="backgrounds/about-shape03.png" enable_lazy_loading="yes"][/request-quote]') .
                    Html::tag('div', '[teams title="Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." quantity="4" team_id_1="1" image_1="teams/3-1.png" team_id_2="2" image_2="teams/3-2.png" team_id_3="3" image_3="teams/3-3.png" team_id_4="4" image_4="teams/3-4.png" team_id_5="1" team_id_6="1" style="style-3" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[pricing title="We’ve offered the best pricing for you" subtitle="FLEXIBLE PRICING PLAN" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." package_ids="1,2,3" background_image="backgrounds/pricing-shape.png" style="style-2"][/pricing]') .
                    Html::tag('div', '[news title="Read Our Latest Updates" subtitle="NEWS & BLOGS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." type="featured" limit="3" post_style="style-2" enable_lazy_loading="yes"][/news]'),
                'template' => 'homepage',
                'metadata' => array_merge([
                    'header_style' => 'style-3',
                    'header_top_sidebar_style' => 'style-1',
                ], $footerStyle1),
            ],
            [
                'name' => 'Digital Agency',
                'content' => Html::tag('div', '[hero-banner title="Get Digital Products For your Business" highlight_text="Products" description="When An Unknown Printer Took A Galley Type And Scramble Make A Type Specimen Book. It Has Survived Not Only Five Centuries But Also Leap." button_label="Our Services" button_url="/services" image="general/banner-main-img.png" image_1="general/banner-shape01.png" background_image="backgrounds/banner-shape02.png" background_image_1="backgrounds/banner-shape05.png" style="style-4"][/hero-banner]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('div', '[services-list title="Provide Best Services" badge="OUR EXPERTISE" description="Morem Ipsum Dolor Sit Amet Consectetur Adipiscingelita Florai PsumBoremipsum Dolor Sit Amet." background_color="#FFFFFF" service_ids="1,2,4" style="style-5"][/services-list]') .
                    Html::tag('div', '[about-us-information title="We’re The Best Digital Marketing Company" subtitle="INSURANCE AGENCY" description="When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake." button_label="Take our Service" button_url="/services" quantity="4" title_1="100% Better Results" title_2="Promis TimelineI" title_3="Ndisse Suscipit Sagittis" title_4="Review Credit Reports" image="general/about-img.png" image_1="backgrounds/about-shape01.png" background_image_1="backgrounds/about-shape02.png" style="style-5"][/about-us-information]') .
                    Html::tag('div', '[site-statistics quantity="6" title_1="Best Awards" icon_1="flaticon-trophy" data_1="25" unit_1="K" title_2="Happy Clients" icon_2="flaticon-rating" data_2="223" unit_2="K" title_3="Projects Done" icon_3="flaticon-folder-1" data_3="98" unit_3="K" title_4="Expert People" icon_4="flaticon-round-table" data_4="22" unit_4="K" style="style-2"][/site-statistics]') .
                    Html::tag('div', '[teams title="Experience Team Members" subtitle="MEET OUR TEAM" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Minddestmentor Area" quantity="4" team_id_1="1" image_1="teams/4-1.png" team_id_2="2" image_2="teams/4-2.png" team_id_3="3" image_3="teams/4-3.png" team_id_4="4" image_4="teams/4-4.png" team_id_5="1" team_id_6="1" style="style-5" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[featured-projects title="We’ve Done Lot’s Of Work, Let’s Check Some From Here" subtitle="CASE STUDIES" button_label="See All Projects" button_url="/projects" project_ids="5,6,7,8,9" style="style-2" enable_lazy_loading="yes"][/featured-projects]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg02.png" style="style-2" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[testimonials title="What our awesome customers say" subtitle="What our awesome customers say" testimonial_ids="1,2,3,4" image="general/testimonial-img03.png" background_image="backgrounds/about-shape06.png" background_image_1="backgrounds/banner-shape02.png" background_image_2="icons/testimonial-shape04.png" background_image_3="icons/quote.png" style="style-5" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('div', '[news title="Read Our Latest Updates" subtitle="NEWS & BLOGS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." type="featured" limit="3" post_style="style-4" enable_lazy_loading="yes"][/news]'),
                'template' => 'homepage',
                'metadata' => [
                    'header_style' => 'style-3',
                    'header_top_sidebar_style' => 'style-1',
                ],
            ],
            [
                'name' => 'Business',
                'content' => Html::tag('div', '[hero-banner-slider title_1="Grow Your Business More Efficiently" title_2="Grow Your Start Up Now" subtitle_1="We Are Expert In This Field" subtitle_2="We Are Gerow" description_1="Agilos helps you to convert your data into a strategic asset and get top-notch business insights." description_2="Gerow helps you to convert your data into a strategic asset and get top-notch business insights." button_label_1="Our Services" button_url_1="/services-one" button_label_2="Contact Us" button_url_2="/contact" image_1="sliders/banner-bg.jpg" background_image_1="backgrounds/banner-shape.png" image_2="sliders/banner-bg02.jpg" background_image_2="backgrounds/banner-shape.png"][/hero-banner-slider]') .
                    Html::tag('div', '[company-overview title="Changing The Way To Do Best Business Solutions" subtitle="WHAT WE ARE DOING" description="Revolutionizing the Business Landscape: A Journey Towards Unprecedented Success and Sustainable Growth Through Innovative Solutions and Visionary Leadership." image="general/about-img01.png" background_image="backgrounds/about-bg.jpg" background_image_1="backgrounds/about-img-shape01.png" background_image_2="backgrounds/about-shape02.png" quantity="2" title_1="Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Finance Investment" description_2="Finance Helps You To Convert Into A Strategic Asset Get" style="style-6"][/company-overview]') .
                    Html::tag('div', '[featured-service-categories category_ids="1,2,3" style="style-5"][/featured-service-categories]') .
                    Html::tag('div', '[about-us-information title="Building Your Own Startup Has Been Simpler" subtitle="Who We are" description="Transforming the Business Landscape: Leading a New Era of Excellence, Innovation, and Sustainability in Solutions and Leadership for Unprecedented Success and Global Impact." button_label="Get Started With Us" button_url="/contact" quantity="6" title_1="100% Better results" title_2="Valuable Ideas" title_3="Budget Friendly Theme" title_4="Happy Customers" title_5="Total revenue in 1 year" data_5="+150,000" title_6="Increase in sales" data_6="90%" sub_description="Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture. Consecteture.Borem Ipsum Dolor Sit Amectetur Adipiscing." image="general/choose-bg.png" youtube_url="https://www.youtube.com/watch?v=2h478iPhuEw" button_play_video_icon="fa fa-play" image_1="general/breadcrumb-bg.png" background_image="backgrounds/finance-banner-bg.png" background_image_1="backgrounds/about-shape02.png" background_image_2="backgrounds/about-shape04.png" style="style-8"][/about-us-information]') .
                    Html::tag('div', htmlentities('[featured-services title="Spotlight Some Most <br> Important Features We Have" subtitle="Our Dedicated Services" description="Unveiling Our Remarkable Features: Shining a Spotlight on the Cornerstones That Define Our Distinctiveness and Excellence." service_ids="1,2,3,4" background_image="backgrounds/services-bg.jpg" style="style-4"][/featured-services]')) .
                    Html::tag('div', '[site-statistics background_image="backgrounds/counter-bg.jpg" background_image_1="backgrounds/counter-shape01.png" background_image_2="backgrounds/counter-shape01.png" quantity="4" title_1="Success Rate" data_1="95" unit_1="%" title_2="Complete Projects" data_2="55" unit_2="K" title_3="Satisfied Clients" data_3="25" unit_3="K" title_4="Trade In The World" data_4="12" unit_4="K" style="style-4"][/site-statistics]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[featured-projects title="Keep Your Business Safe & Ensure High Availability." subtitle="COMPLETE PROJECTS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="backgrounds/project-bg.jpg" project_ids="1,2,3,4" style="style-3" enable_lazy_loading="yes"][/featured-projects]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[featured-specialty title="Keep Your Business Safe & Ensure High Availability." subtitle="OUR SERVICE BENIFITS" description="Ever Find Yourself Staring At Your Computer S Good Consulting Slogan To Come To Mind? Oftentimes." image="projects/4.png" image_1="backgrounds/overview-img02.png" background_image="backgrounds/faq-shape01.png" background_image_1="backgrounds/faq-shape02.png" background_image_2="backgrounds/banner-shape02.png" background_color="#00194C" quantity="3" title_1="Interdum et malesuada fames ac ante ipsum" description_1="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan." title_2="Interdum et malesuada ante ipsum" description_2="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan." title_3="Ente ipsumerdum et malesuada fames" description_3="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan." style="style-2"][/featured-specialty]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg02.png" style="style-2" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[teams title="Meet Our Dedicated Team" subtitle="SKILLED TEAM MEMBERS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="backgrounds/team-bg.png" quantity="4" team_id_1="1" image_1="teams/5-1.png" team_id_2="2" image_2="teams/5-2.png" team_id_3="3" image_3="teams/5-3.png" team_id_4="4" image_4="teams/5-4.png" style="style-4" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[testimonials  testimonial_ids="1,2,3,4" image="general/testimonial-img01.png" background_image="backgrounds/testimonial-bg.png" background_image_1="icons/quote.png" box_title="15K" box_image="icons/rating.png" box_description="Positive Review" style="style-4" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('div', '[pricing title="We’ve offered the best pricing for you" subtitle="FLEXIBLE PRICING PLAN" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." package_ids="1,2,3" background_image="backgrounds/pricing-shape.png" style="style-3"][/pricing]') .
                    Html::tag('div', '[contact-form title="We Are Connected To Help Your Business!" subtitle="GET IN TOUCH" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." button_label="SUBMIT NOW" background_image="backgrounds/contact-bg.jpg" background_image_1="backgrounds/contact-shape.png"][/contact-form]') .
                    Html::tag('div', '[news title="Read Our Latest Updates" subtitle="NEWS & BLOGS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." type="featured" limit="3" style="style-2" post_style="style-5" enable_lazy_loading="yes"][/news]') .
                    Html::tag('div', '[brands title="Trusted by 10,000+ companies around the world" quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-3"][/brands]'),
                'template' => 'homepage',
                'metadata' => [
                    'header_style' => 'style-2',
                    'header_top_sidebar_style' => 'style-1',
                ],
            ],
            [
                'name' => 'About',
                'content' => Html::tag('div', '[about-us-information title="Innovative Business Solutions For Success Company" subtitle="WHO WE ARE" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet Consecteture Borem Ipsum Dolor Sitter Consectetur Adipiscing Elita Florai Psum." founded_year="2015" company_description="Years Of Experience" button_label="Contact Us" button_url="/contact" quantity="2" title_1="Total Revenue" data_1="152" unit_1="K" icon_1="flaticon-investment" title_2="Increase In Sales" data_2="95" unit_2="%" icon_2="flaticon-profit" sub_description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture. Consecteture.Borem Ipsum Dolor Sit Amectetur Adipiscing." image="galleries/6.png" image_1="galleries/2.png" background_image_1="backgrounds/about-shape01.png" style="style-4"][/about-us-information]') .
                    Html::tag('div', '[featured-service-categories title="Amazing Features For Business Solutions" subtitle="CORE FEATURES" category_ids="1,2,3" background_image="backgrounds/services-bg02.png" background_image_1="backgrounds/features-shape02.png" background_image_2="backgrounds/features-shape02.png" style="style-4"][/featured-service-categories]') .
                    Html::tag('div', '[teams title="Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." quantity="4" team_id_1="1" image_1="teams/2-1.png" team_id_2="2" image_2="teams/2-2.png" team_id_3="3" image_3="teams/2-3.png" team_id_4="4" image_4="teams/2-4.png" team_id_5="1" team_id_6="1" style="style-2" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[testimonials  testimonial_ids="1,2,3,4" image="general/testimonial-img01.png" background_image="backgrounds/testimonial-bg.png" background_image_1="icons/quote.png" box_title="15K" box_image="icons/rating.png" box_description="Positive Review" style="style-4" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => array_merge($styleDetailPage, $footerStyle1),
            ],
            [
                'name' => 'About 2',
                'content' => Html::tag('div', '[company-overview title="We Have More Than 20+ Years Of Practical Finance Industries" subtitle="GET TO KNOW MORE" description="Morem Ipsum Dolor Sit Amet Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet Consecteture Borem Ipsum Dolor Sitter Consectetur Adipiscing Elita Florai Rem Ipsum Dolor Sit Amet Consectetu." image="general/overview-img01.png" image_1="backgrounds/inner-about-img04.png" button_label="Our Services" button_url="/services" author_name="Mark Stranger" author_bio="CEO, Gerow Finance" author_avatar="general/about-author.png" quantity="2" title_1="Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." logo_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Helps You To Convert Into A Strategic Asset Get" logo_2="flaticon-investment" style="style-3"][/company-overview]') .
                    Html::tag('div', '[featured-specialty title="Keep Your Business Safe & Ensure High Availability." subtitle="WHAT SPECIALTY" description="Ever Find Yourself Staring At Your Computer S Good Consulting Slogan To Come To Mind? Oftentimes." image="general/inner-choose-img.png" background_color="#00194C" quantity="3" title_1="Interdum et malesuada fames ac ante ipsum" description_1="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan." title_2="Interdum et malesuada ante ipsum" description_2="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan." title_3="Ente ipsumerdum et malesuada fames" description_3="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Coind Yourself Sta Your Computer Screen A Good Consulting Slogan."][/featured-specialty]') .
                    Html::tag('div', '[teams title="Meet Our Dedicated Team" subtitle="SKILLED TEAM MEMBERS" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="backgrounds/team-bg.png" quantity="4" team_id_1="1" image_1="teams/5-1.png" team_id_2="2" image_2="teams/5-2.png" team_id_3="3" image_3="teams/5-3.png" team_id_4="4" image_4="teams/5-4.png" style="style-4" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[testimonials  testimonial_ids="1,2,3,4" image="general/testimonial-img.png" background_image="backgrounds/testimonial-bg1.png" style="style-2" enable_lazy_loading="yes"][/testimonials]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => array_merge($styleDetailPage, $footerStyle1, [
                    'pre_footer_sidebar_style' => 'style-1',
                ]),
            ],
            [
                'name' => 'About 3',
                'content' => Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[about-us-information title="We are the next gen Business experience" subtitle="GET TO KNOW US" description="With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand." quantity="2" title_1="Business Growth" description_1="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_1="flaticon-profit" title_2="Target Audience" description_2="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_2="flaticon-mission" image="galleries/1.png" image_1="backgrounds/consulting-about-img02.png" background_image_1="backgrounds/mask-img.png" background_image_2="backgrounds/consulting-about-shape01.png" background_image_3="backgrounds/about-shape01.png" background_image_4="backgrounds/consulting-about-shape03.png" style="style-2"][/about-us-information]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg03.png" style="style-4" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('div', '[site-statistics title="Consulting is a law firm specializing in corporate finance work" subtitle="TOP FEATURES" description="Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including: Issues Under Company Law & Exchange Control Regulations" quantity="4" title_1="Best Awards" icon_1="flaticon-trophy" data_1="23" unit_1="K" title_2="Happy Clients" icon_2="flaticon-rating" data_2="223" unit_2="K" title_3="Projects Done" icon_3="flaticon-folder-1" data_3="98" unit_3="K" title_4="Expert People" icon_4="flaticon-round-table" data_4="22" unit_4="K" background_image="backgrounds/overview-shape.png" style="style-3"][/site-statistics]') .
                    Html::tag('div', '[teams title="Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." quantity="4" team_id_1="1" image_1="teams/3-1.png" team_id_2="2" image_2="teams/3-2.png" team_id_3="3" image_3="teams/3-3.png" team_id_4="4" image_4="teams/3-4.png" team_id_5="1" team_id_6="1" style="style-3" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[pricing title="We’ve offered the best pricing for you" subtitle="FLEXIBLE PRICING PLAN" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." package_ids="1,2,3" background_image="backgrounds/pricing-shape.png" style="style-2"][/pricing]'),
                'template' => 'page-detail',
                'metadata' => array_merge($styleDetailPage, $footerStyle1),
            ],
            [
                'name' => 'About 4',
                'content' => Html::tag('div', '[about-us-information title="We are the next gen Business experience" subtitle="GET TO KNOW US" description="With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand. When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centurieswhen An Unknown Printer Took A Galley Of Type And Scrambled It To Make Specimen Book" founded_year="2010" company_description="Years Of Experience" quantity="2" title_1="Insured Customers" icon_1="flaticon-family" data_1="63" unit_1="%" title_2="Satisfied Award" icon_2="flaticon-trophy" data_2="95" unit_2="%" image="galleries/4.png" image_1="general/consulting-banner-img03.png" background_image_1="backgrounds/banner-shape02.png" style="style-6"][/about-us-information]') .
                    Html::tag('div', '[company-overview title="Consulting Insurance firm specializing in This Field" subtitle="TOP FEATURES" description="Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including: Issues Under Company Law & Exchange Control Regulations" background_image="backgrounds/pricing-shape.png" quantity="3" title_1="Child Insurance" data_1="55" title_2="Insurance Claim" data_2="76" title_3="Investment" data_3="90" style="style-4"][/company-overview]') .
                    Html::tag('div', '[teams title="Our Dedicated Team Members" subtitle="EXPERT PEOPLE" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." background_image="/backgrounds/team-shape.png" quantity="4" team_id_1="1" image_1="teams/1-1.png" team_id_2="2" image_2="teams/1-2.png" team_id_3="3" image_3="teams/1-3.png" team_id_4="4" image_4="teams/1-4.png" team_id_5="1" team_id_6="1" style="style-1" enable_lazy_loading="yes"][/teams]'),
                'template' => 'page-detail',
                'metadata' => array_merge(
                    ['pre_footer_sidebar_style' => 'style-2'],
                    $styleDetailPage,
                    $footerStyle1,
                ),
            ],
            [
                'name' => 'About 5',
                'content' => Html::tag('div', '[about-us-information title="Best Digital Solution Provider Agency" subtitle="WHO WE ARE" description="When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake." button_label="Take Our Service" button_url="/services" quantity="3" title_1="Digital Creative Agency" title_2="Professional Problem Solutions" title_3="Web Design & Development" image="general/inner-about-img05.png" image_1="backgrounds/about-shape07.png" background_image_1="backgrounds/banner-shape02.png" style="style-7"][/about-us-information]') .
                    Html::tag('div', '[company-overview title="Consulting Digital Agency specializing in This Field" subtitle="EXPERTISE AREAS" description="Advice On Comprehensive Legal Solutions And Legal Planning On All Aspects Of Business, Including Issues" image="general/about-img.png" background_image="backgrounds/about-shape08.png" background_image_1="backgrounds/about-shape02.png" quantity="3" title_1="Child Insurance" data_1="55" title_2="Insurance Claim" data_2="76" title_3="Investment" data_3="90" style="style-5"][/company-overview]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg03.png" style="style-4" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[teams title="Experience Team Members" subtitle="MEET OUR TEAM" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Minddestmentor Area" quantity="4" team_id_1="1" image_1="teams/4-1.png" team_id_2="2" image_2="teams/4-2.png" team_id_3="3" image_3="teams/4-3.png" team_id_4="4" image_4="teams/4-4.png" team_id_5="1" team_id_6="1" style="style-5" enable_lazy_loading="yes"][/teams]') .
                    Html::tag('div', '[contact-block title="Let’s Request A Schedule For Free Consultation" hotline="1238989444" subtitle="Hotline 24/7" button_label="Request a Schedule" button_url="/contact" background_image="backgrounds/request-bg.png" background_image_1="backgrounds/features-shape02.png" style="style-5" enable_lazy_loading="yes"][/contact-block]'),
                'template' => 'page-detail',
                'metadata' => array_merge(
                    ['pre_footer_sidebar_style' => 'none'],
                    $styleDetailPage,
                ),
            ],
            [
                'name' => 'Services',
                'content' => Html::tag('div', '[services-list title="Spotlight some most important features We have" description="Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances." background_image="backgrounds/inner-services-bg.jpg" background_color="#E0F0F6" service_ids="1,2,3,4,5,6" style="style-1"][/services-list]'),
                'template' => 'page-detail',
                'metadata' => $styleDetailPage,
            ],
            [
                'name' => 'Services 2',
                'content' => Html::tag('div', '[services-list title="We can inspire and Offer Different Services" badge="WHAT WE DO FOR YOU" description="Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances." background_image="backgrounds/inner-services-bg.jpg" background_color="#E0F0F6" service_ids="1,2,4,5,6,11,12,13" shape_image="backgrounds/services-item-shape.png" style="style-2"][/services-list]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => $styleDetailPage,
            ],
            [
                'name' => 'Services 3',
                'content' => Html::tag('div', '[services-list title="The features that make our Service unique" badge="WHAT WE DO FOR YOU" description=" Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances." background_color="#F8FAFF" service_ids="1,2,4,5,6,7,8,9" style="style-3"][/services-list]') .
                    Html::tag('div', '[contact-block title="Let’s Request a Schedule For Free Consultation" hotline="1238989444" subtitle="Call For More Info" button_label="Contact Us" button_url="/contact" background_image="backgrounds/cta-bg02.png" style="style-2" enable_lazy_loading="yes"][/contact-block]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => $styleDetailPage,
            ],
            [
                'name' => 'Services 4',
                'content' => Html::tag('div', '[services-list title="We Make Better Insurance For Everyone" badge="OUR EXPERTISE AREAS" button_label="See All Service" link="/services" background_image="backgrounds/about-shape03.png" background_color="#E0F0F6" service_ids="1,2,3,4,5,6,8,9" style="style-4"][/services-list]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => $styleDetailPage,
            ],
            [
                'name' => 'Services 5',
                'content' => Html::tag('div', '[services-list title="We Make Better Insurance For Everyone" badge="OUR EXPERTISE AREAS" description=" Our comprehensive suite of services includes expert Business Analysis, Tax Strategy, and Financial Advice. We partner with you to optimize your financial decisions, ensuring long-term success and prosperity for your business and personal finances." button_label="See All Service" link="/services" limit="6" service_ids="1,2,4,6,8,9" style="style-5"][/services-list]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('div', '[brands quantity="5" name_1="Zelus" image_1="brands/brand-img04.png" link_1="https://zelus.com" name_2="The bird" image_2="brands/brand-img05.png" link_2="https://thebird.com" name_3="Nature Wave" image_3="brands/brand-img03.png" link_3="https://naturewave.com" name_4="Start" image_4="brands/brand-img01.png" link_4="https://start.com" name_5="Finance" image_5="brands/brand-img02.png" link_5="https://finance.com" style="style-1"][/brands]') .
                    Html::tag('br', '') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => $styleDetailPage,
            ],
            [
                'name' => 'Cookies',
                'content' => $privacyPolicyContent,
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Terms of service',
                'content' => $privacyPolicyContent,
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Privacy Policy',
                'content' => $privacyPolicyContent,
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Blog',
                'content' => '',
                'metadata' => $styleDetailPage,
                'template' => 'blog-sidebar',
            ],
            [
                'name' => 'Contact',
                'content' => Html::tag('div', htmlentities('[branch-offices title="Our Office Address" image="general/contact-img.jpg" quantity="2" title_1="USA Office" address_1="100 Wilshire Blvd, Suite 700 Santa<br>Monica, CA 90401, USA" phone_1="+1 (310) 620-8565" email_1="info@gmail.com" title_2="Australia Office" address_2="100 Wilshire Blvd, Suite 700 Santa<br>Monica, CA 90401, USA" phone_2="+1 (310) 620-8565" email_2="info@gmail.com"][/branch-offices]')) .
                    Html::tag('div', '[contact-form title="We Are Connected To Help Your Business!" subtitle="GET IN TOUCH" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." button_label="SUBMIT NOW" background_image="backgrounds/contact-bg.jpg" background_image_1="backgrounds/contact-shape.png"][/contact-form]') .
                    Html::tag('div', '[google-map address="Envato Level 3/551 Swanston St, Carlton VIC 3053, Australia"][/google-map]'),
                'template' => 'page-detail',
                'metadata' => array_merge(
                    ['pre_footer_sidebar_style' => 'none'],
                    $styleDetailPage,
                ),
            ],
            [
                'name' => 'Company',
                'content' => Html::tag('div', '[about-us-information title=" 25 Years Of Experience In This Finance Advisory Company" subtitle="GET TO KNOW US" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture.Borem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum." founded_year="1993" company_description="Of Experience in This Finance Advisory Company." quantity="4" title_1="100% Better Results" title_2="Suspe Ndisse Suscipit Sagittis" title_3="Promis Specific TimelineI Guarantee" title_4="Review Credit Reports" sub_description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture" author_name="Mark Stranger,CEO, Gerow Finance" author_bio="CEO, Gerow Finance" author_avatar="general/about-author.png" author_signature="general/signature.png" image="general/about-img01.png" image_1="general/about-img02.png" background_image_1="backgrounds/about-shape01.png" background_image_2="backgrounds/about-shape02.png" background_image_3="backgrounds/about-shape03.png"][/about-us-information]') .
                    Html::tag('div', '[company-overview title="We Prepare An Effective Strategy For Companies" subtitle="COMPANY OVERVIEW" description="Morem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elita Florai Psum Dolor Sit Amet, Consecteture." image="galleries/3.png" image_1="backgrounds/overview-img04.png" background_image="backgrounds/mask-img02.png" background_image_1="backgrounds/overview-shape01.png" background_image_2="backgrounds/overview-shape02.png" quantity="3" title_1="Consulting" data_1="85" title_2="Investment" data_2="76" title_3="Investment" data_3="90" style="style-2"][/company-overview]'),
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Case Studies',
                'content' => Html::tag('div', '[featured-services title="We can inspire and Offer Different Services" subtitle="WHAT WE DO FOR YOU" service_ids="1,2,3,4" button_label="See All Services" button_url="/services" background_image="backgrounds/about-shape03.png" style="style-3"][/featured-services]'),
                'template' => 'page-detail',
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'How It Work',
                'content' => Html::tag('div', '[about-us-information title="Best Digital Solution Provider Agency" subtitle="WHO WE ARE" description="When An Unknown Printer Took A Galley Of Type And Scrambled It Ake A Type Specimen Book. When An Unknown Printer Took A Galley Of Type And Scrambled It Ake." button_label="Take Our Service" button_url="/services" quantity="3" title_1="Digital Creative Agency" title_2="Professional Problem Solutions" title_3="Web Design & Development" image="general/inner-about-img05.png" image_1="backgrounds/about-shape07.png" background_image_1="backgrounds/banner-shape02.png" style="style-7"][/about-us-information]') .
                    Html::tag('br', '') .
                    Html::tag('br', ''),
                'template' => 'page-detail',
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Partners',
                'content' => Html::tag('div', '[about-us-information title="We are the next gen Business experience" subtitle="GET TO KNOW US" description="With Over 25 Years Of Experience, We Have Crafted Thousands Of Strategic Discovery Process That Enables Us To Peel Back Which Enable Us To Understand." quantity="2" title_1="Business Growth" description_1="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_1="flaticon-profit" title_2="Target Audience" description_2="Eiusmod Temporincididunt Ut Labore Magna Aliqua Quisery." icon_2="flaticon-mission" image="galleries/1.png" image_1="backgrounds/consulting-about-img02.png" background_image_1="backgrounds/mask-img.png" background_image_2="backgrounds/consulting-about-shape01.png" background_image_3="backgrounds/about-shape01.png" background_image_4="backgrounds/consulting-about-shape03.png" style="style-2"][/about-us-information]'),
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Pricing',
                'content' => Html::tag('div', '[pricing title="We’ve offered the best pricing for you" subtitle="FLEXIBLE PRICING PLAN" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." package_ids="1,2,3" background_image="backgrounds/pricing-shape.png"][/pricing]'),
                'template' => 'page-detail',
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Testimonials',
                'content' => Html::tag('div', '[testimonials testimonial_ids="1,2,3,4" image="general/testimonial-img.png" background_image="backgrounds/testimonial-bg1.png" style="style-2" enable_lazy_loading="yes"][/testimonials]'),
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'Projects',
                'content' => Html::tag('div', '[featured-projects style="style-1" project_ids="1,2,3,4,5,6,7,8,9" enable_lazy_loading="yes"][/featured-projects]'),
                'metadata' => $styleDefaultPage,
            ],
            [
                'name' => 'FAQs',
                'content' => Html::tag('div', '[faqs category_ids="1,2,3"][/faqs]') .
                    Html::tag('div', '[contact-form title="We Are Connected To Help Your Business!" subtitle="GET IN TOUCH" description="Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes." button_label="SUBMIT NOW" background_image="backgrounds/contact-bg.jpg" background_image_1="backgrounds/contact-shape.png"][/contact-form]'),
                'template' => 'page-detail',
                'metadata' => [
                    'header_style' => 'style-2',
                ],
            ],
            [
                'name' => 'Coming Soon',
                'content' => '[coming-soon title="Get Notified When We Launch" countdown_time="' . $this->now()->addDays(200)->toDateString() . '" address=" 58 Street Commercial Road Fratton, Australia" hotline="+123456789" business_hours="Mon – Sat: 8 am – 5 pm, Sunday: CLOSED" show_social_links="0,1" image="general/contact-img.jpg"][/coming-soon]',
                'template' => 'coming-soon',
            ],
        ];

        $this->createPages($pages);
    }
}
