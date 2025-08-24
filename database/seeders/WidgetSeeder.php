<?php

namespace Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Widget\Models\Widget;
use Botble\Widget\Widgets\CoreSimpleMenu;
use Carbon\Carbon;

class WidgetSeeder extends BaseSeeder
{
    public function run(): void
    {
        Widget::query()->truncate();

        $widgetData = [
            'contact_form_widget' => [
                'id' => 'ContactFormWidget',
                'name' => 'Request a call back',
                'description' => 'Ever Find Yourself Staring At Your Computer Screen A Good Consulting Slogan To Come To Mind? Oftentimes',
                'background_image_1' => $this->filePath('backgrounds/shape01.png'),
                'background_image_2' => $this->filePath('backgrounds/shape02.png'),
            ],
            'brands_widget' => [
                'id' => 'BrandsWidget',
                'name_1' => 'Zelus',
                'logo_1' => $this->filePath('brands/brand-img04.png'),
                'link_1' => 'https://zelus.com',
                'name_2' => 'The bird',
                'logo_2' => $this->filePath('brands/brand-img05.png'),
                'link_2' => 'https://thebird.com',
                'name_3' => 'Nature Wave',
                'logo_3' => $this->filePath('brands/brand-img03.png'),
                'link_3' => 'https://naturewave.com',
                'name_4' => 'Finance',
                'logo_4' => $this->filePath('brands/brand-img02.png'),
                'link_4' => 'https://finance.com',
                'name_5' => 'Start',
                'logo_5' => $this->filePath('brands/brand-img01.png'),
                'link_5' => 'https://start.com',
                'name_6' => 'Zelus',
                'logo_6' => $this->filePath('brands/brand-img04.png'),
                'link_6' => 'https://zelus.com',
            ],
        ];

        $menuData = [
            [
                [
                    'key' => 'label',
                    'value' => 'Company',
                ],
                [
                    'key' => 'url',
                    'value' => '/company',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Careers',
                ],
                [
                    'key' => 'url',
                    'value' => '/careers',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Press Media',
                ],
                [
                    'key' => 'url',
                    'value' => '/galleries',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Our Blog',
                ],
                [
                    'key' => 'url',
                    'value' => '/blog',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Privacy Policy',
                ],
                [
                    'key' => 'url',
                    'value' => '/privacy-policy',
                ],
            ],
        ];

        $menuQuickLinksData = [
            [
                [
                    'key' => 'label',
                    'value' => 'How it work',
                ],
                [
                    'key' => 'url',
                    'value' => '/how-it-work',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Partners',
                ],
                [
                    'key' => 'url',
                    'value' => '/partners',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Testimonials',
                ],
                [
                    'key' => 'url',
                    'value' => '/testimonials',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Case Studies',
                ],
                [
                    'key' => 'url',
                    'value' => '/case-studies',
                ],
            ],
            [
                [
                    'key' => 'label',
                    'value' => 'Pricing',
                ],
                [
                    'key' => 'url',
                    'value' => '/pricing',
                ],
            ],
        ];

        $data = [
            [
                'widget_id' => 'ContactInfoWidget',
                'sidebar_id' => 'header_top_sidebar_style_1',
                'position' => 0,
                'data' => [
                    'id' => 'ContactInfoWidget',
                    'address' => '1247/Plot No. 39, 15th Phase, Kanpur',
                    'email' => 'contact@example.com',
                ],
            ],
            [
                'widget_id' => 'SocialLinksWidget',
                'sidebar_id' => 'header_top_sidebar_style_1',
                'position' => 1,
                'data' => [
                    'id' => 'SocialLinksWidget',
                    'button_label' => 'Free Consulting',
                    'button_url' => '/contact',
                ],
            ],
            [
                'widget_id' => 'HeaderActionButtonWidget',
                'sidebar_id' => 'header_top_sidebar_style_1',
                'position' => 2,
                'data' => [
                    'content' => 'Free Consulting',
                    'link' => '/contact',
                    'icon' => 'flaticon-briefcase',
                ],
            ],
            [
                'widget_id' => 'SiteInformationWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'SiteInformationWidget',
                    'title' => 'Information',
                    'logo' => null,
                    'description' => 'When An Unknown Printer Took A Galley Of Type Aawer Awtnd Scrambled It To Make A Type Specimen Book.',
                    'hotline' => '+123456789',
                    'opening_hours' => 'Mon – Sat: 8 am – 5 pm, <br> Sunday: <span>CLOSED</span>',
                ],
            ],
            [
                'widget_id' => CoreSimpleMenu::class,
                'sidebar_id' => 'footer_sidebar',
                'position' => 1,
                'data' => [
                    'id' => CoreSimpleMenu::class,
                    'name' => 'Menu',
                    'items' => $menuData,
                ],
            ],
            [
                'widget_id' => CoreSimpleMenu::class,
                'sidebar_id' => 'footer_sidebar',
                'position' => 2,
                'data' => [
                    'id' => CoreSimpleMenu::class,
                    'name' => 'Quick Links',
                    'items' => $menuQuickLinksData,
                ],
            ],
            [
                'widget_id' => 'NewsletterWidget',
                'sidebar_id' => 'footer_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'NewsletterWidget',
                    'name' => 'Our Newsletters',
                    'description' => '📩 Stay in the Loop: Sign Up for Our Newsletter! 📩',
                ],
            ],
            [
                'widget_id' => 'SiteCopyrightWidget',
                'sidebar_id' => 'footer_bottom',
                'position' => 0,
                'data' => [
                    'id' => 'SiteCopyrightWidget',
                    'name' => 'Site Copyright',
                    'copyright' => sprintf('© %d Botble Technologies. All right reserved.', Carbon::now()->format('Y')),
                ],
            ],
            [
                'widget_id' => 'ContactFormWidget',
                'sidebar_id' => 'pre_footer_sidebar',
                'position' => 0,
                'data' => $widgetData['contact_form_widget'],
            ],
            [
                'widget_id' => 'SidebarInformationWidget',
                'sidebar_id' => 'side_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'SidebarInformationWidget',
                    'name' => 'Site Copyright',
                    'address' => '123/A, Miranda City Likaoli <br/> Prikano, Dope',
                    'phone_number' => '+0989 7876 9865 9 <br/> +(090) 8765 86543 85',
                    'email' => 'info@example.com <br/> example.mail@hum.com',
                ],
            ],
            [
                'widget_id' => 'GalleriesWidget',
                'sidebar_id' => 'side_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'GalleriesWidget',
                    'name' => 'Galleries Widget',
                    'gallery_id' => 3,
                ],
            ],
            [
                'widget_id' => 'ContactInfoWidget',
                'sidebar_id' => 'header_top_sidebar_style_2',
                'position' => 0,
                'data' => [
                    'id' => 'ContactInfoWidget',
                    'address' => '256 Avenue, Mark Street, New York City',
                    'email' => 'gerow@gmail.com',
                ],
            ],
            [
                'widget_id' => 'SocialLinksWidget',
                'sidebar_id' => 'header_top_sidebar_style_2',
                'position' => 1,
                'data' => [
                    'id' => 'SocialLinksWidget',
                    'content' => '+123 8989 444',
                    'icon' => 'flaticon-phone-call',
                ],
            ],
            [
                'widget_id' => 'HeaderLogoWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 0,
                'data' => [
                    'id' => 'HeaderLogoWidget',
                    'logo_image' => null,
                ],
            ],
            [
                'widget_id' => 'HeaderMainMenuWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 1,
                'data' => [
                    'direction' => 'left',
                ],
            ],
            [
                'widget_id' => 'HeaderActionContactWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 3,
                'data' => [
                    'content' => 'Hotline Number',
                    'detail' => '+123 8989 444',
                    'icon' => 'flaticon-phone-call',
                ],
            ],
            [
                'widget_id' => 'HeaderActionSearchWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 4,
                'data' => [],
            ],
            [
                'widget_id' => 'HeaderActionMenuButtonWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 5,
                'data' => [],
            ],
            [
                'widget_id' => 'HeaderLogoWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 0,
                'data' => [
                    'id' => 'HeaderLogoWidget',
                    'logo_image' => null,
                ],
            ],
            [
                'widget_id' => 'HeaderMainMenuWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 1,
                'data' => [
                    'direction' => 'center',
                ],
            ],
            [
                'widget_id' => 'HeaderActionSearchWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 3,
                'data' => [],
            ],
            [
                'widget_id' => 'HeaderActionMenuButtonWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 4,
                'data' => [],
            ],
            [
                'widget_id' => 'HeaderActionContactWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 5,
                'data' => [
                    'content' => 'Hotline Number',
                    'detail' => '+123 8989 444',
                    'icon' => 'flaticon-phone-call',
                ],
            ],
            [
                'widget_id' => 'HeaderLogoWidget',
                'sidebar_id' => 'header_style_3',
                'position' => 0,
                'data' => [
                    'id' => 'HeaderLogoWidget',
                    'logo_image' => null,
                ],
            ],
            [
                'widget_id' => 'HeaderMainMenuWidget',
                'sidebar_id' => 'header_style_3',
                'position' => 1,
                'data' => [
                    'direction' => 'center',
                ],
            ],
            [
                'widget_id' => 'HeaderActionSearchWidget',
                'sidebar_id' => 'header_style_3',
                'position' => 3,
                'data' => [],
            ],
            [
                'widget_id' => 'HeaderActionButtonWidget',
                'sidebar_id' => 'header_style_3',
                'position' => 4,
                'data' => [
                    'content' => 'GET A QUOTE',
                    'link' => '/contact',
                ],
            ],
            [
                'widget_id' => 'BlogSearchWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'BlogSearchWidget',
                    'name' => 'Blog Search',
                ],
            ],
            [
                'widget_id' => 'BlogCategoriesWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'BlogCategoriesWidget',
                    'name' => 'Blog Categories',
                ],
            ],
            [
                'widget_id' => 'BlogPostsWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'BlogPostsWidget',
                    'name' => 'Blog Posts',
                    'type' => 'recent',
                    'limit' => 5,
                ],
            ],
            [
                'widget_id' => 'BlogTagsWidget',
                'sidebar_id' => 'blog_sidebar',
                'position' => 3,
                'data' => [
                    'id' => 'BlogTagsWidget',
                    'name' => 'Blog Tags',
                ],
            ],
            [
                'widget_id' => 'SiteInformationWidget',
                'sidebar_id' => 'footer_sidebar_style_1',
                'position' => 0,
                'data' => [
                    'id' => 'SiteInformationWidget',
                    'title' => 'Information',
                    'description' => 'When An Unknown Printer Took A Galley Of Type Aawer Awtnd Scrambled It To Make A Type Specimen Book.',
                    'logo' => null,
                    'address' => '58 Street Commercial Road Fratton, Australia',
                    'hotline' => '+123456789',
                    'opening_hours' => 'Mon – Sat: 8 am – 5 pm, <br> Sunday: <span>CLOSED</span>',
                ],
            ],
            [
                'widget_id' => CoreSimpleMenu::class,
                'sidebar_id' => 'footer_sidebar_style_1',
                'position' => 1,
                'data' => [
                    'id' => CoreSimpleMenu::class,
                    'name' => 'Menu',
                    'items' => $menuData,
                ],
            ],
            [
                'widget_id' => CoreSimpleMenu::class,
                'sidebar_id' => 'footer_sidebar_style_1',
                'position' => 2,
                'data' => [
                    'id' => CoreSimpleMenu::class,
                    'name' => 'Quick Links',
                    'items' => $menuQuickLinksData,
                ],
            ],
            [
                'widget_id' => 'NewsletterWidget',
                'sidebar_id' => 'footer_sidebar_style_1',
                'position' => 3,
                'data' => [
                    'id' => 'NewsletterWidget',
                    'name' => 'Our Newsletters',
                    'description' => 'Add A Newsletter To Your Widget Area.',
                ],
            ],
            [
                'widget_id' => 'SiteCopyrightWidget',
                'sidebar_id' => 'footer_bottom_style_1',
                'position' => 0,
                'data' => [
                    'id' => 'SiteCopyrightWidget',
                    'name' => 'Site Copyright',
                    'logo' => $this->filePath('general/logo-white.png'),
                    'copyright' => sprintf('© %d Botble Technologies. All right reserved.', Carbon::now()->year),
                    'style' => 'style-1',
                ],
            ],
            [
                'widget_id' => 'SocialLinksWidget',
                'sidebar_id' => 'footer_bottom_style_1',
                'position' => 1,
                'data' => [
                    'id' => 'SocialLinksWidget',
                    'name' => 'Social Links',
                ],
            ],
            [
                'widget_id' => 'ServicesListWidget',
                'sidebar_id' => 'service_detail_sidebar',
                'position' => 0,
                'data' => [
                    'id' => 'ServicesListWidget',
                    'title' => 'Our Services',
                    'limit' => '7',
                    'style' => 'style-1',
                ],
            ],
            [
                'widget_id' => 'ServiceActionWidget',
                'sidebar_id' => 'service_detail_sidebar',
                'position' => 1,
                'data' => [
                    'id' => 'ServiceActionWidget',
                    'title' => 'If You Need Any Help Contact Us',
                    'label' => ' +91 705 2101 786',
                    'link' => 'tel:0123456789',
                    'button_color' => '0055ff',
                    'icon' => 'flaticon-phone-call',
                    'background_color' => '#334770',
                ],
            ],
            [
                'widget_id' => 'ServiceGetAQuoteWidget',
                'sidebar_id' => 'service_detail_sidebar',
                'position' => 2,
                'data' => [
                    'id' => 'ServiceGetAQuoteWidget',
                    'title' => 'Get A Free Quote',
                ],
            ],
            [
                'widget_id' => 'BrandsWidget',
                'sidebar_id' => 'service_detail_bottom_sidebar',
                'position' => 0,
                'data' => $widgetData['brands_widget'],
            ],
            [
                'widget_id' => 'BrandsWidget',
                'sidebar_id' => 'project_detail_bottom_sidebar',
                'position' => 0,
                'data' => $widgetData['brands_widget'],
            ],
            [
                'widget_id' => 'ContactFormWidget',
                'sidebar_id' => 'pre_footer_sidebar_1',
                'position' => 0,
                'data' => $widgetData['contact_form_widget'],
            ],
            [
                'widget_id' => 'BrandsWidget',
                'sidebar_id' => 'pre_footer_sidebar_1',
                'position' => 1,
                'data' => $widgetData['brands_widget'],
            ],
            [
                'widget_id' => 'LanguageSwitcherWidget',
                'sidebar_id' => 'header_style_1',
                'position' => 2,
                'data' => [
                    'id' => 'LanguageSwitcherWidget',
                    'name' => 'Language switcher',
                ],
            ],
            [
                'widget_id' => 'LanguageSwitcherWidget',
                'sidebar_id' => 'header_style_2',
                'position' => 2,
                'data' => [
                    'id' => 'LanguageSwitcherWidget',
                    'name' => 'Language switcher',
                ],
            ],
            [
                'widget_id' => 'LanguageSwitcherWidget',
                'sidebar_id' => 'header_style_3',
                'position' => 2,
                'data' => [
                    'id' => 'LanguageSwitcherWidget',
                    'name' => 'Language switcher',
                ],
            ],
        ];

        foreach ($data as $item) {
            $item['theme'] = Widget::getThemeName();

            Widget::query()->create($item);
        }
    }
}
