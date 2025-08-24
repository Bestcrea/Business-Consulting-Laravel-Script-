<?php

namespace Database\Seeders;

use ArchiElite\Career\Models\Career;
use Botble\Base\Supports\BaseSeeder;
use Botble\Menu\Database\Traits\HasMenuSeeder;
use Botble\Page\Database\Traits\HasPageSeeder;
use Botble\Page\Models\Page;
use Botble\Portfolio\Models\Project;
use Botble\Portfolio\Models\Service;
use Botble\Team\Models\Team;

class MenuSeeder extends BaseSeeder
{
    use HasMenuSeeder;
    use HasPageSeeder;

    public function run(): void
    {
        $data = [
            [
                'name' => 'Main menu',
                'slug' => 'main-menu',
                'location' => 'main-menu',
                'items' => [
                    [
                        'title' => 'Home',
                        'children' => [
                            [
                                'title' => 'Finance',
                                'url' => '',
                            ],
                            [
                                'title' => 'Consulting',
                                'url' => '/consulting',
                            ],
                            [
                                'title' => 'Insurance',
                                'url' => '/insurance',
                            ],
                            [
                                'title' => 'Digital Agency',
                                'url' => '/digital-agency',
                            ],
                            [
                                'title' => 'Business',
                                'url' => '/business',
                            ],
                        ],
                    ],
                    [
                        'title' => 'About Us',
                        'url' => '/about',
                        'children' => [
                            [
                                'title' => 'About One',
                                'url' => '/about',
                            ],
                            [
                                'title' => 'About Two',
                                'url' => '/about-2',
                            ],
                            [
                                'title' => 'About Three',
                                'url' => '/about-3',
                            ],
                            [
                                'title' => 'About Four',
                                'url' => '/about-4',
                            ],
                            [
                                'title' => 'About Five',
                                'url' => '/about-5',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Page',
                        'url' => '#',
                        'children' => [
                            [
                                'title' => 'Careers',
                                'url' => '/careers',
                                'children' => [
                                    [
                                        'title' => 'Career Listing',
                                        'url' => '/careers',
                                    ],
                                    [
                                        'title' => 'Career Details',
                                        'url' => Career::query()->first()->url,
                                    ],
                                ],
                            ],
                            [
                                'title' => 'FAQs',
                                'url' => '/faqs',
                            ],
                            [
                                'title' => 'Services One',
                                'url' => '/services',
                                'children' => [
                                    [
                                        'title' => 'Services',
                                        'url' => '/services',
                                    ],
                                    [
                                        'title' => 'Services Two',
                                        'url' => '/services-2',
                                    ],
                                    [
                                        'title' => 'Services Three',
                                        'url' => '/services-3',
                                    ],
                                    [
                                        'title' => 'Services Four',
                                        'url' => '/services-4',
                                    ],
                                    [
                                        'title' => 'Services Five',
                                        'url' => '/services-5',
                                    ],
                                ],
                            ],
                            [
                                'title' => 'Service Details',
                                'url' => Service::query()->inRandomOrder()->first()->url,
                            ],
                            [
                                'title' => 'Team Details',
                                'url' => Team::query()->inRandomOrder()->first()->url,
                            ],
                            [
                                'title' => 'Project Details',
                                'url' => Project::query()->inRandomOrder()->first()->url,
                            ],
                            [
                                'title' => '404 Error',
                                'url' => '/404',
                            ],
                            [
                                'title' => 'Coming Soon',
                                'url' => '/coming-soon',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Blog',
                        'url' => '/blog',
                        'children' => [
                            [
                                'title' => 'Our Blog',
                                'url' => '/blog',
                            ],
                            [
                                'title' => 'Blog Details',
                                'url' => '/blog/balancing-act-work-life-integration-for-business-owners',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Contact',
                        'url' => '/contact',
                    ],
                ],
            ],

            [
                'name' => 'Company',
                'slug' => 'company',
                'items' => [
                    [
                        'title' => 'Mission & Vision',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Our Team',
                        'url' => '/our-team',
                    ],
                    [
                        'title' => 'Careers',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Press & Media',
                        'url' => '/services',
                    ],
                    [
                        'title' => 'Advertising',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Testimonials',
                        'url' => '/contact-us',
                    ],
                ],
            ],

            [
                'name' => 'Industries',
                'slug' => 'industries',
                'items' => [
                    [
                        'title' => 'Global coverage',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Distribution',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Accounting Tools',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Freight Recovery',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Supply Chain',
                        'url' => '/contact-us',
                    ],
                    [
                        'title' => 'Warehousing',
                        'url' => '/contact-us',
                    ],
                ],
            ],

            [
                'name' => 'Menu',
                'slug' => 'menu',
                'items' => [
                    [
                        'title' => 'Company',
                        'url' => '/company',
                    ],
                    [
                        'title' => 'Careers',
                        'url' => '/careers',
                    ],
                    [
                        'title' => 'Press Media',
                        'url' => '/galleries',
                    ],
                    [
                        'title' => 'Our Blog',
                        'url' => '/blog',
                    ],
                    [
                        'title' => 'Privacy Policy',
                        'url' => '/privacy-policy',
                    ],
                ],
            ],

            [
                'name' => 'Quick links',
                'slug' => 'quick-links',
                'items' => [
                    [
                        'title' => 'How it work',
                        'url' => 'how-it-work',
                    ],
                    [
                        'title' => 'Partners',
                        'url' => 'partners',
                    ],
                    [
                        'title' => 'Testimonials',
                        'url' => 'testimonials',
                    ],
                    [
                        'title' => 'Case Studies',
                        'url' => 'case-studies',
                    ],
                    [
                        'title' => 'Pricing',
                        'url' => 'pricing',
                    ],
                ],
            ],

            [
                'name' => 'Footer menu',
                'slug' => 'footer-menu',
                'location' => 'footer-menu',
                'items' => [
                    [
                        'title' => 'Privacy Policy',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Privacy Policy'),
                    ],
                    [
                        'title' => 'Cookies',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Cookies'),
                    ],
                    [
                        'title' => 'Terms of service',
                        'reference_type' => Page::class,
                        'reference_id' => $this->getPageId('Terms of service'),
                    ],
                ],
            ],
        ];

        $this->createMenus($data);
    }
}
