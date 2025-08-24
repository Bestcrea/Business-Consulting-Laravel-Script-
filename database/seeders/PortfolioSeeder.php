<?php

namespace Database\Seeders;

use Botble\ACL\Models\User;
use Botble\Base\Facades\Html;
use Botble\Base\Facades\MetaBox;
use Botble\Base\Supports\BaseSeeder;
use Botble\Media\Facades\RvMedia;
use Botble\Portfolio\Enums\PackageDuration;
use Botble\Portfolio\Models\CustomField;
use Botble\Portfolio\Models\CustomFieldOption;
use Botble\Portfolio\Models\Package;
use Botble\Portfolio\Models\Project;
use Botble\Portfolio\Models\Service;
use Botble\Portfolio\Models\ServiceCategory;
use Botble\Slug\Facades\SlugHelper;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class PortfolioSeeder extends BaseSeeder
{
    public function run(): void
    {
        $this->uploadFiles('projects');
        $this->uploadFiles('services');

        ServiceCategory::query()->truncate();
        Service::query()->truncate();
        Package::query()->truncate();
        Project::query()->truncate();
        CustomField::query()->truncate();
        CustomFieldOption::query()->truncate();

        $fake = $this->fake();

        $serviceCategories = [
            [
                'name' => 'Financial Analysis',
                'metadata' => [
                    'icon' => 'flaticon-briefcase',
                ],
            ],
            [
                'name' => 'Tax Strategy',
                'metadata' => [
                    'icon' => 'flaticon-taxes',
                ],
            ],
            [
                'name' => 'Market Research',
                'metadata' => [
                    'icon' => 'flaticon-layers',
                ],
            ],
            [
                'name' => 'Business Strategy',
                'metadata' => [
                    'icon' => 'flaticon-investment',
                ],
            ],
        ];

        foreach ($serviceCategories as $index => $item) {
            $index++;

            $serviceCategory = ServiceCategory::query()->create(array_merge(Arr::except($item, ['metadata']), [
                'description' => $fake->text(400),
                'order' => $index,
            ]));

            if (isset($item['metadata'])) {
                foreach ($item['metadata'] as $key => $value) {
                    MetaBox::saveMetaBoxData($serviceCategory, $key, $value);
                }
            }

            SlugHelper::createSlug($serviceCategory);
        }

        $categoryIds = $serviceCategory::query()->pluck('id')->all();

        $services = [
            [
                'name' => 'Data Analyst',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Analyzes financial data, optimizing processes for efficiency and identifying profitability opportunities.',
                'image' => $this->filePath('services/1.png'),
                'images' => [$this->filePath('services/1.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.') .
                    Html::tag('div', '[content-rich-fields title="Quality Industrial Working" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('h2', 'Effective Leadership: Inspiring Your Team to Success', ['class' => 'title-two']) .
                    Html::tag('p', 'Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does Financial Planning involve?" description_1="Our Financial Planning services are designed to provide you with a comprehensive and customized financial roadmap. We begin by assessing your current financial situation, including income, expenses, assets, and liabilities. Based on your goals and aspirations, we develop a detailed plan that encompasses wealth management." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-briefcase',
                ],
            ],
            [
                'name' => 'Liability Planner',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Develops strategies to reduce tax burdens while maintaining legal compliance.',
                'image' => $this->filePath('services/3.png'),
                'images' => [$this->filePath('services/3.png')],
                'content' =>
                    Html::tag('h2', 'Investment Strategies for a Secure Financial Future', ['class' => 'title-two']) .
                    Html::tag('p', 'Gain insights into investment strategies that can help secure your financial future, whether for personal wealth or business growth.') .
                    Html::tag('div', '[content-rich-fields title="Resilience in Business: Adapting to Change and Challenges" description="Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges." left_image="galleries/1.png" quantity="4" title_1="Budget Friendly Theme" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="100% Better results" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Valuable Ideas" description_3="Finance Helps You To Convert Into A Strategic Asset Get." title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="Effective Networking for Business Professionals" description="Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach." left_image="services/4.png" right_image="general/about-img02.png" quantity="3" title_1="Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Helps You To Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Finance Helps You To Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-3"][/content-rich-fields]') .
                    Html::tag('p', 'when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-taxes',
                ],
            ],
            [
                'name' => 'Growth Planner',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Develops strategies for sustainable market expansion and business growth.',
                'image' => $this->filePath('services/4.png'),
                'images' => [$this->filePath('services/2.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="Effective Leadership: Inspiring Your Team to Success" description="Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('p', 'when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.') .
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('h2', 'Effective Leadership: Inspiring Your Team to Success', ['class' => 'title-two']) .
                    Html::tag('p', 'Dive into the qualities and strategies of effective leadership that inspire teams, foster growth, and achieve remarkable success.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does Financial Planning involve?" description_1="Our Financial Planning services are designed to provide you with a comprehensive and customized financial roadmap. We begin by assessing your current financial situation, including income, expenses, assets, and liabilities. Based on your goals and aspirations, we develop a detailed plan that encompasses wealth management." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-money',
                ],
            ],
            [
                'name' => 'Risk Manager',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Identifies and manages risks while aligning strategies with business goals.',
                'image' => $this->filePath('services/2.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('h2', 'How to Create a Winning Marketing Plan', ['class' => 'title-two']) .
                    Html::tag('p', 'Learn the essential steps and elements to craft a winning marketing plan that effectively reaches your target audience and drives results.') .
                    Html::tag('div', '[content-rich-fields title="Balancing Act: Work-Life Integration for Business Owners" description="Discover strategies for achieving work-life integration as a business owner, ensuring well-being and productivity in both spheres." left_image="galleries/1.png" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="The Impact of Sustainable Practices on Business Sustainability" description="Explore the positive impact of sustainable business practices on long-term sustainability, environmental responsibility, and brand reputation." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('p', 'when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-investment',
                ],
            ],
            [
                'name' => 'Retirement Planner',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Helps clients plan for a secure and comfortable retirement.',
                'image' => $this->filePath('services/4.png'),
                'images' => [$this->filePath('services/3.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how businesses can leverage technology to gain a competitive edge, streamline operations, and deliver exceptional value to customers. Explore the importance of building a strong employer brand to attract and retain top talent in a competitive job market.') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('h2', 'Measuring Success: Key Performance Indicators (KPIs) for Business', ['class' => 'title-two']) .
                    Html::tag('p', 'when an unknown printer took a galley of type and scrambled it to make a type specimen bookhas a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchan galley of type and scrambled it to make a type specimen book.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-data-management',
                ],
            ],
            [
                'name' => 'Risk Analyst',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Identifies potential risks and develops strategies to mitigate them.',
                'image' => $this->filePath('services/2.png'),
                'images' => [$this->filePath('services/2.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="Effective Networking for Business Professionals" description="Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach." left_image="galleries/1.png" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('p', 'Dive into effective sales strategies and tactics to maximize revenue and market share in a highly competitive business environment.') .
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('h2', 'The Human Factor: HR Best Practices for Businesses', ['class' => 'title-two']) .
                    Html::tag('p', 'Learn about HR best practices that promote a positive workplace culture, employee engagement, and overall business success.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-calculator',
                ],
            ],
            [
                'name' => 'Insurance Expert',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Advises on insurance solutions to protect against various risks.',
                'image' => $this->filePath('services/4.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('p', 'Gain insights into investment strategies that can help secure your financial future, whether for personal wealth or business growth. Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Effective Networking for Business Professionals" description="Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach." left_image="galleries/1.png" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-piggy-bank',
                ],
            ],
            [
                'name' => 'Budget Manager',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Ensures projects stay within budget constraints while meeting objectives.',
                'image' => $this->filePath('services/2.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('h2', 'Productivity Hacks for Busy Entrepreneurs', ['class' => 'title-two']) .
                    Html::tag('p', 'Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-layers',
                ],
            ],
            [
                'name' => 'Strategy Adviser',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Provides strategic guidance for enhancing competitiveness and profitability.',
                'image' => $this->filePath('services/1.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="Effective Networking for Business Professionals" description="Discover techniques and best practices for effective networking to build valuable connections and expand your professional reach." right_image="galleries/1.png" right_link="https://www.youtube.com/watch?v=JAiKnnb9dH8" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('h2', 'Productivity Hacks for Busy Entrepreneurs', ['class' => 'title-two']) .
                    Html::tag('p', 'Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-money',
                ],
            ],
            [
                'name' => 'Operations Expert',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Assists in optimizing business processes and operational efficiency.',
                'image' => $this->filePath('services/2.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('h2', 'Productivity Hacks for Busy Entrepreneurs', ['class' => 'title-two']) .
                    Html::tag('p', 'Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-handshake',
                ],
            ],
            [
                'name' => 'Profit Strategist',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Develops strategies to maximize profits and enhance overall financial performance.',
                'image' => $this->filePath('services/1.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Creating a Customer-Centric Brand Experience" description="Delve into the concept of creating a customer-centric brand experience that fosters loyalty and drives business success." right_image="galleries/1.png" right_link="https://www.youtube.com/watch?v=JAiKnnb9dH8" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('h2', 'Productivity Hacks for Busy Entrepreneurs', ['class' => 'title-two']) .
                    Html::tag('p', 'Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-development',
                ],
            ],

            [
                'name' => 'Objective Planner',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Sets clear and aligned business objectives to drive success and growth.',
                'image' => $this->filePath('services/2.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="The Power of Data Analytics in Business Decision-Making" description="Discover how data analytics can transform decision-making processes, drive innovation, and enhance competitiveness in today’s business world." right_image="galleries/1.png" quantity="6" title_1=" Growing Business" description_1="Finance Helps You To Convert Into A Strategic Asset Get." icon_1="flaticon-business-presentation" title_2="Finance Investment" description_2="Finance Investment Convert Into A Strategic Asset Get." icon_2="flaticon-investment" title_3="Tax Advisory" description_3="Tax Advisory Convert Into A Strategic Asset Get." icon_3="flaticon-taxes" style="style-2"][/content-rich-fields]') .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('h2', 'Building a Strong Employer Brand for Talent Acquisition', ['class' => 'title-two']) .
                    Html::tag('p', 'Explore the importance of building a strong employer brand to attract and retain top talent in a competitive job market.') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]')
                ,
                'metadata' => [
                    'icon' => 'flaticon-business-presentation',
                ],
            ],
            [
                'name' => 'Goal Specialist',
                'category_id' => Arr::random($categoryIds),
                'description' => 'Guides organizations in defining and achieving their strategic goals.',
                'image' => $this->filePath('services/3.png'),
                'images' => [$this->filePath('services/4.png')],
                'content' =>
                    Html::tag('h2', 'Productivity Hacks for Busy Entrepreneurs', ['class' => 'title-two']) .
                    Html::tag('p', 'Learn how resilience can be a powerful asset in business, enabling adaptability, growth, and the ability to overcome challenges.') .
                    Html::tag('div', '[content-rich-fields title="Creating a Customer-Centric Brand Experience" description="Delve into the concept of creating a customer-centric brand experience that fosters loyalty and drives business success." right_image="galleries/1.png" right_link="https://www.youtube.com/watch?v=JAiKnnb9dH8" quantity="4" title_1="100% Better results" description_1="Finance Helps You To Convert Into A Strategic Asset Get." title_2="Valuable Ideas" description_2="Finance Helps You To Convert Into A Strategic Asset Get. " title_3="Budget Friendly Theme" title_4="Happy Customers" style="style-1"][/content-rich-fields]') .
                    Html::tag('div', '[content-rich-fields title="Productivity Hacks for Busy Entrepreneurs" description="Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows." left_image="services/4.png" right_image="galleries/1.png" quantity="6" style="style-3"][/content-rich-fields]') .
                    Html::tag('div', '[content-collapse quantity="3" title_1="What does your Financial Analysis service entail?" description_1="Our Financial Analysis service is a comprehensive examination of your financial data and operations. We meticulously review your income statements, balance sheets, cash flow statements, and other financial records. We also assess your business processes, cost structures, and revenue streams." title_2="How can Financial Analysis benefit my business?" description_2="Financial Analysis can benefit your business in several ways. It offers a deep understanding of your financial health, helping you make informed decisions. By identifying cost-saving opportunities and revenue growth potential, it can significantly improve your bottom line. " title_3="What does Tax Strategy involve?" description_3="Our Tax Strategy services focus on optimizing your tax position while ensuring strict compliance with tax laws and regulations. We begin by conducting a thorough analysis of your financial records, transactions, and tax obligations."][/content-collapse]') .
                    Html::tag('p', 'Explore practical productivity hacks and time management strategies designed to help busy entrepreneurs optimize their workflows.')
                ,
                'metadata' => [
                    'icon' => 'flaticon-inspiration',
                ],
            ],
        ];

        foreach ($services as $item) {
            $service = Service::query()->create(array_merge(Arr::except($item, ['metadata']), [
                'is_featured' => $fake->boolean(),
                'views' => rand(0, 10000),
            ]));

            if (isset($item['metadata'])) {
                foreach ($item['metadata'] as $key => $value) {
                    MetaBox::saveMetaBoxData($service, $key, $value);
                }
            }

            SlugHelper::createSlug($service);
        }

        $packages = [
            [
                'name' => 'Basic Plan',
                'description' => 'Advanced features for pros who need more customization.',
                'price' => 19,
                'annual_price' => 119,
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 100 User Activities
                + Limit Access
                + No Hidden Charge
                + 01 Time Updates
                + Figma Source File
                + Many More Facilities
                HTML,
                'action_label' => 'Get The Plan Now',
                'action_url' => '/contact',
                'metadata' => [
                    'icon' => 'flaticon-rocket',
                ],
            ],
            [
                'name' => 'Team Plan',
                'description' => 'All the basics for businesses that are just getting started.',
                'price' => 49,
                'annual_price' => 499,
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 1000 User Activities
                + Unlimited Access
                + No Hidden Charge
                + 03 Time Updates
                + Figma Source File
                + Many More Facilities
                HTML,
                'action_label' => 'Get The Plan Now',
                'action_url' => '/contact',
                'is_popular' => true,
                'metadata' => [
                    'icon' => 'flaticon-inspiration',
                ],
            ],
            [
                'name' => 'Enterprise Plan',
                'description' => 'Advanced features for pros who need more customization.',
                'price' => 99,
                'annual_price' => 999,
                'duration' => PackageDuration::MONTHLY,
                'features' => <<<HTML
                + 5000 User Activities
                + Unlimited Access
                + No Hidden Charge
                + 10 Time Updates
                + Figma Source File
                + Many More Facilities
                HTML,
                'action_label' => 'Get The Plan Now',
                'action_url' => '/contact',
                'metadata' => [
                    'icon' => 'flaticon-briefcase',
                ],
            ],
        ];

        foreach ($packages as $item) {
            $package = Package::query()->create(array_merge(Arr::except($item, ['metadata']), [
                'price' => '$' . number_format($item['price']),
                'annual_price' => '$' . number_format($item['annual_price']),
                'content' => File::get(
                    database_path('seeders/contents/package.html')
                ),
            ]));

            if (isset($item['metadata'])) {
                foreach ($item['metadata'] as $key => $value) {
                    MetaBox::saveMetaBoxData($package, $key, $value);
                }
            }

            SlugHelper::createSlug($package);
        }

        $projects = [
            [
                'name' => 'Innovation Hub: Navigating the Future',
                'description' => 'Gain invaluable insights into strategic business planning and decision-making through our comprehensive program. Unlock the power of data-driven strategies for sustainable growth.',
                'author' => $this->fake()->name,
                'place' => 'Paris',
                'client' => 'Grace Williams',
                'image' => $this->filePath('projects/1.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Leadership Excellence Initiative',
                'description' => 'Join us at the Innovation Hub, where we explore cutting-edge technologies and trends shaping the future of business. Discover innovative solutions and stay ahead of the curve.',
                'author' => $this->fake()->name,
                'place' => 'USA',
                'client' => 'Michael Turner',
                'image' => $this->filePath('projects/2.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Startup Accelerator Program',
                'description' => 'Accelerate your startup’s growth with our intensive program. From idea to market entry, we provide mentorship, resources, and networking opportunities for success.',
                'author' => $this->fake()->name,
                'place' => 'Thailand',
                'client' => 'David Chen',
                'image' => $this->filePath('projects/3.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Marketing Mastery Series',
                'description' => 'Master the art of marketing with our comprehensive series. From branding to digital marketing, this series equips you with the skills to captivate your audience.',
                'author' => $this->fake()->name,
                'place' => 'Japan',
                'client' => 'Takashi Hamachi',
                'image' => $this->filePath('projects/4.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Illustration Design',
                'description' => $this->fake()->text(100),
                'author' => $this->fake()->name,
                'place' => 'USA',
                'client' => 'David Kane',
                'image' => $this->filePath('projects/5.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Design & Development',
                'description' => $this->fake()->text(100),
                'author' => $this->fake()->name,
                'place' => 'Canada',
                'client' => 'Franks Doe',
                'image' => $this->filePath('projects/6.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Marketing Consultancy',
                'description' => $this->fake()->text(100),
                'author' => $this->fake()->name,
                'place' => 'India',
                'client' => 'Alexander Kavas',
                'image' => $this->filePath('projects/7.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Digital Marketing',
                'description' => $this->fake()->text(100),
                'author' => $this->fake()->name,
                'place' => 'Brazil',
                'client' => 'Roby Elexa',
                'image' => $this->filePath('projects/8.png'),
                'start_date' => $this->fake()->date,
            ],
            [
                'name' => 'Strategic Planning',
                'description' => $this->fake()->text(100),
                'author' => $this->fake()->name,
                'place' => 'Thai Lan',
                'client' => 'Nicola Per',
                'image' => $this->filePath('projects/9.png'),
                'start_date' => $this->fake()->date,
            ],
        ];

        $content = str_replace(
            'services/',
            RvMedia::getImageUrl('services/'),
            File::get(
                database_path('seeders/contents/project.html')
            ),
        );

        foreach ($projects as $item) {
            $item['content'] = $content;
            $project = Project::query()->create($item);

            SlugHelper::createSlug($project);
        }

        $customFields = [
            [
                'name' => 'Type',
                'type' => 'dropdown',
                'options' => [
                    [
                        'label' => 'Home',
                        'value' => 'Home',
                    ],
                    [
                        'label' => 'Vehicles',
                        'value' => 'Vehicles',
                    ],
                    [
                        'label' => 'Health',
                        'value' => 'Health',
                    ],
                    [
                        'label' => 'Life',
                        'value' => 'Life',
                    ],
                ],
            ],
            [
                'name' => 'Price',
                'type' => 'number',
                'placeholder' => 'Enter price',
            ],
        ];

        foreach ($customFields as $item) {
            $customField = CustomField::query()->create(array_merge(Arr::except($item, 'options'), [
                'author_id' => 1,
                'author_type' => User::class,
                'required' => fake()->boolean(),
            ]));

            $customField->options()->createMany($item['options'] ?? []);
        }
    }
}
